<?php
require_once('functions\functions.php');
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sidebar();
$id=$_GET['v'];
$query = "SELECT * FROM `social`";
$reQuery = mysqli_query($con,$query);
$value = mysqli_fetch_array($reQuery);

if(!empty($_POST)){
  $facebook = $_POST['facebook'];
  $twitter = $_POST['twitter'];
  $instragram = $_POST['instragram'];
  $github = $_POST['github'];
  $linkedin = $_POST['linkedin'];
  if(!empty($facebook)){
    if(!empty($twitter)){
      $insertQuery = "UPDATE `social` SET `facebook`='$facebook',`twitter`='$twitter',`instragram`='$instragram',`github`='$github',`linkedin`='$linkedin' WHERE id =1;";
      $checkQuery=mysqli_query($con,$insertQuery);
      if($checkQuery){
        echo "success";
        header("Location: edit-info.php?v=".$id);
        exit();
      }
      else {
        echo "Failed";
      }
    }
    else {
      echo "Please Enter Phone Number";
    }
  }
  else {
    echo "Please Enter Name";
  }
}
 ?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update User Information
                </div>
                <div class="col-md-3 text-right">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook</label>
                    <div class="col-sm-8">
                        <input type="hidden" name="eid" value="<?= $value['user_id']?>">
                        <input type="text" class="form-control" placeholder="" name="facebook" value="<?= $value['facebook']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Twitter</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="twitter" value="<?= $value['twitter']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Instragram</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="instragram" value="<?= $value['instragram']?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Github</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="github" value="<?= $value['github']?>" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Linkedin</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="" name="linkedin" value="<?= $value['linkedin']?>" >
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button type="submit" class="btn btn-sm btn-primary">Update Information</button>
            </div>
        </div>
    </form>
</div>
<!--col-md-12 end-->

<?php
get_footer();
}
else {
  $message="You are not authorise";
  header("Location: error_access.php?e=".$message);
}
?>
