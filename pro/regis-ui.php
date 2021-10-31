<?php 
	session_start();
	if (isset($_SESSION['login']))
		header('Location: dashboard-ui.php');
	include 'lhast.php'; 
	include 'dbconf.php';
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
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
  <!-- iCheck -->
  <link rel="stylesheet" href="lte/plugins/iCheck/square/blue.css">
  <!-- This is what you need -->
  <script src="assets/es6-promise.auto.min.js"></script> <!-- IE support -->
  <script src="assets/sweetalert2.js"></script>
  <link rel="stylesheet" href="assets/sweetalert2.min.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
	
    <a href="#"><b><?php echo $_SESSION['judul'];?></b> SYSTEM</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p align="center" class="login-box-msg">Silahkan daftar untuk melanjutkan</p>

    <form method="post" action="proses-regis.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" required />
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="user" id="user" required />
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" required />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Masukkan Ulang Password" name="pass2" id="pass2" required />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
        </div>  
        <div class="col-xs-4">
         <a href="front.php" type="button" class="btn btn-warning btn-block btn-flat">Back</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="lte/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="lte/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="lte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>