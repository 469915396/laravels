
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{asset('org/assets')}}/fonts/feather/feather.min.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/highlight/styles/vs2015.min.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/quill/dist/quill.core.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset('org/assets')}}/libs/flatpickr/dist/flatpickr.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('org/assets')}}/css/theme.min.css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Dashkit</title>
</head>
<body class="d-flex align-items-center bg-white border-top-2 border-primary">

<!-- CONTENT
================================================== -->
<div class="container-fluid">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                注册
            </h1>
            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                登录帐号社区参与交流与学习
            </p>
            <!-- Form -->
            <form method="post" action="{{route('register')}}">
                @csrf
                <!-- Email address -->
                <div class="form-group">
                    <label>
                        昵称
                    </label>
                    <!-- Input -->
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="请输入呢称">
                </div>
                <!-- Password -->
                <div class="form-group">
                    <label>
                        邮箱
                    </label>
                    <!-- Input -->
                    <input type="email" name="email" value="a469915396z@qq.com" class="form-control" placeholder="请输入邮箱">
                </div>
                <!-- Password -->
                <div class="form-group">
                    <label>
                        密码
                    </label>
                    <!-- Input -->
                    <input type="password" name="password" class="form-control" placeholder="请输入密码">
                </div>
                <!-- Password -->
                <div class="form-group">
                    <label>
                        确定密码
                    </label>
                    <!-- Input -->
                    <input type="password" name="password_confirmation" class="form-control" placeholder="请输入确定密码">
                </div>
                <!-- Password -->
                <div class="form-group">
                    <label>
                        验证码
                    </label>
                    <!-- Input -->
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="请输入邮箱" name="code" value="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="bt">发送验证码</button>
                        </div>
                    </div>
                </div>
                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    注册
                </button>

                <!-- Link -->
                    <div class="text-center">
                        <small class="text-muted text-center">
                            还没账号 ? <a href="{{route('login')}}">去登陆</a>.
                            <a href="{{route('modpassword')}}">重置密码</a>.
                            <a href="{{route('home')}}">返回首页</a>.
                        </small>
                    </div>

            </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

            <!-- Image -->
            <div class="bg-cover vh-100 mt--1 mr--3" style="background-image: url({{asset('org/assets')}}/img/covers/auth-side-cover.jpg);"></div>

        </div>
    </div> <!-- / .row -->
</div>


<meta name="csrf-token" content="{{csrf_token()}}">
<link href="https://cdn.bootcss.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

@include('layouts.hdjs')

<script>
    require(['hdjs','bootstrap'], function (hdjs) {
        let option = {
            //按钮
            el: '#bt',
            //后台链接
            url: '{{route('code.send')}}',
            //验证码等待发送时间
            timeout: 10,
            //表单，手机号或邮箱的INPUT表单
            input: '[name="email"]'
        };
        hdjs.validCode(option);
    })
</script>
@include('layouts.message')
</body>
</html>