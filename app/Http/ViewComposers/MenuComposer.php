<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\HomeModel;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\HomeController;

class MenuComposer
{
    public function compose(View $view)
    {
        // $category = HomeController::getAPI('categories');
        $products = HomeController::getAPI('product');
        // $baseurl  = 'http://localhost/takaadmin/public/storage/';
        $baseurl = 'https://admin.mikatasagroup.com/storage/app/public/';

        $view
            // ->with('category',$category)
            ->with('products', $products)
            ->with('baseurl',$baseurl);
    }
}