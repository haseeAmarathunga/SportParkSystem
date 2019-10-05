<!-- include main layout -->
@extends('layouts.app')
@section('content')
<a href="/customers"><button class="btn btn-default">back</button></a>
<hr>
@if(isset(Auth::user()->username))
@else
    <script>window.location="/home";</script>
@endif
<!-- form for choose pricing plans -->
{!! Form::open(['url'=>'package']) !!}
		<div class="form-group">
		<h3>{{Form::label('select','Select Your Package')}}</h3><hr>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
		<input type="text" name="username" id="username" readonly class="form-control" value="{{Auth::user()->username}}">
		{{Form::select('package',['Standard','Popular','Golden','Proffessional'],'Standard',
		['class'=>'form-control','id'=>'package'])}}
		</div></div>
		<div class="form-group">
			{{Form::label('groupid','Group')}}
			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-group"></i></span>
			{{Form::select('groups',['Badminton','Weight Lifting','Sports','Exercices'],'Badminton',
			['class'=>'form-control','id'=>'package'])}}
		</div></div>

		<div class="buy-button">
			<button type="submit" class="btn btn-success">Buy Now</button>
		</div>
</form>
<!-- show different pricing plans -->
<section class="pricing" id="pricing">
	<div class="container">
		<div class="w3l-pricing-grids">
			<div class="agileits-pricing-grid first">
				<div class="pricing_grid">
					<div class="pricing-top">
						<h3>Standard</h3>
					</div>
						<div class="wthree-pricing-info">
							<p>$<span>15</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-times"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="agileits-pricing-grid second">
				<div class="pricing_grid">
					<div class="pricing-top blue-top">
						<h3>Popular</h3>
					</div>
						<div class="wthree-pricing-info blue-top">
							<p>$<span>20</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom blue-pricing-bottom-top">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-times"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim">BuyNow</a>
						</div>
					</div>
				</div>
			</div>
			<div class="agileits-pricing-grid third">
				<div class="pricing_grid">
					<div class="pricing-top green-top">
						<h3>Golden</h3>
					</div>
						<div class="wthree-pricing-info green-top">
							<p>$<span>35</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom green-pricing-bottom-top">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-times"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-times"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim" >BuyNow</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="agileits-pricing-grid fourth">
				<div class="pricing_grid">
					<div class="pricing-top yellow-top">
						<h3>Professional</h3>
					</div>
						<div class="wthree-pricing-info yellow-top">
							<p>$<span>50</span>/month</p>
						</div>
					<div class="pricing-bottom">
						<div class="pricing-bottom-bottom yellow-pricing-bottom-top">
							<p><span class="fa fa-check"></span><span>Training</span> Overview</p>
							<p><span class="fa fa-check"></span><span>Beginner </span> Classes</p>
							<p><span class="fa fa-check"></span><span>Personal </span> Training</p>  
							<p><span class="fa fa-check"></span><span>Olympic </span> weightlifting</p>
							<p class="text"><span class="fa fa-check"></span><span>Foundation</span> Training</p>
						</div>
						<div class="buy-button">
							<a class="popup-with-zoom-anim">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
</section>
<!-- //pricing plans -->

@endsection