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
			margin:0;
			margin-left: 5%;
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
			width: 49%;

		}

		.content_right {
			position: relative;	
			float:right;
			text-align:left;
			margin-left:0%;
			width: 49%;
		}

		.content {
			position:relative;
			margin:left:-50%;
			float:left;
			text-align: left;
			width:100%;
		}

		.casejobnumber {
			position:absolute;
			text-align: right;
			margin-top:95%;
			margin-left: 77%;
		}

		.f1{
			text-align:left;
			font-size: 12px;
		}

		.f2{
			text-align:left;
			font-size: 14px;
		}

		.rf1 {
			text-align: right;
			font-size: 10px;
		}



		a, a:visited {
			text-decoration:none;
		}

	</style>
</head>




<div class="centertext">
	<b>STATUS OF RECORD REQUEST</b>
</div>


<div class="content">		
	<div class="content_left">
		@yield('content_left')
	</div>
		<div class="content_right">
			@yield('content_right')
		</div>

</div>

<div class='content'>
	<br><br>
	@yield('content')
</div>

<div class="content_right">
	@yield('regards')
</div>



<body>
</body>

<div class="tester">
	@yield('right')
</div>

<div class="timestamper">
	@yield('timestamper')
</div>

<div class="casejobnumber">
@yield('jobnumber')
</div>


</html>