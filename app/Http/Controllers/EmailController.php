<?php

namespace App\Http\Controllers;
use App\Models\Email;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $req)
    {
        $file = 'email';
        $arr  = array(
            'firstname'             => $req->input('chs-firstname'),
            'lastname'              => $req->input('chs-lastname'),
            'email'                 => $req->input('chs-email'),
            'usertype'              => $req->input('chs-usertype'),
            'questiontype'          => $req->input('chs-questiontype'),
            'comment'               => $req->input('chs-comment')
        );

        // dd($arr);
        $result = Self::send($file,$arr);
        // echo json_encode($result);
        return $result;
    }

    public function send($file,$data)
    {
        try{
            dd($data);
            Mail::send($file, $data, function($message) use ($data) {
                $message->subject($data['questiontype']);
                $message->to($data['email'], $data['firstname']);
                $message->from('a856e12178-e76b90@inbox.mailtrap.io','Cheers');
             });

            // return back()->with('alert-success','Berhasil Kirim Email');
            return response (['status' => true,'errors' => 'Berhasil Kirim Email']);
        }
        catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }
}
