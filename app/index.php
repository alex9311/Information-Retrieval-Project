<!DOCTYPE HTML>
<html>
  <?php include "common/common.php";?>
  <?php print_imports($app_directory); ?>
  <body class="no-sidebar">
    <!-- Header -->
    <?php print_header($app_directory); ?>
    <!-- Banner -->
    <div id="banner-wrapper">
      <div id="banner" class="box ">
        <div class="row">
          <div class="7u">
            <h2>Spark your ideas!</h2>
            <p>Get your ideas developed.</p>
          </div><!--7u-->
          <div class="5u">
            <ul>
              <li><a href="<?php echo $app_directory; ?>/pages/vote.php?previous_id=0" class="button big icon fa-arrow-circle-right">Vote!</a></li>
              <li><a href="<?php echo $app_directory; ?>/pages/submit.php" class="button big icon fa-arrow-circle-right">Submit!</a></li>
            </ul>
          </div><!--5u-->
        </div><!--row-->
      </div><!--box -->
    </div><!--banner-wrapper-->
    <div id="main-wrapper">
    </div>
  </body>
</html>
