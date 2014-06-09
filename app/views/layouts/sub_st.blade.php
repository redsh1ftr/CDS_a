<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Subpoena</title>
	<style>


		.sub_content {
			background-image: url('//{{Cache::get('server_addr')}}/CDS_a/Images/sub_st.png');
			background-size: contain;
			background-repeat: no-repeat;
			position: absolute;
			height:900px;
			width:670px;
			font-family: arial;
			text-align:left;
			color: #100;
			position: absolute;
			page-break-after: always;
			page-break-inside: avoid;
		}


		.district_court{
			position: absolute;
			text-align: right;
			font-family: arial;
			font-size: 11px;
			margin-top:55px;
			width:120px;
			border:1px, solid #000000;
		}

		.circuit_court{
			position: absolute;
			text-align: right;
			font-family: arial;
			font-size: 11px;
			margin-top:68px;
			width:120px;
			border:1px, solid #000000;
		}

		.probate_court{
			position: absolute;
			text-align: right;
			font-family: arial;
			font-size: 11px;
			margin-top:80px;
			width:120px;
			border:1px, solid #000000;
		}

		.caseno{
			position: absolute;
			text-align: left;
			font-family: arial;
			margin-top: 57px;
			margin-left:550px;
		}
	
		.nor_top {
			position: absolute;
			font-size: 11px;
			width: 250px;
			height:40px;	
			overflow:hidden;
			font-family: arial;
			text-align: left;
			margin-top: 140px;
			margin-left:65px;

		}
		.respondent {
			position: absolute;
			font-size: 11px;
			max-width: 250px;
			height:45px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 130px;
			margin-left:370px;
		}



		.job_number {
			position: absolute;
			font-size: 12px;
			overflow: hidden;
			text-align: left;
			margin-top: 250px;
			margin-left:60px;
			font-family: arial;
			font-weight: bold;
		}


		.custodian{
			position: absolute;
			font-size: 8px;
			overflow: hidden;
			text-align: left;
			max-width: 250px;
			overflow: hidden;
			font-family: arial;
			margin-top: 230px;
			margin-left:450px;
		}


		.top_addr{
			position: absolute;
			font-size: 9px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 330px;
			margin-left:340px;
		}

		.day{
			position: absolute;
			font-size: 10px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 365px;
			margin-left: 85px;
		}

		.day_date{
			position: absolute;
			font-size: 10px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 365px;
			margin-left: 235px;
		}

		.day_time{
			position: absolute;
			font-size: 10px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 365px;
			margin-left: 535px;
		}

		.verbiage{
			position: absolute;
			width:620px;
			height:190px;
			font-size: 10px;
			border: 1px solid #000000;
			border-width: 1px;
			text-align: left;
			font-family: arial;
			margin-top: 420px;
			margin-left: 33px;
		}

		.requester_name{
			position: absolute;
			font-size: 10px;
			width: 220px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 680px;
			margin-left: 73px;
		}

		.requester_phone{
			position: absolute;
			font-size: 10px;
			width: 220px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 680px;
			margin-left: 300px;

		}

		.requester_street1{
			position: absolute;
			font-size: 10px;
			width: 220px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 710px;
			margin-left: 73px;

		}

		.requester_city{
			position: absolute;
			font-size: 10px;
			width: 220px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 735px;
			margin-left: 73px;
		}

		.requester_state{
			position: absolute;
			font-size: 10px;
			width: 220px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 735px;
			margin-left: 293px;
		}

		.requester_zip{
			position: absolute;
			font-size: 10px;
			width: 220px;
			overflow: hidden;
			text-align: left;
			font-family: arial;
			margin-top: 735px;
			margin-left: 400px;
		}



		.f1{

			text-align:right;
			font-size: 10px;
			font-weight: bold;
		}

		.f2{
			text-align:center;
			font-size: 12px;
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


<div class="sub_content">

	<div class="district_court">
		@yield('district')
	</div>

	<div class="circuit_court">
		@yield('circuit')
	</div>

	<div class="probate_court">
		@yield('probate')
	</div>

	<div class="caseno">
		@yield('caseno')
	</div>

	<div class="nor_top">
		@yield('nor_top')
	</div>

	<div class="respondent">
		@yield('respondent')
	</div>

	<div class="job_number">
		@yield('job_number')
	</div>

	<div class="custodian">
		@yield('custodian')
	</div>

	<div class="top_addr">
		@yield('top_addr')
	</div>

	<div class="day">
		@yield('day')
	</div>

	<div class="day_date">
		@yield('day_date')
	</div>

	<div class="day_time">
		@yield('day_time')
	</div>

	<div class="verbiage">
		@yield('verbiage')
	</div>

	<div class="requester_name">
		@yield('requester_name')
	</div>

	<div class="requester_phone">
		@yield('requester_phone')
	</div>

	<div class="requester_street1">
		@yield('requester_street1')
	</div>

	<div class="requester_city">
		@yield('requester_city')
	</div>

	<div class="requester_state">
		@yield('requester_state')
	</div>

	<div class="requester_zip">
		@yield('requester_zip')
	</div>
</div>


</html>