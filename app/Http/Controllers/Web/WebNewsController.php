<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebNewsController extends Controller
{
    public function index(Request $request)
    {
        return view('web.index');
    }

    public function show(Request $request)
    {
        return view('web.content');
    }
}
