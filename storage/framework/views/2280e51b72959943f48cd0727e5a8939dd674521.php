<?php $__env->startSection('title', $placeDetails->place_name.' - '.env('APP_DOMAIN')); ?>

<?php $__env->startSection('style'); ?>
    <style>

        .footer {
            background-color: #f0efee;
            position: fixed !important;
            bottom: 0 !important;
            left: 0 !important;
            right: 0 !important;
            padding: 15px;
        }

        .footer_places {
            background-color:#f0efee;
            padding:15px 0px 15px;
            position: absolute;
            bottom: -200px !important;
            width: 100%
        }

        .close {
            background: #111 none repeat scroll 0 0;
            color: red;
            margin-top: 0;
            opacity: 1;
            padding:2px 5px;
            position: absolute;
        }

        .cat{
            margin-left: 0px;
        }

        /*.panel-adjust {*/
		    /*width: 1130px;*/
        /*}*/
        /*@media (min-width:320px) and (max-width: 767px){*/
            /*.panel-adjust {*/
                /*width: 340px !important;*/
            /*}*/
        /*}*/
        .shadow_panel{
            padding:10px;
        }

        .shadow_panel:hover {
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
            margin-top: -5px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            -webkit-column-break-inside: avoid;
            -moz-column-break-inside: avoid;
            column-break-inside: avoid;

        }
        .set-width-page{
            margin-left:35px !important;
        }

        /* Start Edit by Raj */
         #waterfall {
            margin: 10px;
            overflow: visible;
        }

        #waterfall.min {
            margin: 0;
        }

        #waterfall > li {
            /*position: absolute;*/
            left: 0;
            top: 0;
            opacity: 1;
            z-index: 0;
            transform: translateY(100px);
        }

        #waterfall > li:hover {
            z-index: 1;
        }

        #waterfall > li.show {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.3s, top 1s;
        }

        #waterfall > li>div {
            color: rgba(0, 0, 0, 0.6);
            border-radius: 3px;
            margin: 10px;
            background: rgb(255, 255, 255);
            border: 1px solid #b396e7;
            transition: all 0.5s;
        }

        #waterfall > li>div:hover {
            transform: translateY(-10px);
            border: 1px solid #533687;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
            transition: all 0.3s;
        }
		#waterfall > li>div:hover .boxtitle{ background:#533687;}

        #waterfall > li.min>div {
            margin: 0;
            transform: none;
            border: none;
            border-radius: 0;
            box-shadow: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        #waterfall > li.min>div:hover {
            transform: none;
            border: none;
            border-radius: 0;
            box-shadow: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
		
		.boxtitle{background:#7356a7; color:#fff; padding:10px;}
        .boxtitle a{color:#fff; text-decoration: none; font-size: 17px; font-weight: 300;}
		.boxdetail{background:#fff; padding:10px;}
		.namelink{ color:#333; padding:3px 0;}
		.namelink a{ color:#7356a7; text-decoration:none;}
		.namelink a:hover{color:#533687;}
		ul{list-style:none}

        #loadingDiv{
            position:fixed;
            top:0px;
            right:0px;
            width:100%;
            height:100%;
            background-color:#492c7c ;
            background-image:url("/assets/user/images/pageloader1.gif");
            background-repeat:no-repeat;
            background-position:center;
            z-index:10000000;
        }

    </style>
    <link rel="stylesheet" href="/assets/user/css/pingrid.css" />
<?php $__env->stopSection(); ?>
<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('sidebar'); ?>
        <?php /*<a href="/classifieds/postad">*/ ?>
            <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
        <?php /*</a>*/ ?>
        <?php if(isset($retrieveDraftPost->post_id)): ?>
            <?php if($retrieveDraftPost->locationid != 0): ?>
                <a onclick=checkDraft("/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>",'/classifieds/postad'); ><button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button></a>
            <?php else: ?>
                <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
            <?php endif; ?>
        <?php else: ?>
            <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>"><button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button></a>
        <?php endif; ?>
    <a href="/"><b>Home</b></a>
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a href="/admin/log/in"><b>My Account </b></a>
            <a href="/admin/posts"><b>My Ads </b></a>

        <?php else: ?>
            <a href="/login"><b>My Account </b></a>
            <a href="/check/verify/user"><b>Verify User</b></a>
        <?php endif; ?>
    <a href="/buy"><b>Buy Credits</b></a>
    <h4 class="label-side-nav"><b>Nearby Cities</b></h4>
    <?php if($nearByPlaces): ?>
        <?php foreach($nearByPlaces as $nearcity): ?>
            <?php if($placeDetails->place_id != $nearcity->place_id): ?>
                <a href="/category/<?php echo e($nearcity->sub_domain_name); ?>"><?php echo e($nearcity->place_name); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('headerdata'); ?>
    <div class="col-md-1 col-sm-2 text-center" style="position:unset;">
        <div class="">
            <?php /*<a href="/classifieds/postad">*/ ?>
                <?php /*<button class="btn btn-default post-btn" type="submit" style="">Post Ad</button>*/ ?>
            <?php /*</a>*/ ?>
            <?php if(isset($retrieveDraftPost->post_id)): ?>
                <?php if($retrieveDraftPost->locationid != 0): ?>
                    <a onclick="checkDraft('/<?php echo e($retrieveDraftPost->sub_domain_name.'/classifieds/postad?categoryId='.$retrieveDraftPost->catagoryid.'&subCategoryId='.$retrieveDraftPost->subcatagoryid.'&location='.$retrieveDraftPost->locationid.'&draftStatus=true'); ?>','/classifieds/postad')" ><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
                <?php else: ?>
                    <a onclick="checkDraft('<?php echo e('/classifieds/postad/multiple-cities/'.$retrieveDraftPost->subcatagoryid); ?>','/select/post/ad')" ><button class="btn btn-default post-btn" style="margin-bottom:9px; padding: 7px 30px;" type="button"><b>Post Ad</b></button></a>
                <?php endif; ?>
            <?php else: ?>
                <a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>"><button class="btn btn-default post-btn" type="submit"><b>Post Ad</b></button></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4 col-sm-4" style="margin-top:10px;">
        <form id="search" name="search" method="post" onsubmit="return makeUrl()" action="" >
            <input id="keyword" name="keyword" type="text" maxlength="100" class="keyword" placeholder="keyword">
            <select id="catagoryId" name="catagoryId" class="select-style">

                <?php if($categories): ?>
                    <?php foreach($categories as $categoryName): ?>
                        <?php
                        if ($categoryName['disclaimer']) {
                            $disclaimer = json_decode($categoryName['disclaimer'], true);
                            $enabled = isset($disclaimer['enabled']) ? 'on' : 'off';
                            $categoryName['enabled_city'] = isset($categoryName['enabled_city']) ? $categoryName['enabled_city'] : 'on';
                        }
                        ?>
                        <?php if($categoryName['disclaimer'] && $enabled == 'on'): ?>
                            <?php if($categoryName['enabled_city'] == 'on'): ?>
                        <option value="<?php echo e($categoryName['catRootName']); ?>"><?php echo e($categoryName['categoryName']); ?></option>
                                <?php endif; ?>
                            <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>
            <button id="searchbutton" class="btn btn-default search-button" type="submit">Search</button>
        </form>
    </div>
    <div class="col-md-3 col-sm-3 label-text" style="margin-top:10px;">
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
        <span class="user" style="float:left; margin-top:0">

                  <?php if(!empty($user_details)): ?>
               <?php if($user_details->verified_users == 1): ?>
                   <span style="float:left;margin: -2px 0 0 0">
                        <img src="/assets/user/images/verify-icon.png" class="img-responsive" style="margin-right: 5px;" width="20"/></span><?php endif; ?>
               <span style="float:left;margin: 6px 6px 0 0;"><?php echo e($user_details->firstname); ?></span>
               <?php if(!empty($user_details->profile_pic)): ?>
                   <span class="profile_image" style="float:left;">
                        <img src="<?php echo e($user_details->profile_pic); ?>" class="img-responsive"
                             style="border-radius: 100px;height: 40px;width: 40px;"/></span>
               <?php endif; ?>
           <?php endif; ?>
                    </span>

        <h6 class="" style="color:#fff;float: right;"><b><?php if(!empty($state->place_name)): ?><?php echo e($state->place_name); ?>, <?php endif; ?> <?php if(!empty($placeDetails->place_name)): ?> <?php echo e($placeDetails->place_name); ?> <?php endif; ?> </b></h6>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div style="display:block" id="loadingDiv">
    </div>
    <div class="container-fluid panel-adjust">
        <div class="row">
            <?php if(isset($banners)): ?>
                <div style="left:10px; float:left;margin-top:30px; z-index:1;position: relative;">
                <?php foreach($banners as $banner): ?>
                    <?php if($banner->banner_id == 1): ?>
                        <input type="hidden" id="banner1" value="<?php echo e($banner->banners); ?>" >
                        <?php $ban = json_decode($banner->banners,true); ?>
                        <?php if(is_array($ban)): ?>
                            <div style="width:90px;height:600px; margin-bottom:30px;" class="changeImage">
                                <span type="button" class="close ad-close1" data-dismiss="img" style="left:70px;">&times;</span>
                                <a href="<?php echo trim($ban[0]['url']) ?>" target=_blank class="ad-img">
                                    <img src="<?php echo e($ban[0]['image']); ?>" class="img-responsive" style="width:90px;height:600px;"/>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php foreach($banners as $banner): ?>
                    <?php if($banner->banner_id == 3): ?>
                        <input type="hidden" id="banner3" value="<?php echo e($banner->banners); ?>" >
                        <?php $ban = json_decode($banner->banners,true); ?>
                        <?php if(is_array($ban)): ?>
                            <div style="width:90px;height:600px;" class="changeImage2">
                                <a href="<?php echo trim($ban[0]['url']) ?>" target=_blank class="ad-img">
                                    <span type="button" class="close ad-close3" data-dismiss="img" style="left:70px;">&times;</span>
                                    <img src="<?php echo e($ban[0]['image']); ?>" class="img-responsive" style="width:90px;height:600px;"/>
                                </a>
                                <div style="width: 120px;height: 20px; "></div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                </div>

                <div style="right:10px; float:right; z-index:1;position: relative;margin-top:30px;">
            <?php foreach($banners as $banner): ?>
                    <?php if($banner->banner_id == 2): ?>
                        <input type="hidden" id="banner2" value="<?php echo e($banner->banners); ?>" >
                        <?php $ban = json_decode($banner->banners,true); ?>
                        <?php if(is_array($ban)): ?>
                            <div style="width:90px;height:600px; margin-bottom:30px;" class="changeImage1">
                                <a href="<?php echo trim($ban[0]['url']) ?>" target=_blank class="ad-img">
                                    <span type="button" class="close ad-close2" data-dismiss="img" style="right:0px;">&times;</span>
                                    <img src="<?php echo e($ban[0]['image']); ?>" class="img-responsive" style="width:90px;height:600px;"/>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php foreach($banners as $banner): ?>
                    <?php if($banner->banner_id == 4): ?>
                        <input type="hidden" id="banner4" value="<?php echo e($banner->banners); ?>" >
                        <?php $ban = json_decode($banner->banners,true); ?>
                        <?php if(is_array($ban)): ?>
                            <div style="width:90px;height:600px;" class="changeImage3">
                                <a href="<?php echo trim($ban[0]['url']) ?>" target=_blank class="ad-img">
                                    <span type="button" class="close ad-close4" data-dismiss="img" style="right:0px;">&times;</span>
                                    <img src="<?php echo e($ban[0]['image']); ?>" class="img-responsive" style="width:90px;height:600px;"/>
                                </a>
                                <div style="width: 90px;height: 20px;"></div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                </div>

                <?php endif; ?>

                 <!-- Start Edit by Raj -->
            <ul id="waterfall">
                <?php if(isset($categories)): ?>
                    <?php foreach($categories as $category): ?>
                        <?php
                        $disclaimerPresent='';
                        if($category['disclaimer'])
                        {
                            $disclaimer = json_decode($category['disclaimer'], true);
                            $disclaimerPresent = isset($disclaimer['disclaimer'])?'on':'off' ;
                            $enabled = isset($disclaimer['enabled'])?'on':'off' ;
                            $category['enabled_city'] = isset($category['enabled_city'])?$category['enabled_city']:'on' ;
                        }
                        ?>
                            <?php if($enabled == 'on'): ?>
                                <?php if(isset( $category['enabled_city']) && $category['enabled_city'] == 'on'): ?>
                            <li class="show">
                                <div>
                                <div class="boxtitle">
                                    <a><?php echo e($category['categoryName']); ?></a>
                                </div>
                                <?php /*<?php if(isset($category[0][0])): ?>*/ ?>
                                    <div class="boxdetail">
                                        <?php /*<ul class="cat list-unstyled">*/ ?>
                                            <?php foreach($category[0] as $subcategory): ?>
                                                <?php if($disclaimerPresent == 'on'): ?>
                                                    <?php if(!empty(Session::get('package_details')[1]) || isset($_COOKIE['category'.$subcategory['parentId']])): ?>
                                                        <div class="namelink"><a href="/<?php echo e($subdomain); ?>/<?php echo e($subcategory['catRootName']); ?>" <?php /*style="text-decoration:none;"*/ ?>>
                                                            <?php /*<li class="sub-cat" style="word-wrap: break-word;">*/ ?><?php echo e($subcategory['subCategoryName']); ?><?php /*</li>*/ ?>
                                                        </a></div>
                                                    <?php elseif(!empty($user_details->special_user) && $user_details->special_user['captcha'] == 'off'): ?>
                                                        <div class="namelink"><a href="/<?php echo e($subdomain); ?>/<?php echo e($subcategory['catRootName']); ?>" <?php /*style="text-decoration:none;"*/ ?>>
                                                            <?php /*<li class="sub-cat" style="word-wrap: break-word;">*/ ?><?php echo e($subcategory['subCategoryName']); ?><?php /*</li>*/ ?>
                                                        </a></div>
                                                    <?php else: ?>
                                                        <div class="namelink"><a href="/<?php echo e($subdomain); ?>/disclaimer/<?php echo e($subcategory['catRootName']); ?>">
                                                            <?php /*<li class="sub-cat" style="word-wrap: break-word;">*/ ?><?php echo e($subcategory['subCategoryName']); ?><?php /*</li>*/ ?>
                                                        </a></div>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <div class="namelink"><a href="/<?php echo e($subdomain); ?>/<?php echo e($subcategory['catRootName']); ?>"
                                                       <?php /*style="text-decoration:none;"*/ ?>>
                                                        <?php /*<li class="sub-cat" style="word-wrap: break-word;">*/ ?><?php echo e($subcategory['subCategoryName']); ?><?php /*</li>*/ ?>
                                                    </a></div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php /*</ul>*/ ?>
                                    </div>
                                <?php /*<?php endif; ?>*/ ?>

                            </div>
                        </li>
                            <?php endif; ?>
                            <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
            <!-- End Edit by Raj -->
 
            
        </div>
    </div>


    <?php /*<?php echo $__env->make('User::layouts/foter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script_function'); ?>
    <script src="/assets/user/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/user/js/jquery.pinto.js"></script>
    <script src="/assets/user/js/main.js"></script>


    <script src="/assets/user/js/newWaterfall.js"></script>

        <script type="text/javascript">
        $(document).ready(function ()
        {
            $('#waterfall').NewWaterfall({
                width: 270,
                delay: 100,
            });
            $('#loadingDiv').hide();

        });
        function random(min, max)
        {
            return min + Math.floor(Math.random() * (max - min + 1))
        }
        var loading = false;
        var dist = 500;
        var num = 1;

        setInterval(function ()
        {
            if ($(window).scrollTop() >= $(document).height() - $(window).height() - dist && !loading)
            {
                loading = true;
                //$("#waterfall").append("<li><div style='height:" + random(50, 300) + "px'>" + num + "</div></li>");
                num++;
                loading = false;
            }
        }, 60);
    </script>
    <script>
        $(document.body).on('click','.ad-close1',function () {
            $(".changeImage").remove();
            return false;
        });
        $(document.body).on('click','.ad-close2',function () {
            $(".changeImage1").remove();
            return false;
        });
        $(document.body).on('click','.ad-close3',function () {
            $(".changeImage2").remove();
            return false;
        });
        $(document.body).on('click','.ad-close4',function () {
            $(".changeImage3").remove();
            return false;
        });

    </script>

    <!-- Start Edit by Raj -->
    <script>

        var i1 = 1;
        var i2 = 1;
        var i3 = 1;
        var i4 = 1;

        $(document).ready(function(){

            if($('#banner1').val()){
                var banner1 = jQuery.parseJSON($('#banner1').val());
                var imageArr1 = [];
                var rand1 = '';
                $.each(banner1, function(key,value) {
                    imageArr1[key] = value;
                });
                setInterval(function () {
                    if (i1 >= imageArr1.length){
                        i1 = 0;
                        rand1 = imageArr1[i1];
                    }else{
                        rand1 = imageArr1[i1];
                        i1++;
                    }
                    $('.changeImage').html('<a href="' + rand1.url + '" target=_blank class="ad-img"> ' +
                            '<span type="button" class="close ad-close1" data-dismiss="img" style="left:70px;">&times;</span>' +
                            '<img src="' + rand1.image + '" class="img-responsive" style="width:90px;height:600px;"/>' +
                            '</a> ');

                }, 5000);
            }


            if($('#banner2').val()) {
                var banner2 = jQuery.parseJSON($('#banner2').val());
                var imageArr2 = [];
                var rand2 = '';
                $.each(banner2, function (key, value) {
                    imageArr2[key] = value;
                });
                setInterval(function () {
                    if (i2 >= imageArr2.length) {
                        i2 = 0;
                        rand2 = imageArr2[i2];
                    } else {
                        rand2 = imageArr2[i2];
                        i2++;
                    }
                    $('.changeImage1').html('<a href="' + rand2.url + '" target=_blank class="ad-img"> ' +
                            '<span type="button" class="close ad-close2" data-dismiss="img" style="right:0px;">&times;</span>' +
                            '<img src="' + rand2.image + '" class="img-responsive" style="width:90px;height:600px;"/>' +
                            '</a> ');

                }, 5000);
            }


            if($('#banner3').val()) {
                var banner3 = jQuery.parseJSON($('#banner3').val());
                var imageArr3 = [];
                var rand3 = '';
                $.each(banner3, function (key, value) {
                    imageArr3[key] = value;
                });
                setInterval(function () {
                    if (i3 >= imageArr3.length) {
                        i3 = 0;
                        rand3 = imageArr3[i3];
                    } else {
                        rand3 = imageArr3[i3];
                        i3++;
                    }
                    $('.changeImage2').html('<a href="' + rand3.url + '" target=_blank class="ad-img"> ' +
                            ' <span type="button" class="close ad-close3" data-dismiss="img" style="left:70px;">&times;</span>' +
                            '<img src="' + rand3.image + '" class="img-responsive" style="width:90px;height:600px;"/>' +
                            '</a>');

                }, 5000);
            }

            if($('#banner4').val()) {
                var banner4 = jQuery.parseJSON($('#banner4').val());
                var imageArr4 = [];
                var rand4 = '';
                $.each(banner4, function (key, value) {
                    imageArr4[key] = value;
                });
                setInterval(function () {
                    if (i4 >= imageArr4.length) {
                        i4 = 0;
                        rand4 = imageArr4[i4];
                    } else {
                        rand4 = imageArr4[i4];
                        i4++;
                    }
                    $('.changeImage3').html('<a href="' + rand4.url + '" target=_blank class="ad-img"> ' +
                            '<span type="button" class="close ad-close4" data-dismiss="img" style="right:0px;">&times;</span>' +
                            '<img src="' + rand4.image + '" class="img-responsive" style="width:90px;height:600px;"/>' +
                            '</a> ');

                }, 5000);
            }

        });
    </script>

    <!-- End Edit by Raj -->
    <script type="text/javascript">
        function formSubmit(element){
            var url = $("#test").attr("action");
            var newParam = "&new=123";
            url += "?" + element.name + "=" + element.value + newParam;
            $("#test").attr("action", url);
            $("#test")[0].submit();
        }

        document.getElementById("searchbutton").addEventListener("click", function () {
            form.submit();
        });
    </script>
    <script>
        function makeUrl()
        {
            var url = '';
            var categoryId = $('#catagoryId').val();
            var keyword = $('#keyword').val();
            if(keyword == '') {
                document.search.action = '/'+'<?php echo e($placeDetails->sub_domain_name); ?>'+'/category/' + categoryId;
            }else{
                document.search.action = '/'+'<?php echo e($placeDetails->sub_domain_name); ?>'+'/category/' + categoryId +'/?keyword='+keyword;
            }
        }
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>