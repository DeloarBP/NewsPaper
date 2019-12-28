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
								<img src="im{{ asset('assets') }}/ages/ticker-img.png" alt="">
								<a href="">When will Southern California's heat wave be over?</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start -->
							<div class="single-ticker">
								<img src="{{ asset('assets') }}/images/ticker-img1.png" alt="">
								<a href="">Nobel laureate chemist Richard Heck, 84, dies in Manila</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start -->
							<div class="single-ticker">
								<img src="{{ asset('assets') }}/images/ticker-img2.png" alt="">
								<a href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start -->
							<div class="single-ticker">
								<img src="{{ asset('assets') }}/images/ticker-img3.png" alt="">
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




<div class="featured-area">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="lead-fea-img">
					<div class="img-container">
						<a href="#"><img src="{{ asset('assets') }}/images/lead-featured.png" alt=""></a>
					</div>
					<span><a href="#">This is why social media marketers should not be ignoring Google+</a></span>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="row">

					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="fea-single">

							<a href="#"><img src="{{ asset('assets') }}/images/fea-single.png" alt=""></a>
							<span><a href="#">Mickey Rooney had an affair with teenage Elizabeth Taylor</a></span>
						</div>
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="fea-single">
							<a href="#"><img src="{{ asset('assets') }}/images/fea-single15.png" alt=""></a>
							<span><a href="#">This Gramercy Park apartment looks like Downton Abbey</a></span>
						</div>
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="fea-single">
							<a href="#"><img src="{{ asset('assets') }}/images/fea-single16.png" alt=""></a>
							<span><a href="#">McCarthy accused of affair with House member after failed speaker</a></span>
						</div>
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="fea-single">
							<a href="#"><img src="{{ asset('assets') }}/images/fea-single17.png" alt=""></a>
							<span><a href="#">U.S. trade deal’s setback causes mixed reaction in Asia</a></span>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>


<div class="cat-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">

				<div class="cat-title">
					<a href="#">City News</a>
					<div class="read-btn"><a href="">more</a></div>
				</div>

				<div class="box-sing">




					<div class="row">
						<div class="col-xs-12 col-sm-3 col-md-3">

							<div class="post-sin-cat">
								<div class="readmore-container">
									<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single3.png" alt=""></a>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a> | <a href="">0 Comments</a></p>
								</div>
								<a class="lead-title" href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a>
								<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
							</div>


						</div>


						<div class="col-xs-12 col-sm-3 col-md-3">

							<div class="post-sin-cat">
								<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single4.png" alt=""></a>
								<div class="post-meta">
									<p>8:06pm | <a href="">Micheal</a></p>
								</div>
								<a class="lead-title" href="">When will Southern California's heat wave be over?</a>
								<p class="expert">Thousands of residents in West Los Angeles neighborhoods found themselves without power Saturday evening as high temperued  ...</p>
							</div>



						</div>


						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="post-sin-cat">
										<div class="post-meta">
											<p>8:11pm | <a href="">Abdur Rahim</a></p>
										</div>
										<a class="lead-title" href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
										<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="post-sin-cat">
										<div class="post-meta">
											<p>8:11pm | <a href="">Abdur Rahim</a></p>
										</div>
										<a class="lead-title" href="">In California, Electric Cars Outpace Plugs, and Sparks Fly</a>
										<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="post-sin-cat">
										<div class="post-meta">
											<p>8:11pm | <a href="">Abdur Rahim</a></p>
										</div>
										<a class="lead-title" href="">Refugees, Stuck in Grinding U.S. Process, Wait and Hope</a>
										<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="post-sin-cat">
										<div class="post-meta">
											<p>8:11pm | <a href="">Abdur Rahim</a></p>
										</div>
										<a class="lead-title" href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
										<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>


			</div>
		</div>
	</div>
</div>




<div class="cat-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="cat-title">
							<a href="#">National</a>
							<div class="read-btn"><a href="">more</a></div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6">

							<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single1.png" alt=""></a>
							<div class="post-meta">
								<p>8:11pm | <a href="">Abdur Rahim</a></p>
							</div>
							<a class="lead-title" href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>

						</div>


						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="post-sin-list">
								<ul>
									<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
									<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
									<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									<li><a href="">Man shot in face in driveway of Cleveland home</a></li>
									<li><a href="">Routine maintenance blamed for Cleveland's pink drinking water</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="cat-title">
							<a href="#">International</a>
							<div class="read-btn"><a href="">more</a></div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-6">

							<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single2.png" alt=""></a>
							<div class="post-meta">
								<p>8:11pm | <a href="">Abdur Rahim</a></p>
							</div>
							<a class="lead-title" href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>

						</div>


						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="post-sin-list">
								<ul>
									<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
									<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
									<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									<li><a href="">Man shot in face in driveway of Cleveland home</a></li>
									<li><a href="">Routine maintenance blamed for Cleveland's pink drinking water</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>



