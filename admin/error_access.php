<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
$msg = $_GET['e'];
?>

                <div class="col-md-12">
                  <?php  echo $msg; ?>
                </div><!--col-md-12 end-->

<?php get_footer(); ?>
