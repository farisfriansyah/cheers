<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;


class RegistrationModel extends Model
{
    use HasFactory;

    public static function checking($where,$value)
    {
        $data = DB::table('member')->where($where,$value)->get();
        return $data;
    }


    public static function do_regis($req)
    { 
        
        $result = DB::transaction(function () use($req) {   
            try { 
                $user   = Session::get('chr_aid');
                $tgl    = date('Y-m-d H:i:s');

                $exists = DB::table('member')
                    ->where('id', $req['id'])
                    ->orWhere('email', $req['email'])
                    ->get();
            
                if($exists->count() > 0){
                    return array(false,0);
                }
                else {
                    $db = DB::table('member')->insert(
                        $req
                    );
                    $id = DB::getPdo()->lastInsertId();
                    return array(true,$id); 
                }

            }
            catch (\Exception $e) {
                return array(false,$e);
                DB::rollBack();
            }
                
        });
    
        return $result;
    }
}
