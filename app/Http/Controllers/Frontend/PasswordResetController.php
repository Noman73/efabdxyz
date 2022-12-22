<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Rakibhstu\Banglanumber\NumberToBangla;
use Otp;
use Validator;
use App\Rules\OtpValidate;
use Hash;
class PasswordResetController extends Controller
{
    public function otpForm()
    {
        return view('guest.otp_send');
    }
    public function sendOtp(Request $request)
    {
        return view('guest.password_reset');

        // return $request->all();
        // $validator=Validator::make($request->all(),[
        //     'mobile'=>"required|max:11|min:11",
        // ]);
        info('ysxkljdkjf');
        $exist=User::where('username',$request->username)->get();
        // count($exist);
        if(count($exist)>0){
            $bangla=new NumberToBangla;
            $code= Otp::generate('password:'.$exist[0]->username);
            $api_key="C20081826072b4bc932d35.83708572";
            $sender_id="8809601000185";
            $contacts=$exist[0]->phone;
            $type="application/json";
            $msg="আপনার ইএফএবিডি কোড হলো ".$bangla->bnNum($code);
            $fields='api_key='.$api_key.'&type='.$type.'&contacts='.$contacts.'&senderid='.$sender_id.'&msg='.$msg;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,"https://esms.mimsms.com/smsapi");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
           
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $server_output = curl_exec($ch);
            curl_close ($ch);
            
            dd($server_output);
            info($server_output);
            return view('guest.password_reset',compact('contacts'));
        }else{
            return redirect()->back()->with('mobile','Your phone number is not registered');
        }
        
    }

    public function resetPassword(Request $request)
    {
        // return $request->all();
        // Otp::validate('password:'.$request->mobile,$request->otp);
        $validator=Validator::make($request->all(),[
            'username'=>"required|max:100|min:1",
            'otp'=>["required","max:6","min:6",new OtpValidate($request->username)],
            'password'=>"required|max:100|min:6|confirmed",
        ]);
        if($validator->passes()){
            $expence=User::where('username',$request->username)->first();
            $expence->password=Hash::make($request->password);
            $expence->save();
            if ($expence) {
                return redirect(route('login'))->with('message','Password Reset Success');
            }
        }
        // return $validator->errors();
        return redirect('/password-update')->withErrors($validator);
    }
}
