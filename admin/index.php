<?php
require_once('functions\functions.php');
needLogged();
get_header();
get_sidebar();
?>

                <div class="col-md-12">
                  <?php echo $_SESSION['name'];?>
                </div><!--col-md-12 end-->

<?php get_footer(); ?>
