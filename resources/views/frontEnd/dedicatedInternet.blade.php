@extends('frontEnd.index')
@section('content')


<style type="text/css">
	.smeInternet
	{
  height:200px;
	}

	.smeInternet .container-fluid
	{
		background-image:url('{{asset('public/image')}}/img/corporate.jpg');
	 background-position: center;
  background-repeat: no-repeat;
  height:100%;
  background-size: cover;
 }

 .smetext
 {
   
   margin-top:40px;
   color:#fff;
   font-size:30px;
   font-weight:600;

 }
</style>

<section class="smeInternet">
	<div class="container-fluid pt-3">
		<div class="row">
			<div class="col-lg-12 pt-5 text-white" align="center">
			<h3 style="color:#fff;">DEDICATED INTERNET</h3>

		</div>
				
			</div>
		</div>
	</div>
</section>



<style type="text/css">
	.heading label
	{
  color:#0A7CFF;
  font-size:25px;
  font-weight:700px;
  font-family:Segoe UI;
	}

	.dedicatedTop label
	{
 color:#000;
  font-size:20px;
  font-weight:600px;
  font-family:Segoe UI;
	}


	.dedicatedtext p
	{
		padding:10px;
		padding-left:10px;
  font-size:16px;
  line-height:25px;
  color:#5F6A6A;
	}

	.dedicated label
	{
		padding-top:20px;
		padding-left:10px;
		font-size:20px;
		line-height:30px;
		color:#000;
		font-weight:600;
	}


.dedicated  ul 
		{
   margin-top:20px;
		}


		.dedicated  ul li
		{
			 list-style-type: square;
			 color:#41454D;
			 font-size:16px;
			  font-family:Segoe UI;
			  line-height:25px;
		}

			.dedicatedfoot{
				padding-top:30px;
				padding-bottom:40px;
			}

		.dedicatedfoot p 
		{
   font-size:16px;
   color:#41454D;

		}
</style>


<section class="didicated">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-12 mt-5 heading">
				<label>High-speed Fiber Internet Connectivity</label>
			</div>
		</div>


 <div class="row" >
			<div class="col-lg-12 dedicatedTop mt-2">
				<label>BROADBAND - In the speed of Light</label>
			</div>
		</div>



		<div class="row">
			<div class="col-lg-12 dedicatedtext">
				<p>We deliver great, reliable & super-fast fiber internet connectivity to your Office, Industry & home with a range of speeds and packages available for you to make your broadband perfect. You'll enjoy unlimited peace of mind with high-speed internet connectivity from ................... Broadband.</p>
				
				<p>	We deliver great, reliable & super-fast fiber internet connectivity to your Office, Industry & home with a range of speeds and packages available for you to make your broadband perfect. You'll enjoy unlimited peace of mind with high-speed internet connectivity from .................... Broadband..</p>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 dedicated">
				<label>Features and Benefits:-</label>
				<ul>
					<li>Fiber Connectivity</li>
					<li>Stable Connection</li>
					<li>IPV4 & IPV6</li>
					<li>FTP & BDIX</li>
					<li>FTP & BDIX</li>
					<li>24/7 Support Center</li>
				</ul>
			</div>


			<div class="col-lg-6 col-md-6 cl-sm-12">
				<img src="{{asset('public/image')}}/img/dedicated.png" class="img-fluid">
			</div>


		</div>



		<div class="row">
			<div class="col-lg-12 dedicatedfoot" >
				<p>With reliable and robust connection, ............. Broadband is proudly serving a lot of Local and Multinational Companies, top Financial and Government institutions.</p>
			</div>
		</div>





	</div>
</section>



@endsection