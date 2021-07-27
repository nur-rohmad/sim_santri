<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  <style>
    th {
      width: 200px;
    }

    .col-md-6 {
      margin-top: 4%;
      margin-left: -2%;
    }

    img {
      margin-top: 5%;
      margin-bottom: 5%;
    }

    .table {
      margin-top: 2%;
      margin-left: 2%;
      margin-right: 3%;
      margin-bottom: 2%;
    }

    h4 {
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
      <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
      <!-- DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <a href="<?php echo site_url('admin/santri/') ?>"><i class="fa fa-fw fa-arrow-left"></i>Back</a>
        </div>
        <div class="row">
          <div class="col-md-3">
            <?php foreach ($profil_lengkap as $row) : ?>
              <img src="<?php echo base_url('upload/santri/' . $row->foto) ?>" width="200" height="250">
            <?php endforeach; ?>
          </div>

          <div class="col-md-6">
            <h4>Detail Profil Santri</h4>
            <table>
              <?php foreach ($profil_lengkap as $row) : ?>
                <tr>
                  <th>Nama</th>
                  <td><?php echo $row->nama ?></td>
                </tr>
                <tr>
                  <th>Jenis Kelamin </th>
                  <td><?php echo $row->jk ?></td>
                </tr>
                <tr>
                  <th>Kelas</th>
                  <td><?php echo $row->kelas ?></td>
                </tr>
                <tr>
                  <th>Tanggal Lahir</th>
                  <td><?php echo $row->ttl ?></td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td><?php echo $row->alamat ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
        <h4>Daftar Nilai Santri</h4>
        <table class="table">
          <thead>
            <tr>
              <th>kode mapel</th>
              <th>Mata Pelajaran</th>
              <th>Nilai</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($nilai_santri as $nilai) : ?>
              <tr>
                <td><?php echo $nilai->id_mapel ?></td>
                <td><?php echo $nilai->nama_mapel ?></td>
                <td><?php echo $nilai->nilai ?></td>
              </tr>
            <?php endforeach; ?>
            <?php foreach ($profil_lengkap as $row) : ?>
              <tr>
                <th>Total Nilai</th>
                <td></td>
                <td><?php echo $row->total_nilai ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>


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