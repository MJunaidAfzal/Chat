<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use App\Mail\InvitationMail;
use Mail;


class InvitationController extends Controller
{

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $store = Invitation::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        $myEmail = 'abdulwahabkhalid29@gmail.com';
        $details = [
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message,
        ];
        Mail::to($myEmail)->send(new InvitationMail($details));
        if(!empty($store->id)){
            return redirect()->back()->with('success','Invitation going Successfully');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
}

}
