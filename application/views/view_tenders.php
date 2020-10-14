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
        Create Tender
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
<div class="main_head" style="width:100%;height:25%;background-color: rgba(255 255 255 / 50%);border-radius: .25rem;padding:10px 25px">
  <div class="sub_head" style="font-family:Ubuntu, sans-serif;font-size:30px;">
    Hello, <?="namal"?>
  </div>
  <div class="sub_sub_head" style="font-family:Ubuntu, sans-serif;font-size:20px;">
    Primary mail : <?="nmanaranga@gmial.com"?></br>
  </div>
</div>
</br>
<div class="" style="border:width:100%;background-color: rgba(255 255 255 / 50%);border-radius: .25rem;padding:10px 25px">
  <div class="sub_sub_head" style="font-family:Ubuntu, sans-serif;font-size:18px;">
    <table class="table table-borderless">
     <?php 
     $x=0;
     $base= base_url();
     foreach ($all_data as $r) {
      echo "<tr>";
      echo "<td style='width:200px;'>Tender Id</td>";
      echo "<td>:</td>";
      echo "<td>$r->tender_id</td>";
      echo "<td style='width:200px;'>Advertiesment  <a href='uploads/supplementary/tender/".$r->advertisement_file_name."' class='btn btn-primary'>Download</a></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Refference No</td>";
      echo "<td>:</td>";
      echo "<td>$r->reference_no</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Effective Date</td>";
      echo "<td>:</td>";
      echo "<td>$r->effective_date_time</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Expire Date</td>";
      echo "<td>:</td>";
      echo "<td>$r->expire_date_time</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Meeting Date</td>";
      echo "<td>:</td>";
      echo "<td>$r->pre_bid_meeting_date_time</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Non Refundable Fee</td>";
      echo "<td>:</td>";
      echo "<td>$r->non_refundable_fee</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Bid Security Amount</td>";
      echo "<td>:</td>";
      echo "<td>$r->bid_security_amount</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Bid Security Date</td>";
      echo "<td>:</td>";
      echo " <td>$r->bid_security_expire_date</td>";
      echo "</tr>";
    }
    ?>
  </table>

</div>
</div>

</div>
</div>
</body>

<script type="text/javascript">
  function download_ad(ad_file){
    $.post("<?=base_url();?>view_tenders/download", {
     ad_file:ad_file,
    
   }, function(r){
      alert(r);
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