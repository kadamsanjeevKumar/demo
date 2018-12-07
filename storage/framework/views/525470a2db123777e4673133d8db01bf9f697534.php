<?php $__env->startSection('title'); ?> Page20 Edit category   <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_cat_disable','active'); ?>
<?php $__env->startSection('manage_cat','active'); ?>

<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .bold {
            font-weight: bold !important;
        }

        .tabs .indicator {
            background-color: #533687;
        }

        .tabs .tab a:hover {
            color: #533687;
        }

        .countries {
            color: #351687;
            background-color: #dcdbdd;
            margin-bottom: 1px;
        }

        .states {
            background-color: #e9e9ea;
            color: #585858;
            margin-bottom: 1px;
        }

        .list-inline {
            display: inline;
            margin-right: 175px;
        }

        .cities {
            color: #333;
        }

        .cities:hover {
            color: #7216ef;
        }

        .custom-collapse {
            margin: 0.5rem 1rem 1rem !important;
        }

        .custom-collapse1 {
            box-shadow: none !important;
        }

        .select-dropdown {
            overflow-y: auto !important;
        }

        @media (min-width: 768px) and (max-width: 980px) {
            .logo-res {
                margin-left: 40px !important;
                margin-top: 10px !important;
            }
        }

        @media (min-width: 320px) and (max-width: 767px) {
            .logo-res {
                margin-left: 40px !important;
            }
        }

        #chart-dashboard .card {
            overflow: visible;
        }

        .close-adjust {
            padding: 10px 18px;
            background: #eee;
            color: #351969;
            border-radius: 40px;
            float: right;
            font-family: sans-serif
        }

        .close-adjust:hover {
            padding: 10px 18px;
            background: #351969;
            color: #fff;
            border-radius: 40px;
            float: right;
            font-family: sans-serif
        }

        .chip {
            margin-bottom: 10px;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>

    <div id="card-alert" class="card green lighten-5">
        <?php if(Session::has('sucessMessage')): ?>
            <div class="card-content green-text">
                <p><?php echo e(Session::get('sucessMessage')); ?></p>
            </div>
            <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        <?php endif; ?>
    </div>
    <div id="card-alert" class="card red lighten-5">
        <?php if(Session::has('error')): ?>
            <div class="card-content red-text">
                <p><?php echo e(Session::get('error')); ?></p>
            </div>
            <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        <?php endif; ?>
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
            <h5><b>DISABLE CATEGORIES</b></h5>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12">
            <div class="col s12 m6" style="padding-left: 24px;">
                <div class="card" style="min-height: 213px;">
                    <h6 style="padding-top:15px;"><b>
                            <center>CATEGORIES</center>
                        </b></h6>
                    <div class="input-field col s12 m12">
                        <select id="category">
                            <option value="" disabled selected>Choose Category</option>
                            <?php if(!empty($categories)): ?>
                                <?php foreach($categories as $category): ?>
                                    <option value="<?php echo e($category->cat_id); ?>"><?php echo e($category->cat_name); ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <optgroup></optgroup>
                        </select>
                        <label>Category</label>
                    </div>
                    <span id="cat_error" style="color: red;margin-left: 10px;font-size: 15px;"></span>
                </div>
            </div>

            <div class="col s12 m6" style="padding-right: 24px;">
                <div class="card" style="min-height: 213px;">
                    <h6 style="padding-top:15px;"><b>
                            <center>LOCATIONS</center>
                        </b></h6>
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs liOfLocation">
                                <li class="tab col s3">
                                    <a class="active" href="#test1">Country</a>
                                </li>
                                <li class="tab col s3 get_states">
                                    <a href="#test2">State</a>
                                </li>
                                <li class="tab col s3 get_city">
                                    <a href="#test3">City</a>
                                </li>
                            </ul>
                        </div>

                        <div id="test1" class="col s12">
                            <div class="input-field col s12 m12">
                                <select id="countrydrop" style="height:50px;overflow:auto;">
                                    <option value="" disabled selected>Choose Country</option>
                                    <?php if(!empty($countries)): ?>
                                        <?php foreach($countries as $country): ?>
                                            <option value="<?php echo e($country->place_id); ?>"><?php echo e($country->place_name); ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                                <label>Country</label>
                            </div>
                            <?php /*<div id="loader_ajax2" class="loader" style="">*/ ?>
                                <?php /*<center><img src="/assets/user/images/ajax-loader.gif"*/ ?>
                                             <?php /*style="height: 100px;width: 100px;"></center>*/ ?>
                            <?php /*</div>*/ ?>
                        </div>
                        <div id="test2" class="col s12">
                            <div class="input-field col s12 m12">
                                <select id="statedrop" style="height:50px;overflow-y:scroll;">
                                    <option value="" disabled selected>Choose State</option>
                                </select>
                                <label>State</label>
                            </div>
                            <?php /*<div id="loader_ajax" class="loader" style="">*/ ?>
                                <?php /*<center><img src="/assets/user/images/ajax-loader.gif"*/ ?>
                                             <?php /*style="height: 100px;width: 100px;"></center>*/ ?>
                            <?php /*</div>*/ ?>
                        </div>
                        <div id="test3" class="col s12">
                            <div class="input-field col s12 m12">
                                <select id="citydrop" style="height:50px;overflow-y:scroll;">
                                    <option value="" disabled selected>Choose City</option>
                                </select>
                                <label>City</label>
                            </div>
                            <?php /*<div id="loader_ajax1" class="loader" style="">*/ ?>
                                <?php /*<center><img src="/assets/user/images/ajax-loader.gif"*/ ?>
                                             <?php /*style="height: 100px;width: 100px;"></center>*/ ?>
                            <?php /*</div>*/ ?>
                        </div>
                        <span id="location_error" style="color: red;margin-left: 20px;font-size: 15px;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12 right-align">
            <img id="loader_ajax" class="loader" src="/assets/user/images/ajax-loader.gif" style="height: 100px;width: 100px;">
            <span id="time" style="color:cornflowerblue;margin-right: 10px;"></span>
            <a class="waves-effect waves-light btn red disable_click" style="margin-right: 24px; margin-bottom: 10px;">Disable</a>
        </div>
    </div>
    <div style="padding-left: 20px;">
        <span id="main_error" style="color: red;font-size: 16px;"></span>
    </div>
    <div class="row center-align">
        <div class="col s12 m12 l12">
            <h5>DISABLED LOCATION DETAILS</h5>
        </div>
    </div>
    <div class="row">
        <div class="col m12 s12 l12">
            <ul class="collapsible popout disabled_ul" data-collapsible="accordion">
                <?php if(!empty($categories)): ?>
                    <?php foreach($categories as $category): ?>
                <li>
                    <div class="collapsible-header category_click" data-id="<?php echo e($category->cat_id); ?>" style="background-color:#eee;"><?php echo e($category->cat_name); ?></div>
                    <div class="collapsible-body" style="padding: 15px;">
                                        <span class="disabled_location">
                                            <?php if(!empty($category->places)): ?>
                                               <?php foreach($category->places as $location): ?>
                                                <div data-id='<?php echo e($location->place_id); ?>' class='chip'><?php echo e($location->place_name); ?><i data-catid="<?php echo e($category->cat_id); ?>" data-id='<?php echo e($location->place_id); ?>' class='close material-icons'>close</i></div>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                        </span>
                    </div>
                </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
            </ul>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>

    <script src="/assets/admin/toastr.js"></script>
    <script src="/assets/admin/loadingoverlay.js"></script>
    <script src="/assets/admin/loadingoverlay.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.collapsible').collapsible();
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
            $('select').material_select();
        });
    </script>
    <script>
        var state = 0;
        var city = 0;
        var i = 0;

        $(document).ready(function () {
            $('#loader_ajax').hide();
            $('#loader_ajax1').hide();
//            $('#loader_ajax2').hide();

            $('.get_states').click(function () {

                if (state == 0) {
                    $.ajax({
                        url: '/admin/get/disable/state',
                        type: 'POST',
                        dataType: 'json',
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

                                var category = data.msg;

                                var html = "<option value='' disabled selected>Choose State</option>";

                                $.each(category, function (index, value) {
                                    html += " <option value='' disabled>" + index + "</option>";
                                    $.each(value, function (indexs, values) {
                                        html += "<option value='" + values['place_id'] + "'>" + values['place_name'] + "</option>";
                                    });

                                });

                                $("#statedrop").html(html);
                                $("#statedrop").material_select();

                                state++;

                            }
                            else if (data.status == 'error') {
                            }
                        }
                    });
                }
            });

            $('.get_city').click(function () {
                if (city == 0) {
                    $.ajax({
                        url: '/admin/get/disable/city',
                        type: 'POST',
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $('#loader_ajax').show();
                        },
                        complete: function () {
                            $('#loader_ajax').hide();
                        },
                        success: function (data, status) {

                            if (data.status == 'success') {

                                var category = data.msg;
                                var html = "<option value='' disabled selected>Choose City</option>";

                                $.each(category, function (index, value) {
                                    html += " <option value='' disabled>" + index + "</option>";
                                    $.each(value, function (indexs, values) {
                                        html += " <option value='' disabled>" + indexs + "</option>";
                                        $.each(values, function (key, val) {
                                            html += "<option value='" + val['place_id'] + "'>" + val['place_name'] + "</option>";
                                        });

                                    });

                                });

                                $("#citydrop").html(html);
                                $("#citydrop").material_select();

                                city++;

                            }
                            else if (data.status == 'error') {
                            }

                        }
                    });
                }
            });

            $('.disable_click').click(function () {

                var category = $('#category').val();
                if ($.isNumeric(category) == false) {
                    $('#cat_error').html('Please choose category');
                } else {

                    $('#cat_error').html('');
                    var name = '';

                    $('.liOfLocation >li').children().map(function () {
                        var element = $(this);
                        if ($(element).hasClass('active')) {
                            name = $(element).html();
                        }
                    });
                    var formdata = new FormData();
                    $('#main_error').html('');
                    if (name.trim() == 'Country') {
                        var country = $('#countrydrop').val();
                        if ($.isNumeric(country) == false) {
                            $('#location_error').html('Please choose location');
                        } else {
                            $('#location_error').html('');
                            formdata.append('category', category);
                            formdata.append('country', country);


                            $.ajax({
                                url: '/admin/disable/CountryStateCity/Category',
                                type: 'POST',
                                dataType: 'json',
                                data: formdata,
                                processData: false,
                                contentType: false,
                                beforeSend: function () {
                                    $('#loader_ajax').show();
                                },
                                complete: function () {
                                    $('#loader_ajax').hide();
                                },
                                success: function (data, status) {

                                    if (data.status == 'success') {
//                                        Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                        $('#main_error').html(data.msg);
                                        var id = '';
                                        var div = '';

                                        $('.disabled_ul >li').map(function(){
                                            id = $(this).find('.category_click').attr('data-id');
                                            if(id == category){
                                               div = $(this).children().find('.disabled_location');
                                            }

                                        });

                                        var disabledLocation = data.location;
                                        var html = "";
                                        $.each(disabledLocation, function (index, value) {
                                            html += " <div data-id='" + value['place_id'] + "' class='chip'>" + value['place_name'] + "<i data-catid='"+category+"' data-id='" + value['place_id'] + "' class='close material-icons'>close</i></div>";
                                        });
                                        $(div).html(html);

                                    }
                                    else if (data.status == 'error') {
//                                        Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                        $('#main_error').html(data.msg);

                                    }

                                }
                            });
                        }
                    }
                    else if (name.trim() == 'State') {
                        var state = $('#statedrop').val();
                        if ($.isNumeric(state) == false) {
                            $('#location_error').html('Please choose location');
                        } else {
                            $('#location_error').html('');

                            formdata.append('category', category);
                            formdata.append('state', state);

                            $.ajax({
                                url: '/admin/disable/CountryStateCity/Category',
                                type: 'POST',
                                dataType: 'json',
                                data: formdata,
                                processData: false,
                                contentType: false,
                                beforeSend: function () {
                                    $('#loader_ajax').show();
                                },
                                complete: function () {
                                    $('#loader_ajax').hide();
                                },
                                success: function (data, status) {

                                    if (data.status == 'success') {
//                                        Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                        $('#main_error').html(data.msg);
                                        var id = '';
                                        var div = '';
                                        $('.disabled_ul >li').map(function(){
                                            id = $(this).find('.category_click').attr('data-id');
                                            if(id == category){
                                                div = $(this).children().find('.disabled_location');
                                            }

                                        });

                                        var disabledLocation = data.location;
                                        var html = "";
                                        $.each(disabledLocation, function (index, value) {
                                            html += " <div data-id='" + value['place_id'] + "' class='chip'>" + value['place_name'] + "<i data-catid='"+category+"' data-id='" + value['place_id'] + "' class='close material-icons'>close</i></div>";
                                        });

                                        $(div).html(html);
                                    }
                                    else if (data.status == 'error') {
//                                        Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                        $('#main_error').html(data.msg);
                                    }

                                }
                            });
                        }
                    }
                    else if (name.trim() == 'City') {
                        var city = $('#citydrop').val();
                        if ($.isNumeric(city) == false) {
                            $('#location_error').html('Please choose location');
                        } else {
                            $('#location_error').html('');

                            formdata.append('category', category);
                            formdata.append('city', city);

                            $.ajax({
                                url: '/admin/disable/CountryStateCity/Category',
                                type: 'POST',
                                dataType: 'json',
                                data: formdata,
                                processData: false,
                                contentType: false,
                                beforeSend: function () {
                                    $('#loader_ajax').show();
                                },
                                complete: function () {
                                    $('#loader_ajax').hide();
                                },
                                success: function (data, status) {

                                    if (data.status == 'success') {
//                                        Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                        $('#main_error').html(data.msg);
                                        var id = '';
                                        var div = '';
                                        $('.disabled_ul >li').map(function(){
                                            id = $(this).find('.category_click').attr('data-id');
                                            if(id == category){
                                                div = $(this).children().find('.disabled_location');
                                            }

                                        });

                                        var disabledLocation = data.location;
                                        var html = "";
                                        $.each(disabledLocation, function (index, value) {
                                            html += " <div data-id='" + value['place_id'] + "' class='chip'>" + value['place_name'] + "<i data-catid='"+category+"' data-id='" + value['place_id'] + "' class='close material-icons'>close</i></div>";
                                        });

                                        $(div).html(html);
                                    }
                                    else if (data.status == 'error') {
//                                        Materialize.toast('<span><b>' + data.msg + '</b></span>', 3000);
                                        $('#main_error').html(data.msg);
                                    }

                                }
                            });
                        }

                    }
                }
            });

            $(document.body).on('click','.close',function(){
                var id = $(this).attr('data-id');
                var catid = $(this).attr('data-catid');
                $('#main_error').html('');
                $.ajax({
                    url: '/admin/remove/disable/location',
                    type: 'POST',
                    dataType: 'json',
                    data:{id:id,cat_id:catid},
                    beforeSend: function () {

                    },
                    complete: function (xhr, status) {

                    },
                    success: function (data, status) {

                        if (data.status == 'success') {
                            $('#main_error').html(data.msg);
                        }
                        else if (data.status == 'error') {
                            $('#main_error').html(data.msg);
                        }
                    }
                });
            });

        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>