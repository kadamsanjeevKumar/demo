<?php $__env->startSection('title'); ?> Page20 Contact us <?php $__env->stopSection(); ?>
<?php $__env->startSection('all_message','active'); ?>
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
            .title_adjust {
                margin-top: 14px !important;
            }

            .email_adjust {
                font-size: 12px !important;
            }
        }

        .m-l-18 {
            margin-left: 18%;
        }


    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div id="card-alert" style="display: none;" class="card green lighten-5 warning_class">
        <div class="card-content green-text">
            <p id="warning_msg"></p>
        </div>
        <button type="button" class="close green-text" style="margin-top: -16px;" data-dismiss="alert"
                aria-label="Close">
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
                <div class="col m12 l12"
                     style="background:#F9F9F9;position: sticky; padding:15px 10px; top:64px; z-index: 99">
                    <h5 style="margin-bottom:15px; float: left;">Admin Messages</h5>
                    <a id="delete_all" title="Delete user queries"
                       style="cursor: pointer; margin: 4px 0px 0px 20px;background:#cc3e3e;"
                       class="waves-effect waves-light btn">
                        <i class="material-icons dp48" style="color:#fff;">delete</i>
                    </a>
                </div>
                <table class="centered striped" id="example" style="width: 978px !important;">
                    <thead>
                    <tr>
                        <th data-field="id"><span title="Check all ads"><input type="checkbox" id="checked_all"/><label
                                        for="checked_all" style="left:0; visibility:visible;"></label></span></th>
                        <th data-field="id">ID</th>
                        <th data-field="name">Email</th>
                        <th data-field="email">Message</th>
                        <th data-field="email">Status</th>
                        <th data-field="email">Date</th>
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
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
            $('select').material_select();
        });
    </script>
    <script>
        var type=0;
        var oTable;
        $(document).ready(function () {
            updateSeenStatus('admin_message');
            drawTable();

            $('#reason').val('');
            $('.image_div').hide();
            $('.file_div').hide();
            $('#div_email_used').css('display', 'none');
            var obj = '';

            function drawTable() {
                oTable = $('#example').dataTable({
                    "order": [[0, "desc"]],
                    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                    stateSave: true,
                    "ajax": {
                        "url": "/admin/all/messages",
                        "type": "POST",
                        dataType:'json',
                        data:{type:type}
                    }
                });
            }

            $('#checked_all').click(function () {
                if ($(this).is(":checked")) {
                    $("input:checkbox", oTable.fnGetNodes()).each(function () {
                        $(this).prop('checked', true);
                    });
                } else {
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
                    $('#warning_msg').html('No Messages selected! Please check at-least one message to perform this action.');
//                    toastr.error('No checkbox selected', {timeOut: 2000});
                } else {
                    swal({
                        title: "Are you sure you want to delete the selected Messages permanently?",
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
                                url: '/admin/delete/admin/messages',
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
                                swal("Done!", "Your messages are safe.", "success");
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

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>