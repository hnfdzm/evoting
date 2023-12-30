<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('ad/partials/head.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('ad/partials/side_nav.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Feedback List
        <small>Tabel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row"> 
        <div class="col-xs-12">

        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Post Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-secondary table-striped">
                <tr>
                  <th style="">No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Feedback</th>
                  <th style="">Action</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Update software</td>
                  <td>
                    <div class="text-gray">
                      apa@gmail.com
                    </div>
                  </td>
                  <td>50</td>
                  <td>Mboh</td>
                  <td>
                    <a href="#" class="btn btn-success">baru</a>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.content -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('ad/partials/footer.php') ?>
<?php $this->load->view('ad/partials/script.php') ?>
</body>
</html>