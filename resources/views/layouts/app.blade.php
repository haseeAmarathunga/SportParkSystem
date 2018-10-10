<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>

    <link rel="stylesheet" href="css/app.css">

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