<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Str;
class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public $uplink_id;
    public $position;
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $last_data=User::orderBy('id','desc')->first();
        $last_data=User::where('id',920)->first();
        $this->uplink_id=$last_data->id;
        $this->position=0;
        for ($i=0; $i < 100; $i++) {
           $user=new User;
           $user->name= Str::random(10);
           $user->email=Str::random(15).$i.'@gmail.com';
           $user->username= $user->name.$i;
           $user->package_id= $last_data->package_id;
           $user->phone= rand().$i;
           $user->adress= Str::random(10);
           $user->dateofbirth= date('d-m-Y');
           $user->uplink_id=$this->uplink_id;
           $user->position= $this->position;
           $user->password=Hash::make(12345678);
           $user->save();
           if($user){
                if($this->position==0){
                    $this->position=1;
                }else{
                    $this->position=0;
                    $this->uplink_id=$user->id;
                }
           }   
        }
    }
}
