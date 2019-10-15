<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
$query = "SELECT * FROM `social`";
$reQuery = mysqli_query($con,$query);
$value = mysqli_fetch_array($reQuery);
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Social Details
            </div>
            <div class="col-md-3 text-right">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <div class="col-md-1">
            </div>
            <div class="col-md-9">
                <table class="table table-hover table-striped table-responsive view_table_cus">
                    <tr>
                        <td>Facebok</td>
                        <td>:</td>
                        <td><?php echo $value['facebook'];?></td>
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td>:</td>
                        <td><?php echo $value['twitter'];?></td>
                    </tr>

                    <tr>
                        <td>Instragram</td>
                        <td>:</td>
                        <td>
                          <?php echo $value['instragram']?>
                        </td>
                    </tr>
                    <tr>
                        <td>Github</td>
                        <td>:</td>
                        <td>
                          <?php echo $value['github']?>
                        </td>
                    </tr>
                    <tr>
                        <td>Linkedin</td>
                        <td>:</td>
                        <td>
                          <?php echo $value['linkedin']?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="panel-footer">
            <div class="col-md-4">
                <a href="edit-info.php?v=<?= $value['id']; ?>" class="btn btn-sm btn-primary">Update</a>
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
