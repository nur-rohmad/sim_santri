<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <style>
    .gambar {
      justify-content: center;
      margin-left: 25%;
    }

    h2 {
      text-align: center;
    }
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php $this->load->view("admin/_partials/navbar.php") ?>
  <div class="content-wrapper">
    <?php $this->load->view("admin/_partials/sider.php") ?>
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
      <div class="gambar">
        <img src="<?php echo base_url('upload/LOGO 1.png') ?>" alt="">
      </div>
      <h2>Selamat Datang di Sistem Informasi TPA Muqqorrobin</h2>
      <?php $this->load->view("admin/_partials/footer.php") ?>
      <?php $this->load->view("admin/_partials/scrolltop.php") ?>
      <?php $this->load->view("admin/_partials/modal.php") ?>
      <?php $this->load->view("admin/_partials/js.php") ?>
    </div>


</body>

</html>