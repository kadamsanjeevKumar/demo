<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>404 page Animation </title>
  <link rel='shortcut icon' type='image/x-icon' href='/assets/user/images/favicon.ico' />

<link rel="stylesheet" href="/assets/user/css/bootstrap.min.css" />
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato:400,100,300'>
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
  font-size:150px;
color:#fff;
position: relative;
left:-100%;
transition: all 0.5s;
}


.cont_error > p  {
 font-family: 'Lato', sans-serif;
font-weight: 300;
  font-size:24px;
  letter-spacing: 5px;
color:#9294AE;
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

<h1>Oops</h1>
  <p id="success" style="display: none; color: green; ">Thank you for reporting an error</p>
  <input id="url" type="hidden" name="link" value="<?php echo e(Request::url()); ?>">
  <p>The Page you're looking for isn't here.</p>
    <button class="btn btn-default submit" type="button" style="" data-toggle="modal" data-target="#errorReport">Submit your Error Report</button>
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
        <form id="errorForm" action="" method="post">
          <input type="text" name="name" value="" placeholder="Name" style="width: 65%;"><br> <br/>
          <input id="email" type="text" name="email" value="" placeholder="Email" style="width: 65%;" required><br> <br/>
          <p id="emailError" class="text-left" style="display: none; color: red; margin-left: 17.4%; margin-top: -3%;">Please enter email</p>
          <p id="emailValid" class="text-left" style="display: none; color: red; margin-left: 17.4%; margin-top: -3%;">Email is not valid</p>
          <input type="hidden" name="link" value="<?php echo e(Request::url()); ?>">
          <textarea id="feedback" name="feedback" rows="4" style="width:65%;" placeholder="Your feedback goes here..."></textarea><br/><br/>
          <p id="desError" class="text-left" style="display: none; color: red; margin-left: 17.4%; margin-top: -3%;">Please enter description</p>
          <p id="success" style="display: none; color: green; ">Thank you for reporting an error</p>
          <p id="error" style="display: none; color: red; ">Oops! Something went wrong please try after some time</p>
          <p id="already" style="display: none; color: red; ">You have allready submitted a feedback thank you</p>
          <button id="submitForm" class="btn btn-default submit" type="button" style="">Submit</button>
        </form>
      </div>
   </div>
  </div>
</div>
    <script src="/assets/user/js/jquery.min.js"></script>
    <script src="/assets/user/js/bootstrap.min.js"></script>
  <script src="/js/toastr.js"></script>
  <script>

        window.onload = function(){
        document.querySelector('.cont_principal').className= "cont_principal cont_error_active";
        };

        count = 0;
        $('#submitForm').click(function(){

          $('#emailError').hide();
          $('#desError').hide();

          var status = true;
          var email = $('#email').val();
          var description = $('#feedback').val();
          if(email == '' || email == null){
            $('#emailError').show();
            status = false;
          }else{
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
              $('#emailValid').show();
              status = false;
            }
          }

          if(description == '' || description == null){
            $('#desError').show();
            status = false;
          }

          if(status == false){
            return false;
          }

          var fieldValue = $('#errorForm').serializeArray();
          fieldValue =  JSON.stringify(fieldValue);
          if(count == 0) {
            $.ajax({
              type: "POST",
              url: '/user-errors',
              async: false,
              dataType: 'JSON',
              data: {
                data: fieldValue
              },
              success: function (response) {
                if (response.status == 'true') {
                  $('#errorReport').modal('hide');
                  count = 1;
                  toastr.success('Thank you for reporting an error');
//                  $('#success').show().fadeOut(20000);
                  redirectHome();
                } else if (response.status == 'false') {
                  $('#error').show().fadeOut(20000);
                }
              }
            });
          }else if(count == 1){
            $('#already').show().fadeOut(20000);
          }
        });

        function redirectHome() {
          setTimeout(function () {
            window.location.href = '<?php echo e(env('APP_URL')); ?>'
          }, 5000);
        }

        window.onbeforeunload  = function () {
          if (count == 0) {
            var url = $('#url').val();
            alert(url);
            $.ajax({
              type: "POST",
              url: '/user-errors',
              async: false,
              dataType: 'JSON',
              data: {
                url: url
              }
            });
          }
        };
    </script>

</body>
</html>
