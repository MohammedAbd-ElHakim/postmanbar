<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/materialize/css/materialize.css">
  <link rel="stylesheet" href="./style/materialize/js/materialize.js">
  <link rel="stylesheet" href="./style/materialize/js/materialize.min.js">
  <link rel="stylesheet" href="/style/article.css">
  <link rel="stylesheet" href="/style/main.css">
  <!-- materialize.js -->
</head>
<body>

<?php
include ('connect.php');
include ('header.php'); 
// استرداد البيانات من قاعدة البيانات
$query = "SELECT * FROM publishing";
$result = mysqli_query($conn, $query);

// عرض البيانات في الصفحة
if (mysqli_num_rows($result) > 0) {
  echo '<div class="eco" style="margin:55px;">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="article">';
        echo '<h4>' . $row['title'] . '</h4>';
        echo '<p>' . $row['content'] . '</p>';
        echo  '<a href="#">.عرض المزيد.</a>';
        echo '</div>';
    }
    echo '</div>';

} else {
    echo '<p>لا يوجد بوستات متاحة حاليا</p>';
}


mysqli_close($conn);
?>
<!-- materialize -->


     <a href="#">.رؤيه المزيد.</a>
     <!-- jquery -->
    <script src="./design/jquery-3.6.4.js"></script>
    <!-- materialzie  js -->
    <script src="./design/materialize/js/materialize.min.js"></script>
    <!-- javascribt of side bar -->
    <script>
      $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
    <style>
      .navigation{
        margin-top: -55px;
      }
    </style>
</body>
</html>