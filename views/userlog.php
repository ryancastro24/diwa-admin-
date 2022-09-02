<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1.0</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button class="btn btn-primary" id="showReport" data-toggle="modal" href="#addusermodal"><strong>Show Report</strong></button>
              	<table class="table table-striped text-center" id="userstable">
	              		<thead>
	              			<th>Email</th>
	              			<th>Transaction</th>
                      		<th>Userlog Time</th>
	              		</thead>
	              		 <tbody>
	              			<?php foreach($userLogDetails as $d): ?>
	              			<tr>
	              				<td><input type="hidden" id="userlogID" value="<?= $d->userLogID ?>"><?= $d->email ?></td>
	              				<td><?= $d->TRANSACTION ?></td>
	              				<td><?= $d->userLogTime ?></td>
	              			</tr> 
	              			<?php endforeach; ?>
	              		</tbody>
	              	</table>

              </div>
             </div>
            </div>
          </div>
        </div>
      </section>

</div>

