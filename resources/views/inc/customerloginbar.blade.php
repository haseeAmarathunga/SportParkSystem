@section('customerloginbar')
    <div class="well">
		
	<div class="login-form">
    <!-- show the error message, if login details incorrect -->
    <!-- @if(isset(Auth::user()->email))
        <script>window.location="/staffmenu";</script>
    @endif -->
    
    @if($message=Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{$message}}</strong>
    </div>
    @endif
    
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- <form method="POST"> -->
    {!! Form::open(['url'=>'/customerlogin/checklogin']) !!}
        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Customers Login</h2>   
        <hr>
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
            {{Form::submit('Login',['class'=>'btn btn-primary btn-block'])}}
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>
        <div class="or-seperator"><i>or</i></div>
        
        
    {!! Form::close() !!}
    <p class="text-center text-muted small">Don't have an account? <a href="/signup">Sign up here!</a></p>
</div>

    </div>  
@show