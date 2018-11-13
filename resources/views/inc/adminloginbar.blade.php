@section('adminloginbar')
    <div class="well">
		
	<div class="login-form">
    <form >
        <h2 class="text-center"><span class="glyphicon glyphicon-user"></span> Admin Login</h2>   
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" ng-model="username" placeholder="Username" required="required">             
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" ng-model="password" placeholder="Password" required="required">             
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-warning login-btn btn-block" ng-click="submit()">Sign in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div>
        <div class="or-seperator"><i>or</i></div>
        
        
    </form>
    <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>
</div>

    </div>
@show