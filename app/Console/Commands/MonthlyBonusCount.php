<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Designation;
use App\Models\Setting;
use App\Models\User;
use App\Models\MonthlyBonus;
class MonthlyBonusCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monthly:bonus';

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

        $setting=Setting::first();
        $arr[5]=$setting->sales_amb_comm;
        $arr[4]=$setting->marketing_dir_comm;
        $arr[3]=$setting->diamond_mmb_comm;
        $arr[2]=$setting->crown_mmb_comm;
        $arr[1]=$setting->share_holder_comm;
        $first_days_of_last_month=date('Y-m-01 00:00:00',strtotime('-1 MONTH'));
        $last_days_of_last_month=date('Y-m-t 23:59:59',strtotime('-1 MONTH'));
        $total_sales=User::whereBetween('created_at',[$first_days_of_last_month,$last_days_of_last_month])->count();
        $data=Designation::where('level','<',6)->get();
        foreach($data as $users){
            // $monthly=commission
            $this_level=Designation::where('level',$users->level)->count();
            $monthly_bonus=new MonthlyBonus;
            $monthly_bonus->user_id=$users->user_id;
            $monthly_bonus->date=strtotime(date('d-m-Y'));
            $monthly_bonus->ammount=($arr[intval($users->level)]*$total_sales)/$this_level;
            $monthly_bonus->total_member=$this_level;
            $monthly_bonus->total_sales=$total_sales;
            $monthly_bonus->insentive=$arr[intval($users->level)];
            $monthly_bonus->save();
            info($this_level.'-'.$arr[intval($users->level)].'-'.$total_sales);
        }
        return 0;
    }
}