<div class="exclu-area">
	<div class="container">
		<div class="row">

			<h2 class="exclu-title">Exclusive News</h2>
			<div class="col-xs-12 col-sm-12 col-md-12">

							<div id="highlight-carousel" class="owl-carousel">

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single1.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single2.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single3.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single4.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single5.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single6.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single7.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single8.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single9.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single10.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single1.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

								<div>
									<div class="highligh-item">
										<a href=""> <img src="{{ asset('assets') }}/images/fea-single2.png"> </a>
										<div class="high-title"> <a href="">Minnesota drug registry aims to put lid on abuse of prescriptions</a> </div>
									</div>
								</div>

							</div>

							<div class="highligh-nav-prev">
								<div class="caret"></div>
								<a class="trend-nav-prev"><i class="fa fa-angle-left"></i></a>
							</div>

							<div class="highligh-nav-next">
								<div class="caret"></div>
								<a class="trend-nav-next"><i class="fa fa-angle-right"></i></a>
							</div>

			</div>
		</div>
	</div>
</div>



<div class="cat-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="cat-title">
					<a href="#">Economy</a>
					<div class="read-btn"><a href="">more</a></div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6">
					<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single4.png" alt=""></a>
						<div class="post-meta">
							<p>8:11pm | <a href="">Abdur Rahim</a></p>
						</div>
					<a class="lead-title" href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="post-sin-list">
						<ul>
							<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
							<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
							<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
							<li><a href="">Man shot in face in driveway of Cleveland home</a></li>
							<li><a href="">Routine maintenance blamed for Cleveland's pink drinking water</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="slider-container">
					    <div id="sync1" class="owl-carousel">
						    <div class="item slider-box">
						    	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-calendar"></i> 12 May, 2016</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						   	</div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo1.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo3.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo4.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo1.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo3.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>

						    <div class="item slider-box">
						      	<div class="slider-img">
						      		<a href=""><img src="{{ asset('assets') }}/images/arhive-photo4.png"></a>
						      	</div>
						      	<div class="slider-text">
						      		<a href="">D.E.A. Effort to Curb Painkiller Abuse Falls Short at Pharmacies</a>
						      		<div class="slider-social">
						      			<a href=""><i class="fa fa-folder-open-o"></i> National</a>
										<a href=""><i class="fa fa-clock-o"></i> 8:11pm</a>
										<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>
									</div>
								</div>
						    </div>


					</div>

					<div id="sync2" class="owl-carousel">
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo1.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo3.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo4.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo1.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo3.png"></a> </div>
						<div class="item"> <a href=""><img src="{{ asset('assets') }}/images/arhive-photo4.png"></a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="cat-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="row">
					<div class="cat-box-area">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="cat-title">
								<a href="#">Politics</a>
								<div class="read-btn"><a href="">more</a></div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single3.png" alt=""></a>
								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Amid House Turmoil, Ryan’s Standing Still Lofty</a>
								<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single4.png" alt=""></a>
								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Departing Speaker Boehner Could Enjoy New Leeway in Clearing Legislation </a>
								<p class="expert">Letters from Minnesota regulators identify people who have obtained large quantities of drugs from multiple doctors and pharmacies. In the  ...</p>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="post-sin-list">
									<ul>
										<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
										<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
										<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
										<li><a href="">Man shot in face in driveway of Cleveland home</a></li>
										<li><a href="">Routine maintenance blamed for Cleveland's pink drinking water</a></li>
										<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="cat-box-area">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="cat-title">
								<a href="#">Fashion</a>
								<div class="read-btn"><a href="">more</a></div>
							</div>

							<div class="col-xs-12 col-sm-8 col-md-8">

								<div class="fea-lead-img">

									<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single5.png" alt=""></a>
									<div class="con-up">
										<div class="post-meta">
											<p>8:11pm | <a href="">Abdur Rahim</a></p>
										</div>
										<a class="big-cat-post-title" href="#">This is why social media marketers should not be ignoring Google+</a>
									</div>
								</div>

								<div class="post-sin-list">
									<ul>
										<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
										<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
										<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									</ul>
								</div>

							</div>


							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="post-single-area">
									<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single6.png" alt=""></a>
									<div class="post-meta">
										<p>8:11pm | <a href="">Abdur Rahim</a></p>
									</div>
									<a class="cat-post-title" href="">Incubator alumni form Philadelphia Fashion Alliance</a>
								</div>

								<div class="post-single-area">
									<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single7.png" alt=""></a>
									<div class="post-meta">
										<p>8:11pm | <a href="">Abdur Rahim</a></p>
									</div>
									<a class="cat-post-title" href="">Fashion exhibit takes on global view</a>
								</div>
							</div>
						</div>
					</div>

					<div class="sm-box-area">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="cat-title">
								<a href="#">Tech</a>
								<div class="read-btn"><a href="">more</a></div>
							</div>
							<div class="post-single-area">

								<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single8.png" alt=""></a>
								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Judge looks to jumpstart public encryption debate with Apple iPhone unlocking case</a>


								<div class="post-sin-list">
									<ul>
										<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
										<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
										<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									</ul>
								</div>

							</div>
						</div>
					</div>


					<div class="sm-box-area">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="cat-title">
								<a href="#">Sports</a>
								<div class="read-btn"><a href="">more</a></div>
							</div>
							<div class="post-single-area">

								<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single9.png" alt=""></a>
								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Lionel Messi, Cristiano Ronaldo, Memphis Depay: The top-selling player shirts</a>


								<div class="post-sin-list">
									<ul>
										<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
										<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
										<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									</ul>
								</div>

							</div>
						</div>
					</div>

					<div class="sm-box-area">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="cat-title">
								<a href="#">Environment</a>
								<div class="read-btn"><a href="">more</a></div>
							</div>
							<div class="post-single-area">

								<a href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single10.png" alt=""></a>
								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Only 100 Tigers Remain in Bangladesh’s Sundarban Forests, Survey Shows</a>


								<div class="post-sin-list">
									<ul>
										<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
										<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
										<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
									</ul>
								</div>

							</div>
						</div>
					</div>








				</div>
			</div>




				<!-- Sidebar -->
			<div class="col-xs-12 col-sm-3 col-md-3">


				<div class="widget">
					<div class="post-sin-list social-counter">
						<ul>
							<li class="sc-item sc-rss"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-rss" aria-hidden="true"></i>
                                    	<span>rss</span>
                                    </div>
                               	</a>
                                <div class="sc-count">
                                    <span>5000+</span>
                                   	<p>Subscribers</p>
                               	</div>
                           	</li> <!-- Social Item End -->

							<li class="sc-item sc-fb"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                                    	<span>facebook</span>
                                    </div>
                               	</a>
                                <div class="sc-count">
                                    <span>4948410</span>
                                   	<p>Fans</p>
                               	</div>
                           	</li> <!-- Social Item End -->

							<li class="sc-item sc-twitter"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                                    	<span>twitter</span>
                                    </div>
                               	</a>
                                <div class="sc-count">
                                    <span>48400</span>
                                   	<p>followers</p>
                               	</div>
                           	</li> <!-- Social Item End -->

							<li class="sc-item sc-youtube"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-youtube" aria-hidden="true"></i>
                                    	<span>youtube</span>
                                    </div>
                               	</a>
                                <div class="sc-count">
                                    <span>89140</span>
                                   	<p>Subscribers</p>
                               	</div>
                           	</li> <!-- Social Item End -->

							<li class="sc-item sc-dribbble"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-dribbble" aria-hidden="true"></i>
                                    	<span>dribbble</span>
                                    </div>
                               	</a>

                                <div class="sc-count">
                                    <span>2140</span>
                                   	<p>followers</p>
                               	</div>
                           	</li> <!-- Social Item End -->

							<li class="sc-item sc-google-plus"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-google-plus" aria-hidden="true"></i>
                                    	<span>google+</span>
                                    </div>
                               	</a>

                                <div class="sc-count">
                                    <span>89140</span>
                                   	<p>followers</p>
                               	</div>
                           	</li> <!-- Social Item End -->

							<li class="sc-item sc-instagram"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-instagram" aria-hidden="true"></i>
                                    	<span>instagram</span>
                                    </div>
                               	</a>

                                <div class="sc-count">
                                    <span>2140</span>
                                   	<p>followers</p>
                               	</div>
                           	</li>	 <!-- Social Item End -->

							<li class="sc-item sc-vimeo"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-vimeo" aria-hidden="true"></i>
                                    	<span>vimeo</span>
                                    </div>
                               	</a>

                                <div class="sc-count">
                                    <span>2140</span>
                                   	<p>followers</p>
                               	</div>
                           	</li>	 <!-- Social Item End -->

							<li class="sc-item sc-behance"> <!-- Social Item Start -->
                                <a href="#">
                                	<div class="sc-head">
                                    	<i class="fa fa-behance" aria-hidden="true"></i>
                                    	<span>behance</span>
                                    </div>
                               	</a>

                                <div class="sc-count">
                                    <span>7440</span>
                                   	<p>followers</p>
                               	</div>
                           	</li>	 <!-- Social Item End -->


						</ul>
					</div>
				</div>


				<div class="widget">
					<div class="section-title">
						<h4>Don't <span>Miss</span></h4>
					</div>

					<div class="dont-miss-sec">

						<div id="owl-dont-miss-carousel" class="owl-carousel">

							<div> <!-- Don't Miss Section 1 Start -->

								<ul>
									<li>
										<div class="dont-m-box">
											<a href="#">When will Southern California's heat wave be over?</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

									<li>
										<div class="dont-m-box">
											<a href="#">Nobel laureate chemist Richard Heck, 84, dies in Manila</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

									<li>
										<div class="dont-m-box">
											<a href="#">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

									<li>
										<div class="dont-m-box">
											<a href="#">Departing Speaker Boehner Could Enjoy New Leeway in Clearing Legislation</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

								</ul>

							</div> <!-- Don't Miss Section 1 End -->


							<div> <!-- Don't Miss Section 2 Start -->

								<ul>
									<li>
										<div class="dont-m-box">
											<a href="#">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

									<li>
										<div class="dont-m-box">
											<a href="#">Departing Speaker Boehner Could Enjoy New Leeway in Clearing Legislation</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

									<li>
										<div class="dont-m-box">
											<a href="#">When will Southern California's heat wave be over?</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

									<li>
										<div class="dont-m-box">
											<a href="#">Nobel laureate chemist Richard Heck, 84, dies in Manila</a>
											<p class="meta"><a href="#">Abdur Rahim</a> - 12 May, 2016</p>
										</div>
									</li>

								</ul>

							</div> <!-- Don't Miss Section 2 End -->

						</div>

							<div class="dontm-prev"> <!-- Trending Button Start -->
								  <a class="dontm-nav-prev"><i class="fa fa-angle-left"></i></a>
							</div> <!-- Trending Button End -->

							<div class="dontm-next"> <!-- Trending Button Start -->
								  <a class="dontm-nav-next"><i class="fa fa-angle-right"></i></a>
							</div> <!-- Trending Button End -->

					</div>

				</div>


				<div class="widget">
					<div class="cat-title">
						<a href="#">Politics</a>
					</div>

					<div class="post-sin-list">
						<ul>
							<li><a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a></li>
							<li><a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating'</a></li>
							<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
							<li><a href="">Man shot in face in driveway of Cleveland home</a></li>
							<li><a href="">Routine maintenance blamed for Cleveland's pink drinking water</a></li>
							<li><a href="">The Walking Dead' opens sixth season in gripping fason in gripping fashion</a></li>
							<li><a href="">Man shot in face in driveway of Cleveland home</a></li>
							<li><a href="">Routine maintenance blamed for Cleveland's pink drinking water</a></li>
							<li><a href="">The Walking Dead' opens sixth season in gripping fashion</a></li>
						</ul>
					</div>
				</div>


			</div>




		</div>
	</div>
</div>


<div class="cat-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">

				<div class="cat-title">
					<a href="#">Videos</a>
					<div class="read-btn"><a href="">more</a></div>
				</div>

					<div id="owl-video-carousel" class="owl-carousel">




						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single11.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single12.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single13.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single14.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single15.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single11.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">

								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single12.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>

								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>

							</div>

						</div>


						<div>

							<div class="video-single-area">
								<div class="video-img">
									<a class="video-img-con" href=""><img class="lead-img" src="{{ asset('assets') }}/images/fea-single13.png" alt=""></a>
									<div class="video-icon-btn"><i class="fa fa-play"></i></a></div>
								</div>
								<div class="post-meta">
									<p>8:11pm | <a href="">Abdur Rahim</a></p>
								</div>
								<a class="cat-post-title" href="">Drive a BMW more comfortably</a>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

@endsection
