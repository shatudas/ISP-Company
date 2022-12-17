@extends('frontEnd.index')
@section('content')

@php
$count = 0;
@endphp

<!-------Slider Start------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach($sliders as $key=> $slider)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($count == 0) { active } @endif"></li>
    @endforeach
  </ol>
  <div class="carousel-inner" style="background-color:#1C2833;">
   @foreach($sliders as $slider)
    <div class="carousel-item @if($count == 0) { active } @endif" style="background-color:#DBFAF6;">
      <img class="d-block w-100" src="{{asset('public/upload/slider_image/'.$slider->image)}}" alt="First slide">
    </div>
   @php
   $count++
   @endphp
   @endforeach
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!---slider End---->


<style type="text/css">

 .services
 {
  background-color:#E7EBED;
  padding-bottom:20px;
 }

 .ISPservices h4
 {
  height:38px;
  width:43px;
  border-radius:2px;
  color:#C4CED3;
  font-size:35px;
  text-align:center;
  padding-top:5px;
 }

 .ISPservices  p
 {
  font-size:20px;
  font-weight:400;
  color:#000;
  font-family:Segoe UI;
  min-height:50px;
  max-height:60px;
 }

 .ISPservices dd
 {
  color:#283747;
  font-size:14px;
  min-height:150px;
  max-height:180px;
   }

 .servicesHomebtn1 img
  {
   background-color:#111827;
   padding:7px 7px;
   border-radius:50%;
  }

  .servicesHomebtn1 img:hover
  {
   background-color:#D21E2B;
   padding:7px 7px;
   border-radius:50%;
   transform:0.5s;
  }

.servicesHomebtn1 
 {
  font-size:16px;
  color:#000;
 }

 .servicesHomebtn1:hover
 {
  font-size:16px;
  color:#1ABC9C;
  transform:0.5s;
 }

 .servicesHomebtn1
 {
  text-decoration:none;
 }

</style>

<section id="solution">
<div class="section pt-5 mb-5 pb-5 services">
 <div class="container ISPservices pb-5 pt-5">
  <div class="row">



   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3  ">
    <div class="p-2 bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-home"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">Home Broadband Internet</p>
     <dd class="mt-2 text-base text-gray-500">
      IPS Company Solution is providing one of the fastest broadband internet and network solutions throughout Dhaka & bangladesh, reliable for both gamers and regular users.
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('homeInternet')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-user" style="font-size:22px;"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">Corporate Internet</p>
     <dd class="mt-2 text-base text-gray-500">
       Offering dedicated internet connection with various network solutions ensuring network stability for our Corporate and SME consumers. Along with a support manager for 24/7 response.
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('corporateInternet')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>


   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-shopping-bag"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">SME Internet</p>
     <dd class="mt-2 text-base text-gray-500">
       IPS Company provides VPN, Antivirus, CCTV IP surveillance solutions ensuring top of the line security to your end.
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('smeInternet')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class='fas fa-network-wired'></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">Network Solutions</p>
     <dd class="mt-2 text-base text-gray-500">
        IPS Company  Internet provides VPN, Antivirus, CCTV IP surveillance solutions ensuring top of the line security to your end.
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('solution')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-phone" aria-hidden="true"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">Ip Telephony Solution</p>
     <dd class="mt-2 text-base text-gray-500">
      Our IP telephony provides a way for you to extend highly secure, reliable, and consistent communications services to all your customers or employees.
     </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('ipphone')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-server" aria-hidden="true"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">Dedicated Server Hosting</p>
     <dd class="mt-2 text-base text-gray-500">
        Dedicated servers are really dependable and are built to give you the highest level of uptime and performance. Choose pre-configured specification of your choice and get your server up and running in hour. 
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('dedicatedhost')}}" class="servicesHomebtn1 mb-2 pb-2" >
      <img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>


   <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-cog" aria-hidden="true"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">CCTV System Solutions</p>
     <dd class="mt-2 text-base text-gray-500">
      Every organization that uses a surveillance system is forced to address a burning question, “What do I do with the buildup of surveillance data? Do I create additional storage capacities to house it, or do I get rid of it?
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('CCTVSolution')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>

  <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 ">
    <div class="p-2  bg-white">
    <div class="ml-3">
    <h4><i class="fa fa-globe" aria-hidden="true"></i></h4>
    </div>
    <div class="ml-3 mr-3">
      <p class="mt-3 text-lg leading-6 font-medium text-gray-900">Data Connectivity</p>
     <dd class="mt-2 text-base text-gray-500">
       In the broad range of domestic data connectivity IPS Company has categorized the services as dedicated private circuit and shared internet cloud differentiated at logical level.
       </dd>
     </div>
     <br>
     <div class="bt-3 pb-3 ml-3" style="width:100%;">
     <a href="{{url('dataconnectivity')}}" class="servicesHomebtn1 mb-2 pb-2" ><img src="{{asset('public/image')}}/img/arrow_white.png" alt="">&nbsp; Explore</a><br>
     </div>
    </div>
   </div>

  </div>
 </div>
