
    @extends('layouts.auth.app')

@section('content')

    <div class="form-structor">
        <div class="signup">
            <h2 class="form-title" id="signup">ورود</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-holder">

                    <input id="email" value="{{ old('email') }}" type="email" name="email" class="input"
                        required autocomplete="username" placeholder="نام کاربری" />
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                        class="input" placeholder="کلمه عبور" />
                </div>
                <button type="submit" class="submit-btn">ورود</button>
                <div class="group-login-items">

                    <div>
                        <span class="remember-me-span">به خاطر بسپار</span>
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                    </div>
                    @if (Route::has('password.request'))
                        <a class="forgot-pass" href="{{ route('password.request') }}">فراموشی رمز عبور</a>
                    @endif
                </div>

            </form>
        </div>
        <div class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login">ثبت نام</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-holder">
                        <input type="text" class="input" id="name" name="name" value="{{ old('name') }}"
                            required autocomplete="name" placeholder="نام کاربری" />
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            autocomplete="username" class="input" placeholder="پست الکترونیک" />

                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            class="input" placeholder="کلمه عبور" />
                        <input id="password_confirmation" type="password" name="password_confirmation" required
                            placeholder="تکرار کلمه عبور" autocomplete="new-password" class="input">


                    </div>
                    <label class="agreement">
                        <input type="checkbox"> با <a href="#">شرایط</a> موافق هستم
                    </label>
                    <button type="submit" class="submit-btn">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
  @endsection
