<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php

if(isset($_GET['portfolioid']))
{
    $id = mysql_prep($_GET['portfolioid']);
    if($id)
    {$query = "DELETE FROM portfolio WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: portfolio.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("videos.php");
            header("Location: portfolio.php");
            }
}

if(isset($_GET['videoid']))
{
    $id = mysql_prep($_GET['videoid']);
    if($id)
    {$query = "DELETE FROM videos WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: videos.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("videos.php");
            header("Location: videos.php");
            }
}

if(isset($_GET['blogid']))
{
    $id = mysql_prep($_GET['blogid']);
    if($id)
    {$query = "DELETE FROM blog WHERE id = {$id} LIMIT 1";
        $result = $mysqli->query($query) or die($mysqli->error);
        if(mysqli_affected_rows($mysqli) == 1){
            header("Location: blog.php");
            }
            else{
                //Deletion Failed
                echo "<script>alert(\"Image deleted from database\")<script>";
                echo "<p>" .  mysql_error() .  "</p>";
                echo "<a href = 'event.php'>Return to Main Page</a>";
                }
        }else{
            //subject didn't exist in  database
            //redirect_to("blog.php");
            header("Location: blog.php");
            }
}

?>
