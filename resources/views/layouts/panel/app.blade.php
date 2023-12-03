<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت | داشبورد</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('panel.assets.css-files')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('panel.sections.navbar')
        
        @include('panel.sections.sidebar')


        @yield('content')


        @include('panel.sections.control-sidebar')
        @include('panel.sections.footer')


    </div>
    <!-- ./wrapper -->
    @include('panel.assets.js-files')
</body>

</html>
