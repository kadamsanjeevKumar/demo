<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="/assets/admin/js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="/assets/admin/js/materialize.min.js"></script>
<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="/assets/admin/js/plugins.min.js"></script>

<script type="text/javascript" src="/assets/admin/js/dropdown.js"></script>
<?php /*<script type="text/javascript" src="/assets/admin/js/perfect-scrollbar.jquery.min.js"></script>*/ ?>

<script type="text/javascript"  src="/assets/user/plugins/sweetalert2/dist/sweetalert2.min.js"></script>

<script type="text/javascript" src="/assets/user/js/jquery.cookie.min.js"></script>
<script src="/assets/admin/js/jquery.dataTables.min.js"></script>

<script src="/assets/common/js/jqueryvalidator/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="/assets/common/js/jqueryvalidator/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script>
    $(function () {
        $(document).ajaxError(function(event, xhr, settings){
            if(xhr.status==200 && xhr.getResponseHeader('Session-live')=='false'){
//            if(xhr.status==200 && xhr.responseText=='admin session expired'){
                swal({
                    title: 'Session Expired!',
                    text: 'Please Login Again...',
                    timer: 5000
                },function (res) {
//                    alert('EX');
                    window.location.href ="/admin/log/in";
                });
                setTimeout(function(){
                    window.location.href ="/admin/log/in";
                },5000)
            }
        });
        $(document).ajaxSuccess(function(event, xhr, settings){
            if(xhr.status==200 && xhr.getResponseHeader('Session-live')=='false'){
                swal({
                    title: 'Your Session Expired!',
                    text: 'Please Login Again...',
                    timer: 5000
                },function (res) {
//                    alert('EX1')
                    window.location.href ="/admin/log/in";
                });

                setTimeout(function(){
                    window.location.href ="/admin/log/in";
                },5000)
            }
        });
    });

</script>



