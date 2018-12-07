<?php if(!empty(Session::get('package_details')) && empty(Session::get('pc_user'))): ?>
    <script type="text/javascript">
        window.location = "/admin/posts";
    </script>
    <?php else: ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e('Login - '.env('APP_DOMAIN')); ?></title>
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
            background: white;
            color: #533687;
        }

        #forgot .auth__title {
            color: #533687;
            border-left-color: #533687;
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
            background: #8e44ad;
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
</head>

<body>

    <main>
        <div class="card">
            <div class="c-ripple js-ripple" id="signupRipple"><span class="c-ripple__circle"></span></div>
            <div class="c-ripple js-ripple" id="forgotPassRipple"><span class="c-ripple__circle"></span></div>
            <?php /*<?php echo e(dd(Session::get('invalidCredentials'))); ?>*/ ?>
        <?php if(Session::has('invalidCredentials')): ?>
                <div class="alert alert-danger"> <?php echo e(session('invalidCredentials')); ?></div>
            <?php endif; ?>
            <?php if(Session::has('registerSuccesMessage')): ?>
                <div class="alert alert-success"> <?php echo e(session('registerSuccesMessage')); ?></div>
            <?php endif; ?>

            <?php if(Session::has('alert')): ?>
                <div class="alert alert-success"> <?php echo e(session('alert')); ?></div>
            <?php endif; ?>

            <?php if(Session::has('alert-error')): ?>
                <div class="alert alert-danger"> <?php echo e(session('alert-error')); ?></div>
            <?php endif; ?>

            <?php if(Session::has('reportadlogin')): ?>
                <div class="alert alert-success"> <?php echo e(session('reportadlogin')); ?></div>
                <?php Session::forget('reportadlogin'); ?>
            <?php endif; ?>

            <div class="alert alert-danger posting_rules_msg" style="display: none;color: red;"> </div>

            <div class="alert alert-danger session_expired" style="display: none;color: red;"> </div>

            <div class="active" id="login">
                <div class="card__header">
                    <div class="col-md-9 col-md-offset-3">
                        <a class="navbar-brand" href="/" style="font-family: 'Lobster Two', cursive; color:#533687; font-size:30px;">Page20.com</a>
                    </div>
                    <br/><br/><br/>
                    <div class="auth__title"><span>LOGIN</span></div>
                </div>
                <div class="card__body">
<?php /*                    <?php echo e(dd($amount)); ?>*/ ?>
                    <form method="post" action="/login">
                        <input type="hidden" name="packagename" value="<?php echo e($packagename); ?>">
                        <input type="hidden" name="package_id" value="<?php echo e($package_id); ?>">
                        <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                        <input type="hidden" class="timezone" name="timezone" value=""/>
                        <input type="hidden" class="verify_session" name="verify_session" value=""/>
                        <input type="hidden" class="posting_rules" name="posting_rules" value=""/>
                        <input type="hidden" class="sponsor_logged" name="sponsor_logged" value=""/>
                        <input type="hidden" name="redirect_url" value="<?php echo e(Session::get('redirect_url')); ?>"/>
                        <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <input type="text" name="email" required="required" placeholder="Email" value="<?php echo e(old('email')); ?>"/>
                        </fieldset>
                        <fieldset>
                            <input type="password" name="password" required="required" placeholder="Password" />
                            <a class="pull--right" id="forgotPassToggler" href="/forgot-password" data-toggle="ripple" ><small>Forgot password ?</small></a>
                        </fieldset>
                        <fieldset>
                            <button class="btn btn--block" type="submit">Login</button>
                        </fieldset>
                        <div class="or"><span></span></div>
                        <p class="text--center text--secondary">Create an Account</p>
                    </form>
                    <div class="text--center">
                        <a href="/create-account"><button class="btn">Signup</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="/assets/user/js/jquery.min.js"></script>
