<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sandika;

class erlangga extends Controller
{
     public function ser(){
    $c=sandika::all();        
    return view('tabel',compact('c')); 
}
}
