<!doctype html>
<?php $server = Cache::get('server_addr');?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$pagetitle}}</title>
	<style>
			@font-face {
			  font-family: 'Lato';
			  font-style: normal;
			  font-weight: 700;
			  src: local('Lato Bold'), local('Lato-Bold'), url(//{{$server}}/CDS_a/Fonts/lato.woff) format('woff');
			}

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #100;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 20%;
			margin-left: -150px;
			margin-top: -100px;
		}


		a, a:visited {
			text-decoration:none;
		}

		h1 {

			font-size: 32px;
			margin: 16px 0 0 0;
		}

		h2 {

			font-size: 24px;
			margin: 16px 0 0 0;
		}

		h3 {
			font-size: 18px;
			margin:16px 0 0 0;
		}
		h4 {
			font-size:14px;
			margin:16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		@yield('content')
	</div>
</body>
<div class="tester">
	@yield('test')
</div>
</html>