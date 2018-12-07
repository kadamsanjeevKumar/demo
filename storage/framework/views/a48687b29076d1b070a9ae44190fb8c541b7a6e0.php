<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Login Page</title>

    <!-- Favicons-->
    <link rel="icon" href="/assets/admin/images/fav.png">

    <meta name="msapplication-TileColor" content="#351969">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->

    <link href="/assets/admin/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/assets/admin/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="/assets/admin/css/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/assets/admin/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Righteous');
    </style>
</head>

<body class="deep-purple">
<?php /*<!-- Start Page Loading -->*/ ?>
<?php /*<div id="loader-wrapper">*/ ?>
<?php /*<div id="loader"></div>*/ ?>
<?php /*<div class="loader-section section-left"></div>*/ ?>
<?php /*<div class="loader-section section-right"></div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<!-- End Page Loading -->*/ ?>
<div id="card-alert" class="card green lighten-5">
    <?php if(Session::has('registerSuccessMessage')): ?>
        <div class="card-content green-text">
            <p><?php echo e(Session::get('registerSuccessMessage')); ?></p>
        </div>
        <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    <?php endif; ?>
</div>
<div id="card-alert" class="card red lighten-5">
    <?php if(Session::has('errorMessage')): ?>
        <div class="card-content red-text">
            <p><?php echo e(Session::get('errorMessage')); ?></p>
        </div>
        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    <?php endif; ?>
