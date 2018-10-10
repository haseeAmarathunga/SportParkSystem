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
	<!-- default css files -->
	
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//web font-->

    <script src=js/app.js></script>

</head>
<body>


    @include('inc.navbar')
    @if(Request::is('/'))
        @include('inc.showcase')
    @endif
    @if(Request::is('home'))
        @include('inc.showcase')
    @endif

       
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')

                @yield('content')
            </div>
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>

    <footer id="footer" class="text-center">
        <p>All right reserved 2018 &copy; hasee'sArt</p>
    </footer>
    
    
</body>
</html>