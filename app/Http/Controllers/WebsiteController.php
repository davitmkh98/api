<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;

class WebsiteController extends Controller
{
    public function addWeb(Request $request){
        Website::create([
            'name' => $request->name
        ]);
    }
}
