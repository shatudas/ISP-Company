@extends('frontEnd.index')
@section('content')

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

<section class="home-internet px-5" >
 <div class="container-fluid" style="padding-top:30px;">
  
  <div class="col-lg-12 ">
   <h1 class="card-hader">Family Internet</h1>
   <p class="card-text">Choose a package that suits your budget.</p>
  </div>

  <div class="container-fluid mt-3 mb-3">
   <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Silver</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">20 Mbps</span></p><br>
       <p ><span class="price">TK 700</span><span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" target="_blabk" class="" >Buy Silver</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody">
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 20 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 10 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv4 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
        </span>
       </li>
       </ul>
      </div>


     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Gold</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">24 Mbps</span></p><br>
       <p ><span class="price">TK 800</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Gold</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 24 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 12 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv4 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
        </span>
       </li>
       </ul>
      </div>

     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Platinum</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">40 Mbps</span></p><br>
       <p ><span class="price">TK 1000</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Platinum</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 40 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 20 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv4 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
        </span>
       </li>
       </ul>
      </div>

     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Diamond</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">50 Mbps</span></p><br>
       <p ><span class="price">TK 1200</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="">Buy Diamond</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 50 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 25 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv4 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
        </span>
       </li>
       </ul>
      </div>

     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Sapphire</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">60 Mbps</span></p><br>
       <p ><span class="price">TK 1500</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Sapphire</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 60 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 30 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv4 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
        </span>
       </li>
       </ul>
      </div>

     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Star</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">70 Mbps</span></p><br>
       <p ><span class="price">TK 2000</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Star</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 70 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 40 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv4 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
        </span>
       </li>
       </ul>
      </div>

     <div> 
     </div>
     </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
     <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i>Sky</h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">100 Mbps</span></p><br>
       <p ><span class="price">TK 5000</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Sky</a>
       </div>
      </div>

      <div class="pl-3 pb-3 packageBody" >
       <p>What's included</p>
       
       <ul class="pl-3">
        <li class=""> 2 AM-8 PM - 100 Mbps.</li>
        <li class="">
         <span class="">8 PM-2 AM - 60 Mbps.</span>
        </li>
        <li class="">
         <span class="">Unlimited BDIX Bandwidth.</span>
        </li>
        <li class="">
         <span class="">4K Youtube and Facebook Stream.</span>
        </li>
        <li class="">
         <span class="">IPv6 Public IP Only</span>
        </li>
        <li class=""> 
         <span class="">24/7 Phone and Online Support
        </span>
       </li>
       <li class=""> 
         <span class="">Optical Fiber GPON Technology
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
  
  
  
  <div class="col-lg-12 mt-3 ">
   <h3 class="card-hader">One Country One Rate</h3>
  </div>
  
  
  <div class="container-fluid mt-3 mb-3">
   <div class="row">
       
       
     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
      <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i></h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">5 Mbps</span></p><br>
       <p ><span class="price">TK 500</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Now</a>
       </div>
      </div>

     <div> 
     </div>
     </div>
    </div>
    
    
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
      <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i></h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">10 Mbps</span></p><br>
       <p ><span class="price">TK 800</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Now</a>
       </div>
      </div>

     <div> 
     </div>
     </div>
    </div>
    
    
    
    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mt-2 mb-2">
      <div class="card mt-2 ">
      
      <div class="pakage-head p-4">
       <h4 class=""><i class="fa fa-globe"></i></h4>
       <p>Choose a package and start your internet journey</p><br>
       <p class=""><span class="package">20 Mbps</span></p><br>
       <p ><span class="price">TK 1200</span>  <span style="font-size:20px; font-weight:600;">/mo</span></p>
       <div class="packageBtn">
        <a href="{{asset('contuct')}}" class="" >Buy Now</a>
       </div>
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