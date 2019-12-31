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
			<div class="col-xs-12 col-sm-9 col-md-9">

				<div class="blog-lists">

					<h3>You are Browsing <span>"Entertainments"</span> News </h3>


					<div class="row">

						<div class="col-xs-12 col-sm-12">
							<div class="blog-gird">
								<div class="post-thumb-gird hover-img"> <a href=""><img src="images/arhive-photo.png"></a> </div>
								<div class="blog-list-loop-gird">
									<a href=""><h3>Amid House Turmoil, Ryan’s Standing Still Lofty</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
									<span> 	<a href=""><i class="fa fa-folder-open-o"></i> National</a> 
											<a href=""><i class="fa fa-clock-o"></i> 12 May, 2015</a> 
											<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>		 
									</span>
								</div>

								<div class="read-more"><a href="">Read More</a></div>

							</div>
						</div>

						<div class="col-xs-12 col-sm-12">
							<div class="blog-gird">
								<div class="post-thumb-gird hover-img"> 
									<iframe width="100%" height="400px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/114360394&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe> 
								</div>
								<div class="blog-list-loop-gird">
									<a href=""><h3>Amid House Turmoil, Ryan’s Standing Still Lofty</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
									<span> 	<a href=""><i class="fa fa-folder-open-o"></i> National</a> 
											<a href=""><i class="fa fa-clock-o"></i> 12 May, 2015</a> 
											<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>		 
									</span>
								</div>

								<div class="read-more"><a href="">Read More</a></div>

							</div>
						</div>

						<div class="col-xs-12 col-sm-12">
							<div class="blog-gird">
								<div class="post-thumb-gird hover-img"> <a href=""><img src="images/arhive-photo2.png"></a> </div>
								<div class="blog-list-loop-gird">
									<a href=""><h3>Amid House Turmoil, Ryan’s Standing Still Lofty</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
									<span> 	<a href=""><i class="fa fa-folder-open-o"></i> National</a> 
											<a href=""><i class="fa fa-clock-o"></i> 12 May, 2015</a> 
											<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>		 
									</span>
								</div>

								<div class="read-more"><a href="">Read More</a></div>

							</div>
						</div>

						<div class="col-xs-12 col-sm-12">
							<div class="blog-gird">
								<div class="post-thumb-gird hover-img"> 
									<iframe width="100%" height="400px" src="https://www.youtube.com/embed/9bZkp7q19f0" frameborder="0" allowfullscreen></iframe> 
								</div>
								<div class="blog-list-loop-gird">
									<a href=""><h3>Amid House Turmoil, Ryan’s Standing Still Lofty</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
									<span> 	<a href=""><i class="fa fa-folder-open-o"></i> National</a> 
											<a href=""><i class="fa fa-clock-o"></i> 12 May, 2015</a> 
											<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>		 
									</span>
								</div>

								<div class="read-more"><a href="">Read More</a></div>

							</div>
						</div>

						<div class="col-xs-12 col-sm-12">
							<div class="blog-gird">
								<div class="post-thumb-gird hover-img"> <a href=""><img src="images/arhive-photo4.png"></a> </div>
								<div class="blog-list-loop-gird">
									<a href=""><h3>Amid House Turmoil, Ryan’s Standing Still Lofty</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
									<span> 	<a href=""><i class="fa fa-folder-open-o"></i> National</a> 
											<a href=""><i class="fa fa-clock-o"></i> 12 May, 2015</a> 
											<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>		 
									</span>
								</div>

								<div class="read-more"><a href="">Read More</a></div>

							</div>
						</div>

						<div class="col-xs-12 col-sm-12">
							<div class="blog-gird">
								<div class="post-thumb-gird hover-img"> <a href=""><img src="images/arhive-photo5.png"></a> </div>
								<div class="blog-list-loop-gird">
									<a href=""><h3>Amid House Turmoil, Ryan’s Standing Still Lofty</h3></a>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
									<span> 	<a href=""><i class="fa fa-folder-open-o"></i> National</a> 
											<a href=""><i class="fa fa-clock-o"></i> 12 May, 2015</a> 
											<a href=""><i class="fa fa-commenting-o"></i> 0 Comments</a>		 
									</span>
								</div>

								<div class="read-more"><a href="">Read More</a></div>

							</div>
						</div>

					</div>




					<nav class="pagi-nav">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>

				</div>	

			</div>


				<!-- Sidebar -->
			<div class="col-xs-12 col-sm-3 col-md-3">
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

				<div class="widget">
					<div class="cat-title">
						<a href="#">Advertisement</a>
					</div>

					<div class="post-sin-list">
						<center>
							<img src="images/advertisement.png" alt="">
						</center>
					</div>						
				</div>
			</div>

		</div>
	</div>
@endsection