</div>
<?php if(count($errors)>0): ?>
    <div id="card-alert" class="card red lighten-5">
        <div class="card-content red-text">
            <?php foreach($errors->all() as $error): ?>
                <p><?php echo html_entity_decode($error); ?></p>
            <?php endforeach; ?>
        </div>
        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col s12 m6 offset-m3" style="top: 5%; position: absolute;">
        <div class="col m12 center"><a class="navbar-brand" href="/"
                                       style="font-family: 'Lobster Two', cursive; color:#fff; font-size:30px;">Page20.com</a>
            <br></div>
        <div class="col s12">
            <ul class="tabs tab-demo-active z-depth-1 cyan" style="width: 100%;">
                <li class="tab col s3"><a href="#admin" class="white-text waves-effect waves-light active">Admin</a>
                </li>
                <li class="tab col s3"><a href="#staff" class="white-text waves-effect waves-light">Staff</a>
                </li>
                <li class="tab col s3"><a href="#intern" class="white-text waves-effect waves-light">Intern</a>
                </li>
                <div class="indicator" style="right: 532px; left: 0px;"></div>
                <div class="indicator" style="right: 532px; left: 0px;"></div>
            </ul>
        </div>
        <div class="col s12">
            <div class="col s12" id="admin" style="display: block;">
                <div id="login-page" class="row">
                    <div class="col s12 card-panel">
                        <form class="login-form" id="admin_login" action="/admin/log/in" method="post"
                              style="width:100%;">
                            <input type="hidden" class="timezone" name="timezone" value=""/>
                            <div class="row">
                                <div class="input-field col s12 center">
                                    <a class="navbar-brand" href="#"
                                       style="font-family: 'Lobster Two', cursive; color:#351969; font-size:30px;">Admin
                                        Login</a>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field admin col s12">
                                    <i class="mdi-social-person-outline prefix"></i>
                                    <input id="username" name="emailOrUsername" type="text"  required>
                                    <label for="username"  class="center-align active">Username</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field admin col s12">
                                    <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="password" type="password" name="password"  required>
                                    <label for="password" class="active">Password</label>
                                </div>
                            </div>
                            <?php /*<div class="row">*/ ?>
                            <?php /*<div class="input-field col s12 m12 l12  login-text">*/ ?>
                            <?php /*<input type="checkbox" id="remember-me" />*/ ?>
                            <?php /*<label for="remember-me">Remember me</label>*/ ?>
                            <?php /*</div>*/ ?>
                            <?php /*</div>*/ ?>
                            <div class="row">
                                <div class="input-field col s12">
                                    <?php /*<a href="dashboard.html" class="btn waves-effect waves-light col s12">Admin Login</a>*/ ?>
                                    <button class="btn waves-effect waves-light col s12" type="submit">Admin Login
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 m6 l6">

                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small"><a href="/admin/forgot/password">Forgot
                                            password?</a></p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col s12" id="staff" style="display: none;">
                <div id="login-page" class="row">

                    <div class="card-container manual-flip">
                        <div class="card">
                            <div class="front">
                                <div class="col s12 card-panel">
                                    <form class="login-form" id="staff_login" style="width:100%;" action="/staff/log/in"
                                          method="post">
                                        <input type="hidden" class="timezone" name="timezone" value=""/>
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <a class="navbar-brand" href="#"
                                                   style="font-family: 'Lobster Two', cursive; color:#351969; font-size:30px;">Staff
                                                    Login</a>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field staff_login col s12">
                                                <i class="mdi-social-person-outline prefix"></i>
                                                <input id="staffusername" type="email" name="email" required>
                                                <label for="staffusername" class="center-align">Email</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field staff_login col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="spassword" type="password" name="password" required>
                                                <label for="spassword">Password</label>
                                            </div>
                                        </div>
                                        <?php /*<div class="row">*/ ?>
                                        <?php /*<div class="input-field col s12 m12 l12  login-text">*/ ?>
                                        <?php /*<input type="checkbox" id="remember-me2" />*/ ?>
                                        <?php /*<label for="remember-me2">Remember me</label>*/ ?>
                                        <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <?php /*<a href="dashboard.html" class="btn waves-effect waves-light col s12">Staff Login</a>*/ ?>
                                                <button class="btn waves-effect waves-light col s12" type="submit">Staff
                                                    Login
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6 m6 l6">
                                                <p class="margin medium-small"><a href="/staff/forgot/password">Forgot
                                                        password?</a></p>
                                            </div>
                                            <div class="input-field col s6 m6 l6">
                                                <p class="margin right-align medium-small">Don't have account? <a
                                                            onclick="rotateCard(this)"
                                                            style="cursor:pointer;">Signup</a></p>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div> <!-- end front panel -->

                            <div class="back">

                                <div class="col s12 card-panel">
                                    <form class="login-form" id="staff_register" style="width:100%;"
                                          action="/staff/sign/up" method="post">
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <a class="navbar-brand" href="#"
                                                   style="font-family: 'Lobster Two', cursive; color:#351969; font-size:30px;">Staff
                                                    Signup </a>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field staff col s12">
                                                <i class="mdi-social-person-outline prefix"></i>
                                                <input id="ssname" type="text" name="firstname" required>
                                                <label for="ssname" class="center-align">Name</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field staff col s12">
                                                <i class="mdi-communication-email prefix"></i>
                                                <input id="semail" type="email" name="email" required>
                                                <label for="semail" class="center-align">Email</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field staff col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="scpassword" type="password" name="password" required>
                                                <label for="scpassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field staff col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="s2cpassword" type="password" name="confirmPassword" required>
                                                <label for="s2cpassword">Confirm Password</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <?php /*<a class="btn waves-effect waves-light col s12">Staff Signup</a>*/ ?>
                                                <button class="btn waves-effect waves-light col s12" type="submit">Staff
                                                    Sign up
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col s3 m3 l2">
                                                <p class="margin right-align medium-small"><a onclick="rotateCard(this)"
                                                                                              class="btn btn-success">Login</a>
                                                </p>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <?php /*<div class="social-links text-center">*/ ?>
                                <?php /*<a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>*/ ?>
                                <?php /*<a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>*/ ?>
                                <?php /*<a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>*/ ?>
                                <?php /*</div>*/ ?>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->

            </div>

            <div class="col s12" id="intern" style="display: none;">
                <div id="login-page" class="row">

                    <div class="card-container manual-flip">
                        <div class="card">
                            <div class="front">
                                <div class="col s12 card-panel">
                                    <form class="login-form" id="intern_login" style="width:100%;"
                                          action="/interns/log/in" method="post">
                                        <input type="hidden" class="timezone" name="timezone" value=""/>
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <a class="navbar-brand" href="#"
                                                   style="font-family: 'Lobster Two', cursive; color:#351969; font-size:30px;">Intern
                                                    Login</a>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field intern_login col s12">
                                                <i class="mdi-social-person-outline prefix"></i>
                                                <input id="internusername" type="email" name="email" required>
                                                <label for="internusername" class="center-align">Email</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field intern_login col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="ipassword" type="password" name="password" required>
                                                <label for="ipassword">Password</label>
                                            </div>
                                        </div>
                                        <?php /*<div class="row">*/ ?>
                                        <?php /*<div class="input-field col s12 m12 l12  login-text">*/ ?>
                                        <?php /*<input type="checkbox" id="remember-me3" />*/ ?>
                                        <?php /*<label for="remember-me3">Remember me</label>*/ ?>
                                        <?php /*</div>*/ ?>
                                        <?php /*</div>*/ ?>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <?php /*<a href="dashboard.html" class="btn waves-effect waves-light col s12">Intern Login</a>*/ ?>
                                                <button class="btn waves-effect waves-light col s12" type="submit">
                                                    Intern Login
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6 m6 l6">
                                                <p class="margin medium-small"><a href="/interns/forgot/password">Forgot
                                                        password?</a></p>
                                            </div>
                                            <div class="input-field col s6 m6 l6">
                                                <p class="margin right-align medium-small">Don't have account? <a
                                                            onclick="rotateCard(this)"
                                                            style="cursor:pointer;">Signup</a></p>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end front panel -->

                            <div class="back">

                                <div class="col s12 card-panel">
                                    <form class="login-form" id="intern_register" style="width:100%;"
                                          action="/interns/sign/up" method="post">
                                        <div class="row">
                                            <div class="input-field col s12 center">
                                                <a class="navbar-brand" href="#"
                                                   style="font-family: 'Lobster Two', cursive; color:#351969; font-size:30px;">Intern
                                                    Signup</a>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field intern col s12">
                                                <i class="mdi-social-person-outline prefix"></i>
                                                <input id="isname" type="text" name="firstname" required>
                                                <label for="isname" class="center-align">Name</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field intern col s12">
                                                <i class="mdi-communication-email prefix"></i>
                                                <input id="iemail" type="email" name="email" required>
                                                <label for="iemail" class="center-align">Email</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field intern col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="icpassword" type="password" name="password" required>
                                                <label for="icpassword">Password</label>
                                            </div>
                                        </div>
                                        <div class="row margin">
                                            <div class="input-field intern col s12">
                                                <i class="mdi-action-lock-outline prefix"></i>
                                                <input id="i2cpassword" type="password" name="confirmPassword" required>
                                                <label for="i2cpassword">Confirm Password</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <?php /*<a class="btn waves-effect waves-light col s12">Intern Signup</a>*/ ?>
                                                <button class="btn waves-effect waves-light col s12" type="submit">
                                                    Intern Sign up
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col s3 m3 l2">
                                                <p class="margin right-align medium-small"><a onclick="rotateCard(this)"
                                                                                              class="btn btn-success">Login</a>
                                                </p>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <?php /*<div class="social-links text-center">*/ ?>
                                <?php /*<a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>*/ ?>
                                <?php /*<a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>*/ ?>
                                <?php /*<a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>*/ ?>
                                <?php /*</div>*/ ?>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->

            </div>

        </div>

    </div>
