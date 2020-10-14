<doctype html>
 <html lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
  />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
  <meta name="msapplication-tap-highlight" content="no">
  <link href="<?=base_url()?>main.css" rel="stylesheet">

</head>
<body>
  <?php include 'templates/sidebar.php';?>

  <div class="app-main__outer">
   <div class="app-main__inner">
    <div class="app-page-title">
     <div class="page-title-wrapper">
      <div class="page-title-heading">
       <div class="page-title-icon">
        <i class="pe-7s-hourglass icon-gradient bg-ripe-malin">
        </i>
      </div>
      <div>
        Procurement Members
        <div class="page-title-subheading">MCUDP
        </div>
      </div>
    </div>
    <div class="page-title-actions">
     <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
      <i class="fa fa-star"></i>
    </button>
    <div class="d-inline-block dropdown">
      <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
       <span class="btn-icon-wrapper pr-2 opacity-7">
        <i class="fa fa-business-time fa-w-20"></i>
      </span>
      Buttons
    </button>
    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link">
        <i class="nav-link-icon lnr-inbox"></i>
        <span>
         Inbox
       </span>
       <div class="ml-auto badge badge-pill badge-secondary">86</div>
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link">
      <i class="nav-link-icon lnr-book"></i>
      <span>
       Book
     </span>
     <div class="ml-auto badge badge-pill badge-danger">5</div>
   </a>
 </li>
 <li class="nav-item">
   <a class="nav-link">
    <i class="nav-link-icon lnr-picture"></i>
    <span>
     Picture
   </span>
 </a>
</li>
<li class="nav-item">
 <a disabled class="nav-link disabled">
  <i class="nav-link-icon lnr-file-empty"></i>
  <span>
   File Disabled
 </span>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<form class="needs-validation" enctype="multipart/form-data" id="" method="post" action="<?php echo base_url();?>Procurement_members_register/create" >
 <div class="main-card mb-3 card">
  <div class="card-body">
    <h5 class="card-title"><i class="header-icon lnr-apartment icon-gradient bg-grow-early"></i>Procurement Members Details</h5>
    <div class="form-row">
      <div class="col-md-12 mb-12 mb-3">
        <label for="textInput">Member name</label>
        <input type="text" name="m_name" id="m_name" value=""  class="form-control " placeholder="Member name" required>
      </div> 
      <div class="col-md-12 mb-12 mb-3">
        <label for="textInput">NIC</label>
        <input type="text" name="nic" id="nic" value=""  class="form-control " placeholder="Member NIC" required>
      </div> 
      <div class="col-md-12 mb-12 mb-3">
        <label for="textInput">Designation</label>
        <input type="text" name="des" id="des" value=""  class="form-control " placeholder="Designation" required>
      </div>
      <div class="col-md-12 mb-12 mb-3">
        <label for="textInput">Area of Specialty</label>
        <input type="text" name="area_of_spec" id="area_of_spec" value=""  class="form-control " placeholder="Area of Specialty" required>
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
        <label for="textInput">Fax</label>
        <input type="text" name="c_fax" id="c_fax" value=""  class="form-control " placeholder="FAX" required>
      </div>
      <div class="col-md-12 mb-12 mb-3">
        <label for="textInput" >Company Mail</label>
        <input type="text" name="c_email" id="c_email" value=""  class="form-control " placeholder="Company Mail" required>
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
      <div class="form-row float-right">
        <div class="col-md-12 col-lg-12 mb-3">
          <input class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" name="submit" value="Create Account" type="submit">
        </div>
      </div>
    </div>
  </div>
</form>
<?php include 'templates/footer.php';?>
<script type="text/javascript" src="<?php base_url()?>assets/scripts/main.js"></script>
<script type="text/javascript" src="<?php base_url()?>assets/scripts/fnFakeRowspan.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>



</body>
</html>