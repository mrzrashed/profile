<?php
    require_once('functions\functions.php');
    needLogged();
    if($_SESSION['role']<='2'){
    get_header();
    get_sidebar();
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                All Experiense
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="panel-body">
            <table class="table table-responsive table-striped table-hover table_cus">
                <thead class="table_head">
                    <tr>
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Details</th>
                        <th>Duration</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM `experiense` order by id DESC";
                    $reQuery = mysqli_query($con, $query);
                    $i=1;
                    while ($value=mysqli_fetch_array($reQuery)) {
                  ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo substr($value['company_name'],0,10);?>...</td>
                        <td><?php echo substr($value['deatils'],0,15); ?>....</td>
                        <td><?php echo substr($value['working_time'],0,10); ?>....</td>
                        <td>
                            <a href="view-exp.php?v=<?= $value['id']; ?>"><i class="fa fa-plus-square fa-lg"></i></a>
                            <?php if($_SESSION['role']=='1'){ ?>
                            <a  ><i class="fa fa-pencil-square fa-lg" ></i></a >
                            <a ><i class="fa fa-trash fa-lg"></i></a>
                          <?php }?>
                        </td>
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
            <div class="col-md-4">
                <a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                <a href="#" class="btn btn-sm btn-primary">PDF</a>
                <a href="#" class="btn btn-sm btn-danger">SVG</a>
                <a href="#" class="btn btn-sm btn-success">PRINT</a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-right">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagina_cus">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
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
