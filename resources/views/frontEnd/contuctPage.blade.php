@extends('frontEnd.index')
@section('content')


<style type="text/css">
	
	.contuct
	{
		background-image:url({{asset('public/image')}}/img/contact.jpg);
		background-repeat:no-repeat;
		background-size:auto;
		
		width:100%;
	}

 .contuct .contuct-heading
 {
 	background-color:rgb(71, 71, 71,0.8);
 	height:100%;
 }

  .contuct .contuct-heading .container h1
  {
  font-size:35px;
  padding-top:30px;
  font-family:Segoe UI;
		font-weight:700;
  }

  .contuct .contuct-heading .container p
  {
  font-size:20px;
  color:#fff;
  line-height:25px;
  margin-left:20px;
  padding-bottom:50px;
  }



</style>



	
<section class="contuct p-0 m-0">
	<div class="container-fluid p-0 m-0 contuct-heading">
		<div class="container">
				<h1 class="pt-5 text-white pl-5">Get in touch</h1>
				<p class="pl-5">
		  If you would like to find out more about how we can help you, please give us a call or drop us an email. We welcome your comments and suggestions about this website and/or any other issues that you wish to raise.</p>
		</div>
	</div>
</section>

<style type="text/css">
	
 .icon-box
 {
 	padding:10px;

 }

 .text-box
 {
 	font-size:30px;
 	margin-top:5px;
 	font-family:Segoe UI;
 	color:#000;
 }
</style>


<section class="mt-5 p-3">
	<div class="container mt-5">
		<div class="row">
			<div class="container">


				<div class="row">

				<div class="col-4">
					<div class="icon-box" align="center">
						<div class="icon">
							<img src="{{asset('public/image')}}/img/contuctIcon-1.png" class="img-fluid" align="center">
						</div>
						<div class="text-box">
							<h2>We Listen</h2>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="icon-box" align="center">
						<div class="icon">
							<img src="{{asset('public/image')}}/img/contuctIcon-2.png" class="img-fluid" align="center">
						</div>
						<div class="text-box">
							<h2>We Listen</h2>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="icon-box" align="center">
						<div class="icon">
							<img src="{{asset('public/image')}}/img/contuctIcon-3.png" class="img-fluid" align="center">
						</div>
						<div class="text-box">
							<h2>We Listen</h2>
						</div>
					</div>
				</div>

			</div>

			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.contuctBody
	{
		background-color:#F8F9F9;
	}

	.contuctBody .card
	{
 margin-top:10px;
		border:0px;
		box-shadow: 0px 0px 8px -3px rgba(135,126,126,0.75);
-webkit-box-shadow: 0px 0px 8px -3px rgba(135,126,126,0.75);
-moz-box-shadow: 0px 0px 8px -3px rgba(135,126,126,0.75);
	}

	.contuctBody .card .card-heading 
	{
   font-size:25px;
   margin-top:10px;
   color:#006EA8;
   font-weight:700;

	}

.contuctBody .card .card-body a
	{
		text-decoration:none;
  color:#000;
  font-size:16px;
	}

	.contuctBody .card .card-body{
		min-height:100px;
	}
</style>


<section class="mt-5 pt-5 pb-5 mb-5 contuctBody">
	<div class="container pt-5 ">
		

		<div class="row">
			<div class="col-12 mt-2 mb-3">
				<h2><center>Support Center</center></h2>
			</div>

			<div class="col-lg-4 col-12">
				<div  class="card">
					<div class="card-heading">
						<center>Call us at</center>
					</div>
					<div class="card-body">
				<center><a href="#"><i class="fa fa-phone"></i> +88 01834959643</a></center>
				<center><a href="#"><i class="fa fa-phone"></i> +88 01834959643</a></center>
				<center><a href="#"><i class="fa fa-phone"></i> +88 01834959643</a></center>
				</div>
			</div>
		</div>

			<div class="col-lg-4 col-12">
				<div  class="card">
					<div class="card-heading">
						<center>Mail us at</center>
					</div>
						<div class="card-body">
					 <center><a href="#"><i class="fa fa-envelope-square"></i> support@gmail.com</a></center>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<div  class="card">
					<div class="card-heading">
						<center>Knock us at</center>
					</div>
					<div class="card-body">
						<center><a href="#" target="_blank"><i class='fab fa-facebook-messenger'></i> Messenger</a></center>
					</div>
					
				</div>
			</div>

		</div>



		<div class="row">

			<div class="col-12 mt-5 mb-3">
				<h2><center>Seles &  Marketing </center></h2>
			</div>
			

			<div class="col-lg-4 col-12">
				<div  class="card">
					<div class="card-heading">
						<center>Call us at</center>
					</div>
					<div class="card-body">
				<center><a href="#"><i class="fa fa-phone"></i> +88 01834959643</a></center>
				<center><a href="#"><i class="fa fa-phone"></i> +88 01834959643</a></center>
				<center><a href="#"><i class="fa fa-phone"></i> +88 01834959643</a></center>
				</div>
			</div>
		</div>

			<div class="col-lg-4 col-12">
				<div  class="card">
					<div class="card-heading">
						<center>Mail us at</center>
					</div>
						<div class="card-body">
					 <center><a href="#"><i class="fa fa-envelope-square"></i> marketing@gmail.com</a></center>
					 <center><a href="#"><i class="fa fa-envelope-square"></i> info@gmail.com</a></center>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<div  class="card">
					<div class="card-heading">
						<center>Knock us at</center>
					</div>
					<div class="card-body">
						<center><a href="#" target="_blank"><i class='fab fa-facebook-messenger'></i> Messenger</a></center>
					</div>
					
				</div>
			</div>

		</div>

	</div>



</section>




<section  class="m-0 p-0">
	<div class="container-fluid m-0 p-0">

  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8660014717!2d90.25446582657518!3d23.780863189968727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1670753855772!5m2!1sen!2sbd"  width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	</div>
</section>












@endsection