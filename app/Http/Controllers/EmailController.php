<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class EmailController extends Controller
{
    public function index()
    {
        return view('email');
    }

    function send(Request $request)
    {

     $this->validate($request, [
      'firstname'=>'required',
      'lastname' =>'required',
      'email'=>'required|email',
      'usertype'=>'required',
      'questiontype'=>'required',
      'comment'=>'required'
     ]);

    $data = array(
        'firstname'      =>  $request->firstname,
        'lastname'      =>  $request->lastname,
        'email'      =>  $request->email,
        'usertype'      =>  $request->usertype,
        'questiontype'      =>  $request->questiontype,
        'comment'   =>   $request->comment
    );

    if($request->questiontype == 'customer_service'){
        $sendmail = 'cs@cheersindonesia.com';
    }else{
        $sendmail = 'info@cheersindonesia.com';
    }
    // dd($sendmail);

    Mail::to($sendmail)->send(new contactMail($data));
    return back()->with('success', 'Thanks for contacting us!');
    }
}
