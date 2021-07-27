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
      <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php endif; ?>
      <!-- Card  -->
      <div class="card mb-3">
        <div class="card-header">
          <a href="<?php echo site_url('admin/mapel/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
            oleh controller tempat view ini digunakan. Yakni localhost/tokoku/index.php/admin/barang/edit/ID 
            <!--?php base_url('admin/barang/edit') ?>
            --->
            <input type="hidden" name="id_mapel" value="<?php echo $mapel->id_mapel ?>" />
            <div class="form-group">
              <label for="name">Nama Mapel*</label>
              <input class="form-control <?php echo form_error('nama_mapel') ? 'is-invalid' : '' ?>" type="text" name="nama_mapel" min="0" value="<?php echo $mapel->nama_mapel ?>" placeholder="Nama Mapel.." />
              <div class="invalid-feedback">
                <?php echo form_error('nama_mapel') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="price">Ustad Pengajar*</label>
              <input class="form-control <?php echo form_error('ustad_pengajar') ? 'is-invalid' : '' ?>" type="text" name="ustad_pengajar" min="0" value="<?php echo $mapel->ustad_pengajar ?>" placeholder="Usatd Pengajar.." />
              <div class="invalid-feedback">
                <?php echo form_error('ustad_pengajar') ?>
              </div>
            </div>
            <input class="btn btn-success" type="submit" name="btn" value="Save" />
          </form>
        </div>
        <div class="card-footer small text-muted">* required fields</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $this->load->view("admin/_partials/footer.php") ?>
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
  </div>
</body>

</html>