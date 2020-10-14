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
<style type="text/css">

  .job-ad-item {
    padding: 5px;
    overflow: hidden;
    position: relative;
    border: 1px solid #e6e2e2;
    margin: 0px 0;
    border-radius:2px;  
  }


  .job-ad-item .ad-info span+a {
    color: #9fa4a4;
    font-size: 14px;
    line-height: 16px;
  }

  .job-ad-item .ad-info span {
    color: #a0a0a0;
    font-size: 14px;
    line-height: 17px;
  }

  .ad-info a{
    font-size: 14px;
  }

  .job-ad-item .ad-meta li {
    float: left;
    margin-left: 10px;
  }

  .job-ad-item .item-image-box,
  .job-ad-item .ad-info {
    float: left;
  }

  .job-ad-item .ad-info {
    padding: 5px 25px;
  }

  .job-ad-item .ad-info span {
    color: #000;
    font-size: 20px;  
    display: block;
    margin-bottom: 10px;
  }

  .job-ad-item .ad-info span a {
    color: #000;
    font-size: 20px;
    font-weight: 300;
  }

  .job-ad-item .ad-info a.title {
    font-weight: 300;
    color: #000;
    font-weight: 500;
    font-size: 16px;
    line-height: 23px;
  }

  .job-ad-item .ad-meta li:first-child {
    margin-left: 0;
  }

  .job-ad-item .ad-meta a,
  .job-ad-item .ad-meta li {
    font-size: 12px;
    color: #a0a0a0;
  }

  .job-ad-item .ad-meta i,
  .job-ad-item .ad-meta a i {
    font-size: 14px;
    margin-right: 10px;
  }

  .job-ad-item .ad-info span a:hover,
  .job-ad-item a:hover {
    color: #ff7800;
  }

  .job-ad-item .button {
    float: right;
  }

  .job-ad-item .item-image {
    width: 95px;
    height: 85px;
    border: 1px solid #f3f3f3;
    overflow: hidden;
  }

  .job-ad-item .item-info {
    min-height: 0;
    overflow: hidden;
  }

  .latest-jobs-ads .nav-tabs>li>a {
    margin-right: 0;
  }

  .job-ad-item .btn.btn-primary {
    padding: 5px 30px 6px;
    margin-top: 25px;
    font-size: 14px;
    margin-right: 0px;
  }

  .job-ad-item label{
    color: #00aae8;
    margin-bottom: 0px;
    font-weight: 500;
  }

  .job-ad-item .btn.btn-danger {
    color: #fff;
    background-color: #ff0000;
    border-color: #ff0000;
    padding: 5px 23px 6px;
    margin-top: 25px;
    font-size: 14px;
    margin-right: 0px;
  }

  .ad-meta a i {
    text-align: right
  }
  ul {
    margin:0;
    padding:0;
    list-style:none;
  }


</style>
<body>

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
        Tender
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
<table id="example" class="table " style="width:100%; ">
 <thead> 
   <tr>
    <th>Total Tenders</th> 
  </tr> </thead> 
  <tbody> 
    <?php 
    $x=0;
    foreach ($all_data as $r) {
      echo "<tr>";
      echo "<td>";
      echo "<div class='job-ad-item'>";
      echo "<div class='item-info'>";
      echo "<div class='row'>";
      echo "<div class='col-md-10 col-sm-12 col-xs-12'>";
      echo "<div class='ad-info'>";
      echo "<span style='color:red;''><a href='' class='title'><label> $r->tender_id :</label> $r->reference_no</a></span>";
      echo "<div class='ad-meta'>";
      echo "<ul>";
      echo "<li style='color:#4d9845'>Publish Date -  Login to view </li>";
      echo "<li style='color:#7f7f7f'>News Paper -  Login to view </li>";
      echo "<li class='day_left' style='color:#e60b0b'>Closing on - $r->expire Day/s</li>";
      echo "</ul>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "<div class='col-md-2 col-sm-12 col-xs-12'>";  
      echo "<div class='button'>";
      echo "<button class='btn btn-primary' onclick='sign_in(\"".$r->tender_id."\")'><i class='fa fa-search' aria-hidden='true'></i> View</button>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</td>";
      echo "</tr>";
    }
    ?>

  </tbody>
</table>

<script type="text/javascript">
  function sign_in(tender_id){
    $.post("<?=base_url();?>tenders/sign_in", {
     tender_id:tender_id,

   }, function(r){
    if(r==1){
      location.href='<?=base_url();?>view_tenders?ten_id='+tender_id;
    }else{
      location.href='<?=base_url();?>login';
    }
  }, "text");
  }
</script>



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