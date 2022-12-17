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
   <h3 style="color:#fff;">Data Connectivity</h3>

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
    <label>Data Connectivity</label>
   </div>
  </div>

 <div class="row" >
   <div class="col-lg-12 dedicatedTop mt-2">
    <label>Domestic Data Connectivity</label>
   </div>
  </div>


  <div class="row">
   <div class="col-lg-12 dedicatedtext">
    <p>In the broad range of domestic data connectivity .......... has categorized the services as dedicated private circuit and shared internet cloud differentiated at logical level. All the services are associated with well-defined service level agreements to ensure the delivery of committed service.</p>
    <span>Domestic data service list includes:</span><br>
    <span>Domestic Leased Circuit</span><br>
    <span>Multi-Protocol Label Switching (MPLS) service</span><br>
    <span>Domestic Leased Circuit</span>
   </div>
  </div>


  <div class="row">

   <div class="col-lg-6 col-md-6 cl-sm-12">
    <img src="{{asset('public/image')}}/img/dataconnectivity.jpg" class="img-fluid">
   </div>


   <div class="col-lg-6 col-md-6 col-sm-12 dedicated">
    <label>Features of domestic leased circuit can be listed as:-</label>
    <ul>
     <li>Secure and reliable leased circuit for integrated data and voice traffic.</li>
     <li>Redundancy is ensured by robust Infrastructure of SDH ring.</li>
      <li> Guaranteed security and speed are ensured by dedicated connectivity making it convenient for real time data transmission.</li>
     <li>Customized Service Level Agreement available for each service</li>
     <li>24x7 support services ensure seamless connectivity and smooth operation of business.</li>
    </ul>
   </div>


  </div>

  <div class="row">
   <div class="col-lg-12 dedicatedfoot" >
    <p>Domestic Leased Circuit Domestic leased circuit is a secure data connectivity to transmit sensitive information across many offices of a business operation located in different places within the country, as well as for businesses running time critical applications and transactions. This protected service ensures reliable connectivity for integrated data and voice traffic as well as high quality media streaming. The connectivity can be configured as point to point or point to multipoint manner. InComIT has a nationwide robust SDH (Synchronous Digital hierarchy) infrastructure to support its customers with high service availability and dedicated bandwidth. This domestic leased circuit is backed by a private access solution to ensure end to end secure data transmission.</p>


   </div>
  </div>


 </div>
</section>



@endsection