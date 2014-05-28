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
			width: 35%;
			background-color: #9EC8D6;
			margin:0;
			margin-left: 15px;
			font-family:'Lato', sans-serif;
			text-align:left;
			color: #100;
			position: absolute;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 20%;
			margin-left: 15px;
			margin-top: -100px;
		}

		.tester {
			width: 50%;
			position: absolute;
			left: 50%;
			top: 8%;
			margin-left: 700px;
			margin-top: 50px;
		}

		.timestamper {
			width: 100%;
			text-align:left;
			position: absolute;
			margin-top:45%;

		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {

			font-size: 32px;
			margin: 16px 0 0 0;
			margin-left: 15px;
		}

		h2 {

			font-size: 24px;
			margin: 16px 0 0 0;
			margin-left: 15px;
		}

		h3 {
			font-size: 18px;
			margin:16px 0 0 0;
			margin-left: 15px;
		}
		h4 {
			font-size:14px;
			margin:16px 0 0 0;
			margin-left: 15px;
		}
	</style>
</head>

<TABLE WIDTH="400">
	<th>{{link_to_route('case_list', 'Case List')}}</th>
	<th>{{link_to_route('court_list', 'Court List')}}</th>
	<th>{{link_to_route('firm_list', 'Firms')}}</th>
	<th>{{link_to_route('deponent_list_all', 'Deponents')}}</th>
	<th>{{link_to_route('send_payments', 'Payments')}}</th>
	<th>{{link_to_route('logout', 'Logout')}}</th><tr>
</table>

<HR WIDTH="100%" COLOR="#000000" SIZE="3">


<body>
		@yield('content')
	</div>
</body>

<div class="tester">
	@yield('right')
</div>

<div class="timestamper">
	@yield('timestamper')
</div>

</html>