<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <style>
    select {
      width: 100%;
    }
  </style>
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
          <a href="<?php echo site_url('admin/nilai/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
            oleh controller tempat view ini digunakan. Yakni localhost/tokoku/index.php/admin/customer/add 
            <!--?php base_url('admin/customer/add') ?>
            --->
            <div class="form-group">
              <div>
                <label for="name">Nama santri*</label>
              </div>
              <select name="no_induk" class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <?php foreach ($pilihs_santri as $pilih) : ?>
                  <option width="200" value="<?php echo $pilih->no_induk ?>"><?php echo $pilih->nama ?></option>
                <?php endforeach ?>
              </select>
              <div class="invalid-feedback">
                <?php echo form_error('no_induk') ?>
              </div>
            </div>
            <div class="form-group">
              <div>
                <label for="name">Mata Pelajaran*</label>
              </div>
              <select name="id_mapel" class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <?php foreach ($mapel as $row) : ?>
                  <option width="200" value="<?php echo $row->id_mapel ?>"><?php echo $row->nama_mapel ?></option>
                <?php endforeach ?>
              </select>
              <div class="invalid-feedback">
                <?php echo form_error('no_induk') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="price">Nilai*</label>
              <input class="form-control <?php echo form_error('nilai') ? 'is-invalid' : '' ?>" type="number" name="nilai" min="0" placeholder="Nilai" />
              <div class="invalid-feedback">
                <?php echo form_error('nilai') ?>
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