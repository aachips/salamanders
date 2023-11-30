<?php

function urlFor($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path; }
  return WWW_ROOT . $script_path; }

function u($string="") {
  return urldecode($string);  }

function rawU($string="") {
  return rawurlencode($string); }

function h($string="") {
  return htmlspecialchars($string); } 
// prevents cross site scripting to use for dynamic data fields

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit(); 
}

function redirect_to($location) {
  header("Location: " . $location);
  exit();
}

function postRequest() {
  return $_SERVER['REQUEST_METHOD'] === 'POST';
}
function getRequest() {
  return $_SERVER['REQUEST_METHOD'] === 'GET';
}
?>
