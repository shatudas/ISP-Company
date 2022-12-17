@extends('frontEnd.index')
@section('content')


<style type="text/css">

 .Solutions
 {
  padding-top:40px;
 }
 

 .Solutions .card
 {
  box-shadow: -1px -1px 6px 1px rgba(94,93,93,0.14);
-webkit-box-shadow: -1px -1px 6px 1px rgba(94,93,93,0.14);
-moz-box-shadow: -1px -1px 6px 1px rgba(94,93,93,0.14);
 }


 .solution-content h3 a 
 {
  text-decoration:none;
  font-size:18px;
  padding-top:4px;
  font-weight:500;
  font-family:Segoe UI;
  margin-bottom: 0px;

 }

 .solution-content 
 {
  padding-left:10px;
  margin-top:0px;
  padding-top:0px;
  padding-bottom:0px;

 }
 .solution-content p
 {
   font-size:15px;
   margin-top:0px;
   color:#362F31;
   line-height:22px;
   padding-top:0px;
 }

 .solution-content p
 {
  min-height:90px;
  max-height:100px;
 }

 .solution-content .btn
 {
  padding-top:4px;
  margin-top:0px;
  padding-left:0px;
  margin-top:0px;
  margin-bottom:15px;
  background-color:#5DADE2;
 }

 .solution-content .btn a
 {
  text-decoration:none;
  color:#fff;
  padding-left:10px;
 }

 .solution-content .btn a:hover
 {
  text-decoration:none;
  padding-top:0px;
  margin-top:0px;
 }

 .solution-content .btn:hover
 {
  padding-top:4px;
  margin-top:0px;
  padding-left:0px;
  margin-top:0px;
  margin-bottom:10px;
  background-color:#DE3163;
  transform:0.7s;
 }

  .Service span
  {
   font-size:35px;
   font-weight:600;

  }

  .services-icon
  {
    height:200px;
  }

  .services-icon img
  {
    height:100%;
    text-align:center;
  }

</style>

<section class="Solutions m-5">

 <div class="container-fluid">
  <div class="row">

   <div class="container Service">
    <div class="col-12">
     <span style="font-family:Segoe UI;"><center >Switch On Your Perfect Solutions</center></span>
    </div><br><br>
   </div>

   <!--<div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">-->
   <!-- <div class="card mx-2 border-0 ">-->
   <!--  <div class="solution-item">-->
   <!--   <div class="services-icon" align="center">-->
   <!--    <img alt="" src="{{asset('public/image')}}/Solution/s1.jpg" class="img-fluid px-2 pt-3">-->
   <!--   </div>-->
   <!--  </div>-->
   <!--  <div class="solution-content">-->
   <!--   <h3 class="title fw-400 mb-3 mt-0">-->
   <!--   <a href="" style="color: #000">Fire Suppression</a></h3>-->
   <!--   <p>Our Fire Suppression solutions are diverse in order to meet the protection needs of any kind of environment. These include large marine vessels,</p>-->
   <!--   <div class="btn">-->
   <!--    <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>-->
   <!--   </div>-->
   <!--  </div>-->
   <!-- </div>-->
   <!--</div>-->

   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s2.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">Wi-Fi and Radio Link</a></h3>
      <p>Wireless technology reduces the complexity and cost of installation while delivering consistent connectivity for streaming video,</p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s3.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">Comfast Wi-Fi</a></h3>
      <p>Comfast focus on cost-effective wireless integrated network solution for apartment, hotels, and restaurants.</p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>

   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s4.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">Network Structured Cabling</a></h3>
      <p>Structured cabling design and installation is governed by a set of standards that specify how wiring data centers,</p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>


   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s5.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">Video Conferencing Solution</a></h3>
      <p>Real-time video for the moments that matter most, in telehealth, video banking, workforce collaboration, customer engagement, and more.</p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>


   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s6.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">IP Surveillance System</a></h3>
      <p>Whether you need one IP camera or a completely integrated IP camera system, we provide excellent pricing and support. </p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>


   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s7.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">Server Solution</a></h3>
      <p>Solutions for data centers and enterprise offices continue to evolve with changing business requirements.</p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>


   <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-5">
    <div class="card mx-2 border-0">
     <div class="solution-item ">
      <div class="services-icon" align="center">
       <img alt="" src="{{asset('public/image')}}/solution/s8.jpg" class="img-fluid px-2 pt-3">
      </div>
     </div>
     <div class="solution-content">
      <h3 class="title fw-400 mb-3 mt-0">
      <a href="" style="color: #000">Data Security</a></h3>
      <p>Comprehensive and powerful security solutions, certified experts and always-available support for full IT security and your business continuity.</p>
      <div class="btn">
       <a href="" class="btn-link">Read more <img src="{{asset('public/image')}}/img/arrow_white.png" class="img-fluid" style="color:#000;" alt=""></a>
      </div>
     </div>
    </div>
   </div>
 
  </div>
 </div>
</section>

@endsection