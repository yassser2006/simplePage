<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;

use App\Http\Requests;

class msgControl extends Controller
{
    //Submitting the message to database and go to home
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'msg'=>'required|min:20'

        ]);
        $msg=new message();
        $msg->name=$request->input('name');
        $msg->email=$request->input('email');
        $msg->msg=$request->input('msg');
        $msg->save();
        return redirect('/')->with('success','Message sent successfully');
    }

    //show all message at the database with http://rooturl/messages for admins
    public function getMsg(Request $request){
        $msg=message::all();
        return view('messages')->with('Msgs',$msg);
    }

}
