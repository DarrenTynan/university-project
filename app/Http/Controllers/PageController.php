<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gift;

class PageController extends Controller
{
    public function index()
    {
//        $gifts = Gift::all();
//        return view ('sandpit', compact('gifts'));
        return view ('sandpit');
    }

}
