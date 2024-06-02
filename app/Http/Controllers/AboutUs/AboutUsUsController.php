<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsUsController extends Controller
{
    public function index(){
        return view('pages/AboutUs/AboutUs');
    }
}
