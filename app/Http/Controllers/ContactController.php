<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        dd($request->all());
    }

    public function bookNow(Request $request)
    {
        dd($request->all());
    }


}
