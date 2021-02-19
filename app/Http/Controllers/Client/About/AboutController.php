<?php

namespace App\Http\Controllers\Client\About;

use App\Page;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    
   
    /**
     * About page
     */
    public function aboutPresentation() {

        $page = Page::where('title', '=', 'présentation')->first();            
        $contents = Article::where(['page_id' => $page->id, 'is_active' => true])->get();
        //dd($contents);
        return view('client.about.presentation')->with(['contents' => $contents]);
    }

    public function aboutStaff() {
        $page = Page::where('title', '=', 'équipe')->first();           
        $contents = Article::where(['page_id' => $page->id, 'is_active' => true])->get();

        return view('client.about.staff')->with(['contents' => $contents]);
    }
       
}
