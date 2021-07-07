<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
    }
    //
    public function index()
    {
        $user = Auth::user();

        //dd($values);

        //if(isset($user['email_verified_at'])){

            return view('top.index', compact('user'));

        //}else{

            //return view('top.verify_index', compact('user'));

        //}

    }
}