</div>
</section>







<style type="text/css">
 
 @media(min-width: 1199px)
   {
    .servicesHome
    {
    background-image: url({{asset('public/image')}}/img/video_bg.jpg); 
    background-position:center;
    background-repeat: no-repeat;
    background-size:all;
    }
  }

  @media(min-width: 991px)
   {
    .servicesHome
    {
     background-image: url({{asset('public/image')}}/img/video_bg.jpg); 
    background-position:center;
    background-repeat: no-repeat;
    background-size:all;
    }
  }

  @media(max-width: 767px)
   {
    .servicesHome
    {
     background-color:none;
    }
  }
  @media(max-width: 575px)
   {
    .servicesHome
    {
     background-color:none;
    }
  }


  .item-content h3
  {

   font-weight:400px;
   font-family:Segoe UI;
  }
  .item-content p
  {
   font-size:16px;
   font-weight:600;
   color:#002337;
   line-height:25px;
   font-family:Segoe UI;
  }


  .servicesHomebtn
  {
   margin-top:20px;
   text-decoration:none;
   padding:10px 15px;
   background-color:#5DADE2;
   color:#fff;
   border-radius:8px;

  }

  .servicesHomebtn:hover
  {
   transform:0.5s;
   background-color:#DE3163;
   color:#fff;
  }

</style>

<br><br>



<section class="servicesHome mt-3 mb-5 pb-5">
 <div class="container">
 <div class="row align-items-center">
  <div class="col-12 col-lg-6 order-1 order-lg-1"></div>
  
  <div class="col-12 col-lg-6 order-2 order-lg-2">
   <div class="d-none d-lg-block divider-20"></div>
    <div class="item-content">
     <h4 class=" mb-2 mt-3"  style="color:#DC3545;">Welcome To  IPS Company</h4>
     <h3>We are always Faster & Reliable</h3>
     <p>
    IPS Company Internet Service Provider in Bangladesh and is an initiative of Business, Information, Communication and Technology Company of Bangladesh having decade of recognized technical & business track records for its modern approach towards delivering business value and its dedication to sustainability</p>
    </div>
    <div class="d-block d-lg-block divider-20"></div><br>
    <a href="{{asset('about')}}" class="servicesHomebtn mt-5">Learn More <img src="{{asset('public/image')}}/img/arrow_white.png" alt=""></a><br>
   </div>
 </div>
 </div>
</section>




<style type="text/css">
 .corporatepakgage span
 {
  font-size:20px;
  font-weight:600px;
  font-family:Segoe UI;
  line-height:27px;

 }

 .corporatepakgage p
 { 
  padding-left:8px;
  padding-top:12px;
  font-family:Segoe UI;
  color:#445760;

 }
</style>


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
 border-radius:2px;
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
   font-size:30px; 
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



<section class="home-internet px-5 mb-5" style="padding-top:30px;">
 <div class="container-fluid mt-5">
  <div class="col-lg-12 ">
   <h1 class="card-hader">Business Internet</h1>
   <p class="card-text">Choose a package that suits your  business.</p>
  </div>

  <div class="container-fluid mt-3">
   <div class="row">

    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
     <div class="">

      <div class="mt-4 corporatepakgage">
       <span>Express Yourself with The Fastest Corporate Internet Experience</span>
       <p>Experience IPS Company Solution best Corporate solutions, crafted with robust & supreme access to secure network solutions. Let our network help you thrive with the highest efficiency you can get at your corporate performance.</p>
      </div>

      <div class="corporatepakgage"><img src="{{asset('public/image')}}/img/corporate/speed.png" class="ing-fluid">
        <span> Corporate At Its Best </span>
       <p>Experience the standard corporate internet service with IPS Company Solution enterprise-level security management to safeguard your business-critical applications and data</p>
      </div>

       <div class="corporatepakgage"><img src="{{asset('public/image')}}/img/corporate/Conn.png" class="ing-fluid">
       <span> End-to-End Fiber Optic Connectivity </span>
       <p>Thrive your business with an absolute, uninterrupted corporate internet service with proactive monitoring & notification, backed by the fastest troubleshooting possible for your needs.</p>
      </div>

       <div class="corporatepakgage"><img src="{{asset('public/image')}}/img/corporate/reliability.png" class="ing-fluid">
        <span> Ready to Serve on Demand </span>
       <p>Whenever you need extra bandwidth, or fastest support anytime, or maybe higher upload speed, we’re always ready to serve extra! Get all problems solved with our seasoned tech support team 24/7.</p>
      </div>
     
     <div> 
     </div>
     </div>
    </div>

   
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4" style="background-color:#F3F4F6;">
       <h4 class=""><i class="fa fa-globe"></i>Silver</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">100 Mbps</span></p><br>
       <p ><span class="price">TK 10000</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Silver</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       <ul class="pl-3">
        <li class=""> 24/7 10 Mbps</li>
        <li class="">
         <span class=""> BDIX, IX Bandwidth Included</span>
        </li>
        <li class="">
         <span class="">24/7 Molitoring</span>
        </li>
        <li class="">
         <span class="">Dedicated Support Team</span>
        </li>
        <li class="">
         <span class="">IPv4 & IPv6 Public IP Available</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       </ul>
      </div>


     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4" style="background-color:#F3F4F6;">
       <h4 class=""><i class="fa fa-globe"></i>Diamond</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">150 Mbps</span></p><br>
       <p ><span class="price">TK 20000</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Diamond</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 24/7 20 Mbps</li>
        <li class="">
         <span class=""> BDIX, IX Bandwidth Included</span>
        </li>
        <li class="">
         <span class="">24/7 Molitoring</span>
        </li>
        <li class="">
         <span class="">Dedicated Support Team</span>
        </li>
        <li class="">
         <span class="">IPv4 & IPv6 Public IP Available</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
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


