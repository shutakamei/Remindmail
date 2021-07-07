<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Reviewcontroller extends Controller
{
    //
    public function confirm(Request $request){ // DIの記述必須！
        $user = Auth::user();

        $date = $request['date'];
        $content = $request['content'];

        return view('top.rev_index' , compact('user','date','content'));
    }
}
