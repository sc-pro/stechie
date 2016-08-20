<?php
require_once "include/core.php";
$_SESSION=array();
session_destroy();
require_once "include/info.php";
?>
    <h3 class="text-center text-success">Thank You for visiting our site.</h3>
    <h4 class="text-center text-warning">Redirecting you to home page</h4>
<?php
header("Refresh:3;url=index.php");
?>
<?php require_once "include/footer.php";?>
