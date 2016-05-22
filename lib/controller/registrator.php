<?php
  require_once('lib/model/db.php');
  $data = json_decode($_POST['json']);
  $dbconn = Db::getInstance();
  foreach($data as $key=>$value) {
    # insert $key email on database
    $sql = "INSERT INTO contacts (email, locale) VALUES ('".$key."', '".LANG."')";
    $dbconn->exec($sql);
    $id = $dbconn->lastInsertId();
    foreach ($value as $item) {
      foreach ($item as $key => $value) {
        # insert guest and menu on database
        $sql = "INSERT INTO guests (contact, name, menu) VALUES (".$id.", '".$key."', '".$value."')";
        $dbconn->exec($sql);
      }
    }
  }
  require_once('lib/controller/i18n.php');
  set_locales(LANG);
  require_once('lib/view/thanks.php');
?>
