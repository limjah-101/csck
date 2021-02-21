<?php

namespace App\Http\Controllers\Client;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SharedController extends Controller
{
    /**
     * news page
     */
    public function homePage() {
        return view('client.home');
    }


    /**
     * news page
     */
    public function newsUpcoming() {
        return view('client.news.upcoming')->with(['title' => 'Évènements à venir']);
    }

    /**
     * dragon_ladies page
     */
    public function dragonLadies() {
        $page = Page::where('title', '=', 'pagaie santé')->first();
        $contents = $page->articles->where('is_active', true);
        
        
        return view('client.dragon_ladies.dragon_ladies')->with(['contents' => $contents, 'title' => 'Dragon Boat']);
    }

}
