<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class Samplecontroller extends Controller
{

    public function index(){
    return view('layouts.sample');
    }
    //
}
