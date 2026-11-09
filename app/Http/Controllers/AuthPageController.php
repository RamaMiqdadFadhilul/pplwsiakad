<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class AuthPageController extends Controller
{
     public function login(): View 
    { 
    return view('halaman.login'); 
    } 
}
