<style>
  .waktu {
    margin-top: 2%;
    color: aliceblue;

  }

  h1,
  h2,
  p,
  a {
    font-family: sans-serif;
    font-weight: normal;
  }

  .jam-digital-malasngoding {
    overflow: hidden;
    width: 200px;
    margin: 0px auto;
    border: 5px solid #efefef;
  }

  .kotak {
    float: left;
    width: 50px;
    height: 50px;
    background-color: #189fff;
  }

  .jam-digital-malasngoding p {
    color: #fff;
    font-size: 36px;
    text-align: center;
    margin-top: 0px;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

  <a class="navbar-brand" href="<?php echo site_url('admin') ?>"><?php echo SITE_NAME ?></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">

    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <div class="waktu">
          <h4 id="tanggalwaktu"></h4>
        </div>
  </div>
  </li>
  </ul>
  </div>
</nav>
<script>
  var tw = new Date();
  if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
  else(a = tw.getTime());
  tw.setTime(a);
  var tahun = tw.getFullYear();
  var hari = tw.getDay();
  var bulan = tw.getMonth();
  var tanggal = tw.getDate();
  var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
  var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
  document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun;
</script>