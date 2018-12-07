<script src="/assets/user/js/jquery.min.js"></script>
<script src="/assets/user/js/jquery-ui.min.js"></script>
<script src="/assets/user/js/bootstrap.min.js"></script>
<?php /*<script src="/assets/user/js/grid.js"></script>*/ ?>
<script src="/assets/user/js/adform.js"></script>

<script src='/assets/user/js/highlight.min.js'></script>
<script src='/assets/user/js/katex.min.js'></script>
<script src='/assets/user/js/quill.js'></script>
<script src="/assets/user/plugins/sweetalert/dist/sweetalert.min.js"></script>
<script src="/assets/user/js/perfect-scrollbar.js"></script>  <!-- Raj -->

<script src="/assets/user/plugins/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/assets/user/plugins/sweetalert2/dist/sweetalert2.css">

<?php /*<script type="text/javascript" src="/assets/user/js/jquery-ui.js"></script>*/ ?>
<script type="text/javascript" src="/assets/user/js/jquery.floatingmessage.js"></script>
<script type="text/javascript" src="/assets/user/js/jstz.min.js"></script>

<?php /*<script>*/ ?>
    <?php /*$(document).ready(function () {*/ ?>

        <?php /*$('#blog-landing').pinterest_grid({*/ ?>
            <?php /*no_columns: 4,*/ ?>
            <?php /*padding_x: 10,*/ ?>
            <?php /*padding_y: 10,*/ ?>
            <?php /*margin_bottom: 50,*/ ?>
            <?php /*single_column_breakpoint: 700*/ ?>
        <?php /*});*/ ?>

    <?php /*});*/ ?>
<?php /*</script>*/ ?>

<!— ClickDesk Live Chat Service for websites —>
<!— End of ClickDesk —>
<?php /*<?php if(clickDeskStatus() == 1): ?>*/ ?>
    <?php /*<script type="text/javascript">*/ ?>
        <?php /*var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyEgsSBXVzZXJzGICA4KTyw-gKDA');*/ ?>
        <?php /*var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' :*/ ?>
            <?php /*'http://my.clickdesk.com/clickdesk-ui/browser/');*/ ?>
        <?php /*var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');*/ ?>
        <?php /*var glcspt = document.createElement('script'); glcspt.type = 'text/javascript';*/ ?>
        <?php /*glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';*/ ?>
        <?php /*var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);*/ ?>
    <?php /*</script>*/ ?>
<?php /*<?php endif; ?>*/ ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121618766-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-121618766-1');
</script>





