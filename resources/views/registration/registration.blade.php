
<!DOCTYPE HTML>
<html>

<head>
    <title>Income & Expense- Registration </title>

    <!-- //Meta Tags -->
    <!-- Font-Awesome-CSS -->
    <link href="login/css/font-awesome.css" rel="stylesheet">
    <!--// Font-Awesome-CSS -->
    <!-- Required Css -->
    <link href="login/css/style.css" rel='stylesheet' type='text/css' />
    <!--// Required Css -->
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <!--//fonts-->
    <link rel="stylesheet" type="text/css" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css')}}">

    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>

<body>
<!--background-->
<h1><i>Income & Expense Tracker</i></h1>
<!-- Main-Content -->
<div class="main-w3layouts-form">
    <h2>Register Here</h2>
    <!-- main-w3layouts-form -->
    <form method="POST" action="/register">
        {{csrf_field()}}
        <div class="fields-w3-agileits">
            <span class="fa fa-user" aria-hidden="true"></span>
            <input type="text" name="name" placeholder="Name" required />
        </div>
        <div class="fields-w3-agileits">
            <span class="fa fa-envelope" aria-hidden="true"></span>
            <input type="text" name="email" placeholder="Mail@example.com" required />
        </div>
        <div class="fields-w3-agileits">
            <span class="fa fa-key" aria-hidden="true"></span>
            <input type="password" name="password" placeholder="Password" required />
        </div>
        <div class="fields-w3-agileits">
            <span class="fa fa-key" aria-hidden="true"></span>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
        </div>
        <div class="remember-section-wthree">
            <ul>
                <li>
                    <p class="text-center" style="color: white">Back to  <a href="{!! route('login') !!}"><strong><i>Log In Page</i></strong></a></p>
                </li>
                {{--<li> <a href="/password/reset">Forgot password?</a> </li>--}}
            </ul>
            <div class="clear"> </div>
        </div>
        <br>
        <input type="submit" value="Register" />
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
@include('dash_include.alertjs')
</body>

</html>