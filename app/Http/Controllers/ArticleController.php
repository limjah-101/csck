<?php

namespace App\Http\Controllers;

use App\Page;
use App\Article;
use Illuminate\Http\Request;
use PDF;

class ArticleController extends Controller
{
    public function all() {

        $activeArticles = Article::where('is_active', true)->get();        

        return view('article.all', compact('activeArticles', 'unActivatedArticles'));
    }

    /**
     * @
     */
    public function store(Request $request) {

        if ($request->exists('article_create')) {
            //dd($request->all());
            $this->validate($request, [
                'title' => 'required'
            ], ['title.required' => 'Ce champ est obligatoire']);
                        
            $article = new Article();
            $article->page_id = $request->page_id;
            $article->title = ucfirst($request->title);
            $article->subtitle1 = $request->subtitle1 ?? '_';
            $article->subtitle2 = $request->subtitle2 ?? '_';
            $article->body = $request->body ?? '_';
            $article->listItem1 = $request->listItem1 ?? '_';
            $article->listItem2 = $request->listItem2 ?? '_';
            $article->listItem3 = $request->listItem3 ?? '_';
            $article->listItem4 = $request->listItem4 ?? '_';
            $article->image = $request->image ?? '_';                      
            $article->is_active = $request->is_active === 'on' ? true : false;
            $article->save();

            return redirect()->back()->with('success', 'Le contenu a bien été ajouté!!');
        }
        
        return view('admin.articles.create');            
    }


    /**
     * 
     */
    public function show($page_id) {
        
        $page = Page::find($page_id);

        return view('admin.articles.create', compact('page'));
    }


    /**
     * 
     */
    public function edit(Request $request, Article $article) {

        if ($request->exists('article_edit')) {            
            $article->update([
                'title'     => ucfirst($request->title),
                'subtitle1'  => $request->subtitle1 ?? '_',
                'subtitle2'  => $request->subtitle2 ?? '_',
                'body'  => $request->body ?? '_',
                'listItem1'   => $request->listItem1 ?? '_',
                'listItem2'   => $request->listItem2 ?? '_',
                'listItem3'   => $request->listItem3 ?? '_',
                'listItem4'   => $request->listItem4 ?? '_',                             
                'is_active' => $request->is_active === 'on' ? true : false
            ]);            

            return redirect()->route('page.show', $article->page_id)->with('success', 'Modification bien enregistré!');
        }
        return view('admin.articles.edit', compact('article'));
    }


    /**
     * 
     */
    public function delete(Article $article) {

        $article->delete();
        return redirect()->back();
    }

    /**
     * 
     */
    public function toggleActive(Article $article) {        
        
        $article->update([               
            'is_active' => !$article->is_active
        ]);            
        // Todo redirect to page id ?? 
        return redirect()->back();
    }

    
}
