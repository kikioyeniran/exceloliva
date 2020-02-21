<?php
 include("includes/header2.php")
?>
<!-- start banner Area -->
    <section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Blog Home
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="blog-home.php">Blog</a>
					</span>
				</div>
			</div>
		</div>
	</section>
<!-- End banner Area -->
<!-- Start top-category-widget Area -->
    <section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget1.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Real Estate</h4>
									<span></span>
									<p>Learn more about Real Estate Today</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget2.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Media and Marketing</h4>
									<span></span>
									<p>Take advantage of Media today</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget3.jpg" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Human Resource Management</h4>
									<span></span>
									<p>Understand Personnel More Now</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End top-category-widget Area -->

<!-- Start post-content Area -->
<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
                    <?php
                        $query2 = "SELECT * FROM blog ORDER BY id DESC LIMIT 3";
                        $result = $mysqli->query($query2) or die($mysqli->error);
                        while ($row = $result->fetch_assoc())
                        {
                            $dt = $row['dt'];
                            $new_dt = explode(" ", $dt);
                            $date = date("M, j, Y", strtotime($new_dt[0]));
                            $timw = $new_dt[1];
                            $new_dt2 = explode(",", $date);
                            $month = $new_dt2[0];
                            $day = $new_dt2[1];
                            $year= $new_dt2[2];
                            $timw = $new_dt[1];
                    ?>
                        <div class="single-post row">
                            <div class="col-lg-3  col-md-3 meta-details">
                                <ul class="tags">
                                    <li><a href="#">Media and Marketing,</a></li>
                                    <li><a href="#">Human Resource Management,</a></li>
                                    <li><a href="#">Real Estate</a></li>
                                </ul>
                                <div class="user-details row">
                                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Excel Oliva</a> <span class="lnr lnr-user"></span></p>
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $day. " ". $month. ", ". $year?></a> <span class="lnr lnr-calendar-full"></span></p>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 ">
                                <div class="feature-img">
                                    <img class="img-fluid" src="admin/images/<?php echo $row['picture'];?>" alt="">
                                </div>
                                <a class="posts-title" href="blog-single.php?blog=<?php echo urlencode($row['id']); ?>"><h3><?php echo $row['title']; ?></h3></a>
                                <p class="excert"><?php echo $row['summary']?></p>
                                <a href="blog-single.php?blog=<?php echo urlencode($row['id']); ?>" class="primary-btn" data-text="View More">
                                    <span>V</span>
                                    <span>i</span>
                                    <span>e</span>
                                    <span>w</span>
                                    <span> </span>
                                    <span>M</span>
                                    <span>o</span>
                                    <span>r</span>
                                    <span>e</span>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item"><a href="#" class="page-link">01</a></li>
							<li class="page-item active"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">04</a></li>
							<li class="page-item"><a href="#" class="page-link">09</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<!-- <div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div> -->
						<div class="single-sidebar-widget user-info-widget">
							<img src="img/newlogo.png" alt="">
							<a href="#"><h4>Excel Oliva</h4></a>
							<p>
								Blog writer
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>If there's any one reasonable to post on this it is I If there's any one reasonable
                                to post on this it is I If there's any one reasonable to post on this it is I If there's any one reasonable to post on this it is I </p>
						</div>
						<div class="single-sidebar-widget post-category-widget">
							<h4 class="category-title">Post Catgories</h4>
							<ul class="cat-list">
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Media and Marketing</p>
										<p>37</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Real Estate</p>
										<p>24</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Human Resource Management</p>
										<p>59</p>
									</a>
								</li>
								<!-- <li>
									<a href="#" class="d-flex justify-content-between">
										<p>Art</p>
										<p>29</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Food</p>
										<p>15</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Architecture</p>
										<p>09</p>
									</a>
								</li>
								<li>
									<a href="#" class="d-flex justify-content-between">
										<p>Adventure</p>
										<p>44</p>
									</a>
								</li> -->
							</ul>
						</div>
						<div class="single-sidebar-widget tag-cloud-widget">
							<h4 class="tagcloud-title">Tag Clouds</h4>
							<ul>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Architecture</a></li>
								<li><a href="#">Fashion</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Technology</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Adventure</a></li>
								<li><a href="#">Food</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Adventure</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End post-content Area -->
<!-- Horizontal bar -->
<div class="container">
		<hr>
	</div>
<?php
include("includes/footer.php")
?>