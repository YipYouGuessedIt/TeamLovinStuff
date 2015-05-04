<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("leftoverlovin",$con);
$obj = stripslashes($_POST['obj2']);
$obj2 = json_decode($obj);
$result = mysql_query("INSERT INTO `leftoverlovin`.`fav` (`ID`, `RecipeID`) VALUES (NULL, '".$obj2->id."');");
echo $obj2->id;
?>