<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap');


        html,
        body {
            position: relative;
            min-height: 100vh;
            background-color: #E1E8EE;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Rubik', serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .form-structor {
            background-color: #222;
            border-radius: 15px;
            height: 550px;
            width: 350px;
            position: relative;
            overflow: hidden;
        }

        .form-structor::after {
            content: "";
            opacity: 0.8;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-repeat: no-repeat;
            background-position: left bottom;
            background-size: 500px;
            background-image: url("/panel-resources/dist/img/login-bg.avif");
        }

        .form-structor .signup {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .signup.slide-up {
            top: 5%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .signup.slide-up .form-holder,
        .form-structor .signup.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
        }

        .form-structor .signup.slide-up .form-title {
            font-size: 1em;
            cursor: pointer;
        }

        .form-structor .signup.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .signup .form-title {
            color: #fff;
            font-size: 1.7em;
            text-align: center;
        }

        .form-structor .signup .form-title span {
            color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .signup .form-holder {
            border-radius: 15px;
            background-color: #fff;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .signup .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #eee;
            width: 100%;
            font-size: 12px;
        }

        .form-structor .signup .form-holder .input:last-child {
            border-bottom: 0;
        }

        .form-structor .signup .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        .form-structor .signup .submit-btn {
            background-color: rgba(0, 0, 0, 0.4);
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .signup .submit-btn:hover {
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .form-structor .login {
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login::before {
            content: "";
            position: absolute;
            left: 50%;
            top: -20px;
            -webkit-transform: translate(-50%, 0);
            background-color: #fff;
            width: 200%;
            height: 250px;
            border-radius: 50%;
            z-index: 4;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login .center {
            position: absolute;
            top: calc(50% - 10%);
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            width: 65%;
            z-index: 5;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login .center .form-title {
            color: #000;
            font-size: 1.7em;
            text-align: center;
        }

        .form-structor .login .center .form-title span {
            color: rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login .center .form-holder {
            border-radius: 15px;
            background-color: #fff;
            border: 1px solid #eee;
            overflow: hidden;
            margin-top: 50px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login .center .form-holder .input {
            border: 0;
            outline: none;
            box-shadow: none;
            display: block;
            height: 30px;
            line-height: 30px;
            padding: 8px 15px;
            border-bottom: 1px solid #eee;
            width: 100%;
            font-size: 12px;
        }

        .form-structor .login .center .form-holder .input:last-child {
            border-bottom: 0;
        }

        .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.4);
        }

        .form-structor .login .center .submit-btn {
            background-color: #6B92A4;
            color: rgba(255, 255, 255, 0.7);
            border: 0;
            border-radius: 15px;
            display: block;
            margin: 15px auto;
            padding: 15px 45px;
            width: 100%;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login .center .submit-btn:hover {
            transition: all 0.3s ease;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .form-structor .login.slide-up {
            top: 90%;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login.slide-up .center {
            top: 10%;
            -webkit-transform: translate(-50%, 0%);
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login.slide-up .form-holder,
        .form-structor .login.slide-up .submit-btn {
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login.slide-up .form-title {
            font-size: 1em;
            margin: 0;
            padding: 0;
            cursor: pointer;
            -webkit-transition: all 0.3s ease;
        }

        .form-structor .login.slide-up .form-title span {
            margin-right: 5px;
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.3s ease;
        }

        .input {
            font-family: 'Rubik', serif;
            direction: rtl;
            width: 87% !important;
        }


        .group-login-items {
            display: flex;
            gap: 1rem;
        }

        .forgot-pass {
            text-decoration: none;
            transition: all 0.2s ease-in-out;
            font-size: 0.8rem;
        }

        .forgot-pass:link,
        .forgot-pass:visited {

            color: #fff;
            font-weight: 600;
        }

        .forgot-pass:hover,
        .forgot-pass:active {

            color: #3b3a3a;


        }

        .remember-me-span {
            color: #fff;
            font-weight: 600;
            font-size: 0.8rem;

        }

        .agreement {
            direction: rtl;
            display: flex;
            font-size: .75rem;
            margin-top: 1rem;
            color: #444;
            letter-spacing: 0.01rem;
            gap: 5px;
            justify-content: start;
            align-items: center;
        }

        .error-span {
            color: crimson;
            font-size: .8rem;
            background-color: rgba(253, 253, 253, 0.3);

        }

        .li-error {
            list-style: disclosure-closed;
            color: antiquewhite;
            direction: rtl;
        }
    </style>
    <title>Login</title>
</head>

<body>


    @yield('content')


    <script>
        console.clear();

        const loginBtn = document.getElementById('login');
        const signupBtn = document.getElementById('signup');
        const singupSection = document.getElementById('singup-section');
        const loginSection = document.getElementById('login-section');
        const login_errors = document.getElementById('login-errors');
        const singup_errors = document.getElementById('singup-errors');
        const error_msg = document.getElementById('error_msg');
        //to determine user was going to login or singup
        const name_input = document.getElementById('name');
        const email_input = document.getElementById('email');


        loginBtn.classList.add('slide-up');
        loginBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;
            Array.from(e.target.parentNode.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    signupBtn.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });
            login_errors.innerHTML = "";
            console.log('inside btn login')
        });

        signupBtn.addEventListener('click', (e) => {
            let parent = e.target.parentNode;
            Array.from(e.target.parentNode.classList).find((element) => {
                if (element !== "slide-up") {
                    parent.classList.add('slide-up')
                } else {
                    loginBtn.parentNode.parentNode.classList.add('slide-up')
                    parent.classList.remove('slide-up')
                }
            });

            singup_errors.innerHTML = "";
            console.log('inside btn ssingup')
        });

        //to redirect to currect form 
        // window.onload = function() {
        if (name_input.value && email_input.value) {
            //sisngup should be active
            if (!loginSection.classList.contains('slide-up')) {
                loginBtn.click()
                console.log('it should be sing up form')
            }

            // loginBtn.click();

        } else if (!name_input.value && email_input.value) {
            //login should be active

            if (!singupSection.classList.contains('slide-up')) {
                signupBtn.click()
                console.log('it should be login form')
            }

        }




        if (singupSection.classList.contains('slide-up')) {
            //hide singup errors
            singup_errors.innerHTML = "";
        };
        if (loginSection.classList.contains('slide-up')) {

            //hide login errors
            login_errors.innerHTML = "";
        };
    </script>
</body>

</html>
