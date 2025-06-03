<?php Add commentMore actions
session_start();
$_SESSION["Nome"] = "";
$_SESSION["Id"] = "";
session_destroy();

header("location: login.php");
?>