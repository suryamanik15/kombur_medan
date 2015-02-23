<?php
/*
 */
$current_page_uri = $_SERVER['REQUEST_URI'];
$part_url = explode("/", $current_page_uri);
$page_name = strtolower(end($part_url));
$email_id = "sandeep@agileits.com";
define('FILE_PREFIX', ".php");
?>