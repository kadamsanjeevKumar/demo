<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <?php echo $__env->yieldContent('sidebar'); ?>



    <?php /*<a href="/login"><b>My Account</b></a>*/ ?>
    <?php /*<a href="#"><b>Contact</b></a>*/ ?>
    <?php /*<h4 class="label-side-nav"><b>Change Country</b></h4>*/ ?>
    <?php /*<a href="#">Asia</a>*/ ?>
    <?php /*<a href="#">Europe</a>*/ ?>
    <?php /*<a href="#">Canada</a>*/ ?>
    <?php /*<h4 class="label-side-nav"><b>Nearby Cities</b></h4>*/ ?>
    <?php /*<a href="#">auburn</a>*/ ?>
    <?php /*<a href="#">birmingham</a>*/ ?>
    <?php /*<a href="#">dothan</a>*/ ?>
    <?php /*<a href="#">View all cities</a>*/ ?>
</div>
<!-- Raj -->
<style>
    .always-visible.ps.sidenav > .ps__scrollbar-x-rail, .always-visible.ps.sidenav > .ps__scrollbar-y-rail {opacity: 0.6;}
</style>
<script>
    window.onload = function () {
        [].forEach.call(document.querySelectorAll('.sidenav'), function (el) {
            Ps.initialize(el);
        });
    };
</script>
<!-- / Raj -->