<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Http\Traits\CountTrait;
use App\Models\Designation;
class DesignationCount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    use CountTrait;
    protected $signature = 'designation:count';

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
        $user=User::select('id')->orderBy('id','asc')->get();
        // $dataArr=[];
        foreach($user as $data){
            $dgn=Designation::where('user_id',$data->id)->orderBy('id','desc')->first();

                $amount=0;
                $x=$this->leftCount($data->id);
                $y=$this->rightCount($data->id);
                // $dataArr[$data->id]=[$x,$y];
                $count=0;
                $xcount=count($x);
                $ycount=count($y);
                $count+=min($xcount,$ycount);
                if($dgn==null){
                        $designation=new Designation;
                        if($count>=100){
                            $designation->name="Sales Ambassador";
                            $designation->level=5;
                        }else{
                        $designation->name="Sales Associate";
                            $designation->level=6;
                        }
                        $designation->status=1;
                        $designation->user_id=$data->id;
                        $designation->save();
                }else{
                    // info('less than 100');
                    $left=[];
                    $right=[];
                    foreach($x as $xval){
                        $leftval=$this->CheckDesignation($xval);
                        if($leftval!=null){
                            array_push($left,$leftval);
                        }
                    }
                    foreach($y as $yval){
                        $rightval=$this->CheckDesignation($yval);
                        if($rightval!=null){
                            array_push($right,$rightval);
                        }
                    }
                    // info($left);
                    // info($right);
                    // info('------'.$data->id.'-------');
                    sort($left);
                    sort($right);
                    $min_length=min(count($left),count($right));
                    for ($i=0; $i < $min_length; $i++) {
                        
                        if($left[$i]>0 && $left[$i]==$right[$i]){
                            $designation=Designation::where('user_id',$data->id)->orderBy('id','desc')->first();
                            $designation->level=$left[$i]-1;
                            $designation->name=$this->designationPost()[($left[$i]-1)];
                            $designation->save();  
                        }  
                    }
                }
        }
        
        $time_end = microtime(true);
        $execution_time = ($time_end - $time_start);
        info($execution_time.'-designation');
        return 0;
    }
    public function CheckDesignation($user_id)
    {
        $designation=Designation::where('user_id',$user_id)->where('level','<',6)->orderBy('id','desc')->first();
        if(isset($designation->level)){
            return $designation->level;
        }else{
            return null;
        }
    }


    public function designationPost()
    {
        $des[5]="Sales Ambassador";
        $des[4]="Marketing Director";
        $des[3]="Diamond Member";
        $des[2]="Crown Member";
        $des[1]="Share Holder";
        return $des;
    }
}
