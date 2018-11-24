
<!-- navbar of the site -->
<div class="container">
<div class="p-3 mb-2 bg-success text-white">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- logo -->
      <a href="#"><img src="/img/logo.png" width="50" height="50"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request::is('home') ? 'active' : ''}}"><a href="{{url('home')}}">Home</a></li>

      <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{url('contact')}}">Contact</a></li>
      <!-- show only for customers -->
      @if(Request::is('customers'))
      <li class="{{Request::is('plans') ? 'active' : ''}}"><a href="{{url('plans')}}">Pricing Plans</a></li>
      @endif
      <!-- ------------ -->
      <li class="{{Request::is('about') ? 'active' : ''}}"><a href="{{url('about')}}">About</a></li>
      <li class="{{Request::is('loginwin') ? 'active' : ''}}"><a href='loginwin'>LOGIN</a></li>

    </ul>

    <div class="pull-right">
    <div class="col-sm-4"></div>

    </div>

  </div>
</nav>
</div>
