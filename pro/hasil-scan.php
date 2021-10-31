<?php 
	session_start();
	include 'lhast.php'; 
	include 'dbconf.php';
				$result = $mysqli->query("select * from setting");
					if($result->num_rows != 0){
						while ($row = $result->fetch_assoc()) {
							$_SESSION['creator'] = $row['creator'];
							$_SESSION['judul'] = $row['judul'];
							$_SESSION['desc'] = $row['desc'];
							$_SESSION['slider1'] = $row['slider1'];
							$_SESSION['slider2'] = $row['slider2'];
							$_SESSION['slider3'] = $row['slider3'];
						}
					}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_SESSION['judul'];?> | <?php echo $_SESSION['desc'];?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="lte/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
  <link rel="stylesheet" href="lte/dist/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="lte/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="lte/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b><?php echo $_SESSION['judul'];?></b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
           
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="scan.php">Cek Tiket</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login-ui.php">Login</a></li>
            <li><a href="regis-ui.php">Register</a></li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-ticket text-primary"></i><h3 class="box-title">Cek Tiket Dengan Melakukan Scan QRCode Pada Tiket</h3>
          </div>
          <div class="box-body">
            <center>
            	<?php 
						//echo $_GET['id'];
						$result = $mysqli->query("select p.id_pesan, t.agen, t.tujuan, t.jadwal, t.kursi, t.harga, p.nama, p.alamat, p.ktp,   p.bayar, p.status, p.bukti
                from pesan p, tiket t, user u
                where p.id_user = u.id
                and p.id_tiket = t.id_tiket
                and p.id_pesan = ".$_GET['id']."");
						if(mysqli_num_rows($result)==0)
							echo "<h1>Tiket tidak Valid.</h1>";
							while ($row = $result->fetch_assoc()) {
					
						echo "<h1>".ucwords($row['status'])."</h1></br><table><tr><td>No. Tiket</td><td> : </td><td>&nbsp &nbsp".$row['id_pesan']."</td></tr><tr><td>AN</td><td> : </td><td>&nbsp &nbsp".$row['nama']."</td></tr><tr><td>Agen PO</td><td> : </td><td>&nbsp &nbsp".$row['agen']."</td></tr><tr><td>Tujuan</td><td> : </td><td>&nbsp &nbsp".$row['tujuan']."</td></tr></table>";

						}
						?>
						</br></br>
						<a href="scan.php" class="btn btn-primary">Scan Lagi</a>
            </center>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.3
      </div>
      <strong>Copyright &copy; <?php echo date('Y');?> <a href="#" class="text-primary"><?php echo $_SESSION['creator'];?></a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="lte/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="lte/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="lte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="lte/dist/js/demo.js"></script>
</body>
</html>