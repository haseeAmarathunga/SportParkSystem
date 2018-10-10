<div class="container">
<div class="p-3 mb-2 bg-success text-white">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blue Feather</a>
    </div>
    <ul class="nav navbar-nav">
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

    <div class="pull-right">
    <div class="col-sm-4"></div>
      
    </div>

  </div>
</nav>




</div>
