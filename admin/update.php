<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php


//Portfolio Update Function===================================================================================================
if(isset($_POST["upd_portfolio"]))
	{
        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('name','description', 'category');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
				}
			}
        if(empty($errors))
        {
			$id = mysql_prep($_GET['portfolio']);
			$name = mysql_prep($_POST['name']);
            $description = mysql_prep($_POST['description']);
            $category = mysql_prep($_POST['category']);
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE portfolio SET name = '{$name}', description = '{$description}', category = '{$category}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE portfolio SET name = '{$name}', picture = '{$image}', description = '{$description}' category = '{$category}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    redirect_to("portfolio.php");
                    //header("Location: portfolio.php");
                }
                else
                {
                    echo "<script>alert(\"The portfolio post update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }

    }

//Videos Update Function===================================================================================================
if(isset($_POST["upd_videos"]))
	{
        $target = "images/".basename($_FILES['image']['name']);
		$errors = array();
		$required_fields = array('title', 'link', 'description');
		foreach($required_fields as $fieldname){
			//var_dump($_POST[$fieldname]);
			if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
				$errors[] = $fieldname;
				}
			}
        if(empty($errors))
        {
			$id = mysql_prep($_GET['video']);
			$title = mysql_prep($_POST['title']);
            $link = mysql_prep($_POST['link']);
            $description = mysql_prep($_POST['description']);
            $query = "UPDATE videos SET title = '{$title}', link = '{$link}', description = '{$description}' WHERE id = {$id} ";

            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                    redirect_to("videos.php");
                    //header("Location: portfolio.php");
                }
                else
                {
                    echo "<script>alert(\"The portfolio post update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }
        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }

    }

//About Update Function===================================================================================================
if(isset($_POST["upd_about"]))
    {
        $target = "images/".basename($_FILES['image']['name']);
        $errors = array();
        $required_fields = array('profile');
        foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
            if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
                $errors[] = $fieldname;
                }
        }
        if(empty($errors))
        {
            $id = 1;
            $profile = mysql_prep(nl2br($_POST['profile']));
            $image = $_FILES['image']['name'];
            if(empty($image)){
                $query = "UPDATE about SET profile = '{$profile}' WHERE id = {$id} ";
            }else{
                $query = "UPDATE about SET profile = '{$profile}', picture = '{$image}' WHERE id = {$id} ";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
            }
            if($result = $mysqli->query($query) or die($mysqli->error))
            {
                confirm_query($result);
                if(mysqli_affected_rows($mysqli) == 1)
                {
                echo "<script>alert(\"The details were succesfully updated\")<script>";
                redirect_to("about.php");
                }
                else
                {
                echo "<script>alert(\"The update failed\")<script>";
                }

            }
            else
            {
                echo "<script>alert('Info not inserted into the database')</script>";
                echo mysql_error();
            }

        }
        else
        {
            echo "there r errors";
            var_dump($errors);
        }
    }


//Blog Update Function===================================================================================================
if(isset($_POST["upd_blog"]))
{
    $target = "images/".basename($_FILES['image']['name']);
    $errors = array();
    $required_fields = array('title', 'summary', 'main_post', 'dt');
    foreach($required_fields as $fieldname){
        //var_dump($_POST[$fieldname]);
        if(!isset($_POST[$fieldname]) || (empty($_POST[$fieldname])))   {
            $errors[] = $fieldname;
            }
        }
    if(empty($errors))
    {
        $id = mysql_prep($_GET['blog']);
        $title = mysql_prep($_POST['title']);
        $summary = mysql_prep($_POST['summary']);
        $main_post = nl2br(addslashes($_POST['main_post']));
        $date = mysql_prep(date('y-m-d H:i:s', strtotime($_POST['dt'])));
        $image = $_FILES['image']['name'];
        if(empty($image)){
            $query = "UPDATE blog SET title = '{$title}', dt = '{$date}', summary = '{$summary}', main_post = '{$main_post}' WHERE id = {$id} ";
        }else{
            $query = "UPDATE blog SET title = '{$title}', dt = '{$date}', picture = '{$image}', summary = '{$summary}', main_post = '{$main_post}' WHERE id = {$id} ";
            move_uploaded_file($_FILES['image']['tmp_name'], $target);
        }
        if($result = $mysqli->query($query) or die($mysqli->error))
        {
            confirm_query($result);
            if(mysqli_affected_rows($mysqli) == 1)
            {
                header("Location: blog.php");
            }
            else
            {
            echo "<script>alert(\"The blog post update failed\")<script>";
            }

        }
        else
        {
            echo "<script>alert('Info not inserted into the database')</script>";
            echo mysql_error();
        }
    }
    else
    {
        echo "there r errors";
        var_dump($errors);
    }

}
?>