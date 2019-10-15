<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']=='1'){
    get_header();
    get_sidebar();
    if (!empty($_POST)) {
        $ename=$_POST['ename'];
        $description=$_POST['description'];
        $pYear=$_POST['pYear'];

        $sql="INSERT INTO `education`(`title`, `details`, `pass_year`) VALUES('$ename','$description','$pYear')";
        if(mysqli_query($con,$sql)){
          echo "success";
        }
        else {
          echo "Fail";
        }
      }

?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Add Education
                </div>
                <div class="col-md-3 text-right">
                    <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Education List</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Education Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="ename">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Description</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Pass Year</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="pYear">
                    </div>
                </div>

            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">REGISTRATION</button>
            </div>
        </div>
    </form>
</div>
<!--col-md-12 end-->
<?php
    get_footer();
  }else {
    $message="You are not authorise";
    header("Location: error_access.php?e=".$message);
  }
?>
