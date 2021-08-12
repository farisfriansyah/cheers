<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {   
        $title = 'Registration';
        $description = 'Daftar membership Cheers';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl('https://www.saycheers.com/registration');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@CheersWater');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);

        return view('registration');
    }
}
