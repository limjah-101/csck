<?php

namespace App\Http\Controllers\Client\Activity;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
       
    /**
     * Activities page
     */
   
    public function activityJoin() {        
        
        return view('client.activity.join');
    }

    public function activityPlanning() {        
        
        return view('client.activity.planning');
    }

    public function activityLoan() {        
        
        return view('client.activity.loan');
    }

}
