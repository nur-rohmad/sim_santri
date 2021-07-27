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
          <a href="<?php echo site_url('admin/mapel/add') ?>">
            <i class="fa fa-fw fa-plus"></i> Add New</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <!-- contents DataTables Card-->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Mapel</th>
                  <th>Nama Mapel</th>
                  <th>Ustad Pengajar</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list_mapel as $mapel) : ?>
                  <tr>
                    <td><?php echo $mapel->id_mapel ?></td>
                    <td><?php echo $mapel->nama_mapel ?></td>
                    <td><?php echo $mapel->ustad_pengajar ?></td>
                    <td>
                      <a href="<?php echo site_url('admin/mapel/edit/' . $mapel->id_mapel) ?>" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit</a>

                      <a onclick="deleteConfirm('<?php echo site_url('admin/mapel/delete/' . $mapel->id_mapel) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-fw fa-trash"></i> Hapus</a>

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