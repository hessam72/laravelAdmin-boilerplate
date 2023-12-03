@extends('layouts.auth.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>فراموشی کلمه عبور</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">در صورتی که کلمه عبور خود را فراموش کرده اید، فرم زیر را تکمیل کرده تا لینک ریست
                    کلمه عبور برای شما ارسال شود</p>


                {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-group mb-3">

                        <input id="email" value="{{ old('email') }}" type="email" name="email" class="form-control"
                            required autofocus autocomplete="username">

                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="block mt-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">ارسال لینک</button>
                    </div>


                </form>




                <p class="mb-0">
                    <a href="/login" style="margin-top: 20px;
                    display: inherit;"
                        class="text-center">بازگشت به منوی لاگین</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
