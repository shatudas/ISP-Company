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
		{{-- 		<span class="smetext"><center>CORPORATE INTERNET</center></span>
					<div class="section-heading center-holder"> --}}
			<span style="color:#fff;">Explore Our Corporate Internet Features</span>
			<h3 style="color:#fff;">Let your business to grow with us</h3>
   <span style="color:#fff;">We offer a full range of fast, superfast and ultrafast broadband packages</span>
		</div>
				
			</div>
		</div>
	</div>
</section>

<div class="section-block mpt-30 mpb-30" style="background-color:#FAFCFB;">

	<div class="container">


        <div class="row mt-50">

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-line-graph-1"></i>
                        </div>
                        <div class="feature-flex-square-content ">
                            <h4>Cloud IP-PBX</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Enjoy free PBX system by connecting to our IP-PBX platform</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Zero CapEx</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Scalable depending on your staffing needs</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-clock2"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Free Talk Time</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">	Reduce Call Costs </span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-worldwide2"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Domain Name Registration</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Establish your business identity on the world wide web </span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Branding </span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Improve Search Engine Ranking </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-startup"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Web Hosting</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Hosting opportunity for your website</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Domain-Associated Email Address </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-monitor"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Safe DNS</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">	Enables you to control internet access in your organization</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Clean Internet </span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Increase productivity</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-hourglass"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Barracuda</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Shields against email-borne viruses, malware and spam</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Protects your network from viruses and malware.</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Save Internet bandwidth</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-bar-graph-12"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Redundant Link</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">A backup link to keep your Internet operational </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square pt-4">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-idea2"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Video Conferencing</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Online meeting with participants from remote places</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Save travel costs</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Demonstrate your product remotely</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix pt-4">
                        <div class="feature-flex-square-icon">
                            <i class="icon-bank"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Complementary Home Internet</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">One Home Internet connection for IT Manager for support from home</span></li>
                                <li class="pl-4 mt-1"><span class="text-muted">Or</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">One Home Internet connection for working from home</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix pt-4">
                        <div class="feature-flex-square-icon">
                            <i class="icon-checked"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Web Application Firewall (WAF)</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Protect your websites and applications against fraud or data theft</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Prevents Data Leak</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix pt-4">
                        <div class="feature-flex-square-icon">
                            <i class="icon-checked"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <h4>Data Connectivity</h4>
                            <ul class="primary-list">
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Leading-edge MPLS technology for absolute privacy</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Provider independence for increased resilience</span></li>
                                <li class="pl-4"><i class="fa fa-check ml-n4"></i><span class="text-muted">Features service level guarantees for latency, jitter and packet loss</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">Enterprise-grade security and accessibility</span></li>
                                <li class="pl-4 mt-1"><i class="fa fa-check ml-n4"></i><span class="text-muted">24/7 monitoring, management and support</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



        </div>
	</div>
</div>


@endsection