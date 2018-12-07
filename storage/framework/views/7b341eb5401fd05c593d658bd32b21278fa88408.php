<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('Admin::Layouts.admin_head_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('page_head_content'); ?>
    <style>
        @import  url('https://fonts.googleapis.com/css?family=Lobster+Two:400,700|Righteous');
        @media (min-width:768px) and (max-width: 980px) {
            .logo-res {
                margin-left: 40px !important;
                margin-top: 10px !important;
            }
            .card .card-title {
                font-size: 12px !important;
            }
            .slide_icon{
                margin-left:36px;
                margin-top:21px !important;
            }
        }

        @media (min-width:320px) and (max-width: 767px) {
            .logo-res {
                margin-left: 40px !important;
            }
            .card .card-title {
                font-size: 12px !important;
            }
            .slide_icon{
                margin-left:36px;
            }
        }
        @media (min-width:1280px) and (max-width: 1920px){
            .drag-target{
                width:0px !important;

            }
        }
        .l-chart {
            padding: 20px;
            background: none;
        }

        .aspect-ratio {
            height: 0;
            padding-bottom: 50%;
            /* 495h / 990w : The Intended dimensions */
        }

        .card .card-title {
            font-size: 20px;
        }

        #chartdiv {
            width: 100%;
            height: 400px;
            font-size: 11px;
        }

        .amcharts-graph-g1 .amcharts-graph-fill {
            filter: url(#blur);
        }

        .amcharts-graph-g2 .amcharts-graph-fill {
            filter: url(#blur);
        }

        .amcharts-cursor-fill {
            filter: url(#shadow);
        }

        #chartdiv1 {
            width: 100%;
            height: 500px;
        }
        #chartdiv2 {
            width: 100%;
            height: 500px;
        }
        #chartdiv3 {
            width: 100%;
            height: 500px;
        }
        span.badge.new:after{content:""}
    </style>
</head>
<body>

<?php /*<!-- Start Page Loading -->*/ ?>
<?php /*<div id="loader-wrapper">*/ ?>
    <?php /*<div id="loader"></div>*/ ?>
    <?php /*<div class="loader-section section-left"></div>*/ ?>
    <?php /*<div class="loader-section section-right"></div>*/ ?>
