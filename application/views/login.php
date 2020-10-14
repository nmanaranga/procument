<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>LOGIN PROMAS- Create Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
  />
  <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
  <meta name="msapplication-tap-highlight" content="no">
  <link href="main.css" rel="stylesheet">
  <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <div class="app-container app-theme-white body-tabs-shadow">
   <div class="app-container">
    <div class="bg-premium-dark" style="height:100vh;overflow:auto;">
     <div class="d-flex justify-content-center align-items-center">
      <div class="mx-auto app-login-box col-md-4 col-sm-8">
       <div class="app-logo-inverse mx-auto mb-3"></div>
       <div class="modal-dialog w-100" style="margin-top:0%;">
        <div class="modal-content">
         <div class="modal-body">
           <form class="border border-light  needs-validation" enctype="multipart/form-data" id="ajax_form" method="post" action="javascript:void(0)" >
            <h5 class="modal-title">
             <h4 class="mt-2">
              <div style="font-weight:bold;text-align:center;"><label>PRO</label><label style="color:red;">MAS</label></div>
              
            </h4>
          </h5>
          <div class="d-flex justify-content-center align-items-center">
            <label style="font-weight: bold; font-size:16px;">Login To System<?php if(isset($error)){echo $error;}else if(isset($ok)){echo $ok;} ?></label>
          </div>
          
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput">Username</label>
            <input type="text" name="username_s" id="username_s" value=""  class="form-control " placeholder="Username" required>
          </div>
          
          <div class="col-md-12 mb-12 mb-3">
            <label for="validationCustom14">Password</label>
            <input type="password" name="password_s" id="password_s" class="form-control " placeholder="Password input" required>
          </div>
          
          <div class="d-flex justify-content-between col-md-12 mb-12 mb-3">
            <div>
             <div class="custom-control custom-checkbox">
              
              <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
            <span id="res_message">
            </span>
          </div>
          <div>
           <a href="">Forgot password?</a>
         </div>
       </div>
       
       
       
       <div class="modal-footer d-block text-center">
        <input class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" id="send_form" name="submit" value="Create Account" type="submit">
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
<div class="text-center text-white opacity-8 mt-3" style="margin-bottom:2%;">Copyright © PROMAS 2020</div>
</div>
</div>
</div>
<script type="text/javascript" src="<?php base_url()?>assets/scripts/main.js"></script>

<script>
// just for the demos, avoids form submit
(function() {
 'use strict';
 window.addEventListener('load', function() {
   var forms = document.getElementsByClassName('needs-validation');
   var validation = Array.prototype.filter.call(forms, function(form) {
     form.addEventListener('submit', function(event) {
       if (form.checkValidity() === false) {
								   //alert('fail');
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
   });
 }, false);
})();


if ($("#ajax_form").length > 0){
  $( "#ajax_form" ).validate({
    rules: {
      upload_img: {
        required: true,
        maxSize:      '1m',
        type:        'image'
      },
      password_s: {
        required: true
      },
      username_s: {
        required: true
      }
    },
    messages: {
     
      password_s: {
       required: "Please provide a valid Password",
     },
     username_s:{
      required: "Please select a valid Username ",
    },
    
  },
  submitHandler: function(form) {
    
    $('#send_form').html('Sending..');
    $.ajax({
      url: "<?php echo base_url('login/user_login') ?>",
      type: "POST",
      data: $('#ajax_form').serialize(),
      dataType: "json",	
      success: function(response) {
        
        if(response.success){
         
          $('#send_form').html('SAVE');
          $('#res_message').html(response.msg);
          $('#res_message').show();
          var forms = document.getElementsByClassName('needs-validation');
          form.classList.remove('was-validated');
          
        }else{
         $('#send_form').html('SAVE');
         $('#res_message').html(response.msg);
         $('#res_message').show();
       }    
     },error: function(response){  alert (JSON.stringify(response));}
   });
  }
});
}

function filePreview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $("#upload_img").attr("src", e.target.result);
           // $('#upload').after('<img src="'+e.target.result+'" width="450" height="300"/>');
         };
         reader.readAsDataURL(input.files[0]);
       }
     }
     $("#btnupload").click(function () {
      $("#logo").click();
    });
     
     
     $("#logo").change(function () {
       filePreview(this);
     });
   </script>
   <script type="text/javascript">
    $(document).ready(function () {
     $('#autoUpdate').hide();

     $('#checkbox1').change(function(){
      if($(this).prop("checked")) {
        $('#autoUpdate').show();
      } else {
        $('#autoUpdate').hide();
      }
    });
   });
 </script>
 
</body>
</html>