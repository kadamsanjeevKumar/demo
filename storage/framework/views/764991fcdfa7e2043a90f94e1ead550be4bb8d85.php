<?php $__env->startSection('title'); ?> Page20 Posted Ads <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_multiple_posts','active'); ?>
<?php $__env->startSection('manage_posts','active'); ?>
<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <link href="/assets/admin/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/assets/user/plugins/sweetalert2/dist/sweetalert2.css">
    <style>
        .truncate {
            width: 100px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .dataTables_length > label > select{
            display: block !important;
            color: black !important;
        }
        .dataTables_length > label{
            color: black !important;
            font-size: 1.0rem !important;
        }
        .dataTables_filter > label{
            color: black !important;
            font-size: 1.0rem !important;
        }
        tbody > tr{
            font-size: 13px;
            color: black !important;
            /*font-weight: bold;*/
        }
        table.dataTable tbody th, table.dataTable tbody td {
            padding: 8px 6px;
        }
        .dataTable{
            width: 100% !important;
        }

        .close{ padding: 10px 18px; background: #eee; color: #351969; border-radius:40px;float:right; font-family:sans-serif}
        .close:hover{ padding: 10px 18px; background: #351969; color: #fff; border-radius:40px;float:right; font-family:sans-serif}
        .m-l-18{
            margin-left: 8%;
        }

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <p id="page_name" hidden data-name="backpage_count"></p>
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
            <div class="col s11 m11 l12" style="">
                <div class="col m12 l12" style="background:#F9F9F9;position: sticky; padding:15px 10px; top:64px; z-index: 99">
                <a class="waves-effect waves-light btn modal-trigger change_cat" style="float: right;margin-left:20px" data-target="changeCategory" href="#changeCategory" title="Change category of multiple ads">Change Post Category</a>
                <a class="waves-effect waves-light btn modal-trigger" style="float: right;" data-target="modal" href="#modal" id="btn_date">Add Post Expiry Days</a>

                <h5 style="margin-bottom:15px; float: left;">POST IN MULTIPLE CITIES</h5>
                <a id="delete_all" title="Delete ads" style="cursor: pointer; margin: 4px 0px 0px 20px;background:#cc3e3e;float: left;" class="waves-effect waves-light btn">
                    <i class="material-icons dp48" style="color:#fff;">delete</i>
                </a>
                    <a id="bump_all" title="Bump All Expired ads"
                       style="cursor: pointer; margin: 4px 0px 0px 20px;background:#351969; float: left;"
                       class="waves-effect waves-light btn">
                        <i class="material-icons dp48" style="color:#fff;">flight_takeoff</i>
                    </a>
                    <div class="left m-l-18">
                        <div class="input-field col s12">
                            <select id="reg_user_drpdwn" name="reg_user_drpdwn">
                                <option value="2" selected>All Posts</option>
                                <option value="0">User's Posts</option>
                                <option value="1">Guest User's Posts</option>
                            </select>
                            <label>Filter on user type</label>
                        </div>
                    </div>
                    </div>
                <table class="centered striped" id="example">
                    <thead>
                    <tr>
                        <th data-field="id"><span title="Check all ads"><input type="checkbox"  id="checked_all" /><label for="checked_all" style="left:0; visibility:visible;"></label></span></th>
                        <th data-field="id">Post ID</th>
                        <th data-field="name">Email</th>
                        <th data-field="name">Title</th>
                        <th data-field="phone">Ip Details</th>
                        <th data-field="email">Category</th>
                        <th data-field="phone">Status</th>
                        <th data-field="phone">Change Status</th>
                        <th data-field="phone">Amount</th>
                        <th data-field="address">Posted Date</th>
                        <th data-field="address">Expiry Date</th>
                        <th data-field="action">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="changeCategory" class="modal" style="min-height: 350px;width: 45%">

        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <div class="col s11">
                        <?php /*<p><B>Current Category: </B>Jobs, Accountants</p>*/ ?>
                        <h5 style="color:#351969;">MOVE ADS TO</h5>
                    </div>
                    <div class="col s1 right-align">
                        <?php /*<a href="#!" class="modal-action modal-close"><i class="material-icons" style="color:red;">close</i></a>*/ ?>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green close">X</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12" style="margin-top:15px;margin-left:10px;">
                    <div class="input-field">
                        <select id="category">
                            <option value="" disabled selected>Choose Category</option>
                            <?php if(!empty($categories)): ?>
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo e($category->cat_id); ?>"><?php echo e($category->cat_name); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        <label>Category:</label>
                    </div>
                    <span id="cat_error" style="color: red;"></span>
                </div>
            </div>
            <div class="row">
                <div class="col s12" style="margin-top:15px;margin-left:10px;">
                    <div class="input-field div_sub_cat">
                        <select id="sub_cat">
                        </select>
                        <label>Sub-Category:</label>
                    </div>
                    <span id="subcat_error" style="color: red;"></span>
                </div>
            </div>
            <div id="loader_ajax" class="loader" style="">
                <center><img src="/assets/user/images/ajax-loader.gif" style="height: 100px;width: 100px;"></center>
            </div>
            <div class="modal-footer">
                <span id="time" style="color:cornflowerblue;"></span>
                <a href="#!" class="waves-effect waves-light btn move_category" style="margin-right:10px;background-color:#4caf50;">MOVE</a>
            </div>
        </div>
    </div>

    <div id="modal" class="modal" style="min-height: 350px;width: 45%">
        <div class="modal-content center">
            <a href="#!" class="modal-action modal-close waves-effect waves-green close">X</a>
            <h4>Add Expiry Days</h4>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <label for="free_date" style="margin-top: -21px;">Free Post Expiry Days</label>
                        <input type="text" id="free_date" value="">
                    </div>
                    <div class="input-field col s12">
                        <label for="paid_date" style="margin-top: -21px;">Paid Post Expiry Days</label>
                        <input type="text" id="paid_date" value="">
                    </div>
                </div>
            </form>
            <button class="btn waves-effect waves-light" id="update_date" type="submit" name="action">
                Submit
                <i class="material-icons right">send</i>
            </button>
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
    <script src="/assets/user/plugins/sweetalert2/dist/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function () {
            updateSeenStatus('multiple_post');
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>
    <script>
        var type=2;
        var oTable;
        $(document).ready(function () {
            drawTable();

            function isIpAddress(ipaddress) {
                var ip = /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
                return ip.test(ipaddress);
            };
            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            $(document.body).on('click','.ipModal',function(event){
                event.preventDefault();
                var ip = $(this).attr('data-id');
                $('#ip_block_form input').val(ip);
                console.log(ip);
                $.ajax({
                    url:"/admin/check/ip",
                    type:'post',
                    dataType: 'json',
                    data: {ip: ip},
                    success: function (data) {
                        console.log('data',data);
                        if (data.status == 'blocked') {
                            $('.block_this_ip').text('UN-BLOCK');
                            $('.block_this_ip').attr('data-id',1);
                            $('#block_modal').openModal();
                        }
                        else if (data.status == 'clean') {
                            $('.block_this_ip').text('BLOCK');
                            $('.block_this_ip').attr('data-id',0);
                            $('#block_modal').openModal();
                        }
                        else if (data.status == 'error') {
                            toastr.warning(data.msg, {timeOut: 2000});
                        }
                    }
                });
            });

            $(document.body).on('click','.block_this_ip',function(event){
                event.preventDefault();
                var ip=$('#ip_block').val();
                console.log('ip',ip);


                if(ip == ''){
                    toastr.error('Please Enter IP Address', {timeOut: 2000});
                    return false;
                }else if(isIpAddress(ip) == false){
                    toastr.error('Please Enter IP Address', {timeOut: 2000});
                    return false;
                }
                var check_block_status=$('.block_this_ip').attr('data-id');
                console.log('check_block_status',check_block_status);
                var url='';
                if(check_block_status==0){
                    url="/admin/block_users/ip";
                }else{
                    url="/admin/unblock/by/ip";
                }
                $.ajax({
                    url:url,
                    type:'post',
                    dataType: 'json',
                    data: {ip: ip},
                    success: function (data) {
                        $('#block_modal').closeModal();
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

            $(document.body).on('change','#reg_user_drpdwn',function(event){
                type=$(this).val();
                console.log('-------------',type);
                oTable.api().destroy();
                drawTable();
            });

            function drawTable() {
                 oTable = $('#example').dataTable({
//                    stateSave: true,
//                     "order": [[0, "desc"]],
                    "ajax": {
                        "url": "/admin/user/multiple/post/list",
                        "type": "POST",
                        dataType:'json',
                        data:{type:type}
                    }
                });
            }

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

            $('#delete_all').click(function () {

                var id = [];
                $("input:checkbox", oTable.fnGetNodes()).each(function () {
                    var checked = $(this).is(":checked");
                    if (checked) {
                        id.push($(this).attr('data-id'));
                    }
                });
                if (id == "") {
                    $('.warning_class').css('display', 'block');
                    $('#warning_msg').html('No ad selected! Please check at-least one ad to delete it permanently.');
//                    toastr.error('No checkbox selected', {timeOut: 2000});
                } else {
                    swal({
                        title: "Are you sure you want to delete the selected ads permanently?",
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
                                    url: '/admin/delete/multiple/ads',
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
                                            swal("Deleted!", "Selected ads has been deleted permanently.", "success");

                                            $("input:checkbox", oTable.fnGetNodes()).each(function () {
                                                var checked = $(this).is(":checked");
                                                if (checked) {
                                                    var target_row = $(this).closest("tr").get(0);
                                                    var aPos = oTable.fnGetPosition(target_row);
                                                    oTable.fnDeleteRow(aPos);
                                                    $(this).prop('checked', false);
                                                }
                                            });
                                            $('.change_cat').hide();
                                        }
                                        else if (data.status == 'error') {
                                            toastr.error(data.msg, {timeOut: 2000});
                                        }
                                    }
                                });

                            },
                            function (isConfirm) {
                                if (isConfirm === 'cancel') {
                                    swal("Done!", "Your ads are safe.", "success");
                                }
                            });

//                    if (confirm("Are you sure You want to perform this action? ")) {
//
//                    }
                }
            });

            $('#bump_all').click(function () {
                swal({
                    title: "Are you sure you want to Bump All Expired ads(Multiple City) from Begining.?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, please do it!",
                    cancelButtonText: "No, cancel it!",
                    showCloseButton: true
                }).then(function () {
                        $.ajax({
                            type: "POST",
                            url: '/admin/bump/mutiplecity/ads',
                            dataType: 'json',
                            beforeSend: function () {
                                $.LoadingOverlay("show");
                            },
                            complete: function () {
                                $.LoadingOverlay("hide");
                            },
                            success: function (data) {
                                if (data.status == 'success') {
                                    oTable.api().destroy();
                                    drawTable();
                                    toastr.success(data.msg, {timeOut: 2000});
                                    swal("Bumped!", "All Expired Ads Bumped Successfully.", "success");
                                }
                                else if (data.status == 'error') {
                                    toastr.error(data.msg, {timeOut: 2000});
                                }
                            }
                        });
                    },
                    function (isConfirm) {
                        if (isConfirm === 'cancel') {
                            swal("Done!", "Your ads are Unchanged.", "success");
                        }
                    });
            });

            $(document).on('click','#btn_date',function(){
                $.ajax({
                    type: "POST",
                    url: '/admin/check/post/start/expiry/date',
                    dataType: 'json',
                    success: function (data) {

                        if (data.status == 'success') {
                         //   toastr.success(data.msg, {timeOut: 2000});
                            // location.reload();

                            if(data.msg){
                                $('#free_date').val(data.msg.freepost_expirydate);
                                $('#paid_date').val(data.msg.paidpost_expirydate);
                            }

                        }
                    }
                });

            });

            $(document).on('click','#update_date',function () {

                    var free_date = $('#free_date').val();
                    var paid_date = $('#paid_date').val();
                    var url = "/admin/add/post/start/expiry/date";
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: {free_date: free_date,paid_date: paid_date},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {
                                Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                                $('#modal').closeModal();
                            }
                            else if (data.status == 'error') {
                                Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                            }
                        }
                    });


            });

            $(document).on('click','.delete_post',function () {

                if (confirm("Are you sure You want to delete this ad?")) {
                    var current_element = $(this);
                    var id = $(current_element).attr('data-id');
                    var url = "/admin/delete/post";
                    $.ajax({
                        type: "POST",
                        url: url,
                        dataType: 'json',
                        data: {id: id},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {
                                toastr.success(data.msg, {timeOut: 2000});
                                $(current_element).parent().prev().prev().prev().prev().html('<div class="chip" style="background-color:#ef5350 !important;line-height: 16px !important;padding: 3px 12px;color: #fff;">Community removed</div>');
                                $(current_element).remove();

//                                location.reload();

                            }
                            else if (data.status == 'error') {
                                toastr.error(data.msg, {timeOut: 2000});

                            }


                        }
                    });

                }

            });
            $(document).on('change1', '#post_status_change1', function () {
                var current_element = $(this);
                var id = $(current_element).attr('data-id');
                var status = $(current_element).val();
                var url = "/admin/change/post/status";

                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: {id: id, status: status},
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data) {

                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 20});
                            if (status == 1) {
                                $(current_element).closest('td').prev().html('<div class="chip" style="background-color:#4caf50 !important;color: #fff;">Active</div>');
                                $(current_element).html('<select class="browser-default" id="post_status_change" style="border:none !important;" data-id="' + id + '"><option value="0">Choose option</option>' +
                                    '<option value="5">Community remove</option></select>');
                            }else if(status == 5){
                                $(current_element).closest('td').prev().html('<div class="chip" style="background-color:#ef5350 !important;line-height: 16px !important;padding: 3px 12px;color: #fff;">Community removed</div>');
                                $(current_element).html('<select class="browser-default" id="post_status_change" style="border:none !important;" data-id="' + id + '"><option value="0">Choose option</option>' +
                                    '<option value="1">Active</option></select>');
                            }
                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 200});

                        }

                    }
                });

            });
            $(document).on('change', '#post_status_change', function () {
                var current_element = $(this);
                var id = $(current_element).attr('data-id');
                var status = $(current_element).val();
                var url = "/admin/change/post/status";

                $.ajax({
                    type: "POST",
                    url: url,
                    dataType: 'json',
                    data: {id: id, status: status},
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data) {

                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 20});
                            if (status == 1 || status ==6) {
                                $(current_element).closest('td').prev().html('<div class="chip" style="background-color:#4caf50 !important;color: #fff;">Active</div>');
                                $(current_element).html('<select class="browser-default" id="post_status_change" style="border:none !important;" data-id="' + id + '"><option value="0">Choose option</option>' +
                                    '<option value="5">Community remove</option></select>');
                                if(status == 6){
                                    $(current_element).closest('td').next().next().html(data.results.post_time);
                                    $(current_element).closest('td').next().next().next().html(data.results.expiry_date);
                                }
                            }else if(status == 5){
                                $(current_element).closest('td').prev().html('<div class="chip" style="background-color:#ef5350 !important;line-height: 16px !important;padding: 3px 12px;color: #fff;">Community removed</div>');
                                $(current_element).html('<select class="browser-default" id="post_status_change" style="border:none !important;" data-id="' + id + '"><option value="0">Choose option</option>' +
                                    '<option value="1">Active</option></select>');
                            }
                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 200});

                        }

                    }
                });

            });

        });

        $(document).ready(function () {
            $('.div_sub_cat').hide();
            $('.change_cat').hide();
            $('#cat_error').hide();
            $('#subcat_error').hide();
            $('#loader_ajax').hide();


            $(document).click(function () {

                $('.lean-overlay').css('display', 'none');
                $('.lean-overlay').css('z-index', 1003);
                $('.lean-overlay').css('opacity', 0);

            });

            $(document).on('click', '.close', function () {
                $('.lean-overlay').css('display', 'none');
                $('.lean-overlay').css('z-index', 1003);
                $('.lean-overlay').css('opacity', 0);

            });

            $('.change_cat').click(function () {

                $('.div_sub_cat').hide();
                $('#cat_error').hide();
                $('#subcat_error').hide();

                var category = $("#category").val();
                var sub_cat = $("#sub_cat").val();
                if($.isNumeric(category) == true){
                    $('.div_sub_cat').show();
                }
            });

            $('#category').change(function () {
                var start_time = new Date().getTime();
                var category = $("#category").val();
                var formdata = new FormData();
                formdata.append('category', category);

                $.ajax({
                    url: '/admin/get/category/list',
                    type: 'POST',
                    dataType: 'json',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#loader_ajax').show();
                    },
                    complete: function (xhr, status) {
                        $('#loader_ajax').hide();
                        var request_time = new Date().getTime() - start_time;
                        var time = Math.round(request_time/1000);
                        if(time == 0 || time == 1){
                            $('#time').html(time +' second has been taken to load');
                        }else{
                            $('#time').html(time +' seconds has been taken to load');
                        }
                    },
                    success: function (data, status) {

                        if (data.status == 'success') {

                            $('.div_sub_cat').show();
                            $('#cat_error').hide();

                            var category = data.msg;
                            var html = "<option value='' disabled selected>Choose Sub-Category</option>";

                            $.each(category, function (index, value) {
                                html += "<option value='" + value['cat_id'] + "'>" + value['cat_name'] + "</option>";

                            });

                            $("#sub_cat").html(html);
                            $("#sub_cat").material_select();

                        }
                        else if (data.status == 'error') {
                            $('.div_sub_cat').hide();
                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                        }

                    }
                });

            });

            $('#sub_cat').change(function (){
                $('#subcat_error').hide();
            });

            document.querySelector("tbody").addEventListener("change", function(e){
                if(e.target.tagName==='INPUT') {
                    var msg = '';
                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
                        var checked = $(this).is(":checked");
                        if (checked) {
                            msg = 'checked';
                        }
                    });
                    if(msg == 'checked'){
                        $('.change_cat').show();
                    }else{
                        $('.change_cat').hide();
                        $('#changeCategory').closeModal();
                    }
                }
            });

            var oTable = $("#example").dataTable();

            $('.move_category').click(function(){
                var category = $("#category").val();
                var sub_cat = $("#sub_cat").val();
                $('#cat_error').hide();
                $('#subcat_error').hide();

                if($.isNumeric(category) == false){
                    $('#cat_error').show();
                    $('#subcat_error').hide();
                    $('#cat_error').html('Choose category');
                }else if($.isNumeric(sub_cat) == false){
                    $('#subcat_error').show();
                    $('#cat_error').hide();
                    $('.div_sub_cat').show();
                    $('#subcat_error').html('Choose sub-category');
                }else {
                    $('.div_sub_cat').show();

                    if (confirm("This action will effect to all locations where Ad exists")) {

                        var id = [];
                        $("input:checkbox", oTable.fnGetNodes()).each(function () {
                            var checked = $(this).is(":checked");
                            if (checked) {
                                id.push($(this).attr('data-id'));
                            }
                        });

//                console.log(id);

                        var postId = id;

                        var formdata = new FormData();
                        formdata.append('category', category);
                        formdata.append('sub_cat', sub_cat);
                        formdata.append('postId', postId);

                        $.ajax({
                            url: '/admin/move/wrong/multiple/category/sponsor',
                            type: 'POST',
                            dataType: 'json',
                            data: formdata,
                            processData: false,
                            contentType: false,
                            beforeSend: function () {
                                $('#loader_ajax').show();
                            },
                            complete: function (xhr, status) {
                                $('#loader_ajax').hide();
                            },
                            success: function (data, status) {

                                if (data.status == 'success') {

                                    Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);

                                    setTimeout(function(){location.reload();},2000);
                                }
                                else if (data.status == 'error') {
                                    Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                    if (data.code == 100) {
                                        $('#cat_error').html(data.msg);
                                    } else if (data.code == 200) {
                                        $('#subcat_error').html(data.msg);
                                    }
                                }
                            }
                        });

                    }

                }

            });

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>