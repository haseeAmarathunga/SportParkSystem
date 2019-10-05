@section('adminloginbar')
<!-- new section of admin login -->
    <div class="well">
		
	<div class="login-form">
    <!-- show the error message, if login details incorrect -->

    
    <!-- if that functions return any session errors it will show here -->
    @if($message=Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
    @endif
    
    <!-- show the other error in here(ex:both passwords are not macthed!) -->
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form creation -->
    <!-- form action link -->
    {!! Form::open(['url'=>'/AdminLogin/checklogin']) !!} 
        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Admin Login</h2>   
        <hr>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <!-- show the text field -->
                {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username','required'])}}           
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <!-- show password field -->
                {{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}              
            </div>
        </div>        
        <div class="form-group">
            <!-- show login button -->
            {{Form::submit('Login',['class'=>'btn btn-warning btn-block'])}}
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>
        <div class="or-seperator"><i>or</i></div>
        
        
    {!! Form::close() !!} 
    <!-- end of the form -->
    <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>
</div>

    </div>  
@show