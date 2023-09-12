<?php
include("header.php");
include('connect.php');

?>

<link rel="stylesheet" href="./style/login.css">
<div class="containerOfForm">
  <div class="form-container">
    <?php
    if (!empty($_POST['username']) && !empty($_POST['repass']) && !empty($_POST['pass'])) {
      $username = $_POST['username'];
      $repass = $_POST['repass'];
      $pass = $_POST['pass'];
    
      if ($pass != $repass) {
        echo "<div style='background-color:#db345b; color:#ffffff; margin-bottom:10px; padding:10px; border-radius: 5px; text-align: center;'>كلمتي المرور غير متطابقتي</div>";
      } else {
        $query = "INSERT INTO users(username,password) VALUES ('$username','$pass')";
        if (mysqli_query($conn, $query)) {
          echo "<div style='background-color:#3498db; color:#ffffff; margin-bottom:10px; padding:10px; border-radius: 5px; text-align: center;'> لقد تم انشاء الحساب الجديد بنجاح </div>";
          // $_SESSION['user_name'] = $username;
          // header('Location:register.php');
        } else {
          echo "حدث خطا عند محاوله ادخال المستخدم الجديد";
        }
      }
    
    } else {
      echo "<div style='background-color:#db345b; color:#ffffff; margin-bottom:10px; padding:10px; border-radius: 5px; text-align: center;'>الرجاء ملئ الفراغات</div>";
    }
    ?>
    <form id="register-form" class="form" method="POST" action="">
      <h2>تسجيل حساب جديد</h2>
      <input type="text" id="register-username" name="username" placeholder="اسم المستخدم" >
      <input type="password" id="register-password" name="pass" placeholder="كلمة المرور" >
      <input type="password" id="register-repassword" name="repass" placeholder="قم باعاده كتابه كلمه السر" >
      <button type="submit">تسجيل</button>
      <p>لديك حساب بالفعل؟ <a href="login.php" id="to-login-form">تسجيل الدخول</a></p>
    </form>
  </div>
</div>
