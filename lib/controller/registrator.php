<?php
  require_once('lib/model/db.php');
  $data = json_decode($_POST['json']);
  $recaptcha = $_POST['g-recaptcha-response'];

  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($recaptcha)
    )
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  var_dump($result);

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
