<?php $__env->startSection('title', $placeDetails->place_name.' - '.env('APP_DOMAIN')); ?>


<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('sidebar'); ?>
    <?php /*<a href="/classifieds/postad">*/ ?>
        <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
    <?php /*</a>*/ ?>
    <?php if(isset($retrieveDraftPost->post_id)): ?>
        <?php if($retrieveDraftPost->locationid != 0): ?>
            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
        <?php else: ?>
            <a onclick="checkDraft('<?php echo e('/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
        <?php endif; ?>
    <?php else: ?>
        <a href="/select/post/ad"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
    <?php endif; ?>
    <a href="/"><b>Home</b></a>
    <?php if(!empty(Session::get('package_details')[1])): ?>
        <a href="admin/log/in"><b>My Account </b></a>
        <a href="/admin/posts"><b>My Ads </b></a>

    <?php else: ?>
        <a href="<?php echo e(env('APP_URL').'/login'); ?>"><b>My Account </b></a>
        <a href="/check/verify/user"><b>Verify User</b></a>
    <?php endif; ?>
    <a href="/buy"><b>Buy Credits</b></a>
    <h4 class="label-side-nav"><b>Nearby Cities</b></h4>
    <?php if($nearByPlaces): ?>
        <?php foreach($nearByPlaces as $nearcity): ?>
            <?php if($placeDetails->place_id != $nearcity->place_id): ?>
                <a href="/<?php echo e($nearcity->sub_domain_name); ?>"><?php echo e($nearcity->place_name); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>

        @media  only screen and (min-width:1824px){
            .mac-disclaimer{
                min-height:1000px;
            }
        }

        @media (min-width:320px) and (max-width: 640px) {
            .foot{
                margin-bottom:5%;
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
                    <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
                <?php else: ?>
                    <a onclick="checkDraft('<?php echo e('/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
                <?php endif; ?>
            <?php else: ?>
                <a href="/select/post/ad"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4 col-sm-3 pull-right" style="margin-top:10px;">
        <?php /*<p style="color:#fff;float:left;"><b><?php echo e(env('APP_DOMAIN')); ?></b>&nbsp;&nbsp;</p>*/ ?>
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
        <h6 style="color:#fff;float: right;"><b><?php if(!empty($state)): ?><?php echo e($state); ?>

                , <?php endif; ?> <?php if(!empty($placeDetails->place_name)): ?> <?php echo e($placeDetails->place_name); ?> <?php endif; ?> </b></h6>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="col-md-12 mac-disclaimer" style="min-height: 500px;">

                <h3>Disclaimer</h3>
                <div class="form-control" style="width:100%; height:auto;padding:10px 10px 10px 10px;">This section
                    contains sexual content, including pictorial nudity and adult language. It is to be accessed only by
                    persons who are 18 years of age or older (and is not considered to be a minor in his/her state of
                    residence) and who live in a community or local jurisdiction where nude pictures and explicit adult
                    materials are not prohibited by law. By accessing this website, you are representing to us that you
                    meet the above qualifications. A false representation may be a criminal offense. <br><br>

                    I confirm and represent that I am 18 years of age or older (and am not considered to be a minor in
                    my state of residence) and that I am not located in a community or local jurisdiction where nude
                    pictures or explicit adult materials are prohibited by any law. I agree to report any illegal
                    services or activities which violate the Terms of Use. I also agree to
                    <a href="/<?php echo e($placeDetails->sub_domain_name); ?>/stop/trafficking" target="_blank">report suspected exploitation of minors and/or human
                        trafficking</a> to the appropriate authorities.<br>

                </div>
                <br>
                <b>I have read the disclaimer and agree to all rules and regulations including the <a target="_blank"
                                                                                                      href="/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/terms-of-use">Terms
                        of Use</a>.</b><br><br>
                <?php /*<form action="/<?php echo e($catagoryId); ?>" method="get">*/ ?>
                    <?php /*<input type="hidden" name="success" value="true">*/ ?>
                 <?php /*<button id="agree" type="submit" class="btn btn-success">I agree</button>*/ ?>
                <?php /*</form>*/ ?>
                <a id="agree" class="btn btn-success foot" href="/<?php echo e($placeDetails->sub_domain_name); ?>/<?php echo e($catagoryId); ?>">I agree</a>
                <a class="btn btn-danger foot" href="/" style="margin-top: 1px; top: -35px; left: 89px;">I don't agree</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_function'); ?>
    <script>
        $('#agree').on('click',function(){
            var key ='category'+'<?php echo e($catAndSubDetails->cat_id); ?>';
            var date = new Date();
            date.setTime(date.getTime()+(2*60*60*1000));
            var expires = "; expires="+date.toGMTString();
            document.cookie = key+"="+'true'+expires+";domain=.<?php echo e(env('APP_DOMAIN')); ?>; path=/";
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>