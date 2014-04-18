<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$pagetitle}}</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			width: 400px;
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
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 20%;
			margin-left: 400px;
			margin-top: 100px;
		}

		.timestamper {
			width: 300px;
			text-align:left;
			position: bottom;
			margin-top: 10%;

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
	<th>{{link_to_route('firm_list', 'Firms')}}</th><tr>
</table>

<HR WIDTH="100%" COLOR="#000000" SIZE="3">


<body>
		@yield('content')
	</div>
</body>

<div class="tester">
	@yield('right')
</div>

</html>