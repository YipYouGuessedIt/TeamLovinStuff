<?php
$obj = stripslashes($_POST['obj']);
$obj2 = json_decode($obj);
session_start();

	$_SESSION["id"] = $obj2->id;

return $obj2->id;
?>