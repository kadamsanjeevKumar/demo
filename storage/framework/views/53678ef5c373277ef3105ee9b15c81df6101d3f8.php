<?php $__env->startSection('title'); ?> Page20 Add location <?php $__env->stopSection(); ?>
<?php $__env->startSection('manage_locations','active'); ?>
<?php $__env->startSection('manage_locations_add','active'); ?>
<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <style>
        .bold {
            font-weight: bold !important;
        }
        .btn, .btn-large, .btn-flat {
            padding: 0 14px !important;
        }
        .btn.disabled{
            background-color:#ede2fd !important;
            color:#333 !important;
        }
        @media (min-width:768px) and (max-width: 980px){
            .logo-res{
                margin-left:40px !important;
                margin-top:10px !important;
            }
            .remove{
                margin-top: 45px !important;
                right: 36px !important;
            }
            .add{
                right:37px !important;
            }
        }
        @media (min-width:320px) and (max-width: 767px){
            .logo-res{
                margin-left:40px !important;

            }
            .add{
                right:5px !important;
            }
            .remove{
                margin-top:45px !important;
            }
        }
        .remove{
            position:fixed;
            right:21px;
        }
        .add{
            position:fixed;
            margin-left:25px;
        }
        .remove:hover{
            position:fixed;
            right:21px;

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

    <form action="/admin/add/location" id="form" method="post">
        <div class="row">
            <div class="col s9 m9">
                <h5><b>ADD LOCATION</b></h5>
            </div>

            <div class="col s3" id="add_multi_state">
                <div class="form-group form-md-line-input form-md-floating-label has-success col s9">

                    <label for="form_control_1" style="width: 80%; background:none;"></label>

                    <button class="btn btn-default add" type="button" id="add_btn" style="position:fixed;">Add State</button>
                    <label for="form_control_1" style="width: 80%; background:none;"></label>
                    <button class="btn btn-default remove" type="button" id="remove_btn2" style="position:fixed;right:6px;">Remove</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 30px; margin-top: 20px;">
            <div class="col s12">
                <div class="input-field col s9">
                    <select id="country_ajax" name="country_ajax">
                        <option value="select" disabled>Choose your option</option>
                        <option value="select">Select Country</option>
                        <?php if(!empty($places)): ?>
                            <?php foreach($places as $place): ?>
                                <?php if($place->state_id == 0 && $place->city_id == 0): ?>
                                    <option value="<?php echo e($place->place_id); ?>">
                                        <?php echo e($place->place_name); ?>

                                    </option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <option id="add_country" value="0">Add New Country</option>
                    </select>
                    <label>Country</label>
                </div>
            </div>
        </div>

        <div id="country_name" class="row" style="margin-left: 30px; margin-top: 20px;">
            <div class="col s12">
                <div class="input-field col s9">
                    <label for="form_control_1">Country Name</label>
                    <input type="text" name="country_name" maxlength="50" class="form-control country_keyup" id="form_control_1" value="<?php echo e(old('country_name')); ?>" required>
                    <span id="country_error" style="color: red;background-color: gainsboro"></span>

                </div>
            </div>
        </div>

        <div class="row" id="state" style="margin-left: 30px; margin-top: 20px;">
            <div class="col s12">
                <div class="input-field col s9">
                    <select id="state_ajax" name="state_ajax">
                    </select>
                    <label>State</label>
                </div>
            </div>
        </div>
        <div class="row" id="state_name" style="margin-left: 30px; margin-top: 20px;">
            <div class="col s12">
                <div class="input-field col s9">
                    <label for="form_control_1">State Name</label>
                    <input type="text" class="form-control" maxlength="50" id="form_control_1" name="stateName_0" value="<?php echo e(old('stateName_0')); ?>" required>
                </div>
            </div>
        </div>

        <div class="row" id="added_city" style="margin-left:30px;margin-top:20px;">
            <div class="col s12">
                <h6 style="margin-left: 13px;">Added Cities</h6>
                <div class="col s9" id="city_ajax">
                </div>
            </div>
        </div>


        <div class="row" id="city" style="margin-left: 30px; margin-top: 20px;">
            <div class="col s12">
                <div class="input-field col s8">
                    <label for="form_control_1">City</label>
                    <input type="text" class="form-control" maxlength="30" name="cityName_0" id="form_control_1" value="<?php echo e(old('cityName_0')); ?>">
                </div>
                <div class="col s1" style="text-align:right;">
                    <div class="form-group form-md-line-input form-md-floating-label has-success">
                        <button class="btn btn-default" type="button" id="add_btn2"> +</button>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top:20px;margin-left:0px;">
                <div class="col s12">
                    <div class="form-group form-md-line-input form-md-floating-label has-success col s9"
                         style="margin-top:25px;">
                        <div id="addproduct-container2"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-left:30px;margin-top:20px;">
            <div class="col s12">
                <div class="form-group form-md-line-input form-md-floating-label has-success col s9">
                    <div id="addproduct-container" class="addproduct-container"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s10 text-center">
                <center><input class="btn btn-default saveAllLocations" type="submit" value="SAVE"></center>
            </div>
        </div>

    </form>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>

    <script src="/assets/admin/toastr.js"></script>
    <script src="/assets/admin/loadingoverlay.js"></script>
    <script src="/assets/admin/loadingoverlay.min.js"></script>
    <script src="/assets/admin/js/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>

    <script>
        $(document).ready(function () {
            $("#form").validate({
                rules: {
                    country_name: "required",
                    stateName_0: "required"
                },
                messages: {
                    country_name: "Please enter country name",
                    stateName_0: "please enter state name"
                },
                errorElement: "em",
                errorPlacement: function (error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    }
                    else if (element.prop("type") === "radio") {
                        error.insertAfter(element.parent("label"));
                    }

                    else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).parents(".input-field").addClass("has-error").removeClass("has-success");
                    $('#country_error').hide();
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".input-field").addClass("has-success").removeClass("has-error");
                }
            });


        });
    </script>

    <script>
        //        var checkForLocationError = function () {
        //            $.each($('div.state-result'), function (i, v) {
        //                console.log($(v).find('i').html());
        //                if ($(v).find('i').html() == 'close') {
        //                    $('.saveAllLocations').prop('disabled', true);
        //                    return false;
        //                } else if ($(v).find('i').html() == 'done') {
        //                    $('.saveAllLocations').prop('disabled', false);
        //                }
        //            });
        //        };

        $(document).ready(function () {

//            Start-------    Add and remove - state and city--------

            $('select').material_select();
            var i = 1;
            var state_count = 1;

            $("#add_btn").click(function () {
                $("#addproduct-container").append('<div class="row"><div class="addproduct-container"><div class="form-group form-md-line-input form-md-floating-label has-success">' +
                        '<label for="form_control_1">State</label><input type="text" maxlength="50" class="form-control" name="stateName_' + state_count + '" value="" id="form_control_1" required></div>' +
                        '<div class="form-group form-md-line-input form-md-floating-label has-success"><div class="col s11" style="padding:0px;">' +
                        '<label for="form_control_1">City</label><input type="text" class="form-control" id="form_control_1" maxlength="30" name="cityName_' + i + '" ></div>' +
                        '<div class="col s1" style="padding:0px;text-align:right;"><button class="btn btn-default add_btn_again" type="button" >' +
                        ' +</button></div></div></div></div>');
                i++;
                state_count++;
            });

            $("#remove_btn2").click(function () {
                $("#addproduct-container").children().last().remove();
//                $("#addproduct-container").children(':nth-last-child(1)').remove();
//                $("#addproduct-container").children(':last-child').remove();
//                checkForLocationError();
            });

            $(document).on('click', '.add_btn_again', function () {
                var element = $(this).parents('.addproduct-container:first');
                $(element).append('<div class="form-group form-md-line-input form-md-floating-label has-success city-div">' +
                        '<div class="col s5" style="padding:0px;"><label for="form_control_1"></label><input type="text" ' +
                        'class="form-control" maxlength="30" name="cityName_' + i + '" id="form_control_1" required></div><div class="col s1" style="text-align:center;padding:0px;">' +
                        '<button class="btn btn-default remove-city" type="button" style="" > -</button></div></div>');
                i++;
            });

//                End------ Add and Remove - state and city --------

//                Start -------------- Add and remove cities -------------------


            $(document).on('click', '#add_btn2', function () {
                $("#addproduct-container2").append('<div class="form-group form-md-line-input form-md-floating-label has-success city-div">' +
                        '<div class="col s5" style="padding:0px;"><label for="form_control_1"></label><input type="text" ' +
                        'class="form-control" maxlength="30" name="cityName_' + i + '" id="form_control_1" required></div><div class="col s1" style="text-align:center;padding:0px;">' +
                        '<button class="btn btn-default remove-city" type="button" style="" > -</button></div></div>');
                i++;
            });

            $(document).on('click', '.remove-city', function () {
                $(this).parents('.city-div').remove();
//                checkForLocationError();
            });

//                End -------------- Add and remove cities -------------------


        });
    </script>

    <script>

        $(document).ready(function () {
            $('#country_name').hide();
            $('#state_name').hide();
            $('#city').hide();
            $('#added_city').hide();
            $('#state').hide();
            $('#add_multi_state').hide();
            $('.saveAllLocations').prop('disabled', true);

            $('#add_country').click(function (event) {
                $('#country_name').show();
                $('#state_name').show();
                $('#add_multi_state').show();
                $('#city').show();
                $('#state').hide();
                $('#added_city').hide();
            });

            $('#add_state').click(function (event) {
                $('#state_name').show();
                $('#add_multi_state').hide();
                $('#city').show();
                $('#added_city').hide();
            });

            $("#country_ajax").change(function () {

                var country_ajax = $("#country_ajax").val();

                if (country_ajax == 'select') {

                }
                else {
                    var formdata = new FormData();
                    formdata.append('country', country_ajax);

                    $.ajax({
                        url: '/admin/get/state',
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
                                $('#state').show();
//                            $('#state_ajax').show();
                                $('#city').hide();
                                $('#country_name').hide();
                                $('#state_name').hide();
                                $('#added_city').hide();
                                $('#add_multi_state').hide();
                                $('#addproduct-container').hide();
                                $('.saveAllLocations').prop('disabled', true);

                                var data = data.msg;
                                var html = "<option value='select' disabled>States</option><option value='select'>Select State</option>";

                                $.each(data, function (index, value) {
                                    html += "<option value='" + value['place_id'] + "'>" + value['place_name'] + "</option>";
                                });
                                html += " <option value='0' id='add_state'>Add New State</option>";

                                $("#state_ajax").html(html);
                                $("#state_ajax").material_select();
                            }
                            else if (data.status == 'error') {
                                var html = "";
                                $("#state_ajax").html(html);

                                $('#state').hide();
                                $('#country_name').show();
                                $('#state_name').show();
                                $('#add_multi_state').show();
                                $('#addproduct-container').show();
                                $('#city').show();
                                $('#added_city').hide();
//                            $('.saveAllLocations').prop('disabled', true);
                                $('.saveAllLocations').prop('disabled', false);
//                        toastr.error(data.msg, {timeOut: 2000});
                            }

                        }
                    });
                }

            });

            $("#state_ajax").change(function () {

                var state_ajax = $("#state_ajax").val();

                if (state_ajax == 'select') {

                }
                else {
                    var formdata = new FormData();
                    formdata.append('state', state_ajax);

                    $.ajax({
                        url: '/admin/get/city',
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
                                if (data.msg == 'No city') {
                                    $('#added_city').hide();
                                    $('#country_name').hide();
                                    $('#state_name').hide();
                                    $('#add_multi_state').hide();
                                    $('#addproduct-container').hide();
                                    $('#city').show();
                                    $('.saveAllLocations').prop('disabled', false);
                                }
                                else {
                                    $('#added_city').show();
                                    $('#country_name').hide();
                                    $('#state_name').hide();
                                    $('#add_multi_state').hide();
                                    $('#addproduct-container').hide();
                                    $('#city').show();
                                    $('.saveAllLocations').prop('disabled', false);

                                    var data = data.msg;
                                    var html = "";

                                    $.each(data, function (index, value) {
                                        if (value['place_name'] != "") {
                                            $('#added_city').show();
                                            html += "<a class='btn disabled' style='margin-right:5px;margin-top:5px;'>" + value['place_name'] + "</a>";
                                        }
                                        else {
                                            $('#added_city').hide();
                                        }
                                    });

                                    $("#city_ajax").html(html);
                                }

//                            $("#city_ajax").material_select();
                            }
                            else if (data.status == 'error') {

//                            var html = "";
//                            $("#city_ajax").html(html);
                                $('#state_name').show();
                                $('#city').show();
                                $('#add_multi_state').show();
                                $('#addproduct-container').show();
                                $('#added_city').hide();
                                $('.saveAllLocations').prop('disabled', false);

//                        toastr.error(data.msg, {timeOut: 2000});
                            }

                        }
                    });
                }

            });

            var i = 1;

            $('#cities').click(function () {

                var html = "<div><br><input type='text' name='city_name" + i + "'><a href='#' class='remove_field'> Remove</a><br></div>";

                $('#add_city').append(html);
                i++;

            });

            $('#add_city').on("click", ".remove_field", function (e) {

                e.preventDefault();
                $(this).parent('div').remove();
            })

        });

        $(document).ready(function () {
            $('#country_error').hide();
            var x_timer;
            $(document).on('keyup', '.country_keyup', function (e) {
                clearTimeout(x_timer);
                var city_name = $(this).val();
                x_timer = setTimeout(function () {
                    check_cityname_ajax(city_name);
                }, 1000);

            });

            function check_cityname_ajax(city_name) {

                $.ajax({
                    url: '/admin/check/location',
                    type: 'POST',
                    dataType: 'json',
                    data: {name: city_name},
                    success: function (data) {
                        if (data.status == 'success') {
                            $('#country_error').show();
                            $('#country_error').html(data.msg);
                            $('.saveAllLocations').hide();
                        }
                        else if (data.status == 'error') {
                            $('#country_error').hide();
                            $('.saveAllLocations').show();
                        }
                    }
                });

            }

        });

        //                $(document).ready(function () {
        //                    var x_timer;
        //
        //                    $(document).on('keyup', '.form-control', function (e) {
        //
        //                        clearTimeout(x_timer);
        //                        var city_name = $(this).val();
        //                        var currentObj = this;
        //        //                console.log('hello', city_name, this);
        //                        x_timer = setTimeout(function () {
        //                            check_cityname_ajax(currentObj, city_name);
        //                        }, 1000);
        //                    });
        //
        //                    function check_cityname_ajax(selector, city_name) {
        //                        var formdata = new FormData();
        //                        formdata.append('name', city_name);
        //        //                console.log($(selector).attr('class'));
        //                        $.ajax({
        //                            url: '/admin/check/location',
        //                            type: 'POST',
        //                            dataType: 'json',
        //                            data: formdata,
        //                            processData: false,
        //                            contentType: false,
        //                            success: function (data) {
        //                                if (data.status == 'success') {
        //        //                            console.log($(selector).siblings('.material-icons').html());
        //
        //        //                            $(selector).siblings('.state-result').html('');
        //        //                         $(selector).parent().append('<span class="state-result">' + data.image + data.msg + '</span>');
        //
        //
        //                                    $(selector).parent().siblings('.state-result').remove();
        //                                    $(selector).parent().parent().append('<div class="col s3 state-result"> <i class="material-icons" style="line-height:3;color:red;">' + data.image + '</i><span>' + data.msg + '</span> </div>');
        //                                }
        //                                else if (data.status == 'error') {
        //
        //                                    //                            $(selector).siblings('.state-result').html('');
        //        //                           $(selector).parent().append('<span class="state-result">' + data.image + '</span>');
        //
        //                                    $(selector).parent().siblings('.state-result').remove();
        //                                    $(selector).parent().parent().append(' <div class="col s3 state-result"> <i class="material-icons" style="line-height:3;color:green;">' + data.image + '</i></div>');
        //                                }
        //
        //        //                        $.each($('span.state-result'), function (i, v) {
        //        ////                            console.log($(v).find('img').attr('src'));
        //        //                            if ($(v).find('img').attr('src') == '/assets/admin/images/not-available.png') {
        //        //                                $('.saveAllLocations').prop('disabled', true);
        //        //                                return false;
        //        //                            } else if ($(v).find('img').attr('src') == '/assets/admin/images/available.jpeg') {
        //        //                                $('.saveAllLocations').prop('disabled', false);
        //        //                            }
        //        //                        });
        //                                checkForLocationError();
        //
        //        //                        $.each($('div.state-result'), function (i, v) {
        //        //                            console.log($(v).find('i').html());
        //        //                            if ($(v).find('i').html() == 'close') {
        //        //                                $('.saveAllLocations').prop('disabled', true);
        //        //                                return false;
        //        //                            } else if ($(v).find('i').html() == 'done') {
        //        //                                $('.saveAllLocations').prop('disabled', false);
        //        //                            }
        //        //                        });
        //                            }
        //                        });
        //                    }
        //
        //
        //                });


    </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>