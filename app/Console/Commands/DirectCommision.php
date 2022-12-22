<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Setting;
use App\Models\DCommision;
class DirectCommision extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'direct:commision';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $time_start = microtime(true); 
        $users=User::all();
        $dir_comm=Setting::first()->direct_comm;
        foreach($users as $user){
            $refference_count=User::where('refferance_id',$user->id)->count();
            $last_commision=DCommision::where('user_id',$user->id)->orderBy('id','desc')->first();
            if($refference_count>0){
                if($last_commision!=null){
                    $new_count=$refference_count-floatval($last_commision->total_count);
                    if($new_count>0){
                        $commision=new DCommision;
                        $commision->user_id=$user->id;
                        $commision->get_count=$new_count;
                        $commision->total_count=$refference_count;
                        $commision->date=strtotime(date('d-m-Y'));
                        $commision->ammount=$new_count*$dir_comm;
                        $commision->save();
                    }
                }else{
                    $commision=new DCommision;
                    $commision->user_id=$user->id;
                    $commision->get_count=$refference_count;
                    $commision->total_count=$refference_count;
                    $commision->date=strtotime(date('d-m-Y'));
                    $commision->ammount=$refference_count*$dir_comm;
                    $commision->save();
                }
            }
        }

        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start);
        info($execution_time.'direct commision cron');
        return 0;
    }
}
