<doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Appoint Proc Member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="<?php echo base_url();?>main.css" rel="stylesheet">
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.11/jquery.autocomplete.js"></script>
    
    <style type="text/css">
     .select2 {
       width:100%!important;
     }
     .error {
       color: #d92550; 
       padding-top:10px;
     }
     table.dataTable thead tr {
       color:#ffffff;
       background-color: #333131;
       font-size: 14px;
     }
     table.dataTable tfoot tr {
      color:#ffffff;
      background-color: #333131;
      font-size: 14px;
    }
    table.dataTable tbody tr {
     font-size:14px;
   }
 </style>
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
       Appoint Procurement Members
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
<form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="post" action="javascript:void(0)">
 <div class="main-card mb-3 card">
  <div class="card-body">
   <h5 class="card-title"><i class="header-icon lnr-apartment icon-gradient bg-grow-early"></i> TEC Members</h5>
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <div class="main-card mb-3 card">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="widget-content p-0">
            <div class="widget-content-wrapper">
              <div class="widget-content-left mr-3">
                <i class="lnr-book text-primary icon-gradient bg-love-kiss btn-icon-wrapper btn-icon-lg mb-3"> </i>
              </div>
              <div class="widget-content-left">
                <div class="widget-heading">Reference No</div>
                MCUDP/SLLRDC/W/12  
                <input type="hidden" name="sup_doc_id" id="sup_doc_id" value="<?php //echo $supplementary_document_no;?>">
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
   <div class="main-card mb-3 card">
     <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <div class="widget-content p-0">
          <div class="widget-content-wrapper">
            <div class="widget-content-left mr-3">
              <i class="lnr-user text-primary icon-gradient bg-happy-itmeo btn-icon-wrapper btn-icon-lg mb-3"> </i>
            </div>
            <div class="widget-content-left">
             <select class="form-control custom-select custom-select-sm" style="padding-right: 200px;" id="mem_count" name="mem_count">
               <option value="3">3 Members</option>
               <option value="5">5 Members</option>
               <option value="7">7 Members</option>
             </select>
           </div>
         </div>
       </div>
     </li>
   </ul>
 </div>
</div>
</div>
</div>
</div>
<div id="container"></div>

<div class="form-row float-right">
  <div class="col-md-12 col-lg-12 mb-3">
   <button class="btn btn-primary btn-sm" id="send_form" type="submit">SAVE</button>
 </div>
</div>
</form>

<script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
     var forms = document.getElementsByClassName('needs-validation');
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);
  })();
  if ($("#ajax_form").length > 0){
   $("#ajax_form").validate({
    rules:{
      tender_period:{
        required:true,
      },
      pre_bid_met_date:{
        required:true,
      },
      non_refundable_fee:{
        required:true,
      },
      file:{
        required:true,
                      //extension: "jpg|png|gif",
                    },
                    bid_security_amount:{
                      required:true,
                    },
                    bid_security_expire_date:{
                      required:true,
                    },
                  },
                  messages: {
                    tender_period: {
                     required:"Please provide a valid date range",
                   },
                   pre_bid_met_date: {
                     required:"Please provide a valid date",
                   },
                   non_refundable_fee: {
                     required:"Please provide a valid amount",
                   },
                   file: {
                     required:"Please select a valid file",
                       //extension:"Please select valid input file format",
                     },
                     bid_security_amount:{
                       required:"Please provide a valid amount",
                     },
                     bid_security_expire_date:{
                       required:"Please provide a valid date",
                     },
                   },
                   submitHandler: function(form) {
                    $('#send_form').html('Sending..');
                    var data = new FormData($("#ajax_form")[0]);
                    $.ajax({
                      url: "<?php echo base_url('appoint_pro_member/store') ?>",
                      type: "POST",
                      data: data,
                      dataType: "json", 
                      processData: false, 
                      contentType: false,
                      success: function(response) {
                    //alert (JSON.stringify(response));
                    if(response.success){
                       //$('#test').DataTable().ajax.reload();
                       console.log(response);
                       console.log(response.success);
                       $('#send_form').html('SAVE');
                       $('#res_message').html(response.msg);
                       $('#res_message').show();
                       var forms = document.getElementsByClassName('needs-validation');
                       form.classList.remove('was-validated');
                       document.getElementById("ajax_form").reset();
                       $('#ajax_form')[0].reset();
                     }else{
                      $('#send_form').html('SAVE');
                      $('#res_message').html(response.msg);
                      $('res_message').show();
                      var forms = document.getElementsByClassName('needs-validation');
                      form.classList.remove('was-validated');
                        //document.getElementById("ajax_form").reset();
                        //$('#ajax_form')[0].reset();
                        //var $validator = $("#ajax_form").validate();
                        //errors = { reference_no: "Please provide a valid reference no" };
                        //$validator.showErrors(errors); 
                      }    
                    },
                 //error:function(response) { alert (JSON.stringify(response)); }
               });
                  }
                })
 }

 $(document).ready(function(){
  append_mem(3);
  auto_com();
  $("#mem_count").change(function(){
    $("#container").html('');
    append_mem($(this).val());
    auto_com();
  });



});

 function auto_com(){
  $('.member_nic').typeahead({
    source: function (query, result) {
      $.ajax({
        url: "<?=base_url();?>appoint_pro_member/auto_com",
        data: 'query=' + query,            
        dataType: "json",
        type: "POST",
        success: function (data) {
          result($.map(data, function (item) {
            return (item);
          }));
        }
      });
    }
  });

  $(".member_nic").on('keypress blur',function(a) {
    var id=($(this).attr("id"));
    id = id.split('_');
    scid = id[1];
    set_cus_values($(this),scid);
  });

}


