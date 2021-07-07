<?php
namespace App\Console\Commands;

use App\Remind;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Mail\Mailable;
use App\Mail\SendRemindMail;

class RemindMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:send_remind_mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'リマインドメールを送ります';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = Auth::user();
        $content = DB::table('reminds')->body;
        $send_at = DB::table('reminds')->send_at;


        if($send_at == Carbon::now()){
            Mail::to($user->email)->send(new SendRemindMail($content));
        }
    }
}