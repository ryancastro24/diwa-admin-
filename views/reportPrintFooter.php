<script src="<?=base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>/assets/plugins/chart.js/Chart.min.js"></script>
<script src="<?=base_url()?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- jQuery -->

<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="https://kit.fontawesome.com/755fc66843.js" crossorigin="anonymous"></script>




<!-- Toastr -->
<script src="<?=base_url()?>assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>

<script src="<?=base_url()?>/assets/dist/js/adminlte.js"></script>

<?php if($page=="reP"){ ?>
  <script src="<?=base_url()?>/assets/js/reportPrint.js"></script>
<?php } ?>



<script>



  $(function () {
    $('#regionPrintTable').DataTable({
      "paging":false,
      "lengthChange": false,
      "searching":false,
      "ordering": true,
      "info": false,
      "autoWidth": false,
      "responsive": true,
    });

  
    

  });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });
</script>



<script>
  

 <?php
  
// Creating a PHP Array
$regionArray = array();
foreach($reportDetails as $d){
  $regionArray[] = $d->regionName;
}


$countArray = array();
foreach($reportDetails as $d){
  $countArray[] = $d->count;
}

//for testing purposes
$emailArray = array();
foreach($userLogDetails as $d){
  $emailArray[] = $d->email;
}
  
?>


   
// Using PHP implode() function
var passedRegionArray = <?php echo '["' . implode('", "', $regionArray) . '"]' ?>;

var passedCountArray = <?php echo '["' . implode('", "', $countArray) . '"]' ?>;


// for testing purposes
var passedEmailArray = <?php echo '["' . implode('", "', $emailArray) . '"]' ?>;


console.log(passedEmailArray);
console.log(passedRegionArray);
//const sampleArr = [50,100,200,300,400,500,1000];
//const sampleLabel = ['one','two','three','four','five','six','seven'];
const sampleColor = ['#1dcb20', '#ccb5a0', '#6d2e73', '#db0bc3', '#f9b723', '#5f6703', '#f0f651','#b4b381','#f9b2d1','#21bae8','#350634','#b6e115'];

const selectedColor = [];

for(let i in passedRegionArray){
  let colorOut = sampleColor.pop();
  selectedColor.push(colorOut);
}


console.log(selectedColor);
//-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels:passedRegionArray,
      datasets:[
        {
          data:passedCountArray,
          backgroundColor : selectedColor,
        }
      ]
    }
    var donutOptions  = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })





  

</script>


</body>
</html>