<script src="/assets/user/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/user/js/jstz.min.js"></script>
<script>
    $(document).ready(function(){
        var timezone = jstz.determine();
        $('.timezone').val(timezone.name());

        var href = window.location.href;
        if(href.indexOf('verify=yes') != -1){
            $('.verify_session').val('yes');
        }
        else if(href.indexOf('session_expired=yes') != -1){
            $('.session_expired').css('display','block');
            $('.session_expired').html('<b>Your session has been expired now. Please log in again.</b>');
        }
        else if(href.indexOf('posting_rules=yes') != -1){
            $('.posting_rules').val(href);
            $('.posting_rules_msg').css('display','block');
            $('.posting_rules_msg').html('<b>Please log in to post in this category.</b>');

            (function (global) {
                if(typeof (global) === "undefined") {
                    throw new Error("window is undefined");
                }

                var _hash = "!";
                var noBackPlease = function () {
                    global.location.href += "#";

                    // making sure we have the fruit available for juice (^__^)
                    global.setTimeout(function () {
                        global.location.href += "!";
                    }, 50);
                };

                global.onhashchange = function () {
                    if (global.location.hash !== _hash) {
                        global.location.hash = _hash;
                    }
                };
                global.onload = function () {
                    noBackPlease();

                    // disables backspace on page except on input fields and textarea..
                    document.body.onkeydown = function (e) {
                        var elm = e.target.nodeName.toLowerCase();
                        if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                            e.preventDefault();
                        }
                        // stopping event bubbling up the DOM tree..
                        e.stopPropagation();
                    };
                }
            })(window);
        }
        else if(href.indexOf('sponsor_logged=yes') != -1){
            $('.sponsor_logged').val(href);
            $('.posting_rules_msg').css('display','block');
            $('.posting_rules_msg').html('<b>Please log in to post in this category.</b>');

            (function (global) {
                if(typeof (global) === "undefined") {
                    throw new Error("window is undefined");
                }

                var _hash = "!";
                var noBackPlease = function () {
                    global.location.href += "#";

                    // making sure we have the fruit available for juice (^__^)
                    global.setTimeout(function () {
                        global.location.href += "!";
                    }, 50);
                };

                global.onhashchange = function () {
                    if (global.location.hash !== _hash) {
                        global.location.hash = _hash;
                    }
                };
                global.onload = function () {
                    noBackPlease();

                    // disables backspace on page except on input fields and textarea..
                    document.body.onkeydown = function (e) {
                        var elm = e.target.nodeName.toLowerCase();
                        if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                            e.preventDefault();
                        }
                        // stopping event bubbling up the DOM tree..
                        e.stopPropagation();
                    };
                }
            })(window);
        }
    });

    $("input").on("input", function () {
        var input = $(this);
        if (input.val()) {
            input.addClass("has-value")
        } else {
            input.removeClass("has-value")
        }
    });

    function triggerRipple(rippleSelector, e, cb) {
        var $ripple = $(rippleSelector);
        var $offset = $ripple.parent().offset();
        var $circle = $ripple.find('.c-ripple__circle');

        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;

        $circle.css({
            top: y + 'px',
            left: x + 'px'
        });

        $ripple.addClass('is-active');

        $ripple.on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', function (e) {
            if (typeof cb === "function")
                cb();
            $(this).removeClass('is-active');
        });
    }

    $("body").on("click", "[data-toggle=ripple]", function (e) {
        triggerRipple($(this).data("target"), e)
    });

    $("#login #forgotPassToggler").on("click", function (e) {
        triggerRipple($(this).data("target"), e, function () {
            $("#login").removeClass("active");
            $("#forgot").addClass("active");
        })
    });

    function forgotPassword() {
        var token = $('#token').val();
        var email = $('#forgotemail').val();
        var status = true;
        $("#spnError1").css("display", "none");
        if (email == null || email == "") {
            $("#spnError1").css("display", "block");
            status = false;
        }
        if(status == false)
        {
            return false;
        }
        $.ajax({
            url: '/forgot-password',
            method: 'post',
            data: {
                _token: token,
                email : email
            },
            datatype: 'json',
            beforeSend: function () {
                $('#blockDiv').removeClass('hide');
            },
            complete: function () {
                $('#blockDiv').addClass('hide');
            },
            success: function (message) {
                message = $.parseJSON(message);
                if (message['status'] == 200) {

                }
            }
        });
    }

</script>

</html>

<?php endif; ?>