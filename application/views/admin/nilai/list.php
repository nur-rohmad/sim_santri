<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div class="content-wrapper">
    <?php $this->load->view("admin/_partials/sider.php") ?>
    <div class="container-fluid">
      <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
      <!-- DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <a href="<?php echo site_url('admin/nilai/add') ?>">
            <i class="fa fa-fw fa-plus"></i> Add New</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <!-- contents DataTables Card-->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Mata Pelajaran</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list_nilai as $nilai) : ?>
                  <tr>
                    <td><?php echo $nilai->nama ?></td>
                    <td><?php echo $nilai->nama_mapel ?></td>
                    <td><?php echo $nilai->nilai ?></td>

                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
    <script>
      function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
      }
    </script>
  </div>
</body>

</html>