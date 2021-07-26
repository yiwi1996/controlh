<?php
  include_once '../lib/helpers.php';
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>CONTROLH</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/atlantis.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css">
</head>
  <body>
  <div class="container bg bg-sussecc border border-white rounded-lg shadow-lg p-3 mb-auto" style="margin-top: 12%; width: 30%">
  <img src="img/login.jpeg" style="margin-top: 0%; width: 100%">
      <div class="container">
        <form class="login-form" method="post" action="<?php echo getUrl("Acceso","Acceso","postLogin",false,"ajax");?>">
          <div class="login-wrap">
            <div class="input-group form-group col-md-12">
              <span class="input-group-addon"><i class="fas fa-user"></i></span>
              <input type="email" name="usu_correo" class="form-control" placeholder="Usuario">
            </div>
            <div class="input-group form-group col-md-12">
              <span class="input-group-addon"><i class="fa fa-key"></i></span>
              <input type="password" name="usu_clave" class="form-control" placeholder="Contraseña">
            </div>
            <?php 
            
              if(isset($_SESSION['error'])){

                echo '<div class="alert alert-warning" id="alert">'.$_SESSION['error'].'</div>';
              }

            ?>
            <button class="btn btn-info btn-block">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </body>


  <!-- JS -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- JS AJAX - JQUERY -->
  <script src="assets/js/global.js"></script>

  <!-- jQuery UI -->
  <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
  <script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Atlantis JS -->
  <script src="assets/js/atlantis.min.js"></script>

  <!-- Atlantis DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo.js"></script>
  <script src="assets/js/demo.js"></script>
  <script>
    Circles.create({
      id:'circles-1',
      radius:45,
      value:60,
      maxValue:100,
      width:7,
      text: 5,
      colors:['#f1f1f1', '#FF9E27'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-2',
      radius:45,
      value:70,
      maxValue:100,
      width:7,
      text: 36,
      colors:['#f1f1f1', '#2BB930'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    Circles.create({
      id:'circles-3',
      radius:45,
      value:40,
      maxValue:100,
      width:7,
      text: 12,
      colors:['#f1f1f1', '#F25961'],
      duration:400,
      wrpClass:'circles-wrp',
      textClass:'circles-text',
      styleWrapper:true,
      styleText:true
    })

    var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

    var mytotalIncomeChart = new Chart(totalIncomeChart, {
      type: 'bar',
      data: {
        labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
        datasets : [{
          label: "Total Income",
          backgroundColor: '#ff9e27',
          borderColor: 'rgb(23, 125, 255)',
          data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        scales: {
          yAxes: [{
            ticks: {
              display: false //this will remove only the label
            },
            gridLines : {
              drawBorder: false,
              display : false
            }
          }],
          xAxes : [ {
            gridLines : {
              drawBorder: false,
              display : false
            }
          }]
        },
      }
    });

    $('#lineChart').sparkline([105,103,123,100,95,105,115], {
      type: 'line',
      height: '70',
      width: '100%',
      lineWidth: '2',
      lineColor: '#ffa534',
      fillColor: 'rgba(255, 165, 52, .14)'
    });
  </script>
 
</html>