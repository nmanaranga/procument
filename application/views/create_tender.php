<doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Language" content="en">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Form Validation - Inline validation is very easy to implement using the Architect Framework.</title>
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
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
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
            <form class="needs-validation" enctype="multipart/form-data" id="ajax_form" method="post" action="javascript:void(0)">
                 <div class="main-card mb-3 card">
                  <div class="card-body">
                     <h5 class="card-title"><i class="header-icon lnr-apartment icon-gradient bg-grow-early"></i> Tender</h5>
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
                                                    <i class="lnr-calendar-full text-primary icon-gradient bg-happy-itmeo btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Work Package</div>
                                                    Design & Building of St.Sebastian North Lock Gates & Pumping Station
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
               <div class="main-card mb-3 card">
                  <div class="card-body">
                     <h5 class="card-title"><i class="header-icon lnr-apartment icon-gradient bg-grow-early"></i> Create Tender</h5>
                     <div class="form-row">
                        <div class="col-md-6 col-md-6 col-lg-6 mb-3">
                          <label for="validationCustom01">Tender Period</label>
                          <input type="text" class="form-control" placeholder="Tender Period" id="tender_period" name="tender_period" required onkeydown="return false" />
                        </div>
                        <div class="col-md-6 col-md-6 col-lg-6 mb-3">
                          <label for="validationCustom01">Pre Bid Meeting</label>
                          <input type="text" name="pre_bid_met_date" class="form-control" required onkeydown="return false"/>
                          <script>
                          //$('#pre_bid_met_date').datetimepicker();
                          $(function() {
                            $('input[name="pre_bid_met_date"]').daterangepicker({
                              timePicker: true,
                              timePicker24Hour:true,
                              singleDatePicker: true,
                              autoUpdateInput: false,
                              locale: {
                                format: 'YYYY-MM-DD HH:mm',
                                cancelLabel: 'Clear'
                              }
                            });
                            $('input[name="pre_bid_met_date"]').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('YYYY-MM-DD HH:mm'));
                            });
                            $('input[name="pre_bid_met_date"]').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                          });
                          </script>
                        </div>
                        <div class="col-md-6 mb-3">
                           <label for="validationCustom01">Non Refundable Fee</label>
                           <input type="number" class="form-control" placeholder="Estimate Cost" id="non_refundable_fee" name="non_refundable_fee" required />
                        </div>

                        <div class="col-md-6 mb-3">
                           <label for="validationCustom01">Bid Security Amount</label>
                           <input type="number" class="form-control" placeholder="Bid Security Amount" id="bid_security_amount" name="bid_security_amount" required />
                        </div>
                        <div class="col-md-6 mb-3">
                           <label for="validationCustom01">Bid Security Expire Date</label>
                           <input type="text" class="form-control" placeholder="Bid Security Expire Date" id="bid_security_expire_date" name="bid_security_expire_date" data-toggle="datepicker" required onkeydown="return false" />
                        </div>


                        <div class="col-md-6 col-md-6 col-lg-6 mb-3">
                            <label for="validationCustom01">Advertisement</label>
                            <input name="file" id="file" type="file" class="form-control-file" accept="image/*" required>
                        </div>
                     </div>
                     <div class="form-row">
                        <div id="msg_div">
                        <span id="res_message">
                        </span>
                        </div>
                     </div>
                     <div class="form-row float-right">
                        <div class="col-md-12 col-lg-12 mb-3">
                           <button class="btn btn-primary btn-sm" id="send_form" type="submit">SAVE</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <div class="card mb-3">
              <div class="card-body">
                     <h5 class="card-title"><i class="header-icon lnr-apartment icon-gradient bg-grow-early"></i> Work Packages</h5>
                     <table style="width: 100%;" id="test" class="table table-striped table-bordered table-hover dt-responsive">
                     <thead>
                        <tr>
                           <th style="width:2%;">ID</th>
                           <th style="width:15%;">Reference No</th>
                           <th style="width:15%;">Work Package</th>
                           <th style="width:10%;">Effective Date</th>
                           <th style="width:10%;">Expire Date</th>
                           <th style="width:10%;">Pre Bid Meeting</th>
                           <th style="width:10%;">Non Refundable Fee</th>
                           <th style="width:5%;">Status</th>
                           <th style="width:5%;">Manage</th>
                        </tr>
                     </thead>
                     <tbody id="table_data">
                     </tbody>
                     <tfoot>
                        <tr>
                           <th>ID</th>
                           <th>Reference No</th>
                           <th>Work Package</th>
                           <th>Effective Date</th>
                           <th>Expire Date</th>
                           <th>Pre Bid Meeting</th>
                           <th>Non Refundable Fee</th>
                           <th>Status</th>
                           <th>Manage</th>
                        </tr>
                     </tfoot>
                  </table>
                  </div>
            </div>
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
                    url: "<?php echo base_url('Create_tender/store') ?>",
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
                        $('#res_message').show();
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
               </script>
         </div>
        <?php include 'templates/footer.php';?>
      </div>
      </div>
      </div>
       <script type="text/javascript" src="<?php base_url()?>assets/scripts/main.js"></script>
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
         $(function() {
         $('input[name="tender_period"]').daterangepicker({
            autoUpdateInput: false,
            timePicker: true,
            timePicker24Hour:true,
            locale: {
                cancelLabel: 'Clear'
            }
         });
         $('input[name="tender_period"]').on('apply.daterangepicker', function(ev, picker) {
         $(this).val(picker.startDate.format('YYYY-MM-DD HH:MM') + ' - ' + picker.endDate.format('YYYY-MM-DD HH:MM'));
         });
         $('input[name="tender_period"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
         });
      </script>
</body>
</html>