<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;


class SubscriberController extends Controller
{
   public function subscribe(Request $request)
    {
        $request->validate([
            "email" => 'required|unique:subscribers|email',
            "website_id" => "required|numeric"
        ]);
        Subscriber::create([
            'email' => $request->email,
            'website_id' => $request->website_id
        ]);
    }
    //update
    public function update(Request $request){
            $request->validate([
               "current_email" => "required|email"
            ]);
            Subscriber::where("email", $request->current_email)->update([
                "email" => $request->new_email
            ]);
            return "OK";

        }
    //delete
    public function unSubscribe($email){
        Subscriber::where("email", $email)->delete();
    }

}
