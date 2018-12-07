<?php if(isset($subcategoryId)): ?>
    <?php $__env->startSection('title', $placeDetails->place_name.' - '.$catAndSubDetails->cat_name.' - '.$catAndSubDetails->subCatName.' - '.env('APP_DOMAIN')); ?>
<?php $__env->startSection('keywords', $placeDetails->place_name.' '.\Illuminate\Support\Facades\Config::get('metadata.'.$catAndSubDetails->subCatRootName.'.keywords')); ?>
<?php $__env->startSection('description', $placeDetails->place_name.' '.\Illuminate\Support\Facades\Config::get('metadata.'.$catAndSubDetails->subCatRootName.'.description')); ?>
<?php else: ?>
    <?php $__env->startSection('title', $placeDetails->place_name.' - '.$catAndSubDetails->cat_name.' - '.env('APP_DOMAIN')); ?>
<?php $__env->startSection('keywords', $placeDetails->place_name.' '.\Illuminate\Support\Facades\Config::get('metadata.'.$catAndSubDetails->cat_root_name.'.keywords')); ?>
<?php $__env->startSection('description', $placeDetails->place_name.' '.\Illuminate\Support\Facades\Config::get('metadata.'.$catAndSubDetails->cat_root_name.'.description')); ?>

<?php endif; ?>
<?php $__env->startSection('style'); ?>
    <style>
        .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
            background-color: #533687 !important;
            border-color: #533687 !important;
        }

        .pull-left {
            width: 100%;
        }

        .sponsor-imgs {
            margin-left: 126px;
        }

        .active {
            border-color: #000;
        }

        @media  only screen and (min-width: 1824px) {
            .footer-adjust {
                min-height: 1000px !important;
            }
        }

        @media  only screen and (min-width: 2560px) {
            .rss-size {
                width: 65px;
            }

            .side-square-img {
                width: 9% !important;
            }

            .sponsor-imgs {
                margin-left: 484px !important;
            }
        }

        @media  only screen and (min-width: 3840px) {
            .rss-size {
                width: 65px;
            }

            .side-square-img {
                width: 7% !important;
            }

            .sponsor-imgs {
                margin-left: 713px !important;
            }
        }

        @media  only screen and (min-width: 1544px) {
            .rss-size {
                width: 65px;
            }

            .sponsor-imgs {
                margin-left: 230px !important;
            }
        }

        .cities-nav {
            margin-left: 33px;
        }

        mark {
            color: blue;
            background-color: cornflowerblue;
            font-weight: bold;
        }

        .link-width {
            max-width: 1000px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .footer-adjust {
            min-height: 300px;
        }

        /* RSS feed button styles */
        .effect .buttons {
            margin-top: 50px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        /*common link styles !!!YOU NEED THEM*/

        .effect a {
            text-decoration: none !important;
            color: #fff;
            width: 40px;
            height: 40px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            border-radius: 10px;
            margin-right: 20px;
            font-size: 25px;
            overflow: hidden;
            position: relative;
        }

        .effect a i {
            position: relative;
            z-index: 3;
        }

        .effect a.rss {
            background-color: #F56505;
        }

        .effect.aeneas a {
            -webkit-transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s, -webkit-transform 0.4s linear 0s;
            transition: border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s, -webkit-transform 0.4s linear 0s;
            transition: transform 0.4s linear 0s, border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s;
            transition: transform 0.4s linear 0s, border-top-left-radius 0.1s linear 0s, border-top-right-radius 0.1s linear 0.1s, border-bottom-right-radius 0.1s linear 0.2s, border-bottom-left-radius 0.1s linear 0.3s, -webkit-transform 0.4s linear 0s;
        }

        .effect.aeneas a i {
            -webkit-transition: -webkit-transform 0.4s linear 0s;
            transition: -webkit-transform 0.4s linear 0s;
            transition: transform 0.4s linear 0s;
            transition: transform 0.4s linear 0s, -webkit-transform 0.4s linear 0s;
        }

        .effect.aeneas a:hover {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .effect.aeneas a:hover i {
            -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
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
<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('sidebar'); ?>
    <?php /*<a href="/classifieds/postad">*/ ?>
    <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
    <?php /*</a>*/ ?>
    <?php if(isset($retrieveDraftPost->post_id)): ?>
        <?php if($retrieveDraftPost->locationid != 0): ?>
            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/classifieds/postad')">
                <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
            </a>
        <?php else: ?>
            <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')">
                <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post
                        Ad</b></button>
            </a>
        <?php endif; ?>
    <?php else: ?>
        <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>">
            <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
        </a>
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
    <h4 class="label-side-nav"><b>Nearby Cities</b></h4>
    <?php if($places): ?>
        <?php foreach($places as $nearcity): ?>
            <?php if($placeDetails->place_id != $nearcity->place_id): ?>
                <a href="/<?php echo e($nearcity->sub_domain_name); ?>"><?php echo e($nearcity->place_name); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
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
                    <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/classifieds/postad')">
                        <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
                    </a>
                <?php else: ?>
                    <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')">
                        <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;"
                                type="button"><b>Post Ad</b></button>
                    </a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>">
                    <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4 col-sm-3 pull-right" style="margin-top:10px;">
        <?php /*<p style="color:#fff;float:left;"><b>backpage.com</b>&nbsp;&nbsp;</p>*/ ?>
        <?php /*<p style="color:#fff;">&nbsp;&nbsp;<b>free classifieds</b></p>*/ ?>
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
        <span class="user" style="float:left;">
                  <?php if(!empty($user_details)): ?>
                <?php if($user_details->verified_users == 1): ?>
                    <span style="float:left;margin: -2px 0 0 0">
                        <img src="/assets/user/images/verify-icon.png" class="img-responsive" style="margin-right: 5px;"
                             width="20"/></span><?php endif; ?>
                <span style="float:left;margin: -2px 0 0 0;"><?php echo e($user_details->firstname); ?></span>
                <?php if(!empty($user_details->profile_pic)): ?>
                    <span style="float:left;margin: -12px 0px 10px 9px;">
                        <img src="<?php echo e($user_details->profile_pic); ?>" class="img-responsive"
                             style="border-radius: 100px;height: 40px;width: 40px;"/></span>
                <?php endif; ?>
            <?php endif; ?>
                    </span>
        <h6 class="" style="color:#fff;float: right;"><b><?php if(!empty($state)): ?><?php echo e($state); ?>,
                <?php endif; ?> <?php if(!empty($placeDetails->place_name)): ?> <?php echo e($placeDetails->place_name); ?> <?php endif; ?> </b></h6>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
    if (isset($_COOKIE['timezone'])) {
        $timezone = $_COOKIE['timezone'];
    } else {
        $timezone = date_default_timezone_get();
    }
    ?>
    <div class="row breadcrumb-adjust col-md-12">
        <ol class="breadcrumb">
            <li class="b-inline"><a href="/" class="bread-crumb"><?php echo e(env('APP_DOMAIN')); ?></a></li>
            <li class="b-inline"><a
                        href="/<?php echo e($placeDetails->sub_domain_name); ?>/category/<?php echo e($catAndSubDetails->cat_root_name); ?>"><?php echo e($placeDetails->place_name); ?> <?php echo e($catAndSubDetails->cat_name); ?></a>
            </li>
            <?php if(isset($subcategoryId)): ?>
                <li class="b-inline"><a href=""><?php echo e($placeDetails->place_name); ?> <?php echo e($catAndSubDetails->subCatName); ?></a></li>
            <?php endif; ?>
        </ol>
    </div>
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12">
            <ul class="list-inline" style="display:inline; margin-left: 0;">
                <?php if(isset($places[0]->stateSubdomainName)): ?>
                    <?php if(isset($status)): ?>
                        <?php if($status == 1): ?>
                            <li class="b-inline">All&nbsp;|</li>
                        <?php else: ?>
                            <?php if($searchKeyword): ?>
                                <?php if(isset($subcategoryId)): ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($places[0]->stateSubdomainName); ?>/<?php echo e($subCatRootName); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=<?php echo e($type); ?>">All</a>&nbsp;|
                                    </li>
                                <?php else: ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($places[0]->stateSubdomainName); ?>/category/<?php echo e($catAndSubDetails->cat_root_name); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=<?php echo e($type); ?>">All</a>&nbsp;|
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if(isset($subcategoryId)): ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($places[0]->stateSubdomainName); ?>/<?php echo e($subCatRootName); ?>/?layout=<?php echo e($type); ?>">All</a>&nbsp;|
                                    </li>
                                <?php else: ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($places[0]->stateSubdomainName); ?>/category/<?php echo e($catAndSubDetails->cat_root_name); ?>/?layout=<?php echo e($type); ?>">All</a>&nbsp;|
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if($places): ?>
                    <?php foreach($places as $place): ?>
                        <?php if($subdomain == $place->sub_domain_name): ?>
                            <li class="b-inline">&nbsp;<?php echo e($place->place_name); ?> &nbsp;|</li>
                        <?php else: ?>
                            <?php if($searchKeyword): ?>
                                <?php if(isset($subcategoryId)): ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($place->sub_domain_name); ?>/<?php echo e($subCatRootName); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=<?php echo e($type); ?>"><?php echo e($place->place_name); ?></a>&nbsp;&nbsp;|
                                    </li>
                                <?php else: ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($place->sub_domain_name); ?>/category/<?php echo e($catAndSubDetails->cat_root_name); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=<?php echo e($type); ?>"><?php echo e($place->place_name); ?></a>&nbsp;&nbsp;|
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if(isset($subcategoryId)): ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($place->sub_domain_name); ?>/<?php echo e($subCatRootName); ?>/?layout=<?php echo e($type); ?>"><?php echo e($place->place_name); ?></a>&nbsp;&nbsp;|
                                    </li>
                                <?php else: ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($place->sub_domain_name); ?>/category/<?php echo e($catAndSubDetails->cat_root_name); ?>/?layout=<?php echo e($type); ?>"><?php echo e($place->place_name); ?></a>&nbsp;&nbsp;|
                                    </li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <?php if(isset($subCities)): ?>
            <?php if(($subCities[0]->sub_cities != "[]") && ($subCities[0]->sub_cities != null)): ?>
                <div class="col-md-12 col-sm-12">
                    <br>
                    <ul class="list-inline" style="display:inline;margin-left: 0;">
                        <li class="b-inline">&nbsp;<a href="/<?php echo e($subdomain); ?>/<?php echo e($subCatRootName); ?>">All <?php echo e($subdomain); ?></a>&nbsp;|
                        </li>
                        <?php $subCities = json_decode($subCities[0]->sub_cities, true); ?>
                        <?php foreach($subCities as $key=>$subCity): ?>
                            <?php if($currentSubCity !== urlencode($subCity)): ?>
                                <?php if($searchKeyword): ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($subdomain); ?>/<?php echo e($subCatRootName); ?>/<?php echo urlencode($subCity) ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=<?php echo e($type); ?>"><?php echo e($subCity); ?></a>&nbsp;|
                                    </li>
                                <?php else: ?>
                                    <li class="b-inline"><a
                                                href="/<?php echo e($subdomain); ?>/<?php echo e($subCatRootName); ?>/<?php echo urlencode($subCity) ?>"><?php echo e($subCity); ?></a>&nbsp;|
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="b-inline"><?php echo e($subCity); ?> |</li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($catAndSubDetails->cat_root_name == 'Adult' || $catAndSubDetails->cat_root_name == 'Dating' ): ?>
            <div id="slide">
                <div id="toggle"><img src="/assets/user/images/right_arrow.png"> </div>
                <div class="box"><a class="a_demo_four btnhide" hidden>Discrete Mode</a></div>
            </div>
            <div class="bg_cover"></div>
        <?php endif; ?>

        <div class="col-md-12 col-sm-12 m-t-20">
            <form id="search" name="search" method="post" action="">
                <input style="width: auto;border: 1px solid #d4d4d4;" id="keyword" name="keyword" type="text" value="<?php echo e($searchKeyword); ?>" class="keyword1"
                       maxlength="100" placeholder="keyword">
                <select id="catagoryId" name="catagoryId" class="select-style1">
                    <option value="<?php echo e($catAndSubDetails->cat_root_name); ?>"><?php echo e($catAndSubDetails->cat_name); ?></option>
                    <?php if($allSubCatagory): ?>
                        <?php foreach($allSubCatagory as $sub): ?>
                            <?php if(isset($subcategoryId)): ?>
                                <?php if($catAndSubDetails->subCatId == $sub->cat_id): ?>
                                    <option value="<?php echo e($sub->cat_root_name); ?>"
                                            selected="selected"><?php echo e($sub->cat_name); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($sub->cat_root_name); ?>"><?php echo e($sub->cat_name); ?></option>
                                <?php endif; ?>
                            <?php else: ?>
                                <option value="<?php echo e($sub->cat_root_name); ?>"><?php echo e($sub->cat_name); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
                <button id="searchbutton" class="btn btn-default search-button1" onclick="makeurl()" type="button">
                    <b>Search</b>
                </button>
            </form>
        </div>

        <?php /*<?php echo e(dd($disclaimer)); ?>*/ ?>
        <div class="col-md-12 col-sm-12 m-t-20">
            <ul class="list-inline" style="display:inline;">
                <?php if($searchKeyword): ?>
                    <?php if($disclaimer != null): ?>
                        <?php if(array_key_exists('top', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=top"
                                   class="list-links b-inline1" title="All Ads"><b
                                            <?php if($type == 'top'): ?>style="color:#351969;"<?php endif; ?>>Top</b></a>
                                &nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('gallery', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=gallery"
                                   class="list-links b-inline1" title="Ads which contains images"><b>Gallery</b></a>
                                &nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('videos', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=videos"
                                   class="list-links b-inline1" title="Ads which contains videos"><b>Videos</b></a>
                                &nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('date', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=date"
                                   class="list-links b-inline1" title="All date-wise ads"><b
                                            <?php if($type == 'date'): ?>style="color:#351969;"<?php endif; ?>>Date</b></a>
                                &nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('verified', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=verified"
                                   class="list-links b-inline1" title="All ads by verified users"><b>Verified</b></a>
                                &nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('brief', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=brief"
                                   class="list-links b-inline1"><b
                                            <?php if($type == 'brief'): ?>style="color:#351969;"<?php endif; ?>>Brief</b></a>&nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('summary', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=summary"
                                   class="list-links b-inline1" title="Summary of all ads"><b>Summary</b></a> &nbsp;&nbsp;
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=brief"
                               class="list-links b-inline1"><b
                                        <?php if($type == 'brief'): ?>style="color:#351969;"<?php endif; ?>>Brief</b></a>
                            &nbsp;&nbsp;|
                        </li>
                        <li>
                            <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?keyword=<?php echo e($searchKeyword); ?>&layout=summary"
                               class="list-links b-inline1" title="Summary of all ads"><b>Summary</b></a> &nbsp;&nbsp;
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($disclaimer != null): ?>
                        <?php if(array_key_exists('top', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=top"
                                   class="list-links b-inline1" title="All Ads"><b
                                            <?php if($type == 'top'): ?>style="color:#351969;"<?php endif; ?>>Top</b></a>
                                &nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('gallery', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=gallery"
                                   class="list-links b-inline1" title="Ads which contains images"><b>Gallery</b></a>
                                &nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('videos', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=videos"
                                   class="list-links b-inline1" title="Ads which contains videos"><b>Videos</b></a>
                                &nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('date', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=date"
                                   class="list-links b-inline1" title="All date-wise ads"><b
                                            <?php if($type == 'date'): ?>style="color:#351969;"<?php endif; ?>>Date</b></a>
                                &nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('verified', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=verified"
                                   class="list-links b-inline1" title="All ads by verified users"><b>Verified</b></a>
                                &nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('brief', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=brief"
                                   class="list-links b-inline1" title="A brief details of all ads"><b
                                            <?php if($type == 'brief'): ?>style="color:#351969;"<?php endif; ?>>Brief</b></a>&nbsp;&nbsp;|
                            </li>
                        <?php endif; ?>
                        <?php if(array_key_exists('summary', $disclaimer)): ?>
                            <li>
                                <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=summary"
                                   class="list-links b-inline1" title="Summary of all ads"><b>Summary</b></a> &nbsp;&nbsp;
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=brief"
                               class="list-links b-inline1" title="A brief details of all ads"><b
                                        <?php if($type == 'brief'): ?>style="color:#351969;"<?php endif; ?>>Brief</b></a>
                            &nbsp;&nbsp;|
                        </li>
                        <li>
                            <a href="<?php echo e(isset($subcategoryId)?Request::url():'/'.$placeDetails->sub_domain_name."/category/$catagoryRootName"); ?>/?layout=summary"
                               class="list-links b-inline1" title="Summary of all ads"><b>Summary</b></a> &nbsp;&nbsp;
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>


        <div class="col-md-10 footer-adjust">
            <div class="nomatches">
                <?php if($posts): ?>
                    <?php foreach($posts as $key=>$post): ?>
                        <div class="row m-t-20">
                            <div class="col-md-12">
                                <?php /*<p class="heading-bar ul-custom">&nbsp;Monday, March 20</p>*/ ?>
                                <p class="heading-bar ul-custom">&nbsp;
                                    <?php $dt = new DateTime();
                                    $dt->setTimestamp(strtotime($key));
                                    $dt->setTimeZone(new \DateTimeZone($timezone));?>
                                    <?php echo e(date('D.F.d.Y',strtotime($key))); ?>

                                    <?php /*<?php echo e(date('D.F.d.Y',strtotime($key))); ?>*/ ?>
                                </p>
                            </div>
                        </div>
                        <?php if($post): ?>
                            <?php foreach($post as $ad): ?>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="ul-custom" style="word-break:break-all;">
                                                <a href="<?php echo e($ad->postlink); ?><?php echo e($ad->post_id); ?>"
                                                   class="heading-link"><b><?php echo e($ad->title); ?>&nbsp;</b></a>
                                                <span>
                                                <?php if(isset($categoryId)): ?>
                                                        <a href="/<?php echo e($placeDetails->sub_domain_name); ?>/<?php echo e($ad->cat_root_name); ?>">(<?php echo e($ad->cat_name); ?>

                                                            )</a>
                                                    <?php endif; ?>
                                                    <?php if($ad->verified_users == 1): ?>
                                                        <img src="/assets/user/images/verify-icon.png" width="22">&nbsp;
                                                    <?php endif; ?>

                                                    <?php if(trim($ad->display_name) == 'Y'): ?>
                                                        <?php if($ad->firstname): ?>
                                                            [<?php echo e($ad->firstname); ?>

                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if(trim($ad->display_age) == 'Y'): ?>
                                                        <?php if(trim($ad->display_name) == 'Y' && $ad->firstname ): ?> , <?php else: ?>
                                                            [ <?php endif; ?>
                                                        <?php if($ad->age): ?>
                                                            <?php echo e('('.$ad->age.')'); ?>

                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($ad->location): ?>
                                                        <?php if(trim($ad->display_name) == 'Y' || trim($ad->display_age) == 'Y'): ?>
                                                            <?php if($ad->firstname): ?>
                                                                , <?php else: ?> <?php if(trim($ad->display_age) == 'Y'): ?> ,  <?php else: ?>
                                                                [ <?php endif; ?>  <?php endif; ?>
                                                        <?php else: ?> [ <?php endif; ?>
                                                        <?php echo e($ad->location); ?>

                                                        <?php if(trim($ad->display_name) == 'Y' || trim($ad->display_age) == 'Y'): ?>
                                                            ] <?php else: ?> ] <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if(trim($ad->display_name) == 'Y' || trim($ad->display_age) == 'Y'): ?>
                                                            <?php if($ad->firstname): ?>
                                                                ] <?php else: ?> <?php if(trim($ad->display_age) == 'Y'): ?>
                                                                ] <?php endif; ?>  <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>

                                                    <?php if($ad->videos): ?>
                                                        <?php echo html_entity_decode('<span class="glyphicon glyphicon-play" style="cursor:pointer" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="This Post has a Video"></span>'); ?>

                                                    <?php endif; ?>
                                                    <?php if(isset($status)): ?>
                                                        <?php if($status == 1): ?>
                                                            (<?php echo e($ad->place_name); ?>)
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                            </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if(isset($postsInMultipleCities)): ?>
                    <?php foreach($postsInMultipleCities as $key=>$post): ?>
                        <div class="row m-t-20">
                            <div class="col-md-12">
                                <?php /*<p class="heading-bar ul-custom">&nbsp;Monday, March 20</p>*/ ?>
                                <p class="heading-bar ul-custom">&nbsp;
                                    <?php $dt = new DateTime();
                                    $dt->setTimestamp(strtotime($key));
                                    $dt->setTimeZone(new \DateTimeZone($timezone));?>
                                    <?php echo e($dt->format('D.F.d.Y')); ?>

                                    <?php /*<?php echo e(date('D.F.d.Y',strtotime($key))); ?>*/ ?>
                                </p>
                            </div>
                        </div>
                        <?php if($post): ?>
                            <?php foreach($post as $ad): ?>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="ul-custom link-width" style=""><a
                                                        href="<?php echo e($ad->postlink); ?><?php echo e($ad->post_id); ?>"
                                                        class="heading-link"
                                                        style="float:left;"><b><?php echo e($ad->title); ?>&nbsp;</b></a>
                                                <?php if(isset($categoryId)): ?>
                                                    <a href="/<?php echo e($ad->cat_root_name); ?>">(<?php echo e($ad->cat_name); ?>)</a>
                                                <?php endif; ?>
                                                <?php if($ad->verified_users == 1): ?>
                                                    <img src="/assets/user/images/verify-icon.png"
                                                         class="img-responsive"
                                                         width="22" style="float:left;">&nbsp;
                                                <?php endif; ?>

                                                <?php if($ad->firstname): ?>
                                                    [<?php echo e($ad->firstname); ?>

                                                <?php else: ?>
                                                    [
                                                <?php endif; ?>
                                                <?php if($ad->age): ?>
                                                    ,<?php echo e('('.$ad->age.')'); ?>

                                                <?php endif; ?>
                                                <?php if($ad->location): ?>
                                                    ,<?php echo e($ad->location); ?>]
                                                <?php else: ?>
                                                    ]
                                                <?php endif; ?>
                                                <?php if($ad->videos): ?>
                                                    <?php echo html_entity_decode('<span class="glyphicon glyphicon-play" style="cursor:pointer" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="This Post has a Video"></span>'); ?>

                                                <?php endif; ?>
                                                <?php if(isset($status)): ?>
                                                    <?php if($status == 1): ?>
                                                        (<?php echo e($ad->place_name); ?>)
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <?php if(!empty($posts_ad)): ?>
                <center>
                    <?php echo e($posts_ad->appends('/95')->links()); ?>

                </center>
            <?php endif; ?>
        </div>

        <div class="col-md-2 col-xs-12 pull-right m-t-20 side-square-img">

            <?php if(isset($sponsorAds)): ?>
                <?php foreach($sponsorAds as $post): ?>

                    <div <?php if(!empty($post->color_scheme) && $post->flash==0): ?>
                         style="background : #<?php echo e($post->color_scheme); ?>; border: 1px solid #e9e93a; padding: 10px; margin-bottom: 10px; width: 100%; "
                         <?php elseif(!empty($post->color_scheme) && $post->flash==1): ?> style="background : #<?php echo e($post->color_scheme); ?>; border: 3px dashed black; padding: 10px; margin-bottom: 10px; width: 100%; "
                         <?php else: ?> class="sponsor pull-left"
                         <?php endif; ?>  <?php if(!empty($post->flash)): ?> style="border:3px dashed black;"<?php endif; ?>>

                        <?php /*<div  class="sponsor pull-left">*/ ?>
                        <p style="width: 100%; word-wrap: break-word; margin-bottom: 2px;"><a
                                    href="<?php if($post->locationid != 0): ?> <?php echo e($post->postlink); ?> <?php echo e($post->post_id); ?> <?php else: ?> /<?php echo e($placeDetails->sub_domain_name); ?>/ad/<?php echo e(isset($subcategoryId)?$subcategoryId:$post->subcatagoryid); ?>/<?php echo e(urlencode(str_replace('/','',$post->title))); ?>/<?php echo e($post->post_id); ?> <?php endif; ?>"
                                    class="heading-link"><b><?php print_r(substr(strip_tags($post->title), 0, rand(40, 50))); ?></b></a>

                        <div style="width: 100%; font-size: 12px; word-wrap: break-word; margin: 0px 0px 5px;"><?php print_r(substr(strip_tags($post->description), 0, rand(90, 100))); ?>
                            ...
                        </div>
                        </p>
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($post->images): ?>
                                    <?php $images = explode(',', $post->images); $i = 0;?>

                                    <?php foreach($images as $image): ?>
                                        <?php if($i >= 3): ?>
                                            <?php break; ?>
                                        <?php endif; ?>
                                        <div style="margin-right: 2px;width: 40px; height: 50px; float: left;">
                                            <img src="/<?php echo e($image); ?>" style="width: 40px; height: 50px;"/>
                                        </div>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>

        <div class="text-right"><a href="/<?php echo e($subdomain); ?>/feed/<?php echo e(isset($subcategoryId)?$subcategoryId:$categoryId); ?>"
                                   title="Join us on RSS">
                <img class="rss-size" src="/assets/user/images/rssfeed.png" width="4%" height="2%"></a></div>

        <div class="row m-t-20" style="margin-bottom:20px;">
            <div class="col-md-12">
                <?php if(isset($sponsorAds)): ?>
                    <?php if(!empty($sponsorAds)): ?>
                        <p class="ul-custom">Sponsor:</p>
                        <?php foreach($sponsorAds as $post): ?>
                            <div class="panel panel-default sponsor-bg ul-custom"
                                 style="padding: 10px 0px; border: 1px solid rgb(53, 25, 105); border-radius: 10px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-9">
                                            <p class="link-width"><a
                                                        href="<?php if($post->locationid != 0): ?> <?php echo e($post->postlink); ?><?php echo e($post->post_id); ?> <?php else: ?> /<?php echo e($placeDetails->sub_domain_name); ?>/ad/<?php echo e(isset($subcategoryId)?$subcategoryId:$post->subcatagoryid); ?>/<?php echo e(urlencode(str_replace('/','',$post->title))); ?>/<?php echo e($post->post_id); ?> <?php endif; ?>"
                                                        class="heading-link"
                                                        style="float:left;"><b><?php print_r(substr(strip_tags($post->title), 0, rand(60, 70))); ?>
                                                        ...&nbsp;</b></a></p><br/>
                                            <p class="link-width"
                                               style="margin-left:10px;"><?php print_r(substr(strip_tags($post->description), 0, rand(100, 130))); ?>
                                                ...</p>
                                        </div>
                                        <?php if($post->images != ''): ?>
                                            <?php $images = explode(',', $post->images); $i = 0;?>
                                            <div class="sponsor-imgs pull-right"
                                                 style="float: left; margin-right: 0.5%;">
                                                <?php foreach($images as $image): ?>
                                                    <?php if($i >= 3): ?>
                                                        <?php break; ?>
                                                    <?php endif; ?>
                                                    <div style=" float: right; margin-right: 2px;">
                                                        <img src="/<?php echo e($image); ?>" style="width: 40px; height: 50px;"/>
                                                    </div>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <div style="height: 0px; width: 0px;">
        <?php if(isset($subcategoryId)): ?>
            <p style="display: none; font-size: 0px"><?php echo e(Config::get('metadata.'.$catAndSubDetails->subCatRootName.'.keywords')); ?></p>
        <?php else: ?>
            <p style="display: none; font-size: 0px"><?php echo e(Config::get('metadata.'.$catAndSubDetails->cat_root_name.'.keywords')); ?></p>
        <?php endif; ?>
    </div>
    <div id="errorDiv" hidden>
        <span id="errorPage">this is an error page </span>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script_function'); ?>
    <script src="/assets/user/plugins/searchplugin/mark.min.js"></script>
    <script>
        $(document).ready(function () {
            var html = "";
            html = $('.nomatches').html().trim();
            if (html == "") {
                $('.nomatches').html('<span class="row m-t-20"><center><b>No matches found.</b></center></span>');
            }

        });

    </script>
    <script>
        $(function () {
            var keyword = '<?php echo $searchKeyword?>';
            if (keyword == null || keyword == '') {
                return false;
            } else {
//                highlightWord([keyword]);
                highlightWord(keyword);

            }
        });

        function highlightWord(searchArray) {
            var instance = new Mark(document.querySelector('.container-fluid'));
            instance.mark(searchArray, {
                "accuracy": "exactly"
            });
            return true;
        }

        function highlightWordold(searchArray) {
            var bodyText = $('.container-fluid').html();
            var container = $('.container-fluid');
            for (var i = 0; i < searchArray.length; i++) {
                bodyText = doHighlight(bodyText, searchArray[i]);
            }
            container.html(bodyText);
            return true;
        }

        function doHighlight(bodyText, searchTerm) {
            var highlightStartTag = "<span style='color:blue; background-color:cornflowerblue; font-weight: bold;'>";
            var highlightEndTag = "</span>";

            var newText = "";
            var i = -1;
            var lcSearchTerm = searchTerm.toLowerCase();
            var lcBodyText = bodyText.toLowerCase();

            while (bodyText.length > 0) {
                i = lcBodyText.indexOf(lcSearchTerm, i + 1);

                if (i < 0) {
                    newText += bodyText;
                    bodyText = "";
                } else {
                    if (bodyText.lastIndexOf(">", i) >= bodyText.lastIndexOf("<", i)) {
                        if (lcBodyText.lastIndexOf("/script>", i) >= lcBodyText.lastIndexOf("<script", i)) {
                            newText += bodyText.substring(0, i) + highlightStartTag + bodyText.substr(i, searchTerm.length) + highlightEndTag;
                            bodyText = bodyText.substr(i + searchTerm.length);
                            lcBodyText = bodyText.toLowerCase();
                            i = -1;
                        }
                    }
                }
            }
            return newText;
        }
    </script>


    <?php /*Discrete Mod*/ ?>
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
                        // console.log('Success+++++++++++');
                        $('.bg_cover').html(response);
                        $('#btnhide').show();
                    },
                    error: function (response) {
                        // console.log('Error');
                        console.log(response);
                    }
                });

                $(document).keyup(function (e) {
                    if (e.keyCode == 27) {
                        $('title').text('Laravel');
                        $('.btnhide').text('Discrete Mode');
                        $('.bg_cover').hide();
                    }

                });

                // console.log('--------',location.href);
                // if(location.href.includes('?')){
                //     console.log('true..............');
                //     console.log('-------------',location.href.split('?')[0]);
                //     location.href = location.href.split('?')[0];
                // }
                // $(document.body).on('click', '.xdQYib', function () {
                //     $('#sf').attr('action', '');
                // });


            });
        }
        ;
    </script>



    <script>
        //        to make serach url
        function makeurl() {
            var url = '';
            var categoryId = $('#catagoryId').val();
            var keyword = $('#keyword').val();
            var catId = '<?php echo e($catAndSubDetails->cat_root_name); ?>';
            var type = '<?php echo e($type); ?>';
            if (categoryId == catId) {
                if (keyword == '') {
                    document.search.action = '/' + '<?php echo e($placeDetails->sub_domain_name); ?>' + '/category/' + categoryId + '/?layout=' + type;
                } else {
                    document.search.action = '/' + '<?php echo e($placeDetails->sub_domain_name); ?>' + '/category/' + categoryId + '/?keyword=' + keyword + '&layout=' + type;
                }
                document.search.submit();
            } else {
                if (keyword == '') {
                    <?php /*window.location = '<?php echo e(Request::url()); ?>/' + '?layout=' + type;*/ ?>
                        window.location = '/' + '<?php echo e($placeDetails->sub_domain_name); ?>' + '/' + categoryId + '/?layout=' + type;
                } else {
                    <?php /*window.location.href = '<?php echo e(Request::url()); ?>/' + '/?keyword=' + keyword + '&layout=' + type;*/ ?>
                        window.location.href = '/' + '<?php echo e($placeDetails->sub_domain_name); ?>' + '/' + categoryId + '/?keyword=' + keyword + '&layout=' + type;
                }
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>