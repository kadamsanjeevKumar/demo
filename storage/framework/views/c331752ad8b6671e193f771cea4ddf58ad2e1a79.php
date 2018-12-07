<?php if(isset($placeDetails->sub_domain_name)): ?>
    <?php $__env->startSection('title', $placeDetails->sub_domain_name.' - '.env('APP_DOMAIN')); ?>
<?php else: ?>
    <?php $__env->startSection('title', env('APP_DOMAIN')); ?>
<?php endif; ?>
<?php
$retrieveDraftPost = retrieveDraftPost();
?>
<?php $__env->startSection('footerdata'); ?>
    <?php if(isset($placeDetails->sub_domain_name)): ?>
        <?php echo e($placeDetails->sub_domain_name.'.'.env('APP_DOMAIN')); ?> is an interactive computer service that enables access by multiple users and should not be treated as the publisher or speaker of any information provided by another information content provider. © 2017
        <a href="/"><?php echo e(env('APP_DOMAIN')); ?></a>
    <?php else: ?>
        <?php echo e(env('APP_DOMAIN')); ?> is an interactive computer service that enables access by multiple users and should not be treated as the publisher or speaker of any information provided by another information content provider. © 2017
        <a href="/"><?php echo e(env('APP_DOMAIN')); ?></a>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>
        @media (min-width:320px) and (max-width: 640px) {
            .profile_image{
                margin: -12px 0px 6px 9px !important;
            }
        }
        .profile_image{
            margin: -12px 0px 0 9px;
        }
        /*.footer_adjustcat{*/
            /*background-color: #f0efee;*/
            /*bottom: 0 !important;*/
            /*padding: 15px 0 !important;*/
            /*position: fixed !important;*/
            /*width: 100% !important;*/
        /*}*/
    </style>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
    <?php /*<a href="/classifieds/postad">*/ ?>
        <?php /*<button class="btn btn-default post-ad-btn" type="button"><b>Post Ad</b></button>*/ ?>
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
    <?php if(!empty($nearByPlaces)): ?>
        <?php if($nearByPlaces): ?>
            <?php foreach($nearByPlaces as $nearcity): ?>
                <?php if($placeDetails->place_id != $nearcity->place_id): ?>
                    <a href="/category/<?php echo e($nearcity->sub_domain_name); ?>"><?php echo e($nearcity->place_name); ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('headerdata'); ?>
    <div class="col-md-1 col-sm-2 text-center" style="position:unset;">
        <form>
            <div class="">
                <?php /*<a href="/classifieds/postad">*/ ?>
                    <?php /*<button class="btn btn-default post-btn" type="button" style="">Post Ad</button>*/ ?>
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
        </form>
    </div>
    <div class="col-md-4 col-sm-3 pull-right" style="margin-top:10px;">
        <?php if(!empty(Session::get('package_details')[1])): ?>
            <a title="Go to Admin Profile" href="/admin/update/profile" style="">
                <h6 class="" style="color: rgb(255, 255, 255); float: left; margin-right: 10px;"><b>ADMIN</b></h6>
            </a>
        <?php endif; ?>
        <span class="user" style="float:left;margin-left: 20px;">

                  <?php if(!empty($user_details)): ?>
                <?php if($user_details->verified_users == 1): ?>
                    <span style="float:left;margin: -2px 0 0 0">
                        <img src="/assets/user/images/verify-icon.png" class="img-responsive" style="margin-right: 5px;" width="20"/></span><?php endif; ?>
                <span style="float:left;margin: -2px 0 0 0;"><?php echo e($user_details->firstname); ?></span>
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
    <div class="container-fluid">
        <input type="hidden" <?php if(!empty(Session::get('pc_user'))): ?> value="<?php echo e(Session::get('pc_user')['id']); ?>" <?php else: ?> value="" <?php endif; ?> id="user_id"/>
        <input type="hidden" value="" id="catId"/>
        <div class="row m-t-20">
            <ol class="breadcrumb">
                <li><a href="/" class="bread-crumb"><?php echo e(env('APP_DOMAIN')); ?></a></li>
                <li class="active"><a href="<?php if(isset($placeDetails->sub_domain_name)): ?>/<?php echo e($placeDetails->sub_domain_name); ?>/classifieds/postad <?php else: ?> /classifieds/postad <?php endif; ?>">Post ad</a></li>
            </ol>
        </div>
        <div class="row m-t-20">
            <div class="col-md-12">
                <h4 class="bread-crumb"><b id="headName">Choose a Category</b></h4>
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-10 col-md-offset-1" style="min-height: 345px;">


                <div id="catagory" style="display: block;">
                    <ul id="addSubCategory" class="list-unstyled">
                        <?php if($categories): ?>
                            <?php foreach($categories as $category): ?>
                                <?php if($category->enabled == 'on'): ?>
                                    <?php if($category->enabled_city == 'on'): ?>
                                <div class="col-md-4" style="display: block;">
                                    <ul class="list-unstyled">
                                        <a onclick="getSubCategory('<?php echo e($category->cat_id); ?>','<?php echo e($category->cat_name); ?>')"
                                           style="text-decoration:none;">
                                            <li>
                                                <div class="well well-sm category-well" style="cursor: pointer;">
                                                    <p class="category-well-name"><?php echo e($category->cat_name); ?></p>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div id="subcatagory" class="col-md-4" style="display: none">
                    <ul class="list-unstyled">
                        <a href="#" style="text-decoration:none;">
                            <li>
                                <div class="well well-sm category-well" style="cursor: pointer;">
                                    <p class="category-well-name">Local Places</p>
                                </div>
                            </li>
                        </a>
                    </ul>
                </div>

                <div id="location" style="display: none">
                    <ul class="list-unstyled">
                        <?php if(!empty($cities)): ?>
                            <?php foreach($cities as $city): ?>
                                <div class="col-md-4">
                                    <ul class="list-unstyled">
                                        <?php if($city->sub_cities != "[]" && $city->sub_cities != null): ?>
                                            <a onclick="showSubcities('<?php echo e($city->place_id); ?>','<?php echo e($city->sub_domain_name); ?>','<?php echo e($city->place_name); ?>','<?php echo e($city->sub_cities); ?>')">
                                                <li>
                                                    <div class="well well-sm category-well" style="cursor: pointer;">
                                                        <p class="category-well-name"><?php echo e($city->place_name); ?></p>
                                                    </div>
                                                </li>
                                            </a>
                                        <?php else: ?>

                                            <a onclick='addLocation("<?php echo e($city->place_id); ?>","<?php echo e($city->sub_domain_name); ?>","<?php echo e($city->place_name); ?>")'>
                                                <li>
                                                    <div class="well well-sm category-well" style="cursor: pointer;">
                                                        <p class="category-well-name"><?php echo e($city->place_name); ?></p>
                                                    </div>
                                                </li>
                                            </a>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div id="sub-location" style="display: none">
                    <ul class="list-unstyled" id="subCity">

                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <a>
                                    <li>
                                        <div class="well well-sm category-well" style="cursor: pointer;">
                                            <p class="category-well-name"></p>
                                        </div>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script_function'); ?>

    <script>
        cat = 1;
        function getSubCategory(id, catagoryName) {
            if (cat == 1) {
                $('#catId').val(id);
                $.ajax({
                    url: '/getSubCategories',
                    data: {
                        id: id
                    },
                    type: 'post',
                    datatype: 'json',
                    success: function (data) {
                        cat = 2;
                        $('.breadcrumb').append('<li class="active">' + catagoryName + '</li>');

                        history.pushState('catagory', '', URL_add_parameter(window.location, 'categoryId', id));
//                    location.href = URL_add_parameter(window.location,'categoryId',id);
                        data = $.parseJSON(data);
                        $('#addSubCategory').empty();
                        $('#headName').html('Choose a Sub-Category');
                        $(data.subCategories).each(function (ind, val) {
                            var catId = val.cat_id;
                            var catName = val.cat_name;
                            var contents = '<div class="col-md-4" style="display: block;"> <ul class="list-unstyled">' +
                                    '<a onclick="addsubCatagory(\'' + catId + ',' + catName + '\')" style="text-decoration:none;"><li>' +
                                    '<div class="well well-sm category-well" style="cursor: pointer;">' +
                                    ' <p class="category-well-name">' + val.cat_name + '</p>' +
                                    '</div></li> </a></ul> </div>';
                            $('#addSubCategory').append(contents);
                        });
                    }
                });
            }
        }

        function addsubCatagory(id) {
            var subCatagory = id.split(",");
            var subCatagoryName = subCatagory[1];
            $('.breadcrumb').append('<li class="active">' + subCatagoryName + '</li>');
            history.pushState('subCatagory', '', URL_add_parameter(window.location, 'subCategoryId', subCatagory[0]));
            $('#catagory').hide();
            $('#location').show();
            $('#headName').html('Choose a Location')
        }


        function addsubCatagoryNew(id) {
            var subCatagory = id.split(",");
            var subCatagoryName = subCatagory[1];

            location.href = '/classifieds/postad/multiple-cities/' + subCatagory[0];

//            $('.breadcrumb').append('<li class="active">'+subCatagoryName+'</li>');
//            history.pushState('subCatagory', '', URL_add_parameter(window.location,'subCategoryId',subCatagory[0]));
//            $('#catagory').hide();
//            $('#location').show();
//            $('#headName').html('Choose a Location')
        }

        city = 1;
        function addLocation(id, domainname, locationName) {
            if(city == 1) {
                city = 2;
                $('.breadcrumb').append('<li class="active">' + locationName + '</li>');
                history.pushState('location', '', URL_add_parameter(window.location, 'location', id));
                var urlParams = window.location.href.split('?')[1];
                var url = '/'+ domainname + '/classifieds/postad?' + urlParams;
                var catId = $('#catId').val();
                if(catId == 1 || catId == 6){
                    var user_id = $('#user_id').val();
                    if (user_id == "") {
                        <?php if(!empty(Session::get('package_details')[1])): ?>
                                window.location.href = url;
                        <?php else: ?>
                                window.location.href = '/login?posting_rules=yes&url='+url;
                        <?php endif; ?>
                    }else{
                        window.location.href = url;
                    }
                }else{
                    window.location.href = url;
                }
//                window.location.href = url;
            }
        }

        function URL_add_parameter(url, param, value) {
            var hash = {};
            var parser = document.createElement('a');
            parser.href = url;
            var parameters = parser.search.split(/\?|&/);
            for (var i = 0; i < parameters.length; i++) {
                if (!parameters[i])
                    continue;
                var ary = parameters[i].split('=');
                hash[ary[0]] = ary[1];
            }
            hash[param] = value;
            var list = [];
            Object.keys(hash).forEach(function (key) {
                list.push(key + '=' + hash[key]);
            });
            parser.search = '?' + list.join('&');
//            console.log(parser);
            return parser.href;

        }

        //saurabh
        function showSubcities(id, domainname, locationName, subCities) {
            var subCities = JSON.parse(subCities);
            console.log(Array.isArray(subCities));
            var html = '';
            $(subCities).each(function (key, subCity) {
                html += '<div class="col-md-4"> <ul class="list-unstyled"> <a onclick="addSubLocation(' + id + ',\'' + domainname + '\',\'' + locationName + '\',\'' + subCity + '\')"> <li> <div class="well well-sm category-well" style="cursor: pointer;"> <p class="category-well-name">' + subCity + '</p> </div> </li> </a> </ul> </div>';
            });
            $('#catagory').hide();
            $('#location').hide();
            $('#sub-location').show();
            $('#subCity').html(html);
            $('#headName').html('Choose a Location')
        }

        function addSubLocation(id, domainname, locationName, subCity) {
//            alert("hey maa saraswati");
            $('.breadcrumb').append('<li class="active">' + locationName + '</li>');
            history.pushState('location', '', URL_add_parameter(window.location, 'location', id));
            history.pushState('location', '', URL_add_parameter(window.location, 'subLocation', subCity));
            var urlParams = window.location.href.split('?')[1];

            var url = '/' + domainname + '/classifieds/postad?' + urlParams;
            var catId = $('#catId').val();
            if(catId == 1 || catId == 6){
                var user_id = $('#user_id').val();
                if (user_id == "") {
                    <?php if(!empty(Session::get('package_details')[1])): ?>
                            window.location.href = url;
                    <?php else: ?>
                            window.location.href = '/login?posting_rules=yes&url='+url;
                    <?php endif; ?>
                }else{
                    window.location.href = url;
                }
            }else{
                window.location.href = url;
            }
//            window.location.href = url;

        }

        //        function insertParam(key, value) {
        //            key = escape(key); value = escape(value);
        //
        //            var kvp = document.location.search.substr(1).split('&');
        //            if (kvp == '') {
        //                document.location.search = '?' + key + '=' + value;
        //            }
        //            else {
        //
        //                var i = kvp.length; var x; while (i--) {
        //                    x = kvp[i].split('=');
        //
        //                    if (x[0] == key) {
        //                        x[1] = value;
        //                        kvp[i] = x.join('=');
        //                        break;
        //                    }
        //                }
        //
        //                if (i < 0) { kvp[kvp.length] = [key, value].join('='); }
        //
        //                //this will reload the page, it's likely better to store this until finished
        //                document.location.search = kvp.join('&');
        //            }
        //        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('User::layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>