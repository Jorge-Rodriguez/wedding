<!DOCTYPE html>
<html>

  <?php require_once('lib/view/head.html') ?>

  <body>
    <?php require_once('lib/view/header.html') ?>
    <div class="text-center col-lg-8 col-lg-offset-2">
      <div class="jumbotron">
        <h2><?php set_locales(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)); echo $sorry ?></h2>
        <p>
          <?php echo $closed_msg_ln1 ?></br>
          <?php echo $closed_msg_ln2 ?>
        </p>
      </div>
    </div>
  </body>
</html>