<style type="text/css">
 .coverage_area
 {
  padding-top:40px;
  padding-bottom:40px;
 }
 .coverage_img
 {
  padding:0px;
 }
 .coverage_area .CoverageRight
 {
  background-color:#76D7C4;
 }
 .coverage_area .CoverageRight .block
 {
  display:block;
  font-size:35px;
  font-family:Segoe UI;
  font-weight:600;
 }
  .coverage_area .CoverageRight p
  {
   margin-top:20px;
   display:block;
   font-size:18px;
   line-height:23px;
   font-weight:500;
   font-family:Segoe UI;
  }
   .coverage_area .CoverageRight .btn a
   {
    background-color:#FFF;
    text-decoration:none;
    padding:12px 16px;
    color:#DE3163;
    font-size:18px;
    font-weight:500;
    border-radius:4px;
   }
   .coverage_area .CoverageRight .btn a:hover
   {
    transition:2s;
    background-color:#DE3163;
    text-decoration:none;
    padding:12px 16px;
    color:#fff;
    font-size:18px;
    font-weight:500;
    border-radius:4px;
   }
</style>


<section class="mb-5 mt-5">
 <div class="container coverage_area">
  <div class="row">

   <div class="col-lg-6 col-md-6 col-sm-12 col-12 coverage_img">
    <img src="{{asset('public/image')}}/img/coverage.jpg" alt="Coverage Area"> 
   </div>

   <div class="col-lg-6 col-md-6 col-sm-12 col-12 CoverageRight">
    <h2 class="text-white px-5 pt-5">
     <span class="block">Ready to start?</span>
     <span class="block">Locate our coverage area</span>
    </h2>
    <div>
     <p class="px-5 text-white ">IPS Company is spread almost everywhere in All Bangladesh. Check the availability of all coverage areas in Dhaka.</p>
    </div>
    <div class="mt-4 btn">
     <a href="{{url('coverageArea')}}" class="ml-4 "><span> Coverage Area</span></a>
    </div>
   </div>

  </div>
 </div>
</section>


<style type="text/css">
 .partner label
 { 
   font-size:24px;
   font-family:Segoe UI;
   color:#000;
   padding-bottom:6px;
   border-bottom:2px solid #0F9FEA;

 }
</style>

<!-- Clients Carousel START -->



<section>
 <div class="section-technology py-5">
 
  <div class="container mb-3">
   <div class="row">
   <div class="col-lg-12 partner">
    <label>Our Respected Partners</label>
   </div>
   </div>
  </div>

 <div class="container">
  <div class="owl-carousel owl-theme clients" id="clients">
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/alvarion.png" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/8.jpeg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/BTCL_Logo.jpg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/cambium-networks.png" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/cisco.png" alt="BTCL">
   </div>
   
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/earth1 (1).png" alt="BTCL">
   </div>
   
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/huawei-logo.png" alt="BTCL">
   </div>
   
    <div class="item">
    <img src="{{asset('public/image')}}/partner1/1.jpeg" alt="BTCL">
   </div>
   
    <div class="item">
    <img src="{{asset('public/image')}}/partner1/2.jpeg" alt="BTCL">
   </div>
   
    <div class="item">
    <img src="{{asset('public/image')}}/partner1/3.png" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/4.jpeg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/5.jpeg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/6.jpeg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/7.jpeg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/9.jpeg" alt="BTCL">
   </div>
   
   <div class="item">
    <img src="{{asset('public/image')}}/partner1/10.jpeg" alt="BTCL">
   </div>
   
     <div class="item">
    <img src="{{asset('public/image')}}/partner1/11.jpeg" alt="BTCL">
   </div>
   
         
  </div>
 </div>
</div>

</section>





@endsection