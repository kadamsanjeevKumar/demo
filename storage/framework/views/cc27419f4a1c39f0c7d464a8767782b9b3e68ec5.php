<?php $__env->startSection('title'); ?> Page20 view posted Ads <?php $__env->stopSection(); ?>
<?php $__env->startSection('message_edit','active'); ?>
<?php /*<?php $__env->startSection('ad_rules','active'); ?>*/ ?>
<?php $__env->startSection('manage_settings','active'); ?>
<?php $__env->startSection('page_head_content'); ?>
    <link href="/assets/admin/toastr.css" rel="stylesheet"/>
    <?php /*<meta charset="utf-8">*/ ?>
    <?php /*<meta name="viewport" content="width=device-width, initial-scale=1">*/ ?>
    <?php /*<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/ ?>
    <?php /*<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/ ?>
    <?php /*<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/ ?>
    <style>

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>
    <div class="row">
        <div class="col s4">
            <span>Message</span>
            <span class="switch right">
                <label style="float: right;">Off
                  <input  name="guest_can_post" id="guest_post" type="checkbox" onclick="getValue()" <?php if(isset($messageStatus)): ?><?php if($messageStatus ==1): ?>checked <?php endif; ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
        </div>
        <div class="col s1">
            <?php /*<span>Edit The Message</span>*/ ?>
            <span class="modal-trigger editmessage mdi-content-create align-right" data-target="editmessage" href="#editmessage"style="
             font-size: 22px;cursor: pointer;line-height: 1;"></span>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col s4">
            <span>Predictive Metrics</span>
            <span class="switch right">
                <label style="float: right;">Off
                  <input  name="guest_can_post" id="fakeMetrics" type="checkbox" onclick="chnangeFakeMetricsStatus()" <?php if(isset($fakeMetricsStatus)): ?> <?php if($fakeMetricsStatus ==1): ?>checked <?php endif; ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s4">
            <span>ClickDesk</span>
            <span class="switch right">
                <label style="float: right;">Off
                  <input  name="guest_can_post" id="clickDesk" type="checkbox" onclick="clickDeskStatus()" <?php if(isset($clickDeskStatus)): ?> <?php if($clickDeskStatus ==1): ?>checked <?php endif; ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col s4">
            <span>Image WaterMark</span>
            <span class="switch right">
                <label style="float: right;">Off
                  <input  name="guest_can_post" id="ImageWaterMark" type="checkbox" onclick="imageWaterMarkStatus()" <?php if(isset($imageWaterMarkStatus)): ?> <?php if($imageWaterMarkStatus == 1): ?>checked <?php endif; ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s4">
            <span>Video WaterMark</span>
            <span class="switch right">
                <label style="float: right;">Off
                  <input  name="guest_can_post" id="videoWaterMark" type="checkbox" onclick="videowaterMarkStatus()" <?php if(isset($videoWaterMarkStatus)): ?> <?php if($videoWaterMarkStatus == 1): ?>checked <?php endif; ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
        </div>
    </div>
    <br>

    <?php /*<br>*/ ?>
    <?php /*<div class="row">*/ ?>
    <?php /*<div class="col s6">*/ ?>
    <?php /*<span>Edit The Message</span>*/ ?>
    <?php /*<span class="modal-trigger editmessage mdi-content-create align-right" data-target="editmessage" href="#editmessage"style="float: right;*/ ?>
    <?php /*font-size: 30px;*/ ?>
    <?php /*padding-right: 35px;cursor: pointer"></span>*/ ?>
    <?php /*</div>*/ ?>
    <?php /*</div>*/ ?>


    <div id="editmessage" class="modal">
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
            <div class="col s12">
                <?php /*<input class="country_name " value="United States" type="text">*/ ?>
                <label for="textarea1">Edit Message</label>
                <textarea id="textarea1" class="materialize-textarea" value="" style="padding-top: 0px;padding-bottom: 0px;"></textarea>

            </div>

        </div>
        <div class="modal-footer">
            <a class="waves-effect waves-light btn edit_cat" style="margin-right:19px;" onclick="updateMessage()">UPDATE</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s6">
            <span  class="col s6" style="padding: 0;">Edit Terms and Conditions</span>
            <span class="modal-trigger editterms_conditions mdi-content-create align-right" data-target="editterms_conditions" href="#editterms_conditions"
                  style="font-size: 22px;cursor: pointer;line-height: 1;"></span>
        </div>
    </div>
    <div id="editterms_conditions" class="modal">
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
            <div class="col s12">
                <?php /*<input class="country_name " value="United States" type="text">*/ ?>
                <label for="textarea1">Edit Terms and Conditions</label>
                <textarea id="editor" class="materialize-textarea"  value="" style="padding-top: 0px;padding-bottom: 0px;"><?php echo e($terms_conditions); ?></textarea>

            </div>

        </div>
        <div class="modal-footer">
            <a class="waves-effect waves-light btn edit_cat" style="margin-right:19px;" onclick="updateTermeConditions()" disabled>UPDATE</a>

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col s6">
            <span class="col s6" style="padding: 0;">Privacy </span>
            <span class="col s3 modal-trigger privacy_content mdi-content-create align-right" data-target="privacy_content" href="#privacy_content" style="font-size: 22px;cursor: pointer;line-height: 1;"></span>
        </div>
    </div>
    <div id="privacy_content" class="modal">
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
            <div class="col s12">
                <?php /*<input class="country_name " value="United States" type="text">*/ ?>
                <label for="">privacy content</label>
                <?php /*<textarea id="textarea2" class="materialize-textarea"  value="" style="padding-top: 0px;padding-bottom: 0px;"></textarea>*/ ?>
                <textarea  id="editor1" name="editor1" class="materialize-textarea editor1"  style="padding-top: 0px;padding-bottom: 0px;"><?php echo e($privacy_content); ?></textarea>

            </div>

        </div>
        <div class="modal-footer">
            <a class="waves-effect waves-light btn edit_cat" style="margin-right:19px;" onclick="privacy_content()" disabled>UPDATE</a>

        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
    <script src="/assets/admin/toastr.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script>
        let theEditor;
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                }
            })
            .then(editor => {
                theEditor = editor;
                console.log('Editor was initialized');
            })
            .catch(error => {
                console.error(error);
            });


    </script>
    <script>
        let theEditor1;
        ClassicEditor
            .create(document.querySelector('#editor1'), {
                ckfinder: {
                    uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                }
            })
            .then(editor => {
                theEditor1 = editor;
                console.log('Editor was initialized');
            })
            .catch(error => {
                console.error(error);
            });


    </script>
    <script>
        $(document).ready(function () {
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>
    <script>
        $('.area').on('keyup' , function() {
            if($('textarea').val().length > 0 ){
                $('.edit_cat').prop('disabled', false);
            }
            else {
                $('.edit_cat').prop('disabled', true);
            }
        });
    </script>
    <script>

        function getValue() {
           // var value= $('#guest_post').val();
            var isChecked = document.getElementById('guest_post').checked;
            var the_value = isChecked ? 1 : 0;
           // alert(the_value);
            $.ajax({
                url:'/admin/editMessage',
                type:'post',
                dataType:'json',
                data:{
                    value:the_value
                },
                success:function (res) {
                    console.log(res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else{
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }

                }
            });
        }

        function chnangeFakeMetricsStatus() {
            var isChecked = document.getElementById('fakeMetrics').checked;
            var the_value = isChecked ? 1 : 0;
            $.ajax({
                url:'/admin/fakeMetricsStatus',
                type:'post',
                dataType:'json',
                data:{
                    value: the_value
                },
                success:function (res) {
                    console.log('chnangeFakeMetricsStatus================',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else{
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }

       $(document).ready(function(){
           $.ajax({
               url:'/admin/editMessageStatus',
               type:'get',
               dataType:'json',
               success:function (res) {
                   console.log('sdfsaaaa================',res.message);
                   $('#textarea1').val(res.message);

               }
           });
       });

        function updateMessage() {
            $.ajax({
                url:'/admin/editMessageStatus',
                type:'post',
                dataType:'json',
                data:{
                    data: $('#textarea1').val()
                    },
                success:function (res) {
                    console.log('sdfsaaaa================',res);
                    if(res==1){
                        $('#editmessage').closeModal();
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else{
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });

        }

        $(document).ready(function () {
           // $.ajax({
           //     url:'/admin/termsConditions',
           //     type:'get',
           //     dataType:'json',
           //     success:function (res) {
           //         console.log(res.terms_conditions);
           //         $('#textarea2').val(res.terms_conditions);
           //     }
           // });
        });
        function updateTermeConditions() {
           // var length= $('#textarea2').val().trim().length;
            var value = theEditor.getData().trim();
           if(value.length == 0){
               toastr.error('Please write terms and conditions.', {timeOut: 2000});
               return false;
           }else {
               $.ajax({
                   url: '/admin/termsConditions',
                   type: 'post',
                   dataType: 'json',
                   data: {value: value},
                   success: function (res) {
                       console.log('res==>',res);
                       if (res == 1) {
                           $('#editterms_conditions').closeModal();
                           toastr.success('Updated Successfully', {timeOut: 2000});
                       } else {
                           toastr.error('Please try again..!', {timeOut: 2000});
                       }
                   }
               });

           }
        }

        function privacy_content() {
            // var length= $('.textarea2').val().trim().length;
            var value = theEditor1.getData().trim();
            // alert(value.replace(/(^\s+|\s+$)/g, ""));
            // alert(value.trim().length);
            if(value.trim().length == 0){
                toastr.error('Please write something...', {timeOut: 2000});
                return false;
            }else {
                $.ajax({
                    url: '/admin/privacy_content',
                    type: 'post',
                    dataType: 'json',
                    data: {value: value},
                    success: function (res) {
                        console.log('res==>',res);
                        if (res == 1) {
                            $('#privacy_content').closeModal();
                            toastr.success('Updated Successfully', {timeOut: 2000});
                        } else {
                            toastr.error('Please try again..!', {timeOut: 2000});
                        }
                    }
                });
            }
        }


        function clickDeskStatus() {
            var isChecked = document.getElementById('clickDesk').checked;
            var the_value = isChecked ? 1 : 0;

            $.ajax({
                url:'/admin/clickDeskStatus',
                type:'post',
                dataType:'json',
                data:{
                    value: the_value
                },
                success:function (res) {
                    console.log('chnangeFakeMetricsStatus================',res);
                    if(res==1){
                        toastr.success('Updated Successfully', {timeOut: 2000});
                    }else{
                        toastr.error('Please try again..!', {timeOut: 2000});
                    }
                }
            });
        }

        function imageWaterMarkStatus(){
            var isChecked = document.getElementById('ImageWaterMark').checked;
            var the_value = isChecked ? 1 : 0;
            $.ajax({
                url:'/admin/imageWaterMark',
                type:'post',
                dataType:'json',
                data:{
                    value: the_value
                },
                success:function (res) {
                    console.log('Changed Image WaterMark Status', res);
                    if (res == 1) {
                        toastr.success('Updated Successfully',{timeOut:2000})
                    } else {
                        toastr.error('Please Try Again...!',{timeout:2000})

                    }
                }
            });
        }

        function videowaterMarkStatus() {
            var isChecked = document.getElementById('videoWaterMark').checked;
            var the_value = isChecked ? 1 : 0;
            $.ajax({
                url:'/admin/videoWaterMark',
                type:'post',
                dataType:'json',
                data:{
                    value: the_value
                },
                success:function (res) {
                    console.log('Changed Video WaterMark Status', res);
                    if (res == 1) {
                        toastr.success('Updated Successfully',{timeOut:2000})
                    } else {
                        toastr.error('Please Try Again...!',{timeout:2000})

                    }
                }
            });

        }


        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>