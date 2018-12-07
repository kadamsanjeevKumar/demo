<?php $__env->startSection('title'); ?> Page20 Add category <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_cat','active'); ?>
<?php $__env->startSection('manage_cat_add','active'); ?>

<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <style>
        .btn, .btn-large, .btn-flat {
            padding: 0 14px !important;
        }


    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>

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

    <form action="/admin/add/categories" method="post">

        <div class="row">
            <div class="col s9 m9">
                <h5><b>MANAGE CATEGORIES</b></h5>
            </div>

        </div>
        <div class="row" style="margin-left: 30px; margin-top: 20px;">
            <div class="input-field col s10">
                <select id="category_ajax" name="category_ajax">
                    <option value="" disabled selected>Select Category</option>
                    <option value="">Select Category</option>
                    <?php if(!empty($category)): ?>
                        <?php foreach($category as $place): ?>
                            <?php if($place->parent_cat_id == 0): ?>
                                <option value="<?php echo e($place->cat_id); ?>"><?php echo e($place->cat_name); ?> </option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <option value="0" id="add_category">Add New Category</option>
                </select>
                <label>Add Category Name</label>
            </div>

        </div>
        <div id="category_name" class="row" style="margin-left: 30px; margin-top: 20px;">
            <div class="input-field col s10">
                <label for="form_control_1">Category Name</label>
                <input type="text" class="form-control" id="form_control_1" name="category_name">
            </div>
        </div>
        <div id="category_properties" class="row" style="margin-left: 30px; margin-top: 20px;">
            <div class="col s6 m3">
                <input type="checkbox" id="test1" name="top"/>
                <label for="test1">Top</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test2" name="gallery"/>
                <label for="test2">Gallery</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test3" name="videos"/>
                <label for="test3">Videos</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test4" name="date"/>
                <label for="test4">Date</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test5" name="verified"/>
                <label for="test5">Verified</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test6" name="disclaimer"/>
                <label for="test6">Disclaimer</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test10" name="summary"/>
                <label for="test10">Summary</label>
            </div>
            <div class="col s6 m3">
                <input type="checkbox" id="test11" name="brief"/>
                <label for="test11">Brief</label>
            </div>
            <?php /*<div class="col s6 m3">*/ ?>
                <?php /*<input type="checkbox" id="test7" name="post_count"/>*/ ?>
                <?php /*<label for="test7">Post Count</label>*/ ?>
            <?php /*</div>*/ ?>
            <?php /*<div class="col s6 m3">*/ ?>
                <?php /*<input type="checkbox" id="test8" name="enabled"/>*/ ?>
                <?php /*<label for="test8">Enabled</label>*/ ?>
            <?php /*</div>*/ ?>
            <div class="col s6 m3">
                <input type="checkbox" id="test9" name="posting_rules"/>
                <label for="test9">Posting rules</label>
            </div>
        </div>

        <div class="row" id="added_sub_category" style="margin-left:30px;margin-top:20px;">
            <h6 style="margin-left: 13px;">Added Sub-Category</h6>
            <div class="col s9" id="sub_category_ajax">
            </div>
        </div>

        <div id="sub_category_name" class="row" style="margin-left: 30px; margin-top: 20px;">
            <div class="input-field col s9" style="padding-right:0px;">
                <label for="form_control_1">Enter Subcategory</label>
                <input type="text" class="form-control" id="form_control_1" name="sub_category_name_0">
            </div>
            <div class="col s1" style="text-align:center;">
                <div class="form-group form-md-line-input form-md-floating-label has-success">
                    <button class="btn btn-default" type="button" id="add_btn3"> +</button>
                </div>
            </div>
            <div class="row" style="margin-left:0px;">
                <div class="form-group form-md-line-input form-md-floating-label has-success col s12" style="">
                    <div id="addproduct-container3"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s10 text-center">
                <center><input class="btn btn-default" type="submit" value="SAVE"></center>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

    <script src="/assets/admin/toastr.js"></script>
    <script src="/assets/admin/loadingoverlay.js"></script>
    <script src="/assets/admin/loadingoverlay.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').material_select();
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>
    <script>
        $(document).ready(function () {

            var i = 1;
            $("#add_btn3").click(function () {
                $("#addproduct-container3").append('<div class="form-group form-md-line-input form-md-floating-label has-success city-div"><div class="col s9" style="padding:0px;"><label for="form_control_1"></label><input type="text" class="form-control" id="form_control_1" name="sub_category_name_' + i + '"></div><div class="col s1" style="text-align:center;padding:0px;"><button class="btn btn-default remove-city" type="button" id="add_btn4" style="" > -</button></div></div>');
                i++;
            });

            $(document).on('click', '.remove-city', function () {
                $(this).parents('.city-div').remove();
            });

        });
        $(document).ready(function () {

            $("#category_name").hide();
            $("#category_properties").hide();
            $("#sub_category_name").hide();
            $("#added_sub_category").hide();

            $('#add_category').click(function (event) {
                $('#category_name').show();
                $('#category_properties').show();
                $('#sub_category_name').show();
                $('#added_sub_category').hide();

            });

            $("#category_ajax").change(function () {

                var category_ajax = $("#category_ajax").val();

                var formdata = new FormData();
                formdata.append('category', category_ajax);

                $.ajax({
                    url: '/admin/get/sub/category',
                    type: 'POST',
                    dataType: 'json',
                    data: formdata,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data, status) {

                        if (data.status == 'success') {
                            $('#category_properties').show();
                            $('#sub_category_name').show();
                            $('#added_sub_category').show();
                            $('#category_name').hide();

                            var disclaimer = data.disclaimer;
                            var data = data.msg;

                            var html = "";

                            $.each(data, function (index, value) {
                                html += "<a class='btn disabled' style='margin-right:5px;margin-top:5px;'>" + value['cat_name'] + "</a>";
                            });
//                            $('#test1').removeAttr('checked');
                            $('#test1').prop('checked', false);
                            $('#test2').prop('checked', false);
                            $('#test3').prop('checked', false);
                            $('#test4').prop('checked', false);
                            $('#test5').prop('checked', false);
                            $('#test6').prop('checked', false);
//                            $('#test7').prop('checked', false);
//                            $('#test8').prop('checked', false);
                            $('#test9').prop('checked', false);
                            $('#test10').prop('checked', false);
                            $('#test11').prop('checked', false);
                            $.each(disclaimer, function (index, value) {

                                switch (index) {
                                    case "top":
                                            if(value == "on"){
                                                $('#test1').prop('checked', true);
                                            }
                                        break;
                                    case "gallery":
                                        if(value == "on") {
                                            $('#test2').prop('checked', true);
                                        }
                                        break;
                                    case "videos":
                                        if(value == "on") {
                                            $('#test3').prop('checked', true);
                                        }
                                        break;
                                    case "date":
                                        if(value == "on") {
                                            $('#test4').prop('checked', true);
                                        }
                                        break;
                                    case "verified":
                                        if(value == "on") {
                                            $('#test5').prop('checked', true);
                                        }
                                        break;
                                    case "disclaimer":
                                        if(value == "on") {
                                            $('#test6').prop('checked', true);
                                        }
                                        break;
                                    case "summary":
                                        if(value == "on") {
                                            $('#test10').prop('checked', true);
                                        }
                                        break;
                                    case "brief":
                                        if(value == "on") {
                                            $('#test11').prop('checked', true);
                                        }
                                        break;
//                                    case "post_count":
//                                        if(value == "on") {
//                                            $('#test7').prop('checked', true);
//                                        }
//                                        break;
//                                    case "enabled":
//                                        if(value == "on") {
//                                            $('#test8').prop('checked', true);
//                                        }
//                                        break;
                                    case "posting_rules":
                                        if(value == "on") {
                                            $('#test9').prop('checked', true);
                                        }
                                        break;
                                }

                            });

                            $("#sub_category_ajax").html(html);

                        }
                        else if (data.status == 'error') {

                            $('#category_name').show();
                            $('#category_properties').show();
                            $('#sub_category_name').show();
                            $('#added_sub_category').hide();
                            $('#test1').prop('checked', false);
                            $('#test2').prop('checked', false);
                            $('#test3').prop('checked', false);
                            $('#test4').prop('checked', false);
                            $('#test5').prop('checked', false);
                            $('#test6').prop('checked', false);
//                            $('#test7').prop('checked', false);
//                            $('#test8').prop('checked', false);
                            $('#test9').prop('checked', false);
                            $('#test10').prop('checked', false);
                            $('#test11').prop('checked', false);

                        }

                    }
                });

            });
        });

    </script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>