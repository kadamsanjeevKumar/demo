<?php
$id = '';
if(!empty(Session::get('pc_admin')) && empty(Session::get('pc_user'))){
    if(empty(Session::get('package_details'))){
    $data = [];
    $data[0] = Session::get('pc_admin')->id;
    $data[1] = Session::get('pc_admin')->email;
    Session::put('package_details',$data);
    $id = Session::get('pc_admin')->id;
        }else{
        $id = Session::get('pc_admin')->id;
    }
}else{
    Session::forget('package_details');
}
?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('User::layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel='shortcut icon' type='image/x-icon' href='/assets/user/images/favicon.ico' />
    <?php echo $__env->yieldContent('style'); ?>
</head>
<body>
<?php include_once(public_path()."/analyticstracking.php"); ?>
<input type="hidden" id="adminid" <?php if(!empty($id)): ?> value="<?php echo e($id); ?>" <?php else: ?> value="" <?php endif; ?> >
<header>
    <?php echo $__env->make('User::layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('User::layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div style=" background: #A386D7; padding:40px 8%;color: #fff;" class="row collapse" id="collapseExample">
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdownvisitor" id="onlinevisitors">0</h3>Online Visitors

            <a href="#" class="btn" style="background: #533687; padding: 5px 5px 1px 5px !important;"  data-toggle="modal" data-target="#counter_detail">
                <i style="font-size: 20px; color: #fff;" class="material-icons dp48">timeline</i>
            </a>

        </div>
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdowntotal" id="totalAds">0</h3>Total Ads Posted</div>
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdowntotaladweek" id="totalAdsWeek">0</h3>Ads Posted this Week</div>
        <div class="col-md-3 col-sm-12 text-center zoom"><h3 style="margin-top: 0;" class="countdownregistered" id="regUsers">0</h3>Registered Users</div>
    </div>

    <div class="alert alert-info message1" style="display: none;">
        <?php /*<strong style="margin-left: 12%;"> We are testing and upgrading, website is in test mode please be patient with us we want to get it right, If you have any concerns please express them</strong>*/ ?>
        <strong style="margin-left: 12%;" class="message"> </strong>
    </div>
</header>
<!-- Count Down22 Modal-->
<div class="modal fade modals_extraspace" id="draggable" data-backdrop="false" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9 pad15">
                        <h4 style="margin: 0; text-align: center;">Scheduled Maintenance</h4>
                        <p class="justify">Page20.com will go on a mainte - nance mode for Upgradations!
                            Please complete all activities till we shutdown...</p>
                    </div>
                    <div class="col-md-3 timerbg">
                        <div id="clockdiv">
                            <div>
                                <span class="minutes">00</span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div>
                                <span class="seconds">00</span>
                                <div class="smalltext">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('User::layouts.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('User::layouts.foter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('script_function'); ?>
</body>
</html>

