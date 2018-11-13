@section('adminloginbar')
    <div class="well">
		
	<div class="login-form">
    <!-- <form method="POST"> -->
    {!! Form::open(['url'=>'AdminLogin/login']) !!}
        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Admin Login</h2>   
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username','required'])}}           
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                {{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}              
            </div>
        </div>        
        <div class="form-group">
            {{Form::submit('Login',['class'=>'btn btn-warning btn-block'])}}
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>
        <div class="or-seperator"><i>or</i></div>
        
        
    {!! Form::close() !!}
    <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>
</div>

    </div>

    
@show