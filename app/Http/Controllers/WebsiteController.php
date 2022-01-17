<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class WebsiteController extends Controller
{
        //create
    function addweb(Request $request){
        Website::create([
            'name' => $request->name
        ]);
    }







/*    //read
    function subscriptors($website_id){
        $arr = Website::where("id", $website_id)->first();
        $arr->subscriptors();
        foreach($arr->subscriptors() as $key => $value)
            Subscriptor::where("website_id", $website_id);
    }
    //read
    function websites(){
        return Website::all();
    }*/
}
