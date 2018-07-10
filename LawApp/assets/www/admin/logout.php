<?php
ob_start();
include('includes/common.php');
session_start();
session_destroy();
header("Location:{$homeurl}");
?>
