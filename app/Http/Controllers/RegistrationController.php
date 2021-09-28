<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Models\RegistrationModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

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

    public function check_unique(Request $req)
    {
        $where = $req->input('where');
        $value = $req->input('value');
        $data = RegistrationModel::checking($where,$value);
        return $data->count();
    }

    public function bulans($search)
    {
        $arr = array(
            '01' => 'Jan',
            '02' => 'Feb',
            '03' => 'Mar',
            '04' => 'Apr',
            '05' => 'May',
            '06' => 'Jun',
            '07' => 'Jul',
            '08' => 'Aug',
            '09' => 'Sep',
            '10' => 'Oct',
            '11' => 'Nov',
            '12' => 'Dec' 
        );

        return array_search($search,$arr);
    }
    
    public function birth_date($tgl)
    {
        $exp    = explode(" ",$tgl);
        return $exp[2]."-".Self::bulans($exp[1])."-".$exp[0]; 
    }

    public function do_register(Request $req)
    {
        // dd($req['_token']);
        unset($req['_token']);
        $id = $req['id'];
        $req['birthdate'] = Self::birth_date($req['birthdate']);
        $req['ks_temp']   = $req['password'];
        $req['password']  = Crypt::encrypt($req['password']);
        $result = RegistrationModel::do_regis($req->all());
        // return $result;
        if($result[0]){
            // return Redirect::to('http://membership.saycheers.com/detail');
            $response   = Http::post('http://membership.saycheers.com/membership/saycheers', 
                array('id'=> $id)
            );
            return $response;
        }

    }
}
