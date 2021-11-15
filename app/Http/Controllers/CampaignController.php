<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Illuminate\Http\Request;

class CampaignController extends Controller
{   
    public function getAPI($table)
    {
        return app('App\Http\Controllers\HomeController')->getAPI($table);
    }
    public function index(Request $req)
    {   
        $sesslocale = $req->session()->get('locale');
        $currlocale = App::currentLocale();
        if(empty($sesslocale)){
            $locale = $currlocale;
        }
        else{
            $locale = $sesslocale;
        }
        $campaigns = Self::getAPI('campaign');
        
        $title = 'Campaign';
        $description = 'Campaigns yang diselenggarakan Cheers';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl('https://www.saycheers.com/campaign');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@CheersWater');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);

        return view('campaign', compact('campaigns','locale'));
    }
}
