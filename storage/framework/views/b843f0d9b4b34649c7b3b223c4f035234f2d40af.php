<?php $__env->startSection('title'); ?> Page20 PIN VERIFY <?php $__env->stopSection(); ?>
<?php /*<?php $__env->startSection('manage_transactions','active'); ?>*/ ?>
<?php /*<?php $__env->startSection('transactions','active'); ?>*/ ?>
<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <link href="/assets/admin/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <style>
        .dataTables_length > label > select {
            display: block !important;
            color: black !important;
        }

        .dataTables_length > label {
            color: black !important;
            font-size: 1.0rem !important;
        }

        .dataTables_filter > label {
            color: black !important;
            font-size: 1.0rem !important;
        }

        tbody > tr {
            font-size: 13px;
            color: black !important;
            /*font-weight: bold;*/
        }

        select {
            height: 2rem !important;
        }

        .close {
            padding: 10px 18px;
            background: #eee;
            color: #351969;
            border-radius: 40px;
            float: right;
            font-family: sans-serif
        }

        .close:hover {
            padding: 10px 18px;
            background: #351969;
            color: #fff;
            border-radius: 40px;
            float: right;
            font-family: sans-serif
        }

        .title_adjust{
            margin-bottom:35px;
            float:left;
            margin-right:5px;
        }

        @media (min-width: 320px) and (max-width: 640px) {
            .title_adjust{
                margin-bottom:35px;
                float:left;
                margin-right:-7px !important;
            }

        }

        .address {
            max-width : 50px;
            white-space : nowrap;
            overflow : hidden;
        }

        /*.address:hover {*/
            /*max-width : initial;*/
        /*}*/

        /*table {*/
        /*table-layout: fixed;*/
        /*}*/

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div id="card-alert" style="display: none;" class="card green lighten-5 warning_class">
        <div class="card-content green-text">
            <p id="warning_msg"></p>
        </div>
        <button type="button" class="close green-text" style="margin-top: -16px;" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <div id="card-alert" class="card green lighten-5">
        <?php if(Session::has('sucessMessage')): ?>
            <div class="card-content green-text">
                <p><?php echo e(Session::get('sucessMessage')); ?></p>
            </div>
        <?php endif; ?>
        <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div id="card-alert" class="card red lighten-5">
        <?php if(Session::has('error')): ?>
            <div class="card-content red-text">
                <p><?php echo e(Session::get('error')); ?></p>
            </div>
        <?php endif; ?>
        <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <?php if(count($errors)>0): ?>
        <div id="card-alert" class="card red lighten-5">
            <div class="card-content red-text">

                <?php foreach($errors->all() as $error): ?>
                    <p><?php echo e($error); ?></p>
                <?php endforeach; ?>
            </div>
            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col s11 m11 l11" style="margin-left:20px;">

            <form action="" id="pin_form">
            <h4>You'll need to verify your IDENTITY</h4><br>
            <p> For security reason, this information is Required</p>
            <br>
            <div class="row" style="background:#f0f0f0;">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pin" type="password" class="validate">
                            <label for="pin">Enter PIN to bypass</label>
                            <span id="pin_error" style="display: none;color: red;"></span>
                        </div>
                    </div>
                    <p><a href="#!" id="forgot_pin">Forgot PIN?</a></p>
                </form>
            </div>
            <br><br><br>
            <a href="/admin/dash/board" class="modal-action waves-effect waves-green btn-flat">Cancel</a>
                <button type="submit"  form="pin_form" class="modal-action waves-effect waves-default btn-flat" id="check_pin">Confirm</button>
            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>
    <script src="/assets/admin/toastr.js"></script>
    <script src="/assets/admin/loadingoverlay.js"></script>
    <script src="/assets/admin/loadingoverlay.min.js"></script>

    <script>
        $(document).ready(function () {

            $('#forgot_pin').click(function () {
//                $('#change_security_pin').openModal({dismissible:false});

                $.ajax({
                    "url": "/admin/send/email/forgot/pin",
                    "type": "POST",
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            $('#pin_error').css('display', 'none');
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
//                            $('#pinModal').closeModal();
                        }
                        else if (data.status == 'error') {
                            $('#pin_error').css('display', 'block').html(data.msg);
                        }
                    }
                });
            });

//            $('.lean-overlay').css('display','none');

            <?php /*$('#check_pin111111').click(function () {*/ ?>
                <?php /*var pin = $('#pin').val().trim();*/ ?>
                <?php /*if (pin == "") {*/ ?>
                    <?php /*$('#pin_error').css('display', 'block').html('Please enter your pin');*/ ?>
                <?php /*} else {*/ ?>
                    <?php /*$.ajax({*/ ?>
                        <?php /*type: "POST",*/ ?>
                        <?php /*url: '/admin/check/secret/pin',*/ ?>
                        <?php /*dataType: 'json',*/ ?>
                        <?php /*data: {pin: pin},*/ ?>
                        <?php /*success: function (data) {*/ ?>
                            <?php /*if (data.status == 'success') {*/ ?>
                                <?php /*$('#pin_error').css('display', 'none');*/ ?>
                                <?php /*Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);*/ ?>
                                <?php /*window.open('<?php echo e(Session::pull('pre_url')); ?>','_self')*/ ?>

                            <?php /*}*/ ?>
                            <?php /*else if (data.status == 'error') {*/ ?>
                                <?php /*$('#pin_error').css('display', 'block').html(data.msg + '<br>' + data.count);*/ ?>

                            <?php /*} else if (data.status == 'warning') {*/ ?>
                                <?php /*window.location.href = '/admin/log/out';*/ ?>
                                <?php /*$('#pin_error').css('display', 'block').html(data.msg);*/ ?>
<?php /*//                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);*/ ?>
                            <?php /*}*/ ?>
                        <?php /*}*/ ?>
                    <?php /*});*/ ?>
                <?php /*}*/ ?>

            <?php /*});*/ ?>

            $('#pin_form').submit(function(e){
                e.preventDefault();
                var pin = $('#pin').val().trim();
                if (pin == "") {
                    $('#pin_error').css('display', 'block').html('Please enter your pin');
                } else {
                    $.ajax({
                        type: "POST",
                        url: '/admin/check/secret/pin',
                        dataType: 'json',
                        data: {pin: pin},
                        success: function (data) {
                            if (data.status == 'success') {
                                $('#pin_error').css('display', 'none');
                                Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                                window.open('<?php echo e(Session::pull('pre_url')); ?>','_self')

                            }
                            else if (data.status == 'error') {
                                $('#pin_error').css('display', 'block').html(data.msg + '<br>' + data.count);

                            } else if (data.status == 'warning') {
                                window.location.href = '/admin/log/out';
                                $('#pin_error').css('display', 'block').html(data.msg);
//                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                            }
                        }
                    });
                }

            });
        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>