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
          <a href="<?php echo site_url('admin/santri/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
            oleh controller tempat view ini digunakan. Yakni localhost/tokoku/index.php/admin/barang/add 
            <!--?php base_url('admin/barang/add') ?>
            --->
            <div class="form-group">
              <label for="name">no_induk*</label>
              <input class="form-control <?php echo form_error('no_induk') ? 'is-invalid' : '' ?>" type="text" name="no_induk" placeholder="No Induk" />
              <div class="invalid-feedback">
                <?php echo form_error('no_induk') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Nama santri*</label>
              <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama santri" />
              <div class="invalid-feedback">
                <?php echo form_error('nama') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Jenis Kelamin *</label>
              <input class="form-control <?php echo form_error('jk') ? 'is-invalid' : '' ?>" type="text" name="jk" placeholder="kelas santri" />
              <div class="invalid-feedback">
                <?php echo form_error('jk') ?>
              </div>
            </div>
            <div class=" tm form-group ">
              <label for="name">Tanggal Lahir*</label>
              <input class="form-control <?php echo form_error('ttl') ? 'is-invalid' : '' ?>" type="date" name="ttl" min="0" placeholder="Tanggal Lahir" />
              <div class="invalid-feedback">
                <?php echo form_error('ttl') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Kelas *</label>
              <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" type="text" name="kelas" placeholder="kelas santri" />
              <div class="invalid-feedback">
                <?php echo form_error('kelas') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Gambar</label>
              <input class="form-control-file <?php echo form_error('foto') ? 'is-invalid' : '' ?>" type="file" name="foto" />
              <input type="hidden" name="foto" />
              <div class="invalid-feedback">
                <?php echo form_error('foto') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Alamat *</label>
              <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" placeholder="Alamat..."></textarea>
              <div class="invalid-feedback">
                <?php echo form_error('alamat') ?>
              </div>
            </div>

            <div class="form-group">
              <label for="name">Total NIlai *</label>
              <input class="form-control <?php echo form_error('total_nilai') ? 'is-invalid' : '' ?>" type="number" name="total_nilai" placeholder="total_nilai santri" />
              <div class="invalid-feedback">
                <?php echo form_error('total_nilai') ?>
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