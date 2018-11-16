
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                登录
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                请登录林林账号
            </p>

            <!-- Form -->
            <form method="post" action="{{route('loginFrom')}}">
                @csrf
                <!-- Email address -->
                <div class="form-group">
                    <label>
                        邮箱账号
                    </label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" placeholder="请输入邮箱">
                </div>
                <div class="form-group">
                    <label>
                        密码
                    </label>
                    <div class="input-group input-group-merge">
                        <input type="password" name="password" class="form-control form-control-appended" placeholder="请输入密码">
                        <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                        </div>

                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-lg btn-block btn-primary mb-3">
                    登录
                </button>

                <!-- Link -->
                    <div class="text-center">
                        <small class="text-muted text-center">
                            还没账号 ? <a href="{{route('register')}}">去注册</a>.
                            <a href="{{route('modpassword')}}">重置密码</a>.
                            <a href="{{route('home')}}">返回首页</a>.
                        </small>
                    </div>

            </form>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->
@include('layouts.hdjs')
@include('layouts.message')
<!-- JAVASCRIPT
================================================== -->



</body>
</html>