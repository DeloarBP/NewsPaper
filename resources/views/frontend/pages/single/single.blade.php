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
                                <img src="{{ asset('assets/images') }}/ticker-img.png" alt="">
								<a href="">When will Southern California's heat wave be over?</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="{{ asset('assets/images') }}/ticker-img1.png" alt="">
								<a href="">Nobel laureate chemist Richard Heck, 84, dies in Manila</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="{{ asset('assets/images') }}/ticker-img2.png" alt="">
								<a href="">Obama Jokes About Kanye West at San Francisco Fund-Raiser</a>
							</div>
						</div> <!-- Tricker Item End -->

						<div> <!-- Tricker Item Start --> 
							<div class="single-ticker">
								<img src="{{ asset('assets/images') }}/ticker-img3.png" alt="">
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



<div class="exclu-sin-area">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
						
							<div class="col-xs-12 col-sm-12 col-md-12">

								 <div id="owl-exclusive-single-carousel" class="owl-carousel exclusive-single-con">

									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 

									
									<div> 

										<div class="exclu-sin">
											<a href="#"><img src="{{ asset('assets/images') }}/exclusive-img.png" alt=""></a>
											<a class="exclu-single-title" href="#">Spanish protests swell as jobless march on Madrid </a>
										</div>

									</div> 


								</div> 


								
								  <div class="exclu-prev">
								  	<a class="owl-exclusive-single-carousel-prev"><i class="fa fa-angle-left"></i></a>
								  </div>

								  <div class="exclu-next">
								  	<a class="owl-exclusive-single-carousel-next"><i class="fa fa-angle-right"></i></a>
								  </div>

							</div>

				</div>
			</div>
		</div>
	</div>
</div>


