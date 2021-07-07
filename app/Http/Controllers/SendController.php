<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Http\Facades\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRemindMail;
use Carbon\Carbon;

class SendController extends Controller
{
    public function confirm(Request $request){
    
        $user = Auth::user();

        $date = $request->input('date');
        $content = $request->input('content');
        $email = $request->input('email');

        DB::table('reminds')->insert([

            'email' => "$email",
            'body' => "$content",
            'send_at' => "$date",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return view("top.send_index" , compact('user'));
    }
    //
}
