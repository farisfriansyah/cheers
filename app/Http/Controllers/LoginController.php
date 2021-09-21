<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index()
    {   
        $title = 'Login';
        $description = 'Login membership Cheers';

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);

        OpenGraph::setTitle($title);
        OpenGraph::setDescription($description);
        OpenGraph::setUrl('https://www.saycheers.com/login');

        TwitterCard::setTitle($title);
        TwitterCard::setSite('@CheersWater');

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);
        return view('login');
    }

    public function check_login(Request $req)
    {
        $id     = $req->input('id');
        $pass   = $req->input('password');
        
        $result = RegistrationModel::checking('id',$id);
        if($result->count() > 0){
            if($pass == Crypt::decrypt($result[0]->password)){
                return array(true,$id);
            }
            else{
                $error = 'Password is invalid';
                return array(false,$error);
            }
        }
        else{
            $error = 'User is not found';
            return array(false,$error);
        }
    }

    public function do_login(Request $req)
    {
        $id     = $req->input('id');
        return Redirect::to('http://membership.saycheers.com/saycheers/'.$id);
    }
}
