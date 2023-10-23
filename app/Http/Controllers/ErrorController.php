<?php

namespace App\Http\Controllers;

class ErrorController extends Controller
{
    public function somethingWentWrong()
    {
        return view('errors.500');
    }
}
