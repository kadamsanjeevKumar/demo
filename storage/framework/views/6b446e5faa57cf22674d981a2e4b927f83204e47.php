<?php if(isset($placeDetails->sub_domain_name)): ?>
    <?php $__env->startSection('title', $placeDetails->sub_domain_name.' - '.env('APP_DOMAIN')); ?>
<?php else: ?>
    <?php $__env->startSection('title', env('APP_DOMAIN')); ?>
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
            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/classifieds/postad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
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
    <a href="/"><b>View All cities</b></a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        .footer {
            background-color: #f0efee;
            position: fixed !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            padding: 15px;
        }
        @media  only screen and (min-width:2560px) {
            .sweet-alert {
                margin-top: -479px !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headerdata'); ?>
    <div class="col-md-1 col-sm-2 text-center" style="position:unset;">
        <div class="">
            <?php /*<a href="/classifieds/postad">*/ ?>
                <?php /*<button class="btn btn-default post-btn" type="button" style="">Post Ad</button>*/ ?>
            <?php /*</a>*/ ?>
            <?php if(isset($retrieveDraftPost->post_id)): ?>
                <?php if($retrieveDraftPost->locationid != 0): ?>
                    <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/classifieds/postad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
                <?php else: ?>
                    <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4 col-sm-3 pull-right adjust2" style="margin-top:10px;">
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
        <span class="user" style="float:left;margin-left: -50px;">

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
        <p style="color:#fff;float:left;"><b><?php echo e(env('APP_DOMAIN')); ?></b>&nbsp;&nbsp;</p>
        <?php /*<p style="color:#fff;">&nbsp;&nbsp;<b>free classifieds</b></p>*/ ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Session::has('gatewaysoff')): ?>
        <div class="alert alert-success"> <center style="font-size: 20px;"><?php echo e(session('gatewaysoff')); ?></center></div>
        <?php Session::forget('gatewaysoff'); ?>
    <?php endif; ?>

    <?php
    if(isset($_COOKIE['timezone'])){
        $timezone = $_COOKIE['timezone'];
    }else{
        $timezone = date_default_timezone_get();
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="row" style="padding:0px;">
                <div class="col-md-12">
                    <ol class="breadcrumb hidden-xs hidden-sm">
                        <li class="breadcrumb-item"><a href="/">Page20.com</a></li>
                        <li class="breadcrumb-item"><a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>">Post Ad</a></li>
                        <?php /*<li class="breadcrumb-item"><a href="#">Automotive</a></li>*/ ?>
                        <?php /*<li class="breadcrumb-item active">Auto Parts</li>*/ ?>
                    </ol>
                </div>
            </div>
        </div>
        <section id="employer-post-new-job" style="min-height: 500px;">
            <div class="row">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-10 col-xs-offset-1" id="container">
                            <div class="res-steps-container">
                                <div class="res-steps res-step-one active" data-class=".res-form-one">
                                    <div class="res-step-bar">1</div>
                                    <div class="res-progress-bar"></div>
                                    <div class="res-progress-title">Write Ad</div>
                                </div>
                                <div class="res-steps res-step-two active" data-class=".res-form-two">
                                    <div class="res-step-bar">2</div>
                                    <div class="res-progress-bar"></div>
                                    <div class="res-progress-title">Preview Ad</div>
                                </div>
                                <div class="res-steps res-step-three active" data-class=".res-form-three">
                                    <div class="res-step-bar">3</div>
                                    <div class="res-progress-bar"></div>
                                    <div class="res-progress-title">Activation</div>
                                </div>
                                <div class="res-steps res-step-four active" data-class=".res-form-four">
                                    <div class="res-step-bar">4</div>
                                    <div class="res-progress-bar"></div>
                                    <div class="res-progress-title">All Done</div>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="res-step-form col-md-8 col-md-offset-2">
                                <?php if(Session::has('message')): ?>
                                    <?php if(session('status')=='Success'): ?>
                                        <div class="alert alert-success alert-dismissable fade in">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong><?php echo e(Session::get('status')); ?> !</strong>&nbsp;<?php echo e(Session::get('message')); ?>

                                        </div>
                                    <?php elseif(session('status')=='Error'): ?>
                                        <div class="alert alert-danger alert-dismissable fade in">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong><?php echo e(Session::get('status')); ?> ! </strong>&nbsp;<?php echo e(Session::get('message')); ?>

                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                <h3 class="text-center"><b>All Done</b></h3>
                                <p class="text-center"><b>Your ad has been verified and posted.</b></p>
                                <p class="text-center"><b>Your ad will be shown to user after 1 hour</b></p>
                                <center>
                                    <span class="label label-danger">Ad expires:
                                        <?php $dt = new DateTime();
                                        $dt->setTimestamp($data->expiry_date); //?$data->expiry_date:time()+3600*15
                                        $dt->setTimeZone(new \DateTimeZone($timezone));?>
                                        <?php echo e($dt->format('d/m/Y')); ?>

                                    </span>
                                </center>
                                <p class="text-center" style="margin-top:25px;"><a class="foot-links1"
                                                                                   href="<?php if(isset($data->sub_domain_name)): ?> /<?php echo e($data->sub_domain_name); ?>/classifieds/post/edit/<?php echo e($data->post_id); ?><?php else: ?> /classifieds/post/edit-sponsor/<?php echo e($data->post_id); ?> <?php endif; ?>">Edit</a>&nbsp;your
                                    ad</p>
                                <p class="text-center" style="margin-top:25px;"><a class="foot-links1"
                                                                                   href="<?php if(isset($data->sub_domain_name)): ?> <?php echo e($data->postlink); ?><?php echo e($data->post_id); ?> <?php else: ?> /ad/<?php echo e($data->subcatagoryid); ?>/<?php echo e(urlencode(str_replace('/','',$data->title))); ?>/<?php echo e($data->post_id); ?> <?php endif; ?>">View</a>&nbsp;your
                                    ad</p>
                                <?php if(isset($data->sub_domain_name)): ?>
                                    <p class="text-center">Purchase:
                                        <a href="/<?php echo e($data->sub_domain_name); ?>/purchaseSponser/<?php echo e($data->post_id); ?>"
                                           class="list-link">sponsor ad</a>,
                                        <a href="/<?php echo e($data->sub_domain_name); ?>/purchaseAutorepost/<?php echo e($data->post_id); ?>" class="list-link">auto
                                            re-post</a>,
                                        <a href="/<?php echo e($data->sub_domain_name); ?>/purchaseNearByCities/<?php echo e($data->post_id); ?>" class="list-link">nearby
                                            cities</a>,
                                        <a href="/<?php echo e($data->sub_domain_name); ?>/purchaseMovetoTop/<?php echo e($data->post_id); ?>" class="list-link">Move to
                                            top</a>
                                    </p>
                                <?php else: ?>
                                    <p class="text-center">Purchase:<a
                                                href="/purchaseAutorepost/<?php echo e($data->post_id); ?>" class="list-link">auto
                                            re-post</a></p>
                                <?php endif; ?>
                                <p class="text-center" style="margin-bottom:25px;"><a style="cursor: pointer;" class="foot-links1"
                                                                                      onclick="deletePost('/manage-ad/delete/<?php echo e($data->post_id); ?>')">Delete</a>&nbsp;your
                                    ad</p>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <?php /*<button type="button" class="btn btn-default btn res-btn-gray"*/ ?>
                                            <?php /*data-class=".res-form-four">Back*/ ?>
                                            <?php /*</button>*/ ?>
                                            <a href="/">
                                                <button type="button"
                                                        class="btn btn-default col-xs-offset-1 btn res-btn-orange"
                                                        data-class=".res-form-four">Finish
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br/>
        <br/>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_function'); ?>

    <script>
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
    </script>

    <script>
        var quill = new Quill('#editor-container', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow' // or 'bubble'
        });
        var quill = new Quill('#editor-container1', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Compose an epic...',
            theme: 'snow' // or 'bubble'
        });
    </script>
    <script>
        function readImage(file) {
            var reader = new FileReader();
            var image = new Image();

            reader.readAsDataURL(file);
            reader.onload = function (_file) {
                image.src = _file.target.result; // url.createObjectURL(file);
                image.onload = function () {
                    var w = this.width,
                            h = this.height,
                            t = file.type, // ext only: // file.type.split('/')[1],
                            n = file.name,
                            s = ~~(file.size / 1024) + 'KB';
                    $('#uploadPreview').append('<img src="' + this.src + '"> ' + w + 'x' + h + ' ' + s + ' ' + t + ' ' + n + '<br>' + '<br>');
                };

                image.onerror = function () {
                    alert('Invalid file type: ' + file.type);
                };
            };

        }
        $("#choose").change(function (e) {
            if (this.disabled) {
                return alert('File upload not supported!');
            }

            var F = this.files;
            if (F && F[0]) {
                for (var i = 0; i < F.length; i++) {
                    readImage(F[i]);
                }
            }
        });

        function deletePost(url) {
            swal({
                        title: "Are you sure?",
                        text: "",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel plx!",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your Ad has been deleted.", "success");
                            window.location.href = url;
                        }
                        else {
                            swal("Cancelled", "Your Ad is safe :)", "error");
                        }
                    });
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>