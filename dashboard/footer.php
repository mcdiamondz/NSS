<!-- Footer -->
<footer class="footer text-right">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                © NSSS <?php echo date('Y'); ?>. All rights reserved.
            </div>
            <div class="col-xs-6">
                <ul class="pull-right list-inline m-b-0">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

</div> <!-- end container -->
</div>
<!-- end wrapper -->



<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- App core js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<!-- plugins js -->
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


<!--Form Wizard-->
<script src="assets/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>

<!--wizard initialization-->
<!-- <script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script> -->

<!-- XEditable Plugin -->
<script src="assets/plugins/moment/moment.js"></script>
<script type="text/javascript" src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript" src="assets/pages/jquery.xeditable.js"></script>

<!-- page js -->
<script src="assets/pages/jquery.form-pickers.init.js"></script>

<!--Form Validation-->
<script src="assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

<!-- Custom script -->
<!-- <script src="assets/pages/zcustome.js" type="text/javascript"></script> -->
<script src="assets/js/addrecords.js" type="text/javascript"></script>
<!-- <script src="assets/js/displayrecords.js" type="text/javascript"></script> -->
<script src="assets/js/delete_rec.js" type="text/javascript"></script>
<script src="assets/js/company.js" type="text/javascript"></script>
<script src="assets/js/filename.js" type="text/javascript"></script>
<script type="text/javascript">
function delete_rec(){
  row_id = $('#hidden_row_id').val();
  alert(uid);
  $.ajax({
        url: "../include/deletemp.php",
        type: 'POST',
        data: { uid: uid, row_id: row_id },
        success: function (data) {
          alert(data);
          $('#emp_table').load(document.URL +  ' #emp_table');
          //$('#empresult').html(data);
        },
        error: function(jqXHR, status, errorThrown){
          $("#empresult").html('there was an error ' + errorThrown + ' with status ' + textStatus);

        }

    });
}
</script>

<script type="text/javascript">
$(document).ready(function(){

  $('#dateofbirth').datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
  });

    $('#sch_start_date').datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
  });

  $('#sch_end_date').datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
  });

  $('#job_start_date').datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
  });

  $('#job_end_date').datepicker({
    format: 'yyyy/mm/dd',
    autoclose: true,
    todayHighlight: true
  });

});
</script>



</body>
</html>
