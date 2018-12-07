<?php $__env->startSection('title'); ?> Page20 view posted Ads <?php $__env->stopSection(); ?>
<?php $__env->startSection('maintenance','active'); ?>

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
        <div class="col s6">
            <span>Maintenance Page On or Off</span>
            <span class="switch right">
                <label style="float: right;padding-right: 200px;">Off
                  <input  name="maintenance_status" id="maintenance" type="checkbox"  <?php if(isset($maintenance_status)): ?><?php if($maintenance_status ==1): ?>checked <?php endif; ?> <?php endif; ?>> <span class="lever"></span> On</label>
                     </span>
        </div>
        <?php /*<form>*/ ?>
        <div class="input-field col s3" style="margin: 40px 0 0 0">
            <input <?php /*value="4"*/ ?> name="customTimeValue" id="customTimeValue" type="text" class="validate" placeholder="Enter the time in minuts.">
            <label class="active" for="first_name2">Custom Time In Minuts</label>
        </div>
        <div class="col s3" style="margin: 40px 0 0 0">
            <a class="waves-effect waves-light btn" onclick="setCustomTimeForSheduleShutdown()">Save</a>
        </div>
        <?php /*</form>*/ ?>
    </div>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.3.min.js" ></script>
    <script src="/assets/admin/toastr.js"></script>
    <script>
        $(document).ready(function () {
            toastr.options.positionClass = "toast-top-center";
            toastr.options.progressBar = true;
        });
    </script>
    <script>
        $(document).ready(function () {
            $(document.body).on('click','#maintenance',function(){
                // var value= $('#guest_post').val();
                var isChecked = document.getElementById('maintenance').checked;
                var the_value = isChecked ? 1 : 0;
                // alert(the_value);
                $.ajax({
                    url:'/admin/maintenance_page',
                    type:'post',
                    dataType:'json',
                    data:{
                        value:the_value
                    },
                    beforeSend: function () {
                        // alert('beforeSend');
                   },
                complete: function (xhr, status) {
                    // alert('complete');
                    // $('#maintenance').prop('disabled', true);
                   },
                    success:function (res) {
                        // alert('success');
                        // console.log(res);
                        if(res==1){
                            // $('#maintenance').prop('disabled', true);
                            toastr.success('Updated Successfully',{'timeout': 100,});
                            toastr.options.preventDuplicates = true;
                        }
                        // $('#maintenance').prop('disabled', false);
                        else{
                            toastr.error('Please try again..!');
                            toastr.options.preventDuplicates = true;
                        }
                    }
                });
            });

            // $('#custome').on('click',function () {
            //     var customTime =$('#customTimeValue').val();
            //     alert(customTime);
            // });


        });



        function setCustomTimeForSheduleShutdown() {
            var customTime =$('#customTimeValue').val();
            // alert(customTime);
            $.ajax({
                url:'/admin/update_customtime',
                type:'post',
                dataType:'json',
                data:{
                    customTime:customTime
                },
                success:function (response) {
                    console.log(response);
                    if(response.code==200){
                        toastr.success('Updated Successfully', {timeOut: 200});
                    }else{
                        toastr.error('Please try again..!', {timeOut: 200});
                    }
                }
            });

        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>