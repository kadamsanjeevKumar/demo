<?php $__env->startSection('title', 'Buy Credits'.' - '.env('APP_DOMAIN')); ?>

<?php $__env->startSection('footerdata'); ?>
    <?php echo e(env('APP_DOMAIN')); ?> is an interactive computer service that enables access by multiple users and should not be treated as the publisher or speaker of any information provided by another information content provider. © 2017
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
            <a onclick="checkDraft('<?php echo e('/'.$retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')">
                <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
            </a>
        <?php else: ?>
            <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')">
                <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post
                        Ad</b></button>
            </a>
        <?php endif; ?>
    <?php else: ?>
        <a href="/select/post/ad">
            <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
        </a>
    <?php endif; ?>
    <a href="/"><b>Home</b></a>
    <?php if(!empty(Session::get('package_details'))): ?>
        <a href="/admin/update/profile" data-toggle="modal"><b>My Account</b></a>
        <a href="/admin/posts"><b>My Ads</b></a>
    <?php else: ?>
        <a href="/login"><b>My Account</b></a>
        <a href="/profilepage"><b>Profile</b></a>
        <a href="/check/verify/user"><b>Verify User</b></a>
        <a href="#changepwd" data-toggle="modal"><b>Change Password</b></a>
    <?php endif; ?>
    <a href="/check/verify/user"><b>Verify User</b></a>
    <?php if(!empty(Session::get('package_details'))): ?>
        <a href="/admin/log/out"><b>Logout</b></a>
    <?php else: ?>
        <a href="/logout"><b>Logout</b></a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headerdata'); ?>
    <?php /*<div class="col-md-3 col-sm-3 col-md-offset-4 pull-right adjust2" style="margin-top:20px;">*/ ?>
    <?php /*<p style="color:#fff;float:left;"><b><?php echo e(env('APP_DOMAIN')); ?></b>&nbsp;&nbsp;</p>*/ ?>
    <?php /*<p style="color:#fff;">&nbsp;&nbsp;<b>free classifieds</b></p>*/ ?>
    <?php /*</div>*/ ?>

    <div class="col-md-2 col-sm-2 text-center" style="position:unset;">
        <div class="">
            <?php /*<a href="/select/post/ad">*/ ?>
            <?php /*<button  class="btn btn-default post-btn" type="button" style="">Post Ad</button>*/ ?>
            <?php /*</a>*/ ?>
            <?php if(isset($retrieveDraftPost->post_id)): ?>
                <?php if($retrieveDraftPost->locationid != 0): ?>
                    <a onclick="checkDraft('<?php echo e('/'.$retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')">
                        <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
                    </a>
                <?php else: ?>
                    <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')">
                        <button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;"
                                type="button"><b>Post Ad</b></button>
                    </a>
                <?php endif; ?>
            <?php else: ?>
                <a href="/select/post/ad">
                    <button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 label-text adjust1" style="margin-top:20px; text-align: right;">
