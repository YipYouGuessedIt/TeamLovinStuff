<!DOCTYPE html>
<html>
	<head>
		<title>Leftover Lovin'</title>
		<meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <!-- WARNING: for iOS 7, remove the width=device-width and height=device-height attributes. See https://issues.apache.org/jira/browse/CB-4323 -->
        <!--<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
		-->
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi">
 <?php include('stuff.php'); ?>
     <script type="text/javascript" src="./js/cooked.js"></script>
     <script type="text/javascript" src="./js/fav.js"></script>
	</head>
	
	
	
	<body id="bodyP">
	<?php
session_start();
	$objecto = $_SESSION["id"];
				$result = mysql_query("SELECT * FROM `recipes` WHERE `ID` = ".$objecto."");
			$count = mysql_num_rows($result);
			if($count == 1)
			{
				$row = mysql_fetch_array($result);
			}
			else
			{
				echo "AAAAAa";
			}			
include('panel.php'); ?>


		<div data-role="header" style="overflow:hidden;" id="headerP">
			<h1  id="homeH">Recipe</h1>
			<a href="#myPanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-grid"  id="menuB">Menu</a>
			<a href="" id=<?php echo "'".$row["ID"]."'" ?> class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-heart" name="moop"  style="border-width: 2px; border-radius: 30px; margin: auto; 	margin-right: 13px; height:15px; width:5px; top: 28px;"></a>
		</div>
		

		<div data-role="main" class="ui-content" id="main">
			<h1><?php echo "".$row["Name"]."" ?></h1>
			<img id="Foodimg" src=<?php echo "'./XML/" .$row["ImageLink"]. "'" ?> alt="logo.jpeg" alt="food.jpeg"/>
			<div id="Info">
				<h3>Information</h3>
				<ul id="foodinfo" data-role="listview">
				<li>Description:  <?php echo "".$row["Description"]."" ?></li>
				<li>Meal Time:  <?php echo "".$row["MealTime"]."" ?></li>
				
			</div>
			<div id="listing">
				<h3>Ingredients</h3>
				<ul id="listIngredients" data-role="listview">
				<?php 
				$array = explode(',',$row["Ingredients"]);
				
				$num = count($array)-1;
				$foodname =array();
				$foodquantity = array();
				while($num >= 0)
				{
					$sArray = explode('$',$array[$num]);
					echo "<li>".$sArray[0]."( ".$sArray[2]." ".$sArray[1].")</li>";
					$num = $num-1;
					$foodname[$num] = $sArray[0];
					$foodquantity[$num] = $sArray[1];
				}
				?>

			</div>
			<div id="Instructions">
				<h3>Instructions</h3>
				<ul id="Steps" data-role="listview">
				<?php $array = explode(',',$row["Prep"]);
				
				$num = count($array)-1;
				$m =0;
				$n = 1;
				while($num >= $m)
				{
					echo "<li>STEP ".$n .") ".$array[$m]."</li>";
					$m = $m+1;
					$n = $n+1;
				}
				?>
				</ul>
			</div>
			</ul>
				<div id="cookedd">
					<input  id="main"  name="cooked" type="submit" value="Cooked the meal"/>
				</div>
		</div>
		


		<div data-role="footer" id="footerP">
			<h1>Leftover Lovin'</h1>
		</div> 
		<script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
	</body>
</html>