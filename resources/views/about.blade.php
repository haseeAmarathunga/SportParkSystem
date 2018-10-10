@extends('layouts.app')

@section('content')
<h1>About</h1>

<!-- contact -->
<section class="w3ls-section contact" id="contact">
	<div class="container">
		<div class="w3ls-title">
			<h3 class="heading">Get in <span>touch</span></h3>
		</div>
        <!--
		<div class="w3ls_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48306.05339877067!2d-74.245183970742!3d40.825144655510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2555646a723a1%3A0x449f3366d017b214!2sMontclair%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1465991700675"
				style="border:0"></iframe>
		</div>-->

		<div class="contact_wthreerow agileits-w3layouts">
		
			<div class="col-md-7 w3l_contact_form">
				<h4>Contact Form</h4>
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"
						required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"
						required="">
					<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"
						required="">
					<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="col-md-5 agileits_w3layouts_contact_gridl">
				<div class="agileits_mail_grid_right_grid">
					<h4>Contact Info</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur. Nunc id dui vitae urna tincidunt varius.</p>
					<ul class="contact_info">
						<li><span class="fa fa-map-marker" aria-hidden="true"></span>1234k Avenue, 4th block, 3FB, New Jersey.</li>
						<li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
						<li><span class="fa fa-phone" aria-hidden="true"></span>+1(21) 244 567 5678</li>
						<li><span class="fa fa-globe" aria-hidden="true"></span><a href="#">info@website.com</a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</section>
<!-- //contact -->

@endsection