<?php /*</div>*/ ?>
<?php /*<!-- End Page Loading -->*/ ?>

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="" class="brand-logo darken-1">
                                <a class="navbar-brand slide_icon" target="_blank" href="/"
                                   style="font-family: 'Lobster Two', cursive; color:#fff; font-size:30px;margin-top:13px;">Page20.com</a>
                            </a>
                        </h1></li>
                </ul>

            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">

            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details deep-purple darken-4">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="<?php if(!empty(session('pc_admin')->profile_pic)): ?><?php echo e(session('pc_admin')->profile_pic); ?><?php endif; ?>" alt=""
                                 class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="/admin/update/profile"><i class="mdi-action-face-unlock"></i>Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/admin/log/out"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                </li>
                            </ul>
                            <h6 style="color:#fff;"><?php if(!empty(Session::get('pc_admin')->firstname)): ?><?php echo e(ucfirst(Session::get('pc_admin')->firstname)); ?> <?php endif; ?></h6>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                               data-activates="profile-dropdown">Administrator <i style="margin-right: 0;" class="mdi-navigation-arrow-drop-down right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="bold <?php echo $__env->yieldContent('dashboard'); ?>"><a href="/admin/dash/board" class="waves-effect waves-purple <?php echo $__env->yieldContent('dashboard'); ?>"><i class="mdi-action-dashboard"></i> Dashboard</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="<?php echo $__env->yieldContent('verify_user'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('verify_user'); ?>">
                                <i class="material-icons">verified_user</i>Verified User <span class="new badge verified_count" style="display: none"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('verify_user_request'); ?>"><a href="/admin/request/verify/user/list">Verification Request <span class="new badge verified_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('verify_user_available'); ?>"><a href="/admin/verified/user/list">Verified User</a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('verify_user_rejected'); ?>"><a href="/admin/rejected/user/list">Rejected User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_users'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_users'); ?>"><i class="material-icons">person_pin</i> Manage User
                                <span class="new badge manage_user_count" style="display: none"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('manage_users_available'); ?>"><a href="/admin/available/users">Available User
                                            <span class="new badge active_user_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_users_pending'); ?>"><a href="/admin/pending/users">Pending User
                                            <span class="new badge pending_user_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_users_rejected'); ?>"><a href="/admin/rejected/users">Rejected User
                                            <span class="new badge rejected_user_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_block_users'); ?>"><a href="/admin/block/users">Block users
                                            <span class="new badge block_count" style="display: none"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_staff'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_staff'); ?>"><i class="material-icons">contacts</i> Manage Staff
                                <span class="new badge manage_staff_count" style="display: none"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('manage_staff_available'); ?>"><a href="/admin/staff/available_staff">Available Staff
                                            <span class="new badge active_staff_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_staff_pending'); ?>"><a href="/admin/staff/pending_staff">Pending Staff
                                            <span class="new badge pending_staff_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_staff_rejected'); ?>"><a href="/admin/staff/rejected_staff">Rejected Staff
                                            <span class="new badge rejected_staff_count" style="display: none"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_interns'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_interns'); ?>">
                                <i class="material-icons">assignment_ind</i> Manage Interns <span class="new badge manage_intern_count" style="display: none"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('manage_interns_available'); ?>"><a href="/admin/interns/available_interns">Available Interns
                                            <span class="new badge active_intern_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_interns_pending'); ?>"><a href="/admin/interns/pending_interns">Pending Interns
                                            <span class="new badge pending_intern_count" style="display: none"></span></a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_interns_rejected'); ?>"><a href="/admin/interns/rejected_interns">Rejected Interns
                                            <span class="new badge rejected_intern_count" style="display: none"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_locations'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_locations'); ?>"><i class="material-icons">location_on</i> Manage Location</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('manage_locations_add'); ?>"><a href="/admin/add/location">Add Location</a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_locations_edit'); ?>"><a href="/admin/edit/location">Edit Location</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php /*<li class="<?php echo $__env->yieldContent('manage_locations'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_locations'); ?>"><i class="material-icons">insert_chart</i> Metrice</a>*/ ?>

                        <?php /*</li>*/ ?>
                        <li class="<?php echo $__env->yieldContent('metrices'); ?>"><a href="/admin/metrics" class="waves-effect waves-purple <?php echo $__env->yieldContent('metrices'); ?>">
                                <i class="material-icons">insert_chart</i>Metrics <span class="new badge" style="display: none"></span></a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_cat'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_cat'); ?>"><i class="material-icons">view_agenda</i> Manage Category</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('manage_cat_add'); ?>"><a href="/admin/add/categories">Add Categories</a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_cat_edit'); ?>"><a href="/admin/edit/categories">Edit Categories</a>
                                    </li>
                                    <li class="<?php echo $__env->yieldContent('manage_cat_disable'); ?>"><a href="/admin/disable/categories">Disable Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_posts'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_posts'); ?>">
                                <i class="material-icons">forum</i></i> Manage Posts <span class="new badge post_count" style="display: none"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="<?php echo $__env->yieldContent('all_posts'); ?>"><a href="/admin/user/post/list">Free/Paid Ads <span class="new badge local_count" style="display: none"></span></a></li>
                                    <li class="<?php echo $__env->yieldContent('manage_multiple_posts'); ?>"><a href="/admin/user/multiple/post/list">Paid Sponsored Ads <span class="new badge multiple_count" style="display: none"></span></a></li>
                                    <li class="<?php echo $__env->yieldContent('backpage_posts'); ?>"><a href="/admin/backpage/ads">BackPage Ads <span class="new badge backpage_count" style="display: none"></span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="<?php echo $__env->yieldContent('manage_transactions'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_transactions'); ?>">
                                <i class="material-icons">attach_money</i>Manage Payments <span class="new badge payment_count" style="display: none"></span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class=" <?php echo $__env->yieldContent('transactions'); ?>"><a href="/admin/user/transaction/history">Transaction History
                                             <span class="new badge transactions_count" style="display: none"></span></a></li>
                                    <li class=" <?php echo $__env->yieldContent('fund_transfer'); ?>"><a href="/admin/fund/transfer">Fund Transfer
                                            <span class="new badge transfer_count" style="display: none"></span></a></li>
                                    <li class=" <?php echo $__env->yieldContent('payment_gateways'); ?>"><a href="/admin/user/all/payment/gateways">Payment Gateways</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('logs'); ?>"><a href="/admin/all/logs/list" class="waves-effect waves-purple <?php echo $__env->yieldContent('logs'); ?>">
                        <i class="material-icons">receipt</i>Logs <span class="new badge logs_count" style="display: none"></span></a>
                </li>
                <li class="bold <?php echo $__env->yieldContent('backpage_bot'); ?>"><a href="/admin/backpage/bot" class="waves-effect waves-purple <?php echo $__env->yieldContent('backpage_bot'); ?>">
                        <i class="material-icons">navigate_before</i> Backpage Bot Creds</a>
                <li class="bold <?php echo $__env->yieldContent('reported_ad'); ?>"><a href="/admin/user/reported/post/list" class="waves-effect waves-purple <?php echo $__env->yieldContent('reported_ad'); ?>">
                        <i class="material-icons">report_problem</i> Reported Ads <span class="new badge reports_count" style="display: none"></span></a>
                </li>
                <li class="bold <?php echo $__env->yieldContent('promotion_code'); ?>"><a href="/admin/promotion/code" class="waves-effect waves-purple <?php echo $__env->yieldContent('promotion_code'); ?>"><i class="material-icons dp48">settings_ethernet</i> Promotion Code</a></li>
                <?php /*<li class="bold <?php echo $__env->yieldContent('post_rules'); ?>"><a href="/admin/post/settings" class="waves-effect waves-purple <?php echo $__env->yieldContent('post_rules'); ?>"><i class="material-icons">settings</i>Settings</a>*/ ?>
                <?php /*</li>*/ ?>
                <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                <li class="<?php echo $__env->yieldContent('manage_settings'); ?>"><a class="collapsible-header waves-effect waves-purple <?php echo $__env->yieldContent('manage_settings'); ?>"><i class="material-icons">settings</i> Settings</a>
                    <div class="collapsible-body">
                        <ul>
                            <li class="<?php echo $__env->yieldContent('post_security'); ?>"><a href="/admin/post/settings">Posting Securities </a></li>
                            <li class="<?php echo $__env->yieldContent('edit_message'); ?>"><a href="/admin/editMessage">Edit Message</a></li>
                            <li class="<?php echo $__env->yieldContent('maintenance'); ?>"><a href="/admin/maintenance_page">Maintenance Page</a></li>
                            <li class="<?php echo $__env->yieldContent('Packages'); ?>"><a href="/admin/packages">Packages Page</a></li>

                        </ul>
                    </div>
                </li>
                </ul>
                </li>
                <li class="bold <?php echo $__env->yieldContent('soundSetting'); ?>"><a href="/admin/soundSetting" class="waves-effect waves-purple <?php echo $__env->yieldContent('sound_setting'); ?>"><i class="material-icons">surround_sound</i> Sound Settings</a></li>

                <li class="bold <?php echo $__env->yieldContent('ad_banner'); ?>"><a href="/admin/add/banner" class="waves-effect waves-purple <?php echo $__env->yieldContent('ad_banner'); ?>"><i class="material-icons">class</i> Ad Banner</a></li>
                <li class="bold <?php echo $__env->yieldContent('error'); ?>">
                    <a href="/admin/all/error/list" class="waves-effect waves-purple <?php echo $__env->yieldContent('error'); ?>">
                        <i class="material-icons">bug_report</i>Reported Errors <span class="new badge errors_count" style="display: none"></span></a>
                </li>
                <?php /*<li class="bold <?php echo $__env->yieldContent('contacts'); ?>"><a href="/admin/user/all/tickets" class="waves-effect waves-purple <?php echo $__env->yieldContent('contacts'); ?>"><i class="material-icons">class</i>Manage Tickets</a></li>*/ ?>
                <li class="bold <?php echo $__env->yieldContent('all_message'); ?>"><a href="/admin/all/messages"  class="waves-effect waves-purple <?php echo $__env->yieldContent('contacts'); ?>"><i
                                class="material-icons">message</i>Admin Messages <span class="new badge message_count" style="display: none"></span></a></li>

                <li class="bold <?php echo $__env->yieldContent('contacts'); ?>"><a href="/admin/user/all/contacts" class="waves-effect waves-purple <?php echo $__env->yieldContent('contacts'); ?>">
                        <i class="material-icons">perm_phone_msg</i>User Queries <span class="new badge contacts_count" style="display: none"></span></a></li>
                <li class="bold <?php echo $__env->yieldContent('forbidden_words'); ?>"><a href="/text/upload/bad/words" class="waves-effect waves-purple <?php echo $__env->yieldContent('forbidden_words'); ?>"><i class="material-icons">not_interested</i> Adult Forbidden words</a></li>

            </ul>
            <a href="#" data-activates="slide-out"
               class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only deep-purple"><i class="mdi-navigation-menu"></i></a>

        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">

                <!--chart dashboard start-->
                <div id="chart-dashboard">

                        <?php echo $__env->yieldContent('page_content'); ?>

                </div>
                <!--chart dashboard end-->
                </div>

        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<?php echo $__env->make('Admin::Layouts.admin_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
    $.fn.dataTable.ext.errMode = 'throw';
    function updateSeenStatus(type){
        $.ajax({
            url:"/update/seen/activities",
            type:'post',
            dataType:'json',
            data:{
                type:type
            },
            success:function(response){
                getActivity();
            }
        });
    }
    $(document).ready(function(){
        setTimeout(function(){
            getActivity();
        },0)
    });
    query_count = -1;
    flag = 0;
    function getActivity(){
        $.ajax({
            url:"/admin/get/new/activities",
            type:'post',
            dataType:'json',
            data:{
                'query_count' : query_count
            },
            success:function(response){
                var audio1 = new Audio('/'+response.soundData.user_query_audio_file);

                if(response.code==200 && response.status=='success'){
                    // $.each(response.data,function(k,v){
                    //     if(k!=($('#page_name').attr('data-name'))){
                    //         (v>0)?($('.'+k).show(),$('.'+k).text(v)):$('.'+k).hide();
                    //     }
                    // });
                    $.each(response.data,function(k,v){
                        if(k!=($('#page_name').attr('data-name'))){
                            (v>0)?($('.'+k).show(),$('.'+k).text(v)):$('.'+k).hide();
                            if(k=='contacts_count'){
                                query_count=v;
                                // audio1.play();
                            }
                            if(k== 'query_count' && v==1 && response.soundData.userquery_sound == 1){
                                audio1.play();
                                flag = 1;
                            }

                        }
                    });
                }
            }
        });
    }
    setInterval(getActivity,10000);
</script>
<?php echo $__env->yieldContent('page_scripts'); ?>
</body>
</html>

