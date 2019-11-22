    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

<script type="text/javascript" src="plugins/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
  $("#dropdown").chosen({width: "100%"});
  $("#dropdown1").chosen({width: "100%"});
  $("#dropdown2").chosen({width: "100%"});
  $("#dropdown3").chosen({width: "100%"});
  $("#dropdown_add1").chosen({width: "100%"});
  $("#dropdown_add2").chosen({width: "100%"});
  $("#dropdown_add3").chosen({width: "100%"});
</script>  

<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
  $(function () {
    $("#example1").dataTable();
    $('#example2').dataTable({
      "bPaginate": true,
      "bLengthChange": false,
      "bFilter": false,
      "bSort": true,
      "bInfo": true,
      "bAutoWidth": false
    });
  });
</script>