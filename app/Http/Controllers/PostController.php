<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberEmail;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Story;

use App\Models\Website;
use App\Models\Subscriptor;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller{

    function createpost(Request $request){
       Post::create([
                'website_id' => $request->website_id,
                'title' => $request->title,
                'description' => $request->description
       ]);
        $web = Website::where('id', $request->website_id)->first();
        if(isset($web->subscriptors)) {
            foreach ($web->subscriptors as $key => $value) {
               $arr2[] = $value['email'];
               $message = "post title => " . $request->title . " post description => " .  $request->description;
            Mail::to($value->email)->send(new SubscriberEmail($message));
            };
            return 'send_Mail';
        }else{
            return "The website has no subscriptors";
        }

}

function createstory(Request $request){
            $request->validate([
                'username' => 'required|max:255',
                'title' => 'required|max:255',
                'website_id' => 'required'
            ]);
            Story::create([
               'username'=> $request->username,
                'title'=> $request->title,
                'website_id' => $request->website_id
            ]);

     $web = Website::where('id', $request->website_id)->first();

         foreach($web->subscriptor as $key => $value)
         {
            Mail::to($value->email)->send(new SubscriberEmail($value));
         }

}









}
