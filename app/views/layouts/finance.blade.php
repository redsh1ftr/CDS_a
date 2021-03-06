<!doctype html>
<?php $server = Cache::get('server_addr');?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$pagetitle}}</title>
  <link rel="stylesheet" href="//{{$server}}/CDS_a/jQlib/jquery-ui.css">
  <script src="//{{$server}}/CDS_a/jQlib/jquery-1.10.2.js"></script>
  <script src="//{{$server}}/CDS_a/jQlib/jquery-ui.js"></script>

  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
	<style>
		@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(//{{$server}}/CDS_a/Fonts/lato.woff) format('woff');
}

		body {
			width: 100%;
			background-color: #9EC8D6;
			margin-top:0%;
			left: 0%;
			top:0%;
			margin-left: 15px;
			font-family:'Lato', sans-serif;
			text-align:left;
			color: #100;
		}


		.paperpage {
			width: 900px;
			height: 670px;
			page-break-after: always;
			page-break-inside: avoid;
		}
		

		.topbar{
			position: relative;
			width: 100%;
			left: 0%;
			top:0%;
		}

		.toolbar{
			position: relative;
			width: 100%;
			margin-top:0%;
		}

		.content_middle {
			position: relative;	
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

		.contents {
			position: relative;	
			float:right;
			text-align:left;
			margin-left:0%;
			height:100%;
			width: 100%;
		}

		.left {
			position: relative;
			text-align:center;
			float:left;
			width: 25%;

		}

		.left_middle {
			position: relative;
			text-align:center;
			float:left;
			width: 25%;

		}

		.right_middle {
			position: relative;
			text-align:center;
			float:right;
			width: 25%;

		}


		.right {
			position: relative;
			text-align:center;
			float:right;
			width: 25%;

		}

		.timestamper {
			width: 300px;
			right:50%;
			text-align:left;
			position: bottom;
			margin-top: 10%;

		}

		.centertext {
			text-align:center;
		}

		.lefttext {
			text-align:left;
		}

		.righttext {
			text-align:right;
		}
		.last{

			position: relative;	
			float:right;
			text-align:left;
			margin-left:0%;
			height:100%;
			width: 100%;

		}

		.f1{
			text-align:left;
			font-size: 24px;
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

		h5 {
			font-size:24px;
			text-align:"center";
		}
	</style>
</head>


<div class="topbar">
	<TABLE WIDTH=100%>
	<th>{{link_to_route('case_list', 'Case List')}}</th>
	<th>{{link_to_route('court_list', 'Court List')}}</th>
	<th>{{link_to_route('firm_list', 'Firms')}}</th>
	<th>{{link_to_route('deponent_list_all', 'Deponents')}}</th>
	<th>{{link_to_route('send_payments', 'Payments')}}</th>
	<th>{{link_to_route('logout', 'Logout')}}</th><tr>
</table>
<HR WIDTH="100%" COLOR="#000000" SIZE="3">

</div>

<div class="toolbar">

	<TABLE WIDTH=100%>
	<th>{{link_to_route('send_payments', 'Send Checks')}}</th>
	<th>{{link_to_route('check_in_invoice_manual', 'Receive Invoices')}}</th>
</table>
	<HR WIDTH="100%" COLOR="#000000" SIZE="3">
</div>

<div class="content_middle">
	@yield('content_middle')
	
	<div class="content_left">
		@yield('content_left')
	</div>
	
	<div class="content_right">
		@yield('content_right')
	</div>
	
</div>






</html>