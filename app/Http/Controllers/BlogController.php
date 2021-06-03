<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
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

        $this->defPage_feelsgreat   = 3;
        $this->defPage_storyofWeek  = 4;
    }

    public function getAPI($table)
    {
        return app('App\Http\Controllers\HomeController')->getAPI($table);
    }

    public function index(Request $req)
    {
        $blogs = Self::getAPI('blog');   
   
        // FEELS GREAT
        $great = Self::paginate($blogs['great'],$this->defPage_feelsgreat,null,['path' => url('blog/feels-great/')]);
        // STORY OF THE WEEK
        $story = Self::paginate($blogs['story'],$this->defPage_storyofWeek,null,['path' => url('blog/story-of-the-week/')]);
        // TRENDING
        $trending = $blogs['trending'];

        $locale = $this->local;

        return view('blog.index', compact('great','story','trending','locale'));
    }

    public function paginate($items, $perPage, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function blog_page(Request $req)
    {
        $uri1 = $req->segment(2);
        $page = $req->page;
        
        $blogs = Self::getAPI('blog');
        $path = url('blog/'.$uri1.'/');
        if($uri1 == 'feels-great'){
            $great = Self::paginate($blogs['great'],$this->defPage_feelsgreat,$page,['path' => $path]);
            $story = Self::paginate($blogs['story'],$this->defPage_storyofWeek,1,['path' => $path]);
        }
        else{
            $great = Self::paginate($blogs['great'],$this->defPage_feelsgreat,1,['path' => $path]);
            $story = Self::paginate($blogs['story'],$this->defPage_storyofWeek,$page,['path' => $path]);
        }
        $trending = $blogs['trending'];
        $locale = $this->local;

        return view('blog.index', compact('great','story','trending','locale'));
    }

    public function view(Request $req)
    {   
        $uri2 = $req->segment(3);
        $id   = $req->id;
        
        $blogs      = Self::getAPI('blog');  
        $data       = Self::getAPI('blog/'.$uri2.'/'.$id);
        $trending   = $blogs['trending'];
        $locale     = $this->local;

        return view('blog.view',compact('data','locale','trending'));
    }
}
