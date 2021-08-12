<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
        $title = 'Kontak Kami';
        $description = 'Kunjungi situs kami dan bicarakan kebutuhan air minum Anda dengan tim kami. Mulai dari kebutuhan sehari-hari sampai persediaan lama. Cheers Alkaline Water akan menghidrasi kebutuhan air minum Anda.';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl('https://www.saycheers.com/contact');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@CheersWater');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);

        return view('contact');
    }
}