</div>

<style>
    .card-container {
        -webkit-perspective: 800px;
        -moz-perspective: 800px;
        -o-perspective: 800px;
        perspective: 800px;
        margin-bottom: 30px;
    }

    /* flip the pane when hovered */
    .card-container:not(.manual-flip):hover .card,
    .card-container.hover.manual-flip .card {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .card-container.static:hover .card,
    .card-container.static.hover .card {
        -webkit-transform: none;
        -moz-transform: none;
        -o-transform: none;
        transform: none;
    }

    /* flip speed goes here */
    .card {
        -webkit-transition: -webkit-transform .5s;
        -moz-transition: -moz-transform .5s;
        -o-transition: -o-transform .5s;
        transition: transform .5s;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        position: relative;
        margin: 0;
    }

    /* hide back of pane during swap */
    .front, .back {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -o-backface-visibility: hidden;
        backface-visibility: hidden;
        position: absolute;
        top: 0;
        left: 0;

    }

    /* front pane, placed above back */
    .front {
        z-index: 2;
    }

    /* back, initially hidden pane */
    .back {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
        z-index: 3;
    }

    .back .btn-simple {
        position: absolute;
        left: 0;
        bottom: 4px;
    }

    /*        Style       */

    .card {
        overflow: visible;
    }

    .card {
        background: none repeat scroll 0 0 #FFFFFF;
        border-radius: 4px;
        color: #444444;
    }

    .card-container, .front, .back {
        width: 100%;
        height: 420px;
        border-radius: 4px;
    }

    .card .cover {
        height: 105px;
        overflow: hidden;
        border-radius: 4px 4px 0 0;
    }

    .card .cover img {
        width: 100%;
    }

    .card .user {
        border-radius: 50%;
        display: block;
        height: 120px;
        margin: -55px auto 0;
        overflow: hidden;
        width: 120px;
    }

    .card .user img {
        background: none repeat scroll 0 0 #FFFFFF;
        border: 4px solid #FFFFFF;
        width: 100%;
    }

    .card .content {
        background-color: rgba(0, 0, 0, 0);
        box-shadow: none;
        padding: 10px 20px 20px;
    }

    .card .content .main {
        min-height: 160px;
    }

    .card .back .content .main {
        height: 215px;
    }

    .card .name {
        font-size: 22px;
        line-height: 28px;
        margin: 10px 0 0;
        text-align: center;
        text-transform: capitalize;
    }

    .card h5 {
        margin: 5px 0;
        font-weight: 400;
        line-height: 20px;
    }

    .card .profession {
        color: #999999;
        text-align: center;
        margin-bottom: 20px;
    }

    .card .footer {
        border-top: 1px solid #EEEEEE;
        color: #999999;
        margin: 30px 0 0;
        padding: 10px 0 0;
        text-align: center;
    }

    .card .footer .social-links {
        font-size: 18px;
    }

    .card .footer .social-links a {
        margin: 0 7px;
    }

    .card .footer .btn-simple {
        margin-top: -6px;
    }

    .card .header {
        padding: 15px 20px;
        height: 90px;
    }

    .card .motto {
        border-bottom: 1px solid #EEEEEE;
        color: #999999;
        font-size: 14px;
        font-weight: 400;
        padding-bottom: 10px;
        text-align: center;
    }

    .card .stats-container {
        width: 100%;
        margin-top: 50px;
    }

    .card .stats {
        display: block;
        float: left;
        width: 33.333333%;
        text-align: center;
    }

    .card .stats:first-child {
        border-right: 1px solid #EEEEEE;
    }

    .card .stats:last-child {
        border-left: 1px solid #EEEEEE;
    }

    .card .stats h4 {
        font-weight: 300;
        margin-bottom: 5px;
    }

    .card .stats p {
        color: #777777;
    }

    /*      Just for presentation        */

    .title {
        color: #506A85;
        text-align: center;
        font-weight: 300;
        font-size: 44px;
        margin-bottom: 90px;
        line-height: 90%;
    }

    .title small {
        font-size: 17px;
        color: #999;
        text-transform: uppercase;
        margin: 0;
    }

    .space-30 {
        height: 30px;
        display: block;
    }

    .space-50 {
        height: 50px;
        display: block;
    }

    .space-200 {
        height: 200px;
        display: block;
    }

    .white-board {
        background-color: #FFFFFF;
        min-height: 200px;
        padding: 60px 60px 20px;
    }

    .ct-heart {
        color: #F74933;
    }

    pre.prettyprint {
        background-color: #ffffff;
        border: 1px solid #999;
        margin-top: 20px;
        padding: 20px;
        text-align: left;
    }

    .atv, .str {
        color: #05AE0E;
    }

    .tag, .pln, .kwd {
        color: #3472F7;
    }

    .atn {
        color: #2C93FF;
    }

    .pln {
        color: #333;
    }

    .com {
        color: #999;
    }

    .btn-simple {
        opacity: .8;
        color: #666666;
        background-color: transparent;
    }

    .btn-simple:hover,
    .btn-simple:focus {
        background-color: transparent;
        box-shadow: none;
        opacity: 1;
    }

    .btn-simple i {
        font-size: 16px;
    }

    .navbar-brand-logo {
        padding: 0;
    }

    .navbar-brand-logo .logo {
        border: 1px solid #333333;
        border-radius: 50%;
        float: left;
        overflow: hidden;
        width: 60px;
    }

    .navbar .navbar-brand-logo .brand {
        color: #FFFFFF;
        float: left;
        font-size: 18px;
        font-weight: 400;
        line-height: 20px;
        margin-left: 10px;
        margin-top: 10px;
        width: 60px;
    }

    .navbar-default .navbar-brand-logo .brand {
        color: #555;
    }

    /*       Fix bug for IE      */

    @media  screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .front, .back {
            -ms-backface-visibility: visible;
            backface-visibility: visible;
        }

        .back {
            visibility: hidden;
            -ms-transition: all 0.2s cubic-bezier(.92, .01, .83, .67);
        }

        .front {
            z-index: 4;
        }

        .card-container:not(.manual-flip):hover .back,
        .card-container.manual-flip.hover .back {
            z-index: 5;
            visibility: visible;
        }
    }

    html {
        overflow-x: hidden;
        overflow-y: scroll;
    }

    html {
        display: block;
        margin: auto;
    }

    body {
        display: block;
        vertical-align: middle;
    }

    .error {
        color: red;
    }
