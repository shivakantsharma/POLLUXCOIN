<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newletter;

class IndexController extends Controller
{
    //
    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.service');
    }

    public function miningPlan(){
        return view('pages.pricing-table');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function contact(){
        return view('pages.contact');
    }
    public function subscribe(Request $req){
        $newletter = new Newletter;
        $newletter->email =$req->email;
        $newletter->save();
        return 1;
    }
    
}
