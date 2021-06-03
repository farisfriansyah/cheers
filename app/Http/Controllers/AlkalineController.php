<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AlkalineController extends Controller
{
    public function getAPI($table)
    {
        return app('App\Http\Controllers\HomeController')->getAPI($table);
    }

    public function index(Request $req)
    {   
        $url    = $req->segment(1);
        $head   = Self::getAPI('product/byURL/'.$url);
        $detail = Self::getAPI('product/detail/'.$url); 
        $sesslocale = $req->session()->get('locale');
        $currlocale = App::currentLocale();
        if(empty($sesslocale)){
            $locale = $currlocale;
        }
        else{
            $locale = $sesslocale;
        }
        return view('cheers-alkaline', compact('head','detail','locale'));
    }
}
