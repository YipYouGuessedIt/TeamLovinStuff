<!DOCTYPE html>
<!--
    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>
<head>

    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />

    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1">
	 <?php include('stuff.php'); ?>

    <title>Leftover Lovin'</title>
</head>
    <body id="bodyP">
       <?php include('panel.php'); ?>

		<div data-role="header" style="overflow:hidden;" id="headerP">
			<h1 id="homeH">Home</h1>
			<a href="#myPanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-left ui-icon-grid" id="menuB">Menu</a>
		</div>

		<div data-role="main" class="ui-content" id="mainD">
			<img id="imgLogo" src="CSS\images\pizza-b.png" alt="logo.jpeg" class="spin"/><br/>
			<a href="#myPanel" class="ui-btn ui-btn-inline ui-corner-all ui-shadow" class="font">start cooking</a>
		</div>

		<div data-role="footer" id="footerPH">
			<h1>Leftover Lovin'</h1>
		</div> 
    </body>
</html>
