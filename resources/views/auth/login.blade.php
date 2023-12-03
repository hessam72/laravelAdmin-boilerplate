@extends('layouts.auth.app')

@section('content')
    
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>ورود به سایت</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">فرم زیر را تکمیل کنید و ورود را بزنید</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">

                    <input id="email" value="{{ old('email') }}" type="email" name="email"
                        class="form-control" required autofocus autocomplete="username">
                    <div class="input-group-append">
                        <span class="fa fa-envelope input-group-text"></span>
                    </div>
                </div>
                <div class="input-group mb-3">

                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="form-control">


                    <div class="input-group-append">
                        <span class="fa fa-lock input-group-text"></span>
                    </div>
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
                    <br />
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">به خاطر بسپار</span>
                    </label>


                    @if (Route::has('password.request'))
                        <a style="float: left;" href="{{ route('password.request') }}">رمز عبورم را فراموش کرده
                            ام</a>
                    @endif
                </div>
                <div class="flex items-center justify-end mt-4">
                </div>
            </form>

            <!-- /.social-auth-links -->
            <p class="mb-1">
                <a href="register" class="text-center">ثبت نام</a>

            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>

@endsection