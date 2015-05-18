<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("leftoverlovin",$con);
$obj = stripslashes($_POST['obj3']);
$obj2 = json_decode($obj);
$searcher = mysql_query("SELECT * FROM `ingredients` WHERE `Name` LIKE '".$obj2->Name."'");
$count = mysql_num_rows($searcher);
if($count == 0)
{
$result = mysql_query("INSERT INTO `leftoverlovin`.`ingredients` (`ID`, `Name`,`Qtype`,`Quantity`) VALUES (NULL, '".$obj2->Name."', '".$obj2->Unit."', '".$obj2->Ama."');");
}
else if($count == 1)
{

	$q = mysql_query("SELECT `Quantity` FROM `ingredients` WHERE `Name` LIKE '".$obj2->Name."'");
	$row = mysql_fetch_array($q);
	$q3 = $row['Quantity'] + $obj2->Ama;
	$q2 = mysql_query("UPDATE `leftoverlovin`.`ingredients` SET `Quantity` = '".$q3."' WHERE `Name` LIKE '".$obj2->Name."'");
	
}
echo "";
?>