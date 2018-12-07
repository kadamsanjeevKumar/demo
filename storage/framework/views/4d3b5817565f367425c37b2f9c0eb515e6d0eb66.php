<?php $__env->startSection('title'); ?> Page20 view posted Ads <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_settings','active'); ?>
<?php $__env->startSection('post_security','active'); ?>
<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <style>

    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_content'); ?>

    <?php if(Session::has('update_success')): ?>
    <div id="card-alert" class="card green lighten-5 disable_div" style="display:block;">
        <div class="card-content green-text">
            <p id="disable_msg"><?php echo e(Session::get('update_success')); ?></p>
        </div>
        <button type="button" class="close green-text" style="margin-top: -15px;" data-dismiss="alert"
                aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    <?php elseif(Session::has('no_update_made')): ?>
        <div id="card-alert" class="card red lighten-5 disable_div" style="display:block;">
            <div class="card-content red-text">
                <p id="disable_msg"><?php echo e(Session::get('no_update_made')); ?></p>
            </div>
            <button type="button" class="close green-text" style="margin-top: -15px;" data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <?php endif; ?>


    <div class="row">
        <h4>POSTING SECURITIES </h4>
        <br><br>
        <div class="col s8">
            <form class="col s12" action="/admin/post/settings" method="post" id="post_security">

                <div class="left m-l-18" style="margin-left: 0px">
                    <?php /*<div class="input-field col s12">*/ ?>
                        <?php /*<span>User Session</span>*/ ?>
                        <?php /*<span class="right">*/ ?>
                        <?php /*<select id="set_logout_time" name="set_logout_time">*/ ?>
                            <?php /*<option value="1"   <?php if(config('session_timeout.SESSION_TIMEOUT')==60): ?><?php echo e('selected'); ?> <?php endif; ?>>After 1 MIN</option>*/ ?>
                            <?php /*<option value="2" <?php if(config('session_timeout.SESSION_TIMEOUT')==120): ?><?php echo e('selected'); ?> <?php endif; ?>>After 2 MIN</option>*/ ?>
                            <?php /*<option value="5" <?php if(config('session_timeout.SESSION_TIMEOUT')==300): ?><?php echo e('selected'); ?> <?php endif; ?>>After 5 MIN</option>*/ ?>
                            <?php /*<option value="10" <?php if(config('session_timeout.SESSION_TIMEOUT')==600): ?><?php echo e('selected'); ?><?php endif; ?>>After 10 MIN</option>*/ ?>
                            <?php /*<option value="15" <?php if(config('session_timeout.SESSION_TIMEOUT')==900): ?><?php echo e('selected'); ?><?php endif; ?>>After 15 MIN</option>*/ ?>
                            <?php /*<option value="30" <?php if(config('session_timeout.SESSION_TIMEOUT')==1800): ?><?php echo e('selected'); ?><?php endif; ?>>After 30 MIN</option>*/ ?>
                            <?php /*<option value="45" <?php if(config('session_timeout.SESSION_TIMEOUT')==2700): ?><?php echo e('selected'); ?><?php endif; ?>>After 45 MIN</option>*/ ?>
                            <?php /*<option value="60" <?php if(config('session_timeout.SESSION_TIMEOUT')==3600): ?><?php echo e('selected'); ?><?php endif; ?>>After 60 MIN</option>*/ ?>
                            <?php /*<option value="90" <?php if(config('session_timeout.SESSION_TIMEOUT')==5400): ?><?php echo e('selected'); ?><?php endif; ?>>After 90 MIN</option>*/ ?>
                        <?php /*</select>*/ ?>
                        <?php /*<label>Set Users Session Expire Time</label>*/ ?>
                             <?php /*</span>*/ ?>
                    <?php /*</div>*/ ?>
                </div>

                <div class="row">
                    <div class="col s6 input-field">
                        <span>Set User Session Expire Time</span>
                        <span class="">
                        <select id="set_logout_time" name="set_logout_time">
                            <option value="1"   <?php if(config('user_session_timeout.SESSION_TIMEOUT')==60): ?><?php echo e('selected'); ?> <?php endif; ?>>After 1 MIN</option>
                            <option value="2" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==120): ?><?php echo e('selected'); ?> <?php endif; ?>>After 2 MIN</option>
                            <option value="5" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==300): ?><?php echo e('selected'); ?> <?php endif; ?>>After 5 MIN</option>
                            <option value="10" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==600): ?><?php echo e('selected'); ?><?php endif; ?>>After 10 MIN</option>
                            <option value="15" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==900): ?><?php echo e('selected'); ?><?php endif; ?>>After 15 MIN</option>
                            <option value="30" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==1800): ?><?php echo e('selected'); ?><?php endif; ?>>After 30 MIN</option>
                            <option value="45" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==2700): ?><?php echo e('selected'); ?><?php endif; ?>>After 45 MIN</option>
                            <option value="60" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==3600): ?><?php echo e('selected'); ?><?php endif; ?>>After 60 MIN</option>
                            <option value="90" <?php if(config('user_session_timeout.SESSION_TIMEOUT')==5400): ?><?php echo e('selected'); ?><?php endif; ?>>After 90 MIN</option>
                        </select>
                        <?php /*<label>Set Session Expire Time</label>*/ ?>
                               </span>
                    </div>
                </div>

                <br>
            <?php /*<div class="row">*/ ?>
                <?php /*<div class="col s6">*/ ?>
                    <?php /*<span>Guest User can Post</span>*/ ?>
                    <?php /*<span class="switch right">*/ ?>
                <?php /*<label>No*/ ?>
                  <?php /*<input  name="guest_can_post" id="guest_post" type="checkbox"*/ ?>
                  <?php /*<?php if(!empty($data['guest_can_post'])): ?> <?php echo e('checked'); ?> <?php endif; ?>> <span class="lever"></span> Yes</label>*/ ?>
                     <?php /*</span>*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
            <br>

            <div class="row">
                <div class="col s6">
                    <span>Security Parameters</span>
                    <span class="switch right">
                <label>Off
                  <input  name="spam_check" id="post_status" type="checkbox"
                  <?php if(!empty($data['spam_check'])): ?> <?php echo e('checked'); ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
                </div>
            </div>
            <br>


            <div id="post_rules" <?php if(empty($data['spam_check'])): ?> <?php echo e('hidden'); ?> <?php endif; ?>>
                <h5 class="light">Filter</h5>
                <div class="row">
                        <div class="row">
                            <div class="input-field col s4" style="margin-top: 2rem;">Time between posts</div>
                            <div class="input-field col s2">
                                <input type="text" name="min_between_post" id="minut" value="<?php echo e(($m=old('min_between_post'))?$m: $data['min_between_post']); ?>">
                                <span style="color:red"> <?php echo e($errors->first('min_between_post')); ?></span>
                                <label for="minut" class="">Minutes</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" name="hr_between_post" id="hrs" value="<?php echo e(($m=old('hr_between_post'))?$m: $data['hr_between_post']); ?>">
                                <span style="color:red"> <?php echo e($errors->first('hr_between_post')); ?></span>
                                <label for="hrs" class="">Hrs</label>
                            </div>
                            <div class="input-field col s2">
                                <input type="text" name="day_between_post" id="day" value="<?php echo e(($m=old('day_between_post'))?$m: $data['day_between_post']); ?>">
                                <span style="color:red"> <?php echo e($errors->first('day_between_post')); ?></span>
                                <label for="day" class="">Days</label>

                            </div>


                        </div>
                        <div class="row">
                            <div class="input-field col s4" style="margin-top: 2rem;">Maximum posts per day</div>
                            <div class="input-field col s4">
                                <input type="text" name="max_post_per_day" id="post_per_day" value="<?php echo e(($m=old('max_post_per_day'))?$m: $data['max_post_per_day']); ?>">
                                <span style="color:red"> <?php echo e($errors->first('max_post_per_day')); ?></span>
                                <label for="post_per_day" class="">Type post per day</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4" style="margin-top: 2rem;">Exact same post check</div>
                            <div class="col s4" style="margin-top: 1rem;">
                                <p>
                                    <input type="checkbox" name="check_same_post" id="check" <?php if(!empty($data['check_same_post'])): ?> <?php echo e('checked'); ?> <?php endif; ?> />
                                    <label for="check">allowed if unchecked</label>
                                </p>
                            </div>
                        </div>
                        <br>

                </div>
            </div>
                <input id="posting_rules" class="btn" type="submit" style="margin-left: 225px"  value="Save Settings">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
    <script src="/assets/admin/toastr.js"></script>
    <script>




        function changeStatuspost(type) {
            if (type) {
                var idObj = $('#change_status');
                var status;
                if (idObj.prop("checked") == true) {
                    status = '1';
                } else {
                    status = '0';
                }
                $.ajax({
                    url: '/admin/change_bot_status',
                    data: {
                        status: status
                    },
                    type: 'post',
                    datatype: 'json',
                    success: function (response) {
                        response = $.parseJSON(response);
                        $('.disable_div').css('display', 'block');
                        $('#disable_msg').html(response['message']);
                    }
                });
            }
        }

        function addCredntials() {
            $.ajax({
                url: '/admin/botCredentials',
                data: {
                    username: $('#user_name').val(),
                    password: $('#password').val()
                },
                type: 'post',
                datatype: 'json',
                success: function (response) {
                    response = $.parseJSON(response);
                    $('.disable_div').css('display', 'block');
                    $('#disable_msg').html(response['message']);
                }
            });
        }

        $(document).ready(function () {
            $('#sendBotEmail').click(function () {
                $.ajax({
                    "url": "/admin/bot/forget/password/email",
                    "type": "POST",
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 4000, 'green');
                        }
                        else if (data.status == 'error') {
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 4000, 'red');
                        }
                    }
                });
            });
            $('.bump_post').click(function () {
                $.ajax({
                    "url": "/admin/bump/backpage/post",
                    "type": "POST",
                    dataType: 'json',
                    success: function (data) {
                        if (data.status == 'success') {
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 4000, 'green');
                        }
                        else if (data.status == 'error') {
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 4000, 'red');
                        }
                    }
                });
            });

            $('#post_status').click(function(){
                if ( $('#post_status').prop("checked") == true) {
                    $('#post_rules').show();
                    console.log('status 1');
                    status = '1';
                } else {
                    $('#post_rules').hide()
                    console.log('status 2');
                    status = '0';
                }

            });
        });

        <?php if(!empty($data->bot_pwd_changed)): ?>
        Materialize.toast('<span><b><?php echo e($data->bot_pwd_changed); ?></b></span>', 4000, 'green rounded');
        <?php endif; ?>
        <?php if($errors->first('pwd_changed')): ?>
        Materialize.toast('<span><b><?php echo e($errors->first('pwd_changed')); ?></b></span>', 4000, 'green rounded');
        <?php endif; ?>
        <?php if($errors->first('pwd_change_failed')): ?>
        Materialize.toast('<span><b><?php echo e($errors->first('pwd_change_failed')); ?></b></span>', 4000, 'red rounded');
        <?php endif; ?>

    </script>

    <script>

        $(document).ready(function(){
            $(document.body).on('change','#set_logout_time',function(event){
                var time=$(this).val();
                $.ajax({
                    "url": "/admin/update/session/out/time",
                    "type": "POST",
                    dataType: 'json',
                    data:{time:time,isUser:1},
                    success: function (data) {
                        if (data.status == 'success') {
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000,'green');
                        }
                        else if (data.status == 'error') {
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000,'red');
                        }
                    }
                });
            });
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>