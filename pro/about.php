<?php 
	session_start();
	if (isset($_SESSION['login']))
		header('Location: dashboard-ui.php');
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
          <a href="#" class="navbar-brand"><b><?php echo $_SESSION['judul'];?></b></a>
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
            <li><a href="front.php">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="scan.php">Cek Tiket</a></li>
            <li class="active"><a href="#">About</a></li>
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
            <i class="fa fa-laptop text-primary"></i><h3 class="box-title">ABOUT <?php echo $_SESSION['judul'];?></h3>
          </div>
          <div class="box-body">
            
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac tortor aliquet, fermentum massa et, placerat metus. Quisque ullamcorper posuere turpis. Nullam eros lorem, posuere in hendrerit id, luctus vel est. Maecenas sit amet magna bibendum, congue nibh ac, convallis orci. Vestibulum vitae eros facilisis, tristique tortor eget, rutrum ligula. Ut molestie bibendum pretium. Pellentesque sed rhoncus purus. Vestibulum malesuada sagittis ultricies. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam in commodo ex, pellentesque blandit eros.
</br></br>
Mauris egestas nulla ac nisi porta laoreet. Nam sed molestie lectus. Mauris quis lectus justo. Nullam lacus eros, varius id leo eu, consequat sollicitudin nunc. Praesent ullamcorper vehicula nisl, dapibus eleifend est lobortis at. Phasellus iaculis vestibulum ligula, non consequat ante viverra in. Mauris non dolor odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</br></br>
Nunc hendrerit turpis molestie ligula consectetur auctor ac id sapien. Mauris erat lectus, iaculis sit amet lectus nec, dignissim commodo lorem. Praesent pellentesque, elit et venenatis sagittis, dui mauris tempor orci, in maximus erat urna ut dolor. Duis at enim nec massa sodales maximus et non leo. Pellentesque eleifend vestibulum lectus hendrerit ultrices. Nunc non viverra lorem, ac bibendum ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis nulla sit amet augue commodo tristique. Nunc dapibus turpis nunc, non varius velit elementum at. Cras quis odio ex. Duis ullamcorper dui sit amet justo consequat, vitae condimentum lacus pharetra.
</br></br>
Maecenas sit amet egestas metus. Praesent lorem nisi, vulputate sit amet ex a, viverra tristique magna. Nulla nec lobortis tellus. Donec sit amet metus ac quam rutrum aliquet sed sed lectus. Sed mattis massa ut dictum cursus. Vestibulum suscipit nunc vel mauris ultricies tempus. Cras et elementum augue.
</br></br>
Donec aliquet interdum eros at maximus. Aenean efficitur dictum enim, eget pharetra ex dapibus at. Donec mattis porttitor libero id mattis. Nulla et blandit ante. Suspendisse placerat pulvinar lectus eget semper. Integer sollicitudin metus ut interdum scelerisque. Duis varius ante vitae arcu bibendum, vitae convallis nunc vulputate. Mauris sit amet sem leo. Fusce risus leo, faucibus nec mauris non, sollicitudin dapibus arcu. Mauris at mauris facilisis diam lobortis maximus. Praesent laoreet nunc at ante scelerisque, at auctor dui pulvinar. Donec volutpat efficitur tortor, sed ornare leo tristique sit amet. Aliquam ut faucibus tellus, et porta erat.
            
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
