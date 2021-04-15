<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
//use App\Http\Controllers\Responce;

class HelloController extends Controller
{

    public function index(){
    return view('layouts.index');

  }
}
