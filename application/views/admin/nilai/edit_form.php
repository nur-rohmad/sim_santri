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
          <a href="<?php echo site_url('admin/customer/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
            oleh controller tempat view ini digunakan. Yakni localhost/tokoku/index.php/admin/barang/edit/ID 
            <!--?php base_url('admin/barang/edit') ?>
            --->
            <input type="hidden" name="kodecust" value="<?php echo $customer->kodecust ?>" />
            <div class="form-group">
              <label for="name">Namacust*</label>
              <input class="form-control <?php echo form_error('namacust') ? 'is-invalid' : '' ?>" type="text" name="namacust" placeholder="Nama barang" value="<?php echo $customer->namacust ?>" />
              <div class="invalid-feedback">
                <?php echo form_error('namacust') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="price">Alamat*</label>
              <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" min="0" placeholder="Alamat" value="<?php echo $customer->alamat ?>" />
              <div class="invalid-feedback">
                <?php echo form_error('alamat') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="price">Telepon*</label>
              <input class="form-control <?php echo form_error('telepon') ? 'is-invalid' : '' ?>" type="number" name="telepon" min="0" placeholder="Harga jual" value="<?php echo $customer->telepon ?>" />
              <div class="invalid-feedback">
                <?php echo form_error('telepon') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Foto</label>
              <input class="form-control-file <?php echo form_error('foto') ? 'is-invalid' : '' ?>" type="file" name="foto" />
              <input type="hidden" name="foto_lama" value="<?php echo $customer->foto ?>" />
              <div class="invalid-feedback">
                <?php echo form_error('foto') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Email*</label>
              <textarea class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" name="email" placeholder="Keterangan..."><?php echo $customer->email ?></textarea>
              <div class="invalid-feedback">
                <?php echo form_error('email') ?>
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