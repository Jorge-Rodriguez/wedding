<?php
  $opendate = '2016/05/01';
  $closedate = '2016/09/01';

  if (strtotime($opendate) > time()) {
    # we are not open yet
    require_once('lib/controller/i18n.php');
    require_once('lib/view/counter.php');
  } elseif (strtotime($closedate) < time()) {
    # we are closed
    require_once('lib/controller/i18n.php');
    require_once('lib/view/sorry.php');
  } else {
    $ru = $_SERVER['REQUEST_URI'];
    $qmp = strpos($ru, '?');
    list($path, $params) = $qmp === FALSE
       ? array($ru, NULL)
       : array(substr($ru, 0, $qmp), substr($ru, $qmp + 1));

    define('URI_PARAM', isset($params) ? '' : $params);
    define('URI_PATH', $path);

    switch (URI_PATH) {
      case '/es':
        define('LANG', 'es');
        require_once('lib/controller/register.php');
        break;
      case '/pl':
        define('LANG', 'pl');
        require_once('lib/controller/register.php');
        break;
      case '/es/confirm':
        define('LANG', 'es');
        require_once('lib/controller/registrator.php');
        break;
      case '/pl/confirm':
        define('LANG', 'pl');
        require_once('lib/controller/registrator.php');
        break;
      default:
        $title = 'Eliza & Jorge';
        require_once('lib/view/index.php');
        break;
    }
  }
?>
