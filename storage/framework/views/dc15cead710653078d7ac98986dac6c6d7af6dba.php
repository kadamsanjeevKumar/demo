<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e('Signup - '.env('APP_DOMAIN')); ?></title>
    <meta name="description" content="">
    <link rel="stylesheet" href="/assets/user/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/user/css/font-awesome.min.css" />
    <!--    <link rel="stylesheet" href="/assets/user/css/style.css" />-->
    <style>
        @import  url("https://fonts.googleapis.com/css?family=Work+Sans:400,600");
        @import  url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Righteous');
        * {
            box-sizing: border-box;
        }
        
        html,
        body {
            height: 100%;
            width: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
        }
        
        body {
            background: -webkit-linear-gradient(45deg, #533687 10%, #533687 50%, #351969 50%);
            background: linear-gradient(45deg, #533687 10%, #533687 50%, #351969 50%);
        }
        
        main {
            padding: 20px 0;
        }
        
        fieldset {
            border: none;
            padding: 0;
            margin-bottom: 20px;
            position: relative;
        }
        
        label {
            display: inline-block;
            margin-bottom: 5px;
            color: rgba(0, 0, 0, 0.57);
            font-size: 1em;
            font-weight: 400;
        }
        
        input {
            width: 100%;
            outline: none;
            border: none;
            background: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, 0.3);
            line-height: 1.8em;
            height: 1.8em;
            font-size: 1em;
            color: rgba(0, 0, 0, 0.87);
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
        }
        
        input + label {
            position: absolute;
            top: 0;
            margin: 0;
            font-size: 1em;
            line-height: 1.8em;
            height: 1.8em;
            pointer-events: none;
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        
        input:focus,
        input.has-value {
            border-color: rgba(0, 0, 0, 0.57);
        }
        
        input:focus + label,
        input.has-value + label {
            top: -15px;
            -webkit-transform: scale(0.8);
            transform: scale(0.8);
        }
        
        a {
            text-decoration: none;
            color: #9b59b6;
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
            display: inline-block;
        }
        
        a:hover,
        a:focus {
            color: #8e44ad;
        }
        
        a:focus {
            text-decoration: underline;
            outline: none;
        }
        
        .card {
            max-width: 400px;
            background: white;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 1px 5px 1px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .card__header {
            padding: 20px 0;
        }
        
        .card__body {
            padding: 20px 50px;
        }
        
        .auth__title {
            position: sticky;
            color: #533687;
            border-left: 8px solid #533687;
            padding-left: 42px;
            line-height: 40px;
            font-weight: 600;
            font-size: 24px;
        }
        
        #login,
        #forgot {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            -webkit-transition: opacity .1s linear;
            transition: opacity .1s linear;
        }
        
        #login.active,
        #forgot.active {
            visibility: visible;
            position: relative;
            opacity: 1;
        }
        
        #forgot {
            background: #fff;
            color: #533687;
        }
        
        #forgot .auth__title {
            color: white;
            border-left-color: white;
        }
        
        .btn {
            outline: none;
            background: none;
            border: none;
            text-align: center;
            font-size: 1em;
            font-weight: 600;
            color: rgba(0, 0, 0, 0.56);
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 3px;
            line-height: 34px;
            height: 36px;
            padding: 0 10px;
            cursor: pointer;
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
        }
        
        .btn:hover {
            background: whitesmoke;
        }
        
        .btn--block {
            display: block;
            width: 100%;
        }
        
        .or {
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }
        
        .or span {
            display: inline-block;
            vertical-align: middle;
            padding: 0;
            color: #533687;
            text-transform: uppercase;
            font-size: 14px;
            width: 32px;
            height: 32px;
            line-height: 28px;
            border: 2px solid #533687;
            border-radius: 50%;
        }
        
        .or span:after,
        .or span:before {
            content: "";
            position: absolute;
            top: 50%;
            width: calc(50% - 16px);
            height: 2px;
            background: #533687;
        }
        
        .or span:before {
            left: 0;
        }
        
        .or span:after {
            right: 0;
        }
        
        .signup-toggler {
            display: block;
            position: absolute;
            outline: none;
            border: none;
            padding: 0;
            font-size: 1em;
            right: 10px;
            top: 0;
            height: 50px;
            width: 50px;
            line-height: 48px;
            text-align: center;
            color: white;
            background: #533687;
            border-radius: 50%;
            box-shadow: 0 1px 1px whitesmoke inset, 0 1px 3px 1px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
        }
        
        .signup-toggler:hover {
            box-shadow: 0 1px 1px whitesmoke inset, 0 2px 5px 2px rgba(0, 0, 0, 0.2);
        }
        
        .c-ripple {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            visibility: hidden;
            overflow: hidden;
            background: transparent;
            z-index: 10;
        }
        
        .c-ripple__circle {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            opacity: 0;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: #533687;
        }
        
        .c-ripple#signupRipple .c-ripple__circle {
            background: #533687;
        }
        
        .c-ripple#forgotPassRipple .c-ripple__circle {
            background: #533687;
        }
        
        .c-ripple.is-active {
            visibility: visible;
        }
        
        .c-ripple.is-active .c-ripple__circle {
            -webkit-animation: a-ripple .7s ease-in forwards;
            animation: a-ripple .7s ease-in forwards;
        }
        
        .c-ripple.is-active .c-ripple__circle--reverse {
            -webkit-animation-direction: reverse;
            animation-direction: reverse;
        }
        /**
 * Animation: Ripple
 * --------------------------------------------------
 */
        
        @-webkit-keyframes a-ripple {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                width: 400%;
                height: 400%;
                opacity: 1;
            }
        }
        
        @keyframes  a-ripple {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                width: 400%;
                height: 400%;
                opacity: 1;
            }
        }
        
        .pull--left {
            float: left !important;
        }
        
        .pull--right {
            float: right !important;
        }
        
        .text--secondary {
            color: rgba(0, 0, 0, 0.57);
        }
        
        .text--center {
            text-align: center;
        }
        
        .pad--0 {
            padding: 0 !important;
        }
        
        .pad-t--0 {
            padding-top: 0 !important;
        }
        
        .pad-t--5px {
            padding-top: 5px !important;
        }
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <main>
        <div class="card">
            <div class="c-ripple js-ripple" id="signupRipple"><span class="c-ripple__circle"></span></div>
            <div class="c-ripple js-ripple" id="forgotPassRipple"><span class="c-ripple__circle"></span></div>
            <?php if(Session::has('invalidCredentials')): ?>
                <div class="alert alert-danger"> <?php echo e(session('invalidCredentials')); ?></div>
            <?php endif; ?>
            <?php if(Session::has('capchamessage')): ?>
                <div class="alert alert-danger"> <?php echo e(session('capchamessage')); ?></div>
            <?php endif; ?>
            <div class="active" id="login">
                <div class="card__header">
                    <div class="col-md-9 col-md-offset-3">
                        <a class="navbar-brand" href="/" style="font-family: 'Lobster Two', cursive; color:#533687; font-size:30px;">Page20.com</a>
                    </div>
                    <br/><br/><br/>
                    <div class="auth__title"><span>SIGNUP</span>
                        <!--          <button class="signup-toggler" data-toggle="ripple" data-target="#signupRipple">+</button>-->
                    </div>
                </div>
                <div class="card__body">
                    <form method="post" action="/create-account">
                        <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <input id="firstname" type="text" name="firstname" required="required" placeholder="Name" value="<?php echo e(old('firstname')); ?>"/>
                            <div class="error" style="color: red;"><?php echo e($errors->first('firstname')); ?></div>
                        </fieldset>

                        <fieldset>
                            <input id="email" type="text" name="email" required="required" placeholder="Email" value="<?php echo e(old('email')); ?>"/>
                            <div class="error" style="color: red;"><?php echo e($errors->first('email')); ?></div>
                        </fieldset>

                        <fieldset>
                            <input id="confirm_email" type="text" name="confirm_email" required="required" placeholder="Confirm Email" value="<?php echo e(old('confirm_email')); ?>"/>
                            <div class="error" style="color: red;"><?php echo e($errors->first('confirm_email')); ?></div>
                        </fieldset>

                        <fieldset>
                            <input id="facebook_link" type="text" name="facebook_link"  placeholder="Facebook Id Link" value="<?php echo e(old('facebook_link')); ?>"/>
                            <div class="error" style="color: red;"><?php echo e($errors->first('facebook_link')); ?></div>
                        </fieldset>

                        <fieldset>
                            <input id="phone" type="text" name="phone" placeholder="Phone No." value="<?php echo e(old('phone')); ?>"/>
                            <div class="error" style="color: red;"><?php echo e($errors->first('phone')); ?></div>
                        </fieldset>

                        <fieldset>
                            <input id="password" type="password" name="password" required="required" placeholder="Password" />
                            <div class="error" style="color: red;"><?php echo e($errors->first('password')); ?></div>
                        </fieldset>

                        <fieldset>
                            <input id="confirm_password" type="password" name="confirm_password" required="required" placeholder="Confirm Password" />
                            <div class="error" style="color: red;"><?php echo e($errors->first('confirm_password')); ?></div>
                        </fieldset>

                        <fieldset>
                            <div class="g-recaptcha" data-sitekey="<?php echo e(env('RECAPCHA_SITE_KEY')); ?>"></div>
                        </fieldset>

                        <fieldset>
                            <button class="btn btn--block" type="submit">Signup</button>
                        </fieldset>

                        <div class="or"><span></span></div>
                        <p class="text--center text--secondary">Already have an Account</p>
                    </form>
                    <div class="text--center">
                        <a href="/login">
                            <button class="btn">Login</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="/assets/user/js/jquery.min.js"></script>
<script src="/assets/user/js/bootstrap.min.js"></script>
<script>
    $("input").on("input", function () {
        var input = $(this);
        if (input.val()) {
            input.addClass("has-value")
        } else {
            input.removeClass("has-value")
        }
    });
</script>

</html>