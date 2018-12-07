<?php $__env->startSection('title'); ?> Page20.com :: Package Setting <?php $__env->stopSection(); ?>



<?php $__env->startSection('page_content'); ?>

    <section id="content">
        <!--start container-->
        <div class="container">

            <!--chart dashboard start-->
            <div id="chart-dashboard">
                <div class="row">
                    <div class="col s12 m12">
                        <div class="col s12 m12">
                            <h5 style="text-align: center;">PACKAGE SETTING</h5>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m8 offset-m2">
                        <div class="card">

                            <div class="card-content">
                                <!-- <div class="icon-free"><i class="fa fa-gift" style="padding: 23px;"></i></div>-->

                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">redeem</i>Free

                                        </div>
                                        <div class="collapsible-body light_bg">
                                            <div class="card-content">
                                                <a class="waves-effect waves-light btn">Weekly Price: $.$packageData/W</a>
                                                <a class="waves-effect waves-light btn">Monthly Price: $234/M</a><br><br>
                                                <h6>Features:</h6>
                                                <?php /*<?php echo e(dd($packageStatus,$packageData)); ?>*/ ?>

                                                <ul class="collection">
                                                    <li class="collection-item">Page20 Verified
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="verifiedStatu" onclick="changeVerified()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->page20_verified == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Coloufull Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="coloufullSponsorAds" onclick="changecoloufullSponsorAdsStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->colourful_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Live Video Broadcasting
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="videoChat" onclick="changeVideoStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->live_video_broadcasting == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Become a Fan
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="becomeAFan" onclick="changeBecomeAFan()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->become_fan == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Fund Transfer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="fundTransfer" onclick="changeFundTransferStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->funds_ransfer == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>


                                                    <li class="collection-item">Flash Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="flashSponsorAds" onclick="flashSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->flash_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">User Status
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="userStatus" onclick="userStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->user_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Broadcast viewing
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="broadcastviewing" onclick="broadcastviewing()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->broadcast_viewing == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat with Advertizer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="chatwithAdvertizer" onclick="chatwithAdvertizer()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->chat_with_advertizer == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat room
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="freeChatRoom" onclick="freeChatRoom()" <?php if(isset($packageData)): ?> <?php if($packageData[0]->chat_room == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                    </li>
                                    <?php /*<?php echo e(dd($packageData)); ?>*/ ?>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">language</i>Basic
                                            <div class="switch right">
                                                <label>
                                                    Off
                                                    <input type="checkbox" id="basicStatus" onclick="basicStatus()" <?php if(isset($packageStatus)): ?> <?php if($packageStatus[1]->package_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                    <span class="lever"></span>
                                                    On
                                                </label>
                                            </div>
                                        </div>
                                        <div class="collapsible-body light_bg">
                                            <div class="card-content">
                                                <a class="waves-effect waves-light btn">Weekly Price: $234/W</a>
                                                <a class="waves-effect waves-light btn">Monthly Price: $234/M</a><br><br>
                                                <h6>Features:</h6>

                                                <?php /*<?php echo e(dd($packageData)); ?>*/ ?>
                                                <ul class="collection">
                                                    <li class="collection-item">Page20 Verified
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicPage20Verified" onclick="basicPage20Verified()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->page20_verified == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Coloufull Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicColoufullSponsorAds" onclick="basicColoufullSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->colourful_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Video Chat
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicVideoChat" onclick="basicVideoChat()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->live_video_broadcasting == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Become a Fan
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicBecomeAFan" onclick="basicBecomeAFan()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->become_fan == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Fund Transfer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicFundTransfer" onclick="basicFundTransfer()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->funds_ransfer == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">Flash Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicFlashSponsorAds" onclick="basicFlashSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->flash_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">User Status
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicUserStatus" onclick="basicUserStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->user_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Broadcast viewing
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicBroadcastviewing" onclick="basicBroadcastviewing()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->broadcast_viewing == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat with Advertizer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicChatwithAdvertizer" onclick="basicChatwithAdvertizer()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->chat_with_advertizer == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat room
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="basicChatRoom" onclick="basicChatRoom()" <?php if(isset($packageData)): ?> <?php if($packageData[1]->chat_room == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </li>
                                    <?php /*<?php echo e(dd($packageData,$packageStatus)); ?>*/ ?>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">star_rate</i>Silver
                                            <div class="switch right">
                                                <label>
                                                    Off
                                                    <input type="checkbox" id="silverStatus" onclick="silverStatus()" <?php if(isset($packageStatus)): ?> <?php if($packageStatus[2]->package_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                    <span class="lever"></span>
                                                    On
                                                </label>
                                            </div>
                                        </div>
                                        <div class="collapsible-body light_bg">
                                            <div class="card-content">
                                                <a class="waves-effect waves-light btn">Weekly Price: $234/W</a>
                                                <a class="waves-effect waves-light btn">Monthly Price: $234/M</a><br><br>
                                                <h6>Features:</h6>

                                                <ul class="collection">
                                                    <li class="collection-item">Page20 Verified
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverPage20Verified" onclick="silverPage20Verified()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->page20_verified == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Coloufull Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverColoufullSponsorAds" onclick="silverColoufullSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->colourful_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Video Chat
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverVideoChat" onclick="silverVideoChat()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->live_video_broadcasting == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Become a Fan
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverBecomeAFan" onclick="silverBecomeAFan()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->become_fan == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Fund Transfer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverFundTransfer" onclick="silverFundTransfer()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->funds_ransfer == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">Flash Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverFlashSponsorAds" onclick="silverFlashSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->flash_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">User Status
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverUserStatus" onclick="silverUserStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->user_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Broadcast viewing
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverBroadcastviewing" onclick="silverBroadcastviewing()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->broadcast_viewing == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat with Advertizer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverChatwithAdvertizer" onclick="silverChatwithAdvertizer()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->chat_with_advertizer == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat room
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="silverChatRoom" onclick="silverChatRoom()" <?php if(isset($packageData)): ?> <?php if($packageData[2]->chat_room == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">view_agenda</i>Gold
                                            <div class="switch right">
                                                <label>
                                                    Off
                                                    <input type="checkbox" id="GoldStatus" onclick="GoldStatus()" <?php if(isset($packageStatus)): ?> <?php if($packageStatus[3]->package_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                    <span class="lever"></span>
                                                    On
                                                </label>
                                            </div>
                                        </div>
                                        <div class="collapsible-body light_bg">
                                            <div class="card-content">
                                                <a class="waves-effect waves-light btn">Weekly Price: $234/W</a>
                                                <a class="waves-effect waves-light btn">Monthly Price: $234/M</a><br><br>
                                                <h6>Features:</h6>

                                                <ul class="collection">
                                                    <li class="collection-item">Page20 Verified
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="GoldPage20Verified" onclick="GoldPage20Verified()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->page20_verified == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Coloufull Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldColoufullSponsorAds" onclick="goldColoufullSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->colourful_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Video Chat
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldVideoChat" onclick="goldVideoChat()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->live_video_broadcasting == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Become a Fan
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldBecomeAFan" onclick="goldBecomeAFan()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->become_fan == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Fund Transfer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldFundTransfer" onclick="goldFundTransfer()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->funds_ransfer == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">Flash Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldFlashSponsorAds" onclick="goldFlashSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->flash_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">User Status
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldUserStatus" onclick="goldUserStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->user_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Broadcast viewing
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldBroadcastviewing" onclick="goldBroadcastviewing()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->broadcast_viewing == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat with Advertizer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldChatwithAdvertizer" onclick="goldChatwithAdvertizer()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->chat_with_advertizer == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat room
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="goldChatRoom" onclick="goldChatRoom()" <?php if(isset($packageData)): ?> <?php if($packageData[3]->chat_room == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="collapsible-header"><i class="material-icons">security</i> Platinum
                                            <div class="switch right">
                                                <label>
                                                    Off
                                                    <input type="checkbox" id="PlatinumStatus" onclick="PlatinumStatus()" <?php if(isset($packageStatus)): ?> <?php if($packageStatus[4]->package_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                    <span class="lever"></span>
                                                    On
                                                </label>
                                            </div>
                                        </div>
                                        <div class="collapsible-body light_bg">
                                            <div class="card-content">
                                                <a class="waves-effect waves-light btn">Weekly Price: $234/W</a>
                                                <a class="waves-effect waves-light btn">Monthly Price: $234/M</a><br><br>
                                                <h6>Features:</h6>

                                                <ul class="collection">
                                                    <li class="collection-item">Page20 Verified
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="PlatinumPage20Verified" onclick="PlatinumPage20Verified()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->page20_verified == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Coloufull Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="PlatinumColoufullSponsorAds" onclick="PlatinumColoufullSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->colourful_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Video Chat
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="PlatinumVideoChat" onclick="PlatinumVideoChat()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->live_video_broadcasting == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Become a Fan
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="PlatinumBecomeAFan" onclick="PlatinumBecomeAFan()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->become_fan == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Fund Transfer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="PlatinumFundTransfer" onclick="PlatinumFundTransfer()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->funds_ransfer == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">Flash Sponsor Ads
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="platinumFlashSponsorAds" onclick="platinumFlashSponsorAds()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->flash_sponsor_ads == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">User Status
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="platinumUserStatus" onclick="platinumUserStatus()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->user_status == 1): ?>checked <?php endif; ?>  <?php endif; ?>>
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Broadcast viewing
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="platinumBroadcastviewing" onclick="platinumBroadcastviewing()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->broadcast_viewing == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat with Advertizer
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="platinumChatwithAdvertizer" onclick="platinumChatwithAdvertizer()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->chat_with_advertizer == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">Chat room
                                                        <div class="switch right">
                                                            <label>
                                                                Off
                                                                <input type="checkbox" id="platinumChatRoom" onclick="platinumChatRoom()" <?php if(isset($packageData)): ?> <?php if($packageData[4]->chat_room == 1): ?>checked <?php endif; ?>  <?php endif; ?> >
                                                                <span class="lever"></span>
                                                                On
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--chart dashboard end-->
        </div>
    </section>

    <?php $__env->stopSection(); ?>



<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>

    <script src="/assets/admin/toastr.js"></script>
    <script>
        $(document).ready(function () {
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>



    <script>
        function changeVerified() {
            var isChecked = document.getElementById('verifiedStatu').checked;
            var status = isChecked ? 1 : 0;

            $.ajax({

                'url' : 'changeVerified/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
//                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
        function changecoloufullSponsorAdsStatus() {
            var isChecked = document.getElementById('coloufullSponsorAds').checked;
            var status = isChecked ? 1 : 0;

            $.ajax({

                'url' : 'changecoloufullSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
//                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
        function changeVideoStatus() {
            var isChecked = document.getElementById('videoChat').checked;
            var status = isChecked ? 1 : 0;

            $.ajax({

                'url' : 'changeVideoChat/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
        function changeBecomeAFan() {
            var isChecked = document.getElementById('becomeAFan').checked;
            var status = isChecked ? 1 : 0;

            $.ajax({

                'url' : 'becomeAFan/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
            function changeFundTransferStatus() {
                var isChecked = document.getElementById('fundTransfer').checked;
                var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'changeFundTransfer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
        function flashSponsorAds() {
            var isChecked = document.getElementById('flashSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'flashSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function userStatus() {
            var isChecked = document.getElementById('userStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'user/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function broadcastviewing() {
            var isChecked = document.getElementById('broadcastviewing').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'broadcastviewing/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function chatwithAdvertizer() {
            var isChecked = document.getElementById('chatwithAdvertizer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'chatwithAdvertizer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function freeChatRoom() {
            var isChecked = document.getElementById('freeChatRoom').checked;
            var status = isChecked ? 1 : 0;
//            alert(status);
          $.ajax({
              'url': 'freeChatRoom/status',
              'type': 'post',
              'dataType': 'json',
              'data':{"value": status},
              success:function(res){
                  console.log('ChangeStatus',res);
                  if(res==1){
                      toastr.success('Updated Successfully', {timeOut: 2000});
                  }else{
                      toastr.error('Please try again..!', {timeOut: 2000});
                  }
            }
          });
        }
    </script>




    <script>
            function basicStatus() {
                var isChecked = document.getElementById('basicStatus').checked;
                var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'changeBasicStatus/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
            function basicPage20Verified() {
                var isChecked = document.getElementById('basicPage20Verified').checked;
                var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicPage20Verified/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

    <script>
            function basicColoufullSponsorAds() {
                var isChecked = document.getElementById('basicColoufullSponsorAds').checked;
                var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicColoufullSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
            }
            });
        }
    </script>

/* <script>
        function basicColoufullSponsorAds() {
            var isChecked = document.getElementById('basicColoufullSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicColoufullSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script> */

    <script>
        function basicVideoChat() {
            var isChecked = document.getElementById('basicVideoChat').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicVideoChat/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function basicBecomeAFan() {
            var isChecked = document.getElementById('basicBecomeAFan').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicBecomeAFan/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

   <script>
        function basicFundTransfer() {
            var isChecked = document.getElementById('basicFundTransfer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicFundTransfer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>


 /*   <script>
        function basicFundTransfer() {
            var isChecked = document.getElementById('basicFundTransfer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicFundTransfer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script> */


    <script>
        function basicFlashSponsorAds() {
            var isChecked = document.getElementById('basicFlashSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicFlashSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function basicUserStatus() {
            var isChecked = document.getElementById('basicUserStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicUser/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function basicBroadcastviewing() {
            var isChecked = document.getElementById('basicBroadcastviewing').checked;
            var status = isChecked ? 1 : 0;
//            alert(status);
            $.ajax({
                'url' : 'basicBroadcastviewing/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function basicChatwithAdvertizer() {
            var isChecked = document.getElementById('basicChatwithAdvertizer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicChatwithAdvertizer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function basicChatRoom() {
            var isChecked = document.getElementById('basicChatRoom').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'basicChatRoom/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>




    <script>
        function silverStatus() {
            var isChecked = document.getElementById('silverStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverStatus',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverPage20Verified() {
            var isChecked = document.getElementById('silverPage20Verified').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverPage20Verified/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverColoufullSponsorAds() {
            var isChecked = document.getElementById('silverColoufullSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverColoufullSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverVideoChat() {
            var isChecked = document.getElementById('silverVideoChat').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverVideoChat/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverBecomeAFan() {
            var isChecked = document.getElementById('silverBecomeAFan').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverBecomeAFan/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverFundTransfer() {
            var isChecked = document.getElementById('silverFundTransfer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverFundTransfer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>


    <script>
        function silverFlashSponsorAds() {
            var isChecked = document.getElementById('silverFlashSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverFlashSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverUserStatus() {
            var isChecked = document.getElementById('silverUserStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverUser/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverBroadcastviewing() {
            var isChecked = document.getElementById('silverBroadcastviewing').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverBroadcastviewing/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverChatwithAdvertizer() {
            var isChecked = document.getElementById('silverChatwithAdvertizer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverChatwithAdvertizer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function silverChatRoom() {
            var isChecked = document.getElementById('silverChatRoom').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'silverChatRoom/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>



    <script>
        function GoldStatus() {
            var isChecked = document.getElementById('GoldStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'GoldStatus',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function GoldPage20Verified() {
            var isChecked = document.getElementById('GoldPage20Verified').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'GoldPage20Verified/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldColoufullSponsorAds() {
            var isChecked = document.getElementById('goldColoufullSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldColoufullSponsorAds/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldVideoChat() {
            var isChecked = document.getElementById('goldVideoChat').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldVideoChat/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldBecomeAFan() {
            var isChecked = document.getElementById('goldBecomeAFan').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldBecomeAFan/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldFundTransfer() {
            var isChecked = document.getElementById('goldFundTransfer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldFundTransfer/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldFlashSponsorAds() {
            var isChecked = document.getElementById('goldFlashSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldFlashSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldUserStatus() {
            var isChecked = document.getElementById('goldUserStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldUser/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldBroadcastviewing() {
            var isChecked = document.getElementById('goldBroadcastviewing').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldBroadcastviewing/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldChatwithAdvertizer() {
            var isChecked = document.getElementById('goldChatwithAdvertizer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldChatwithAdvertizer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function goldChatRoom(){
            var isChecked = document.getElementById('goldChatRoom').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'goldChatRoom/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>



    <script>
        function PlatinumStatus() {
            var isChecked = document.getElementById('PlatinumStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'PlatinumStatus',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function PlatinumPage20Verified() {
            var isChecked = document.getElementById('PlatinumPage20Verified').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'PlatinumPage20Verified/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function PlatinumColoufullSponsorAds() {
            var isChecked = document.getElementById('PlatinumColoufullSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'PlatinumColoufullSponsorAds/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function PlatinumVideoChat() {
            var isChecked = document.getElementById('PlatinumVideoChat').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'PlatinumVideoChat/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function PlatinumBecomeAFan() {
            var isChecked = document.getElementById('PlatinumBecomeAFan').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'PlatinumBecomeAFan/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function PlatinumFundTransfer() {
            var isChecked = document.getElementById('PlatinumFundTransfer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'PlatinumFundTransfer/Status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>


    <script>
        function platinumFlashSponsorAds() {
            var isChecked = document.getElementById('platinumFlashSponsorAds').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'platinumFlashSponsorAds/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function platinumUserStatus() {
            var isChecked = document.getElementById('platinumUserStatus').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'platinumUser/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function platinumBroadcastviewing() {
            var isChecked = document.getElementById('platinumBroadcastviewing').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'platinumBroadcastviewing/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function platinumChatwithAdvertizer() {
            var isChecked = document.getElementById('platinumChatwithAdvertizer').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'platinumChatwithAdvertizer/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>

    <script>
        function platinumChatRoom() {
            var isChecked = document.getElementById('platinumChatRoom').checked;
            var status = isChecked ? 1 : 0;
            $.ajax({
                'url' : 'platinumChatRoom/status',
                'type' : 'post',
                'dataType' : 'json',
                'data' : {
                    'value' : status
                },
                success:function(res){
                    console.log('changeVerified',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else {
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }
    </script>



<?php $__env->stopSection(); ?>








<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>