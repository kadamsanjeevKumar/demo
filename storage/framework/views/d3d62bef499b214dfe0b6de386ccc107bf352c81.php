<?php $__env->startSection('title'); ?> Page20 Edit category   <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_cat_edit','active'); ?>
<?php $__env->startSection('manage_cat','active'); ?>

<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <style>
        .states{
            background-color:#e9e9ea;
            color:#585858;
        }
        .cat {
            color: #351687;
            background-color: #dcdbdd;
            margin-bottom: 1px;
        }

        .list-inline {
            display: inline;
            margin-right: 175px;
        }

        .subcat {
            color: #333;
        }

        .subcat:hover {
            color: #7216ef;
        }

        .custom-collapse {
            margin: 0.5rem 1rem 1rem !important;
        }

        .custom-collapse1 {
            box-shadow: none !important;
        }
        .custom-header::after {
            margin-top: -45px !important;
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

        .switch label .lever{ margin: 0 9px;}
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>

    <div id="card-alert" class="card green lighten-5 disable_div" style="display:none;">
        <div class="card-content green-text">
            <p id="disable_msg"></p>
        </div>
        <button type="button" class="close green-text" style="margin-top: -15px;" data-dismiss="alert" aria-label="Close">
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
        <div class="col s12 m12 l8">
            <h5><b>EDIT CATEGORIES</b></h5>
        </div>
    </div>
    <div class="row">

        <ul class="collapsible custom-collapse1" data-collapsible="accordion">
            <?php if(!empty($parent)): ?>
                <?php foreach($parent as $category): ?>
                    <li>
                        <div class="collapsible-header custom-header cat catdelete1">
                            <div class="row">
                                <div class="col s12 m12">
                                    <div class="col s10 m9">
                                        <span class=""><?php echo e($category->cat_name); ?></span>&nbsp;
                                    </div>
                                    <div class="col s2 m3">
                                        <div class="col m6">
                                            <div class="switch">
                                                <label>Off <input type="checkbox" data-id="<?php echo e($category->cat_id); ?>" class="test8"
                                                                  <?php if(!empty($category->disclaimer_req->enabled)): ?> <?php if($category->disclaimer_req->enabled == 'on'): ?> checked <?php endif; ?> <?php endif; ?>>
                                                    <span class="lever"></span>On </label>
                                            </div>
                                        </div>
                                               <span class="right-align">
                                                    <a class="modal-trigger view_cat" data-target="editcat" href="#editcat" data-id="<?php echo e($category->cat_id); ?>"><i class="material-icons">mode_edit</i></a>
                                                   <i class="material-icons delete_cat" data-id="<?php echo e($category->cat_id); ?>" data-cat="<?php echo e($category->cat_name); ?>">delete</i>
                                                </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="collapsible-body">
                                <span>
                                    <ul style="margin-left:25px;padding:5px;">
                                        <a href="#">
                                            <li class="list-inline subcatdelete">
                                                <?php foreach($sub_category as $sub_categories): ?>
                                                    <?php if($category->cat_id == $sub_categories->parent_cat_id): ?>
                                                        <a class="modal-trigger subcat view_sub_cat" data-id="<?php echo e($sub_categories->cat_id); ?>" data-target="editsubcat" href="#editsubcat"><?php echo e($sub_categories->cat_name); ?>&nbsp;</a>
                                                        <a class="modal-trigger subcat view_sub_cat" data-id="<?php echo e($sub_categories->cat_id); ?>" data-target="editsubcat" href="#editsubcat">
                                                            <i class="material-icons" style="vertical-align: sub;font-size:17px;color:#351969;">edit</i>
                                                        </a>
                                                        <a href="#"><i class="material-icons delete_sub_category" data-id="<?php echo e($sub_categories->cat_id); ?>" data-catName="<?php echo e($sub_categories->cat_name); ?>" style="vertical-align: sub;font-size:17px;color:#b61515;">delete</i></a>

                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </li>
                                        </a>
                                    </ul>
                                </span>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>

    </div>

    <div id="editcat" class="modal">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 m12">
                    <div class="col s10 m11">
                        <h5 style="color:#351969;" class="cat_name"></h5>
                    </div>
                    <div class="col s2 m1">
                        <?php /*<a href="#!" class="modal-action modal-close"><i class="material-icons" style="color:red;">close</i></a>*/ ?>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green close">X</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12">
                <div class="row" style="margin-top:20px;">
                    <div class="col s12 m6">
                        <input type="checkbox" id="test1" />
                        <label for="test1">Top</label>
                    </div>
                    <div class="col s12 m6">
                        <input type="checkbox" id="test2" />
                        <label for="test2">Gallery</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <input type="checkbox" id="test3" />
                        <label for="test3">Videos</label>
                    </div>
                    <div class="col s12 m6">
                        <input type="checkbox" id="test4" />
                        <label for="test4">Date</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <input type="checkbox" id="test5" />
                        <label for="test5">Verified</label>
                    </div>
                    <?php /*<div class="col s12 m6">*/ ?>
                        <?php /*<input type="checkbox" id="test6" />*/ ?>
                        <?php /*<label for="test6">Disclaimer</label>*/ ?>
                    <?php /*</div>*/ ?>
                    <div class="col s12 m6">
                        <input type="checkbox" id="test11" />
                        <label for="test11">Summary</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <input type="checkbox" id="test12" />
                        <label for="test12">Brief</label>
                    </div>
                </div>
                <div class="row" style="margin-top:25px;background-color:#f3f1f1;padding:10px;">
                    <?php /*<div class="col s12 m6">*/ ?>
                        <?php /*<input type="checkbox" id="test7" />*/ ?>
                        <?php /*<label for="test7">Post Count</label>*/ ?>
                    <?php /*</div>*/ ?>
                    <div class="col s12 m6">
                        <input type="checkbox" id="test6" />
                        <label for="test6">Disclaimer</label>
                    </div>
                    <div class="col s12 m6">
                        <input type="checkbox" id="test9" />
                        <label for="test9">Posting rules</label>
                    </div>
                </div>
                <center><i><a href="#">Settings will reflect in all categories</a></i></center>
            </div>

        </div>
        <div class="modal-footer">
            <a class="waves-effect waves-light btn edit_cat" style="margin-right:19px;">UPDATE</a>
        </div>
    </div>

    <div id="editsubcat" class="modal">
        <div class="modal-content">
            <div class="row">
                <div class="col s12 m12">
                    <div class="col s10 m11">
                        <h5 style="color:#351969;" id="sub_cat_name"></h5>
                    </div>
                    <div class="col s2 m1">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green close">X</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m12">
                <div class="row" style="margin-top:20px;">
                    <div class="input-field col s12 m6">
                        <input placeholder="City price" id="city_price" type="text" value="" class="validate">
                        <label for="city_price">City Price</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input placeholder="Sponsor price" id="sponsor_price" type="text"  value=""  class="validate">
                        <label for="sponsor_price">Sponsor price</label>
                    </div>

                </div>
                <center><i><a href="#">The settings will reflect globally in all sub-categories</a></i></center>
            </div>

        </div>
        <div class="modal-footer">
            <a class="waves-effect waves-light btn edit_sub_cat" style="margin-right:19px;">UPDATE</a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

    <script src="/assets/admin/toastr.js"></script>
    <script src="/assets/admin/loadingoverlay.js"></script>
    <script src="/assets/admin/loadingoverlay.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });

        $(document).ready(function(){

            $('.test8').click(function(){
                var checked = '';
                if($(this).is(':checked') == true){
                    checked = 'on';
                }else{
                    checked = 'off';
                }
                var category = $(this).attr('data-id');
                $.ajax({
                    url: '/admin/disable/category/for/all/location',
                    type: 'POST',
                    dataType: 'json',
                    data:{checked:checked,category:category},
                    beforeSend: function () {

                    },
                    complete: function () {

                    },
                    success: function (data) {

                        if (data.status == 'success') {
                            $('.disable_div').css('display','block');
                            $('#disable_msg').html(data.msg);
                        }
                        else if (data.status == 'error') {

                        }
                    }

                });

            });

            $('.view_cat').click(function(){
                var current_element = $(this);
                var cat_id = current_element.attr('data-id');

                $.ajax({
                    url: '/admin/view/category',
                    type: 'POST',
                    dataType: 'json',
                    data:{cat_id:cat_id},
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data) {

                        if (data.status == 'success') {

                            $('.cat_name').html('');
                            var cat_name = data.msg;
                            $('.cat_name').html(cat_name);

                            $('.edit_cat').attr('data-id','');
                            $('.edit_cat').attr('data-catName','');
                            var id = data.id;
                            $('.edit_cat').attr('data-id',id);
                            $('.edit_cat').attr('data-catName',cat_name);

                            var disclaimer = data.disclaimer;

                            $('#test1').prop('checked', false);
                            $('#test2').prop('checked', false);
                            $('#test3').prop('checked', false);
                            $('#test4').prop('checked', false);
                            $('#test5').prop('checked', false);
                            $('#test6').prop('checked', false);
//                            $('#test7').prop('checked', false);
                            $('#test9').prop('checked', false);
                            $('#test11').prop('checked', false);
                            $('#test12').prop('checked', false);
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
                                            $('#test11').prop('checked', true);
                                        }
                                        break;
                                    case "brief":
                                        if(value == "on") {
                                            $('#test12').prop('checked', true);
                                        }
                                        break;
//                                    case "post_count":
//                                        if(value == "on") {
//                                            $('#test7').prop('checked', true);
//                                        }
//                                        break;
                                    case "posting_rules":
                                        if(value == "on") {
                                            $('#test9').prop('checked', true);
                                        }
                                        break;
                                }

                            });

                        }
                        else if (data.status == 'error') {

                            $('.cat_name').html('');
                            $('#test1').prop('checked', false);
                            $('#test2').prop('checked', false);
                            $('#test3').prop('checked', false);
                            $('#test4').prop('checked', false);
                            $('#test5').prop('checked', false);
                            $('#test6').prop('checked', false);
//                            $('#test7').prop('checked', false);
                            $('#test9').prop('checked', false);
                            $('#test11').prop('checked', false);
                            $('#test12').prop('checked', false);
                        }
                    }

                });


            });

            $('.edit_cat').click(function(){

                var current_element = $(this);
                var cat_id = current_element.attr('data-id');
                var cat_name = current_element.attr('data-catName');

                var id = [];
                $(':checkbox:checked').each(function (i, v) {
                    id[i] = $(this).attr('id') + '=>' + $(this).val();
                });
                var formdata = new FormData();
                formdata.append('cat_id', cat_id);
                formdata.append('options', id);
                formdata.append('cat_name', cat_name);

                $.ajax({
                    url: '/admin/edit/category',
                    type: 'POST',
                    dataType: 'json',
                    data:formdata,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data) {

                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 2000});
                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 2000});
                        }

                    }

                });

            });

            $('.delete_cat').click(function(){
                if (confirm("Are you sure You want to delete this Category?")) {
                    var current_element = $(this);
                    var cat_id = current_element.attr('data-id');
                    var cat_name = current_element.attr('data-cat');

                    $.ajax({
                        url: '/admin/delete/category',
                        type: 'POST',
                        dataType: 'json',
                        data: {cat_id: cat_id,cat_name:cat_name},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {

                                toastr.success(data.msg, {timeOut: 2000});
                                $(current_element).parent().parent().parent().parent().parent().parent().remove();
                                //    location.reload();

                            }
                            else if (data.status == 'error') {

                                toastr.error(data.msg, {timeOut: 2000});
                            }

                        }


                    });
                }

            });

            $('.view_sub_cat').click(function(){
                var current_element = $(this);
                var sub_cat_id = current_element.attr('data-id');

                $.ajax({
                    url: '/admin/view/sub_category',
                    type: 'POST',
                    dataType: 'json',
                    data:{sub_cat_id:sub_cat_id},
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data) {

                        if (data.status == 'success') {


                            $('#sub_cat_name').html('');
                            $('#city_price').val('');
                            $('#sponsor_price').val('');

                            $('#sub_cat_name').html(data.msg.cat_name);
                            $('#city_price').val(data.msg.city_price);
                            $('#sponsor_price').val(data.msg.sponsor_price);
                            $('.edit_sub_cat').attr('data-id',data.msg.cat_id);
                            $('.edit_sub_cat').attr('data-subCatName',data.msg.cat_name);


                        }
                        else if (data.status == 'error') {

                            $('.cat_name').html('');
                            $('#city_price').val('');
                            $('#sponsor_price').val('');
                        }
                    }

                });


            });

            $('.edit_sub_cat').click(function(){

                var current_element = $(this);
                var sub_cat_id = current_element.attr('data-id');
                var sub_cat_name = current_element.attr('data-subCatName');
                var city_price = $('#city_price').val();
                var sponsor_price = $('#sponsor_price').val();

                var formdata = new FormData();
                formdata.append('sub_cat_id', sub_cat_id);
                formdata.append('city_price', city_price);
                formdata.append('sponsor_price', sponsor_price);
                formdata.append('sub_cat_name', sub_cat_name);
                $.ajax({
                    url: '/admin/edit/sub_category',
                    type: 'POST',
                    dataType: 'json',
                    data:formdata,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $.LoadingOverlay("show");
                    },
                    complete: function (xhr, status) {
                        $.LoadingOverlay("hide");
                    },
                    success: function (data) {

                        if (data.status == 'success') {
                            toastr.success(data.msg, {timeOut: 2000});
                        }
                        else if (data.status == 'error') {
                            toastr.error(data.msg, {timeOut: 2000});
                        }
                    }
                });

            });

            $('.delete_sub_category').click(function(){

                if (confirm("Are you sure You want to delete this Sub-category?")) {
                    var current_element = $(this);
                    var sub_cat_id = current_element.attr('data-id');
                    var sub_cat_name = current_element.attr('data-catName');

                    $.ajax({
                        url: '/admin/delete/sub_category',
                        type: 'POST',
                        dataType: 'json',
                        data: {sub_cat_id: sub_cat_id,sub_cat_name:sub_cat_name},
                        beforeSend: function () {
                            $.LoadingOverlay("show");
                        },
                        complete: function (xhr, status) {
                            $.LoadingOverlay("hide");
                        },
                        success: function (data) {

                            if (data.status == 'success') {

                                toastr.success(data.msg, {timeOut: 2000});
                                $(current_element).parent().prev().prev().remove();
                                $(current_element).parent().prev().remove();
                                $(current_element).parent().remove();
                            }
                            else if (data.status == 'error') {
                                toastr.error(data.msg, {timeOut: 2000});
                            }
                        }
                    });
                }

            });
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>