<?php $__env->startSection('title', env('APP_DOMAIN')); ?>

<?php $__env->startSection('footerdata'); ?>
    <?php echo e(env('APP_DOMAIN')); ?> is an interactive computer service that enables access by multiple users and should not be treated as the publisher or speaker of any information provided by another information content provider. © 2017
    <a href="/"><?php echo e(env('APP_DOMAIN')); ?></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <link href="/assets/user/css/toastr.css" rel="stylesheet"/>
    <style>

        @media (min-width: 320px) and (max-width: 767px) {
            .accordion {
                width: 290px !important;
            }
        }

        @media (min-width: 768px) and (max-width: 980px) {
            .accordion {
                width: 740px !important;
            }
        }

        .accordion {
            width: 850px;
            /*            margin: 20px auto;*/
        }

        .accordion h1,
        h2,
        h3,
        h4 {
            cursor: pointer;
            padding: 0px;
            margin: 0px;
        }

        .accordion h1 {
            padding: 15px 20px;
            background-color: #c3c3e5;
            /*font-family: Lobster;*/
            font-size: 20px;
            font-weight: normal;
            color: #351969;
            /*            border:1px solid #351969;*/
        }

        .accordion h1:hover {
            color: #000;
        }

        .accordion h1:first-child {
            border-radius: 10px 10px 0 0;
        }

        .accordion h1:last-of-type {
            border-radius: 0 0 10px 10px;
        }

        .accordion h1:not(:last-of-type) {
            border-bottom: 1px solid #fff;
        }

        .accordion div,
        .accordion p {
            display: none;
        }

        .accordion h2 {
            padding: 5px 25px;
            background-color: #f1f0ff;
            font-size: 17px;
            color: #333;
        }

        .accordion h2:hover {
            background-color: #e8e6ff;
            color: #351969;
        }

        .accordion h3 {
            padding: 5px 30px;
            background-color: #f4f0e1;
            font-size: 12px;
            color: #333;
        }

        .accordion h3:hover {
            background-color: #fff;
        }

        .accordion h4 {
            padding: 5px 35px;
            background-color: #ffc25a;
            /*            font-size: .9rem;*/
            color: #af720a;
        }

        .accordion h4:hover {
            background-color: #e0b040;
        }

        .accordion p {
            padding: 15px 35px;
            background-color: #ddd;
            font-family: "Georgia";
            /*            font-size: .8rem;*/
            color: #333;
            line-height: 1.3rem;
        }

        .accordion .opened-for-code {
            display: block;
        }
        @media  only screen and (min-width:2560px) {
            .location-adjust {
                margin-left: -1527px !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('sidebar'); ?>
    <?php /*<a href="/select/post/ad">*/ ?>
        <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
    <?php /*</a>*/ ?>
    <?php if(isset($retrieveDraftPost->post_id)): ?>
        <?php if($retrieveDraftPost->locationid != 0): ?>
            <a onclick="checkDraft('<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
        <?php else: ?>
            <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
        <?php endif; ?>
    <?php else: ?>
        <a href="/select/post/ad"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
    <?php endif; ?>
    <a href="/"><b>Home</b></a>
    <?php if(!empty(Session::get('package_details')[1])): ?>
        <a href="/admin/log/in"><b>My Account </b></a>
        <a href="/admin/posts"><b>My Ads </b></a>

    <?php else: ?>
        <a href="'/login"><b>My Account </b></a>
        <a href="/check/verify/user"><b>Verify User</b></a>
    <?php endif; ?>
    <a href="/buy"><b>Buy Credits</b></a>
    <a href="/"><b>View All cities</b></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headerdata'); ?>
    <div class="col-md-4 col-sm-4 pull-right" style="margin-top:10px;">
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="<?php echo e(env('APP_URL')); ?>/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
      <span class="user">

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
        <h6 class="" style="color:#fff;float: right;"><b><?php echo e(env('APP_DOMAIN')); ?></b></h6>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <div class="row m-t-20">
            <ol class="breadcrumb">
                <li><a href="/" class="bread-crumb"><?php echo e(env('APP_DOMAIN')); ?></a></li>
                <?php /*<li class="active"><a href="/select/post/ad">Post ad</a></li>*/ ?>
                <?php if(isset($retrieveDraftPost->post_id)): ?>
                    <?php if($retrieveDraftPost->locationid != 0): ?>
                        <li><a onclick="checkDraft('<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a></li>
                    <?php else: ?>
                        <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
                    <?php endif; ?>
                <?php else: ?>
                    <?php /*<li><a href="/select/post/ad"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a></li>*/ ?>
                    <li class="b-inline"><a href="/select/post/ad" class="bread-crumb">Post Ad</a></li>
                <?php endif; ?>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <center><h4 class="location-adjust" style="color:#351969;">Choose a location </h4></center>
            </div>
        </div>

        <div class="row" style="margin-top:20px;">
            <div class="col-md-10 col-sm-6 col-md-offset-2">
                <aside class="accordion">
                    <?php if(!empty($locations)): ?>
                        <?php foreach($locations as $location): ?>
                            <h1 class="country_ajax" data-id="<?php echo e($location->place_id); ?>"><?php echo e($location->place_name); ?></h1>
                            <div class="unique">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if(!empty($states)): ?>
                        <?php foreach($states as $location): ?>
                            <h1 class="states_ajax" data-id="<?php echo e($location->place_id); ?>" data-sub-domain="<?php echo e($location->sub_domain_name); ?>"><?php echo e($location->place_name); ?></h1>
                            <div class="row unique" style="margin-left:35px;margin-top:10px;margin-bottom:13px;">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </aside>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_function'); ?>

    <script src="/assets/user/js/toastr.js"></script>
    <script src="/assets/user/js/loadingoverlay.js"></script>
    <script src="/assets/user/js/loadingoverlay.min.js"></script>

    <script>
        var headers = ["H1", "H2", "H3", "H4", "H5", "H6"];

        $(".accordion").click(function (e) {
            var target = e.target,
                    name = target.nodeName.toUpperCase();

            if ($.inArray(name, headers) > -1) {
                var subItem = $(target).next();

                //slideUp all elements (except target) at current depth or greater
                var depth = $(subItem).parents().length;
                var allAtDepth = $(".accordion p, .accordion div").filter(function () {
                    if ($(this).parents().length >= depth && this !== subItem.get(0)) {
                        return true;
                    }
                });
                $(allAtDepth).slideUp("fast");

                //slideToggle target content and adjust bottom border if necessary
                subItem.slideToggle("fast", function () {
                    $(".accordion :visible:last").css("border-radius", "0 0 10px 10px");
                });
                $(target).css({
                    "border-bottom-right-radius": "0",
                    "border-bottom-left-radius": "0"
                });
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>

    <script>
        $(document).ready(function () {
            var i = 1;

            $('.country_ajax').click(function () {

                var current_element = $(this);
                var country_id = current_element.attr('data-id');
                var unique = current_element.next();
                var data = current_element.next().find('.states').attr('data-id');


                if (data) {
                    console.log('States found');

                }
                else {

                    $.ajax({
                        url: '/get/all/states',
                        type: 'POST',
                        dataType: 'json',
                        data: {country_id: country_id},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {

                                var states = data.msg;
                                var html = '';

                                $.each(states, function (index, value) {
                                    html += '<h2 class="states" data-id="' + value['place_id'] + '" data-sub-domain="' + value['sub_domain_name'] + '">' + value['place_name'] + '</h2> <div class="row cities" style="margin-left:22px;margin-top:10px;margin-bottom:13px;"></div>';
                                });
                                $(unique).html(html);

                            }
                            else if (data.status == 'error') {

                                toastr.error(data.msg, {timeOut: 2000});
                            }

                        }


                    });

                }

            });

            $(document).on('click', '.states', function () {

                var current_element = $(this);
                var state_id = current_element.attr('data-id');
                var sub_domain_name = current_element.attr('data-sub-domain');
                var state_name = current_element.html();
                var cities_insert = current_element.next();
                var data = current_element.next().find('.list-links').html();
                var data1 = current_element.next().find('.one_hit').html();

                if (data || data1) {

                    if (i % 2 === 0) {
                        i++;
                        console.log('Cities found');
                    }
                    else {
                        i++;
                        console.log('Cities found');
                    }
                    if (data1) {
                        console.log('No Cities found');
//                        toastr.error('No cities here', {timeOut: 1000});
                    }

                }
                else {
                    $.ajax({
                        url: '/get/all/cities',
                        type: 'POST',
                        dataType: 'json',
                        data: {state_id: state_id},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {

                                var cities = data.msg;
                                var html = '';

                                $.each(cities, function (index, value) {

                                    html += '<a class="list-links col-md-3 col-sm-3 col-xs-6" href="/' + value['sub_domain_name'] + '/classifieds/postad" style="line-height:2;">' + value['place_name'] + '</a>';

                                });
                                $(cities_insert).html(html);

                                i = 1;

                            }
                            else if (data.status == 'error') {

//                                $(cities_insert).html('<div class="one_hit">No cities here</div>');

                                if (data.msg == 'No cities') {

//                                    var sub_domain_name = state_name.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
//                                    var sub_domain_name = state_name.replace(/[^A-Za-z0-9\-\']/, '');
//                                    sub_domain_name = sub_domain_name.toLowerCase();

                                    html = '<a class="list-links col-md-3 col-sm-3 col-xs-6 city_find one_hit" data-id="' + state_id + '" href="https://' + sub_domain_name + '.<?php echo e(env('APP_DOMAIN')); ?>/classifieds/postad" style="line-height:2;">' + state_name + '</a>';
                                    $(cities_insert).html(html);
                                }

//                                toastr.error(data.msg, {timeOut: 2000});
                            }

                        }


                    });
                }

            });

            $('.states_ajax').click(function () {

                var current_element = $(this);
                var state_id = current_element.attr('data-id');
                var sub_domain_name = current_element.attr('data-sub-domain');
                var state_name = current_element.html();
                var unique = current_element.next();
                var data = current_element.next().find('.city_find').attr('data-id');


                if (data) {
                    console.log('Cities found');

                }
                else {

                    $.ajax({
                        url: '/get/all/cities',
                        type: 'POST',
                        dataType: 'json',
                        data: {state_id: state_id},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {

                                var states = data.msg;
                                var html = '';

                                $.each(states, function (index, value) {
                                    html += '<a class="list-links col-md-3 col-sm-3 col-xs-6 city_find" data-id="' + value['place_id'] + '" href="/' + value['sub_domain_name'] + '/classifieds/postad" style="line-height:2;">' + value['place_name'] + '</a>';
                                });
                                $(unique).html(html);

                            }
                            else if (data.status == 'error') {

                                if (data.msg == 'No cities') {

//                                    var sub_domain_name = state_name.replace(/[^A-Za-z0-9\-\']/, '');
//                                    sub_domain_name = sub_domain_name.toLowerCase();
                                    html = '<a class="list-links col-md-3 col-sm-3 col-xs-6 city_find" data-id="' + state_id + '" href="https://' + sub_domain_name + '.<?php echo e(env('APP_DOMAIN')); ?>" style="line-height:2;">' + state_name + '</a>';
                                    $(unique).html(html);
                                }

//                                toastr.error(data.msg, {timeOut: 2000});
                            }

                        }


                    });

                }

            });

        });
    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>