<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordBlogPost;
use App\Http\Requests\StoreBlogPost;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        //如果已经登陆的用户不可以访问登陆
         $this->middleware('guest',[
             'only'=>['login','loginFrom']
         ]);
    }

//    登陆页面
    public function login(){
        return view('user.login');
    }
    /**
     * 登陆提过来的数据
     */
    public function loginFrom(Request $request){
        $this->validate($request,[
            'email'=>'email',
            'password'=>'required|min:3'
        ],[
            'email.email'=>'请输入合格的邮箱',
            'password.required'=>'请输入密码',
            'password.min'=>'输入的密码低于3位数'
        ]);
        //只获取邮箱和密码
        $credentials = $request->only('email', 'password');
        //自动去数据库区匹配  返回的是bool值
        if (\Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success','登陆成功');
        }
        return redirect()->back()->with('danger','邮箱或者密码错误');
    }
    //修改密码
    public function modPassword(){
        return view('user.modpassword');
    }
    //修改密码提交过来的数据
    public function passwordData(PasswordBlogPost $request){
//        dd($request['email']);
        $user = User::where('email',$request['email'])->first();
        if ($user){
            $user->password=bcrypt($request->password);
            $user->save();
            return redirect()->route('login')->with('success','修改成功');
        }
        return redirect()->back()->with('danger','邮箱不存在');
    }

    //注册页面
    public function register(Request $request){

           return view('user.register');
    }
    /**
     * 注销
     */
     public function accountOff(){
         Auth::logout();
         return redirect()->route('home');
     }
    /**
     *注册页面提交过来的数据处理
     * @param StoreBlogPost $request 这是一个表单验证类  //
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreBlogPost $request){
        //只有在验证没有错误的情况下才能走到这里
        //获取数据
        $data = $request->all();
//        将密码加密   bcrypt是laravel自带的加密码方式
        $data['password']=bcrypt($data['password']);
        //添加注册时间
        $data['email_verified_at']=now();
        User::create($data);
        //提示并且跳转
        return redirect()->route('login')->with('success','注册成功');
    }
}
