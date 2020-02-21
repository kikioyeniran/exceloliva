<?php
 include("includes/header.php")
?>

<!-- start banner Area -->
<section class="home-banner-area">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center">
				<div class="banner-content col-lg-6 col-md-12 justify-content-center ">
					<div class="me wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.2s">It's me</div>
					<h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s"> Excel Oliva</h1>
					<div class="designation mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s">
						Realtor,
						<span class="designer">Media</span>
						and Marketing agent,
						<span class="developer">Human Resource Consultant</span>
					</div>
					<a href="#" class="primary-btn" data-text="Explore">
						<span>E</span>
						<span>x</span>
						<span>p</span>
						<span>l</span>
						<span>o</span>
						<span>r</span>
						<span>e</span>
					</a>
				</div>
				<div class="banner-img col-lg-6 col-md-6 align-self-end">
					<img class="img-fluid" src="img/oliva99.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


	<!-- Start brands Area -->
	<!-- <section class="brands-area">
		<div class="container">
			<div class="brand-wrap">
				<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b1.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b2.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b3.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b4.png" alt=""></a>
					</div>
					<div class="col single-brand">
						<a href="#"><img class="mx-auto" src="img/brand/b5.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End brands Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-between">
                <?php
					$query2 = "SELECT * FROM about WHERE id = 1 LIMIT 1";
					$result = $mysqli->query($query2) or die($mysqli->error);
					$row = $result->fetch_assoc();
				?>
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="admin/images/<?php echo $row['picture']?>" alt="">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title">
						<h2>about myself</h2>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p><?php echo $row['profile'];?></p>
						<!-- <p>That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often
							laughed.
						</p> -->
					</div>
					<a href="#" class="primary-btn white" data-text="More Info">
						<span>M</span>
						<span>o</span>
						<span>r</span>
						<span>e</span>
						<span> </span>
						<span>I</span>
						<span>n</span>
						<span>f</span>
						<span>o</span>
					</a>
					<a href="#" class="primary-btn" data-text="Resume">
						<span>R</span>
						<span>e</span>
						<span>s</span>
						<span>u</span>
						<span>m</span>
						<span>e</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->


	<!-- Start Work Area Area -->
	<section class="work-area section-gap-top section-gap-bottom-90" id="work">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Latest Works</h2>
						<p>Check out some of my recent works.
							</p>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="filters">
						<ul>
							<li class="active" data-filter=".all">All Categories</li>
							<li data-filter=".branding">Real Estate</li>
							<li data-filter=".creative">Media and Marketing</li>
							<li data-filter=".web-design">Human Resource Mgt.</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="filters-content">
				<div class="row grid">
					<?php
						$query2 = "SELECT * FROM portfolio WHERE category = 'Real Estate' ORDER BY id DESC LIMIT 3";
						$result = $mysqli->query($query2) or die($mysqli->error);
						while ($row = $result->fetch_assoc())
						{
					?>
						<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding wow fadeInUp" data-wow-duration="2s">
							<div class="relative">
								<div class="thumb">
									<div class="overlay overlay-bg"></div>
									<img class="image img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $row['name']; ?></h4>
									<div class="cat"><?php echo $row['category']; ?></div>
								</div>
								<a class="overlay" href="portfolio-details.php?port=<?php echo urlencode($row['id']); ?>"></a>
							</div>
						</div>
					<?php }
						$query2 = "SELECT * FROM portfolio WHERE category = 'Media and Marketing' ORDER BY id DESC LIMIT 3";
						$result = $mysqli->query($query2) or die($mysqli->error);
						while ($row = $result->fetch_assoc())
						{
					?>
						<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="relative">
								<div class="thumb">
									<div class="overlay overlay-bg"></div>
									<img class="image img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $row['name']; ?></h4>
									<div class="cat"><?php echo $row['category']; ?></div>
								</div>
								<a class="overlay" href="portfolio-details.php?port=<?php echo urlencode($row['id']); ?>"></a>
							</div>
						</div>
					<?php }
						$query2 = "SELECT * FROM portfolio WHERE category = 'Human Resources' ORDER BY id DESC LIMIT 3";
						$result = $mysqli->query($query2) or die($mysqli->error);
						while ($row = $result->fetch_assoc())
						{
					?>
						<div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
							<div class="relative">
								<div class="thumb">
									<div class="overlay overlay-bg"></div>
									<img class="image img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt="">
								</div>
								<div class="middle">
									<h4><?php echo $row['name']; ?></h4>
									<div class="cat"><?php echo $row['category']; ?></div>
								</div>
								<a class="overlay" href="portfolio-details.php?port=<?php echo urlencode($row['id']); ?>"></a>
							</div>
						</div>
					<?php } ?>


					<!-- <div class="single-work col-lg-4 col-md-6 col-sm-12 all web-design wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w6.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all creative wow fadeInUp" data-wow-duration="2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w4.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div>
					<div class="single-work col-lg-4 col-md-6 col-sm-12 all branding wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="img/work/w5.jpg" alt="">
							</div>
							<div class="middle">
								<h4>2D Vinyl Design</h4>
								<div class="cat">Client Project</div>
							</div>
							<a class="overlay" href="portfolio-details.html"></a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->


	<!-- Start Job History Area Area -->
	<section class="job-area section-gap-top section-gap-bottom-90">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>My Videos</h2>
						<p>I post videos on very interesting topics. Click any of the links below to check them out
							</p>
					</div>
				</div>
			</div>

			<div class="row">
				<?php
					$query2 = "SELECT * FROM videos ORDER BY id DESC LIMIT 6";
					$result = $mysqli->query($query2) or die($mysqli->error);
					while ($row = $result->fetch_assoc())
					{
				?>
				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4><?php echo $row['title'];?></h4>
								<p>Videos By Excel Oliva</p>
							</div>
							<div class="top-right">
								<a href="<?php echo $row['link']?>" target="_blank" class="primary-btn" data-text="Cick to watch">
									<span>C</span><span>l</span><span>i</span><span>c</span><span>k</span>
									<span>t</span><span>o</span>
									<span>W</span><span>a</span><span>t</span><span>c</span><span>h</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s"><?php echo $row['description'];?></div>
					</div>
				</div>
				<?php } ?>
				<!-- <div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Senior Visualiser</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Junior Visualiser</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Intern Designer</h4>
								<p>Old Bird IT, New Yorkt</p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
							All users on MySpace will know that there are millions of people out there. Every day besides. All users on My will know
							that there are millions of people out of the field there.
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End Job Historyt Area Area -->


	<!-- Start Service Area -->
	<section class="service-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Services I Offer</h2>
						<p>Below is a Succint Description of the Value you can get from me</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s">
						<span class="lnr lnr-home"></span>
						<h4>
							<span>Real</span> Estate
						</h4>
						<p>If you’re looking a property and you're not sure where to start. I'm the one yo need<p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
						<span class="lnr lnr-laptop-phone"></span>
						<h4><span>Media</span> and Marketing
						</h4>
						<p>I create the best media content and marketing strategies for firms ready to seize theor own future</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
						<span class="lnr lnr-chart-bars"></span>
						<h4><span>Human</span> Resource Consultancy
						</h4>
						<p>Confused about managing personnel? Look no further. Helping companies reach their zenith with people is my specialty.</p>
					</div>
				</div>
				<!-- <div class="col-lg-3 col-md-6">
					<div class="single-service wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
						<span class="lnr lnr-chart-bars"></span>
						<h4><span>Web</span> Development
						</h4>
						<p>If you’re looking blank casvsettes on the web, you may confuse.</p>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<!-- End Service Area -->


	<!-- Start Testimonials Area -->
	<!-- <section class="testimonials_area section-gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Testimonials Area -->




<?php
include("includes/footer.php");
?>