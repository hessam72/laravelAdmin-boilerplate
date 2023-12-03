@extends('layouts.auth.app')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <b>ثبت نام در سایت</b>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">ثبت نام کاربر جدید</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}"
                            required autofocus autocomplete="name">
                        <div class="input-group-append">
                            <span class="fa fa-user input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">

                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}"
                            required autocomplete="username">

                        <div class="input-group-append">
                            <span class="fa fa-envelope input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="form-control">
                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            autocomplete="new-password" class="form-control">

                        <div class="input-group-append">
                            <span class="fa fa-lock input-group-text"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> با <a href="#">شرایط</a> موافق هستم
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">ثبت نام</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{ route('login') }}" class="text-center">من قبلا ثبت نام کرده ام</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
    </div>
   
@endsection
