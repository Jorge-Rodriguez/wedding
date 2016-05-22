<!DOCTYPE html>
<html>

<?php require_once('lib/view/head.html') ?>

<body>
  <?php require_once('lib/view/header.html') ?>
  <div class="controls col-lg-10 col-lg-offset-1">
    <form role="form" autocomplete="off" action="<?php echo LANG?>/confirm" method="post">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo $confirmation_title ?></h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="<?php echo $email_placeholder ?>" required>
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"data-toggle="modal" data-target="#confirmation" ><?php echo $go ?>...</button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.col-lg- -->
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"><?php echo $modal_title ?></h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-10">
                  <div class="entry input-group" style="width: 100%">
                    <input type="text" placeholder="<?php echo $name_placeholder ?>" required class="form-control" style="width: 65%" aria-label="...">
                      <select class="form-control input-group-addon" style="width: 35%" required="">
                        <option selected disabled value=""><?php echo $menu_select ?></option>
                        <option value="n"><?php echo $normal ?></option>
                        <option value="v"><?php echo $vege ?></option>
                        <option value="c"><?php echo $children ?></option>
                      </select>
                  </div><!-- /input-group -->
                </div><!-- /.col-lg-9 -->
                <div class="col-lg-1">
                  <button class="btn btn-success btn-add" type="button">
                    <span class="glyphicon glyphicon-plus"></span>
                  </button>
                </div>
              </div><!-- /.row -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $close ?></button>
              <button type="submit" class="btn btn-primary"><?php echo $go ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>
