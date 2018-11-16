<?php

namespace App\Http\Controllers\Util;

use App\Notifications\RegisterNotify;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CodeController extends Controller
{
     public function send(Request $request){
//         获取验证码随机字符串
         $cody = $this->mtRand();
         $arr = User::firstOrNew(['email'=>$request['username']]);
          $arr->notify(new RegisterNotify($cody));
         session()->put('code',$cody);
         return ['code' => 1, 'message' => '验证码发送成功'];
     }
     public function mtRand($len=4){
         $arr='';
         for ($i=0;$i<$len;$i++){
             $arr .=mt_rand(0,9);
         }
         return $arr;
     }
    //
}