</style>


<!-- ================================================
  Scripts
  ================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="/assets/admin/js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="/assets/admin/js/materialize.min.js"></script>
<script type="text/javascript" src="/assets/admin/js/plugins.min.js"></script>
<script src="/assets/admin/js/dropdown.js"></script>
<script src="/assets/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="/assets/admin/js/jstz.min.js"></script>

<script type="text/javascript">
    function rotateCard(btn) {
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if ($card.hasClass('hover')) {
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }

    $(document).ready(function () {
        var timezone = jstz.determine();
        $('.timezone').val(timezone.name());
    });
</script>

<script>
//     var username = $("#username").val();
//     console.log(username);
// if (username != '') {
//     $("#usernameLabel").addClass("active");
// }
// console.log('outSide');
//
//
//     $(document).ready(function () {
//
//         console.log("-----------------");
//         var val = $('#username').val();
//         console.log(val);
//
//         console.log($('#username').val());
//         $('input[name=emailOrUsername]').on('input', function () {
//         // $(document.body).on('input','#username',function () {
//             console.log("input is already present");
//             $('#usernameLabel').addClass("active");
//         });


        $("#admin_login").validate({
            rules: {
                emailOrUsername: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                }
            },
            messages: {
                emailOrUsername: {
                    required: "please enter email or username"
                },
                password: {
                    required: "Please enter password",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                }
                else if (element.prop("type") === "radio") {
                    error.insertAfter(element.parent("label"));
                }

                else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".admin").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".admin").addClass("has-success").removeClass("has-error");
            }
        });

        $("#intern_login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                }
            },
            messages: {
                email: {
                    required: "please enter email",
                    email: "please enter valid email"
                },
                password: {
                    required: "Please enter password",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                }
                else if (element.prop("type") === "radio") {
                    error.insertAfter(element.parent("label"));
                }

                else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".intern_login").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".intern_login").addClass("has-success").removeClass("has-error");
            }
        });

        $("#staff_login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                }
            },
            messages: {
                email: {
                    required: "please enter email",
                    email: "please enter valid email"
                },
                password: {
                    required: "Please enter password",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                }
                else if (element.prop("type") === "radio") {
                    error.insertAfter(element.parent("label"));
                }

                else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".staff_login").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".staff_login").addClass("has-success").removeClass("has-error");
            }
        });

        $("#intern_register").validate({
            rules: {
                firstname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#icpassword",
                    minlength: 6,
                    maxlength: 20
                }
            },
            messages: {
                firstname: "Please enter First name",
                email: {
                    required: "please enter email",
                    email: "please enter valid email"
                },
                password: {
                    required: "Please enter password",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                },
                confirmPassword: {
                    required: "Please enter Confirm password",
                    equalTo: "Please enter same password.",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                }
                else if (element.prop("type") === "radio") {
                    error.insertAfter(element.parent("label"));
                }

                else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".intern").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".intern").addClass("has-success").removeClass("has-error");
            }
        });

        $("#staff_register").validate({
            rules: {
                firstname: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 20
                },
                confirmPassword: {
                    required: true,
                    equalTo: "#scpassword",
                    minlength: 6,
                    maxlength: 20
                }
            },
            messages: {
                firstname: "Please enter First name",
                email: {
                    required: "please enter email",
                    email: "please enter valid email"
                },
                password: {
                    required: "Please enter password",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                },
                confirmPassword: {
                    required: "Please enter Confirm password",
                    equalTo: "Please enter same password.",
                    minlength: "Please enter password of at least 6 characters.",
                    maxlength: "Please enter password not more than 20 characters."
                }
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                }
                else if (element.prop("type") === "radio") {
                    error.insertAfter(element.parent("label"));
                }

                else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".staff").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".staff").addClass("has-success").removeClass("has-error");
            }
        });

    });
</script>
<?php /*<script>*/ ?>
    <?php /*$(window).load(function () {*/ ?>
       <?php /*$('#username').focus();*/ ?>
    <?php /*});*/ ?>
<?php /*</script>*/ ?>
<script>
$(document).ready(function() {
M.updateTextFields();
});
</script>
</body>
</html>