<?php
 include("includes/header2.php")
?>

<!-- start banner Area -->
    <section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Portfolio
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="portfolio.php">Portfolio</a></p>
					</span>
				</div>
			</div>
		</div>
	</section>
<!-- End banner Area -->

<!-- Start Work Area Area -->
<section class="work-area section-gap-top section-gap-bottom-90" id="work">
		<div class="container">
			<div class="row d-flex justify-content-between align-items-end mb-80">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Latest Works</h2>
						<p>Check out some of my recent works.</p>
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
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Area Area -->

<!-- Start Work Area Area -->
    <!-- <section class="work-area section-gap-top section-gap-bottom-90" id="work">
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

				</div>
			</div>
		</div>
	</section> -->
	<!-- End Work Area Area -->

<?php
include("includes/footer.php")
?>