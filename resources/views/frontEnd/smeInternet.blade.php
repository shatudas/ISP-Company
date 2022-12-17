@extends('frontEnd.index')
@section('content')

<style type="text/css">
	.smeInternet
	{
  height:200px;
	}

	.smeInternet .container-fluid
	{
		background-image:url('{{asset('public/image')}}/img/smeinternet.jpg');
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
			<div class="col-lg-12 pt-5">
				<span class="smetext"><center>SME INTERNET</center></span>
				
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.smeheading .smeTop span
	{
  font-size:18px;
  color:#006EA8;
  font-weight:600;
  background-color:#ccc;

	}

	 .smeheading .smetext 
	 {
   font-size:40px;
   color:#000;
   padding-top:0px;
   text-align:center;
	 }

	 .smetext1 p
	 {
   text-align:center;
   color:#434746;
   font-size:16px;
   font-weight:600px;
	 }
</style>


<section class="mt-3">
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 smeheading">
				<div class="smeTop">
					<span><center>Our Packages</center></span>
				</div>
				<div class="smetext mt-0">
					Small & Medium Enterprise Packages
				</div>
				<div class="smetext1">
					<p>Super Speed Optical Fiber Internet Connectivity with Real IP Right to Your Door Steps</p>
				</div>
				
			</div>
		</div>
	</div>
</section>




{{-- 
<section class="m-5">
	<div class="container-fluid bg-dark">
		akshjksdkjba
	</div>
</section>
 --}}




<style type="text/css">
 .home-internet
 {
  margin-top:20px;

 }

 .card
 {
 box-shadow: 1px 3px 13px -3px rgba(43,35,35,0.22);
-webkit-box-shadow: 1px 3px 13px -3px rgba(43,35,35,0.22);
-moz-box-shadow: 1px 3px 13px -3px rgba(43,35,35,0.22);
 }

 .home-internet .card-hader
 {
    opacity: 1;
    color: rgba(17, 24,39,);
    font-weight: 700;
    font-size: 3rem;
    line-height: 1;
    font-family:Segoe UI;
 }

 .card-text
 {
  opacity: 1;
  font-size:20px;
  font-family:Segoe UI;
  color:#6B7284;
  font-weight:700px;
  padding-bottom:10px;

 }

 .card .pakage-head
 {
  background-color:#FEF2F2;
  border-bottom:1px solid #DEDEDE;
 }
 .card .pakage-head i
 {
  padding-right:10px;
  font-size:25px;
  color:#D21E2B;
 }


 .card .pakage-head h4
 {
 font-family:Segoe UI;
 font-size:18px;
 font-style:bold;
 border-radius:4px;
 }


 .card .pakage-head p
 {
  font-size:15px;
  line-height:22px;
  color:#6B7280;
 }

 .card .pakage-head .package
 {
  font-size:27px;
  background-color:#5DADE2;
  font-weight:700;
  font-family:Segoe UI;
  color:#fff;
  padding:4px 10px;
  border-radius:15px 15px 15px 0px;
  box-shadow: -8px 14px 9px -7px rgba(161,153,153,0.33);
 -webkit-box-shadow: -8px 14px 9px -7px rgba(161,153,153,0.33);
 -moz-box-shadow: -8px 14px 9px -7px rgba(161,153,153,0.33);

 } 
  .card .pakage-head .price
  {
   font-size:25px; 
   font-family:Segoe UI;
   font-weight:800;
   color:#000;
   letter-spacing:2px;
  }


  .card .pakage-head .packageBtn
  {
   background-color:#111827;
   width:100%;
   text-align:center;
  border-radius:8px;
  padding-top:7px;
  padding-bottom:7px;
font-family:Segoe UI;
  font-size:14px;
  font-weight:600;
  }


.card .pakage-head .packageBtn a
{
 text-decoration:none;
 color:#fff;
 margin:15px;
 font-family:Segoe UI;
}

.packageBody p
{
 padding-top:10px;
 letter-spacing:1.5px;
 font-size:12px;
 color:#000;
 font-weight:600;
 font-family:Segoe UI;
 text-transform:uppercase;

}

.packageBody ul li
{
 list-style-type: square;
 padding-bottom:9px;
 color:#8A8E92;
 font-size:15px;
}
</style>

<section class="home-internet px-5 mb-5" >
 <div class="container-fluid" style="padding-top:30px;">

  <div class="container-fluid mt-3">
   <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
     <div class="card mt-2 mb-4  border-0">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class='fas fa-wifi'></i>Gold</h4><br>
       <p class=""><span class="package">20 Mbps</span></p><br>
       <p ><span class="price">TK 2500</span><span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{url('contuct')}}" class="" >Bay Gold</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class="">Domain Registration FREE</li>
        <li class="">
         <span class="">2 GB Hosting</span>
        </li>
        <li class="">
         <span class="">10 Email Account</span>
        </li>
        <li class="">
         <span class="">FTTH Solution</span>
        </li>
        <li class="">
         <span class="">24/7 Customer Support</span>
        </li>
        <li class=""> 
         <span class="">Dedicated Network</span>
        </li>
        <li class=""> 
         <span class="">1 IP Phone</span>
       </li>
       <li class=""> 
         <span class="">IPV4 & IPV6</span>
       </li>
       <li class="">
         <span class="">OTC 5000</span>
       </li>

       </ul>
      </div>


     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
     <div class="card mt-2 mb-4  border-0">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class='fas fa-wifi'></i>Platinum</h4><br>
       <p class=""><span class="package">50 Mbps</span></p><br>
       <p ><span class="price">TK 5000</span><span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{url('contuct')}}" class="" >bay Platinum</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
    <ul class="pl-3">
        <li class="">Domain Registration FREE</li>
        <li class="">
         <span class="">2 GB Hosting </span>
        </li>
        <li class="">
         <span class="">10 Email Account</span>
        </li>
        <li class="">
         <span class="">FTTH Solution</span>
        </li>
        <li class="">
         <span class="">24/7 Customer Support</span>
        </li>
        <li class=""> 
         <span class="">Dedicated Network</span>
       </li>
       <li class=""> 
         <span class="">1 IP Phone</span>
       </li>
       <li class=""> 
         <span class="">IPV4 & IPV6</span>
       </li>
       <li class="">
         <span class="">OTC 5000</span>
       </li>

       </ul>
      </div>


     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
     <div class="card mt-2 mb-4  border-0">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class='fas fa-wifi'></i>Diamond</h4><br>
       <p class=""><span class="package">70 Mbps</span></p><br>
       <p ><span class="price">TK 8000</span><span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{url('contuct')}}" class="" >bay Diamond</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
   <ul class="pl-3">
        <li class="">Domain Registration FREE</li>
        <li class="">
         <span class="">2 GB Hosting </span>
        </li>
        <li class="">
         <span class="">10 Email Account</span>
        </li>
        <li class="">
         <span class="">FTTH Solution</span>
        </li>
        <li class="">
         <span class="">24/7 Customer Support</span>
        </li>
        <li class=""> 
         <span class="">Dedicated Network</span>
       </li>
       <li class=""> 
         <span class="">1 IP Phone</span>
       </li>
       <li class=""> 
         <span class="">IPV4 & IPV6</span>
       </li>
       <li class="">
         <span class="">OTC 5000</span>
       </li>

       </ul>
      </div>


     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
     <div class="card mt-2 mb-4  border-0">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class='fas fa-wifi'></i>Sapphire</h4><br>
       <p class=""><span class="package">100 Mbps</span></p><br>
       <p ><span class="price">TK 10000</span><span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{url('contuct')}}" class="" >bay Sapphire</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class="">Domain Registration FREE</li>
        <li class="">
         <span class="">2 GB Hosting </span>
        </li>
        <li class="">
         <span class="">10 Email Account</span>
        </li>
        <li class="">
         <span class="">FTTH Solution</span>
        </li>
        <li class="">
         <span class="">24/7 Customer Support</span>
        </li>
        <li class=""> 
         <span class="">Dedicated Network</span>
       </li>
       <li class=""> 
         <span class="">1 IP Phone</span>
       </li>
       <li class=""> 
         <span class="">IPV4 & IPV6</span>
       </li>
       <li class="">
         <span class="">OTC 5000</span>
       </li>

       </ul>
      </div>


     <div> 
     </div>
     </div>
    </div>

  




   </div>
  </div>
 </div>
</section>



@endsection