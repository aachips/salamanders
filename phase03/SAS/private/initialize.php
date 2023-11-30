<?php
  ob_start();
  define("PRIVATE_PATH", dirname(__FILE__)); // gives current file path
  define("PROJECT_PATH", dirname(PRIVATE_PATH)); // gives root folder
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');
  
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);
  // define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
 
  // About WWW_ROOT
  // * Can dynamically find everything in URL up to "/public"
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  
  
  require('functions.php');
  require('database.php');
  require('query_functions.php');

  $db = db_connect();
?>
