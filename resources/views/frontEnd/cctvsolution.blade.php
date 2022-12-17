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
			<h3 style="color:#fff;">CCTV Solution</h3>

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
				<label>Storage and Archiving – Surveillance Data</label>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12 dedicatedtext">
				<p>Every organization that uses a surveillance system is forced to address a burning question, “What do I do with the buildup of surveillance data? Do I create additional storage capacities to house it, or do I get rid of it?” Organizations simply cannot afford to purge their video surveillance records or suffer the consequences if data is tampered, lost or destroyed.</p>
				<p>Many diverse businesses and organizations, such as governments, banks, manufacturer and corporate offices, must have systems in place to retain their surveillance data, and a single organization can have different requirement of surveillance data: a large percentage of non-critical data that needs to be stored for short periods of time (e.g., a few months), and a small percentage of critical data that must be retained for the long-term (e.g., years or decades). Furthermore, regulations mandate that the surveillance video footage not only be saved in a standard, original format, but it must also be retrievable in the same condition as it was captured.</p>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 dedicated">
				<label>This service include:-</label>
				<ul>
					<li>Pay as you store: 24x7x365 days - OPEX based model</li>
					<li>Intelligent & automatic client-connection</li>
					<li>Load balancing and failover capabilities</li>
					<li>Data protection using smart lock</li>
					<li>Prevent from tampering or malicious alteration</li>
					<li>Archiving as per regulatory and compliance</li>
					<li>Up to PB size storage, with On-demand connectivity</li>
					<li>24/7 monitoring with maximum uptime (99.99%)</li>
					<li>Storage and archive from 3rd party surveillance system</li>
					<li>Performance underpinned by service-level guarantees</li>
				</ul>
			</div>


			<div class="col-lg-6 col-md-6 cl-sm-12">
				<img src="{{asset('public/image')}}/img/CCTVSolutionpage.jpg" class="img-fluid">
			</div>
			
		</div>



		<div class="row">
			<div class="col-lg-12 dedicatedfoot" >
				<p>Data Recognition – Our storage and archiving solution uses digital technology that are capable of advanced forms of data-recognition that prove useful for searching video footage for specific incident and images of particular individuals.</p>

				<p>You can have unimaginable room for your video surveillance data storage needs―in petabytes capacity per cluster in a single file system and volume. Bring more cameras online and expand surveillance hours including data protection to prevent accidental or malicious alteration of your video surveillance data through secure retention and protection.
    It's important to note that implementing proper procedures and processes for data management (backup, archive and compliance) will actually benefit any organization.</p>


    <ul>
					<li>Reducing IT operating costs overall</li>
					<li>Supporting litigation or avoiding the issue in the first place</li>
					<li>Speeding up investigation of issues</li>
					<li>No Significant Cost and Effort in Building Resource Certified and Skilled Expertise</li>
				</ul>


				<p><strong>Built to:</strong>Provide highly efficient, large-scale enterprise data retention; Help companies to comply with regulatory mandates; Reduce risks and provide a highly available data environment. </p>

				<p><strong></strong></p>
			</div>
		</div>





	</div>
</section>



@endsection