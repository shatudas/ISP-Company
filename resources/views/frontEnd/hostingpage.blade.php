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
			<h3 style="color:#fff;">Dedicated Server Hosting</h3>

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
				<label>Dedicated Server Service</label>
			</div>
		</div>


 <div class="row" >
			<div class="col-lg-12 dedicatedTop mt-2">
				<label>Dedicated Server</label>
			</div>
		</div>



		<div class="row">
			<div class="col-lg-12 dedicatedtext">
				<p>IPS Company Dedicated servers are really dependable and are built to give you the highest level of uptime and performance. Choose pre-configured specification of your choice and get your server up and running in hour. Payment options are monthly, quarterly, semi-annually or annually (ensuring maximum saving). You can also bundle the servers with advanced add-on’s like managed services, monitoring, security, load balancing, backup, etc. to get better redundancy and uptime.</p>
				<p>When you rent a dedicated server, you may use the complete hardware performance and server connection of your rented server system. Because of this undivided server performance, a dedicated server is your choice for all ambitious and professional projects.</p>
				
			</div>
		</div>


		<div class="row">

			<div class="col-lg-6 col-md-6 cl-sm-12">
				<img src="{{asset('public/image')}}/img/host.png" class="img-fluid">
			</div>


			<div class="col-lg-6 col-md-6 col-sm-12 dedicated">
				{{-- <label>Features and Benefits:-</label>
				<ul>
					<li>Enterprise-grade, full-duplex, high-speed DIA</li>
					<li>100% Optical Fiber based Internet service</li>
					<li>Worry free, guaranteed bandwidth 1 Mbps - 1 Gbps</li>
					<li>Portal for easy monitoring and management</li>
					<li>Scalable bandwidth 'On demand'</li>
					<li>Managed router services</li>
					<li>24/7 Support Center</li>
				</ul> --}}
			</div>



		</div>



		<div class="row">
			<div class="col-lg-12 dedicatedfoot" >
				<p>Typical applications ideal for dedicated servers include resource intensive web projects, websites with lots of database queries, and dynamic websites, as well as streaming and download portals.</p>
				<p>For large, dynamic and performance-hungry web projects, however, we recommend that you select a dedicated server.  Our dedicated servers offer you more power, the full performance of the server hardware, and a high transfer volume.</p>
			</div>
		</div>





	</div>
</section>



@endsection