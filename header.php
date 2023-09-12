<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/article.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="./style/main.css">
  <link rel="stylesheet" href="./style/session.css">
  <link rel="stylesheet" href="./style/article.css">

  <title>منبر البوستات</title>
</head>

<body>
 

    <!-- navbar -->
  <div class="navigation">
    <ul>
      <li>
        <a href="index.php">
          <span class="icon"><i class="fa-solid fa-house"></i></span>
          <span class="title">الصفحه الرئيسيه</span>
        </a>
      </li>
      <!-- <li>
                <a href="#">
                    <span class="icon"></span>
                    <span class="icon">Home</span>
                </a>
            </li> -->
      <li>
        <a href="">
          <span class="icon"><i class="fa-solid fa-user"></i></span>
          <span class="title">
          <?php 
            session_start();
           if(isset( $_SESSION['user_name'])) {
           echo "مرحبا ". $_SESSION['user_name'];
           } else {
           echo "حسابك";
           }
           ?>

            </span>
        </a>
      </li>
      
      <li>
        <a href="logout.php">
          <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
          <span class="title" href="logout.php">الخروج</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="toggle" onclick="toggleMenu()"></div>
  <script type="text/javascript">
    function toggleMenu() {
      let navigation = document.querySelector('.navigation');
      let toggle = document.querySelector('.toggle');
      navigation.classList.toggle('active');
      toggle.classList.toggle('active');
    }

  </script>