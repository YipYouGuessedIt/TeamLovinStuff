<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("leftoverlovin",$con);
$obj = stripslashes($_POST['obj2']);
$obj2 = json_decode($obj);
$searcher = mysql_query("SELECT * FROM `fav` WHERE `RecipeID` LIKE '".$obj2->id."'");
$count = mysql_num_rows($searcher);
if($count == 0)
{
$result = mysql_query("INSERT INTO `leftoverlovin`.`fav` (`ID`, `RecipeID`) VALUES (NULL, '".$obj2->id."');");
}
echo "";
?>