<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Monitoring Air Laut</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/logo-mini.svg" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="">Web Monitoring</a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="<?php echo base_url('assets') ?>/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          
         <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php') ?>">
              <span class="menu-title">Home</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/url/data') ?>">
              <span class="menu-title">Data Air Laut</span>
              <i class="mdi mdi-database menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/url/uji') ?>">
              <span class="menu-title">Uji Data</span>
              <i class="mdi mdi-google-circles-extended menu-icon"></i>
            </a>
          </li>
          
          
         
          <li class="nav-item sidebar-actions">
            <span class="nav-link">
              <div class="border-bottom">
              </div>
              <button class="btn btn-block btn-lg btn-gradient-primary mt-4">Monitoring</button>
              <div class="mt-4">
              </div>
            </span>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Pengujian Data
            </h3>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Masukkan Data Parameter</h4>
                  <p class="card-description">
                    Data Air Laut
                  </p>
                  <form class="forms-sample" action="<?php echo base_url('index.php/url/mulaiUji'); ?>">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Temperatur</label>
                          <input type="text" class="form-control" name="suhu" id="exampleInputUsername1" placeholder="Nilai Suhu">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="exampleInputUsername1">pH</label>
                          <input type="text" class="form-control" name="ph" id="exampleInputUsername1" placeholder="Nilai pH">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Turbi (Kekeruhan)</label>
                          <input type="text" class="form-control" name="turbi" id="exampleInputUsername1" placeholder="Nilai Kekeruhan">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="exampleInputUsername1">Kadar Oksigen (DO)</label>
                          <input type="text" class="form-control" name="do" id="exampleInputUsername1" placeholder="Nilai DO">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-success mr-2">Analisis</button>
                    <button type="reset" class="btn btn-gradient-danger">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
           <?php echo $this->session->flashdata('message');?>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url('assets') ?>/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url('assets') ?>/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets') ?>/js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets') ?>/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php //echo base_url('assets') ?>/js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>