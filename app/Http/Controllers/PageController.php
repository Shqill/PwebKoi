<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('Homepage');
    }

    public function sejarah(){
        return view('Sejarah');
    }
}
