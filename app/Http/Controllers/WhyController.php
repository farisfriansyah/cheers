<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Illuminate\Http\Request;

class WhyController extends Controller
{
    public function index()
    {   
        $title = 'Why Cheers?';
        $description = 'CHEERS Healthy Drinking Water dikemas secara higienis tanpa kandungan bahan kimia, dan ramah lingkungan. Minumlah Cheers Healthy Drinking Water minimal 8 gelas setiap harinya, nikmati kesegaran dan kealamiannya.';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl('https://www.saycheers.com/why-cheers');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@CheersWater');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);

        return view('whycheers');
    }
}
