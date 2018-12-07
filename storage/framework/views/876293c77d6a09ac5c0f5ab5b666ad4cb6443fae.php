<?php $__env->startSection('title'); ?> Page20 Contact us <?php $__env->stopSection(); ?>
<?php $__env->startSection('contacts','active'); ?>
<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <link href="/assets/admin/css/jquery.dataTables.min.css" rel="stylesheet"/>

    <style>
        .truncate {
            width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

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

        .user_img {
            border-radius: 100px;
            height: 60px;
            width: 60px;
        }

        @media (min-width: 768px) and (max-width: 980px) {
            .modal.modal-fixed-footer {
                height: 57% !important;
                top: 5% !important;
            }
        }

        .modal.modal-fixed-footer {
            height: 94%;
            top: 5% !important;
        }

        .modal {
            max-height: 100% !important;
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

        @media (min-width: 320px) and (max-width: 640px) {
            .title_adjust{
                margin-top: 14px !important;
            }

            .email_adjust{
                font-size: 12px !important;
            }
        }


    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <p id="page_name" hidden data-name="contacts_count"></p>
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
        <div style="margin-left:0px !important;">
            <div class="col s11 m12 l12">
                <div class="col m12 l12" style="background:#F9F9F9;position: sticky; padding:15px 10px; top:64px; z-index: 99">
                <h5 style="margin-bottom:15px; float: left;">CONTACT US</h5>
                <a id="delete_all" title="Delete user queries" style="cursor: pointer; margin: 4px 0px 0px 20px;background:#cc3e3e;" class="waves-effect waves-light btn">
                    <i class="material-icons dp48" style="color:#fff;">delete</i>
                </a>
                    </div>
                <table class="centered striped" id="example" style="width: 978px !important;">
                    <thead>
                    <tr>
                        <th data-field="id"><span title="Check all ads"><input type="checkbox"  id="checked_all" /><label for="checked_all" style="left:0; visibility:visible;"></label></span></th>
                        <th data-field="id">ID</th>
                        <th data-field="name">Email</th>
                        <th data-field="name">Ip Details</th>
                        <?php /*<th data-field="gender">Subject</th>*/ ?>
                        <?php /*<th data-field="email">Title</th>*/ ?>
                        <th data-field="email">Message</th>
                        <th data-field="email">Reply</th>
                        <th data-field="email">Date</th>
                        <th data-field="phone">File</th>
                        <th data-field="phone">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <div class="row" style="margin-bottom:0px !important;">
                <div class="col s12">
                    <div class="col s10">
                        <h5 style="color:#351969;">CONTACT US</h5>
                    </div>
                    <div class="col s2 right-align">
                        <?php /*<a href="#!" class="modal-action modal-close close"><i class="material-icons" style="color:red;">close</i></a>*/ ?>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green close">X</a>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom:0px !important;">
                <div class="col s12 m12" style="">
                    <div class="col s12 m12">
                        <p><b>Date :</b> <span id="datetime"></span></p>
                        <p><b>Is this the email address you use to post your ads? :</b> <span id="query"></span></p>
                        <p id="div_email_used"><b>The email address used to post ads :</b> <span id="email_used"></span>
                        </p>
                    </div>
                    <div class="col s12 m8">
                        <div class="col s12 m12" style="padding:0;">
                            <div class="col s2 m2" style="padding:0;">
                                <p><b>Email:</b></p>
                            </div>
                            <div class="col s10 m10">
                                <p class="email_adjust" id="email"></p>
                            </div>
                        </div>

                        <div class="col s12 m12" style="padding:0;">
                            <div class="col s2 m2" style="padding:0;">
                                <p><b>Location:</b></p>
                            </div>
                            <div class="col s10 m10">
                                <p id="location"></p>
                            </div>
                        </div>


                        <?php /*<h5 style="color:#351969;">Location & Ip</h5>*/ ?>
                        <?php /*<div class="row">*/ ?>
                            <?php /*<div class="col s12 m12">*/ ?>
                                <?php /*<div class="col s12 m6">*/ ?>
                                    <?php /*<p style="font-size:12px;color:#351969;"><b>IP:</b><br><span*/ ?>
                                                <?php /*style="font-size:16px;color:#323232;" id="ip"></span></p>*/ ?>
                                <?php /*</div>*/ ?>
                                <?php /*<div class="col s12 m6">*/ ?>
                                    <?php /*<p style="font-size:12px;color:#351969;"><b>Region Name:</b><br><span*/ ?>
                                                <?php /*style="font-size:16px;color:#323232;" id="region_name"></span></p>*/ ?>
                                <?php /*</div>*/ ?>
                            <?php /*</div>*/ ?>
                            <?php /*<div class="col s12 m12">*/ ?>
                                <?php /*<div class="col s12 m6">*/ ?>
                                    <?php /*<p style="font-size:12px;color:#351969;"><b>City Name:</b><br><span*/ ?>
                                                <?php /*style="font-size:16px;color:#323232;" id="city_name"></span></p>*/ ?>
                                <?php /*</div>*/ ?>
                                <?php /*<div class="col s12 m6">*/ ?>
                                    <?php /*<p style="font-size:12px;color:#351969;"><b>Zip Code:</b><br><span*/ ?>
                                                <?php /*style="font-size:16px;color:#323232;" id="zip_code"></span></p>*/ ?>
                                <?php /*</div>*/ ?>
                            <?php /*</div>*/ ?>
                        <?php /*</div>*/ ?>

                        <div class="col s12 m12" style="padding:0;">
                            <div class="col s3 m2" style="padding:0;">
                                <p><b>Subject:</b></p>
                            </div>
                            <div class="col s9 m10">
                                <p id="subject"></p>
                            </div>
                        </div>


                        <div class="col s12 m12" style="padding:0;">
                            <div class="col s2 m2" style="padding:0;">
                                <p><b>Title:</b></p>
                            </div>
                            <div class="col s10 m10 title_adjust" id="title" style="">

                            </div>
                        </div>


                        <div class="col s12 m12" style="padding:0;">
                            <div class="col s12 m2" style="padding:0;">
                                <p><b>Message:</b></p>
                            </div>
                            <div class="col s12 m10">
                                <p id="msg"></p>
                            </div>
                        </div>

                    </div>

                    <div class="col s12 m4 main_div">
                        <div class="card-panel col m12 s12">
                            <div class="row" style="margin-top:10px;">
                                <div class="col s12 m12">
                                    <div class="col s12 m12 image_div" style="padding:0;">
                                        <center><img src="" id="image" class="img-responsive" width="100%"></center>
                                        <center><a id="image_src" href="" class="btn btn-suucess"
                                                   download="">Download</a></center>
                                    </div>
                                    <div class="col s12 m12 file_div">
                                        <div class="row">
                                            <div class="col s12 m12">
                                                <div class="col s12 m12" style="padding: 0;">
                                                    <p><b>Text files</b></p>
                                                </div>
                                                <div class="col s12 m12">
                                                    <center><b id="type_name"></b>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m12" style="margin-top:7px;">
                                                <center><a id="file" href="" class="btn btn-suucess" download=""
                                                           style="margin-top:10px;">Download
                                                        File</a></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom:0px !important;">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="reason" class="materialize-textarea"></textarea>
                            <label for="reason">Reply</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="waves-effect waves-light btn btn_status" id="reply"
               style="margin-right:10px;background-color:#4caf50;">Submit</a>
        </div>

    </div>
    <div id="block_modal" class="modal" style="width: 40%">
        <div class="modal-content">
            <h4>BLOCK IP</h4>
            <form id="ip_block_form" class="col s12">
                <div class="col m6 s12 offset-m2 padding0">
                    <div class="input-field col s12 padding0">
                        <input type="text" name="ip_block" id="ip_block">
                    </div>
                </div>
                <div style="margin-top: 25px;" class="col m2 s12 center">
                    <a class="waves-effect waves-light btn block_this_ip" data-id="0">Block</a>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
        </div>
    </div>
    <div id="email_block_modal" class="modal" style="width:40%;" >
        <div class="modal-content">
            <h4>BLOCK Email</h4>
            <form id="email_block_form" class="col s12">
                <div class="col m6 s12 offset-m2 padding0">
                    <div class="input-field col s12 padding0">
                        <input type="text" name="email_block" id="email_block">
                    </div>
                </div>
                <div style="margin-top: 25px;" class="col m2 s4 center">
                    <a  class="waves-effect waves-light btn block_this_email" data-id="0">Block</a>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

    <script src="/assets/admin/toastr.js"></script>
    <script src="/assets/admin/loadingoverlay.js"></script>
    <script src="/assets/admin/loadingoverlay.min.js"></script>
    <script src="/assets/admin/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            updateSeenStatus('user_queries');
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
            $('select').material_select();
        });
    </script>
    <script>
        $(document).ready(function () {

            $('#reason').val('');
            $('.image_div').hide();
            $('.file_div').hide();
            $('#div_email_used').css('display', 'none');
            var obj = '';

            var oTable = $('#example').dataTable({
                "order": [[ 1, "desc" ]],
//                stateSave: true,
                "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50,100, "All"]],
                "ajax": {
                    "url": "/admin/user/all/contacts",
                    "type": "POST"
                }
            });

            function isIpAddress(ipaddress) {
                var ip = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
                return ip.test(ipaddress);
            }
            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            $(document.body).on('click', '.ipModal', function (event) {
                event.preventDefault();
                var ip = $(this).attr('data-id');
                $('#ip_block_form input').val(ip);
                console.log(ip);
                $.ajax({
                    url: "/admin/check/ip",
                    type: 'post',
                    dataType: 'json',
                    data: {ip: ip},
                    success: function (data) {
                        console.log('data', data);
                        if (data.status == 'blocked') {
                            $('.block_this_ip').text('UN-BLOCK');
                            $('.block_this_ip').attr('data-id', 1);
                            $('#block_modal').openModal();
                        }
                        else if (data.status == 'clean') {
                            $('.block_this_ip').text('BLOCK');
                            $('.block_this_ip').attr('data-id', 0);
                            $('#block_modal').openModal();
                        }
                        else if (data.status == 'error') {
                            toastr.warning(data.msg, {timeOut: 2000});
                        }
                    }
                });
            });
            $(document.body).on('click', '.block_this_ip', function (event) {
                event.preventDefault();
                var ip = $('#ip_block').val();
                if (ip == '') {
                    toastr.error('Please Enter IP Address', {timeOut: 2000});
                    return false;
                } else if (isIpAddress(ip) == false) {
                    toastr.error('Please Enter Valid IP Address', {timeOut: 2000});
                    return false;
                }
                var check_block_status = $('.block_this_ip').attr('data-id');
                var url = '';
                if (check_block_status == 0) {
                    url = "/admin/block_users/ip";
                } else {
                    url = "/admin/unblock/by/ip";
                }
                $.ajax({
                    url: url,
                    type: 'post',
                    dataType: 'json',
                    data: {ip: ip},
                    success: function (data) {
                        $('#block_modal').closeModal();
                        console.log('data', data);
                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 2000});
                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 2000});
                        }
                        else if (data.status == 'warning') {
                            toastr.warning(data.msg, {timeOut: 2000});
                        }

                    }
                });

            });
            $(document.body).on('click','.user_block',function(event){
                event.preventDefault();
                var email = $(this).attr('data-email');
                $('#email_block_form input[name="email_block"]').val(email);
                console.log(email);
                $.ajax({
                    url:"/admin/check/email",
                    type:'post',
                    dataType: 'json',
                    data: {email: email},
                    success: function (data) {
                        console.log('data',data);
                        if (data.status == 'blocked') {
                            $('.block_this_email').text('UN-BLOCK');
                            $('.block_this_email').attr('data-id',1);
                            $('#email_block_modal').openModal();
                        }
                        else if (data.status == 'clean') {
                            $('.block_this_email').text('BLOCK');
                            $('.block_this_email').attr('data-id',0);
                            $('#email_block_modal').openModal();
                        }
                        else if (data.status == 'error') {
                            toastr.warning(data.msg, {timeOut: 2000});
                        }
                    }
                });
            });
            $(document.body).on('click','.block_this_email',function(event){
                event.preventDefault();
                var email=$('#email_block').val();
                console.log('email',email);


                if(email == ''){
                    toastr.error('Please Enter Email', {timeOut: 2000});
                    return false;
                }else if(isEmail(email) == false){
                    toastr.error('Please Valid Email', {timeOut: 2000});
                    return false;
                }
                var check_block_status=$('.block_this_email').attr('data-id');
                console.log('check_block_status',check_block_status);

                var url='';
                if(check_block_status==0){
                    url="/admin/block_users/email";
                }else{
                    url="/admin/email/unblock";
                }
                $.ajax({
                    url:url,
                    type:'post',
                    dataType: 'json',
                    data: {email: email},
                    success: function (data) {
                        $('#email_block_modal').closeModal();
                        console.log('data',data);
                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 2000});
                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 2000});
                        }
                        else if (data.status == 'warning') {
                            toastr.warning(data.msg, {timeOut: 2000});
                        }

                    }
                });

            });

            $('#checked_all').click(function(){
                if($(this).is(":checked")){
                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
                        $(this).prop('checked', true);
                    });
                }else{
                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
                        $(this).prop('checked', false);
                    });
                }
            });

            $('#delete_all').click(function(){

                var id = [];
                $("input:checkbox", oTable.fnGetNodes()).each(function () {
                    var checked = $(this).is(":checked");
                    if (checked) {
                        id.push($(this).attr('data-id'));
                    }
                });
                if(id == ""){
                    $('.warning_class').css('display','block');
                    $('#warning_msg').html('No Queries selected! Please check at-least one Query to perform this action.');
//                    toastr.error('No checkbox selected', {timeOut: 2000});
                }else{
                    swal({
                        title: "Are you sure you want to delete the selected Queries permanently?",
                        text: "You won't be able to revert this!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, permanently delete it!",
                        cancelButtonText: "No, cancel it!",
                        showCloseButton: true
                    }).then(function () {
                                $.ajax({
                                    type: "POST",
                                    url: '/admin/delete/user/queries',
                                    dataType: 'json',
                                    data: {id: id},
                                    beforeSend: function () {
                                        $.LoadingOverlay("show");
                                    },
                                    complete: function () {
                                        $.LoadingOverlay("hide");
                                    },
                                    success: function (data) {

                                        if (data.status == 'success') {
                                            toastr.success(data.msg, {timeOut: 2000});
                                            $("input:checkbox", oTable.fnGetNodes()).each(function () {
                                                var checked = $(this).is(":checked");
                                                if (checked) {
                                                    var target_row = $(this).closest("tr").get(0);
                                                    var aPos = oTable.fnGetPosition(target_row);
                                                    oTable.fnDeleteRow(aPos);
                                                }
                                            });
                                        }
                                        else if (data.status == 'error') {
                                            toastr.error(data.msg, {timeOut: 2000});
                                        }
                                    }
                                });
                            },
                            function (isConfirm) {
                                if (isConfirm === 'cancel') {
                                    swal("Done!", "Your Queries are safe.", "success");
                                }
                            });
                }
            });

            $(document).on('click', '.close', function () {

                $('#modal1').css('display', 'none');
                $('#modal1').css('z-index', 1003);
                $('#modal1').css('opacity', 0);
                $('#modal1').css('transform', 'scaleX(0.7)');
                $('#modal1').css('top', '181.623px');

            });

            $(document).on('click', '.reply_button', function () {
                obj = $(this);
                var id = $(obj).attr('data-id');

                var url = "/admin/user/contacts";
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: {id: id},
                    success: function (data) {

                        if (data.status == 'success') {

                            $('#subject').html('');
                            $('#title').html('');
                            $('#msg').html('');
                            $('#reply').attr('data-id', '');
                            $('#email').html('');
                            $('#location').html('');
                            $('#datetime').html('');
                            $('#query').html('');
                            $('#type_name').html('');
                            $('#file').attr('href', '');
                            $('#file').attr('download', '');
                            $('#reason').val('');
                            $('#email_used').html('');

                            $('#modal1').css('display', 'block');
                            $('#modal1').css('z-index', 1005);
                            $('#modal1').css('opacity', 1);
                            $('#modal1').css('transform', 'scaleX(1)');
                            $('#modal1').css('top', '10%');

                            $('#subject').html(data.msg.category);
                            $('#title').append(data.msg.titles);
                            $('#msg').html(data.msg.message);
                            $('#reply').attr('data-id', data.msg.id);
                            $('#email').html(data.msg.email_id);
                            $('#location').html(data.msg.place_name);
                            $('#datetime').html(data.msg.created_at);

                            if (data.msg.email_used_for_ad == 'Yes') {
                                $('#div_email_used').css('display', 'none');
                            }
                            else {
                                $('#div_email_used').css('display', 'block');
                                $('#email_used').html(data.msg.email_used);
                            }

                            $('#query').html(data.msg.email_used_for_ad);


                            if (data.msg.file_name) {
                                $('.file_div').show();
                                $('.main_div').show();
                                $('.image_div').hide();
                                $('#type_name').html(data.msg.file_name);
                                $('#file').attr('href', data.msg.files);
                                $('#file').attr('download', data.msg.file_name);
                            }
                            else if (data.msg.img_name) {
                                $('.image_div').show();
                                $('.main_div').show();
                                $('.file_div').hide();
                                $('#image').attr('src', data.msg.files);
                                $('#image_src').attr('href', data.msg.files);
                                $('#image_src').attr('download', data.msg.img_name);
                            }
                            else {
                                $('.main_div').hide();
                            }

                            if (data.msg.reply != "") {
                                $('#reason').next().addClass('active');
                                $('#reason').val(data.msg.reply);
                            }

                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 2000});

                        }


                    }
                });
            });

            $(document).on('click', '#reply', function () {

                var objs = $(this);
                var id = $(objs).attr('data-id');
                var reason = $('#reason').val();
                var email = $('#email').html();
                var subject = $('#subject').html();
                var msg = $('#msg').html();

                var url = "/admin/reply/contacts";
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: {id: id, reason: reason, email: email, subject: subject, msg: msg},
                    success: function (data) {
                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 2000});
                         //   location.reload();
                            $(obj).closest('td').children().css('background-color','#351969');
                            $(obj).closest('td').children().css('color','#fff');
                            $(obj).closest('td').children().html('Replied');

                            $(obj).closest('td').prev().prev().prev().html('');
                            $(obj).closest('td').prev().prev().prev().html(reason);

                            $('#modal1').css('display', 'none');
                            $('#modal1').css('z-index', 1003);
                            $('#modal1').css('opacity', 0);
                            $('#modal1').css('transform', 'scaleX(0.7)');
                            $('#modal1').css('top', '181.623px');

                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 2000});

                        }
                        else if (data.status == 'warning') {
                            toastr.warning(data.msg, {timeOut: 2000});
                        }
                    }
                });
            });
            $(document).on('click', '.email_contact', function () {

                var objs = $(this);
                var email = $(objs).attr('data-email');
                var url = "/admin/check/user/details";
                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: {email: email},
                    success: function (data) {
                        if (data.status == 'success') {
                            window.open('/admin/view/user/profile/' + data.id);
                        }
                        else if (data.status == 'error') {
                            toastr.error('Details Not Found', {timeOut: 2000});
                        }
                    }
                });
            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>