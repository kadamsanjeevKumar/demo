
<?php if(isset($placeDetails->place_name)): ?>
    <?php $__env->startSection('title', $adDetails->title.' - '.$placeDetails->place_name.' - '.$catAndSubDetails->cat_name.' - '.$catAndSubDetails->subCatName.' - '.env('APP_DOMAIN')); ?>
<?php else: ?>
    <?php $__env->startSection('title', $adDetails->title.' - '.$catAndSubDetails->cat_name.' - '.$catAndSubDetails->subCatName.' - '.env('APP_DOMAIN')); ?>
<?php endif; ?>

<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('sidebar'); ?>
    <?php /*<a href="/classifieds/postad">*/ ?>
    <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
    <?php /*</a>*/ ?>

    <?php if(isset($retrieveDraftPost->post_id)): ?>
        <?php if($retrieveDraftPost->locationid != 0): ?>
            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>')"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
        <?php else: ?>
            <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
        <?php endif; ?>
    <?php else: ?>
        <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
    <?php endif; ?>
    <a href="/"><b>Home</b></a>
    <?php if(!empty(Session::get('package_details')[1])): ?>
        <a href="/admin/log/in"><b>My Account </b></a>
        <a href="/admin/posts"><b>My Ads </b></a>

    <?php else: ?>
        <a href="/login"><b>My Account </b></a>
        <a href="/check/verify/user"><b>Verify User</b></a>
    <?php endif; ?>
    <a href="/buy"><b>Buy Credits</b></a>
    <?php if(isset($nearByPlaces)): ?>
        <h4 class="label-side-nav"><b>Nearby Cities</b></h4>
        <?php foreach($nearByPlaces as $nearcity): ?>
            <?php if($placeDetails->place_id != $nearcity->place_id): ?>
                <a href="/<?php echo e($nearcity->sub_domain_name); ?>"><?php echo e($nearcity->place_name); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <a href="/"><b>View All cities</b></a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('headerdata'); ?>
    <div class="col-md-1 col-sm-2 text-center" style="position:unset;">
        <div class="">
            <?php /*<a href="/classifieds/postad">*/ ?>
            <?php /*<button class="btn btn-default post-btn" type="button" style="">Post Ad</button>*/ ?>
            <?php /*</a>*/ ?>
            <?php if(isset($retrieveDraftPost->post_id)): ?>
                <?php if($retrieveDraftPost->locationid != 0): ?>
                    <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>')"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
                <?php else: ?>
                    <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4 col-sm-3 pull-right" style="margin-top:10px;">
        <?php /*<p style="color:#fff;float:left;"><b><?php echo e(env('APP_DOMAIN')); ?></b>&nbsp;&nbsp;</p>*/ ?>
        <?php /*<p style="color:#fff;">&nbsp;&nbsp;<b>free classifieds</b></p>*/ ?>
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="<?php echo e(env('APP_URL')); ?>/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
        <span class="user" style="float:left; margin-top:0">

                  <?php if(!empty($user_details)): ?>
                <?php if($user_details->verified_users == 1): ?>
                    <span style="float:left;margin: -2px 0 0 0">
                        <img src="/assets/user/images/verify-icon.png" class="img-responsive" style="margin-right: 5px;" width="20"/></span><?php endif; ?>
                <span style="float:left;margin: 6px 6px 0 0;"><?php echo e($user_details->firstname); ?></span>
                <?php if(!empty($user_details->profile_pic)): ?>
                    <span style="float:left;">
                        <img src="<?php echo e($user_details->profile_pic); ?>" class="img-responsive"
                             style="border-radius: 100px;height: 40px;width: 40px;"/></span>
                <?php endif; ?>
            <?php endif; ?>
                    </span>
        <h6 class="" style="color:#fff;float: right;"><b><?php if(!empty($state->place_name)): ?><?php echo e($state->place_name); ?>,
                <?php endif; ?> <?php if(!empty($placeDetails->place_name)): ?> <?php echo e($placeDetails->place_name); ?> <?php endif; ?> </b></h6>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>

        /*@media  only screen and (min-width:320px){*/
        /*#container-01,*/
        /*#container-02 {*/
        /*margin:20px auto;*/
        /*max-width:45% !important;*/
        /*margin-left: 52% !important;*/
        /*}*/
        /*.desc-img-adjusts{*/
        /*!*margin-left: 18% !important;*!*/
        /*}*/
        /*}*/
        /*@media  only screen and (max-width:480px){*/
        /*#container-01,*/
        /*#container-02 {*/
        /*margin:20px auto;*/
        /*max-width:45% !important;*/
        /*margin-left: 40% !important;*/
        /*}*/
        /*.desc-img-adjusts{*/
        /*!*margin-left: 18% !important;*!*/
        /*}*/
        /*}*/

        @media  only screen and (min-width: 2560px) {
            #container-01,
            #container-02 {
                margin: 20px auto;
                max-width: 65% !important;
                margin-left: 11% !important;
            }

            .desc-img-adjusts {
                /*margin-left: 28% !important;*/
            }
        }

        @media  only screen and (min-width: 1920px) {
            #container-01,
            #container-02 {
                margin: 20px auto;
                width: 90% !important;
            }

            .desc-img-adjusts {
                margin-left: 9% !important;
            }
        }

        @media  only screen and (min-width: 3840px) {
            #container-01,
            #container-02 {
                margin: 20px auto;
                width: 50% !important;
            }

            .desc-img-adjusts {
                margin-left: 18% !important;
            }
        }

        .desc-img-adjusts {
            margin-left: 1%;
        }

        #container-01,
        #container-02 {
            margin: 20px auto;
            width: 95%;
        }

        .pinto {
            box-sizing: border-box;
        }

        .pinto {
            margin-bottom: 15px;
            color: #333;
            text-align: left;
            border-radius: 0px;
            overflow: hidden;
        }

        .pinto img {
            display: block;
            width: 100%;
        }

        .pinto .info {
            padding: 0;
            background-color: #fff;
        }

        .pinto .info h2 {
            margin: 0;
            font-size: 18px;
        }

        .pinto .info p {
            margin: 10px 0 0;
            font-size: 14px;
        }

        .hr-properties {
            border-color: #ccc;
            margin: 5px 0 16px 13px;
            width: 96%;
        }

        .link-width {
            max-width: 1000px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .adjust-padding {
            padding: 0px 0px;
        }

        .img-adjust-size {
            height: 500px;
            margin: 0 auto
        }

        @media (min-width: 320px) and (max-width: 640px) {
            .link-width1 {
                max-width: 240px;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .adjust-padding {
                padding: 12px 10px !important;
            }

            .img-adjust-size {
                height: 298px !important;
                margin: 0 auto
            }
        }

        @media  only screen and (min-width: 2560px) {
            .stretch-adjust {
                width: 17% !important;
            }
        }

        @media  only screen and (min-width: 3480px) {
            .stretch-adjust {
                width: 13% !important;
            }
        }

        .link-width1 {
            max-width: 1000px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        ul{
            padding: 10px 15px !important;
        }




        /*Discrete Mode*/

        .bg_cover {
            position: fixed;
            z-index: 999;
            width: 100%;
            height: 100%;
            background: #fff;
            top: 0;
            left: 0;
            overflow: hidden;
            display: none;
        }

        .btnhide {
            /*position: fixed;*/
            right: 30px;
            z-index: 9999;
        }

        a:hover {
            text-decoration: none;
        }

        .a_demo_four {

            background-color: #3bb3e0;
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            text-decoration: none;
            color: #fff !important;
            padding: 10px 20px;
            padding-left: 50px;
            background-image: linear-gradient(bottom, rgb(44, 160, 202) 0%, rgb(62, 184, 229) 100%);
            background-image: -o-linear-gradient(bottom, rgb(44, 160, 202) 0%, rgb(62, 184, 229) 100%);
            background-image: -moz-linear-gradient(bottom, rgb(44, 160, 202) 0%, rgb(62, 184, 229) 100%);
            background-image: -webkit-linear-gradient(bottom, rgb(44, 160, 202) 0%, rgb(62, 184, 229) 100%);
            background-image: -ms-linear-gradient(bottom, rgb(44, 160, 202) 0%, rgb(62, 184, 229) 100%);
            background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(44, 160, 202)),
                    color-stop(1, rgb(62, 184, 229))
            );
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -o-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
            -moz-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
            -o-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
            box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #156785, 0px 10px 5px #999;
        }

        .a_demo_four:hover {
            cursor: pointer;
        }

        .a_demo_four:active {

            background-image: linear-gradient(bottom, rgb(62, 184, 229) 0%, rgb(44, 160, 202) 100%);
            background-image: -o-linear-gradient(bottom, rgb(62, 184, 229) 0%, rgb(44, 160, 202) 100%);
            background-image: -moz-linear-gradient(bottom, rgb(62, 184, 229) 0%, rgb(44, 160, 202) 100%);
            background-image: -webkit-linear-gradient(bottom, rgb(62, 184, 229) 0%, rgb(44, 160, 202) 100%);
            background-image: -ms-linear-gradient(bottom, rgb(62, 184, 229) 0%, rgb(44, 160, 202) 100%);
            background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(62, 184, 229)),
                    color-stop(1, rgb(44, 160, 202))
            );
            -webkit-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
            -moz-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
            -o-box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
            box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #156785, 0px 5px 3px #999;
        }

        .a_demo_four::before {
            background-color: #2591b4;
            background-image: url(/assets/user/images/right_arrow.png);
            background-repeat: no-repeat;
            background-position: center center;
            content: "";
            width: 20px;
            height: 20px;
            position: absolute;
            left: 35px;
            top: 50%;
            margin-top: -9px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
            -moz-box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
            -o-box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
            box-shadow: inset 0px 1px 0px #052756, 0px 1px 0px #60c9f0;
        }

        .a_demo_four:active::before {
            top: 50%;
            margin-top: -12px;
            -webkit-box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
            -moz-box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
            -o-box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
            box-shadow: inset 0px 1px 0px #60c9f0, 0px 3px 0px #0e3871, 0px 6px 3px #1a80a6;
        }

        div.sbc {
            max-width: 584px;
            margin-left: 25%;
        }

        .xdQYib {
            margin-right: 25%;
        }

        #slide{
            position: fixed;
            background: #ccc;
            width: 200px;
            right: -200px;
            transition: right 0.4s ease-in-out;
            -o-transition: right 0.4s ease-in-out;
            -ms-transition: right 0.4s ease-in-out;
            -moz-transition: right 0.4s ease-in-out;
            -webkit-transition: right 0.4s ease-in-out;
            z-index: 9999;
        }
        #toggle{
            position: absolute;
            right: 200px;
            padding: 10px;
            background:#351969;
            border-top-left-radius: 1885px;
            border-bottom-left-radius: 1885px;
        }
        .box {
            padding: 20px;
        }
        #slide:hover{
            right: 0px;
        }

        /*End Discrete Mode*/


    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="successMessage" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding:40px 50px;">
                    <center>
                        <h3 id="reportaddisplaymsg" style="color:#0000FF;">
                        </h3>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($_COOKIE['timezone'])){
        $timezone = $_COOKIE['timezone'];
    }else{
        $timezone = date_default_timezone_get();
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb">
                <li class="b-inline"><a href="/" class="bread-crumb"><?php echo e(env('APP_DOMAIN')); ?></a></li>
                <?php if(isset($placeDetails)): ?>
                    <li class="b-inline"><a
                                href="<?php echo e(isset($placeDetails->sub_domain_name)?'/'.$placeDetails->sub_domain_name:''); ?>/category/<?php echo e($catAndSubDetails->cat_root_name); ?>"> <?php echo e($placeDetails->place_name); ?> <?php echo e($catAndSubDetails->cat_name); ?></a>
                    </li>
                    <li class="b-inline"><a
                                href="<?php echo e(isset($placeDetails->sub_domain_name)?'/'.$placeDetails->sub_domain_name:''); ?>/<?php echo e($catAndSubDetails->subCatRootName); ?>"> <?php echo e($placeDetails->place_name); ?> <?php echo e($catAndSubDetails->subCatName); ?></a>
                    </li>
                <?php else: ?>
                    <li class="b-inline"><?php echo e($catAndSubDetails->cat_name); ?></li>
<?php /*                    <li class="b-inline"><a href="/category/<?php echo e($catAndSubDetails->cat_root_name); ?>"><?php echo e($catAndSubDetails->cat_name); ?></a></li>*/ ?>
                    <li class="b-inline"><?php echo e($catAndSubDetails->subCatRootName); ?></li>
                    <li class="b-inline"><a href="" >Ad</a></li>

                    <?php /*<li class="b-inline"><a href="/"><?php echo e($catAndSubDetails->subCatRootName); ?></a></li>*/ ?>
                <?php endif; ?>
            </ol>
        </div>
        <?php if($catAndSubDetails->cat_root_name == 'Adult' || $catAndSubDetails->cat_root_name == 'Dating' ): ?>
            <div id="slide">
                <div id="toggle"><img src="/assets/user/images/right_arrow.png"> </div>
                <div class="box"><a class="a_demo_four btnhide" hidden>Discrete Mode</a></div>
            </div>
            <div class="bg_cover"></div>
        <?php endif; ?>

        <div class="row m-t-20">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-10" style="overflow-wrap: break-word;">
                        <h4 class="ul-custom2 "><b><?php echo e($adDetails->title); ?>

                                <?php if(isset($adDetails->age) && !empty($adDetails->age) && $adDetails->age != 0 && !strpos($adDetails->page20postid, 'B')): ?>
                                    - <?php echo e($adDetails->age); ?>

                                <?php endif; ?> </b>
                        </h4>
                        <p class="ul-custom2">
                            <?php /*<b>*/ ?>
                            <?php /*<?php if(isset($adDetails->firstname)): ?>*/ ?>
                            <?php /*<?php echo e($adDetails->firstname); ?>*/ ?>
                            <?php /*<?php endif; ?>*/ ?>
                            <?php /*</b>*/ ?>
                            <br/>
                            Posted:
                            <?php $dt = new DateTime();
                            $dt->setTimestamp($adDetails->time);
                            $dt->setTimeZone(new \DateTimeZone($timezone));?>
                            <?php echo e($dt->format('l, F, d, Y h:i A')); ?>

                            <?php /*<?php echo e(date('l, F, d, Y h:i A',$adDetails->time)); ?>*/ ?>
                        </p>
                    </div>
                    <div class="col-md-2 text-right">
                        <form action="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/ReportAd <?php else: ?> /ReportAd <?php endif; ?>">
                        <input type="hidden" id="adId" name="adId" value="<?php echo e($adDetails->post_id); ?>">
                        <input type="hidden" id="subcatId" name="subcatId" value="<?php echo e($catAndSubDetails->subCatId); ?>">
                        <button class="btn btn-default report-ad" type="submit" style="margin-right:20px;">Report Ad
                        </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ul-custom2">
                        <hr class="hr-properties">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if($adDetails->email_response == 'on'): ?>
                        <div class="col-md-12">
                            <?php /*                            <a href="/<?php echo e($catAndSubDetails->subCatId); ?>/<?php echo e(preg_replace('#[ -]+#', '-', $adDetails->title)); ?>/<?php echo e($adDetails->post_id); ?>/reply">*/ ?>
<?php /*                            <a href="/<?php echo e($catAndSubDetails->subCatId); ?>/<?php echo e(urlencode(str_replace('/', '', $adDetails->title))); ?>/<?php echo e($adDetails->post_id); ?>/reply">*/ ?>
                            <a href="<?php echo e(isset($placeDetails->sub_domain_name)?'/'.$placeDetails->sub_domain_name:''); ?>/<?php echo e($catAndSubDetails->subCatId); ?>/<?php echo e(preg_replace('#[ -]+#', '-',$adDetails->title)); ?>/<?php echo e($adDetails->post_id); ?>/reply">
                                <button class="btn btn-default ul-custom3 reply" type="button" style=""><b>Reply</b>
                                </button>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="m-t-20">
                    <div class="col-md-12 col-sm-12">

                        <?php
                        $count = 0;
                        if ($adDetails->images != null || $adDetails->images != ''){
                            $imagesCount = explode(',', $adDetails->images);
                            $count = count($imagesCount);
                        } else{
                            $count = 0;
                        }
                        ?>

                            <div class="<?php if($adDetails->videos != ''): ?>col-md-6
                                        <?php elseif($count == 1): ?> col-md-9
                                        <?php elseif($count == 2 || $count == 3 || $count == 4): ?> col-md-8
                                        <?php elseif($count >= 5): ?> col-md-6
                                        <?php else: ?> col-md-12 <?php endif; ?> col-sm-12">
                                <?php /*<div class="col-md-6 col-sm-12">*/ ?>
                        <div class="ul-custom2" style="text-align: justify; word-wrap:break-word">
                                <?php if($adDetails->description): ?>
                                    <?php print_r($adDetails->description); ?>
                                <?php endif; ?>
                        </div>
                            <?php if($adDetails->age): ?>
                                <?php if(trim($adDetails->display_age) == 'Y'): ?>
                                    <div class="ul-custom2" style="text-align: justify;">
                                        <p><b>• Poster's age:</b> <?php echo e($adDetails->age); ?></p>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                                <br>
                                <?php /*<?php if(!strpos($adDetails->page20postid, 'B')): ?>*/ ?>
                            <?php if($adDetails->adPhone != 0): ?>
                                <div class="ul-custom2" style="text-align: justify;">
                                    <p><b>• Phone Number:</b> <?php echo e($adDetails->adPhone); ?></p>
                                </div>
                            <?php endif; ?>
                            <?php /*<?php endif; ?>*/ ?>
                            <div class="ul-custom2" style="text-align: justify;">
                                <?php if($adDetails->location): ?>
                                    <p><b>• Location:</b> <?php echo e($adDetails->location); ?>, <?php if(isset($placeDetails->place_name)): ?><?php echo e($placeDetails->place_name); ?><?php endif; ?></p>
                                <?php elseif(isset($placeDetails)): ?>
                                    <p><b>• Location:</b> <?php echo e($placeDetails->place_name); ?></p>
                                <?php endif; ?>

                                    <?php if($adDetails->facebook_link != '' || $adDetails->instagram != '' || $adDetails->snapchat!= '' || $adDetails->twitter!= '' || $adDetails->youtube != '' ||$adDetails->tumblr != ''): ?>
                                        <p><b>• Social media links:</b>
                                            <?php endif; ?>
                                            <?php if(isset($adDetails->facebook_link)): ?>
                                                <?php if($adDetails->facebook_link != ''): ?>
                                                    <a href="<?php echo e($adDetails->facebook_link); ?>" target="_blank">
                                                        <img width="18px" height="18px" title="Facebook" src="/assets/user/images/facebook.png">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(isset($adDetails->instagram)): ?>
                                                <?php if($adDetails->instagram != ''): ?>
                                                    <a href="<?php echo e($adDetails->instagram); ?>" target="_blank">
                                                        <img width="18px" height="18px" title="Instagram" src="/assets/user/images/instagram.png">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(isset($adDetails->snapchat)): ?>
                                                <?php if($adDetails->snapchat!= ''): ?>
                                                    <a href="<?php echo e($adDetails->snapchat); ?>" target="_blank">
                                                        <img width="18px" height="18px" title="Snapchat" src="/assets/user/images/snapchat.png">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(isset($adDetails->twitter)): ?>
                                                <?php if($adDetails->twitter!= ''): ?>
                                                    <a href="<?php echo e($adDetails->twitter); ?>" target="_blank">
                                                        <img width="18px" height="18px" title="Twitter" src="/assets/user/images/twitter.png">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(isset($adDetails->youtube)): ?>
                                                <?php if($adDetails->youtube != ''): ?>
                                                    <a href="<?php echo e($adDetails->youtube); ?>" target="_blank">
                                                        <img width="18px" height="18px" title="Youtube" src="/assets/user/images/youtube.png">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if(isset($adDetails->tumblr)): ?>
                                                <?php if($adDetails->tumblr != ''): ?>
                                                    <a href="<?php echo e($adDetails->tumblr); ?>" target="_blank">
                                                        <img width="18px" height="18px" title="Tumblr" src="/assets/user/images/tumblr.png">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </p>

                                <?php if(!empty($adDetails->page20postid)): ?>
                                    <p><b>• Post ID:</b> <?php echo e($adDetails->page20postid); ?>

                                        <?php /*ID:</b> <?php echo e($adDetails->page20postid); ?> <?php if($adDetails->location): ?><?php echo e($adDetails->location); ?> <?php elseif(isset($placeDetails)): ?> <?php echo e($placeDetails->place_name); ?> <?php endif; ?>*/ ?>
                                    </p>
                                <?php endif; ?>

                            </div>

                            <br><br>

                            <div class="col-md-12 col-sm-12 col-xs-10" style="margin-left:12px;">
                                <?php if(trim($adDetails->display_option) == 'Y'): ?>
                                    <?php if(!empty($allposts)): ?>
                                        <p><b>• Other ads by this user:</b></p>
                                        <?php foreach($allposts as $posts): ?>
                                            <?php $str = strlen($posts->title) > 50 ? substr($posts->title, 0, 50) . "..." : $posts->title; ?>
                                            <p class=""><a href="<?php echo e($posts->postlink); ?><?php echo e($posts->post_id); ?>"
                                                           class="each_post_id" data-post_id="<?php echo e($posts->post_id); ?>">
                                                    <?php echo e($str); ?></a>
                                                (<?php echo e($posts->place_name); ?>)
<?php /*                                                <a href="/<?php echo e($posts->subcatagoryid); ?>"><?php echo e($posts->cat_name); ?></a>:*/ ?>
                                                <?php /*<a href="/<?php echo e($placeDetails->sub_domain_name); ?>/<?php echo e($posts->cat_root_name); ?>"><?php echo e($posts->cat_name); ?></a>:*/ ?>
<?php /*                                                <a href="/<?php echo e($posts->subcatagoryid); ?>"><?php echo e($posts->subcat_name); ?></a></p>*/ ?>
                                                <?php /*<a href="/<?php echo e($placeDetails->sub_domain_name); ?>/<?php echo e($posts->cat_root_name); ?>"><?php echo e($posts->subcat_name); ?></a></p>*/ ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>


                            <a href="<?php echo e(isset($placeDetails->sub_domain_name)?'/'.$placeDetails->sub_domain_name:''); ?>/<?php echo e($catAndSubDetails->subCatId); ?>/<?php echo e(urlencode(str_replace('/','-',$adDetails->title))); ?>/<?php echo e($adDetails->post_id); ?>/email">
<?php /*                            <a href="<?php echo e(isset($placeDetails->sub_domain_name)?'/'.$placeDetails->sub_domain_name:''); ?>/<?php echo e($catAndSubDetails->subCatId); ?>/<?php echo e(preg_replace('"/&#?[ -]+;/i"','-',$adDetails->title )); ?>/<?php echo e($adDetails->post_id); ?>/email">*/ ?>
<?php /*                            <a href="<?php if($adDetails->locationid != 0): ?> <?php echo e($adDetails->postlink); ?><?php echo e($adDetails->post_id); ?> <?php else: ?> /ad/<?php echo e(isset($subcategoryId)?$subcategoryId:$post->subcatagoryid); ?>/<?php echo e(urlencode(str_replace('/','',$post->title))); ?>/<?php echo e($post->post_id); ?> <?php endif; ?>">*/ ?>
                            <?php /*<a href="/<?php echo e($catAndSubDetails->subCatId); ?>/<?php echo e(urlencode(str_replace('/','',$adDetails->title))); ?>/<?php echo e($adDetails->post_id); ?>/email">*/ ?>
                                <button class="btn btn-default ul-custom3 email-friend" type="button" style="">Email to friend
                                </button>
                            </a>
                        </div>

                        <?php /*Modified*/ ?>

                            <div  class="<?php if($adDetails->videos != ''): ?>col-md-6
                                         <?php elseif($count == 1): ?>col-md-3
                                         <?php elseif($count == 2 ||$count == 3 || $count == 4): ?>col-md-4
                                         <?php elseif($count == 3): ?>col-md-4 <?php else: ?> col-md-6 <?php endif; ?> col-sm-12">
                                <?php /*<div class="col-md-6 col-sm-12">*/ ?>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <?php /**/ ?>
                                    <?php /*<iframe width="610" height="345" src="https://www.youtube.com/embed/XGSy3_Czz8k">*/ ?>
                                    <?php /*</iframe>*/ ?>
                                    <?php if($adDetails->videos): ?>
                                        <video id="videoPlayer" data-id="<?php echo e($adDetails->videos); ?>" width="100%" height="350px" poster="<?php echo e($adDetails->video_thumbnail); ?>" controls controlsList="nodownload">
                                            <source src="/<?php echo e($adDetails->videos); ?>">
                                            <br>
                                        </video>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row m-t-20 desc-img-adjusts" style="">
                                <div class="row" style="padding: 0px;">

                                    <div class="col-md-12" id="container-01">

                                        <?php if ($adDetails->images != null || $adDetails->images != '')
                                            $images = explode(',', $adDetails->images);
                                        $i = 1;?>
                                        <?php if(isset($images)): ?>
                                            <?php foreach($images as $image): ?>
                                                    <?php if(file_exists($image)): ?>
                                                    <div class="pinto shadow_panel <?php if($count == 1): ?> col-md-12
                                                                               <?php elseif($count == 2 || $count == 3 || $count == 4): ?> col-md-6
                                                                               <?php else: ?> col-md-4 <?php endif; ?>" style="padding: 0px;">
                                                <?php /*<div class="pinto shadow_panel col-md-4" style="padding: 0px;">*/ ?>
                                                    <div class="panel panel-default classified-category">
                                                        <div class="panel-body info">
                                                            <a onclick="callid(<?php echo e($i); ?>)" href="#enlarge" class=""
                                                               style="" data-toggle="modal" data-target="#enlarge"><img
                                                                        src="/<?php echo e($image); ?>" class="img-responsive"/></a>
                                                        </div>
                                                        <div class="panel-footer">
                                                            <center>
                                                                <a onclick="callid(<?php echo e($i); ?>)" href="#enlarge" class=""
                                                                   style="" data-toggle="modal" data-target="#enlarge">Enlarge
                                                                    Image</a>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $i++; ?>
                                                    <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php /*Modified*/ ?>

                    </div>
                </div>
            </div>


        </div>
        <div class="row m-t-20">

        </div>
    </div>
    <div id="enlarge" class="modal fade" role="dialog" style="z-index:9999;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="text-center modal-title"><b><?php echo e($adDetails->title); ?></b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <?php /*<button class="close" data-dismiss="modal" type="button">×</button>*/ ?>

                </div>
                <div class="modal-body text-center adjust-padding" style="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="w3-card-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <?php /*<div id="myCarousel" class="carousel slide" data-ride="carousel">*/ ?>
                                        <div id="myCarousel" class="carousel slide">
                                            <?php if ($adDetails->images != null || $adDetails->images != '')
                                                $images = explode(',', $adDetails->images); $i = 1;?>
                                                <ol class="carousel-indicators">
                                                    <?php if(isset($images)): ?>
                                                        <?php foreach($images as $key => $image): ?>
                                                            <li data-target="#myCarousel" data-slide-to="<?php echo e($key); ?>" id="carouselDots<?php echo e($key); ?>" class=""></li>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </ol>
                                                <?php if(isset($images)): ?>
                                                <div class="carousel-inner" role="listbox">
                                                    <?php foreach($images as $image): ?>
                                                        <div id="<?php echo e($i); ?>" data-id="<?php echo e($image); ?>" class="item">
                                                            <img src="/<?php echo e($image); ?>" class="img-adjust-size" style="max-height: 500px; height: 500px;">
                                                        </div>
                                                        <?php $i++; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>

                                            <a id="left" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="top: 46% !important;"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a id="right" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="top: 46% !important;"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_function'); ?>
    <script src="/assets/user/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/user/js/jquery.pinto.js"></script>
    <script src="/assets/user/js/main1.js"></script>

    <?php /*Discrete Mode*/ ?>
    <script>
        var categoryName = '<?php echo e($catAndSubDetails->cat_root_name); ?>';

        if (categoryName == 'Dating' || categoryName == 'Adult') {
            $('.btnhide').show();
            $(".btnhide").click(function () {
                var lable = $(".btnhide").text().trim();
                if (lable == "Discrete Mode") {

                    $(".btnhide").text("General Mode");
                    var conver = $(".bg_cover").show();
                } else {
                    $(".btnhide").text("Discrete Mode");
                    $(".bg_cover").hide();
                }
            });
            $(document).ready(function () {
                $('.bg_cover').hide();

                $.ajax({
                    url: '/User/DiscreteMode',
                    type: 'GET',
                    dataType: 'json',
                    success: function (response) {
                        // console.log('Success');
                        $('.bg_cover').html(response);
                    },
                    error: function (response) {
                        // console.log('Error');
                        console.log(response);
                    }
                });

                $(document).keyup(function (e) {
                    if (e.keyCode == 27) {
                        $('title').text('Laravel');
                        $('.btnhide').text('Take Cover!');
                        $('.bg_cover').hide();
                    }

                });

                // if(location.href.includes('?')){
                //     console.log('true..............');
                //     console.log('-------------',location.href.split('?')[0]);
                //     location.href = location.href.split('?')[0];
                // }

                // $('.xdQYib').click(function () {
                //
                //     var val = $('#sf').val();
                //     console.log(val);
                //     // $('.errorPage').show();
                //     // return false;
                // });
            });


        };
    </script>
    <?php /*End Discrete Mode*/ ?>

    <script>
        $(document).ready(function(){
            var touchStartCoords =  {'x':-1, 'y':-1}, // X and Y coordinates on mousedown or touchstart events.
                    touchEndCoords = {'x':-1, 'y':-1},// X and Y coordinates on mouseup or touchend events.
                    direction = 'undefined',// Swipe direction
                    minDistanceXAxis = 30,// Min distance on mousemove or touchmove on the X axis
                    maxDistanceYAxis = 30,// Max distance on mousemove or touchmove on the Y axis
                    maxAllowedTime = 1000,// Max allowed time between swipeStart and swipeEnd
                    startTime = 0,// Time on swipeStart
                    elapsedTime = 0,// Elapsed time between swipeStart and swipeEnd
                    targetElement = document.getElementById('enlarge');// Element to delegate

            function swipeStart(e) {
                e = e ? e : window.event;
                e = ('changedTouches' in e)?e.changedTouches[0] : e;
                touchStartCoords = {'x':e.pageX, 'y':e.pageY};
                startTime = new Date().getTime();
//            targetElement.textContent = " ";
            }

            function swipeMove(e){
                e = e ? e : window.event;
                e.preventDefault();
            }

            function swipeEnd(e) {
                e = e ? e : window.event;
                e = ('changedTouches' in e)?e.changedTouches[0] : e;
                touchEndCoords = {'x':e.pageX - touchStartCoords.x, 'y':e.pageY - touchStartCoords.y};
                elapsedTime = new Date().getTime() - startTime;
                if (elapsedTime <= maxAllowedTime){
                    if (Math.abs(touchEndCoords.x) >= minDistanceXAxis && Math.abs(touchEndCoords.y) <= maxDistanceYAxis){
                        direction = (touchEndCoords.x < 0)? 'left' : 'right';
                        switch(direction){
                            case 'left':
                                $('#right').click();
                                break;
                            case 'right':
                                $('#left').click();
                                break;
                        }
                    }
                }
            }

            function addMultipleListeners(el, s, fn) {
                var evts = s.split(' ');
                for (var i=0, iLen=evts.length; i<iLen; i++) {
                    el.addEventListener(evts[i], fn, false);
                }
            }

            addMultipleListeners(targetElement, 'mousedown touchstart', swipeStart);
            addMultipleListeners(targetElement, 'mousemove touchmove', swipeMove);
            addMultipleListeners(targetElement, 'mouseup touchend', swipeEnd);
        });
    </script>

    <script>

        $(document).ready(function () {
            $('.report-ad').click(function(){
                var url = '/checkReportAd';
                var subcatId = $('#subcatId').val();
                var  adId =  $('#adId').val();
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'JSON',
                    data: {subcatId:subcatId, adId: adId},
                    success: function (data) {

                        if (data.status == 'success') {

                            $('#reportaddisplaymsg').html(data.msg);
                            $('#successMessage').modal('show');
                            $('#errorMessage').modal('show');

                        } else if (data.status == 'warning') {
                            window.location.href = '/login';
                        }
                        else if (data.status == 'error') {
                            window.location.href = '/<?php echo e(Request::segment(1)); ?>'+data.msg+'?subcatId='+subcatId+'&adId='+adId;
                        }
                        else if (data.status == 'session_error') {
                            window.location.href = data.msg;
                        }

                    }
                });
            });

            var href = window.location.href;

            if(href.indexOf('reportadmsg=yes') != -1){
                $('#reportaddisplaymsg').html('You have already reported this ad.');
                $('#successMessage').modal('show');
                $('#errorMessage').modal('show');
            }
            if(href.indexOf('blockedreportadmsg=yes') != -1){
                $('#reportaddisplaymsg').html('Something went wrong. Please try again after some time.');
                $('#successMessage').modal('show');
                $('#errorMessage').modal('show');
            }

            //Allow to shift images left and right
            document.onkeydown = function(e) {
                e = e || window.event;
                if (e.keyCode == '37') {
                    $('#left').click(); //left <- show Prev image
                } else if (e.keyCode == '39') {
                    $('#right').click();// right -> show next image
                }
            }
        });

        function callid(id) {
            var idMinus1 = id - 1;
            $('#' + id).siblings().removeClass('active');
            $('#' + id).addClass('active');
            $('#carouselDots' + id).siblings().removeClass('active');
            $('#carouselDots' + idMinus1).addClass('active');
            $('#enlarge').animate({scrollTop: '+=120px'}, 400);
        }

        videoCount = 0;
        $(document).ready(function () {
            // to store the count of image views
            $('.carousel').bind('slid.bs.carousel', function (e) {
                var image = $('.carousel').find('.item.active').attr('data-id');
                $.ajax({
                    url: '/update/collection/count',
                    method: 'post',
                    datatype: 'json',
                    data: {
                        image: image,
                        post_id: $('#adId').val(),
                        type: 'image'
                    },
                })
            });

            //to store the count of video views
            var vid = document.getElementById("videoPlayer");
            if (videoCount == 0) {
                vid.onplay = function () {
                    $.ajax({
                        url: '/update/collection/count',
                        method: 'post',
                        datatype: 'json',
                        data: {
                            video: $('#videoPlayer').attr('data-id'),
                            post_id: $('#adId').val(),
                            type: 'video'
                        },
                        success: function(){
                            videoCount++;
                        }
                    })
                };
            }

            //to update the ad view count
            $.ajax({
                url: '/update/adView/count',
                method: 'post',
                datatype: 'json',
                data: {
                    post_id: $('#adId').val(),
                },
                success: function(){
                    videoCount++;
                }
            })
        })

    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>