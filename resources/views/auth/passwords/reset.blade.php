
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{asset('reg_theme/css/style.css')}}" type="text/css" media="all">

    <!-- google fonts  -->
    <link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- Modal scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="w3ls-banner">
    <div class="heading">
        <h1></h1>
    </div>
    <div class="container">
        <div class="heading">
            <h1>Reset  Password</h1>
            <p></p>
        </div>
        <div class="agile-form">

            @include('includes.errors')

            <form method="POST" action="/password/reset">
                {{csrf_field()}}
                <input type="hidden" name="token" value="{{ $token }}">
                <ul class="field-list">
                    <li>
                        <label class="form-label"> E-Mail Address <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email@example.com" required>
                        </div>
                    </li>
                    <li>
                        <label class="form-label"> Password <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Password" required>

                        </div>
                    </li>
                    <li>
                        <label class="form-label"> Confirm Password <span class="form-required"> * </span></label>
                        <div class="form-input">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

                        </div>
                    </li>
                </ul>

                <div class="submit_btn">
                    <input type="submit" value="Reset Password">
                </div>
            </form>
            <br>
        </div>
    </div>
    <div class="copyright">
        <p class="agile-copyright">&copy; 2018 Simple Blog. All Rights Reserved | Design by <a href="https://www.facebook.com/sunibn.sazzad" target="_blank"><strong><i>Sun Ibne Sazzad</i></strong></a></p>
    </div>
</div>
</body>
</html>