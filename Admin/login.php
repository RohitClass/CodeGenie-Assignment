<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    #password-toggle {
        position: absolute;
        top: 35%;
        right: 36%;
    }
    </style>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
            <div id="login-message" style="display: none; color: black;"></div>
            <form id="login_form" method="post">
                <input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
                <input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
                <i class="fa fa-eye" id="password-toggle" aria-hidden="true"></i>
                 <span>
                    <input type="checkbox">
                    Remember Me
                </span>
                <h6>
                    <a href="#">Forgot Password?</a>
                </h6>
                <div class="clearfix"></div>
                <input type="submit" id="submit" value="Sign In" name="login">
            </form>
            <p>
                Don't Have an Account ?
                <a href="registration.html">Create an account</a>
            </p>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $("#login_form").submit(function(event) {
            event.preventDefault();
            var data = $('#login_form').serialize();
            $.ajax({
                type: "POST",
                url: "submit.php",
                dataType: "json",
                data: data,
            }).done(function(data) {
                $('#login-message').text(data.message);
                if (data.success) {
                    $('#login_form')[0].reset();
                    window.location.href = "dashboard.php";
                }
                $('#login-message').show();
            });
        });

        $('#password-toggle').click(function() {
            var passwordField = $('input[name="Password"]');
            if (passwordField.attr('type') === 'password') {
                passwordField.attr('type', 'text');

            } else {
                passwordField.attr('type', 'password');

            }
        });
    });
    </script>

</body>

</html>