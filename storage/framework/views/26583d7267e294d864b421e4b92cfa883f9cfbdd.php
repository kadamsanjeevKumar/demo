<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Redirecting</title>
  <link rel='shortcut icon' type='image/x-icon' href='/assets/user/images/favicon.ico' />
  
<link rel="stylesheet" href="/assets/user/css/bootstrap.min.css" />
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato:400,100,300'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel='stylesheet' href='/assets/user/css/toastr.css'>
<style>
    * {
  margin:0px auto;
  padding: 0px;

}
body {
  background-color: #D4D9ED;
    font-family: sans-serif; 
    text-align:center;
}
.submit{
  background-color:#8A65DF;
  color:#fff;
    border:2px solid #8a65df;
}
.submit:hover{
  background-color:#fff;
  color:#8A65DF;
    border:2px solid #8a65df;
}
.cont_principal {
position: absolute;  
  width: 100%;
  height: 100%;
overflow: hidden;
}
.cont_error {
position: absolute;
  width: 100%;
  height: 300px;
  top: 50%;
  margin-top:-150px;
}

.cont_error > h1  {
 font-family: 'Lato', sans-serif;  
font-weight: 400;
  font-size:90px;
color:#fff;
position: relative;
left:-100%;
transition: all 0.5s;
}


.cont_error > p  {
 font-family: 'Lato', sans-serif;  
font-weight: 300;
  font-size:24px;
  letter-spacing: 1px;
color:#8b65e4;
position: relative;
left:100%;
transition: all 0.5s;
    transition-delay: 0.5s;
-webkit-transition: all 0.5s;
 -webkit-transition-delay: 0.5s;
}

.cont_aura_1 {
  position:absolute;
  width:300px;
  height: 120%;
top:25px;
right: -340px;
  background-color: #8A65DF;
box-shadow: 0px 0px  60px  20px  rgba(137,100,222,0.5);
-webkit-transition: all 0.5s;
  transition: all 0.5s;
}

.cont_aura_2 {
  position:absolute;
  width:100%;
  height: 300px;
right:-10%;
bottom:-301px;
 background-color: #8B65E4;
box-shadow: 0px 0px 60px 10px rgba(131, 95, 214, 0.5),0px 0px  20px  0px  rgba(0,0,0,0.1);
  z-index:5;
transition: all 0.5s;
-webkit-transition: all 0.5s;
}

.cont_error_active > .cont_error > h1 {
  left:0%;
}
.cont_error_active > .cont_error > p {
  left:0%;
}

.cont_error_active > .cont_aura_2 {
    animation-name: animation_error_2;
    animation-duration: 4s;
  animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
transform: rotate(-20deg);    
}
.cont_error_active > .cont_aura_1 {
 transform: rotate(20deg);
  right:-170px;
    animation-name: animation_error_1;
    animation-duration: 4s;
  animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
}

@-webkit-keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }
}
@-o-keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }

}
@-moz-keyframes animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }

}
@keyframes  animation_error_1 {
  from {
    -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
  }
  to {  -webkit-transform: rotate(25deg);
  transform: rotate(25deg);
  }
}




@-webkit-keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}
@-o-keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}
}
@-moz-keyframes animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}
@keyframes  animation_error_2 {
  from { -webkit-transform: rotate(-15deg); 
  transform: rotate(-15deg);
  }
  to { -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
  }
}

</style>
      

  
</head>

<body>
  <div class="cont_principal">
<div class="cont_error">
  
<h1><i class="material-icons dp48" style="font-size:90px;">sentiment_very_dissatisfied</i> <br> Oops</h1>  
  <p>This site is currently under maintenance. We will be back shortly <br> Thank you for your patience.</p>
  <button class="btn btn-default submit" type="button" style="" data-toggle="modal" data-target="#errorReport">Submit your Report</button>
  </div>
<div class="cont_aura_1"></div>
<div class="cont_aura_2"></div>
</div>

  <div id="errorReport" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="color:#8A65DF;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Reason of Error</b></h4>
        </div>
        <div class="modal-body">
          <form>
            <textarea id="feedback" name="feedback" rows="4" style="width:65%;" placeholder="Your feedback goes here..."></textarea><br/><br/>
            <p id="success" style="display: none; color: green; "></p>
            <p id="error" style="display: none; color: red; "></p>
            <button id="submitForm" class="btn btn-default submit" type="button" style="">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
    
    <script src="/assets/user/js/jquery.min.js"></script>
    <script src="/assets/user/js/bootstrap.min.js"></script>
  <script src="/assets/user/js/toastr.js"></script>

  <script>
    window.onload = function(){
      document.querySelector('.cont_principal').className= "cont_principal cont_error_active";
    };

    var count = 0;
    $('#submitForm').click(function() {
      $('#error').hide();
      $('#success').hide();

      var field = '';
      var href = window.location.href;
      if(href.indexOf('field=') != -1){
        var params = {};
        var parts = location.search.substring(1).split('&');
        for (var i = 0; i < parts.length; i++) {
          var nv = parts[i].split('=');
          if (!nv[0]) continue;
          params[nv[0]] = nv[1] || true;
        }
        field = params.field;
      }
      var desc = $('#feedback').val();
      if(desc.trim() == ""){
        $('#error').show().fadeOut(20000);
        $('#error').html('Please enter description');
      }else{
        $('#submitForm').attr('disabled','true');
        if(count == 0) {
          $.ajax({
            url: '/user/redirect/login/error',
            type: 'POST',
            dataType: 'JSON',
            data: {field:field,desc: desc},
            success: function (data) {
              if (data.status == 'success') {
                toastr.success(data.msg);
                count = 1;
                redirectHome();
                $('#errorReport').modal('hide');

              } else if (data.status == 'error') {
                $('#error').show().fadeOut(20000);
                $('#error').html(data.msg);
              }
            }
          });
        }else if(count == 1){
          $('#error').show().fadeOut(20000);
          $('#error').html('You have already submitted a feedback. Thank you');
        }
      }

    });

    function redirectHome() {
      setTimeout(function () {
        window.location.href = '<?php echo e(env('APP_URL')); ?>'
      }, 5000);
    }

  </script>


</body>
</html>
