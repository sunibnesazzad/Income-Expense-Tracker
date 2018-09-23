
<!DOCTYPE HTML>
<html>

<head>
    <title>Income & Expense- Registration </title>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->
    <!-- Font-Awesome-CSS -->
    <link href="{{asset('login/css/font-awesome.css')}}" rel="stylesheet">
    <!--// Font-Awesome-CSS -->
    <!-- Required Css -->
    <link href="{{asset('login/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!--// Required Css -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <!--//fonts-->
    <link rel="stylesheet" type="text/css" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css')}}">
</head>

<body>
<!--background-->
<h1><i>Income & Expense Tracker</i></h1>
<!-- Main-Content -->
<div class="main-w3layouts-form">
    <h2>Forget Password?</h2>
    <!-- main-w3layouts-form -->
    <form method="POST" action="{{ route('password.email') }}">
        {{csrf_field()}}

        <div class="fields-w3-agileits">
            <span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="email" placeholder="Mail@example.com" required />
        </div>


        <br>
        <input type="submit" value="Send Mail" />
    </form>
    <!--// main-w3layouts-form -->

</div>
<!--// Main-Content-->
<!-- copyright -->
<div class="copyright-w3-agile">
    <p class="agile-copyright">&copy; 2018 Income & Expense Tracker. All Rights Reserved | Design by <a href="" target="_blank"><strong><i>Sun Ibne Sazzad</i></strong></a></p>
</div>
<!--// copyright -->
<!--//background-->
@include('dashInclude.alertjs')
</body>

</html>