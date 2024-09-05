<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cryptommer\Smsir\Smsir;
use App\Models\User;

class SmsController extends Controller
{
    public function smsCode()
    {
       return view('SMS.sms') ;
    }

    public function sendSms2(Request $request )
    {
        // dd($request);
        $phone = $request->phone;
        $name = "CODE";
        $message = "شماره شما تایید شد";
        $parameter = new \Cryptommer\Smsir\Objects\Parameters($name , $message);
        $parameters = array($parameter);
        $send = smsir::Send();
        $templateId = 100000;
        $send->Verify($phone, $templateId, $parameters);
        return redirect(route('payment'))->with('message' , ' پیامک تاییدیه شماره تماس ارسال شد');
    }

}
