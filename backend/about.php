<?php require_once('connect.php');  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Change font page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="../css/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../css/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../css/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../css/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../css/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
      <!-- main content -->
        <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              <div class="col-md-2">
              <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Add new paragraph
              </button>
            </div>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              	<thead>
                <tr>
                  <th>ID</th>
                  <th>Header</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
      $sql_query = "SELECT * FROM tblabt";
      // var_dump($sql_query);
      $result = $connect->query($sql_query);
      if($result && $result->num_rows>0){
        while($row = $result->fetch_assoc()){
        ?>

                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['title'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td>image</td>
                  <td><i class="fa fa-fw fa-pencil"></i> | <i class="fa fa-fw fa-trash"></i></td>
                </tr>
                <?php   
        }
      }
      ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                         <?php 
              if (isset($_POST['create'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $sql_query ="INSERT INTO tblabt(`title`,`description`) VALUES('$title','$description')";
                   //var_dump($sql_query); die();
                  $result = $connect->query($sql_query);
                  if($result)
                    {echo "inserted sucessfully";}
                  else
                    {echo '<style = "font-color:red">invalid entry</style>';}
                }
            ?>
            <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" placeholder="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Decription</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="Place your description" name="description">
                  </div>
                </div>
                <div class="form-group">
                  <label for="image" class="col-sm-2 control-label">Please select</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" placeholder="image">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" name="create">Create</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <?php include('top.php'); ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../js/raphael.min.js"></script>
<script src="../js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../js/moment.min.js"></script>
<script src="../js/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../js/demo.js"></script>
</body>
</html>