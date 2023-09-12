<?php
include('header.php');
include("connect.php");
?>
  <link rel="stylesheet" href="./style/createpost.css">

<?php
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
} else if (isset($_SESSION['login'])) {
  if (isset($_POST["title"])) {
    // تعريف المتغير $title
    $title = $_POST["title"];
  }

  if (isset($_POST["content"])) {
    // تعريف المتغير $post
    $post = $_POST["content"];
  }

  if (isset($_POST["send"])) {
    // تعريف المتغير $send
    $send = $_POST["send"];

    if (isset($send)) {
      include("connect.php");
      $query = "INSERT INTO publishing(title,content) VALUES('$title','$post')";
      mysqli_query($conn, $query);
      echo "<div style='background-color:#3498db; width: fit-content; color:#ffffff; margin-bottom:10px; padding:10px; margin: 25px auto; border-radius: 5px; text-align: center;'> لقد تم انشاء اضافه البوست الخاص بك بنجاح   </div>";
    }
  }
}
?>
<form method="POST" action="#">
  <label for="post-title">عنوان البوست:</label>
  <input type="text" id="post-title" name="title" required>

  <label for="post-content">محتوى البوست:</label>
  <textarea id="post-content" name="content" required></textarea>

  <button type="submit" name="send">نشر</button>
</form>
<style>
  .navigation{
    margin-top:-25px;
  }
</style>
</body>

</html>
