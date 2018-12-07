<?php $__env->startSection('title'); ?> Page20 Logs Details <?php $__env->stopSection(); ?>
<?php $__env->startSection('logs','active'); ?>
<?php $__env->startSection('page_head_content'); ?>
    <style>
        .indicator {
            background-color: #351969 !important;
        }

        a:hover {
            color: #351969 !important;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <p id="page_name" hidden data-name="logs_count"></p>
    <div class="row">
        <h4>LOGS DETAILS</h4>
        <br><br>
        <div class="col s12">
            <div class="row">
                <div class="col s12" style="background:#fff; border-bottom:1px dashed #cccc;">
                    <ul class="tabs">
                        <?php /*<li class="tab col s3"><a href="#user">User</a></li>*/ ?>
                        <li class="tab col s3"><a href="#admin">Admin</a></li>
                        <?php /*<li class="tab col s3"><a href="#staff">Staff</a></li>*/ ?>
                        <?php /*<li class="tab col s3"><a href="#intern">Intern</a></li>*/ ?>
                    </ul>
                </div>
                <div class="col s12" style="background:#fff; padding:20px;">
                    <?php /*<div id="user" class="col s12">*/ ?>
                        <?php /*<table>*/ ?>
                            <?php /*<thead>*/ ?>
                            <?php /*<tr>*/ ?>
                                <?php /*<th>Name</th>*/ ?>
                                <?php /*<th>Email</th>*/ ?>
                                <?php /*<th>Activity</th>*/ ?>
                                <?php /*<th>Time</th>*/ ?>
                                <?php /*<th class="center-align">Detail</th>*/ ?>
                            <?php /*</tr>*/ ?>
                            <?php /*</thead>*/ ?>
                            <?php /*<tbody id="activity_users">*/ ?>
                           <?php /*<?php if(!empty($users['users'])): ?>*/ ?>
                               <?php /*<?php foreach($users['users'] as $user): ?>*/ ?>
                            <?php /*<tr>*/ ?>
                                <?php /*<td><?php echo e($user->firstname); ?></td>*/ ?>
                                <?php /*<td><?php echo e($user->email); ?></td>*/ ?>
                                <?php /*<td><?php echo e($user->activity); ?></td>*/ ?>
                                <?php /*<td><?php echo e($user->online_user); ?></td>*/ ?>
                                <?php /*<td class="center-align"><a data-id="<?php echo e($user->email); ?>" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td>*/ ?>
                            <?php /*</tr>*/ ?>
                            <?php /*<?php endforeach; ?>*/ ?>
                            <?php /*<?php endif; ?>*/ ?>
                           <?php /*<?php if(!empty($users['usersNot'])): ?>*/ ?>
                               <?php /*<?php foreach($users['usersNot'] as $user): ?>*/ ?>
                                   <?php /*<tr>*/ ?>
                                       <?php /*<td><?php echo e($user->firstname); ?></td>*/ ?>
                                       <?php /*<td><?php echo e($user->email); ?></td>*/ ?>
                                       <?php /*<td><?php echo e($user->activity); ?></td>*/ ?>
                                       <?php /*<td><?php echo e($user->online_user); ?></td>*/ ?>
                                       <?php /*<td class="center-align"><a data-id="<?php echo e($user->email); ?>" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td>*/ ?>
                                   <?php /*</tr>*/ ?>
                               <?php /*<?php endforeach; ?>*/ ?>
                           <?php /*<?php endif; ?>*/ ?>
                            <?php /*</tbody>*/ ?>
                        <?php /*</table>*/ ?>
                    <?php /*</div>*/ ?>
                    <div id="admin" class="col s12">

                        <table>
                            <thead>
                            <tr>
                                <th>Activity Section</th>
                                <th>Action</th>
                                <th>IP</th>
                                <th>short info</th>
                                <th>Activity Time</th>
                                <th class="center-align">Detail</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php if(!empty($admin)): ?>
                                <?php foreach($admin as $value): ?>
                                    <?php /*<?php echo e(dd($value->ip)); ?>*/ ?>
                                    <tr>
                                        <td><?php echo e($value->section); ?></td>
                                        <td><?php echo e($value->action); ?></td>
                                        <?php /*<td><?php echo e($value->ip); ?></td>*/ ?>
                                        <td><?php echo e(json_decode($value->ip,true)['ip']); ?> , <?php echo e(json_decode($value->ip,true)['city']); ?> , <?php echo e(json_decode($value->ip,true)['country']); ?></td>
                                        <td><?php echo e($value->short_info); ?></td>
                                        <td><?php echo e($value->created_at); ?></td>
                                        <?php if(!empty($value->action_type) && $value->action_type==1): ?>
                                            <td class="center-align"><a data-info="<?php echo e($value->long_info); ?>" data-time="<?php echo e($value->created_at); ?>"
                                                                        class="delete_post" href="javascript:;">
                                                    <?php if(str_replace('"','',$value->long_info)!=="NA"): ?>
                                                    <i class="material-icons dp48">format_list_bulleted</i></a>
                                                    <?php endif; ?>
                                            </td>
                                        <?php elseif(!empty($value->action_type) && $value->action_type==6): ?>
                                            <td class="center-align"><a data-info="<?php echo e($value->long_info); ?>" data-time="<?php echo e($value->created_at); ?>"
                                                                        class="show_location" href="javascript:;">
                                                    <i class="material-icons dp48">format_list_bulleted</i></a>
                                            </td>
                                        <?php elseif(!empty($value->action_type) && $value->action_type==7): ?>
                                            <td class="center-align"><a data-info="<?php echo e($value->long_info); ?>" data-time="<?php echo e($value->created_at); ?>"
                                                                        class="show_location_data" href="javascript:;">
                                                    <i class="material-icons dp48">format_list_bulleted</i></a>
                                            </td>
                                        <?php elseif(!empty($value->action_type) && $value->action_type==8): ?>
                                            <td class="center-align"><a data-info="<?php echo e($value->long_info); ?>" data-time="<?php echo e($value->created_at); ?>"
                                                                        class="add_cat_data" href="javascript:;">
                                                    <i class="material-icons dp48">format_list_bulleted</i></a>
                                            </td>
                                        <?php else: ?>
                                            <td class="center-align"><a data-id="<?php echo e($value->long_info); ?>"
                                                                        class="admin_activity" href="javascript:;">
                                                    <?php if(str_replace('"','',$value->long_info)!=="NA"): ?>
                                                    <i class="material-icons dp48">format_list_bulleted</i></a>
                                                <?php endif; ?>
                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <td valign="top" colspan="9" class="dataTables_empty">No data available in table</td>
                            <?php endif; ?>

                            </tbody>

                        </table>

                    </div>
                    <div id="staff" class="col s12">

                        <?php /*<table>*/ ?>
                            <?php /*<thead>*/ ?>
                            <?php /*<tr>*/ ?>
                                <?php /*<th>Name</th>*/ ?>
                                <?php /*<th>Email</th>*/ ?>
                                <?php /*<th>Activity</th>*/ ?>
                                <?php /*<th>Time</th>*/ ?>
                                <?php /*<th class="center-align">Detail</th>*/ ?>
                            <?php /*</tr>*/ ?>
                            <?php /*</thead>*/ ?>

                            <?php /*<tbody id="activity_staff">*/ ?>
                            <?php /*<?php if(!empty($staffs['staffs'])): ?>*/ ?>
                                <?php /*<?php foreach($staffs['staffs'] as $user): ?>*/ ?>
                                    <?php /*<tr>*/ ?>
                                        <?php /*<td><?php echo e($user->firstname); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->email); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->activity); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->online_user); ?></td>*/ ?>
                                        <?php /*<td class="center-align"><a data-id="<?php echo e($user->email); ?>" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td>*/ ?>
                                    <?php /*</tr>*/ ?>
                                <?php /*<?php endforeach; ?>*/ ?>
                            <?php /*<?php endif; ?>*/ ?>
                            <?php /*<?php if(!empty($staffs['staffsNot'])): ?>*/ ?>
                                <?php /*<?php foreach($staffs['staffsNot'] as $user): ?>*/ ?>
                                    <?php /*<tr>*/ ?>
                                        <?php /*<td><?php echo e($user->firstname); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->email); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->activity); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->online_user); ?></td>*/ ?>
                                        <?php /*<td class="center-align"><a data-id="<?php echo e($user->email); ?>" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td>*/ ?>
                                    <?php /*</tr>*/ ?>
                                <?php /*<?php endforeach; ?>*/ ?>
                            <?php /*<?php endif; ?>*/ ?>
                            <?php /*</tbody>*/ ?>
                        <?php /*</table>*/ ?>

                    </div>
                    <div id="intern" class="col s12">

                        <?php /*<table>*/ ?>
                            <?php /*<thead>*/ ?>
                            <?php /*<tr>*/ ?>
                                <?php /*<th>Name</th>*/ ?>
                                <?php /*<th>Email</th>*/ ?>
                                <?php /*<th>Activity</th>*/ ?>
                                <?php /*<th>Time</th>*/ ?>
                                <?php /*<th class="center-align">Detail</th>*/ ?>
                            <?php /*</tr>*/ ?>
                            <?php /*</thead>*/ ?>

                            <?php /*<tbody id="activity_interns">*/ ?>
                            <?php /*<?php if(!empty($interns['interns'])): ?>*/ ?>
                                <?php /*<?php foreach($interns['interns'] as $user): ?>*/ ?>
                                    <?php /*<tr>*/ ?>
                                        <?php /*<td><?php echo e($user->firstname); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->email); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->activity); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->online_user); ?></td>*/ ?>
                                        <?php /*<td class="center-align"><a data-id="<?php echo e($user->email); ?>" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td>*/ ?>
                                    <?php /*</tr>*/ ?>
                                <?php /*<?php endforeach; ?>*/ ?>
                            <?php /*<?php endif; ?>*/ ?>
                            <?php /*<?php if(!empty($interns['internsNot'])): ?>*/ ?>
                                <?php /*<?php foreach($interns['internsNot'] as $user): ?>*/ ?>
                                    <?php /*<tr>*/ ?>
                                        <?php /*<td><?php echo e($user->firstname); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->email); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->activity); ?></td>*/ ?>
                                        <?php /*<td><?php echo e($user->online_user); ?></td>*/ ?>
                                        <?php /*<td class="center-align"><a data-id="<?php echo e($user->email); ?>" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td>*/ ?>
                                    <?php /*</tr>*/ ?>
                                <?php /*<?php endforeach; ?>*/ ?>
                            <?php /*<?php endif; ?>*/ ?>
                            <?php /*</tbody>*/ ?>
                        <?php /*</table>*/ ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Details -->
    <div id="detail" class="modal">
        <div class="modal-content">
            <h4>Logs Details</h4>
            <h5 class="logs_email"></h5>
            <p class="activity_details"></p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Back</a>
        </div>
    </div>
    <!-- Modal Details -->
    <div id="deleted_posts" class="modal">
        <div class="modal-content">
            <p id="post_details"></p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>

<script>

    $(document).ready(function(){
        updateSeenStatus('admin_logs');
        $('li.tab').on('click', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(localStorage.getItem('activeTab')){
            $('.tabs a[href="' + activeTab + '"]').click();
        }
    });

    $(document).ready(function () {
        setTimeout(function(){
            getOnlineUsers(2);
        },10000);

        setTimeout(function(){
            getOnlineStaff(2);
        },10000);

        setTimeout(function(){
            getOnlineInterns(2);
        },10000);

        $(document.body).on('click','.activity_modal',function(){
            var email = $(this).attr('data-id');
            $.ajax({
                url: "/admin/activity/list",
                method: 'POST',
                dataType: 'json',
                data:{email:email},
                success: function (result) {
                    var appendData = '';
                    if (result.status == 200) {
                        if(result.user){
                                appendData = '<b>Login : '+result.user.login+'<br> Logout: '+result.user.logout +'</b>';
                        }
                        $('.activity_details').html(appendData);
                        $('.logs_email').html('Activity: '+result.user.email);
                        $('#detail').openModal();
                    }
                }
            });
        });
        $(document.body).on('click', '.admin_activity', function () {
            var data = JSON.parse($(this).attr('data-id'));
            if (typeof  data.id !== 'undefined' && data.id !== 'null') {
                window.open('/admin/view/user/profile/' + data.id);
            } else if (typeof  data.post_id !== 'undefined' && data.post_id !== 'null') {
                window.open('/admin/edit/posted/ads/' + data.post_id);
            }else if (typeof  data.promo_id !== 'undefined' && data.promo_id !== 'null') {
                window.open('/admin/edit/promotion/code/' + data.promo_id);
            } else {
                alert('no details availavle.');
            }

        });
        $(document.body).on('click', '.delete_post', function () {
            var data = JSON.parse($(this).attr('data-info'));
            var time = $(this).attr('data-time');
            $('#post_details').html('');

            appendData = '   <h4>Deleted Posts Details</h4>';
            appendData += '<h5>Deleted Post Count :'+data.length+'</h5>';
            appendData += '<h5>Deletion Timings :'+time+'</h5>';
            appendData+= '<h5>Post Titles :</h5>';
            $.each(data, function (k, v) {
                appendData += '<li><b>' + v + '</b></li>';
            });
            console.log(appendData);
            $('#post_details').html(appendData);
            $('#deleted_posts').openModal();

        });

        $(document.body).on('click', '.show_location', function () {
            var data = JSON.parse($(this).attr('data-info'));
            console.log('data',JSON.stringify(data));


            var time = $(this).attr('data-time');
            $('#post_details').html('');
            appendData = '<h4>Added Location Details</h4>';
            appendData += '<h5>Time :'+time+'</h5>';
            appendData += '<h5>Country :'+data.country_name+'</h5>';

            var init = JSON.stringify(data.state_city_data);
            var temp = init.split('stateName');
            temp.splice(0,1);
            for(var j=0;j<temp.length;j++){
                var data = temp[j].split('cityName');
                var state = data[0].substring(data[0].indexOf('":"')+3,data[0].length-3);
                appendData+= '<h5>State :'+state+'</h5>';
                appendData+= '<h6>Added cities</h6>';
                var city = [];
                for(var i=1;i<data.length;i++){
                    city=data[i].substring(data[i].indexOf('":"')+3,data[i].length-2).replace(/"/g,'');
                    appendData += '<a style="margin-right:5px;margin-top:5px;" class="btn disabled">'+city+'</a>';
                }
            }
            $('#post_details').html(appendData);
            $('#deleted_posts').openModal();

        });
        $(document.body).on('click', '.show_location_data', function () {
            var data = JSON.parse($(this).attr('data-info'));
            var time = $(this).attr('data-time');
            $('#post_details').html('');
            appendData = '<h4>Added Location Details</h4>';
            appendData += '<h5>Time :'+time+'</h5>';
            appendData += '<h5>Country :'+data.country_name+'</h5>';
            appendData+= '<h5>State :'+data.state_name+'</h5>';
            appendData+= '<h6>Added cities</h6>';

            $.each(data.city,function(k,v){
                appendData += '<a style="margin-right:5px;margin-top:5px;" class="btn disabled">'+v+'</a>';
            });
            $('#post_details').html(appendData);
            $('#deleted_posts').openModal();

        });
        $(document.body).on('click', '.add_cat_data', function () {
            var data = JSON.parse($(this).attr('data-info'));
            var time = $(this).attr('data-time');
            $('#post_details').html('');

            appendData = '<h4>Added Categories Details</h4>';
            appendData += '<h5>Time :'+time+'</h5>';
            appendData += '<h5>Main Category :'+data.category_name+'</h5>';
            appendData+= '<h6>Added subcategory</h6>';

            $.each(data.subcategory_name,function(k,v){
                appendData += '<a style="margin-right:5px;margin-top:5px;" class="btn disabled">'+v+'</a>';
            });
            appendData+= '<h6>Disclaimer Choosen</h6>';
            console.log('data',typeof data.disclaimer_req);
            $.each(JSON.parse(data.disclaimer_req),function(k,v){
                appendData += '<a style="margin-right:5px;margin-top:5px;" class="btn disabled">'+k+'</a>';
            });
            $('#post_details').html(appendData);
            $('#deleted_posts').openModal();
        });

    });

    i=0;
    j=0;
    k=0;

    function getOnlineUsers(val){
        var status = 'true';
        if(val == 1){
            if(i == 0){status = 'true';}else{status = 'false';}
        }else if(val == 2){status = 'true';}
        if(status == 'true') {
            $.ajax({
                url: "/admin/activity/users/list",
                method: 'POST',
                datatype: 'json',
                success: function (result) {
                    result = $.parseJSON(result);
                    var appendData = '';
                    if (result.status == 200) {
                        if(result.user['users']){
                            $(result.user['users']).each(function (ind, val) {
                                appendData += '<tr><td>'+val.firstname+'</td><td>'+val.email+'</td><td>'+val.activity+'</td><td>'+val.online_user+'</td><td class="center-align"><a data-id="'+val.email+'" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td></tr>';
                            });
                        }
                        if(result.user['usersNot']) {
                            $(result.user['usersNot']).each(function (ind, val) {
                                appendData += '<tr><td>' + val.firstname + '</td><td>' + val.email + '</td><td>' + val.activity + '</td><td>' + val.online_user +
                                        '</td><td class="center-align"><a data-id="'+val.email+'" href="#!" class="activity_modal"><i class="material-icons dp48">format_list_bulleted</i></a>' +
                                        '</td></tr>';
                            });
                        }
                        $('#activity_users').html(appendData);
                        setTimeout(function(){
                            getOnlineUsers(2);
                        },10000);
                    }
                }
            });
            i= 1;
        }
    }

    function getOnlineStaff(val){
        var status = 'true';
        if(val == 1){
            if(j == 0){status = 'true';}else{status = 'false';}
        }else if(val == 2){status = 'true';}
        if(status == 'true') {
            $.ajax({
                url: "/admin/activity/staff/list",
                method: 'POST',
                datatype: 'json',
                success: function (result) {
                    result = $.parseJSON(result);
                    var appendData = '';
                    if (result.status == 200) {
                        if(result.user['staffs']){
                            $(result.user['staffs']).each(function (ind, val) {
                                appendData += '<tr><td>'+val.firstname+'</td><td>'+val.email+'</td><td>'+val.activity+'</td><td>'+val.online_user+'</td><td class="center-align"><a data-id="'+val.email+'" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td></tr>';
                            });
                        }
                        if(result.user['staffsNot']) {
                            $(result.user['staffsNot']).each(function (ind, val) {
                                appendData += '<tr><td>' + val.firstname + '</td><td>' + val.email + '</td><td>' + val.activity + '</td><td>' + val.online_user +
                                        '</td><td class="center-align"><a data-id="'+val.email+'" href="#!" class="activity_modal"><i class="material-icons dp48">format_list_bulleted</i></a>' +
                                        '</td></tr>';
                            });
                        }
                        $('#activity_staff').html(appendData);
                        setTimeout(function(){
                            getOnlineStaff(2);
                        },10000);
                    }
                }
            });
            j= 1;
        }
    }

    function getOnlineInterns(val){
        var status = 'true';
        if(val == 1){
            if(k == 0){status = 'true';}else{status = 'false';}
        }else if(val == 2){status = 'true';}
        if(status == 'true') {
            $.ajax({
                url: "/admin/activity/interns/list",
                method: 'POST',
                datatype: 'json',
                success: function (result) {
                    result = $.parseJSON(result);
                    var appendData = '';
                    if (result.status == 200) {
                        if(result.user['interns']){
                            $(result.user['interns']).each(function (ind, val) {
                                appendData += '<tr><td>'+val.firstname+'</td><td>'+val.email+'</td><td>'+val.activity+'</td><td>'+val.online_user+'</td><td class="center-align"><a data-id="'+val.email+'" class="activity_modal" href="#!"><i class="material-icons dp48">format_list_bulleted</i></a></td></tr>';
                            });
                        }
                        if(result.user['internsNot']) {
                            $(result.user['internsNot']).each(function (ind, val) {
                                appendData += '<tr><td>' + val.firstname + '</td><td>' + val.email + '</td><td>' + val.activity + '</td><td>' + val.online_user +
                                        '</td><td class="center-align"><a data-id="'+val.email+'" href="#!" class="activity_modal"><i class="material-icons dp48">format_list_bulleted</i></a>' +
                                        '</td></tr>';
                            });
                        }
                        $('#activity_interns').html(appendData);
                        setTimeout(function(){
                            getOnlineInterns(2);
                        },10000);
                    }
                }
            });
            k= 1;
        }
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>