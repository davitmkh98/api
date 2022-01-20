<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\mails;


class ExampleController extends Controller
{
    function queue(mails $mail)
    {

    }
}
