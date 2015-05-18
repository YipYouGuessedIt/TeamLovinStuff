<?php
				session_start();
				$t = "false";
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("leftoverlovin",$con);

				$objecto = $_SESSION["id"];
				$result = mysql_query("SELECT * FROM `recipes` WHERE `ID` = ".$objecto."");
			$count = mysql_num_rows($result);
			if($count == 1)
			{
				
				$row = mysql_fetch_array($result);
			}
				$array = explode(',',$row["Ingredients"]);
				
				$num = count($array)-1;
				$num2 = $num;
				$foodname =array();
				$foodquantity = array();
				while($num >= 0)
				{
					$sArray = explode('$',$array[$num]);
					$num = $num-1;
					$foodname[$num] = $sArray[0];
					$foodquantity[$num] = $sArray[2];
					
				}
			
$names = $foodname;
$valuesl = $foodquantity;
$number = $num2;

while($number >= 0 )
{
	$number = $number -1;
	$q = mysql_query("SELECT `Quantity` FROM `ingredients` WHERE `Name` LIKE '".$names[$number]."'");
	$row = mysql_fetch_array($q);
	$q3 = $row['Quantity'] - $valuesl[$number];
	$q2 = mysql_query("UPDATE `leftoverlovin`.`ingredients` SET `Quantity` = '".$q3."' WHERE `Name` LIKE '".$names[$number]."'");
	
	$t="true";
}
$q = mysql_query("DELETE FROM `leftoverlovin`.`ingredients` WHERE `ingredients`.`Quantity` <= 0");
	
echo $q3;
?>