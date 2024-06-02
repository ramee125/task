<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(){
        return view('pages/Home/Home');
    }

    public function store(Request $request){
    //    dd($request->all());
        //      Product ::create{[
        //     "title" => $request->title,
        //     "price" => $request->price,
        //     "description" => $request->description,
        // ]};
        Product::create($request->all());









    }


}
