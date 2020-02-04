<!-- Home -->
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
          
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hasil Perhitungan Neural Fuzzy Network</h4>
                  <canvas id="lineChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Persentase Hasil</h4>
                  <canvas id="pieChart" style="height:250px"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
            <br>
      <?php
        
        $numEpoch = 1000;

        $target = 1;
        $bias = 1;
        $alfa = 0.1;


        $bobotx1k1 = 0.1; 
        $bobotx1k2 = 0.3;
        $bobotx2k1 = 0.1;
        $bobotx2k2 = 0.2;
        $bobotx3k1 = 0.3;
        $bobotx3k2 = 0.2;
        $bobotx4k1 = 0.2;
        $bobotx4k2 = 0.3;
        $bobotk1l = 0.2;
        $bobotk2l = 0.3;

        //echo 'Bobot 0 : '.$bobotx1k1.', '.$bobotx2k1.', '.$bobotx3k1.', '.$bobotx4k1.', '.$bobotx1k2.', '.$bobotx2k2.', '.$bobotx3k2.', '.$bobotx4k2.', '.$bobotk1l.', '.$bobotk2l;
        echo '<br>';
        ?>

        <h3 class="card-title">Data Bobot</h3>
                  <div class="table-responsive">
                    <table style="width:100%" class="table">
                    <tr>
                      <th></th>
                      <th>X1K1</th> 
                      <th>X2K1</th>
                      <th>X3K1</th>
                      <th>X4K1</th>
                      <th>X1K2</th>
                      <th>X2K2</th> 
                      <th>X3K2</th>
                      <th>X4K2</th>
                      <th>K1L</th>
                      <th>K2L</th>
                    </tr>
                    <tr>
                      <td>Bobot Epoch 0</td>
                      <td><?php echo $bobotx1k1 ?></td>
                      <td><?php echo $bobotx1k2 ?></td>
                      <td><?php echo $bobotx2k1 ?></td>
                      <td><?php echo $bobotx2k2 ?></td>
                      <td><?php echo $bobotx3k1 ?></td>
                      <td><?php echo $bobotx3k2 ?></td>
                      <td><?php echo $bobotx4k1 ?></td>
                      <td><?php echo $bobotx4k2 ?></td>
                      <td><?php echo $bobotk1l ?></td>
                      <td><?php echo $bobotk2l ?></td>
                    </tr>
                  

        <?php

        foreach ($max1 as $mx) { $max1 = $mx->max; }
        foreach ($max2 as $mx) { $max2 = $mx->max; }
        foreach ($max3 as $mx) { $max3 = $mx->max; }
        foreach ($max4 as $mx) { $max4 = $mx->max; }
        foreach ($maxt as $mx) { $maxt = $mx->max; }
        foreach ($minx1 as $mn) { $minx1 = $mn->min; }
        foreach ($minx2 as $mn) { $minx2 = $mn->min; }
        foreach ($minx3 as $mn) { $minx3 = $mn->min; }
        foreach ($minx4 as $mn) { $minx4 = $mn->min; }
        foreach ($mint as $mn) { $mint = $mn->min; }
    
        for ($i=1; $i<=$numEpoch; $i++) { 
          //echo "Epoch ".$i;
          //echo "<br>";
          //$no = 0;
         foreach ($param as $p) {
          $X1 = round((0.8*($p->X1-$minx1)/($max1-$minx1))+0.1, 9);
          $X2 = round((0.8*($p->X2-$minx2)/($max2-$minx2))+0.1, 9);
          $X3 = round((0.8*($p->X3-$minx3)/($max3-$minx3))+0.1, 9);
          $X4 = round((0.8*($p->X4-$minx4)/($max4-$minx4))+0.1, 9);
          $T = round(1-((0.8*($p->T-$mint)/($maxt-$mint))+0.1), 9);

          // echo $X1.",".$X2.",".$X3.",".$X4.",".$T;
          // echo "<br>";

          $netK1 = $bias+($X1*$bobotx1k1+$X2*$bobotx2k1+$X3*$bobotx3k1+$X4*$bobotx4k1);
          $netK2 = $bias+($X1*$bobotx1k2+$X2*$bobotx2k2+$X3*$bobotx3k2+$X4*$bobotx4k2);
          $K1 = 1/(1+exp(-$netK1));
          $K2 = 1/(1+exp(-$netK2));
          $netL = $bias+($K1*$bobotk1l+$K2*$bobotk2l);
          $L = 1/(1+exp(-$netL));
          
            $tau = ($T-$L)*$L*(1-$L);
            $deltaK1 = $alfa*$K1*$tau;
            $deltaK2 = $alfa*$K2*$tau;
            $tauN1 = $tau * $bobotk1l;
            $tauN2 = $tau * $bobotk2l;
            $tau1 = $tauN1 *($K1*(1-$K1));
            $tau2 = $tauN2 *($K2*(1-$K2));
            $DX1k1 = $alfa * $tau1 *$X1;
            $DX1k2 = $alfa * $tau2 *$X1;
            $DX2k1 = $alfa * $tau1 *$X2;
            $DX2k2 = $alfa * $tau2 *$X2;
            $DX3k1 = $alfa * $tau1 *$X3;
            $DX3k2 = $alfa * $tau2 *$X3;
            $DX4k1 = $alfa * $tau1 *$X4;
            $DX4k2 = $alfa * $tau2 *$X4;

            $bobotk1l = $deltaK1 + $bobotk1l;
            $bobotk2l = $deltaK2 + $bobotk2l;
            $bobotx1k1 = $bobotx1k1 + $DX1k1;
            $bobotx1k2 = $bobotx1k2 + $DX1k2;
            $bobotx2k1 = $bobotx2k1 + $DX2k1;
            $bobotx2k2 = $bobotx2k2 + $DX2k2;
            $bobotx3k1 = $bobotx3k1 + $DX3k1;
            $bobotx3k2 = $bobotx3k2 + $DX3k2;
            $$bobotx4k1 = $bobotx4k1 + $DX4k1;
            $$bobotx4k2 = $bobotx4k2 + $DX4k2;
          
          

          //$n = $no+1;
         // echo 'netK1 = '.round($netK1, 2);
         // echo '<br>';
         // echo 'netK2 = '.round($netK2, 2);
         // echo '<br>';
         // echo 'K1 = '.round($K1, 2);
         // echo '<br>';
         // echo 'K2 = '.round($K2, 2);
         // echo '<br>';
         // echo 'netL = '.round($netL, 5);
         // echo '<br>';
         // echo 'L = '.round($L, 2);
         //  echo '<br>';
           // echo 'tau = '.round($tau, 2);
           // echo '<br>';
           // echo 'deltaK1 = '.round($deltaK1, 2);
           // echo '<br>';
           // echo 'deltaK2 = '.round($deltaK2, 2);
           // echo '<br>';
           // echo 'tauN1 = '.round($tauN1, 2);
           // echo '<br>';
           // echo 'tauN2 = '.round($tauN2, 2);
           // echo '<br>';
           // echo 'tau1 = '.round($tau1, 2);
           // echo '<br>';
           // echo 'tau2 = '.round($tau2, 2);
           // echo '<br>';
           // echo 'DX1k1 = '.round($DX1k1, 2);
           // echo '<br>';
           // echo 'DX1k2 = '.round($DX1k2, 2);
           // echo '<br>';
           // echo 'DX2k1 = '.round($DX2k1, 2);
           // echo '<br>';
           // echo 'DX2k2 = '.round($DX2k2, 2);
           // echo '<br>';
           // echo 'DX3k1 = '.round($DX3k1, 2);
           // echo '<br>';
           // echo 'DX3k2 = '.round($DX3k2, 2);
           // echo '<br>';
           // echo 'DX4k1 = '.round($DX4k1, 2);
           // echo '<br>';
           // echo 'DX4k2 = '.round($DX4k2, 2);
           // echo '<br>';
           // ec$ho 'Bobot '.$n.' : '.round($bobotx1k1, 2).', '.round($bobotx1k2, 2).', '.round($bobotx2k1, 2).', '.round($bobotx2k2, 2).', '.round($bobotx3k1, 2).', '.round($bobotx3k2, 2).', '.round($bobotx4k1, 2).', '.round($bobotx4k2, 2).', '.round($bobotk1l, 2).', '.round($bobotk2l, 2);
          //echo '<br>';
          //$no+=1;
        }
        }

          echo '<br>';
          //echo 'Bobot Akhir Epoch '.$numEpoch.' : '.round($bobotx1k1, 2).', '.round($bobotx1k2, 2).', '.round($bobotx2k1, 2).', '.round($bobotx2k2, 2).', '.round($bobotx3k1, 2).', '.round($bobotx3k2, 2).', '.round($bobotx4k1, 2).', '.round($bobotx4k2, 2).', '.round($bobotk1l, 2).', '.round($bobotk2l, 2);

          ?>
                    <tr>
                      <td>Bobot Epoch <?php echo $numEpoch ?></td>
                      <td><?php echo round($bobotx1k1, 2) ?></td>
                      <td><?php echo round($bobotx1k2, 2) ?></td>
                      <td><?php echo round($bobotx2k1, 2) ?></td>
                      <td><?php echo round($bobotx2k2, 2) ?></td>
                      <td><?php echo round($bobotx3k1, 2) ?></td>
                      <td><?php echo round($bobotx3k2, 2) ?></td>
                      <td><?php echo round($bobotx4k1, 2) ?></td>
                      <td><?php echo round($bobotx4k2, 2) ?></td>
                      <td><?php echo round($bobotk1l, 2) ?></td>
                      <td><?php echo round($bobotk2l, 2) ?></td>
                    </tr>

                  </table>
                </div>
                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
          <?php
          $no = 1;
          $index = 0;
          $Baik = 0;
          $Cukup = 0;
          $Buruk = 0;
          $dataFuzzyOutput = array();
          $hasilFuzzyOutput = array();
          foreach ($mxtes1 as $mx) { $mxtes1 = $mx->max; }
          foreach ($mxtes2 as $mx) { $mxtes2 = $mx->max; }
          foreach ($mxtes3 as $mx) { $mxtes3 = $mx->max; }
          foreach ($mxtes4 as $mx) { $mxtes4 = $mx->max; }
          
          foreach ($mntes1 as $mn) { $mntes1 = $mn->min; }
          foreach ($mntes2 as $mn) { $mntes2 = $mn->min; }
          foreach ($mntes3 as $mn) { $mntes3 = $mn->min; }
          foreach ($mntes4 as $mn) { $mntes4 = $mn->min; }
          // echo $mxtes1.",".$mxtes2.",".$mxtes3.",".$mxtes4;
          ?>
          <br><br><br>
            <h3 class="card-title">Data Testing</h3>
                  <div class="table-responsive">
                    <table style="width:100%" class="table">
                    <tr>
                      <th>Suhu</th>
                      <th>pH</th> 
                      <th>Turbi</th>
                      <th>DO</th>
                      <th>L</th>
                      <th>Fuzzy</th>
                      <th>Hasil</th>
                    </tr>
          <?php
          foreach ($test as $t) {
            $X1 = round((0.8*($t->X1-$mntes1)/($mxtes1-$mntes1))+0.1, 9);
            $X2 = round((0.8*($t->X2-$mntes2)/($mxtes2-$mntes2))+0.1, 9);
            $X3 = round((0.8*($t->X3-$mntes3)/($mxtes3-$mntes3))+0.1, 9);
            $X4 = round((0.8*($t->X4-$mntes4)/($mxtes4-$mntes4))+0.1, 9);
            

            // echo $X1.",".$X2.",".$X3.",".$X4;
            // echo "<br>";

            $netK1 = $bias+($X1*$bobotx1k1+$X2*$bobotx2k1+$X3*$bobotx3k1+$X4*$bobotx4k1);
            //echo 'netk1 = '.$netK1;
            $netK2 = $bias+($X1*$bobotx1k2+$X2*$bobotx2k2+$X3*$bobotx3k2+$X4*$bobotx4k2);
            //echo 'netk2 = '.$netK2;
            $K1 = 1/(1+exp(-$netK1));
            //echo 'k1 = '.$K1;
            $K2 = 1/(1+exp(-$netK2));
            //echo 'k2 = '.$K2;
            $netL = $bias+(($K1*$bobotk1l)+($K2*$bobotk2l));
            //echo 'netL = '.$netL;
            $L = 1/(1+exp(-$netL));

            //perhitungan fuzzy
            $fuzzyOuput = '';
            $fuzzyNilai = 0;
          if ($L <= 0.2) {
            $fuzzyOuput = 'Buruk';
            $fuzzyNilai = 0;
          }
          if (($L > 0.2) && ($L < 0.4)) {
            $hitungBuruk = (0.4-$L)/(0.4-0.2);
            $hitungCukup = ($L-0.2)/(0.4-0.2);
            if ($hitungCukup > $hitungBuruk) {
              $fuzzyOuput = 'Cukup';
              $fuzzyNilai = $hitungCukup;
            } else {
              $fuzzyOuput = 'Buruk';
              $fuzzyNilai = $hitungBuruk;
            }
          }
          if (($L > 0.6) && ($L < 0.8)) {
            $hitungCukup = (0.8 - $L)/(0.8-0.6);
            $hitungBaik = ($L-0.6)/(0.8-0.6);
            if ($hitungBaik > $hitungCukup) {
              $fuzzyOuput = 'Baik';
              $fuzzyNilai = $hitungBaik;
            } else {
              $fuzzyOuput = 'Cukup';
              $fuzzyNilai = $hitungCukup;
            }
          }

          if (($L >= 0.4) && ($L <=0.6)) {
            $fuzzyOuput = 'Cukup';
            $fuzzyNilai = 0.5;
          }
          if ($L >= 0.8) {
            $fuzzyOuput = 'Baik';
            $fuzzyNilai = 1;
          }


          //menghitung jumlah baik cukup buruk buat chart
          if ($fuzzyOuput == 'Baik') {
            $Baik+=1;
          }
          if ($fuzzyOuput == 'Cukup') {
            $Cukup+=1;
          }
          if ($fuzzyOuput == 'Buruk') {
            $Buruk+=1;
          }

          $dataFuzzyOutput[$index] = $fuzzyNilai;
          $hasilFuzzyOutput[$index] = $fuzzyOuput;
          ?>
            
                    
                    <tr>
                      <td><?php echo $t->X1; ?></td>
                      <td><?php echo $t->X2; ?></td> 
                      <td><?php echo $t->X3; ?></td> 
                      <td><?php echo $t->X4; ?></td> 
                      <td><?php echo $L; ?></td>
                      <td><?php echo $fuzzyNilai; ?></td>
                      <td><?php if ($fuzzyOuput == 'Baik') {
                        ?><label class="badge badge-gradient-info">Baik</label><?php
                        }
                        if ($fuzzyOuput == 'Buruk') {
                         ?>
                         <label class="badge badge-gradient-danger">Buruk</label>
                         <?php } if ($fuzzyOuput == 'Cukup') {
                          ?>
                          <label class="badge badge-gradient-warning">Cukup</label>
                          <?php
                         } ?></td> 
                    </tr>
                  
                  
          <?php
          $no+=1;
          $index+=1;
          }

          // echo '<br>';
          // echo '<br>';
          // $dataLength = count($dataFuzzyOutput);
          // for ($i=0; $i < $dataLength; $i++) { 
          //   echo $dataFuzzyOutput[$i].',';
          //   echo $hasilFuzzyOutput[$i].',';
          // }
      ?>
      </table>
                </div>
                </div>
              </div>
            </div>
            

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
  <script type="text/javascript">
    $(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: [<?php $dataLength = count($dataFuzzyOutput);
          for ($i=1; $i <= $dataLength; $i++) { 
            echo $i.',';
          } ?>],
    datasets: [{
      label: '# of Votes',
      data: [ <?php $dataLength = count($dataFuzzyOutput);
          for ($i=0; $i < $dataLength; $i++) { 
            echo $dataFuzzyOutput[$i].',';
          } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var multiLineData = {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [{
        label: 'Dataset 1',
        data: [12, 19, 3, 5, 2, 3],
        borderColor: [
          '#587ce4'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 2',
        data: [5, 23, 7, 12, 42, 23],
        borderColor: [
          '#ede190'
        ],
        borderWidth: 2,
        fill: false
      },
      {
        label: 'Dataset 3',
        data: [15, 10, 21, 32, 12, 33],
        borderColor: [
          '#f44252'
        ],
        borderWidth: 2,
        fill: false
      }
    ]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }

  };
  var doughnutPieData = {
    datasets: [{
      data: [<?php echo $Buruk.', '.$Baik.', '.$Cukup; ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.5)',
        'rgba(255, 206, 86, 0.5)',
        'rgba(75, 192, 192, 0.5)',
        'rgba(153, 102, 255, 0.5)',
        'rgba(255, 159, 64, 0.5)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
      'Buruk',
      'Baik',
      'Cukup',
    ]
  };

  var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  var areaData = {
    labels: [<?php $no=1; foreach ($param as $p) { echo $no.','; $no++; } ?>],
    datasets: [{
      label: 'Suhu Celcius',
      data: [<?php foreach ($param as $p) { echo $p->X1.','; } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: true, // 3: no fill
    }]
  };

  var areaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }
  
  var areaDataDua = {
    labels: [<?php $no=1; foreach ($param as $p) { echo $no.','; $no++; } ?>],
    datasets: [{
      label: 'Kekeruhan',
      data: [<?php foreach ($param as $p) { echo $p->X3.','; } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: true, // 3: no fill
    }]
  };

  var areaOptionsDua = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }

  var areaDataTiga = {
    labels: [<?php $no=1; foreach ($param as $p) { echo $no.','; $no++; } ?>],
    datasets: [{
      label: 'pH',
      data: [<?php foreach ($param as $p) { echo $p->X2.','; } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: true, // 3: no fill
    }]
  };

  var areaOptionsTiga = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }
  var areaDataEmpat = {
    labels: [<?php $no=1; foreach ($param as $p) { echo $no.','; $no++; } ?>],
    datasets: [{
      label: 'DO',
      data: [<?php foreach ($param as $p) { echo $p->X4.','; } ?>],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: true, // 3: no fill
    }]
  };

  var areaOptionsEmpat = {
    plugins: {
      filler: {
        propagate: true
      }
    }
  }

  var multiAreaData = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
        label: 'Facebook',
        data: [8, 11, 13, 15, 12, 13, 16, 15, 13, 19, 11, 14],
        borderColor: ['rgba(255, 99, 132, 0.5)'],
        backgroundColor: ['rgba(255, 99, 132, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Twitter',
        data: [7, 17, 12, 16, 14, 18, 16, 12, 15, 11, 13, 9],
        borderColor: ['rgba(54, 162, 235, 0.5)'],
        backgroundColor: ['rgba(54, 162, 235, 0.5)'],
        borderWidth: 1,
        fill: true
      },
      {
        label: 'Linkedin',
        data: [6, 14, 16, 20, 12, 18, 15, 12, 17, 19, 15, 11],
        borderColor: ['rgba(255, 206, 86, 0.5)'],
        backgroundColor: ['rgba(255, 206, 86, 0.5)'],
        borderWidth: 1,
        fill: true
      }
    ]
  };

  var multiAreaOptions = {
    plugins: {
      filler: {
        propagate: true
      }
    },
    elements: {
      point: {
        radius: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }

  var scatterChartData = {
    datasets: [{
        label: 'First Dataset',
        data: [{
            x: -10,
            y: 0
          },
          {
            x: 0,
            y: 3
          },
          {
            x: -25,
            y: 5
          },
          {
            x: 40,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)'
        ],
        borderWidth: 1
      },
      {
        label: 'Second Dataset',
        data: [{
            x: 10,
            y: 5
          },
          {
            x: 20,
            y: -30
          },
          {
            x: -25,
            y: 15
          },
          {
            x: -10,
            y: 5
          }
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.2)',
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 1
      }
    ]
  }

  var scatterChartOptions = {
    scales: {
      xAxes: [{
        type: 'linear',
        position: 'bottom'
      }]
    }
  }

  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }

  if ($("#lineChart").length) {
    var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: data,
      options: options
    });
  }

  if ($("#linechart-multi").length) {
    var multiLineCanvas = $("#linechart-multi").get(0).getContext("2d");
    var lineChart = new Chart(multiLineCanvas, {
      type: 'line',
      data: multiLineData,
      options: options
    });
  }

  if ($("#areachart-multi").length) {
    var multiAreaCanvas = $("#areachart-multi").get(0).getContext("2d");
    var multiAreaChart = new Chart(multiAreaCanvas, {
      type: 'line',
      data: multiAreaData,
      options: multiAreaOptions
    });
  }

  if ($("#doughnutChart").length) {
    var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  if ($("#pieChart").length) {
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
  }

  
  if ($("#areaChart").length) {
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaData,
      options: areaOptions
    });
  }

  if ($("#areaChartDua").length) {
    var areaChartCanvas = $("#areaChartDua").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaDataDua,
      options: areaOptionsDua
    });
  }
  
  if ($("#areaChartTiga").length) {
    var areaChartCanvas = $("#areaChartTiga").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaDataTiga,
      options: areaOptionsTiga
    });
  }
  if ($("#areaChartEmpat").length) {
    var areaChartCanvas = $("#areaChartEmpat").get(0).getContext("2d");
    var areaChart = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaDataEmpat,
      options: areaOptionsEmpat
    });
  }

  if ($("#scatterChart").length) {
    var scatterChartCanvas = $("#scatterChart").get(0).getContext("2d");
    var scatterChart = new Chart(scatterChartCanvas, {
      type: 'scatter',
      data: scatterChartData,
      options: scatterChartOptions
    });
  }

  if ($("#browserTrafficChart").length) {
    var doughnutChartCanvas = $("#browserTrafficChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: browserTrafficData,
      options: doughnutPieOptions
    });
  }
});
  </script>
  <script src="<?php //echo base_url('assets') ?>/js/chart.js"></script>
  <!-- End custom js for this page-->
</body>

</html>