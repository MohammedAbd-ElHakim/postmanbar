<?php
include("connect.php");
// include("header.php");
session_start();
if(!isset($_SESSION['login'])){
   header('Location: login.php');
}else if(isset($_SESSION['login'])){
 echo "<br> اهلا بك ".$_SESSION['user']."<br>";
if(isset($_POST["title"])) {
  // تعريف المتغير $title
  $title=$_POST["title"];
}

if(isset($_POST["content"])) {
  // تعريف المتغير $post
  $post = $_POST["content"];
}

if(isset($_POST["send"])) {
  // تعريف المتغير $send
  $send=$_POST["send"];

  if(isset($send)){
      include("connect.php");
      $query= "INSERT INTO publishing(title,content) VALUES('$title','$post')";
      mysqli_query($conn,$query);
      echo "<div style='background-color:#3498db; color:#ffffff; margin-bottom:10px; padding:10px; border-radius: 5px; text-align: center;'> لقد تم انشاء اضافه البوست الخاص بك بنجاح   </div>";
      header('Location:article.php');
  }
}
}
?>