<?php /* Template Name: Home Page Template */ get_header(); ?>

	<div class="bannerCOntainerHoem" style="background-image: url('<?php the_field('banner_image'); ?>');">
		<div class="container">
			<div class="headingCContainerHOmeBanner">
				<h2><?php the_field('banner_heading'); ?></h2>
				<a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>
			</div>
		</div>
	</div>
	<div class="secction2Home">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contentSecction2">
						<h2>
							<?php the_field('headingsection2'); ?>
						</h2>
						<p><?php the_field('contentSection2'); ?></p>
						<a href="#">Read More</a>
					</div>
				</div>
				<div class="col-md-6">
					<img src="./images/3.png">
				</div>
			</div>
		</div>
	</div>
	<div class="menuProdyct">
		<div class="container">
			<div class="innerContainerSection3">
				<div class="headingCOntainer">
					<h6>Our Menu</h6>
					<h2>Our products</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c1.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c2.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c3.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c4.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c5.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c6.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c7.png">
							</div>
							<h6>Chocolate</h6>
						</div>
						<div class="col-md-3">
							<div class="imageWrapperContainer">
								<img src="./images/c8.png">
							</div>
							<h6>Chocolate</h6>
						</div>
					</div>
				</div>
				<a href="#" class="videMomrw">View Menu</a>
			</div>
		</div>
	</div>
	<div class="blogNews">
		<div class="container">
			<div class="headingCOntainer">
				<h6>News & Blog</h6>
				<h2>lAtest News</h2>
			</div>
			<div class="iner-news">
			<div class="row">
				<div class="col-md-4">
					<div class="imageWrapperContainers">
						<img src="./images/new1.png">
					</div>
					<h6>Feb 23, 2021</h6>
					<h5>In March, we have limited days of service based on the weather.</h5>
					<a href="#">Read More</a>
				</div>
				<div class="col-md-4">
					<div class="imageWrapperContainers">
						<img src="./images/new2.png">
					</div>
					<h6>Feb 23, 2021</h6>
					<h5>In March, we have limited days of service based on the weather.</h5>
					<a href="#">Read More</a>
				</div>
				<div class="col-md-4">
					<div class="imageWrapperContainers">
						<img src="./images/new3.png">
					</div>
					<h6>Feb 23, 2021</h6>
					<h5>In March, we have limited days of service based on the weather.</h5>
					<a href="#">Read More</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	<section class="client-main">
		<div class="iner-client">

			<div class="owl-carousel client-slider owl-theme">
				<div class="item">
					<div class="iner-sli">
						<h3>CLIENT REVIEWS</h3>
						<img class="clnt" src="images/client.png">
						<span>Larry Powell</span>
						<img class="star" src="images/stars.png">
						<p>“ Excellent! Well Done Job in a timely manner! Best of Luck to Amir and his team! ”</p>
						<h5>July 14, 2020</h5>
					</div>
				</div>
				<div class="item">
					<div class="iner-sli">
						<h3>CLIENT REVIEWS</h3>
						<img class="clnt" src="images/client.png">
						<span>Larry Powell</span>
						<img class="star" src="images/stars.png">
						<p>“ Excellent! Well Done Job in a timely manner! Best of Luck to Amir and his team! ”</p>
						<h5>July 14, 2020</h5>
					</div>
				</div>
				<div class="item">
					<div class="iner-sli">
						<h3>CLIENT REVIEWS</h3>
						<img class="clnt" src="images/client.png">
						<span>Larry Powell</span>
						<img class="star" src="images/stars.png">
						<p>“ Excellent! Well Done Job in a timely manner! Best of Luck to Amir and his team! ”</p>
						<h5>July 14, 2020</h5>
					</div>
				</div>
				<div class="item">
					<div class="iner-sli">
						<h3>CLIENT REVIEWS</h3>
						<img class="clnt" src="images/client.png">
						<span>Larry Powell</span>
						<img class="star" src="images/stars.png">
						<p>“ Excellent! Well Done Job in a timely manner! Best of Luck to Amir and his team! ”</p>
						<h5>July 14, 2020</h5>
					</div>
				</div>

			</div>
			<a href="#">READ MORE AT YELP</a>
		</div>
	</section>
	<section class="truck-home">
		<div class="truck-flex">
			<div class="truck-width">
				<div class="iner-truck">
					<h2>Mistersoftee<br>
						Trucks</h2>
						<p>MisterSoftee trucks are available for company picnics, fairs, school fundraisers, weddings, birthday parties, and more!</p>
						<div class="site-btn">
						<a href="#">BOOK NOW</a>
						</div>
						<img src="images/humtum.png">

				</div>
			</div>
			<div class="truck-width1">
				<img src="images/truck.png">
			</div>
		</div>
	</section>
	<section class="join-home">
		<div class="truck-flex1">
			<div class="truck-width">
				<img src="images/tuti.png">
			</div>
			<div class="truck-width2">
				<div class="iner-para">
					<h2>JOIN OUR MAILING LIST</h2>
					<p>Receive special offers, updates and upcoming events.</p>
					<div class="iner-frm">
					<form class="example" action="action_page.php">
						<input type="text" placeholder="Search.." name="search">
						<button type="submit">Sign Up Now</button>
					  </form>
					  </div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>