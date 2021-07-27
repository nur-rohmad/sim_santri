<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <!-- Start sidebar -->
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>" data-toggle="tooltip" data-placement="right" title="Overview">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Overview</span>
        </a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2) == 'santri' ? 'active' : '' ?>" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menubarang" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-app-cart"></i>
          <span class="nav-link-text">Santri</span>
        </a>
        <ul class="sidenav-second-level collapse" id="menubarang">
          <li>
            <a href="<?php echo site_url('admin/santri/Add') ?>">Santri Baru</a>
          </li>
          <li>
            <a href="<?php echo site_url('admin/santri') ?>">Daftar Santri</a>
          </li>
        </ul>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2) == 'nilai' ? 'active' : '' ?>" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menucustomer" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-app-cart"></i>
          <span class="nav-link-text">Nilai</span>
        </a>
        <ul class="sidenav-second-level collapse" id="menucustomer">
          <li>
            <a href="<?php echo site_url('admin/nilai/add') ?>">Input Nilai</a>
          </li>
          <li>
            <a href="<?php echo site_url('admin/nilai') ?>">Daftar Nilai</a>
          </li>
        </ul>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2) == 'mapel' ? 'active' : '' ?>" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menumapel" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-app-cart"></i>
          <span class="nav-link-text">Mapel</span>
        </a>
        <ul class="sidenav-second-level collapse" id="menumapel">
          <li>
            <a href="<?php echo site_url('admin/mapel/add') ?>">Input Mapel</a>
          </li>
          <li>
            <a href="<?php echo site_url('admin/mapel') ?>">Daftar Mapel</a>
          </li>
        </ul>
      </li>


    </ul>
  </div>
</nav>