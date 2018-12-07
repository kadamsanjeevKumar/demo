
<?php $__env->startSection('style'); ?>
    <style>
        @media  only screen and (min-width:320px) and (max-width:480px){
            .list-inline{
                margin-left:-18px !important;
            }
            .list-inline > li{
                padding-left: 2px !important;
                padding-right: 2px !important;
            }
            .foot-links {
                font-size: 9px !important;
            }
        }
        .footer_places{position: fixed !important;}
    </style>
    <?php $__env->stopSection(); ?>

<div class="m-t-20 footer_places" style="/*position: fixed !important;*/ position:absolute; background-color:#f0efee;padding:15px 0px 15px;bottom: 0;width: 100%" >
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <div class="col-md-7 col-sm-7 col-xs-12 text-left">
            <ul class="list-inline" style="display:inline;">
                <?php if(!empty(Session::get('package_details')[1])): ?>
                    <li><a class="foot-links" href="<?php echo e(env('APP_URL')); ?>/admin/update/profile">My Account</a></li>
                <?php else: ?>
                    <li><a class="foot-links" href="/user/dashboard">My Account</a></li>
                <?php endif; ?>
                <li><a class="foot-links" href="<?php echo e(env('APP_URL').'/buy'); ?>">Buy Credits</a></li>
                <li><a class="foot-links" href="/contact-us/<?php echo $__env->yieldContent('location'); ?>">Contact</a></li>
                <li><a class="foot-links" href="/help">Help</a></li>
                <li><a class="foot-links" href="/privacy">Privacy</a></li>
                <li><a class="foot-links" href="/terms">Terms</a></li>
                <?php /*<li><a class="foot-links" href="#">Safety</a></li>*/ ?>
            </ul>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 text-right hidden-xs">
                    <span>
                        <?php /*<i class="glyphicon glyphicon-copyright-mark" style="color:#351969;"></i>&nbsp;2017 <a class="foot-links1" href="/">Page20.com</a>*/ ?>

                        <img src="/assets/user/images/visa.jpg" height="25px" width="25px" style="margin-right: 5px;" title="Visa">
                        <img src="/assets/user/images/mastercards.png" height="25px" width="25px" style="margin-right: 5px;" title="Master card">
                        <img src="/assets/user/images/bitcoin.png" height="20px" width="20px" style="margin-right: 5px;" title="Bitcoin">
                        <img src="/assets/user/images/s.png" height="17px" width="17px" style="margin-right: 5px;" title="Stripe">
                        <img src="/assets/user/images/litecoin.jpg" height="17px" width="17px" style="margin-right: 5px;" title="Litecoin">
                        <img src="/assets/user/images/paypal1.png" height="23px" width="23px" style="margin-right: 5px;" title="Paypal">
                        <img src="/assets/user/images/flexepin_icon.png" height="23px" width="23px" style="margin-right: 5px;" title="flexepin">
                        <span class="vertical-line" style="border-left:1px solid #000;padding-bottom: 3px;"></span>&nbsp;&nbsp;
                        <a href="https://www.facebook.com/page20news/" target="_blank">
                        <img src="/assets/user/images/facebook.png" height="18px" width="18px" style="margin-right: 5px;" title="Facebook"></a>
                    <a href="https://www.instagram.com/page20admin/" target="_blank"><img src="/assets/user/images/instagram.png" height="22px" width="22px" style="margin-right: 5px;" title="Instagram"></a>
                    <img src="/assets/user/images/snapchat.png" height="23px" width="23px" style="margin-right: 5px;" title="Snapchat">
                    <a href="https://plus.google.com/110412870635346108765" target="_blank">
                        <img src="/assets/user/images/gplus.png" height="19px" width="19px" title="gplus"></a>
                    <a href="https://twitter.com/page20admin" target="_blank"><img src="/assets/user/images/twitter.png" height="20px" width="20px" style="margin-right: 5px;" title="Twitter"></a>
                    <a href="https://page20amin.tumblr.com/" target="_blank">
                        <img src="/assets/user/images/tumblr.png" height="20px" width="20px" style="margin-right: 5px;" title="Tumblr"></a>
                    <a href="https://www.youtube.com/channel/UCI0fogJnJonExmlizHFjwSg/featured" target="_blank">
                        <img src="/assets/user/images/youtube.png" height="19px" width="19px" title="Youtube"></a>

                    <a href="https://www.pinterest.com/page20admin/" target="_blank">
                        <img src="/assets/user/images/pinterest.png" height="19px" width="19px" title="pinterest"></a>
                    </span>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 text-right visible-xs">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <i class="glyphicon glyphicon-copyright-mark" style="color:#351969;"></i>&nbsp;2017 <a class="foot-links1" href="/">Page20.com</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <img src="/assets/user/images/visa.jpg" height="25px" width="25px" style="margin-right: 5px;" title="Visa">
                    <img src="/assets/user/images/mastercards.png" height="25px" width="25px" style="margin-right: 5px;" title="Master card">
                    <img src="/assets/user/images/bitcoin.png" height="20px" width="20px" style="margin-right: 5px;" title="Bitcoin">
                    <img src="/assets/user/images/s.png" height="17px" width="17px" style="margin-right: 5px;" title="Stripe">
                    <img src="/assets/user/images/litecoin.jpg" height="17px" width="17px" style="margin-right: 5px;" title="Litecoin">
                    <img src="/assets/user/images/paypal1.png" height="23px" width="23px" style="margin-right: 5px;" title="Paypal">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="https://www.facebook.com/page20admin/" target="_blank">
                        <img src="/assets/user/images/facebook.png" height="18px" width="18px" style="margin-right: 5px;" title="Facebook"></a>
                    <a href="https://www.instagram.com/page20admin/" target="_blank"><img src="/assets/user/images/instagram.png" height="22px" width="22px" style="margin-right: 5px;" title="Instagram"></a>
                    <img src="/assets/user/images/snapchat.png" height="23px" width="23px" style="margin-right: 5px;" title="Snapchat">
                    <a href="https://plus.google.com/110412870635346108765" target="_blank">
                        <img src="/assets/user/images/gplus.png" height="19px" width="19px" title="gplus"></a>
                    <a href="https://twitter.com/page20admin" target="_blank"><img src="/assets/user/images/twitter.png" height="20px" width="20px" style="margin-right: 5px;" title="Twitter"></a>
                    <a href="https://page20amin.tumblr.com/" target="_blank">
                        <img src="/assets/user/images/tumblr.png" height="20px" width="20px" style="margin-right: 5px;" title="Tumblr"></a>
                    <a href="https://www.youtube.com/channel/UCI0fogJnJonExmlizHFjwSg/featured" target="_blank">
                        <img src="/assets/user/images/youtube.png" height="19px" width="19px" title="Youtube"></a>

                    <a href="https://www.pinterest.com/page20admin/" target="_blank">
                        <img src="/assets/user/images/pinterest.png" height="19px" width="19px" title="pinterest"></a>


                </div>
            </div>

        </div>
    </div>
        <?php /*<div class="col-md-5 col-sm-5 col-xs-5 text-right">*/ ?>
                    <?php /*<span><i class="glyphicon glyphicon-copyright-mark" style="color:#351969;"></i>&nbsp;2017 <a class="foot-links1" href="/">Page20.com</a></span>*/ ?>
        <?php /*</div>*/ ?>
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <?php /*<br>*/ ?>
            <h6 class="text-left" style="font-size: 11px; margin-left: 14px;margin-bottom: 0px; margin-top: 0px; font-size: 9px;">
                <?php echo e(env('APP_DOMAIN')); ?> is an interactive computer service that enables access by multiple users and should not be treated as the publisher or speaker of any information provided by another information content provider. © 2017
                <a href="/"><?php echo e(env('APP_DOMAIN')); ?></a>
                <?php /*Page20 (City Name) is an interactive computer service that enables access by multiple users and should not be treated as the publisher or speaker of any information provided by another information content provider. © 2017 <?php echo e(env('APP_DOMAIN')); ?>*/ ?>
            </h6>
            <?php /*<br>*/ ?>
        </div>

</div>
