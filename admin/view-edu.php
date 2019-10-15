<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
$id=$_GET['v'];
$query = "SELECT * FROM `education` WHERE `id` = '$id'";
$reQuery = mysqli_query($con,$query);
$value = mysqli_fetch_array($reQuery);
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Education Details
            </div>
            <div class="col-md-3 text-right">
                <a href="all-edu.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Education</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-1">
            </div>
            <div class="col-md-9">
                <table class="table table-hover table-striped table-responsive view_table_cus">
                    <tr>
                        <td>Title</td>
                        <td>:</td>
                        <td><?php echo $value['title'];?></td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td><?php echo $value['details'];?></td>
                    </tr>

                    <tr>
                        <td>Pass Year</td>
                        <td>:</td>
                        <td>
                          <?php echo $value['pass_year']?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="panel-footer">
            <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--col-md-12 end-->
<?php get_footer() ?>
