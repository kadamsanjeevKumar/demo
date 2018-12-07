<?php $__env->startSection('title'); ?>BackPage Ads <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_posts','active'); ?>
<?php $__env->startSection('backpage_posts','active'); ?>
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
                <h5 style="margin-bottom:15px; float: left;">BACKPAGE ADS</h5>
                <a id="delete_all" title="Delete ads" style="cursor: pointer; margin: 4px 0px 0px 20px;background:#cc3e3e;" class="waves-effect waves-light btn">
                    <i class="material-icons dp48" style="color:#fff;">delete</i>
                </a>
                    </div>
                <table class="centered striped" id="example">
                    <thead>
                    <tr>
                        <th data-field="id"><span title="Check all ads"><input type="checkbox"  id="checked_all" /><label for="checked_all" style="left:0; visibility:visible;"></label></span></th>
                        <th data-field="id">Post ID</th>
                        <th data-field="name">Title</th>
                        <th data-field="gender">Location</th>
                        <th data-field="email">Category</th>
                        <th data-field="phone">Status</th>
                        <th data-field="address">Posted Date</th>
                        <th data-field="action">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
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
            updateSeenStatus('backpage_post');
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>
    <script>
        $(document).ready(function () {
            $(document).scroll(function () {
                $.cookie("local_ad_scroll", $(window).scrollTop());
            });

            var oTable =  $('#example').DataTable({
                "lengthMenu": [[10, 25, 50,100,500,1000, -1], [10, 25, 50,100,500,1000, "All"]],
//                stateSave: true,
                deferRender:true,
                "columnDefs": [
                    { "orderable": false, "targets": 0 }
                ],
                "drawCallback": function (settings) {
                    if ($.cookie("local_ad_scroll") !== null) {
                        setTimeout(function(){
                            $(window).scrollTop($.cookie("local_ad_scroll"));
                        },0);
                    }
                },
                "ajax": {
                    "url": "/admin/backpage/ads",
                    "type": "POST"
                }
            });

            // Handle table draw event
            oTable.on('draw', function(){
                updateCheckbox(oTable);
            });

            function updateCheckbox(oTable){
                var table             = oTable.table().node();
                var chkbox_all        = $('tbody input[type="checkbox"]', table);
                var chkbox_checked    = $('tbody input[type="checkbox"]:checked', table);
                var chkbox_select_all  = $('thead #checked_all');

                // If none of the checkboxes are checked

                if(chkbox_checked.length === 0){

                    chkbox_select_all.prop('checked', false);
                    if(chkbox_select_all.is(":indeterminate")){
                        chkbox_select_all.prop('indeterminate', false);
                    }

                    // If all of the checkboxes are checked
                } else if (chkbox_checked.length === chkbox_all.length){
                    chkbox_select_all.checked = true;
                    if(chkbox_select_all.is(":indeterminate")){
                        chkbox_select_all.prop('indeterminate', false);
                    }

                    // If some of the checkboxes are checked
                } else {
                    chkbox_select_all.checked = true;
                    if(chkbox_select_all.is(":indeterminate")){
                        chkbox_select_all.prop('indeterminate', true);
                    }
                }
            }
//            var oTable = $("#example").dataTable();

//            $('#checked_all').click(function(){
//                if($(this).is(":checked")){
//                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
//                        $(this).prop('checked', true);
//                    });
//                }else{
//                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
//                        $(this).prop('checked', false);
//                    });
//                }
//
////                $('input:checkbox').not(this).prop('checked', this.checked);
//
//
//            });

            $('#checked_all').click(function(){
                if($(this).is(":checked")){
                    $("input:checkbox", oTable.rows({page:'current'}).nodes()).each(function () {
                        $(this).prop('checked', true);
                    });
                }else{
                    $("input:checkbox", oTable.rows({page:'current'}).nodes()).each(function () {
                        $(this).prop('checked', false);
                    });
                }
            });

            $('#delete_all').click(function(){

                var id = [];
                $("input:checkbox", oTable.rows().nodes()).each(function () {
                    var checked = $(this).is(":checked");
                    if (checked) {
                        id.push($(this).attr('data-id'));
                    }
                });
                if(id == ""){
                    $('.warning_class').css('display','block');
                    $('#warning_msg').html('No ad selected! Please check at-least one ad to perform this action.');
//                    toastr.error('No checkbox selected', {timeOut: 2000});
                }else{
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
                                url: '/admin/delete/multiple/backpage/ad',
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
//                                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
//                                        var checked = $(this).is(":checked");
//                                        if (checked) {
////                                        $(this).parent().parent().remove();
//                                            var target_row = $(this).closest("tr").get(0);
//                                            var aPos = oTable.fnGetPosition(target_row);
//                                            oTable.fnDeleteRow(aPos);
//                                        }
//                                    });
                                        $("input:checkbox", oTable.rows().nodes()).each(function () {
                                            var checked = $(this).is(":checked");
                                            if (checked) {
                                                var target_row = $(this).closest("tr").get(0);
                                                oTable.rows(target_row).remove().draw();
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
                                swal("Done!", "Your ads are safe.", "success");
                            }
                        });
                }
            });

//            $(document).on('click','.delete_post',function () {
//
//                if (confirm("Are you sure You want to delete this ad?")) {
//                    var current_element = $(this);
//                    var id = $(current_element).attr('data-id');
//                    var url = "/admin/delete/backpage/ad";
//                    $.ajax({
//                        type: "POST",
//                        url: url,
//                        dataType: 'json',
//                        data: {id: id},
//                        beforeSend: function () {
//                            $.LoadingOverlay("show");
//                        },
//                        complete: function () {
//                            $.LoadingOverlay("hide");
//                        },
//                        success: function (data) {
//
//                            if (data.status == 'success') {
//                                toastr.success(data.msg, {timeOut: 2000});
//
////                                $(current_element).parent().parent().remove();
//
//                                var target_row = $(current_element).closest("tr").get(0);
//                                var aPos = oTable.fnGetPosition(target_row);
//                                oTable.fnDeleteRow(aPos);
//
////                                location.reload();
//
//                            }
//                            else if (data.status == 'error') {
//                                toastr.error(data.msg, {timeOut: 2000});
//
//                            }
//
//
//                        }
//                    });
//
//                }
//
//            });

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>