<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    $(document).ready(function(){

        var spam='<?php echo e(Session::has('spam_msg')); ?>';
        var spam_msg='<?php echo e(Session::pull('spam_msg')); ?>';
        if (spam) {
            swal('',spam_msg,"warning");
        }

        var timezone = jstz.determine();
        document.cookie = "timezone=" + timezone.name()+ ";domain=.<?php echo e(env('APP_DOMAIN')); ?>;path=/";
//        document.cookie = 'timezone=' + timezone.name();

        // to check online users
        setTimeout(function(){
            checkUser();
        },500);
    });

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    //For checking draft post is present or not
    function checkDraft(url, url1) {
        swal({
            title: "",
            text: "Hello <?php echo e(session('pc_user')['firstname']); ?>, you have a composed Ad yet to be posted! ",
            type: "warning",
            showCancelButton: true,
            allowOutsideClick: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Compose New Post",
            cancelButtonText: " Continue with Old Post",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function () {
            window.location.href = url1;
        }, function (isConfirm) {
            if (isConfirm === "overlay") {
            } else if (isConfirm === "cancel")
                window.location.href = url;
            else
                window.location.href = url1;
        });
    }

    function checkUser(){
        $.ajax({
            url: '/checkOnlineUsers',
            method: 'get',
            datatype: 'json'
        });
    }
</script>

<script>


    $(document).ready(function () {

//        $(document.body).on('mouseenter', '#bell_icon', function () {
//
//            var isNewMessage= $('#show_message').css('display');
//            $('#show_message').hide();
//            if(isNewMessage!=='none'){
//                $.ajax({
//                    type: "get",
//                    url: '/get/admin/message',
//                    dataType: 'json',
////                data: {id: id},
////                    beforeSend: function () {
////                        $('#loader_ajax').show();
////                    },
////                    complete: function (xhr, status) {
////                        $('#loader_ajax').hide();
////                    },
//                    success: function (data) {
//                        if (data.code == '200') {
//                            if (data.admin_msg != '') {
//                                updateStatus();
////                                swal("Admin Message!", data.admin_msg);
//                                swal({
//                                    title: "Admin Message!",
//                                    text: data.admin_msg,
//                                    confirmButtonText: "Dissmis",
//                                    allowOutsideClick: false,
//                                    closeOnConfirm: false
//                                });
//                            } else {
//                                swal('no message for you at the moment');
//                            }
//                        }
//                        else if (data.status == 'error') {
//                            swal("No message for you");
//                        }
//                    }
//                });
//            }
//        });


        $(document.body).on('mouseenter', '#bell_icon', function () {

            var isNewMessage= $('#show_message').css('display');
            $('#show_message').hide();
            if(isNewMessage!=='none'){
                $.ajax({
                    type: "get",
                    url: '/get/admin/message',
                    dataType: 'json',
//                data: {id: id},
//                    beforeSend: function () {
//                        $('#loader_ajax').show();
//                    },
//                    complete: function (xhr, status) {
//                        $('#loader_ajax').hide();
//                    },
                    success: function (data) {
//                            $('#loader_ajax').show();
                        if (data.code == 200) {
//                                $('#loader_ajax').show();

                            if (data.admin_msg != '') {
                                updateStatus();
//                                swal("Admin Message!", data.admin_msg);
                                swal({
                                    title: "Admin Message!",
                                    text: data.admin_msg,
                                    confirmButtonText: "Dissmis",
                                    allowOutsideClick: false,
                                    closeOnConfirm: false
                                });
                            } else {
                                swal('no message for you at the moment');
                            }
                        }
                        else if (data.status == 'error') {
                            swal("No message for you");
                        }
                    }

                });
            }
        });


        var current_message_count=-1;
        checkNewAdminMessage();
        function checkNewAdminMessage() {
            console.log('check for new message');
            $.ajax({
                type: "post",
                url: '/check/admin/new/message',
                dataType: 'json',
                data: {current_message_count: current_message_count},
                beforeSend: function () {
                    $('#loader_ajax').show();
                },
                complete: function (xhr, status) {

//                    $('#loader_ajax').hide();

                    setTimeout(function () {
                            checkNewAdminMessage();
                        }
                        , 10000)
                },

                success: function (Response) {

                    current_message_count=Response.result.db_message_count;
                    if (Response.code == 200) {
                     // var audio = new Audio('/audioFile/Online Users.mp3');
                        var audio = new Audio('/'+Response.audioFile);

                        if(Response.result.hasNewMessage==1){
                            // audio.play();
                            if(Response.messageSound){
                                // audio = new Audio('/assets/user/sounds/notificationReceived.mp3');
                                audio.play();
                            }
                        }
                        $('#show_message').show();
                    } else {
                        $('#show_message').hide();
                    }
                    console.log('new Message from admin', Response);
                }
            });
        };




        function updateStatus() {
            $.ajax({
                type: "get",
                url: '/update/message/status',
                dataType: 'json',
//                data: {id: id},
                beforeSend: function () {
                    $('#loader_ajax').show();
                },
                complete: function (xhr, status) {
                    $('#loader_ajax').hide();
                },
                success: function (data) {
                    console.log('updated seen status', data);
                }
            });
        };
    });

    $(document).ready(function () {
        $.ajax({
            url:'/messagePrint',
            type:'get',
            dataType:'json',
            success:function(res){
                console.log('response===========',res.msg.message);
                if(res.msg.messageStatus==1){

                    $('.message').text(res.msg.message);
                    $('.message1').show();
                }else{
                    $('.message1').hide();
                }
            }
        });
        });

    $(document).ready(function () {
        $.ajax({
            url:'/fakeMetricsStatus',
            type:'get',
            dataType:'json',
            success:function (res) {
                console.log('chnangeFakeMetricsStatus================',res);
                if(res.fakeMetricsStatus==1){
                    $('.fakeMetrics1').show();

                }else{
                    $('.fakeMetrics1').hide();
                }
            }
        });

        flag=0;
        down_flag=0;
        function getMaintenancePageStatus() {
            // setTimeout(function () {
                $.ajax({
                    url: '/getMaintenancePageStatus',
                    type: 'get',
                    dataType: 'json',
                    success: function (res) {
                        if(res.code == 200){
                            if(flag==0)
                                $('#draggable').modal('show');
                            flag=1;
                            // if$_COOKIE['popup'] == 1)

                            // setcookies('popup',1);
                            // var time=Math.floor(Date.now()/1000)
                            console.log('new Date().valueOf()',res.current_time);
                            console.log('maintenance_page_tiimeOut',res.maintenance_page_tiimeOut);
                            if(down_flag ==0){
                                down_flag=1;
                                initializeClock('clockdiv', new Date(Date.parse(new Date()) + (res.maintenance_page_tiimeOut-Math.floor(Date.now()/1000))*1000));
                            }
                            if(res.maintenance_page_tiimeOut < res.current_time){
                                console.log('coming time out-----');
                                // location.reload();
                                window.location='/maintenance/mode';
                            }
                        }else{
                            // location.reload();
                        }

                    }
                });


            // }, 500)
        }

        // (getMaintenancePageStatus)();
        setInterval(getMaintenancePageStatus, 10000);

    });

</script>
<script>

    // $(window).load(function(){
    //     $('#draggable').modal('show');
    // });

    $("#draggable").draggable({
        handle: ".modal-content"
    });

    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        //var daysSpan = clock.querySelector('.days');
        //var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);

            //daysSpan.innerHTML = t.days;
            // hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-1);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
                window.location='/maintenance/mode';
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    // var deadline = new Date(Date.parse(new Date()) + 01 * 60 * 1000);
    // initializeClock('clockdiv', deadline);

    //===By Niraj======//
    var statStatus = 0;
    function stats(){
        $.ajax({
            type: "get",
            url: '/get/user/stats',
            dataType: 'json',
            success: function (data) {

                // if(data.onlineUsers<0){
                //     alert(data.onlineUsers);
                // }
                $('#onlinevisitors').html(data.onlineUsers);
                $('#totalAds').html(data.totalPostCount);
                $('#totalAdsWeek').html(data.totalPostThisWeek);
                $('#regUsers').html(data.registeredUsers);

                if(statStatus == 0) {
                    countUp3('countdownvisitor', data.onlineUsers);
                    countUp3('countdowntotal', data.totalPostCount);
                    countUp3('countdowntotaladweek', data.totalPostThisWeek);
                    countUp3('countdownregistered4', data.registeredUsers);
                }
                statStatus = 1;
                setTimeout(stats, 5000);
            }
        });
    }
    $(document).ready(function () {
        stats();
    });
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<?php /*<script>*/ ?>
    <?php /*$(document).ready(function () {*/ ?>
        <?php /*$(document.body).on('mouseenter', '#show_message', function () {*/ ?>
            <?php /*$.ajax({*/ ?>
                <?php /*type: "get",*/ ?>
                <?php /*url: '/get/admin/message',*/ ?>
                <?php /*dataType: 'json',*/ ?>
<?php /*//                data: {id: id},*/ ?>
                <?php /*beforeSend: function () {*/ ?>
                    <?php /*$('#loader_ajax').show();*/ ?>
                <?php /*},*/ ?>
                <?php /*complete: function (xhr, status) {*/ ?>
                    <?php /*$('#loader_ajax').hide();*/ ?>
                <?php /*},*/ ?>
                <?php /*success: function (data) {*/ ?>
                    <?php /*console.log('hello Nitish', data);*/ ?>

                    <?php /*if (data.code == '200') {*/ ?>
                        <?php /*if (data.admin_msg != '') {*/ ?>
                            <?php /*updateStatus();*/ ?>
                            <?php /*swal("Admin Message!", data.admin_msg);*/ ?>
                        <?php /*} else {*/ ?>
                            <?php /*swal('no message for you at the moment');*/ ?>
                        <?php /*}*/ ?>
                    <?php /*}*/ ?>
                    <?php /*else if (data.status == 'error') {*/ ?>
                        <?php /*swal("No message for you");*/ ?>
                    <?php /*}*/ ?>
                <?php /*}*/ ?>
            <?php /*});*/ ?>

        <?php /*});*/ ?>
        <?php /*checkNewAdminMessage();*/ ?>

        <?php /*function checkNewAdminMessage() {*/ ?>
            <?php /*$.ajax({*/ ?>
                <?php /*type: "get",*/ ?>
                <?php /*url: '/check/admin/new/message',*/ ?>
                <?php /*dataType: 'json',*/ ?>
<?php /*//                data: {id: id},*/ ?>
                <?php /*beforeSend: function () {*/ ?>
                    <?php /*$('#loader_ajax').show();*/ ?>
                <?php /*},*/ ?>
                <?php /*complete: function (xhr, status) {*/ ?>
                    <?php /*$('#loader_ajax').hide();*/ ?>
                    <?php /*setTimeout(function () {*/ ?>
                            <?php /*checkNewAdminMessage();*/ ?>
                        <?php /*}*/ ?>
                        <?php /*, 10000)*/ ?>
                <?php /*},*/ ?>
                <?php /*success: function (data) {*/ ?>

                    <?php /*if (data.code == 200) {*/ ?>
                        <?php /*$('#show_message').show();*/ ?>
                    <?php /*} else {*/ ?>
                        <?php /*$('#show_message').hide();*/ ?>
                    <?php /*}*/ ?>
                <?php /*}*/ ?>
            <?php /*});*/ ?>
        <?php /*};*/ ?>

        <?php /*function updateStatus() {*/ ?>
            <?php /*$.ajax({*/ ?>
                <?php /*type: "get",*/ ?>
                <?php /*url: '/update/message/status',*/ ?>
                <?php /*dataType: 'json',*/ ?>
<?php /*//                data: {id: id},*/ ?>
                <?php /*beforeSend: function () {*/ ?>
                    <?php /*$('#loader_ajax').show();*/ ?>
                <?php /*},*/ ?>
                <?php /*complete: function (xhr, status) {*/ ?>
                    <?php /*$('#loader_ajax').hide();*/ ?>
                <?php /*},*/ ?>
                <?php /*success: function (data) {*/ ?>
                    <?php /*console.log('updated seen status', data);*/ ?>
                <?php /*}*/ ?>
            <?php /*});*/ ?>
        <?php /*};*/ ?>

    <?php /*});*/ ?>
<?php /*</script>*/ ?>