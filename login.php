<?php
include("header.php");
include('connect.php');
// session_start();

?>

<link rel="stylesheet" href="./style/login.css">
<div class="containerOfForm">
  <div class="form-container">
    <?php
    if(isset($_POST['submit'])) {
      // جلب البيانات من الفورم وتنقية البيانات من أي خطورة
        if (empty($_POST['username']) || empty($_POST['password'])) {
          // رسالة خطأ لعدم ملء الحقول
          echo "<div style='background-color:#db345b; color:#ffffff; margin-bottom:10px; padding:10px; border-radius: 5px; text-align: center;'>الرجاء ملئ الفراغات</div>";
        }else{
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


        // استعلام قاعدة البيانات بشرط تطابق اليوزرنيم والباسوورد المدخلين من الفورم
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $dataOfsql = mysqli_query($conn, $query);

        if (mysqli_num_rows($dataOfsql) > 0) {
          $_SESSION['user_name'] = $username;
          $_SESSION['login'] = true;
          header('Location: index.php');
          exit();
        }else {
          echo "<div style='background-color:#db345b; color:#ffffff; margin-bottom:10px; padding:10px; border-radius: 5px; text-align: center;'>  اسم المستخدم او كلمه المرور غير صحيحه</div>";
        }
      }
      // إغلاق الاتصال بقاعدة البيانات
      mysqli_close($conn);
    }
    ?>
    <h2>تسجيل الدخول</h2>
    <br>
    <form id="login-form" class="form" method="POST" action="">
      <input type="text" id="login-username" name="username" placeholder="اسم المستخدم">
      <input type="password" id="login-password" name="password" placeholder="كلمة المرور">
      <button type="submit" name="submit">تسجيل الدخول</button>
      <p>ليس لديك حساب؟ <a href="register.php" id="to-register-form">تسجيل حساب جديد</a></p>
    </form>
  </div>
</div>