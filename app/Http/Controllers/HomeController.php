<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    protected $local,$defPage_feelsgreat,$defPage_storyofWeek;

    public function __construct(Request $req) 
    {
        $sesslocale = $req->session()->get('locale');
        $currlocale = App::currentLocale();

        if(empty($sesslocale)){
            $this->local = $currlocale;
        }
        else{
            $this->local = $sesslocale;
        }     

        $this->defPage_feelsgreat   = 1;
        $this->defPage_storyofWeek  = 4;
    }

    public static function getAccess($backend)
    {
        $response = Http::post($backend.'getAccess', [
            'email'     => 'it@mikatasa',
            'password'  => 'mikatasagroup@2021',
        ]);

        return $response->json();
    }

    public static function getAPI($table)
    {
        $backend    = 'https://admin.mikatasagroup.com/api/';
        $response   = Self::getAccess($backend);
        $result     = $response['result'];
        $data       = $response['data'];
        if($result == '200'){
            $hasil   = Http::withToken($data)->get($backend.'cheers/'.$table);
            return $hasil->json();
        }
        else{
            return $data;
        }
    }

    public function index()
    {   
        $data   = Self::getAPI('home');
        
        $locale = $this->local;
        return view('welcome', compact('data','locale'));
    }
}
