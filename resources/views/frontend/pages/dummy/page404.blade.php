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





	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">


				<div class="no-page-error">


					<h3>4<i class="fa fa-frown-o"></i>4</h3>
					<h2>Not Found</h2>
				</div>
			</div>
		</div>
	</div>

@endsection