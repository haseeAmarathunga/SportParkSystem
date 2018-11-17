<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sport Park</title>

    <link rel="stylesheet" href="css/app.css">

    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
	<!-- //for Coaches css -->

	<!-- testimonials css -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
	<!-- //testimonials css -->

	<!-- default css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<script src="js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
	<!-- default css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//web font-->

    <script src=js/app.js></script>
	<style>
	</style>

</head>
<body>


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

	@if(Request::is('staffmenu'))
        @include('inc.staffshowcase')
    @endif

       
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

				 @if(Request::is('home'))
        			@include('inc.customerloginbar')
    			@endif

				@if(Request::is('/'))
        			@include('inc.customerloginbar')
    			@endif

				@if(Request::is('loginwin'))
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



 
<!-- footer -->
<section class="footer">
	<div class="container">
		<div class="agileinfo-grids">
			<div class="agile-grid-left agile-grid-right">
				<h4>Keep Updated On Social Media</h4>
				<div class="social">
					<ul>
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
			<ul>
            <li class="{{Request::is('home') ? 'active' : ''}}"><a href='home'>Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href='/vegetable'>Dp1</a></li>
                <li><a href='/fruit'>Dp2</a></li>
                <li><a href='/others'>Dp4</a></li>
            </ul>
            </li>
            <li class="{{Request::is('messages') ? 'active' : ''}}"><a href='messages'>Messages</a></li>
            <li class="{{Request::is('contact') ? 'active' : ''}}"><a href='contact'>Contact</a></li>
            <li class="{{Request::is('plans') ? 'active' : ''}}"><a href='plans'>Pricing Plans</a></li>
            <li class="{{Request::is('about') ? 'active' : ''}}"><a href='about'>About</a></li>
			</ul>
		</div>
	</div>
</section>
<!-- //footer -->



</body>
</html>