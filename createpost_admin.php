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





<!-- php -->

<!-- Popup Alert -->
<?php
if (isset($_SESSION['status'])) {
?>

  <div class="alert alert-success" role="alert" id="popup-alert" style="display: block;">

    <div class="alert-items" style="display: flex;justify-content: space-between;">
      <div class="popup-message">
        <?php echo $_SESSION['status']; ?>
      </div>

      <div class="close-button">
        <button class="close-button" onclick="myFunction()">x</button>
      </div>

    </div>


  </div>


<?php
  unset($_SESSION['status']);
}



if (isset($_POST['upload'])) {

  $user_id = $_SESSION['auth_user']['token'];
  $post_title = $_POST['post_title'];
  $post_content = $_POST['post_content'];
  $user_name_post=$_SESSION['auth_user']['username'];
  
  if (!empty($post_content)) {
  $post_query = "INSERT INTO post (name,user_id,post_title,post_content) VALUES ('$user_name_post','$user_id','$post_title','$post_content');";
  $post_query_result = mysqli_query($con, $post_query);



  if ($post_query_result) {
    $_SESSION['status'] = "Your Post Uploaded Successfully!";
    echo "<script> window.location.href='createpost_admin.php'; </script>";
  } else {
    $_SESSION['status'] = "Something Went Wrong!";
    echo "<script> window.location.href='createpost_admin.php'; </script>";
  }
}


}

?>

<!-- php end -->
<br>

<div class="container card m-auto ">
<div class="create-post">
    <div class="header-for-post">
    <h3><span style="color: rgb(40, 139, 45)">Create Post</span></h3>
    </div>
    <form action="createpost_admin.php" method="post" enctype="multipart/form-data">
      <div class="textarea-post-title">
        <input type="text" name="post_title" placeholder="Title" style="margin-left:10px;width: 50%;padding: 5px;border-radius: 5px;background-color: white;border: none;">
      </div>
      <div class="textarea-post">
        <textarea name="post_content" placeholder="What's on your mind?"></textarea>
      </div>

      <?php
    //   include("php_files/create_post_story_catagory.php");
      ?>

      <div>
      <button name="upload"  style="margin:0px;border:none;margin-left:10px;"><p style="color:#5ead62;font-size: 18px;">Upload</p></button>
      </div>
    </form>
</div>
</div>

<br>

<?php include("partials/footer.php"); ?>