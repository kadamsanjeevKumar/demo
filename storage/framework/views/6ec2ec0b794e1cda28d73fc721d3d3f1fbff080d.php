<?php $__env->startSection('dashboard','active'); ?>
<?php $__env->startSection('title'); ?> Page20 Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('page_head_content'); ?>
    <link rel="stylesheet" href="/assets/admin/css/graph.css">
    <link rel="stylesheet" href="/assets/admin/css/normalize.min.css">
    <link rel="stylesheet" href="/assets/admin/css/export.css" type="text/css" media="all"/>
    <style>
        .card .card-title {
            font-size: 18px !important;
        }

        #chartdiv {
            width: 100%;
            height: 500px;
        }
        .panleid{padding-left:0 !important;min-height: 50px !important;}
        .online{ width: 10px; height: 10px; background: #8bc34a; border-radius: 20px;}
    </style>
    <link href="/assets/admin/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <style>
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

        select {
            height: 2rem !important;
        }

        table.dataTable tbody th, table.dataTable tbody td {
            padding: 8px 6px;
        }

        .dataTable {
            width: 100% !important;
        }

        .modal {
            width: 77% !important;
        }
        .modal-lg {
            width: 80% !important;
            max-height:80% !important;
        }


        #loadingDiv{
            position:fixed;
            top:0px;
            right:0px;
            width:100%;
            height:100%;
            background-color:#492c7c;
            background-image:url("/assets/admin/images/pageloader1.gif");
            background-repeat:no-repeat;
            background-position:center;
            z-index:10000000;
        }
    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_content'); ?>

    <?php /*<div style="display: block;" id="loadingDiv"></div>*/ ?>

    <input type="hidden" id="active_users" value="<?php echo e($users['active']); ?>">
    <input type="hidden" id="online_users" value="<?php echo e($users['online_user']); ?>">
    <input type="hidden" id="verified_users" value="<?php echo e($users['verified']); ?>">
    <input type="hidden" id="today_post" value="<?php echo e($users['today_post']); ?>">
    <input type="hidden" id="paid_sponsored_posts" value="<?php echo e($users['paid_post']); ?>">
    <input type="hidden" id="pending_verified_users" value="<?php echo e($users['pending_verified']); ?>">
    <input type="hidden" id="pending_posts" value="<?php echo e($users['pending_post']); ?>">
    <input type="hidden" id="total_posts" value="<?php echo e($users['total_posts']); ?>">
    <input type="hidden" id="reported_ads" value="<?php echo e($users['reported_ads']); ?>">

    <div class="row">
        <div class="col s12 m12">
                <div class="col m3 s6">
                    <div class="card purple lighten-3" style="padding:10px 0px;">
                        <div class="card-content white-text"
                             style="background-image:url(/assets/admin/images/total-users.png);width:50;background-repeat:no-repeat;">
                            <center><a href="/admin/available/users" title="All Active Registered Users" class="card-title center-align"  style="color:#fff;">Active Registered Users</a></center>
                            <center><a href="/admin/available/users" title="All Active Registered Users Counter" class="center-align" style="color:#fff;"><?php echo e($users['active']); ?></a></center>
                        </div>
                    </div>
                </div>
            <?php /*<div class="col m3 s6">*/ ?>
                <?php /*<div class="card pink lighten-3" style="padding:10px 0px;">*/ ?>
                    <?php /*<div class="card-content white-text"*/ ?>
                         <?php /*style="background-image:url(/assets/admin/images/online-users.png);width:50;background-repeat:no-repeat;">*/ ?>
                        <?php /*<center><span class="card-title">Online Users</span></center>*/ ?>
                        <?php /*<p class="center-align" id="online_users_div"><?php echo e($users['online_user']); ?></p>*/ ?>
                    <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
            <div class="col m3 s6">
                <div class="card pink lighten-3" style="padding:10px 0px;">
                    <div  onclick="getOnlineUsers(1)" class="card-content white-text" style="background-image:url(/assets/admin/images/online-users.png);width:50;background-repeat:no-repeat;">
                        <?php /*<center><a class="card-title center-align online_check" title="Online Users" href="javascript:void(0)" style="color:#fff;">Online Users</a></center>*/ ?>
                        <?php /*<center><a class="center-align online_check" title="Online Users Counter" href="javascript:void(0)" style="color:#fff;" id="online_users_div" data-count="<?php echo e($users['online_user']); ?>><?php echo e($users['online_user']); ?></a></center>*/ ?>
                    <center><a class="card-title center-align online_check" title="Online Users" href="javascript:void(0)"
                            style="color:#fff;">Online Users</a></center>
                        <center><a class="center-align online_check" title="Online Users Counter" href="javascript:void(0)"
                                   style="color:#fff;" id="online_users_div" data-count="<?php echo e($users['online_user']); ?>"><?php echo e($users['online_user']); ?></a></center>
                    </div>
                </div>
            </div>
                <div class="col m3 s6">
                    <div class="card red lighten-3" style="padding:10px 0px;">
                        <div class="card-content white-text"
                             style="background-image:url(/assets/admin/images/verified-users.png);width:50;background-repeat:no-repeat;">
                            <center><a href="/admin/verified/user/list" title="All Verified Users" class="card-title center-align"  style="color:#fff;">Verified Users</a></center>
                            <center><a href="/admin/verified/user/list" title="All Verified Users Counter" class="center-align"  style="color:#fff;"><?php echo e($users['verified']); ?></a></center>
                        </div>
                    </div>
                </div>
            <div class="col m3 s6">
                <div class="card blue lighten-3" style="padding:10px 0px;">
                    <div class="card-content white-text"
                         style="background-image:url(/assets/admin/images/posts.png);width:50;background-repeat:no-repeat;">
                        <center><a href="#todaypost" class="modal-trigger" style="color:#fff;">
                                <span class="card-title">Today's Post</span>
                                <p class="center-align"><?php echo e($users['today_post']); ?></p>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12">
                <?php /*<div class="col m3 s6">*/ ?>
                    <?php /*<div class="card purple lighten-3" style="padding:10px 0px;">*/ ?>
                        <?php /*<div class="card-content white-text"*/ ?>
                             <?php /*style="background-image:url(/assets/admin/images/paid-posts.png);width:50;background-repeat:no-repeat;">*/ ?>
                            <?php /*<center><a href="/admin/request/verify/user/list" title="All Pending Verifications" class="card-title center-align"  style="color:#fff;">Pending Verification</a></center>*/ ?>
                            <?php /*<center><a href="/admin/request/verify/user/list" title="All Pending Verifications Counter" class="center-align"  style="color:#fff;"><?php echo e($users['pending_verified']); ?></a></center>*/ ?>
                        <?php /*</div>*/ ?>
                    <?php /*</div>*/ ?>
                <?php /*</div>*/ ?>
                <div class="col m3 s6">
                    <div class="card pink lighten-3" style="padding:10px 0px;">
                        <div class="card-content white-text"
                             style="background-image:url(/assets/admin/images/pending-verify.png);width:50;background-repeat:no-repeat;">
                            <center><a href="/admin/user/multiple/post/list" title="All Paid &amp; Sponsored Posts " class="card-title center-align"  style="color:#fff;">Paid &amp; Sponsored Posts</a></center>
                            <center><a href="/admin/user/multiple/post/list" title="All Paid &amp; Sponsored Posts Counter" class="center-align"  style="color:#fff;"><?php echo e($users['paid_post']); ?></a></center>
                        </div>
                    </div>
                </div>
                <div class="col m3 s6">
                    <div class="card red lighten-3" style="padding:10px 0px;">
                        <div class="card-content white-text"
                             style="background-image:url(/assets/admin/images/pending-post.png);width:50;background-repeat:no-repeat;">
                            <center><a href="/admin/user/reported/post/list" title="All Reported Ads" class="card-title center-align"  style="color:#fff;">Reported Ads</a></center>
                            <center><a href="/admin/user/reported/post/list" title="All Reported Ads Counter" class="center-align"  style="color:#fff;"><?php echo e($users['reported_ads']); ?></a></center>
                        </div>
                    </div>
                </div>
                <div class="col m3 s6">
                    <div class="card blue lighten-3" style="padding:10px 0px;">
                        <div class="card-content white-text"
                             style="background-image:url(/assets/admin/images/ads.png);width:50;background-repeat:no-repeat;">
                            <center><a href="/admin/user/post/list" title="Total posted Ads" class="card-title center-align"  style="color:#fff;">Total posted Ads</a></center>
                            <center><a href="/admin/user/post/list" title="Total posted Ads Counter" class="center-align" id="totalPostCount"  style="color:#fff;"><?php echo e($users['total_posts']); ?></a></center>
                        </div>
                    </div>
                </div>
            <div class="col m3 s6">
                <div class="card purple lighten-3" style="padding:10px 0px;">
                    <div class="card-content white-text"
                         style="background-image:url(/assets/admin/images/ads.png);width:50;background-repeat:no-repeat;">
                        <center><a href="/admin/user/post/list?type=3" title="Total posted Ads" class="card-title center-align"  style="color:#fff;">Pending Ads</a></center>
                        <center><a href="/admin/user/post/list?type=3" title="Total posted Ads Counter" class="center-align"  style="color:#fff;"><?php echo e($users['pending_post']); ?></a></center>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:20px;margin-bottom:40px;">
            <div id="chartdiv"></div>
        </div>
    </div>


    <!-- Modal Online -->
    <div id="online" class="modal">
        <div class="modal-content">
            <h4>Online Users</h4><br>
            <ul id="issues-collection" style="padding:0 15px;">
                <li>
                    <div class="row">
                        <div class="center col s2"><b>Name</b></div>
                        <div class="center col s4"><b>Email</b></div>
                        <div class="center col s5"><b>Ip Details</b></div>
                        <div class="center col s1 "><b>Online</b></div>
                    </div>
                </li>
            </ul>
            <ul id="issues-collection" class="collection usersOnline">
            </ul>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    <!-- Modal TodaysPost -->
    <?php /*<div id="todaypost" class="modal modal-fluid modal-lg">*/ ?>
    <div id="todaypost" class="modal modal-lg">
        <div class="modal-content ">
            <h4>Today's posts</h4><br>
            <hr>

            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" id="ad_1" href="#test1">Local Ads</a></li>
                        <li class="tab col s3"><a id="ad_2" href="#test2">Multiple Cities Ads 2</a></li>
                        <li class="tab col s3"><a id="ad_3" href="#test3">Backpage Ads</a></li>
                        <div class="indicator" style="bottom: 15px; right: 658px; left: 0px;"></div>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <div class="row">

                        <div class="col s11 m11 l11" style="">
                            <h5 style="margin-bottom:35px;">Local Ads</h5>
                            <table class="centered striped" id="local_ad">
                                <thead>
                                <tr>
                                    <?php /*<th data-field="id"><span title="Check all ads"><input type="checkbox" id="checked_all"/><label*/ ?>
                                    <?php /*for="checked_all" style="left:0; visibility:visible;"></label></span></th>*/ ?>
                                    <th data-field="id">Post ID</th>
                                    <th data-field="email">Email</th>
                                    <th data-field="name">Title</th>
                                    <th data-field="gender">Ip Details</th>
                                    <th data-field="email">Category</th>
                                    <?php /*<th data-field="phone">Email</th>*/ ?>
                                    <th data-field="phone">Status</th>
                                    <th data-field="phone">Amount</th>
                                    <th data-field="address">Posted Date</th>
                                    <th data-field="address">Expiry Date</th>
                                    <th data-field="action">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="test2" class="col s12">
                    <div class="row">
                        <div style="margin-left:0px !important;">
                            <div class="col s11 m11 l11" style="">
                                <?php /*<a class="waves-effect waves-light btn modal-trigger change_cat" style="float: right;margin-left:20px" data-target="changeCategory" href="#changeCategory" title="Change category of multiple ads">Change Post Category</a>*/ ?>
                                <?php /*<a class="waves-effect waves-light btn modal-trigger" style="float: right;" data-target="modal" href="#modal" id="btn_date">Add Post Expiry Days</a>*/ ?>

                                <h5 style="margin-bottom:35px;">POST IN MULTIPLE CITIES</h5>
                                <?php /*<a id="delete_all" title="Delete ads" style="cursor: pointer; position: absolute; margin: 24px 0px 0px 90px;background:#cc3e3e;" class="waves-effect waves-light btn">*/ ?>
                                <?php /*<i class="material-icons dp48" style="color:#fff;">delete</i>*/ ?>
                                <?php /*</a>*/ ?>
                                <table class="centered striped" id="multiple_city_ad">
                                    <thead>
                                    <tr>
                                        <?php /*<th data-field="id"><span title="Check all ads"><input type="checkbox"  id="checked_all" /><label for="checked_all" style="left:0; visibility:visible;"></label></span></th>*/ ?>
                                        <th data-field="id">Post ID</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="name">Title</th>
                                        <?php /*<th data-field="gender">Location</th>*/ ?>
                                        <th data-field="phone">Ip Details</th>
                                        <th data-field="email">Category</th>
                                        <?php /*<th data-field="email">Sub-Category</th>*/ ?>
                                        <th data-field="phone">Status</th>
                                        <th data-field="phone">Amount</th>
                                        <th data-field="address">Posted Date</th>
                                        <th data-field="address">Expiry Date</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="test3" class="col s12">
                    <div class="row">
                        <div style="margin-left:0px !important;">
                            <div class="col s11 m11 l11" style="">
                                <h5 style="margin-bottom:35px;">BACKPAGE ADS</h5>
                                <?php /*<a id="delete_all" title="Delete ads" style="cursor: pointer; position: absolute; margin: 24px 0px 0px 90px;background:#cc3e3e;" class="waves-effect waves-light btn">*/ ?>
                                <?php /*<i class="material-icons dp48" style="color:#fff;">delete</i>*/ ?>
                                <?php /*</a>*/ ?>
                                <table class="centered striped" id="backpage_ad">
                                    <thead>
                                    <tr>
                                        <?php /*<th data-field="id"><span title="Check all ads"><input type="checkbox"  id="checked_all" /><label for="checked_all" style="left:0; visibility:visible;"></label></span></th>*/ ?>
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
                </div>
            </div>
            <hr>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    <!-- Lock Modal -->
    <div id="pinModal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Create a PIN</h4><br>
            <p><center><i class="material-icons dp48" style="font-size:7rem; color:#351969;">lock</i></center></p>
            <p class="center-align"> Setup a PIN to be used in sensitive portion of website admin. This secures the information (Transactirnal Details, Payment, Logs etc...) from any unauthorized access.</p>
            <br>

            <div class="row" style="background:#f0f0f0;">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pin" type="password" class="validate">
                            <label for="pin">Enter PIN</label>
                            <span id="pin_error" style="display: none;color: red;"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="confirm_pin" type="password" class="validate">
                            <label for="confirm_pin">Re-Enter PIN</label>
                            <span id="confirm_pin_error" style="display: none;color: red;"></span>
                        </div>
                    </div>
                </form>
            </div>
            <br>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action waves-effect waves-green btn-flat" id="add_pin">Save</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-default btn-flat">Skip for now</a>
        </div>
    </div>
    <input id="dashboard_sound" name="dashboard_sound" value="<?php echo e($sound_value->dashboard_sound); ?>" hidden>
    <input id="dashboard_audio_file" name="dashboard_audio_file" value="<?php echo e($sound_value->dashboard_audio_file); ?>" hidden>
    <input id="online_user_audio_file" name="online_user_audio_file" value="<?php echo e($sound_value->online_user_audio_file); ?>" hidden>
    <input id="paid_ads_audio_file" name="paid_ads_audio_file" value="<?php echo e($sound_value->paid_ads_audio_file); ?>" hidden>
    <input id="free_ads_audio_file" name="free_ads_audio_file" value="<?php echo e($sound_value->free_ads_audio_file); ?>" hidden>
    <input id="amount" name="amount" value="<?php echo e($amount[0]->Amount); ?>" hidden>
    <?php if(isset($sound_value->dashboard_sound) && $sound_value->dashboard_sound == 1): ?>
        <audio controls autoplay hidden>
            <source src="/<?php echo e($sound_value->dashboard_audio_file); ?>" type="audio/mpeg" hidden>

        </audio>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page_scripts'); ?>
    <script src="/assets/admin/js/amcharts.js"></script>
    <script src="/assets/admin/js/serial.js"></script>
    <script src="/assets/admin/js/export.min.js"></script>
    <script src="/assets/admin/js/light.js"></script>
    <script src='/assets/admin/js/Chart.min.js'></script>
    <script src="/assets/admin/js/jquery.dataTables.min.js"></script>

    <?php /*<script>*/ ?>
        <?php /*$('ul.tabs').tabs();*/ ?>
        <?php /*$('.modal-trigger').leanModal({*/ ?>
            <?php /*ready: function () {*/ ?>
                <?php /*$('#ad_1').click();*/ ?>
            <?php /*}*/ ?>
        <?php /*});*/ ?>
    <?php /*</script>*/ ?>
    <?php /*<script src="/assets/admin/js/charts2.js"></script>*/ ?>
    <?php /*<?php if($sound_value->dashboard_sound==1): ?>*/ ?>
    <?php /*<audio controls autoplay hidden>*/ ?>
        <?php /*<source src="/sound2.ogg" type="audio/ogg" hidden>*/ ?>
        <?php /*<source src="/sound2.mp3" type="audio/mpeg" hidden>*/ ?>
    <?php /*</audio>*/ ?>
    <?php /*<?php endif; ?>*/ ?>
    <script>
        $(document).ready(function () {

            <?php if(empty(Session::get('pc_admin')->admin_pin)): ?>
              $('#pinModal').openModal();
            <?php endif; ?>

            $('#add_pin').click(function () {
                var pin = $('#pin').val().trim();
                var confirm_pin = $('#confirm_pin').val().trim();
                if (pin == "") {
                    $('#confirm_pin_error').css('display', 'none');
                    $('#pin_error').css('display', 'block').html('Please enter your pin');
//                Materialize.toast('<span><b>Please enter your secret pin</b></span>', 2000);
                }else if(confirm_pin == "") {
                    $('#pin_error').css('display', 'none');
                    $('#confirm_pin_error').css('display', 'block').html('Re-Enter same pin');
                } else if(pin != confirm_pin) {
                    $('#confirm_pin_error').css('display', 'block').html('Pins does not match.');
                } else {
                    $('#confirm_pin_error').css('display', 'none');
                    $.ajax({
                        type: "POST",
                        url: '/admin/add/secret/pin',
                        dataType: 'json',
                        data: {pin: pin,confirm_pin:confirm_pin},
                        success: function (data) {
                            if (data.status == 'success') {
                                $('#pin_error').css('display', 'none');
                                Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                                $('#pinModal').closeModal();
                            }
                            if (data.status == 'error') {
                                $('#pin_error').css('display', 'block').html(data.msg);
//                            Materialize.toast('<span><b>' + data.msg + '</b></span>', 2000);
                            }
                        }
                    });
                }

            });
        });
    </script>
    <script type="text/javascript">
        $(window).load(function () {
            setTimeout(function () {
                Materialize.toast('<span>Welcome To Page20 Admin Dashboard</span>', 1500);
            }, 1500);
        });
    </script>

    <script>
        $.fn.dataTable.ext.errMode = 'throw';
        jQuery(document).ready(function () {
            chart.initCharts(); // init index page's custom scripts
            var tab1, tab2, tab3;
            if (!tab1) {
                setTimeout(function(){
                    tab1 = $('#local_ad').dataTable({
//                        stateSave: true,
                        "order": [[7, "desc"]],
                        "ajax": {
                            "url": "/admin/todays/posts",
                            "data": {
                                type: 1
                            },
                            "type": "POST"
                        }
                    });
                },2000);
            }
            $('#ad_2').click(function () {
//                    $('ul.tabs').tabs('select_tab', '#test2');
                if (!tab2) {
                    tab2 = $('#multiple_city_ad').dataTable({
//                        stateSave: true,
                        "order": [[7, "desc"]],
                        "ajax": {
                            "url": "/admin/todays/posts",
                            "data": {
                                type: 2
                            },
                            "type": "POST"
                        }
                    })
                }
            });
            $('#ad_3').click(function () {
//                    $('ul.tabs').tabs('select_tab', '#test3');
                if (!tab3) {
                    tab3 = $('#backpage_ad').dataTable({
//                        stateSave: true,
                        "order": [[0, "desc"]],
                        "ajax": {
                            "url": "/admin/todays/posts",
                            "data": {
                                type: 3
                            },
                            "type": "POST"
                        }
                    })
                }
            });

            $('.online_check').click(function(){
                var online_users_count=$('#online_users_div').attr('data-count');
                if(online_users_count>0){
                    $('#online').openModal();
                }else{
                    Materialize.toast('No Online Users Found!', 1500);
                }
            });
        });

        var chart = function () {
            return {
                initCharts: function () {
                    AmCharts.makeChart("chartdiv", {
                        "type": "serial",
                        "theme": "light",
                        "categoryField": "category",
                        "categoryAxis": {
                            "gridPosition": "start"
                        },
                        "graphs": [
                            {
                                "title": "Graph title",
                                "valueField": "column-1",
                                "bullet": "round",
                                "bulletSize": 8,
                                "lineColor": "#d1655d",
                                "lineThickness": 2,
                                "type": "smoothedLine"
                            }
                        ],
                        "valueAxes": [
                            {
                                "title": "Axis title"
                            }
                        ],

                        "legend": {
                            "useGraphSettings": true
                        },
                        "chartCursor": {
                            "categoryBalloonDateFormat": "category",
                            "cursorAlpha": 0,
                            "valueLineEnabled": true,
                            "valueLineBalloonEnabled": true,
                            "valueLineAlpha": 0.5,
                            "fullWidth": true
                        },
                        "categoryAxis": {
                            "gridPosition": "start",
                            "labelRotation": 45
                        },
                        "titles": [
                            {
                                "size": 15,
                                "text": "Chart Title"
                            }
                        ],


                        "dataProvider": [
                            {
                                "category": "Active Users",
                                "column-1": $('#active_users').val()
                            },
                            {
                                "category": "Online Users",
                                "column-1": $('#online_users').val()
                            },
                            {
                                "category": "Verified Users",
                                "column-1": $('#verified_users').val()
                            },
                            {
                                "category": "Today's Posts",
                                "column-1": $('#today_post').val()
                            },
                            {
                                "category": "Paid & Sponsored Posts",
                                "column-1": $('#paid_sponsored_posts').val()
                            },
                            {
                                "category": "Pending Verification",
                                "column-1": $('#pending_verified_users').val()
                            },
                            {
                                "category": "Reported Ads",
                                "column-1": $('#reported_ads').val()
                            },
                            {
                                "category": "Total Posted Ads",
                                "column-1": $('#total_posts').val()
                            }
                        ]
                    });
                }
            };
        }();
        //=======Niraj==========
        // updatePostCount();
        var free_ads_audio_file=$('#free_ads_audio_file').val();
        var paid_ads_audio_file=$('#paid_ads_audio_file').val();
        var audio1 = new Audio('/'+free_ads_audio_file);
        var audio = new Audio('/'+paid_ads_audio_file);
        // var audio = new Audio('/sound2.mp3');
        $(document).ready(function () {
            // getOnlineUsers(2);
            setTimeout(function(){
               getOnlineUsers(2);
           },20000);
            var name='neeraj';
            var total_post_count=$('#total_posts').val();
            var total_amount=$('#amount').val();
            // alert(free_ads_audio_file);
            // var total_amount = 0;
            function updatePostCount(){

                setTimeout(function(){
                    $.ajax({
                        url: '/check/total/post/count',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'total_post_count': total_post_count,
                            'total_amount': total_amount
                        },
                        complete:updatePostCount,
                        success: function (res) {
                            console.log('========amount1================',res);
                            if(res.code==200){
                                $('#totalPostCount').text(res.data);
                                $('#amount').text(res.amount);
                                total_amount = res.amount;
                                total_post_count= res.data;
                                if(res.flag == 1){
                                    console.log('========amount1================',res.flag)
                                    audio.play();
                                }else if(res.flag == 0){
                                    // var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");
                                    // snd.play();
                                    audio1.play()
                                    console.log('========amount================',res.flag);
                                    // audio1.play();
                                }else{
                                    console.log(res);
                                }
                            }else{
                                console.log(res);

                            }
                        }
                    });
                },10000);
            }

            (updatePostCount)();
        });

