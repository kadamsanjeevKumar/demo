<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo $__env->yieldContent('keywords','Page20 is a free classifieds website. Search for anything or post Free ads, Find homes and apts for rent, jobs, pets, personals. services, Buy/Sell stuffs, for sale, events and local community'); ?>">
<meta name="description" content="<?php echo $__env->yieldContent('description','Free Classifieds Ads, free classifieds, free ads, free advertising online, backpage alternative, adult & dating classifieds, Find a job, buy a car, find a house or apartment, furniture, free classifieds, classifieds, classified ads, musician, massage, backpage, appliances, personals, for sale, services, community, events'); ?>">
<link rel="stylesheet" href="/assets/user/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/assets/user/css/font-awesome.min.css"/>
<link rel="stylesheet" href="/assets/user/css/style.css"/>
<link rel="stylesheet" href="/assets/user/css/toastr/toastr.css"/>
<link rel="stylesheet" href="/assets/user/css/perfect-scrollbar.css"/> <!-- Raj -->
<link rel="stylesheet" type="text/css" href="/assets/user/plugins/sweetalert/dist/sweetalert.css">

<link href="/assets/user/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link class="cssdeck" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel='stylesheet prefetch' href='/assets/user/css/monokai-sublime.min.css'>
<link rel='stylesheet prefetch' href='/assets/user/css/katex.min.css'>
<link rel='stylesheet prefetch' href='/assets/user/css/quill.bubble.css'>
<link rel='stylesheet prefetch' href='/assets/user/css/quill.snow.css'>
<link href="/assets/user/css/material-icon.css" rel="stylesheet">
<?php /*<link rel="stylesheet" type="text/css" href="/assets/user/css/jquery-ui.css" />*/ ?>

<style>
    @import  url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Righteous');
   html{
       height: 100%;
   }
   body{
       position: relative;
       min-height: 100%;
   }
   .container-fluid{
       padding-bottom: 8%;
   }
    #blog-landing {
        margin-left: 18px;
        position: relative;
        max-width: 100%;
        /*width: 100%;*/
    }

    .white-panel {
        position: absolute;
        /*            background: white;*/
        /*            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);*/
        padding: 10px;
    }

    .white-panel h1 {
        font-size: 1em;
    }

    .white-panel h1 a {
        color: #A92733;
    }

    .white-panel:hover {
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
        margin-top: -5px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 5;
        top: 0;
        left: 0;
        background-color: #fff !important;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        box-shadow: 1px 0 9px 1px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 15px;
        color: #818181;
        display: block;
        transition: 0.3s
    }

    .sidenav a:hover,
    .offcanvas a:focus {
        color: #351969;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 0px;
        font-size: 25px;
        margin-left: 50px;
    }

    @media  screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    @media (min-width: 320px) and (max-width: 980px) {
        .post-btn {
            /*margin-left: 42px !important;*/
            margin-top: 9px !important;
            padding: 7px !important;
        }
    }

    .navbar-brand {
        padding: 15px 8px !important;
    }

    .post-btn {
        background-color: #533687;
        color: #fff;
        border-radius: 0px;
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 7px 21px;
    }

    label {
        color: #351969;
        font-weight: bolder !important;
    }

    #editor-container {
        height: 300px;
    }

    #editor-container1 {
        height: 300px;
    }

    /*img upload*/

    #uploadPreview img {
        height: 64px;
    }

    .disabled {
        pointer-events: none;
    }

    @media  only screen and (min-width: 1824px) {
        .user {
            margin-left: 155px;
        }
    }


</style>
<style>
    @import  url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Righteous');
    .modal
    {
        overflow: hidden;
    }
    #draggable{
        width: auto !important;
        height: auto !important;
        padding: 20px;
    }
    .modal-dialog{
        /*margin-right: 0;*/
        /*margin-left: 0;*/
    }
    .modal-header{
        /*height:30px;*/
        background-color:#492c7c;
        padding-top: 25px !important;;
        color:#ddd;
    }
    .modal-title{
        margin-top:-10px;
        font-size:16px;
    }
    .modal-header .close{
        margin-top:-24px;
        color:#fff;
    }

    .modal-dialog{margin: 0 61px;}

    .modal-body{
        color:#888;
    }
    .modal-body p {
        text-align:center;
        padding-top:10px;
    }

    #clockdiv{
        font-family: sans-serif;
        color:#BF1671;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
    }

    #clockdiv > div{
        display: inline-block;
    }

    #clockdiv div > span{
        display: inline-block;
    }

    .smalltext{
        padding-top: 5px;
        font-size: 12px;
        color: #333;
    }
    .minutes{color: #533687;}
    .modal-content_s{cursor: move; border-radius: 6px !important;
        background:#BF1671 !important;
    }
    /*.modal-content{cursor: move; border-radius: 6px !important;*/
        /*background:#BF1671;*/
    /*}*/
    .modal-content h4, .modal-content p {color: #fff;}
    .timerbg{background: #fff;border-top-right-radius: 5px;border-bottom-right-radius: 5px;}
    .modal-body {padding: 0 15px;}
    .pad15{padding: 17px 5px 6px;}
    .justify{text-align: justify;}
    /*.carousel-control.left{background: transparent !important;}*/
    /*.carousel-control.right{background: transparent !important;}*/
    /*.carousel-control.right:hover {background: #ececec !important; opacity: 0.4 !important;}*/
    /*.carousel-control.left:hover {background: #ececec !important; opacity: 0.4 !important;}*/
</style>
<?php echo $__env->yieldContent('style'); ?>




