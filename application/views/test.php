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
      <link href="main.css" rel="stylesheet">
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
           
            <div class="tab-content">
               <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="main-card mb-3 card">
                           <div class="card-body">
                              <div id="smartwizard">
                                 <ul class="forms-wizard">
                                    <li>
                                       <a href="#step-1">
                                          <em>1</em><span>Create Work Package</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#step-2">
                                          <em>2</em><span>Procurement Timeline</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#step-3">
                                          <em>3</em><span>Finish Wizard</span>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="form-wizard-content">
                                    <form class="needs-validation" id="ajax_form" method="post" >
                                       <div id="step-1">
                                          <div class="form-row">
                                             <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Work Package</label>
                                                <input type="text" class="form-control" placeholder="Work Package" id="work_package" name="work_package" required />
                                                <div class="invalid-feedback">
                                                  Please choose a Work Package.
                                               </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 mb-3">
                                             <label for="validationCustom14">Funding Source</label>
                                             <select class="form-control" id="funding_source" onchange="levelof()" name="funding_source" required>
                                                <option></option>
                                                <option value="GOSL">GOSL</option>
                                                <option value="Foreign">Foreign</option>
                                             </select>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                             <label for="validationCustom01">Estimate Cost</label>
                                             <input type="number" class="form-control" onblur="levelof()" placeholder="Estimate Cost" id="estimate_cost" name="estimate_cost" required />
                                          </div>

                                          <div class="col-md-6 col-lg-6 mb-3">
                                             <label for="validationCustom14">Province</label>
                                             <select class="form-control" id="province" name="province" required>
                                                <option></option>
                                                <option value="Central">Central</option>
                                                <option value="Eastern">Eastern</option>
                                                <option value="North Central">North Central</option>
                                                <option value="Northern">Northern</option>
                                                <option value="North Western">North Western</option>
                                                <option value="Sabaragamuwa">Sabaragamuwa</option>
                                             </select>
                                          </div>
                                          <div class="col-md-6 col-lg-6 mb-3">
                                             <label for="validationCustom14">District</label>
                                             <select class="form-control" id="district" name="district" required>
                                                <option></option>
                                                <option value="Ampara">Ampara</option>
                                                <option value="Anuradhapura">Anuradhapura</option>
                                                <option value="Badulla">Badulla</option>
                                                <option value="Batticaloa">Batticaloa</option>
                                                <option value="Colombo">Colombo</option>
                                                <option value="Galle">Galle</option>
                                             </select>
                                          </div>
                                          <div class="col-md-12 col-lg-12 mb-3">
                                             <label for="validationCustom14">Description of the Contract</label>
                                             <textarea id="description" name="description" class="form-control" rows="1" required></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    
                                    <div id="step-2">
                                       <div class="form-row">
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Formation of Procurement Committee & TEC</label>
                                             <input type="text" class="form-control" placeholder="Formation of Procurement Committee and TEC" id="formation_proc_tec" name="formation_proc_tec" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Preparation of Bidding Document</label>
                                             <input type="text" class="form-control" placeholder="Preparation of Bidding Document" id="preparation_bidding_doc" name="preparation_bidding_doc" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">TEC Review</label>
                                             <input type="text" class="form-control" placeholder="TEC Review" id="tec_review" name="tec_review" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Procurement Committee Aproval for BD</label>
                                             <input type="text" class="form-control" placeholder="Procurement Committee Aproval for BD" id="proc_appr_bd" name="proc_appr_bd" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">IFB Publish</label>
                                             <input type="text" class="form-control" placeholder="IFB Publish" id="ifb_publish" name="ifb_publish" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Clafrication / Pre Bid Meeting</label>
                                             <input type="text" class="form-control" placeholder="Clafrication / Pre Bid Meeting" id="pre_bid_meeting" name="pre_bid_meeting" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Respond to Clafrication</label>
                                             <input type="text" class="form-control" placeholder="Respond to Clafrication" id="respond_clarification" name="respond_clarification" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Bid Submission & Bid Opening</label>
                                             <input type="text" class="form-control" placeholder="Bid Submission & Bid Opening" id="bid_sub_n_opening" name="bid_sub_n_opening" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                             <label for="validationCustom01">Technical Evaluation</label>
                                             <input type="text" class="form-control" placeholder="Technical Evaluation" id="tec_eval" name="tec_eval" data-toggle="datepicker" required onkeydown="return false" />
                                          </div>
                                          <div class="col-lg-6 col-md-6 mb-3">
                                            <label for="validationCustom01">Contract Award</label>
                                            <input type="text" class="form-control" placeholder="Contract Award" id="contract_award" name="contract_award" data-toggle="datepicker" required onkeydown="return false" />
                                         </div>
                                         <div class="col-lg-6 col-md-6 mb-3">
                                            <label for="validationCustom01">Contract Signed</label>
                                            <input type="text" class="form-control" placeholder="Contract Signed" id="contract_signed" name="contract_signed" data-toggle="datepicker" required onkeydown="return false" />
                                         </div>
                                         <div class="col-lg-6 col-md-6 mb-3">
                                            <label for="validationCustom01">Contract Completion</label>
                                            <input type="text" class="form-control" placeholder="Contract Completion" id="contract_completion" name="contract_completion" data-toggle="datepicker" required onkeydown="return false" />
                                         </div>
                                      </div>
                                      <div class="form-row">
                                         <div id="msg_div">
                                            <span id="res_message">
                                            </span>
                                         </div>
                                      </div>
                                   </div>
                                   
                                   <div id="step-3">
                                    <div class="no-results">
                                       <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                          <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                          <span class="swal2-success-line-tip"></span>
                                          <span class="swal2-success-line-long"></span>
                                          <div class="swal2-success-ring"></div>
                                          <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                          <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                       </div>
                                       <div class="results-subtitle mt-4">Finished!</div>
                                       <div class="results-title">You arrived at the last form wizard step!</div>
                                       <div class="mt-3 mb-3"></div>
                                       <div class="text-center">
                                          <button class="btn-shadow btn-wide btn btn-primary btn-lg" id="send_form" type="submit">SAVE</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="divider"></div>
                        <div class="clearfix">
                           <button type="button" id="reset-btn" class="btn-shadow float-left btn btn-link">Reset</button>
                           <button type="button" id="next-btn" class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                           <button type="button" id="prev-btn" class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script>
         (function() {

           'use strict';
           window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
             form.addEventListener('click', function(event) {
               alert(form.checkValidity());
               if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
               }
               form.classList.add('was-validated');
            }, true);
          });
         }, false);
        })();

        if ($("#ajax_form").length > 0){
          $("#ajax_form").validate({
             rules:{
                work_package:{
                   required: false,
                },
                agency_id:{
                   required: true,
                },
                estimate_cost:{
                   required: true,
                },
                funding_source:{
                   required: true,
                },
                procurement_method_id:{
                   required: true,
                },
                province:{
                   required: true,
                },
                district:{
                   required: true,
                },
                description: {
                 required: true,
              },
              formation_proc_tec:{
                required: true,
             },
             preparation_bidding_doc:{
                required: true,
             },
             tec_review:{
                required: true,
             },
             proc_appr_bd:{
                required: true,
             },
             ifb_publish:{
                required: true,
             },
             pre_bid_meeting:{
                required: true,
             },
             respond_clarification:{
                required: true,
             },
             bid_sub_n_opening:{
                required: true,
             },
             tec_eval:{
                required: true,
             },
             contract_award:{
                required: true,
             },
             contract_signed:{
                required: true,
             },
             contract_completion:{
                required: true,
             },
          },
          messages: {
           work_package: {
              required: "Please provide a valid name",
           },
           agency_id:{
              required: "Please select a valid agency",
           },
           estimate_cost: {
              required: "Please provide a valid cost",
           },
           funding_source:{
             required: "Please provide a valid option",
          },
          procurement_method_id: {
           required: "Please select a valid method",
        },
        province: {
           required: "Please select a valid province",
        },
        district: {
           required: "Please select a valid district",
        },
        description: {
           required: "Please provide a valid description",
        },
        formation_proc_tec: {
          required: "Please provide a valid date",
       },
       preparation_bidding_doc: {
          required: "Please provide a valid date",
       },
       tec_review: {
          required: "Please provide a valid date",
       },
       proc_appr_bd: {
          required: "Please provide a valid date",
       },
       ifb_publish: {
          required: "Please provide a valid date",
       },
       pre_bid_meeting: {
          required: "Please provide a valid date",
       },
       respond_clarification: {
          required: "Please provide a valid date",
       },
       bid_sub_n_opening: {
          required: "Please provide a valid date",
       },
       tec_eval: {
          required: "Please provide a valid date",
       },
       contract_award: {
          required: "Please provide a valid date",
       },
       contract_signed: {
          required: "Please provide a valid date",
       },
       contract_completion: {
          required: "Please provide a valid date",
       },
    },
    submitHandler: function(form) {
     $('#send_form').html('Sending..');
     $.ajax({
                     //url: "<?php //echo base_url('Create_tender/store') ?>",
                     type: "POST",
                     data: $('#ajax_form').serialize(),
                     dataType: "json",  
                     success: function(response) {
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
                     
                  }    
               }
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