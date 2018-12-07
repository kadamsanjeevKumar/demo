<?php if(!empty(Session::get('package_details')) && empty(Session::get('pc_user'))): ?>
    <script type="text/javascript">
        window.location = "/admin/posts";
    </script>
<?php else: ?>



    
<?php $__env->startSection('title', env('APP_DOMAIN')); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="/assets/user/jgrowl/jquery.jgrowl.css" type="text/css"/>
    <style>
        .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
            background-color: #533687 !important;
            border-color: #533687 !important;
        }

        div.jGrowl-notification {
            float: bottom;
            margin-left: 6px;
        }

        @media (min-width: 320px) and (max-width: 640px) {
            .user-size {
                font-size: 13px;
            }

            .credit-size {
                margin-top: 10px;
            }

            .credit-btn {
                background-color: #351969;
                color: #fff;
                margin-top: 2px;
                padding: 5px !important;
            }

            .prof-img {
                width: 25px !important;
                height: 25px !important;
                margin-top: 11px;
            }
        }

        .credit-btn {
            background-color: #351969;
            color: #fff;
            margin-top: 2px;
        }

        .credit-size {
            margin-top: 10px;
        }

        .link-width {
            max-width: 140px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .ver-ic {
            margin-top: -9px;
        }

        .username1 {
            margin: -10px 0 0 0;
        }

        @media (min-width: 768px) and (max-width: 980px) {
            .username1 {
                margin: 2px 0 0 0 !important;
            }

            .ver-ic {
                margin-top: 1px !important;
            }
        }

        .tooltip.top .tooltip-inner {
            background-color:#000;
            padding:5px 20px;
            opacity:0.8;
            border-radius:0;
            border-top:1px solid red;
        }
        .tooltip.top .tooltip-arrow {
            border-top-color:#000;
            opacity:0.8;
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
            <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
        <?php else: ?>
            <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
        <?php endif; ?>
    <?php else: ?>
        <a href="/select/post/ad"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
    <?php endif; ?>
    <a href="/"><b>Home</b></a>
    <a href="/profilepage"><b>Profile</b></a>
    <a href="#changepwd" data-toggle="modal"><b>Change Password</b></a>
    <a href="/check/verify/user"><b>Verify User</b></a>
    <a href="/buy"><b>Buy Credits</b></a>
    <a href="/logout"><b>Logout</b></a>
<?php $__env->stopSection(); ?>

<div class="container-fluid">
    <?php
    if(isset($_COOKIE['timezone'])){
        $timezone = $_COOKIE['timezone'];
    }else{
        $timezone = date_default_timezone_get();
    }
    ?>
    <?php /*<?php echo e(dd($details)); ?>*/ ?>

        <?php if(Session::has('msg')): ?>
            <div class="alert alert-success"> <center style="font-size: 18px;"><?php echo e(session('msg')); ?></center></div>
            <?php Session::forget('msg'); ?>
        <?php endif; ?>
        <?php if(Session::has('gatewaysoff')): ?>
            <div class="alert alert-success"> <center style="font-size: 20px;"><?php echo e(session('gatewaysoff')); ?></center></div>
            <?php Session::forget('gatewaysoff'); ?>
        <?php endif; ?>

        <div class="alert alert-success fundTransferStatus" style="display: none;"> </div>

    <div class="row" style="background-color: #533687;">
        <div class="col-md-12 col-sm-12">

            <?php $__env->startSection('headerdata'); ?>

                <div class="col-md-2 col-sm-2 text-center" style="position:unset;">
                    <div class="">
                        <?php /*<a href="/select/post/ad">*/ ?>
                            <?php /*<button class="btn btn-default post-btn" type="button" style="">Post Ad</button>*/ ?>
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
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 label-text adjust1" style="margin-top:20px; text-align: right;">
<span style="float:right;">
                    <a href="#changepwd" class="ch-pwd" style="" data-toggle="modal">Change Password&nbsp;</a>
                    <a href="/logout" class="logout" style="">&nbsp;&nbsp;Logout</a>
    </span>

                    <span class="user" style="float:right;">


                        <?php if($details->verified_users == 1): ?>
                            <span class="ver-ic" style="float:left;"><img src="/assets/user/images/verify-icon.png" class="img-responsive" style="margin-right: 5px;" width="20"/></span><?php endif; ?>
                        <span class="username1" style="float:left;"><?php echo e($details->firstname); ?></span>
                        <?php if(!empty($details->profile_pic)): ?>
                            <span style="float:left;margin: -21px 0px 0 9px;"><img src="<?php echo e($details->profile_pic); ?>" class="img-responsive prof-img" style="border-radius: 100px;height: 40px;width: 40px;"/></span> <?php endif; ?>
                    </span>
                </div>

            <?php $__env->stopSection(); ?>
        </div>
    </div>

    <div class="row m-t-20 ">
        <div class="col-md-11 bg">
            <h4 class="username user-size"><b><?php echo e($details->email); ?></b>
                <?php /*<a href="#creditTransfer" data-toggle="modal" style="float:right"><b> Credit Transfer </b>&nbsp;&nbsp;*/ ?>
                <?php /*</a>*/ ?>
                <button class="btn btn-default pull-right credit-btn" type="button"
                        style=""
                        data-toggle="modal" data-target="#creditTransfer">Credit Transfer
                </button>
                <span class="pull-right credit-size"
                      style="margin-right:10px;">Credits <span data-toggle="tooltip" data-placement="top"
                                                               title="We currently don't do currency conversions right now."
                                                               style="background-color: #583595;color: #fff;padding: 0px 6px;
               border-radius: 50%;font-size: 14px">?</span> : <b
                            id="currentCredits"> <?php echo e(number_format((float)$details->credits, 2, '.', '')); ?></b></span>
            </h4>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-md-10 col-md-offset-1">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr class="heading">
                        <th class="data">Date</th>
                        <th class="data">Market</th>
                        <th class="data">Ad Title</th>
                        <th class="data">Category</th>
                        <th class="data">Type</th>
                        <th class="data">Status</th>
                        <th class="data">Renewal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($posts as $post): ?>
                        <tr>
                            <td>
                                <?php $dt = new DateTime();
                                $dt->setTimestamp($post->time);
                                $dt->setTimeZone(new \DateTimeZone($timezone));?>
                                <?php echo e($dt->format('Y-m-d')); ?>

                                <?php /*<?php echo e(date('Y-m-d',$post->time)); ?>*/ ?>
                            </td>
                            <td><?php if($post->locationid != 0): ?> <?php echo e(env('APP_DOMAIN')); ?>/<?php echo e($post->sub_domain_name); ?>

                                 <?php else: ?> <?php echo e(env('APP_DOMAIN')); ?> <?php endif; ?></td>
                            <?php if($post->post_status == 1): ?>
                                <?php $title = preg_replace('/[^ \w]+/', '', $post->title);?>
                                <td class="link-width">
                                    <a href="<?php if($post->locationid != 0): ?> /<?php echo e($post->sub_domain_name); ?>/ad/<?php echo e($post->subcatagoryid); ?>/<?php echo e(preg_replace('#[ -]+#', '-', $title)); ?>/<?php echo e($post->post_id); ?> <?php else: ?> https://<?php echo e(env('APP_DOMAIN')); ?>/ad/<?php echo e($post->subcatagoryid); ?>/<?php echo e(urlencode(str_replace('/','',$title))); ?>/<?php echo e($post->post_id); ?> <?php endif; ?>"><?php echo e($post->title); ?></a>
                                </td>
                            <?php else: ?>
                                <?php $title = preg_replace('/[^ \w]+/', '', $post->title);?>
                                <td class="link-width"><a href="<?php if($post->postlink): ?><?php echo e($post->postlink); ?><?php echo e($post->post_id); ?> <?php else: ?> https://<?php echo e(env('APP_DOMAIN')); ?>/ad/<?php echo e($post->subcatagoryid); ?>/<?php echo e(urlencode(str_replace('/','',$title))); ?>/<?php echo e($post->post_id); ?> <?php endif; ?>"><?php echo e($post->title); ?></a></td>
                            <?php endif; ?>
                            <td><?php echo e($post->cat_name); ?></td>
                            <td><?php if($post->locationid != 0): ?> Ad <?php else: ?> Sponsor Ad <?php endif; ?></td>
                            <td>
                                <?php if($post->post_status == 1): ?>
                                    <span class="label label-success status-label1 col-md-12">Live</span>
                                <?php elseif($post->post_status == 0): ?>
                                    <span class="label label-warning status-label1 col-md-12">Pending</span>
                                <?php elseif($post->post_status == 2): ?>
                                    <span class="label label-primary status-label1 col-md-12">Expired</span>
                                <?php elseif($post->post_status == 3): ?>
                                    <span class="label label-danger status-label1 col-md-12">Reported</span>
                                <?php elseif($post->post_status == 4): ?>
                                    <span class="label label-default status-label1 col-md-12"
                                          style="background-color: #A79DFF">Removed by me</span>
                                <?php elseif($post->post_status == 5): ?>
                                    <span class="label label-danger status-label1 col-md-12">Community Removed</span>
                                <?php endif; ?>
                            </td>
                            <?php if($post->post_status == 2 || $post->post_status == 4): ?>
                                <?php if($post->locationid != 0): ?>
                                    <td>
                                        <a href="/<?php echo e($post->sub_domain_name); ?>/renew-ad/<?php echo e($post->post_id); ?>">Renew </a>
                                    </td>
                                <?php else: ?>
                                    <td></td>
                                <?php endif; ?>
                            <?php elseif($post->post_status == 1): ?>
                                <td>
                                    <a href="<?php if($post->locationid != 0): ?> /<?php echo e($post->sub_domain_name); ?>/manage-ad/<?php echo e($post->post_id); ?> <?php else: ?> /manage-ad/<?php echo e($post->post_id); ?> <?php endif; ?>">ManageAd </a>
                                </td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row m-t-20">
        <div class="col-md-10 col-md-offset-1 text-center">
            <p style="color:#606060;"><?php echo e(count($posts)); ?> Ads found</p>
            <center> <?php echo $posts->render(); ?> </center>
        </div>
    </div>

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

                            <div class="alert alert-success" id="success" style="display: none">
                                <button class="close" data-close="alert"></button>
                                <span style="text-align: center;"></span>
                            </div>

                            <fieldset>
                                <input class="form-control col-md-offset-2" type="password" placeholder="Old Password" id="oldPassword" style="width:70%;"/>
                            </fieldset>
                            <br/>
                            <fieldset>
                                <input class="form-control col-md-offset-2" type="password" placeholder="New Password" id="newPassword" style="width:70%;"/>
                            </fieldset>
                            <br/>
                            <fieldset>
                                <input class="form-control col-md-offset-2" type="password" required="required" placeholder="Confirm Password" id="confirmPassword" style="width:70%;"/>
                            </fieldset>
                            <br/>
                            <fielset>
                                <button class="btn auth__submit" type="button" id="changePassword" style="background-color:#351969;color:#fff;border-radius:0px;">Save</button>
                            </fielset>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="creditTransfer" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(-45deg, #666666, #330066); color: #fff;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Credits Transfer</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-11">
                        <form id="editProfileForm">
                            <table class="table table-responsive table-hover" id="viewTable">
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        Page20 UserId/Email:
                                    </td>
                                    <td colspan="2">
                                        <strong><input type="text" class="form-control" name="userIdOrEmail"
                                                       id="userIdOrEmail" placeholder=""
                                                       required/> </strong>
                                        <span class="small" id="userIdOrEmail_err" style="color:red;"></span>
                                        <span id="page20IdOrEmail"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Credit Amount <i class="fa fa-dollar"></i>:
                                    </td>
                                    <td colspan="2">
                                        <strong><input type="text" class="form-control"
                                                       name="amount"
                                                       id="amount" placeholder=""
                                                       required/></strong>
                                        <span class="small" id="transferFeeMsg" hidden></span>
                                        <span class="small" id="amount_err" style="color:red;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Total Amount:
                                    </td>
                                    <td colspan="2">
                                        <strong><input type="text" class="form-control" name="totalAmount"
                                                       id="totalAmount" placeholder="" disabled
                                                       required/></strong>
                                        <span class="small" id="totalAmount_err" style="color:red;"></span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer" style="background: linear-gradient(-45deg, #330066, #808080); color: #fff;">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" id="transfer" class="btn btn-success">Transfer</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_function'); ?>
    <script src="/assets/user/js/toastr/toastr.js"></script>
    <script type="text/javascript" src="/assets/user/jgrowl/jquery.jgrowl.js"></script>

    <script>
        $(document).ready(function () {

            new check_fund_status();

            function check_fund_status() {
                var status = $.ajax({
                    type: "POST",
                    url: "/check/fund/transfer/status",
                    async: false
                }).success(function () {
                    setTimeout(function () {
                        check_fund_status();
                    }, 5000);
                }).responseText;
                status = status.split(',');

                if(status[0] == 'A'){
                    $('.credit-btn').css('display','block');
                    $('.fundTransferStatus').css('display','none');
                }else if(status[0] == 'I'){
                    alert('Here');
                    if($('#creditTransfer').hasClass('in')){
                        $('.fundTransferStatus').css('display','block');
                        $('.fundTransferStatus').html('<center style="font-size: 20px;">Something went wrong. Fund Transfer is disabled for some time.</center>');
                    }else{
                        $('.fundTransferStatus').css('display','none');
                    }
                    $('.credit-btn').css('display','none');
                    $('#creditTransfer').modal('hide');
                }
                if (status[1] == '') {
                    window.location.href = '/login?session_expired=yes';
                }
            }

            new check_session_status();

            function check_session_status() {
                var status = $.ajax({
                    type: "POST",
                    url: "/check/user/session",
                    async: false
                }).success(function () {
                    setTimeout(function () {
                        check_session_status();
                    }, 5000);
                }).responseText;
                if (status == 'yes') {
                    window.location.href = '/login?session_expired=yes';
                }
            }


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
                            var successMessage = response['successMessage'];
                            $("#success").html(' ' + successMessage + ' ');
                            $("#success").css("display", "block");
                            $("#chabgepwdstatus").html(' ' + successMessage + ' ');
                            $("#chabgepwdstatus").css("display", "block");
                            $('#changepwd').modal('hide');
                        }

                        else if (response['code'] == '400') {
                            var errorMessage = response['errorMessage'];
                            $("#errorMessage").html(' ' + errorMessage + ' ');
                            $("#errorMessage").css("display", "block");
                        }

                        else if (response['code'] == '100') {
                            var errorMessage = response['errorMessage'];
                            $("#errorMessage").html(' ' + errorMessage + ' ');
                            $("#errorMessage").css("display", "block");
                        } else if (response.status == 'session_error') {
                            window.location.href = response.msg;
                        }
                    }
                });
            });
        });
    </script>

    <script>

        $(document).ready(function () {

            toastr.options.positionClass = "toast-top-center";
            toastr.options.preventDuplicates = true;
            toastr.options.closeButton = true;

            $('#userIdOrEmail').change(function () {
                if ($('#userIdOrEmail').val().trim() != '') {


                    $.ajax({

                        url: '/user/checkUserIdOrEmail',
                        dataType: 'json',
                        data: {
                            userIdOrEmail: $('#userIdOrEmail').val()
                        },
                        success: function (response) {
                            if (response['status'] == 200) {
                                $('#userIdOrEmail_err').hide();
                                $('#page20IdOrEmail').show();
                                if (response.field == "email")
                                    $('#page20IdOrEmail').html('<b>Page20 Id:&nbsp;</b>' + response.data['page20id']);
                                else if (response.field == "page20id")
                                    $('#page20IdOrEmail').html('<b>Email: &nbsp;</b>' + response.data['email']);

                            } else if (response['status'] == 400) {
                                $('#userIdOrEmail_err').show();
                                $('#userIdOrEmail_err').html("No any user found with this details");
                                $('#page20IdOrEmail').hide();
                            }

                        }

                    });
                } else {
                    $('#userIdOrEmail_err').hide();
                    $('#page20IdOrEmail').hide();
                }

            });

            $("#amount").keypress(function (e) {
                //if letter is alphabet ,dont type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    if (e.which != 46) {

                        toastr.error('Please enter a valid decimal amount.', {timeOut: 4000});
//                    $(this).focus();
                        return false;
                    }
                }
            });

            var transferCharge = 0;
            $(document.body).on("focus", "#amount", function () {

                $.ajax({
                    url: '/user/getTransferFees',
                    dataType: 'json',
                    success: function (response) {
                        if (response['status'] == 200) {
                            transferCharge = response['transferCharge'];
                            $('#transferFeeMsg').html("convenience transfer fee of " + response['transferCharge'] + " per dollar will be added.");
                            $('#transferFeeMsg').show();
                        }
                    }
                });

            });

            $('#amount').on("keyup", function () {
                console.log(transferCharge);
                var totalAmount = (parseFloat($(this).val()) + parseFloat(transferCharge * $(this).val())).toFixed(2);
                if (totalAmount >= 0)
                    $('#totalAmount').val(totalAmount);
                else
                    $('#totalAmount').val("-");

                $('#amount_err').show();
                $('#totalAmount_err').show();
                $('#amount_err').hide();
                $('#totalAmount_err').hide();
            });

            $(document.body).on("click", "#transfer", function () {

                $.ajax({

                    url: '/user/creditTransfer',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        userIdOrEmail: $('#userIdOrEmail').val(),
                        amount: $('#amount').val(),
                        totalAmount: $('#totalAmount').val()
                    },
                    success: function (response) {
//                    console.log(response.status);

                        if (response['status'] == 201) {
                            console.log(response['error']);
                            $.each(response['error'], function (i, o) {
                                if (i == "userIdOrEmail") {
                                    $('#userIdOrEmail_err').html(o[0]);
                                } else if (i == "amount") {
                                    $('#amount_err').show();
                                    $('#amount_err').html(o[0]);
                                    $('#transferFeeMsg').hide();
                                } else if (i == "totalAmount") {
                                    $('#totalAmount_err').show();
                                    $('#totalAmount_err').html(o[0]);
                                }
                            });
                        } else if (response['status'] == 400) {
                            toastr.error(response.message);

                        } else if (response['status'] == 200) {


                            $('#creditTransfer').modal("toggle");
                            $('#currentCredits').html('$ ' + response['currentCredits']);

                            var userIdOrEmail = $('#userIdOrEmail').val();
                            var totalAmount = $('#totalAmount').val();

                            //reset the modal
                            $('#userIdOrEmail').val("");
                            $('#amount').val("");
                            $('#totalAmount').val("");
                            $('#transferFeeMsg').hide();
                            $('#page20IdOrEmail').hide();

                            toastr.success('$' + response['amount'] + ' has been successfully credited to the ' + userIdOrEmail + ' from your account');
                            $.jGrowl("Credits transferred successfully", {life: 6000});
                            $.jGrowl("Available credits $" + response['currentCredits'], {life: 7000});
                            $.jGrowl('An amount of $' + totalAmount + ' has been debited to your account on ' + new Date(), {
                                closer: false,
                                sticky: true,
                                glue: 'before',
                                speed: 2000,
                                animateOpen: {
                                    height: "show",
                                    width: "show"
                                },
                                animateClose: {
                                    height: "hide",
                                    width: "show"
                                }
                            });
                        }

                    }

                });

            });

        });

        var getNewFundDetails = function () {
            $.ajax({
                url: '/user/getNewTransferDetails',
                type: 'post',
                dataType: 'json',
                success: function (response) {
                    if (response['status'] == 200) {
                        var audio = new Audio('/'+response.audioFile);
                        if(response.creditsSound == 1){
                            // audio = new Audio('/assets/user/sounds/notificationReceived.mp3');
                            audio.play();
                        }


                        // console.log(response.totalAmount);
                        var totalAmount = response.totalAmount;

                        if (totalAmount){
                            $('#currentCredits').text(totalAmount);
                        }

                        $.each(response.data, function (i, o) {
                            // $('#currentCredits').html('$ ' + o.credits);
                            $.jGrowl('An amount of $' + o.credit_amount + ' has been credited to your account by ' + o.sender_email + '\n' + convertUnixTimeToReadableFormat(o.created_at), {
                                closer: false,
                                sticky: true,
                                glue: 'before',
                                speed: 2000,
                                animateOpen: {
                                    height: "show",
                                    width: "show"
                                },
                                animateClose: {
                                    height: "hide",
                                    width: "show"
                                }
                            });
                        });
                    }
                }
            });
        }
        //Saurabh Kumar //Script to convert unix time stamp and to get the time_period_left
        var convertUnixTimeToReadableFormat = function (unixtime) {


            var difference = Math.floor(Date.now() / 1000) - unixtime;

            if (difference < 1)
                return 'just now';

            var readable = {
                'year': 946080000,
                'month': 2592000,
                'day': 86400,
                'hr': 3600,
                'min': 60,
                'sec': 1
            };

            var readable_plural = {
                'year': 'years',
                'month': 'months',
                'day': 'days',
                'hr': 'hrs',
                'min': 'mins',
                'sec': 'secs'
            };

            var finalTime;
            $.each(readable, function (i, o) {

                var res = difference / o;

                if (res >= 1) {
                    var result = Math.round(res);
                    if (result > 1)
                        var time = readable_plural[i];
                    else
                        var time = i;

                    finalTime = result + ' ' + time;
                    return false;
                }

            });

            return finalTime;

        }

        getNewFundDetails();
        setInterval(function () {
            getNewFundDetails()
        }, 30000);





    </script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

<?php $__env->stopSection(); ?>

<?php endif; ?>
<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>