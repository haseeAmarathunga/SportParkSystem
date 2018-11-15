@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome {{Auth::user()-username}}</strong>
        <br/>
        <a href="{{url('/adminlogin/logout')}}">Logout</a>
    </div>
else
    <script>window.location="/adminlogin";</script>
@endif