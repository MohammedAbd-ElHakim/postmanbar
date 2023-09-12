<?php
// include("header.php");
include('connect.php');
if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $username = $_POST['username'];
    $repass = $_POST['repass'];
    $pass = $_POST['pass'];
    if (!empty($username) && !empty($repass) && !empty($pass)) {
        $query = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$pass')";
    }
    if (mysqli_query($conn, $query)) {
        $_SESSION['user'] = $username;
        header('Location:index.php');
    } else {
        echo "حدث خطا عند محاوله ادخال المستخدم الجديد";
    }
} else {
    echo "الرجاء ملف الفارغات";
}



?>