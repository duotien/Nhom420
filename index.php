<?php
session_start();

require_once "./mvc/Bridge.php";
$myApp = new App();
include_once('mvc/views/blocks/header.php');

include_once('mvc/views/blocks/footer.php');

?>