<div class="single-page-area">
	<div class="container">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12">

				<div class="cat-n-title">
					<div class="cat-n-tag">
						<div class="label-cat"><a href="">National</a></div>
						<div class="label-tag"><a href="">Los Angeles</a><a href="">New York</a></div>
					</div>

					<div class="post-title">
						<p>Lawsuit Accuses Manhattan Real Estate Used to Launder Money</p>
						<div class="sub-title"><p>Two Kazakh men allegedly conspired with a developer to hide at least $40 million in New York property, a lawsuit says </p></div>

					</div>

				</div>
			</div>
		</div>
	</div>	

	<div class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9">
					<div class="featured-img">
						


						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      <img src="{{ asset('assets/images') }}/post-image.png" alt="post image">
						      <div class="carousel-caption">
						        As TV Ad Rates Soar, ‘Super PACs’ Pivot to Core Campaign Work
						      </div>
						    </div>
						    <div class="item">
						      <img src="{{ asset('assets/images') }}/post-image1.png" alt="post image">
						      <div class="carousel-caption">
						        As TV Ad Rates Soar, ‘Super PACs’ Pivot to Core Campaign Work
						      </div>
						    </div>
						    <div class="item">
						      <img src="{{ asset('assets/images') }}/post-image2.png" alt="post image">
						      <div class="carousel-caption">
						        Tamir Rice’s Family Clashes With Prosecutor Over Police Killing
						      </div>
						    </div>
						    
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>



					<div class="author-comments-info">
						<div class="row">
							<div class="col-xs-12 col-sm-9 col-md-9">
								<div class="author-date">
									<p>By <a href="">Craig Karmin</a></p>
									<p>Oct. 17, 2015 5:30 a.m. ET </p>
								</div>
							</div>

							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="comments-info">
									<p><i class="fa fa-comments"></i> 2 comments</p>
								</div>
							</div>

						</div>
					</div>

					<div class="main-content-area">
						<div class="row">
							<div class="col-xs-12 col-sm-1 col-md-1 no-padd-mar">

								<div class="social-share-btn">
									<p>Share</p>
									<a href=""><img src="{{ asset('assets/images') }}/facebook.png"></a>
									<a href=""><img src="{{ asset('assets/images') }}/twitter.png"></a>
									<a href=""><img src="{{ asset('assets/images') }}/google-plus.png"></a>
								</div>	

							</div>

							<div class="col-xs-12 col-sm-11 col-md-11">

								<div class="entry">
									<p>A banker and a former politician from Kazakhstan tried to launder tens of millions of dollars of stolen money through New York real-estate holdings, a civil lawsuit alleges.</p>

									<p>The men allegedly conspired with New York developer Joseph Chetrit to hide at least $40 million by investing in a former Manhattan hotel and the Cabrini Medical Center, according to a complaint filed on Oct. 12 by Kazakhstan’s largest city, Almaty, and one of the nation’s biggest lenders, BTA Bank.</p>

									<p>The Kazakh men parked “corrupt assets” in New York City real estate to avoid the scrutiny of escalating international investigations, the complaint alleges. Mr. Chetrit, also a defendant in the lawsuit, was aware of the criminal investigations of the Kazakhs when he agreed to use their money for his projects, according to the complaint. The suit seeks damages of up to $18 billion and was filed by law firm Boies, Schiller & Flexner LLP.</p>

									<p>Mr. Ablyazov, who is being held by authorities in France, couldn’t be reached for comment. Previously, he has said he is innocent of any criminal wrongdoing and all accusations against him are ungrounded and politically motivated.</p>

									<blockquote>The Kazakh men, ex-BTA chairman Mukhtar Ablyazov and former Almaty mayor Viktor Khrapunov, are separately under investigation for criminal fraud in Kazakhstan, the complaint says. Mr. Ablyazov is alleged to have stolen billions of dollars from BTA and Mr. Khrapunov is alleged to have stolen about $300 million from Almaty, according to the complaint, filed in federal court in Manhattan.</blockquote>

									<p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>


									<h2>This is heading 2</h2>
									<p>A spokesman for Mr. Khrapunov said: “Having obtained nothing after years of proceedings in Switzerland and the United States, Kazakhstan is trying again to use the legal system of a Western country to harass and destroy political opponents.”</p>			

									<p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>

									<a href=""><img src="{{ asset('assets/images') }}/Barack-Obama.jpg"></a>

									<p>A spokesman for Mr. Khrapunov said: “Having obtained nothing after years of proceedings in Switzerland and the United States, Kazakhstan is trying again to use the legal system of a Western country to harass and destroy political opponents.”</p>

									<p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>


									<p>A spokesman for <a href="">Mr. Khrapunov</a> said: “Having obtained nothing after years of proceedings in Switzerland and the United States, Kazakhstan is trying again to use the legal system of a Western country to harass and destroy political opponents.”</p>			

									<p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>


									<p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>


									<h2>This is heading 2</h2>
									<p>A spokesman for Mr. Khrapunov said: “Having obtained nothing after years of proceedings in Switzerland and the United States, Kazakhstan is trying again to use the legal system of a Western country to harass and destroy political opponents.”</p>			

									<p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>
								</div>









								<div class="author-n-sub-box">

									<div class="row">

										<div class="hidden-xs col-xs-2 col-sm-2 col-md-2">
											<div class="author-img">
												<a href=""><img src="{{ asset('assets/images') }}/author-img-big.png"></a>
											</div>
										</div>	

										<div class="col-xs-12 col-sm-10 col-md-10">
											<div class="author-content">
												<div class="author-name">
													<a href="#"><h3>Craig Karmin</h3></a>
												</div>

												<div class="author-info">
													<p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,</p>
												</div>

												<div class="author-social">
													<ul>
														<li><a href=""><i class="fa fa-facebook-square social-icon facebook-color"></i></a></li>
														<li><a href=""><i class="fa fa-youtube-square social-icon youtube-color"></i></a></li>
														<li><a href=""><i class="fa fa-twitter-square social-icon twitter-color"></i></a></li>
														<li><a href=""><i class="fa fa-google-plus-square social-icon google-plus-color"></i></a></li>
													</ul>
												</div>
											</div>
										</div>

									</div>
								</div>

								

								<div class="related-post">
									<div class="section-title">
										<h4>You might <span>like also</span></h4>
									</div>

									<div class="row">


									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="related-item">
											<div class="img-container">
												<a href=""><img src="{{ asset('assets/images') }}/related-1.png"></a>
											</div>
											<a class="related-link" href="">When Instagram Culture Ruins a Vacation</a>
										</div>
									</div>

									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="related-item">
											<div class="img-container">
												<a href=""><img src="{{ asset('assets/images') }}/related-2.png"></a>
											</div>
											<a class="related-link" href="">More Safety and More Points in Football</a>
										</div>
									</div>

									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="related-item">
											<div class="img-container">
												<a href=""><img src="{{ asset('assets/images') }}/related-3.png"></a>
											</div>
											<a class="related-link" href="">Tests of New Features on HealthCare.gov Go to the Wire</a>
										</div>
									</div>

									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="related-item">
											<div class="img-container">
												<a href=""><img src="{{ asset('assets/images') }}/related-4.png"></a>
											</div>
											<a class="related-link" href="">Justin Trudeau, Oscar Pistorius, Toronto Blue Jays</a>
										</div>
									</div>

									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="related-item">
											<div class="img-container">
												<a href=""><img src="{{ asset('assets/images') }}/related-5.png"></a>
											</div>
											<a class="related-link" href="">Pistorius released on house arrest </a>
										</div>
									</div>

									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="related-item">
											<div class="img-container">
												<a href=""><img src="{{ asset('assets/images') }}/related-6.png"></a>
											</div>
											<a class="related-link" href="">Before Palace Banquet for Xi Jinping, a Snub From Prince Charles</a>
										</div>
									</div>
								</div>
							</div>


							<div class="comment-section">
								<div class="section-title">
									<h4>Comments <span></span></h4>
								</div>


							<div class="comments-area">

								<ul class="comments">
									<li class="comment">
								           	<div class="hidden-xs col-sm-2 col-md-2">
									           	<div class="comment-avatar">
									           		<img src="{{ asset('assets/images') }}/author-img.png">
									           	</div>
									    	</div>

										    <div class="col-xs-12 col-sm-10 col-md-10">
										        <div class="comment_details">
										           	<h3><a href="">Jhon Doe</a></h3>
										            <h4>November 28, 2015</h4>
										            <p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>
										            <a class="comment-reply-link" href="">Reply</a>
										        </div> 
										   	</div>
									</li>


									<ul class="children">
										<li class="comment">
									           	<div class="hidden-xs col-sm-2 col-md-2">
										           	<div class="comment-avatar">
										           		<img src="{{ asset('assets/images') }}/author-img3.png">
										           	</div>
										    	</div>

											    <div class="col-xs-12 col-sm-10 col-md-10">
											        <div class="comment_details">
											           	<h3><a href="">Abdur Rahim</a></h3>
											            <h4>November 28, 2015</h4>
											            <p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel</p>
											            <a class="comment-reply-link" href="">Reply</a>
											        </div> 
											   	</div>
										</li>
									</ul>


									<li class="comment">
								           	<div class="hidden-xs col-sm-2 col-md-2">
									           	<div class="comment-avatar">
									           		<img src="{{ asset('assets/images') }}/author-img1.png">
									           	</div>
									    	</div>

										    <div class="col-xs-12 col-sm-10 col-md-10">
										        <div class="comment_details">
										           	<h3><a href="">Jhon Doe</a></h3>
										            <h4>November 28, 2015</h4>
										            <p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>
										            <a class="comment-reply-link" href="">Reply</a>
										        </div> 
										   	</div>
									</li>

									<li class="comment">
								           	<div class="hidden-xs col-sm-2 col-md-2">
									           	<div class="comment-avatar">
									           		<img src="{{ asset('assets/images') }}/author-img2.png">
									           	</div>
									    	</div>

										    <div class="col-xs-12 col-sm-10 col-md-10">
										        <div class="comment_details">
										           	<h3><a href="">Jhon Doe</a></h3>
										            <h4>November 28, 2015</h4>
										            <p>Peter Sahlas, an attorney for the Ablyazov family, said the former bank chairman had not been served and was unaware of the New York lawsuit. The family would consider the suit “just another instance of a corrupt and kleptocratic foreign regime availing itself of the U.S. legal system to carry out its political vendettas,” Mr. Sahlas said in an interview.</p>
										            <a class="comment-reply-link" href="">Reply</a>
										        </div> 
										   	</div>
									</li>									
								</ul>

	

							</div>						




									<div id="respond" class="comment-respond">
										<h3 id="reply-title" class="comment-reply-title">Leave a Comment <small>
											<a rel="nofollow" id="cancel-comment-reply-link" href="/silvia/2015/06/21/beautiful-women-face/#respond" style="display:none;">Cancel reply</a></small>
										</h3>
										
										<form action="" method="post" id="commentform" class="comment-form" novalidate="">

											<p class="comment-form-author"><input id="author" name="author" value="" size="30" aria-required="true" required="required" type="text" placeholder="Name"></p>

											<p class="comment-form-email"> <input id="email" name="email" value="" size="30" aria-describedby="email-notes" aria-required="true" required="required" type="email" placeholder="Email"></p>

											<p class="comment-form-url"> <input id="url" name="url" value="" size="30" type="url" placeholder="Website"></p>

											<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required="required" placeholder="Comments"></textarea></p>

											<p class="form-submit"><input name="submit" id="submit" class="submit" value="Post Comment" type="submit"> <input name="comment_post_ID" value="31" id="comment_post_ID" type="hidden"> <input name="comment_parent" id="comment_parent" value="0" type="hidden"></p>
										</form>
									</div>

							</div>





							</div>
						</div>
					</div>

				</div>



				<div class="col-xs-12 col-sm-3 col-md-3">

				

					<!-- Sidebar -->

					<div class="widget">

						<div id="myTabs">

						  <!-- Nav tabs -->
						  <ul class="nav nav-tabs tab-con" role="tablist">
						    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Latest</a></li>
						    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Propular</a></li>
						    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>

						  </ul>

						  <!-- Tab panes -->
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane fade in active" id="home">

								<div class="thumb-post-list">
									<ul>
										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post.png"> </a> </div>
											<a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post1.png"> </a> </div>
											<a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post2.png"> </a> </div>
											<a href="">The Walking Dead' opens sixth season in gripping fashion</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post3.png"> </a> </div>
											<a href="">The Walking Dead' opens sixth season in gripping fason in gripping fashion</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post4.png"> </a> </div>
											<a href="">Routine maintenance blamed for Cleveland's pink drinking water</a>
										</li>
									</ul>
								</div>	

						    </div>
						    
						    <div role="tabpanel" class="tab-pane fade" id="profile">

								<div class="thumb-post-list">
									<ul>
									
										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post3.png"> </a> </div>
											<a href="">The Walking Dead' opens sixth season in gripping fason in gripping fashion</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post2.png"> </a> </div>
											<a href="">The Walking Dead' opens sixth season in gripping fashion</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post1.png"> </a> </div>
											<a href="">Cleveland police union welcomes Tamir Rice reviews, but 'we're not celebrating</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post4.png"> </a> </div>
											<a href="">Routine maintenance blamed for Cleveland's pink drinking water</a>
										</li>

										<li>
											<div class="thumb-list"> <a href=""> <img src="{{ asset('assets/images') }}/thumb-post.png"> </a> </div>
											<a href="">Amid House Turmoil, Ryan’s Standing Still Lofty </a>
										</li>

									</ul>
								</div>	

						    </div>

						    <div role="tabpanel" class="tab-pane fade" id="messages">sdsd</div>

						  </div>

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


					<div class="widget">
						<div class="cat-title">
							<a href="#">Advertisement</a>
						</div>

						<div class="post-sin-list">
							<center>
								<img src="{{ asset('assets/images') }}/advertisement.png" alt="">
							</center>
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


@endsection


