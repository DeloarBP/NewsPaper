@extends('frontend.layouts.app')

@section('content')

<div class="news-ticker-area"> <!-- News Tricker Area Start -->
	<div class="container">
		<div class="row">
			<div class="news-ticker">
				
				<div class="col-xs-12 col-sm-2 col-md-1"> <!-- News Tricker Title Start -->
					<div class="news-ticker-title">
						<p>HOT</p>
					</div>
				</div> <!-- News Tricker Title End -->
					
					
				<div class="col-xs-12 col-sm-7 col-md-8"> <!-- News Tricker Slider Area Start -->
					<div id="owl-ticker-carousel" class="owl-carousel"> 

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="images/ticker-img.png" alt="">
								<a href="">When will Southern California's heat wave be over?</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="images/ticker-img1.png" alt="">
								<a href="">Nobel laureate chemist Richard Heck, 84, dies in Manila</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="images/ticker-img2.png" alt="">
								<a href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="images/ticker-img3.png" alt="">
								<a href="">Departing Speaker Boehner Could Enjoy New Leeway in Clearing Legislation</a>
							</div>
						</div> <!-- Tricker Item End -->

					</div> 
				</div> <!-- News Tricker Slider Area End -->


				<div class="col-xs-12 col-sm-3 col-md-3"> <!-- Weather Area Start -->
					<div class="news-ticker-title">
						<div id="weather"></div>
					</div> 
				</div> <!-- Weather Area End --> 
				
			</div>
		</div>
	</div>
</div> <!-- News Tricker Area End -->




	<div class="gmap">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.318104842745!2d-73.97968268211504!3d40.76027557736433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258f78785e36f%3A0x5dc19262e7b89500!2s57+St+-+7+Av!5e0!3m2!1sen!2sbd!4v1451247219400" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-8">
				<div class="contact-form">

					<div class="page-title">
						<h3>Be in touch</h3>
					</div>

					<form action="" method="post" id="commentform" class="comment-form" novalidate="">

						<p class="comment-form-author"><input id="author" name="author" value="" size="30" aria-required="true" required="required" type="text" placeholder="Name"></p>

						<p class="comment-form-email"> <input id="email" name="email" value="" size="30" aria-describedby="email-notes" aria-required="true" required="required" type="email" placeholder="Email"></p>

						<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required" placeholder="Comments"></textarea></p>

						<p class="form-submit"><input name="submit" id="submit" class="submit" value="Submit" type="submit"> <input name="comment_post_ID" value="31" id="comment_post_ID" type="hidden"> </p>
					</form>					

				</div>

			</div>




				<!-- Sidebar -->
			<div class="col-xs-12 col-sm-4 col-md-4">

					<div class="page-title">
						<h3>Adress</h3>
					</div>

					<div class="contact-address">

						<div class="address">
			                  <div class="separate">
			                  	<span class="address-icon">
			                  		<i class="fa fa-map-marker"></i>
			                  	</span>
			                  	<p>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</p>
			                 </div>

			                  <div class="separate">
			                  	<span class="address-icon">
			                  		<i class="fa fa-phone"></i>
			                  	</span>
			                  	<p>(123) 456-7890<br>(123) 486-9840</p>
			                 </div>

			                  <div class="separate">
			                  	<span class="address-icon">
			                  		<i class="fa fa-envelope"></i>
			                  	</span>
			                  	<p>test@webamail.com<br>info@webmail.com</p>
			                 </div>

		                </div>

					</div>
			</div>
		</div>
	</div>
@endsection 