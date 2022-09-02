
<button id="saveBtn"><strong>Save</strong></button>


<main>
<div class="myHeader">
  <img src="<?=base_url()?>assets/dist/img/amdabidds.png">
</div>


<section class="mycontent">
  <div class="myTable">
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table class="table table-striped text-center" id="regionPrintTable">
                    <thead>
                      <th>Region</th>
                      <th>Count</th>
                    </thead>
                     <tbody id="tbody">
    
                        <?php foreach($reportDetails as $d): ?>

                          <tr>
                            <td>$d->regionName</td>
                            <td>$d->count</td>
                          </tr>


                    <?php endforeach; ?>
                  
                  
                    
                    </tbody>
                  </table>

              </div>
             </div>
            </div>
          </div>
        </div>
      </div>

  </div>



  <div class="graph">
      <!-- DONUT CHART -->
            <div class="card card-danger">
              
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- PIE CHART -->
            
          </div>
          <!-- /.col (LEFT) -->


          <footer>
    <strong>Copyright &copy;2021-2022 <a href="https://adminlte.io">DiWa-admin</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

</section>





</main>




