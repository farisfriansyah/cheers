<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class NaturalController extends Controller
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

        foreach ($head as $seop2) {
            $title = $seop2['name'];
            $description = $seop2['subtitle_id'];

            SEOMeta::setTitle($title);
            SEOMeta::setDescription($description);

            OpenGraph::setTitle($title);
            OpenGraph::setDescription($description);
            OpenGraph::setUrl('https://www.saycheers.com/'.$url);
            OpenGraph::addProperty('type', 'articles');

            TwitterCard::setTitle($title);
            TwitterCard::setSite('@CheersWater');

            JsonLd::setTitle($title);
            JsonLd::setDescription($description);
        }
        
        return view('cheers-natural', compact('head','detail','locale'));
    }
}
