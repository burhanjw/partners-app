<!-- DataTables -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?= count($api_requests) ?></h3>
                  <p>Total Request(s)</p>
                </div>
                <div class="icon">
                  <i class="fa fa-globe"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
		      <div class="card-header card">
            <h3 class="card-title"><i class="fa fa-table"></i>&nbsp;List of Request(s)</h3>
          </div>
				  <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. #</th>
                  <th>Partner Name</th>
                  <th>Date Time</th>
                </tr>
                </thead>
                <tbody>
				          <?php 
                    if(! empty($api_requests) ) {
                      $i=1;
                      foreach($api_requests as $req) {
                  ?>
                  <tr>
                    <td><?= $i ?>.</td>
                    <td><?= $req->partner_name ?></td>
                    <td><?= date('d-m-Y h:i A', strtotime($req->datetime)) ?></td>
                  </tr>
                  <?php
                        $i++; 
                      }
                    }
                  ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </section>
</div>