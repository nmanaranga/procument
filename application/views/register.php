<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Setup PROMAS- Create Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
  />
  <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
  <meta name="msapplication-tap-highlight" content="no">
  <link href="<?php echo base_url();?>main.css" rel="stylesheet">
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
      <div class="mx-auto app-login-box col-md-8">
       <div class="app-logo-inverse mx-auto mb-3"></div>
       <div class="modal-dialog w-100" style="margin-top:2%;">
        <div class="modal-content">
         <div class="modal-body">
           <form class="border border-light p-5 needs-validation" enctype="multipart/form-data" id="" method="post" action="<?php echo base_url();?>register/create" >
            <h5 class="modal-title">
             <h4 class="mt-2">
              <div style="font-weight:bold;text-align:center;"><label>PRO</label><label style="color:red;">MAS</label></div>
              <div style="font-weight:bold;text-align:center;font-size:10px;">It only takes a few seconds to create your account</div>
            </h4>
          </h5>
          <div class="divider row"></div><?php if(isset($error)){ ?><div class="alert alert-danger" role="alert"> <?php echo $error;?></div> <?php } ?>



          <label style="font-weight: bold; font-size:16px;">Setup Site Administrator Details</label>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput">Contractor name</label>
            <input type="text" name="c_name" id="c_name" value=""  class="form-control " placeholder="Contractor name" required>
          </div>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput">Address</label>
            <input type="text" name="address" id="address" value=""  class="form-control " placeholder="Address" required>
          </div>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput">Contact number</label>
            <input type="text" name="c_number" id="c_number" value=""  class="form-control " placeholder="Contact number" required>
          </div>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput" >Company Mail</label>
            <input type="text" name="c_email" id="c_email" value=""  class="form-control " placeholder="Company Mail" required>
          </div>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput" >Business Registration number </label>
            <input type="text" name="brno" id="brno" value=""  class="form-control " placeholder="Business registration number" required>
          </div> 
          <div class="col-md-12 mb-12 mb-3">
          <label for="textInput" >VAT Registration number </label>
            <input type="text" name="vrno" id="vrno" value=""  class="form-control " placeholder="VAT registration number" required>
          </div>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput" > Tax Identification No </label>
            <input type="text" name="tino" id="tino" value=""  class="form-control " placeholder="Tax Identification No" required>
          </div>

          <div class="divider row"></div>
          <label style="font-weight: bold; font-size:16px;">Login Details</label>
          <div class="col-md-12 mb-12 mb-3">
            <label for="textInput">Username</label>
            <input type="text" name="username_s" id="username_s" value=""  class="form-control " placeholder="Username" required>
          </div>

          <div class="col-md-12 mb-12 mb-3">
            <label for="validationCustom14">Password</label>
            <input type="password" name="password_s" id="password_s" class="form-control " placeholder="Password input" required>
          </div>





          <div class="modal-footer d-block text-center">
            <input class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" name="submit" value="Create Account" type="submit">
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
         alert('fail');
         event.preventDefault();
         event.stopPropagation();
       }
       form.classList.add('was-validated');
     }, false);
   });
 }, false);
})();
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
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
    },
    username: {
      required: true
    },
    hostname: {
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
  hostname: {
   required: "Please provide a valid Hostname",
 },
 username:{
  required: "Please provide a valid Username",
},
}
});

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