function set_cus_values(a,scid) {
  var b = a.val();
  b = b.split("|");

  nic = b[0];
  name = b[1];
  addr = b[2];
  phon = b[3];
  fax = b[4];
  email = b[5];

  $("#membernic_"+scid).val(nic);
  $("#member_name_"+scid).val(name);
  $("#member_address_"+scid).val(addr);
  $("#member_phone_"+scid).val(phon);
  $("#member_fax_"+scid).val(fax);
  $("#member_email_"+scid).val(email);

}


function append_mem(count){
 var smallDiv ='<div id="container">';
 for (i = 1; i <= count; i++){
  smallDiv += '<div class="main-card mb-3 card">';
  smallDiv +='<div class="card-body">';
  smallDiv +='<h5 class="card-title"><i class="header-icon lnr-apartment icon-gradient bg-grow-early"></i> TEC Member '+i+'</h5>';
  smallDiv +='<div class="form-row">';
  smallDiv +='<div class="col-md-3 col-md-3 col-lg-3 mb-3">';
  smallDiv +='<input type="text" class="form-control member_nic" placeholder="Member NIC" id="membernic_'+i+'" name="membernic_'+i+'" required   />';
  smallDiv +='</div>';
  smallDiv +='<div class="col-md-9 col-md-9 col-lg-9 mb-3">';
  smallDiv +='<input type="text" name="member_name_'+i+'" id="member_name_'+i+'" class="form-control" required placeholder="Member Name"/>';
  smallDiv +='</div>';
  smallDiv +='<div class="col-md-12 mb-3">';
  smallDiv +='<input type="text" class="form-control" placeholder="Member Address" id="member_address_'+i+'" name="member_address_'+i+'" required />';
  smallDiv +='</div>';
  smallDiv +='<div class="col-md-3 mb-3">';
  smallDiv +='<input type="text" class="form-control" placeholder="Phone" id="member_phone_'+i+'" name="member_phone_'+i+'"  />';
  smallDiv +='</div>';
  smallDiv +='<div class="col-md-3 mb-3">';
  smallDiv +='<input type="text" class="form-control" placeholder="Fax" id="member_fax_'+i+'" name="member_fax_'+i+'"  />';
  smallDiv +='</div>';
  smallDiv +='<div class="col-md-6 mb-3">';
  smallDiv +='<input type="text" class="form-control" placeholder="Email" id="member_email_'+i+'" name="member_email_'+i+'"  />';
  smallDiv +='</div>';
  smallDiv +='</div>';
  smallDiv +='<div class="form-row">';
  smallDiv +='<div id="msg_div">';
  smallDiv +='<span id="res_message">';
  smallDiv +='</span>';
  smallDiv +='</div>';
  smallDiv +='</div>';
  smallDiv +='</div>';
  smallDiv +='</div>';
  smallDiv +='</div>';
}

$('#container').append(smallDiv);
}

</script>
</div>
<?php include 'templates/footer.php';?>
</div>
</div>
</div>
<script type="text/javascript" src="<?php base_url()?>assets/scripts/main.js"></script>
<script type="text/javascript" src="<?php base_url()?>assets/scripts/typeahead.js"></script>
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
<script>
 $(document).ready(function() {
  var table = $('#test').DataTable({
   lengthChange: false,
   "pageLength": 5,
   "autoWidth": false,
   "ordering": false,
               //"ajax": {
               // url: "<?php echo base_url(); ?>Manage_grievance/Load_data",
               // type: 'GET'
               //},
             });
  table.buttons().container()
  .appendTo( '#test_wrapper .col-md-6:eq(0)');
});
</script>
<script>
</script>
</body>
</html>