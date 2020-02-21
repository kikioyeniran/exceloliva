<?php
 include("includes/header2.php")
?>
<?php
    if(isset($_GET['blog'])){
        $id = $_GET['blog'];
        $query2 = "SELECT * FROM blog WHERE id={$id} LIMIT 1";
        $result = $mysqli->query($query2) or die($mysqli->error);
        $row = $result->fetch_assoc();
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
<!-- start banner Area -->
    <section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Blog Details
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="blog-home.php">Blog</a>
							<a href="#">Blog Details</a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</section>
<!-- End banner Area -->

<!-- Start post-content Area -->
    <section class="post-content-area single-post-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="admin/images/<?php echo $row['picture']; ?>" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Media and Marketing,</a></li>
								<li><a href="#">Real Estate,</a></li>
								<li><a href="#">Human Resouce Managment</a></li>
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">Excel Oliva</a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $day. " ". $month. ", ". $year?></a> <span class="lnr lnr-calendar-full"></span></p>
								<ul class="social-links col-lg-12 col-md-12 col-6">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<a class="posts-title" href="#"><h3><?php echo $row['title'];?></h3></a>
							<p class="excert"><?php echo $row['summary'];?></p>
							<p><?php echo $row['main_post'];?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
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

<?php
    include("includes/footer.php");
    }
    else{
    redirect_to("blog.php");
    }
?>