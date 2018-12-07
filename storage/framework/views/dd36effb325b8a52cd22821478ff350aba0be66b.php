<style>
    #show_message {
        position: absolute;
        z-index: 99999999;
        width: 10px;
        height: 10px;
        background: green;
        border: 1px solid #fff;
        margin: -27px 0 0 10px;
        border-radius: 20px;
    }
</style>
<div class="row headerbg">
    <div class="col-md-12">
        <div class="col-md-1 col-sm-1" style="float:left;">
            <span style="font-size:30px;cursor:pointer;color:#fff;" onclick="openNav()">&#9776;</span>
        </div>
        <div class="col-md-3 col-sm-2" style="float:left; padding:0;">
            <a class="navbar-brand" href="<?php echo e(env('APP_URL')); ?>"
               style="font-family: 'Lobster Two', cursive; color:#fff; font-size:30px;">Page20.com</a>

        <?php /*<?php if(!empty(Session::get('pc_user')['id'])): ?>*/ ?>
            <?php /*<a class="navbar-brand" id="show_message"*/ ?>
               <?php /*style="font-family: 'Lobster Two', cursive; color:#fff; font-size:30px; display: none"> <i*/ ?>
                        <?php /*class="material-icons">announcement</i></a>*/ ?>
        <?php /*<?php endif; ?>*/ ?>
            <span class="fakeMetrics1" hidden>
            <a class="btn" style="padding: 0px 10px; margin-top: 15px; float: left; font-size: 20px;"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                <i style="font-size: 20px; color: #fff;" class="material-icons dp48">timeline</i>
            </a>
            </span>
            <a href="#" style="padding: 0px 18px; margin-top: 15px; float: left; font-size: 20px;" id="bell_icon" class="pull-right">
                <?php /*<i style="color:#fff;" class="material-icons dp48">add_alert</i>*/ ?>
                <i style="color:#fff;" class="glyphicon glyphicon-bell"></i>
                <span class="online-dot seen" id="show_message" style="display: none"></span>
            </a>
        </div>
        <?php echo $__env->yieldContent('headerdata'); ?>

    </div>
</div>