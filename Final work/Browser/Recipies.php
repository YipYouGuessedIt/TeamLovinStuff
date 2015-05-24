
<!DOCTYPE html>
<html>
	<head>
		<title>Leftover Lovin'</title>
		<meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />

		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi">
		
 <?php include('stuff.php'); ?>
     <script type="text/javascript" src="./js/getRecipe.js"></script>
	</head>
	
	<body id="bodyP">

		<?php include('panel.php'); ?>


		<div data-role="header" style="overflow:hidden;" id="headerP">
			<h1 id="homeH">Recipies</h1>
			<a href="#myPanel" title="Click to display options" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-grid" id="menuB">Menu</a>
		</div>

		<div data-role="main" class="ui-content" id="main">
			<ul id="main" id="listRecipies" data-role="listview" data-filter="true" data-filter-placholder="search recipies" data-inset="true">
			<?php 
			$result = mysql_query("SELECT * FROM recipes");
			$count = mysql_num_rows($result);
			if($count > 0)
			{
				while($row = mysql_fetch_array($result)){
					$cont = true;
					$result2 = mysql_query("SELECT * FROM ingredients");
			$count2 = mysql_num_rows($result2);
			if($count2 > 0)
			{
				$c2 = 0;
				while($row2 = mysql_fetch_array($result2)){
					//echo $row2["Name"];
					$array = explode(',',$row["Ingredients"]);
				
				$num = count($array)-1;
				$c = $num+1;
				
				while($num >= 0)
				{
					$sArray = explode('$',$array[$num]);
					$num = $num-1;
					if(strtolower($row2["Name"]) == strtolower($sArray[0]))
					{
						$c2 = $c2 + 1;
						
					}
				}
					
				}
				if($c == $c2)
					{
					echo "<li><a href='' title='Click to display the desired recipe'  class='main' id='".$row["ID"]."'>".$row["Name"]."</a></li>";
				
					}
			}
					
					
					
				}
			}
			
			?>
		
			</ul>
		</div>

		<div data-role="footer" id="footerP">
			<h1>Leftover Lovin'</h1>
		</div>
		<script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
	</body>
</html>