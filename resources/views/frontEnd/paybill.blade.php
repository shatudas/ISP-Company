@extends('frontEnd.index')
@section('content')



<style type="text/css">
	.billpay
	{

	}

	.billpay .payheading label
{
   font-size:25px;
   padding-top:20px;
   color:#154360;
}	
</style>

<section class="billpay">

	<!--<div class="container mt-5 text-center">-->
	<!--	<div class="row">-->
	<!--		<div class="col-12 payheading" >-->
	<!--			<label>Payment via  &nbsp; &nbsp; </label> <img src="https://www.amberit.com.bd/img/billing/bKash.png" class="img-fluid" style="box-shadow:none;">-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->


	<style type="text/css">
		.billpay .card
		{
			border:0px;
   box-shadow: 0px 0px 5px 0px rgba(118,118,120,0.32);
-webkit-box-shadow: 0px 0px 5px 0px rgba(118,118,120,0.32);
-moz-box-shadow: 0px 0px 5px 0px rgba(118,118,120,0.32);
		}

    .billpay .card-header
    {
      text-align:center;
      font-size:16px;
      color:#000;
      font-weight:500;
      font-family:Segoe UI;
    }
    .card-body .card-text
    {
      text-align:center;
      font-size:15px;
      color:#2E4053;
    }
	</style>


	<div class="container mt-5 mb-5 billpay">
		<div class="row">

			
   <div class="col-lg-3  col-md-4 col-sm-6 col-12"> 
			 <div class="card mb-3 w-100">
     <div class="card-header bg-white">Step - 1</div>
      <div class="card-body">
       <span class="card-text d-block"> bKash </span>
       <span class="card-text d-block"> 1.Send Money </span>
       <span class="card-text d-block"> 2.Buy Airtime </span>
       <span class="card-text d-block bg-primary text-white"> 3.Payment </span>
       <span class="card-text d-block"> 4.Cash Out </span>
       <span class="card-text d-block"> 5.My bKash </span>
       <span class="card-text d-block"> 6.Helpline </span>
      </div>
     </div>

		  </div>
		 <div class="col-lg-3  col-md-4 col-sm-6 col-12"> 
			 <div class="card mb-3 w-100">
     <div class="card-header bg-white">Step - 2</div>
      <div class="card-body"><br><br>
		     <span class="card-text d-block"> Enter Merchant bKash Account </span>
       <span class="card-text d-block bg-primary text-white">018349595643</span><br><br><br>
      </div>
    </div>
		 </div>

		 <div class="col-lg-3  col-md-4 col-sm-6 col-12"> 
			<div class="card mb-3 w-100">
    <div class="card-header bg-white">Step - 3</div>
     <div class="card-body"><br><br>
      <span class="card-text d-block"> Enter Amount</span>
      <span class="card-text d-block bg-primary text-white">XXXX</span><br><br><br>
     </div>
    </div>
		 </div>

		 <div class="col-lg-3  col-md-4 col-sm-6 col-12"> 
		 <div class="card mb-3 w-100">
    <div class="card-header bg-white">Step - 4</div>
    <div class="card-body"><br>
     <span class="card-text d-block"> Enter Reference</span>
     <span class="card-text d-block">(User ID)</span>
     <span class="card-text d-block bg-primary text-white">XXXX</span><br><br><br>
    </div>
   </div>
	  </div>

	  <div class="col-lg-3  col-md-4 col-sm-6 col-12"> 
   <div class="card mb-3 w-100">
    <div class="card-header bg-white">Step - 5</div>
    <div class="card-body">
     <span class="card-text d-block"> Payment to</span>
     <span class="card-text d-block">018349595643</span>
     <span class="card-text d-block">Amount tk XXXX</span>
     <span class="card-text d-block">Reference: XXXX</span>
     <span class="card-text d-block">EnterMenu PIN To Confirm</span>
     <span class="card-text d-block bg-primary text-white"> XXXX </span><br>
    </div>
   </div>
	</div>


	<div class="col-lg-3  col-md-4 col-sm-6 col-12"> 
		<div class="card mb-3 w-100">
    <div class="card-header bg-white">Step - 6</div>
    <div class="card-body">
     <span class="card-text d-block">Payment tk XXXX</span>
     <span class="card-text d-block">to 018349595643</span>
     <span class="card-text d-block">successful. Ref XXXX</span>
     <span class="card-text d-block">Fee tk 0.00 Balance</span>
     <span class="card-text d-block">Tk 00.00 TrxID</span>
     <span class="card-text d-block bg-primary text-white">987654321 at</span>
     <span class="card-text d-block">10/10/2022 1212</span>
    </div>
   </div>
	</div>
	</div>
	</div>



  <div class="container mt-5 text-center">
  <div class="row">
   <div class="col-12 payheading" >
    <label>Payment Apps &nbsp; &nbsp; </label> <img src="https://www.amberit.com.bd/img/billing/bKash.png" class="img-fluid" style="box-shadow:none;"> 
   </div>
  </div>
 </div>


<style type="text/css"
>
 .billpay img
 {
  border-radius:10px;
  box-shadow: 0px 0px 6px 0px rgba(158,143,143,0.75);
-webkit-box-shadow: 0px 0px 6px 0px rgba(158,143,143,0.75);
-moz-box-shadow: 0px 0px 6px 0px rgba(158,143,143,0.75);
 }
</style>


 <div class="container-fluid mt-5 mb-5 billpay">
  <div class="row">
       <div class="col-lg-1"></div>
     

   
   <div class="col-lg-2  col-md-4 col-sm-6 col-12"> 
    <div class="p-1 billpay" >
     <img src="{{asset('public/image/bkash')}}/1.jpg" class="img-fluid">
    </div>
   </div>

   <div class="col-lg-2  col-md-4 col-sm-6 col-12"> 
    <div class="p-1 billpay">
     <img src="{{asset('public/image/bkash')}}/2.jpg" class="img-fluid">
    </div>
   </div>

   <div class="col-lg-2  col-md-4 col-sm-6 col-12"> 
    <div class="p-1 billpay">
     <img src="{{asset('public/image/bkash')}}/3.jpg" class="img-fluid">
    </div>
   </div>

   <div class="col-lg-2  col-md-4 col-sm-6 col-12"> 
    <div class="p-1 billpay">
     <img src="{{asset('public/image/bkash')}}/4.jpg" class="img-fluid">
    </div>
   </div>
   
   
   <div class="col-lg-2  col-md-4 col-sm-6 col-12"> 
    <div class="p-1 billpay">
     <img src="{{asset('public/image/bkash')}}/5.jpg" class="img-fluid">
    </div>
   </div>


  </div>
 </div>




</section>




@endsection