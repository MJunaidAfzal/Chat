<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;

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

        if(!empty($store->id)){
            return redirect()->back()->with('success','Invitation going Successfully');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong');
        }
}

}
