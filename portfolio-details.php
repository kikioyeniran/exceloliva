<?php
 include("includes/header2.php")
?>
<?php
    if(isset($_GET['port'])){
        $id = $_GET['port'];
        $query2 = "SELECT * FROM portfolio WHERE id={$id} LIMIT 1";
        $result = $mysqli->query($query2) or die($mysqli->error);
        $row = $result->fetch_assoc();
?>

<!-- start banner Area -->
    <section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Portfolio Details
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="portfolio.php">Portfolio</a>
							<a href="#">Portfolio Details</a></p>
					</span>
				</div>
			</div>
		</div>
	</section>
<!-- End banner Area -->

<!-- Portfolio Details Area -->
    <section class="portfolio_details_area section-gap">
		<div class="container">
			<div class="portfolio_details_inner">
				<div class="row">
					<div class="col-md-6">
						<div class="left_img">
							<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
						</div>
					</div>
					<div class="offset-md-1 col-md-5">
						<div class="portfolio_right_text mt-30">
							<h4><?php echo $row['name']; ?></h4>
							<p><?php echo $row['description']?></p>
							<ul class="list">
								<li><span>Category</span>: <?php echo $row['category']?></li>
								<li><span>Website</span>: exceloliva.com.ng</li>
							</ul>
							<ul class="list social_details">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Details Area -->

<?php
    include("includes/footer.php");
    }
    else{
    redirect_to("portfolio.php");
    }
?>