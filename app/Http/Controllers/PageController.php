<?php

namespace App\Http\Controllers;

use App\Page;

use App\Article;
use Illuminate\Http\Request;
use Behat\Transliterator\Transliterator;
use PDF;

class PageController extends Controller
{
    private $pages;

    public function __construct() {
        
        $this->pages = Page::all();
    }
   
    /**
     * 
     */
    public function all() {
        
        $activePages = Page::where('is_active', true)->get();
        $unActivePages = Page::where('is_active', false)->get();
        return view('admin.pages.all')->with(['activePages' => $activePages, 'unActivePages' => $unActivePages] );
    }

    /**
     * @
     */
    public function store(Request $request) {

        if ($request->exists('page_create')) {
            
            $this->validate($request, [
                'title' => 'required'
            ], ['title.required' => 'Obligatoire']);
                        
            $page = new Page();
            $page->title = $request->title;
            $page->subtitle = $request->subtitle ?? '_';
            $page->body = $request->body ?? '_';            
            $page->url = $request->url ?? '_';
            $page->is_active = $request->is_active === 'on' ? true : false;
            $page->save();

            return redirect()->route('page.all');
        }
        
        return view('admin.pages.create')->with('pages', $this->pages);            
    }


    /**
     * 
     */
    public function show(Page $page) {

        $activeArticles = Article::where('is_active', true)
            ->where('page_id', $page->id)
            ->get();

        $unActivatedArticles = Article::where('is_active', false)
                ->where('page_id', $page->id)
                ->get();


        return view('admin.pages.show')->with([
            'page' => $page, 'pages' => $this->pages, 
            'activeArticles' => $activeArticles,
            'unActivatedArticles' => $unActivatedArticles
        ]);
    }


    /**
     * 
     */
    public function edit(Request $request, Page $page) {

        if ($request->exists('page_edit')) {            
            $page->update([
                'title'     => $request->title,
                'subtitle'  => $request->subtitle ?? '_',
                'body'   => $request->body ?? '_',
                // 'method'    => trim(Transliterator::unaccent($request->url)),
                'url'       => $request->url ?? '_',
                'is_active' => $request->is_active === 'on' ? true : false
            ]);            

            return redirect()->route('page.all');
        }
        return view('admin.pages.edit', compact('page'));
    }


    /**
     * 
     */
    public function delete(Page $page) {

        $page->delete();
        return redirect()->back();
    }

    /**
     * 
     */
    public function toggleActive(Page $page) {        
        
        $page->update([               
            'is_active' => !$page->is_active
        ]);            
        
        return redirect()->route('page.all');
    }

    /**
     * 
     */
    public function exportArticles() {
        $activePages = Page::where('is_active', true)->get();
        

        view()->share( 'activePages', $activePages );

        $pdf = PDF::loadView('admin.articles.article_pdf', $activePages);
       
        return $pdf->download('test.pdf');
    }


}
