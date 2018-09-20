<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/harupt/web/core/mysql.php');
  define('SERVERHOST', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/harupt');
  date_default_timezone_set("Asia/Jakarta");
  session_start();
?>