<span style="float:right;">
                    <a href="#changepwd" class="ch-pwd" style="" data-toggle="modal">Change Password&nbsp;</a>
    <?php if(!empty(Session::get('package_details'))): ?>
        <a href="/admin/log/out" class="logout" style="">&nbsp;&nbsp;Logout</a>
    <?php else: ?>
        <a href="/logout" class="logout" style="">&nbsp;&nbsp;Logout</a>
    <?php endif; ?>
    </span>
                     <span class="user" style="float:right;">

                        <?php if($userDetails->verified_users == 1): ?>
                             <span style="float:left;margin: -5px 0 0 0">
                                 <img src="/assets/user/images/verify-icon.png" class="img-responsive"
                                      style="margin-right: 5px;" width="20"/>
                             </span>
                         <?php endif; ?>
                         <span style="float:left;margin: -8px 0 0 0;"><?php echo e($userDetails->firstname); ?></span>
                         <?php if(!empty($userDetails->profile_pic)): ?>
                             <span style="float:left;margin: -21px 0px 0 9px;"><img src="<?php echo e($userDetails->profile_pic); ?>"
                                                                                    class="img-responsive"
                                                                                    style="border-radius: 100px;height: 40px;width: 40px;"/></span> <?php endif; ?>

                    </span>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if($sessionStatus == 'failure'): ?>
        <div class="alert alert-danger" style="color:red;"><p style="font-size: 19px; margin-left: 39%;">Oops! Session has expired</p></div>
    <?php else: ?>
    <div class="container-fluid">
        <div class="row m-t-20">
            <div class="container">
                <div class="col-md-12">
                    <h3>Fund Account</h3>
                    <hr>
                    <span id="success" style="padding:30px; text-align:center; color: #1bc656;"></span>
                    <span style="padding:30px; text-align:center; color: #1bc656;"><?php echo e(session('message')); ?></span>
                    <div style="width:100%; height:auto;padding:10px 10px 10px 10px;">
                        <div class="row" style="padding:20px 0 30px 0;">
                            <div class="col-md-6">
                                <div class="col-md-3" style="margin-top:4px;">Credit Amount</div>
                                <div class="col-md-2"><input id="creditamount" onkeypress="return isNumber(event)"
                                                             name="creditamount" type="text" value="<?php echo e(isset($sessionData->amount)?sprintf("%01.2f",$sessionData->amount):''); ?>" style="border:1px solid #ccc; padding:5px; width:100%"/>
                                </div>
                            </div>
                            <div class="col-md-6" style="text-align: right;"><b>Credits: $<span
                                            id="credit"><?php echo e($userDetails->credits); ?></span></b></div>
                        </div>
                        <p id="errormessage" style="color: red"></p>
                        <p id="successMessage" style="color: green"></p>
                        <div class="row">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <?php if(!empty($gateways)): ?>

                                    <?php /*BITCOIN*/ ?>
                                    <?php foreach($gateways as $gateway): ?>
                                        <?php if($gateway->id == 2 && $gateway->status == 'A'): ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="button"
                                                     data-toggle="collapse" data-parent="#accordion" href="#bitcoin"
                                                     aria-expanded="true" aria-controls="collapseOne" id="headingOne"
                                                     style="padding: 15px ! important;">
                                                    <h4 class="panel-title">
                                                        <a> <i class="fa fa-btc" aria-hidden="true"></i> BITCOIN
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="bitcoin" class="panel-collapse collapse in" role="tabpanel"
                                                     aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <img src="/assets/user/images/bitcoin-logo.png" width="200">
                                                        <div id="createinvoice">
                                                            <a onclick="getInvoice()" class="btn btn-success"
                                                               style="margin:10px 0 0 20px;">Create Invoice</a>
                                                            <span style="display: inline-block; height: 20px; width: 40px; margin: 0px 0px 0px 10px;"><img
                                                                        id="loading" style="display: none;"
                                                                        src="/assets/user/images/loading.gif"
                                                                        width="40px"></span><br><br>
                                                            <a id="bitcoinlinks"
                                                               style="margin-left: 21px;cursor:pointer;">How do I get
                                                                Bitcoin?</a>

                                                        </div>
                                                        <div class="panel-body" id="book" style="display:none;">
                                                            <p>Please send <span id="amount"></span> ($<span
                                                                        id="amountInDollers"></span>) USD to:
                                                                <span id="address"
                                                                      style="padding:7px; background:#f5f5f5;"></span>
                                                            </p><br>
                                                            <a id="copy_address" class="btn btn-success">Copy address to
                                                                clipboard</a>
                                                            <a id="copy_amount" class="btn btn-success">Copy amount to
                                                                clipboard</a>
                                                            <p id="copied" style="color: #1bc656"></p><br><br><br>

                                                            <a onclick="toggle_visibility('barcode');"
                                                               class="btn btn-success" style="cursor:pointer;">Generate
                                                                QR Code</a><br><br>
                                                            <img id="barcode" style="display:none" src="">
                                                            <br>
                                                        </div>
                                                        <div class="panel-body" id="link" style="display:none;">
                                                            <h3>User Recommendations:</h3>
                                                            <a href="https://paxful.com/" target="_blank">Paxful: How to
                                                                buy Bitcoin</a><br><br>
                                                            <a href="https://www.bitquick.co/" target="_blank">BitQuick:
                                                                How to buy Bitcoin</a><br><br>
                                                            <a href="https://bitcoin.org/en/getting-started"
                                                               target="_blank">General Information: Getting Started with
                                                                Bitcoin</a><br><br>
                                                            <a href="https://coinatmradar.com/" target="_blank">Find a
                                                                local Bitcoin ATM near you</a><br><br>
                                                            <h3>Wallets:</h3>
                                                            <a href="https://wallet.mycelium.com/"
                                                               target="_blank">Bread</a><br>
                                                            <a href="https://itunes.apple.com/us/app/breadwalletBitcoinwallet/id885251393"
                                                               target="_blank">Mycelium</a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php /*LiteCoin*/ ?>
                                    <?php foreach($gateways as $gateway): ?>
                                        <?php if($gateway->id == 3 && $gateway->status == 'A'): ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading collapsed" role="button"
                                                     data-toggle="collapse" data-parent="#accordion" href="#litecoin"
                                                     aria-expanded="false" aria-controls="collapseOne"
                                                     id="litecoin_heading" style="padding: 15px ! important;">
                                                    <h4 class="panel-title">
                                                        <a> <i class="fa fa-btc" aria-hidden="true"></i> LITECOIN</a>
                                                    </h4>
                                                </div>
                                                <div id="litecoin" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="litecoin_heading">
                                                    <div class="panel-body">
                                                        <img src="/assets/user/images/litecoin1.jpg" width="225">
                                                        <div id="create_ltc_invoice">
                                                            <a onclick="createLiteCoinInvoice()" class="btn btn-success"
                                                               style="margin:10px 0 0 20px;">Create Invoice</a>
                                                            <span style="display: inline-block; height: 20px; width: 40px; margin: 0px 0px 0px 10px;"><img
                                                                        id="ltc_loading" style="display: none;"
                                                                        src="/assets/user/images/loading.gif"
                                                                        width="40px"></span><br><br>
                                                            <a id="ltc_instructions"
                                                               style="margin-left: 21px;cursor:pointer;">How do I get
                                                                Litecoin?</a>
                                                        </div>

                                                        <div id="display_ltc_invoice" style="display:none;">
                                                            <div class="panel-body">
                                                                <p>Please send <span id="ltc_amount"></span>
                                                                    ($<span id="ltc_amountInDollers"></span>) USD to:
                                                                    <span id="ltc_address"
                                                                          style="padding:7px; background:#f5f5f5;"></span>
                                                                </p><br>
                                                                <a id="ltc_copy_address" class="btn btn-success">Copy
                                                                    address to clipboard</a>
                                                                <a id="ltc_copy_amount" class="btn btn-success">Copy
                                                                    amount to clipboard</a>
                                                                <p id="ltc_copied" style="color: #1bc656"></p><br><br>
                                                                <a onclick="toggle_visibility('ltc_barcode');"
                                                                   class="btn btn-success" style="cursor:pointer;">Generate
                                                                    QR Code</a>
                                                                <span id="ltc_payment_waiting"
                                                                      style="color: #0099ff;display:none"> &nbsp;  &nbsp;  &nbsp; <span
                                                                            class="fa fa-circle-o-notch fa-spin "></span> Awaiting Payment From You &nbsp; </span>
                                                                <br><br>
                                                                <img id="ltc_barcode" style="display:none" src="">
                                                                <br>
                                                            </div>
                                                        </div>

                                                        <div id="display_ltc_intructions" style="display:none;">
                                                            <div class="panel-body">
                                                                <h3>User Recommendations:</h3>
                                                                <a href="https://paxful.com/" target="_blank">Paxful:
                                                                    How to buy Litecoin</a><br><br>
                                                                <a href="https://www.bitquick.co/" target="_blank">BitQuick:
                                                                    How to buy Litecoin</a><br><br>
                                                                <a href="https://bitcoin.org/en/getting-started"
                                                                   target="_blank">General Information: Getting Started
                                                                    with Litecoin</a><br><br>
                                                                <a href="https://coinatmradar.com/" target="_blank">Find
                                                                    a local Litecoin ATM near you</a><br><br>
                                                                <h3>Wallets:</h3>
                                                                <a href="https://wallet.mycelium.com/" target="_blank">Bread</a><br>
                                                                <a href="https://itunes.apple.com/us/app/breadwalletBitcoinwallet/id885251393"
                                                                   target="_blank">Mycelium</a><br>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php /*Paypal*/ ?>
                                    <?php foreach($gateways as $gateway): ?>
                                        <?php if($gateway->id == 4 && $gateway->status == 'A'): ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading collapsed" role="button"
                                                     data-toggle="collapse" data-parent="#accordion"
                                                     aria-expanded="false" href="#paypal" aria-controls="collapseThree"
                                                     id="headingThree" style="padding: 15px ! important;">
                                                    <h4 class="panel-title">
                                                        <a><i class="fa fa-paypal" aria-hidden="true"></i> PayPal</a>
                                                    </h4>
                                                </div>
                                                <div id="paypal" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <div class="row" style="margin-top:3%; margin-bottom:4%;">
                                                            <div class="col-md-12 text-center">
                                                                <?php /*<img max-width="100%"*/ ?>
                                                                     <?php /*src="http://s24.postimg.org/5gt3rmjd1/paypal.png"/>*/ ?>
                                                                <img max-width="100%" src="/assets/user/images/paypal1.png" width="50px" height="50px">
                                                            </div>
                                                            <div class="col-md-12 col-xs-12">
                                                                <div class="col-md-8" style="padding-right:0;">
                                                                    <h3 style="color: #1c8f5f"> READ BEFORE
                                                                        PURCHASE: </h3>
                                                                    <div class="row" style="margin-top:1%;">
                                                                        <div class="col-md-12">
                                                                            <ul class="purchase">
                                                                                <li><b>Use valid and real information
                                                                                        about you</b></li>
                                                                                <li>Don't use Proxies or VPN</li>
                                                                                <li>Minimum Purchase <b>1credit = $1</b>
                                                                                </li>
                                                                                <li>Purchases are final and we cannot
                                                                                    refund credits back to your paypal&reg;
                                                                                    or credit card
                                                                                </li>
                                                                                <li>Credits Amount.<b>1 Credit=1 US
                                                                                        Dollar </b></li>
                                                                            </ul>
                                                                            <a id="extraInfoPaypal"
                                                                               style="cursor:pointer;">How PayPal
                                                                                works?</a>
                                                                            <div id="extraInfoPaypalDiv" hidden><a
                                                                                        href="https://www.paypal.com/us/webapps/mpp/home"
                                                                                        target="_blank"> How to pay via
                                                                                    paypal</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4"
                                                                     style="border:3px solid #ccc;margin-left:-15px;margin-top: 50px;">
                                                                    <div class="text-center"
                                                                         style="margin: 15px 0px 15px 0px;">
                                                                        <?php /*<div id="spinner" style="width:69px;height:89px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;">*/ ?>
                                                                        <?php /*<img src='/assets/user/images/input-spinner.gif' width="64" height="64" /><br>Loading..</div>*/ ?>
                                                                        <button class="btn btn-success" id="paypalBtn">
                                                                            <i class="fa fa-paypal"></i> Pay via PayPal
                                                                        </button>
                                                                        <img id="spinner"
                                                                             src='/assets/user/images/input-spinner.gif'
                                                                             width="20" height="20" hidden/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php /*STRIPE*/ ?>
                                    <?php foreach($gateways as $gateway): ?>
                                        <?php if($gateway->id == 1 && $gateway->status == 'A'): ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading collapsed" role="button" data-toggle="collapse"
                                                     data-parent="#accordion" href="#strip" aria-expanded="false"
                                                     aria-controls="collapseTwo" id="headingTwo"
                                                     style="padding: 15px ! important;">
                                                    <h4 class="panel-title">
                                                        <a> <img src="/assets/user/images/s.png" width="9"> PAY WITH
                                                            STRIPE
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="strip" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <p id="customButton" style="padding:30px; text-align:center"><a
                                                                    href="#"><img src="/assets/user/images/strip.png"
                                                                                  width="250"></a></p>
                                <span style="display: inline-block; height: 94px; width: 40px; margin: -20% 0px 0px 62%;">
                                  <img id="loading1" style="display: none; /*position: absolute; left: 62%; top: 64%;*/"
                                       src="/assets/user/images/loading.gif" width="40px">
                                </span>
                                                        <?php /*<p id="success" style="padding:30px; text-align:center; color: #1bc656;"></p>*/ ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>



                                    <?php /*Flexepin*/ ?>
                                    <?php foreach($gateways as $gateway): ?>
                                        <?php /*<?php echo e(dd($gateways)); ?>*/ ?>
                                        <?php if(($gateway->id == 6 || $gateway->id == 7 )  && $gateway->status == 'A'): ?>
                                            <div class="panel panel-default">
                                                <div class="panel-heading collapsed" role="button" data-toggle="collapse"
                                                     data-parent="#accordion" href="#flexepin" aria-expanded="false"
                                                     aria-controls="collapseTwo" id="headingThree"
                                                     style="padding: 15px ! important;">
                                                    <input hidden id="flexepinMode" value=" <?php if($gateway->id == 6): ?> TestMode <?php endif; ?>" />
                                                    <h4 class="panel-title">
                                                        <a> <img src="/assets/user/images/flexepin_icon.png" width="29"> PAY WITH FLEXEPIN <?php if($gateway->id == 6): ?>(Test Mode)<?php endif; ?> </a>
                                                    </h4>
                                                </div>




                                                <div id="flexepin" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingThree">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="col-md-5">
                                                                    <h3 style="color: #9C0D1B "> User Guidelines: </h3>
                                                                    <div style="margin-top:1%;">
                                                                        <ul>
                                                                            <li>Easy & Simple.</li>
                                                                            <li>Safe & Secure.</li>
                                                                            <li>Fast & Private.</li>
                                                                            <li>Trusted.</li>
                                                                            <li>No KYC.</li>
                                                                            <li>Once you have purchased your Flexepin voucher featuring a unique 16-digit code, you can deposit funds into your account.
                                                                                Enter the 16-digit code printed on your voucher into Textfield.</li>
                                                                        </ul>
                                                                        <a id="extraInfoFlexepin"
                                                                           style="cursor:pointer;">Buy Flexepin Voucher</a>
                                                                        <div id="extraInfoFlexepinDiv" hidden>
                                                                            <ul>
                                                                                <li>Find a local shop around you selling Flexepin
                                                                                    (<a href="https://www.flexepin.com/sales_outlet_finder/"
                                                                                        target="_blank"> Flexepin Store Finder</a>).</li>
                                                                                <li>Buy Flexepin voucher(s) in the desired denomination. </li>
                                                                                <li>Pay online safely and instantly.</li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7" style="margin-top: 30px;">
                                                                    <div id="customButton" style="padding:30px; text-align:center">
                                                                        <div class="col-md-12 text-center">
                                                                            <img src="https://www.flexepin.com/wp-content/uploads/2018/08/cropped-Flexepin-1.png" style="width: 30%;margin: 0 auto;">
                                                                            <br><br>
                                                                            <?php /*<form action="/tetingflexepin" method="post">*/ ?>
                                                                            <div>
                                                                                <input type="text" id="flexepinPin"
                                                                                       class="form-control" maxlength="16"
                                                                                       pattern="[0-9]{16}"
                                                                                       placeholder="Enter your 16 digit PIN from your voucher" ><br>
                                                                                <button type="submit" class="btn btn-primary"
                                                                                        id="flexepinBtn">Submit
                                                                                </button>
                                                                                <img id="FlexepinSpinner"
                                                                                     src='/assets/user/images/input-spinner.gif'
                                                                                     width="20"
                                                                                     height="20" hidden/>
                                                                            </div>
                                                                            <?php /*</form>*/ ?>
                                                                        </div>
                                                                    </div>
                                                                    <span style="display: inline-block; height: 20px; width: 40px; margin: 0px 0px 0px 10px;">
                                  <img id="loading1" style="display: none; position: absolute; left: 61%; top: 53%;"
                                       src="/assets/user/images/loading.gif" width="40px">
                                </span>
                                                                    <p id="success"
                                                                       style="padding:30px; text-align:center; color: #1bc656;"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>



                                    <br>
                                    <?php /*<p><a href="#" class="btn btn-success"><i class="fa fa-arrow-left "></i> Back</a></p>*/ ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <?php /*<button onclick="checkstatus()">check status</button>*/ ?>
    </div>
    <div id="changepwd" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center"><b>Change Password</b></h4>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <form action="#">
                                <div class="alert alert-danger" id="errorMessage" style="display: none">
                                    <button class="close" data-close="alert"></button>
                                    <span style="text-align: center;"></span>
                                </div>

                                <div class="alert alert-success" id="success1" style="display: none">
                                    <button class="close" data-close="alert"></button>
                                    <span style="text-align: center;"></span>
                                </div>

                                <fieldset>
                                    <input type="password" placeholder="Old Password" id="oldPassword"
                                           style="width:70%;"/>
                                </fieldset>
                                <br/>
                                <fieldset>
                                    <input type="password" placeholder="New Password" id="newPassword"
                                           style="width:70%;"/>

                                </fieldset>
                                <br/>
                                <fieldset>
                                    <input type="password" required="required" placeholder="Confirm Password"
                                           id="confirmPassword" style="width:70%;"/>
                                </fieldset>
                                <br/>
                                <fielset>
                                    <button class="btn auth__submit" type="button" id="changePassword"
                                            style="background-color:#351969;color:#fff;border-radius:0px;">Save
                                    </button>
                                    <?php /*<a href="/login" class="pull-right" style="margin-top:8px;">Back to Login</a>*/ ?>
                                </fielset>
                                <br/>


                                <?php /*<fieldset>*/ ?>
                                <?php /*<input type="password" placeholder="Old Password" style="width:70%;" />*/ ?>

                                <?php /*</fieldset>*/ ?>
                                <?php /*<br/>*/ ?>
                                <?php /*<fieldset>*/ ?>
                                <?php /*<input type="password" placeholder="New Password" style="width:70%;" />*/ ?>

                                <?php /*</fieldset>*/ ?>
                                <?php /*<br/>*/ ?>
                                <?php /*<fieldset>*/ ?>
                                <?php /*<input type="password" required="required" placeholder="Confirm Password" style="width:70%;" />*/ ?>

                                <?php /*</fieldset>*/ ?>
                                <?php /*<br/>*/ ?>
                                <?php /*<fieldset>*/ ?>
                                <?php /*<center><button class="btn auth__submit" type="submit" style="background-color:#351969;color:#fff;border-radius:0px;">Save</button></center>*/ ?>
                                <?php /*<!--                            <a href="login.html" class="pull-right" style="margin-top:8px;">Back to Login</a>-->*/ ?>
                                <?php /*</fieldset>*/ ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_function'); ?>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="/assets/user/js/toastr/toastr.js"></script>
    <script>
        $(document).ready(function () {

            <?php if(empty(Session::get('package_details'))): ?>
                    new Check_fund_status();
            function Check_fund_status() {
                var status = $.ajax({
                    type: "POST",
                    url: "/check/user/session",
                    async: false
                }).success(function () {
                    setTimeout(function () {
                        Check_fund_status();
                    }, 5000);
                }).responseText;
                if (status == 'yes') {
                    window.location.href = '/login?session_expired=yes';
                }
            }

            <?php endif; ?>

        });
    </script>

    <script>
        var handler = StripeCheckout.configure({
            key: "<?php echo config('stripe.STRIPE_PUBLISH_KEY') ?>",
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            locale: 'auto',
            token: function (token) {
                $('#loading1').show();
                var stripeAmount = $('#creditamount').val();
                var stripeToken = token.id;
                var stripeEmail = token.email;
                $.ajax({
                    url: '/payment',
                    method: 'post',
                    data: {
                        stripeAmount: stripeAmount,
                        stripeToken: stripeToken,
                        stripeEmail: stripeEmail,
                        type: 'buycredits'
                    },
                    datatype: 'json',
                    beforeSend: function () {
                    },
                    complete: function () {
                    },
                    success: function (result) {
                        result = $.parseJSON(result);
                        if (result.status == 400) {
                            toastr.error(result.message, {timeOut: 4000});
                        }
                        else if (result.status == 200) {
                            $('#loading1').hide();
                            var amount = $('#credit').text();
                            var finalamount = Number(amount) + Number(stripeAmount);
                            $('#credit').text(finalamount);
                            $('#success').text('$' + stripeAmount + ' amount has been credited in to you account').fadeOut(30000);
                        }
                    }
                });
            }
        });

        document.getElementById('customButton').addEventListener('click', function (e) {
            var creditAmount = Number($('#creditamount').val()) * 100;
            if (creditAmount != 0) {
                // Open Checkout with further options:
                handler.open({
                    name: 'Stripe.com',
                    description: '',
                    zipCode: false,
                    amount: creditAmount
                });
            } else {
                toastr.error('Please enter amount that you want to credit to your wallet', {timeOut: 4000});

            }
            e.preventDefault();
        });

        // Close Checkout on page navigation:
        window.addEventListener('popstate', function () {
            handler.close();
        });


    </script>

    <script src="/assets/user/js/clipboard.js" type="text/javascript"></script>
    <script>

        function callslider() {
            $("#book").slideToggle("slow", function () {
                // Animation complete.
            });
        }

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }

        // to get invoice fro bitcoin payment
        function getInvoice() {
            var creditAmount = Number($('#creditamount').val());
            var sessionId = '<?php echo isset($sessionData->session_id)?$sessionData->session_id:''?>';
            var data = $('#amountInDollers').text();
            if (creditAmount != 0) {
                $('#loading').show();
                $.ajax({
                    url: '/getBitcoinInvoice',
                    method: 'post',
                    data: {
                        amount: $('#amountInDollers').text(),
                        bitcoin: $('#amount').text(),
                        creditAmount: creditAmount,
                        type: 'buycredits',
                        sessionId: sessionId
                    },
                    datatype: 'json',
                    beforeSend: function () {
                        $('#blockDiv').removeClass('hide');
                    },
                    complete: function () {
                        $('#loading').hide();
                        callslider();
                        $('#blockDiv').addClass('hide');
                        $('#link').addClass('hide');
                        $('#createinvoice').hide();
//                    checkstatus();
                    },
                    success: function (address) {
                        alert(address);
                        address = $.parseJSON(address);
                        if (address.status == 200) {
                            $('#address').html(address.address);
                            $('#amount').html(address.amountInBitcoin);
                            $('#amountInDollers').html(creditAmount);
                            $('#barcode').attr('src', 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=bitcoin:' + address.address + '?amount=' + address.amountInBitcoin)
                            checkstatus();
                        }
                    }
                });
            }
            else {
                toastr.error('Please enter amount that you want to credit to your wallet', {timeOut: 4000});
            }
        }

        // to copy the address
        $(document).ready(function () {
            $(document.body).on('click', '#copy_address', function () {
                var textCopy = $('#address');
                clipboard.copy(textCopy.text());
                $('#copied').html('Address Copied').fadeOut(5000);
            });
        });

        //to copy the amount
        $(document).ready(function () {
            $(document.body).on('click', '#copy_amount', function () {
                var textCopy = $('#amount');
                clipboard.copy(textCopy.text());
                $('#copied').html('Amount copied').fadeOut(5000);
            });
        });

        //to check if payment is done or not for bitcoin
        function checkstatus() {
            $('#errormessage').html();
            var address = $('#address').text();
            $.ajax({
                method: "post",
                url: "/check-paid-success",
                dataType: 'json',
                data: {
                    address: address,
                    type: 'buycredits'
                },
                success: function (details) {

                    if (details.status == 200) {
                        var amount = $('#credit').text();
                        var finalamount = Number(amount) + Number($('#creditamount').val());
                        $('#credit').text(finalamount);
                        $('#successMessage').html('$' + $('#creditamount').val() + ' amount has been credited in to you account');
                        $(window).scrollTop(0);
                    } else if (details.status == 400) {
                        $('#errormessage').html(details.message);
                        $(window).scrollTop(0);
                        setTimeout(checkstatus, 10000);
                    } else if (details.status == 401) {
                        setTimeout(checkstatus, 10000);
                    }
                },
                error: function () {
                }
            });
        }

        $(document).ready(function () {

            toastr.options.positionClass = "toast-top-center";
            toastr.options.preventDuplicates = true;
            toastr.options.closeButton = true;

            $('#extraInfoPaypal').click(function () {
                $('#extraInfoPaypalDiv').slideToggle();
            });

            /*   PayPal Script  --Saurabh  */
            $(document.body).on("click", "#paypalBtn", function () {

                $.ajax({
                    url: '/initiatePayment',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        type: 'buycredits',
                        amount: $('#creditamount').val()
                    },
                    beforeSend: function () {
                        $('#spinner').show();
                    },
                    complete: function () {

                    },
                    success: function (response) {
                        $('#spinner').hide();

                        if (response['code'] == 100) {
                            console.log(response);
                            var errorStr = '';
                            $.each(response['message'], function (i, o) {
                                console.log(o);
                                errorStr += o + "\n";
                            });
                            toastr.error(errorStr, {timeOut: 4000});
                            $('#creditamount').focus();
                        } else if (response['code'] == 200) {
                            location.href = response['url'];
                        } else {
                            toastr.error(response['message'], {timeOut: 4000});
                        }
                    }
                });
            });

        });

        //        $('#creditamount').bind('input', function() {
        //            alert($(this).val())
        //        });

        $(document).ready(function () {
            $("#changePassword").click(function () {
                var oldPassword = $('#oldPassword').val();
                var newPassword = $('#newPassword').val();
                var confirmPassword = $('#confirmPassword').val();

                $.ajax({
                    url: '/change-password',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        oldPassword: oldPassword,
                        newPassword: newPassword,
                        confirmPassword: confirmPassword
                    },

                    success: function (response) {
                        if (response['code'] == '200') {
//                            alert(response['code']);
//                            alert('Changed password successfull');
                            var successMessage = response['successMessage'];
                            $("#success1").html(' ' + successMessage + ' ');
                            $("#success1").css("display", "block");
                            window.location.href = 'http://page20.globusdemos.com/login';
                        }

                        else if (response['code'] == '400') {
                            var errorMessage = response['errorMessage'];
                            $("#errorMessage").html(' ' + errorMessage + ' ');
                            $("#errorMessage").css("display", "block");
//                        window.location.href ='http://projectpage20.localhost.com/login';
                        }

                        else if (response['code'] == '100') {
                            var errorMessage = response['errorMessage'];
                            $("#errorMessage").html(' ' + errorMessage + ' ');
                            $("#errorMessage").css("display", "block");
//                        window.location.href ='http://projectpage20.localhost.com/login';
                        }
                    }
                });
            });
        });

        $('#bitcoinlinks').click(function () {
            $("#link").slideToggle("slow", function () {
            });
        });

    </script>

    <script>
        //To check if payment is done or not for litecoin
        var checkLitecoinPaymentStatus = function () {
            $('#errormessage').html();
            var ltc_address = $('#ltc_address').text();
            $.ajax({
                method: "post",
                url: "/check/litecoin/payment/status",
                dataType: 'json',
                data: {ltc_address: ltc_address, type: 'buycredits'},
                success: function (response) {

                    if (response.status == 200) {
                        var amount = $('#credit').text();
                        var finalamount = Number(amount) + Number($('#creditamount').val());
                        $('#credit').text(finalamount);
                        $('#successMessage').html('$' + $('#creditamount').val() + ' amount has been credited in to your account');
                        $(window).scrollTop(0);
                        $("#ltc_payment_waiting").hide();

                        $('#create_ltc_invoice').toggle('slow');
                        $("#display_ltc_invoice").hide();

                    } else if (response.status == 400) {
                        $('#errormessage').html(response.message);
                        $(window).scrollTop(0);
                        setTimeout(checkLitecoinPaymentStatus, 10000);
                    } else if (response.status == 401) {
                        setTimeout(checkLitecoinPaymentStatus, 10000);
                    }
                },
                error: function () {
                }
            });
        }

        function createLiteCoinInvoice() {
            var creditAmount = $('#creditamount').val();
            var sessionId = '<?php echo isset($sessionData->session_id)?$sessionData->session_id:''?>';

            if (($.isNumeric(creditAmount) && Number(creditAmount) > 0)) {
                $.ajax({
                    url: '/create/litecoin/invoice',
                    method: 'post',
                    data: {amount: creditAmount, type: 'buycredits', sessionId: sessionId},
                    dataType: 'json',
                    beforeSend: function () {
                        $('#ltc_loading').show();
                        $('#successMessage').html('');
                        $('#errormessage').html('');
                    },
                    complete: function () {
                        $('#ltc_loading').hide();
                        $('#create_ltc_invoice').hide();
                    },
                    success: function (response) {

                        if (response.status == 200) {
                            $('#ltc_address').html(response.ltc_address);
                            $('#ltc_amount').html(response.ltc_amount);
                            $('#ltc_amountInDollers').html(creditAmount);
                            $('#ltc_barcode').attr('src', 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=bitcoin:' + response.ltc_address + '?amount=' + response.ltc_amount);
                            $("#display_ltc_invoice").toggle('slow');
                            $("#display_ltc_intructions").hide();

                            $("#ltc_payment_waiting").show();
                            setTimeout(checkLitecoinPaymentStatus, 10000);
                        }
                    }
                });
            }
            else {
                toastr.error('Please enter amount that you want to credit to your wallet', {timeOut: 4000});
            }
        }

        $(document.body).ready(function () {
            $('#ltc_instructions').click(function () {
                $("#display_ltc_intructions").toggle('slow');
            });

            // To copy the ltc_address
            $(document.body).on('click', '#ltc_copy_address', function () {
                var textCopy = $('#ltc_address');
                clipboard.copy(textCopy.text());
                $('#ltc_copied').html('Address Copied').show().fadeOut(3000);
            });


            //To copy the ltc_amount
            $(document.body).on('click', '#ltc_copy_amount', function () {
                var textCopy = $('#ltc_amount');
                clipboard.copy(textCopy.text());
                $('#ltc_copied').html('Amount copied').show().fadeOut(3000);
            });

        });



        //Flexepin
        $(document).ready(function ($) {
            $('#flexepinPin').keydown(function (e) {

                // Allow backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) ||
                    (e.keyCode >= 35 && e.keyCode <= 40)) {
                    return;
                }

                //only number
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }

            });
        });

        $(document.body).on("click","#flexepinBtn",function () {
            var creditAmount = Number($('#creditamount').val());
            var flexePin = $('#flexepinPin').val();
            var testMode = $('#flexepinMode').val();
            alert(testMode);
            return false;

            $.ajax({
                url: '/buyCreditsWithFlexepin',
                dataType: 'json',
                type: 'post',
                data: {
                    payAmount: creditAmount,
                    userFlexepin: flexePin,
                    postId: $('#postId').val(),
                    type: 'buyCredits'
                },
                beforeSend: function () {
                    $('#FlexepinSpinner').show();
                },
                complete: function () {
                    $('#FlexepinSpinner').hide();
                },

                success:function (response) {
                    // alert('Here');

                    console.log(response['result_description']);
                    if(response['voucherStatus'] == 100){

                        toastr.error(response['meassage']);
                    }

                    if(response['validationStatus'] == 412){
                        toastr.error(response['messages']);
                    }

                    if(response['creditStatus'] == 200){
                        toastr.success('$'+ response['amount'] + response['currency']+' amount has been credited in to your account' );
                        // alert(response.amount);
                    }

                    if(response['creditStatus'] == 300){
                        toastr.error('Your voucher Value is $'+ response['amount'] +' but your Seleted $'+ response['creditAmount']+' Credit Amount . Please Select $'+response['amount'] );
                        // alert(response.amount);
                    }
                }
            });
        });


        $('#extraInfoFlexepin').click(function () {
            $('#extraInfoFlexepinDiv').slideToggle();
        });
        //End Flexepin




    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>