<?php

namespace App\Http\Controllers;

use App\Models\Subscriptor;
use App\Models\Website;
use Illuminate\Http\Request;


class SubscriptorController extends Controller
{
    function subscripe(Request $request)
    {
        $request->validate([
            "email" => 'required|unique:subscriptors|email',
            "website_id" => "required|numeric"
        ]);
        Subscriptor::create([
            'email' => $request->email,
            'website_id' => $request->website_id
        ]);
    }
    //update
    function update(Request $request){
            $request->validate([
               "current_email" => "required|email"
            ]);
            Subscriptor::where("email", $request->current_email)->update([
                "email" => $request->new_email
            ]);
            return "OK";

        }
    //delete
    function unsubscripe($email){
        Subscriptor::where("email", $email)->delete();
    }

}
