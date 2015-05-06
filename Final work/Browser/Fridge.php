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
 <script type="text/javascript" src="./js/addFridge.js"></script>
	</head>
	
	<body id="bodyP">

		<?php include('panel.php'); ?>

		<div data-role="header" style="overflow:hidden;" id="headerP">
			<h1 id="homeH">Browse</h1>
			<a href="#myPanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-grid" id="menuB">Menu</a>
		</div>

		<div data-role="main" class="ui-content" id="main">
			<div id="fridgeadd">
				
					<h1  id="main">Add Ingredient</h1>
					<input type="text" name="fname" id="foodadd">
					<input  id="main"  name="adder" type="submit" value="Add"/>
				
			</div>

			<div id="fridgelist"  id="main">
				<ul id="listRecipies" data-role="listview" data-filter="true" data-filter-placholder="search recipies" data-inset="true">
<?php 
			$result = mysql_query("SELECT * FROM ingredients");
			$count = mysql_num_rows($result);
			if($count > 0)
			{
				while($row = mysql_fetch_array($result)){
					echo "<li><a href='' class='main'>".$row["Name"]."</a></li>";
				}
			}
			
			?>		
					</li>			
				</ul>
			</div>
		</div>

		<div data-role="footer" id="footerP">
			<h1>Leftover Lovin'</h1>
		</div> 
		<script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
	</body>
	
</html>