<?php
session_start();
$con=mysqli_connect("localhost","root","","royal_furniture");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/php/ecom/');
define('SITE_PATH','http://127.0.0.1/php/ecom/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'Product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'Product/');
?>