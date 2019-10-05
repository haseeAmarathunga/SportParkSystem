@section('staffloginbar')
    <div class="well">
		
	<div class="login-form">
    
    <!-- show the all session error messages -->
    @if($message=Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
    @endif

    <!-- show the error message, if login details incorrect -->
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form action -->
    {!! Form::open(['url'=>'/StaffLogin/checklogin']) !!}
        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Staff Login</h2>   
        <hr>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <!-- username text field -->
                {{Form::text('username','',['class'=>'form-control','placeholder'=>'Email','required'])}}           
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <!-- password text field -->
                {{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}              
            </div>
        </div>        
        <div class="form-group">
            <!-- submit text field -->
            {{Form::submit('Login',['class'=>'btn btn-success btn-block'])}}
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>
        <div class="or-seperator"><i>or</i></div>
        
        
    {!! Form::close() !!}
    <!-- form end -->
    <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>
</div>

    </div>  
@show