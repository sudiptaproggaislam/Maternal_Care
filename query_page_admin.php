<?php
// include("authentication.php");
include('partials/config.php');
$page_title = "Maternal Care";
include('partials/link.php');
include('partials/header.php');
if(!isset($_SESSION['authenticated'])){

    $_SESSION['status'] = "Please login to access this page";
    header("Location: login.php");
    exit(0);
}
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-expand-md " id="logo-nav" style="background-color: rgb(148, 203, 219,0.7) !important; " id="logonav">
    <div class="container-fluid" id="logo">
        <br>
        <div class="welcome text-center">
            <div class="col-12">
                <h1 id="bwe" class="display-4"><a class="navbar-brand" href="adminhomepage.php">
                        <img src="images/logo.png" alt="" width="60" height="55" class="jumbotron-heading " class="d-inline-block align-text-top"><span id="txt"><b> MATERNAL CARE</b></span>
                    </a></h1>
            </div>
        </div>
    </div>
</nav>
<?php include("partials/navbar-admin.php"); ?>
<!-- navigation ends -->
<?php
$my_user_id = $_SESSION['auth_user']['token'];
// $query = "SELECT * FROM post WHERE user_id = $my_user_id;";
$query = "SELECT * FROM post;";
$result = mysqli_query($con, $query);
$rows = mysqli_num_rows($result);


while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $user_name = $row['name'];
    $post_title = $row['post_title'];
    $post_content = $row['post_content'];
    $post_id = $row['post_id'];
    $post_date= $row['date'];

    $post_days = floor((strtotime("now")-strtotime($post_date)) / 86400)+1;

?>

    <div class="instagram-card card">
        <div class="instagram-card-header">
            <div class="d-flex">
                <div>
                <img src="images/logo.png" class="instagram-card-user-image" />
                </div>
                <div>
                    <div>
                    <a class="instagram-card-user-name" href="#"><?php echo $user_name ?></a>
                    </div>
                <div>
                    <a style="font-size: 10px;margin-left:10px;color:#999;"><?php echo "$post_days days ago"?></a>
                </div>
                </div>
            </div>
            
        </div>

        <div class="instagram-card-content">
            <h6 style="font-weight: 700;"><?php echo $post_title ?></h6>
            <span><?php echo $post_content ?></span>
            <br>
            <p class="comments">Comments</p>


            <!-- comments show-->
            <?php

            //Fetching Comment(count) for each row,means each post id ///FROM COMMENT TABLE
            $comment_query = "SELECT COUNT(comment_id) as comment_number FROM comments WHERE post_id='$post_id' GROUP BY post_id;";
            $comment_query_result = mysqli_query($con, $comment_query);
            $comment_query_row = mysqli_fetch_assoc($comment_query_result);
            //got the comment(count) for each post,now have to update it in the post table and show it in the card

            //checking if there is a comment for the post!
            if (!isset($comment_query_row['comment_number'])) {
                $comments = 0;
            } else {
                $comments = $comment_query_row['comment_number'];
            }

            ///Showing comments from the database if exists
            if ($comments > 0) {
                $comment_query = "SELECT comment,user_id,name FROM comments WHERE post_id='$post_id';";
                $comment_query_result = mysqli_query($con, $comment_query);

                while ($row = mysqli_fetch_assoc($comment_query_result)) {
                    $comment_user_id = $row['user_id'];
                    $comment = $row['comment'];
                    $comment_user_name = $row['name'];
            ?>

                    <b>@<?php echo $comment_user_name ?></b> <?php echo $comment ?></br>
            <?php
                }
            }
            ?>
            <!-- comments show end -->
            <hr>
        </div>

        <div class="instagram-card-footer">
            <form name="add-comment-form" action="query_page_admin.php" method="post" style="display: flex;">

                <input name="add_comment" class="comments-input" type="text" placeholder="Add Comment" style=" margin-right:10px;width: 400px;" />
                <button name="post_comment" style="margin:0px;border:none;" value="<?php echo $post_id; ?>"><p style="color:#5ead62;">Post</p></button>

            </form>
        </div>

    </div>
<?php }
// Add comment
if (isset($_POST['post_comment'])) {
    $post_comment = $_POST['add_comment'];
    $main_user_id = $_SESSION['auth_user']['token'];
    $post_id = $_POST['post_comment'];
    $user_name_comment=$_SESSION['auth_user']['username'];


    if (!empty($post_comment)) {
        $add_post_query = "INSERT INTO comments (post_id, user_id,name, comment) VALUES ('$post_id', '$main_user_id','$user_name_comment', '$post_comment');";
        $query_result = mysqli_query($con, $add_post_query);

        if ($query_result) {
            $_SESSION['status'] = "Comment Added";
            echo "<script> window.location.href='query_page_admin.php'; </script>";
        } else {
            $_SESSION['status'] = "Comment not Added";
            echo "<script> window.location.href='query_page_admin.php'; </script>";
        }
    }
}
// end add commnets
?>
<br>
<br>
<?php
include("partials/footer.php"); 
?>