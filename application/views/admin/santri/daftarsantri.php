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
      <div class="card mb-3">
        <div class="card-header">
          <a href="<?php echo site_url('admin/santri/Add') ?>">
            <i class="fa fa-fw fa-plus"></i> Add New</a></div>
        <div class="card-body">
          <div class="table-responsive">
            <!-- contents DataTables Card-->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Foto</th>
                  <th>No Induk</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($daftar_santri as $santri) : ?>
                  <tr>
                    <td> <?php echo $no ?></td>
                    <td><img src="<?php echo base_url('upload/santri/' . $santri->foto) ?>" width="64"></td>
                    <td width="200"> <?php echo $santri->no_induk ?> </td>
                    <td><?php echo $santri->nama ?></td>
                    <td><?php echo $santri->jk ?></td>
                    <td> <?php echo $santri->alamat ?> </td>
                    <td>
                      <a href="<?php echo site_url('admin/santri/edit/' . $santri->no_induk) ?>" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit</a>

                      <a onclick="deleteConfirm('<?php echo site_url('admin/santri/delete/' . $santri->no_induk) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-fw fa-trash"></i> Hapus</a>

                      <a href="<?php echo site_url('admin/santri/santri_detail/' . $santri->no_induk) ?>" class="btn btn-small">Detail</a>

                    </td>
                  </tr>
                  <?php $no++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
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