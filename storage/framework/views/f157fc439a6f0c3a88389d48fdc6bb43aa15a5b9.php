<?php
$id = '';
if(!empty(Session::get('pc_admin')) && empty(Session::get('pc_user'))){
    if(empty(Session::get('package_details'))){
        $data = [];
        $data[0] = Session::get('pc_admin')->id;
        $data[1] = Session::get('pc_admin')->email;
        Session::put('package_details',$data);
        $id = Session::get('pc_admin')->id;
    }else{
        $id = Session::get('pc_admin')->id;
    }
}else{
    Session::forget('package_details');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property=”og:image” content=”<?php echo e(env('APP_URL')); ?>/assets/user/images/logo.png”>
    <?php /*<title>Free Classifieds - page20.com</title>*/ ?>
    <title>Page20.com Best Free Site to Post ads now just like Kijiji, EBay, Auto Trader Co part , Backpage, Craigslist. Leo List, Monster.ca, Tinder, AshleyMadison, Eros, Dating, Clubs, Parties - #Page20</title>
    <link rel='shortcut icon' type='image/x-icon' href='/assets/user/images/favicon.ico'/>
    <meta name="description" content="Page20.com is a free classifieds website. Search for anything or post Free ads, Find homes and apts for rent, jobs, pets, personals. services, Buy/Sell stuffs, for sale,
events and local community">
    <meta name="keywords" content="Free Classifieds Ads, free classifieds, free ads, free advertising online, backpage alternative, adult & dating classifieds, Find a new cars,Autotrader,Vancouver,Canada,Metro,Vancouver free ads,buy sell trade,property,pets,escorts,live chat,Motors,Toronto,ontario,toronto escorts,Audi, BMW, Bentley, Bugatti, Datsun, Dodge, Ferrari, Fiat, Force, Ford, Genesis, Honda, Hyundai, Jaguar, Jeep, KTM, Lamborghini, Land Rover, Lexus, Leyland, Maserati, Maybach, Mazda, Mercedes, Benz, Mitsubishi, Nissan, Pagani, Porsche, Renault, Rolls-Royce, Skoda, Suzuki, Tata, Tesla, Toyota, Volkswagen, Volvo, Gap, Tommy Hilfiger‎, Calvin Klein, Fossil, Guess, Izod, Levi Strauss, Canadian beer, Lululemon Athletica‎, Air Canada, Browns Shoes, Balmshell, Poutine, Anal Sex, Weather, Slitherio, 123movies, games and movie streaming services, Reborn dolls, antiques, Fender, hockey sticks, cross stitch, Djinn, GPS, Collectables, tractor, Mustang, scrapbooking, perfume, Barbie, baby stroller, Canadian Art, Lego, Gift Cards, Sports Memorabilia, Home/Garden, laptop, gold coin, Nikon, camera, Harley Davidson, watches, Smallville, Entertainment, hotel, Jewellery/Watches, wedding services, Canadian money, Video Games, Make money, Forklift,  Upright Bike, Samsung, Apple, Gucci, Chanel, YSL, Rolex, Microsoft, Google, Ali Baba, TaoBao, postAd, shoes, sex dolls">
    <?php /*job, buy a car, find a house or*/ ?>
<?php /*apartment, furniture, free classifieds, classifieds, classified ads, musician, massage, backpage, appliances, personals, for sale, services, community, events,Buy and sell electronics, cars, fashion apparel, collectibles, sporting goods, digital cameras, baby items,coupons,everything else on page20,online marketplace,ebay,Visit Page20 Classifieds to buy,sell,or trade almost anything! New and used items, real estate,jobs,vacation rentals and more virtually anywhere in Canada,Canada ads,Kijiji,used cars,used cars for sale,cars for sale,*/ ?>
    <link rel="stylesheet" href="/assets/user/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/user/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/assets/user/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/plugins/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="/assets/user/plugins/sweetalert2/dist/sweetalert2.css">
    <link href="/assets/user/css/material-icon.css" rel="stylesheet">

    <script src="/assets/user/plugins/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/assets/user/plugins/sweetalert2/dist/sweetalert2.min.js"></script>

    <script type="text/javascript" src="/assets/user/js/jstz.min.js"></script>
    <script>
        var timezone = jstz.determine();
        document.cookie = "timezone=" + timezone.name() + ";domain=.<?php echo e(env('APP_DOMAIN')); ?>;path=/";
    </script>
    <link href="/assets/user/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/assets/user/css/jquery-ui.css"/>
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Righteous');
        /*@media  only screen and (min-width:1824px){*/
        /*.mac-footer{*/
        /*min-height:1000px !important;*/
        /*}*/
        /*}*/
        /*.mac-footer{*/
        /*min-height:450px;*/
        /*}*/
        html {
            height: 100%;
        }

        body{
            position: relative;
            min-height: 100%;
        }

        .container-fluid {
            padding-bottom: 7%;
        }

        .well {
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }

        .well:hover {
            box-shadow: 0px 0px 50px #000000;
            z-index: 99999999;
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1.2);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1.2);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1.2);
            transition: all 200ms ease-in;
            transform: scale(1.2);
            width: 100%;
            position: relative;
            /*    position: absolute;*/

        }
        .online-dot{
            width: 10px;
            height: 10px;
            background: green none repeat scroll 0% 0%;
            border-radius: 50px;
            z-index: 9999;
            position: absolute;
            margin: -28px 0px 0px 11px;
            border: 1px solid rgb(255, 255, 255);
        }
        @supports (-webkit-appearance:none) {
            .online-dot{
                width: 7px;
                height: 7px;
                background: green none repeat scroll 0% 0%;
                border-radius: 50px;
                z-index: 9999;
                position: absolute;
                margin: -28px 0px 0px 13px;
                border: 1px solid rgb(255, 255, 255);
            }
        }
        .visitor_btn{border: 1px  dashed #533688; padding: 10px 19px; text-decoration: none; font-size: 18px; color: #533688;}
        .visitor_btn:hover{border: 1px  dashed #533688; background: #533688; color: #fff; padding: 10px 19px; text-decoration: none;}
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        #loadingDiv{
            position:fixed;
            top:0px;
            right:0px;
            width:100%;
            height:100%;
            background-color:#492c7c;
            background-image:url("/assets/user/images/pageloader1.gif");
            background-repeat:no-repeat;
            background-position:center;
            z-index:10000000;
        }
    </style>
    <meta name="google-site-verification" content="M27Wryc5tw07QRc6vFl6afXWO8W-Hk_Wrs4JzalY1pM" />


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121618766-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121618766-1');
    </script>



    <?php /*Being Webmaster tools */ ?>
    <meta name="msvalidate.01" content="88CEBF98431F9BE77004DB1B3AB5E149" />

</head>

<body>
<?php include_once(public_path()."/analyticstracking.php"); ?>
<input type="hidden" id="adminid" <?php if(!empty($id)): ?> value="<?php echo e($id); ?>" <?php else: ?> value="" <?php endif; ?> >

<div style="display:block" id="loadingDiv">
</div>
<div class="container-fluid">
    <div class="row headerbg">
        <div class="col-md-12">

            <div class="col-md-6 col-sm-2">
                <a class="navbar-brand" href="/"
                   style="font-family: 'Lobster Two', cursive; color:#fff; font-size:30px;">Page20.com</a>
                <?php /*<?php if(!empty(Session::get('pc_user')['id'])): ?>*/ ?>
                    <?php /*<a class="navbar-brand" id="show_message"*/ ?>
                       <?php /*style="font-family: 'Lobster Two', cursive; color:#fff; font-size:30px; display: none"> <i*/ ?>
                                <?php /*class="material-icons">announcement</i></a>*/ ?>
                <?php /*<?php endif; ?>*/ ?>
            </div>

            <div class="col-md-6 col-sm-6" style="float: right;">
                <div class="pull-right">
                    <span id="fakeMetricsStatus" hidden>
                    <a class="btn" style="padding: 0px 10px; margin-top: 15px; float: left; font-size: 20px;"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i style="font-size: 20px; color: #fff;" class="material-icons dp48">timeline</i>
                    </a>
                    </span>
                    <a href="#" style="padding: 0px 18px; margin-top: 15px; float: left; font-size: 20px;" id="bell_icon">
                        <?php /*<i style="color:#fff;" class="material-icons dp48">add_alert</i>*/ ?>
                        <i style="color:#fff;" class="glyphicon glyphicon-bell"></i>
                       <span class="online-dot seen" id="show_message" style="display: none"></span>
                    </a>

                    <?php
                    $retrieveDraftPost = retrieveDraftPost();
                    ?>
                    <?php /*<a href="/select/post/ad" style="float:left;">*/ ?>
                    <?php /*<button class="btn btn-default post-btn" type="button" style="margin-bottom:9px; padding: 7px 30px;">Post Ad</button>*/ ?>
                    <?php /*</a>*/ ?>
                    <?php if(!empty(Session::get('package_details')[1])): ?>
                        <a title="Go to Admin Profile" href="/admin/update/profile" style=" padding: 13px 30px;float:left;">
                            <h6 class="" style="color:#fff;"><b>ADMIN</b></h6>
                        </a>
                    <?php endif; ?>

                    <a href="/user/packages">
                        <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Packages</b></button>
                    </a>

                    <?php if(isset($retrieveDraftPost->post_id)): ?>
                        <?php if($retrieveDraftPost->locationid != 0): ?>
                            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')">
                                <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;"
                                        type="button"><b>Post Ad</b></button>
                            </a>
                        <?php else: ?>
                            <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')">
                                <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;"
                                        type="button"><b>Post Ad</b></button>
                            </a>
                        <?php endif; ?>
                    <?php else: ?>
                        <a href="/select/post/ad">
                            <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;"
                                    type="button"><b>Post Ad</b></button>
                        </a>
                    <?php endif; ?>
                    &nbsp;
                    <a href="/check/verify/user" style="">
                        <button class="btn btn-default post-btn" type="button"
                                style="margin-bottom:9px;padding: 7px 20.5px;"><b>Verify User</b></button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="alert alert-info message1" style="display:none;">
        <strong style="margin-left: 12%;" class="message"> </strong>
    </div>

    <?php /*<div class="alert alert-info">*/ ?>
        <?php /*<strong style="margin-left: 12%;"> We are testing and upgrading, website is in test mode please be patient with us we want to get it right, If you have any concerns please express them</strong>*/ ?>
    <?php /*</div>*/ ?>

    <div style=" background: #A386D7; padding:40px 8%;color: #fff;" class="row collapse" id="collapseExample">
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdownvisitor" id="onlinevisitors">0</h3>Online Visitors
            <a href="#" class="btn" style="background: #533687; padding: 5px 5px 1px 5px !important;"  data-toggle="modal" data-target="#counter_detail">
                <i style="font-size: 20px; color: #fff;" class="material-icons dp48">timeline</i>
            </a>
        </div>
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdowntotal" id="totalAds">0</h3>Total Ads Posted</div>
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdowntotaladweek" id="totalAdsWeek">0</h3>Ads Posted this Week</div>
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdownregistered" id="regUsers">0</h3>Registered Users</div>
    </div>
<?php /*    <?php echo e(dd(clickDeskStatus())); ?>*/ ?>

    <div class="row" style="margin-top: 40px;">
        <?php /*<input type="button" value="visitors">*/ ?>
        <div class="col-md-10 col-md-offset-1 mac-footer">
            <?php if($places): ?>
                <?php foreach($places as $place): ?>
                    <div class="col-md-3">
                        <a href="/places/<?php echo e($place->sub_domain_name); ?>" style="text-decoration:none;">
                            <div class="well well-sm home-categories">
                                <center>
                                    <?php if($status->status ==0): ?>
                                        <h4 class="home-categories-name"><b><?php echo e($place->place_name); ?></b></h4>
                                    <?php else: ?>
                                        <h4 class="home-categories-name"><b><?php echo e($place->place_name); ?></b></h4>
                                        <h4><?php echo e($place->totalPost); ?></h4>
                                    <?php endif; ?>
                                </center>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php /*<div class="col-md-12" style="padding:20px 40px;">*/ ?>
            <?php /*<a href="#" data-toggle="modal" data-target="#counter_detail" class="visitor_btn pull-right">Visitors: <b class="countdown">4679</b></a>*/ ?>
        <?php /*</div>*/ ?>
    </div>
</div>

<?php /*<div class="m-t-20" style="background-color: #f0efee;bottom: 0;padding: 15px 0;position: fixed;width: 100%;" >*/ ?>
<?php /*<div class="col-md-12 col-sm-12 col-xs-12 text-center">*/ ?>
<?php /*<div class="col-md-7 col-sm-7 col-xs-7 text-left">*/ ?>
<?php /*<ul class="list-inline" style="display:inline;">*/ ?>
<?php /*<li><a class="foot-links" href="/user/dashboard">My Account</a></li>*/ ?>
<?php /*<li><a class="foot-links" href="/contact-us/<?php echo $__env->yieldContent('location'); ?>">Contact</a></li>*/ ?>
<?php /*<li><a class="foot-links" href="/help">Help</a></li>*/ ?>
<?php /*<li><a class="foot-links" href="/privacy">Privacy</a></li>*/ ?>
<?php /*<li><a class="foot-links" href="/terms">Terms</a></li>*/ ?>
<?php /*<li><a class="foot-links" href="#">Safety</a></li>*/ ?>
<?php /*</ul>*/ ?>
<?php /*</div>*/ ?>
<?php /*<div class="col-md-5 col-sm-5 col-xs-5 text-right">*/ ?>
<?php /*<span><i class="glyphicon glyphicon-copyright-mark" style="color:#351969;"></i>&nbsp;2017 <a class="foot-links1" href="/">Page20.com</a></span>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php /*</div>*/ ?>
<?php $__env->startSection('footerdata'); ?>
    <?php echo e(env('APP_DOMAIN')); ?> is an interactive computer service that enables access by multiple users and should not be
    treated as the publisher or speaker of any information provided by another information content provider. © 2017 <a
            href="/"><?php echo e(env('APP_DOMAIN')); ?></a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('User::layouts.foter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<!-- Modal -->
<div class="modal fade" id="counter_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"  style="border: none;">
            <div class="modal-header">
                <b class="modal-title" id="exampleModalLabel">Modal title</b>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer" style="border: none;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<!— ClickDesk Live Chat Service for websites —>
<!— End of ClickDesk —>
<?php /*<?php if(clickDeskStatus() == 1): ?>*/ ?>
<?php /*<script type="text/javascript">*/ ?>
    <?php /*var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyEgsSBXVzZXJzGICA4KTyw-gKDA');*/ ?>
    <?php /*var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' :*/ ?>
        <?php /*'http://my.clickdesk.com/clickdesk-ui/browser/');*/ ?>
    <?php /*var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');*/ ?>
    <?php /*var glcspt = document.createElement('script'); glcspt.type = 'text/javascript';*/ ?>
    <?php /*glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';*/ ?>
    <?php /*var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);*/ ?>
<?php /*</script>*/ ?>
    <?php /*<?php endif; ?>*/ ?>

</body>
<script src="/assets/user/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/user/js/jquery-ui.js"></script>
<script type="text/javascript" src="/assets/user/js/jquery.floatingmessage.js"></script>
<script type="text/javascript" src="/assets/user/js/bootstrap.min.js"></script>

<script type='text/javascript'>



    $('#myCollapsible').collapse({
        toggle: false
    });

    function countUp3(type,count) {
        var div_by = 100,
            speed = Math.round(count / div_by),
            $display = $('.'+type),
            run_count = 1,
            int_speed = 15;
        var int = setInterval(function () {
            if (run_count < div_by) {
                $display.text(speed * run_count);
                run_count++;
            } else if (parseInt($display.text()) < count) {
                var curr_count = parseInt($display.text()) + 1;
                $display.text(curr_count);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    }

    $(document).ready(function () {
        var id = $('#adminid').val();
        if (id != "") {
            $.floatingMessage('<center><b>Admin logged in!</b></center>', {time: 3000, position: "bottom-right"});

        }

        $('#loadingDiv').hide();
    });

    //For checking draft post is present or not
    function checkDraft(url, url1) {
        swal({
            title: "",
            text: "Hello <?php echo e(session('pc_user')['firstname']); ?>, you have a composed Ad yet to be posted! ",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Compose New Post",
            cancelButtonText: " Continue with Old Post",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function () {
            window.location.href = url1;
        }, function (isConfirm) {
            if (isConfirm === "overlay") {
            } else if (isConfirm === "cancel")
                window.location.href = url;
            else
                window.location.href = url1;
        });
    }

    var statStatus = 0;
    function stats(){
        $.ajax({
            type: "get",
            url: '/get/user/stats',
            dataType: 'json',
            success: function (data) {
                $('#onlinevisitors').html(data.onlineUsers);
                $('#totalAds').html(data.totalPostCount);
                $('#totalAdsWeek').html(data.totalPostThisWeek);
                $('#regUsers').html(data.registeredUsers);

                if(statStatus == 0) {
                    countUp3('countdownvisitor', data.onlineUsers);
                    countUp3('countdowntotal', data.totalPostCount);
                    countUp3('countdowntotaladweek', data.totalPostThisWeek);
                    countUp3('countdownregistered4', data.registeredUsers);
                }
                statStatus = 1;
                setTimeout(stats, 5000);
            }
        });
    }

    $(document).ready(function () {
        stats();

        $(document.body).on('mouseenter', '#bell_icon', function () {

            var isNewMessage= $('#show_message').css('display');
            if(isNewMessage!=='none'){
                $.ajax({
                    type: "get",
                    url: '/get/admin/message',
                    dataType: 'json',
//                data: {id: id},
                    beforeSend: function () {
                        $('#loader_ajax').show();
                    },
                    complete: function (xhr, status) {
                        $('#loader_ajax').hide();
                    },
                    success: function (data) {
                        if (data.code == 200) {
                            if (data.admin_msg != '') {
                                updateStatus();
//                                swal("Admin Message!", data.admin_msg);
                                swal({
                                    title: "Admin Message!",
                                    text: data.admin_msg,
                                    confirmButtonText: "Dissmis",
                                    allowOutsideClick: false,
                                    closeOnConfirm: false
                                });
                            } else {
                                swal('no message for you at the moment');
                            }
                        }
                        else if (data.status == 'error') {
                            swal("No message for you");
                        }
                    }
                });
            }
        });
        checkNewAdminMessage();

        function checkNewAdminMessage() {
            console.log('check for new message');
            $.ajax({
                type: "get",
                url: '/check/admin/new/message',
                dataType: 'json',
//                data: {id: id},
                beforeSend: function () {
                    $('#loader_ajax').show();
                },
                complete: function (xhr, status) {
                    $('#loader_ajax').hide();
                    setTimeout(function () {
                            checkNewAdminMessage();
                        }
                        , 10000)
                },
                success: function (data) {

                    if (data.code == 200) {
                        $('#show_message').show();
                    } else {
                        $('#show_message').hide();
                    }
                    console.log('new Message from admin', data);
                }
            });
        };

        function updateStatus() {
            $.ajax({
                type: "get",
                url: '/update/message/status',
                dataType: 'json',
//                data: {id: id},
                beforeSend: function () {
                    $('#loader_ajax').show();
                },
                complete: function (xhr, status) {
                    $('#loader_ajax').hide();
                },
                success: function (data) {
                    console.log('updated seen status', data);
                }
            });
        };
    });

    $(document).ready(function (){
       $.ajax({
           type:'get',
           url:'/updateVisitors',
           dataType:'json',
           success:function () {

           }


       }) ;
    });

    $(document).ready(function () {
        $.ajax({
            url:'/messagePrint',
            type:'get',
            dataType:'json',
            success:function(res){
                console.log('response===========',res.msg.message);
                if(res.msg.messageStatus==1){
                    $('.message').text(res.msg.message);
                    $('.message1').show();
                }else{
                    $('.message1').hide();
                }
            }
        });


        $.ajax({
            url:'/fakeMetricsStatus',
            type:'get',
            dataType:'json',
            success:function(res){
                console.log('response===fakeMetricsStatus========',res.fakeMetricsStatus);
                if(res.fakeMetricsStatus==0){
                    $('#fakeMetricsStatus').hide();
                }else{
                    $('#fakeMetricsStatus').show();

                }

            }
        });
    });




</script>
</html>