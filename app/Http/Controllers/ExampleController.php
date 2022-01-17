<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\mails;

class ExampleController extends Controller
{


function example(){
    $obj = new mails();
    dd($obj);
}


}
