<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>

<?php
if(isset($_POST['insert']))
{
    $title = addslashes($_POST['title']);
    $description = addslashes($_POST['description']);
    $link = $_POST['link'];
    $query = "INSERT INTO videos(title, description, link) Values ('$title', '$description', '$link')";
    if($mysqli->query($query) or die($mysqli->error))
    {
        echo "<script>alert('Project Added Succesfully')</script>";
    }
    else{
        echo "<script>alert('Error Connecting to the Database')</script>";
    }
}
?>

<?php
 include("includes/header.php")
?>


<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Home</h2>
                                <p class="pageheader-text">Edit Projects</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->


                    <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Add New Video</h5>
                                    <div class="card-body">
                                        <form method="post" action="videos.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Link</label>
                                                <input id="inputText3" type="text" class="form-control" name="link">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="description"></textarea>
                                            </div>
                                            <input type ="submit" name = "insert" id= "insert" value="Submit" class="btn btn-primary">
                                        </form>
                                    </div>
                                 </div>
                     </div>
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-center">Click the Title to edit the post</h3>
                    </div>

                    <?php
                        $query2 = "SELECT * FROM videos ORDER by id DESC";
                        $result = $mysqli->query($query2) or die($mysqli->error);
                        while ($row = $result->fetch_assoc())
                        {?>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <a href = "edit.php?video=<?php echo urlencode($row['id']); ?>"><h5 class="card-header">Title: <?php echo $row['title']; ?></h5></a>
                                            <div class="card-body">
                                                <div class="metric-value d-inline-block">
                                                <h4 class="mb-1">Link: <?php echo $row['link']; ?></h4>
                                                </div>
                                            </div>
                                            <div class="card-body bg-light">
                                                <h6><?php echo $row['description']; ?><h6>
                                            </div>
                                            <div class="card-footer text-center bg-white">
                                            <a href = "delete.php?videoid=<?php echo  urlencode($row['id']); ?>" onclick="return confirm('Are you sure you want to delete this picture?');">Delete Post</a>
                                            </div>
                                        </div>
                                </div>

                        <?php }

                        ?>



                    </div>

</div>
<?php
include("includes/footer.php");
?>