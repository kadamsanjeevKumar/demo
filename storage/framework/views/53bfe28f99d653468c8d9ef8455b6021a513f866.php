<?php $__env->startSection('title', env('APP_DOMAIN')); ?>


<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('sidebar'); ?>
    <?php /*<a href="/select/post/ad">*/ ?>
        <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
    <?php /*</a>*/ ?>
    <?php if(isset($retrieveDraftPost->post_id)): ?>
        <?php if($retrieveDraftPost->locationid != 0): ?>
            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
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
        <a href="/login"><b>My Account </b></a>
        <a href="/check/verify/user"><b>Verify User</b></a>
    <?php endif; ?>
    <a href="/buy"><b>Buy Credits</b></a>
    <a href="/"><b>View All cities</b></a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headerdata'); ?>
    <div class="col-md-3 col-sm-3 pull-right" style="margin-top:10px;">
        <?php /*<p style="color:#fff;float:left;"><b>backpage.com</b>&nbsp;&nbsp;</p>*/ ?>
        <?php /*<p style="color:#fff;">&nbsp;&nbsp;<b>free classifieds</b></p>*/ ?>
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
        <span class="user" style="">

                  <?php if(!empty($user_details)): ?>
                <?php if($user_details->verified_users == 1): ?>
                    <span style="float:left;margin: -2px 0 0 0">

                        <img src="/assets/user/images/verify-icon.png" class="img-responsive" style="margin-right: 5px;"
                             width="20"/></span><?php endif; ?>
                <span style="float:left;margin: -2px 0 0 0;"><?php echo e($user_details->firstname); ?></span>
                <?php if(!empty($user_details->profile_pic)): ?>
                    <span style="float:left;margin: -12px 0px 10px 9px;" >
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
                <li class="b-inline"><a href="/" class="bread-crumb"><?php echo e(env('APP_DOMAIN')); ?></a></li>
                <?php /*<li class="b-inline"><a href="" class="bread-crumb">Post Ad</a></li>*/ ?>
                <?php if(isset($retrieveDraftPost->post_id)): ?>
                    <?php if($retrieveDraftPost->locationid != 0): ?>
                        <li><a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a></li>
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
                <h4 class="heading1"><b>POST AN AD</b></h4>
            </div>
        </div>
        <div class="row" style="margin-top:20px;">
            <div class="col-md-6 col-sm-12">
                <ul style="margin-left:60px;" class="list-unstyled">
                    <li class="li-bg" style=""><a class="list-links" href="/get/all/location">Post Local Ads</a> (mainly free)</li><br/>
                    <li class="li-bg" style=""><a class="list-links" href="/classifieds/postad">Post in Multiple cities</a> (paid sponsor ads only)</li><br/>
                </ul>
            </div>
        </div>
    </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>