<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("leftoverlovin",$con);
$obj = stripslashes($_POST['obj3']);
$obj2 = json_decode($obj);
$result = mysql_query("INSERT INTO `leftoverlovin`.`ingredients` (`ID`, `Name`) VALUES (NULL, '".$obj2->Name."');");
echo $obj2->id;
?>