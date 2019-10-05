@section('customerloginbar')
<!-- section for customers login -->
    <div class="well">
		
	<div class="login-form">
 
    <!-- show the session error messages that functions returns -->
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
                <!-- use for loop for get all error message -->
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form action -->
    {!! Form::open(['url'=>'/customerlogin/checklogin']) !!}
        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Customers Login</h2>   
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
            <!-- login button -->
            {{Form::submit('Login',['class'=>'btn btn-primary btn-block'])}}
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>
        <div class="or-seperator"><i>or</i></div>
        
        
    {!! Form::close() !!}
    <!-- end of the form -->
    <!-- customer registration link -->
    <p class="text-center text-muted small">Don't have an account? <a href="/signup">Sign up here!</a></p>
</div>

    </div>  
@show