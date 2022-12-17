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
			<h3 style="color:#fff;">IP Telephony Soluiton</h3>

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
				<label>IP Telephony Soluiton</label>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12 dedicatedtext">
			
				<p>Our IP telephony provides a way for you to extend highly secure, reliable, and consistent communications services to all your customers or employees, whether they are in main at branch offices, working remotely, or are mobile. We use Class of Service prioritization and management of voice quality, so your entire team can count on business-grade voice quality and reliability. This service is available to anywhere in Bangladesh with the Internet connection or INcomIT sOLUTION network.</p>

				<p>
                We are certified Cisco ATP (Advance Technology Partner) for voice and video integration. Our team can work with you to design, specify and install enterprise IP PBX system. Any traditional PBX system along with analog phone sets can be integrated with MetroTel IP based PBX system. Users can call/receive from any type of phone in and outside the country which would be cost effective than other Telecom operators and free of cost between other IPT service providers.</P>
</p>
			</div>
		</div>


		<div class="row">

			<div class="col-lg-6 col-md-6 cl-sm-12">
				<img src="{{asset('public/image')}}/img/IP-telephony.png" class="img-fluid">
			</div>


			<div class="col-lg-6 col-md-6 col-sm-12 dedicated">
				<label>Benefit of IP Phone System</label>
				<ul>
					<li>Lower Communication Cost (IP to IP Free)</li>
					<li>Deploy a single IT & Telephony Infrastructure</li>
					<li>Connect Mobile and Remote Workers</li>
					<li>Reduced Centrex Services Line Cost</li>
					<li>Mobility (moves, adds, changes)</li>
					<li>Increase in Service Options</li>
					<li>Integrated applications like Call Center, CRM, VC System</li>
					<li>Effective management of fax, voicemail, email & recording</li>
					<li>Streamline administration (both Voice and Data)</li>
					<li>Coordinate Numbering Plan</li>
				</ul>
			</div>


			


		</div>



		<div class="row">
			<div class="col-lg-12 dedicatedfoot" >
				
			</div>
		</div>





	</div>
</section>



@endsection