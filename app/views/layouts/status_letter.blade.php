<!doctype html>
<?php $server = Cache::get('server_addr');?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Status Letter</title>
	<style>

		body {
			height:900px;
			width:670px;
			background-color: #FFFFFF;
			margin-top:-15px;
			margin-left: 15px;
			font-family:'Lato', sans-serif;
			text-align:left;
			color: #100;
			position: absolute;
			page-break-after: always;
			 page-break-inside: avoid;
		}

		.centertext {	
			text-align:center;
			margin-left:0%;
			width: 100%;
		}

		.content_left {
			position: relative;	
			float:left;
			
			text-align:left;
			margin-left:0%;
			height:100%;
			width: 49%;

		}

		.content_right {
			position: relative;	
			float:right;
			text-align:left;
			margin-left:0%;
			height:100%;
			width: 49%;
		}

		.f1{
			text-align:left;
			font-size: 12px;
		}

		.f2{
			text-align:left;
			font-size: 14px;
		}



		a, a:visited {
			text-decoration:none;
		}

	</style>
</head>


<body>
<img src="//localhost/CDS_a/Images/headertempla1.png"/><br>
<div class="centertext">
	STATUS OF RECORD REQUEST
</div>

<div class="content_left">
@yield('content_left')
</div>
<div class="content_right">
@yield('content_right')
</div>
</body>

<div class="tester">
	@yield('right')
</div>

<div class="timestamper">
	@yield('timestamper')
</div>

</html>