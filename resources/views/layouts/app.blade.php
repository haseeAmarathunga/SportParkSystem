<!-- main layout of the website -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sport Park</title>

    <link rel="stylesheet" href="/css/app.css">

    <link href="/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<!-- //for Coaches css -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- default css files -->
	<link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/font-awesome.min.css" />
	<script src="/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
	<!-- default css files -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//web font-->

    <script src=js/app.js></script>
</head>

<body>

	<!-- show the showcase plugins in different site -->
    @include('inc.navbar')
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    @if(Request::is('home'))
        @include('inc.showcase')
    @endif
	@if(Request::is('adminmenu'))
        @include('inc.adminshowcase')
    @endif

	@if(Request::is('staffs'))
        @include('inc.staffshowcase')
    @endif
	<!-- --- -->

	   <!-- sidebar boostrap properties -->
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')

                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
				@if(Request::is('about'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('signup'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('customers'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('viewcustomer'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('viewadminstaff'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('groupallocate'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('staffs'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('staffupdate'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('updatecustomer'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('updatecustomer'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('messageinbox'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('notices'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('messages'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('staffpasschange'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('home'))
        			@include('inc.customerloginbar')
    			@endif

				@if(Request::is('contact'))
        			@include('inc.customerloginbar')
    			@endif

				@if(Request::is('/'))
        			@include('inc.customerloginbar')
    			@endif

				@if(Request::is('loginwin'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('staffreg'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('staffnextreg'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('adminmenu'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('login'))
        			@include('inc.sidebar')
    			@endif

				@if(Request::is('AdminLogin'))
					@include('inc.adminloginbar')
				@endif

				@if(Request::is('StaffLogin'))
					@include('inc.staffloginbar')
				@endif

            </div>
        </div>
	<!-- end of the side bar --> 


<!-- footer -->
<section class="footer">
	<div class="container">
		<div class="agileinfo-grids">
			<div class="agile-grid-left agile-grid-right">
				<h4>Keep Updated On Social Media</h4>
				<div class="social">
					<ul>
						<!-- social media icon with links -->
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="agile-nav">
			<!-- menu links bottom -->
			<ul>
            <li class="{{Request::is('home') ? 'active' : ''}}"><a href='home'>Home</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href='contact'>Contact</a></li>
            @if(Request::is('customers'))
			<li class="{{Request::is('plans') ? 'active' : ''}}"><a href='plans'>Pricing Plans</a></li>
            @endif
			<li class="{{Request::is('about') ? 'active' : ''}}"><a href='about'>About</a></li>
			</ul>
		</div>
	</div>
</section>
<!-- //footer -->



</body>
</html>