//        $(document).ready(function(){
//            new get_fb();
//        });
//
//
//        function get_fb() {
//            var users = $.ajax({
//                type: "POST",
//                url: "/admin/check/online/user",
//                async: false
//            }).success(function () {
//                setTimeout(function () {
//                    get_fb();
//                }, 10000);
//            }).responseText;
//
//            $('#online_users_div').html(users);
//        }
//        $(document).ready(function () {
//            setTimeout(function(){
//                getOnlineUsers(2);
//            },20000);
////            new get_fb();
//        });
//         getOnlineUsers(2);
        i=0;
        var online_users_count=-1;
        var online_user_audio_file=$('#online_user_audio_file').val();

        var audioUser = new Audio('/'+online_user_audio_file);
        // audioUser.play()
        function getOnlineUsers(val){
            var status = 'true';
            if(val == 1){
                if(i == 0){status = 'true';}else{status = 'false';}
            }else if(val == 2){status = 'true';}
            if(status == 'true') {
                $.ajax({
                    url: "/admin/check/online/user",
                    method: 'POST',
                    dataType: 'json',
                    data:{
                        'online_users_count':online_users_count
                    },
                    success: function (result) {

                        // var loder = $('#loadingDiv').css('display');
                        // if(loder != 'none'){
                        //     $("#loadingDiv").attr("style","display:none");
                        // }

//                        result = $.parseJSON(result);
                        var appendData = '';
                        if (result.status == 200) {
                            console.log(result.user,'!!');
                            $(result.user).each(function (ind, val) {

                                appendData += '<li class="collection-item">' +
                                        '<div class="row">' +
                                        '<div class="center col s2" style="word-wrap: break-word;">' + val.firstname + '</div>' +
                                        '<div class="center col s4" style="word-wrap: break-word;">' + val.email + '</div>';
                                if(val.user_meta_data){
                                    var ipData=JSON.parse(val.user_meta_data);
                                    var ip =ipData.ip;
                                    var cityName =ipData.city;
                                    var countryName =ipData.country;
                                    appendData+='<div class="center col s5" style="word-wrap: break-word;"><b>'+ip+'</b>('+cityName+':'+countryName+')</div>';
                                }else{
                                    appendData+='<div class="center col s5">Not Provided</div>';
                                }
                                appendData+='<div class="center col s1" style="margin: 8px 0px 0px 0px;"><div class="online"></div></div>' +
                                        '</li>';
                            });
                            $('.usersOnline').html(appendData);
                            $('#online_users_div').html(result.count);
                            var onlineUser= $('#online_users_div').attr('data-count',result.count);
                            var onlineUsers='<?php echo e($users['online_user']); ?>';
                            var online_users_count_updatedValue=$('#online_users_div').attr('data-count');
                            // alert(online_users_count);

                            if(result.new_online == 1){
                                console.log('playing..');
                                // alert(result.new_online);
                                // var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");
                                // snd.play();
                                audioUser.play();
                                online_users_count = result.count;

                            }
                            setTimeout(function(){
                                online_users_count = result.count;
                                getOnlineUsers(2);
                            },10000);

                            // online_users_count=1;
                            // setTimeout(function(){
                            //     console.log(online_users_count_updatedValue);
                            //     console.log(online_users_count);
                            //     // if(online_users_count_updatedValue>online_users_count){
                            //     //     var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");
                            //     //     snd.play();
                            //     //
                            //     // }else if(online_users_count_updatedValue<online_users_count){
                            //     //     var snd = new Audio("data:audio/wav;base64,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qJrx4KOQjahZxWbcZgztj2c49nKmkId44S71j0c8eV9yDK6uPRzx5X18eDvjvQ6yKo9ZSS6l//8elePK/Lf//IInrOF/FvDoADYAGBMGb7FtErm5MXMlmPAJQVgWta7Zx2go+8xJ0UiCb8LHHdftWyLJE0QIAIsI+UbXu67dZMjmgDGCGl1H+vpF4NSDckSIkk7Vd+sxEhBQMRU8j/12UIRhzSaUdQ+rQU5kGeFxm+hb1oh6pWWmv3uvmReDl0UnvtapVaIzo1jZbf/pD6ElLqSX+rUmOQNpJFa/r+sa4e/pBlAABoAAAAA3CUgShLdGIxsY7AUABPRrgCABdDuQ5GC7DqPQCgbbJUAoRSUj+NIEig0YfyWUho1VBBBA//uQZB4ABZx5zfMakeAAAAmwAAAAF5F3P0w9GtAAACfAAAAAwLhMDmAYWMgVEG1U0FIGCBgXBXAtfMH10000EEEEEECUBYln03TTTdNBDZopopYvrTTdNa325mImNg3TTPV9q3pmY0xoO6bv3r00y+IDGid/9aaaZTGMuj9mpu9Mpio1dXrr5HERTZSmqU36A3CumzN/9Robv/Xx4v9ijkSRSNLQhAWumap82WRSBUqXStV/YcS+XVLnSS+WLDroqArFkMEsAS+eWmrUzrO0oEmE40RlMZ5+ODIkAyKAGUwZ3mVKmcamcJnMW26MRPgUw6j+LkhyHGVGYjSUUKNpuJUQoOIAyDvEyG8S5yfK6dhZc0Tx1KI/gviKL6qvvFs1+bWtaz58uUNnryq6kt5RzOCkPWlVqVX2a/EEBUdU1KrXLf40GoiiFXK///qpoiDXrOgqDR38JB0bw7SoL+ZB9o1RCkQjQ2CBYZKd/+VJxZRRZlqSkKiws0WFxUyCwsKiMy7hUVFhIaCrNQsKkTIsLivwKKigsj8XYlwt/WKi2N4d//uQRCSAAjURNIHpMZBGYiaQPSYyAAABLAAAAAAAACWAAAAApUF/Mg+0aohSIRobBAsMlO//Kk4soosy1JSFRYWaLC4qZBYWFRGZdwqKiwkNBVmoWFSJkWFxX4FFRQWR+LsS4W/rFRb/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////VEFHAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAU291bmRib3kuZGUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMjAwNGh0dHA6Ly93d3cuc291bmRib3kuZGUAAAAAAAAAACU=");
                            //     //     snd.play();
                            //     // }
                            //     // online_users_count = result.count;
                            //     getOnlineUsers(2);
                            // },2000);
                        } else {

                        }
                    }
                });
                i= 1;
            }
        }


    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin::Layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>