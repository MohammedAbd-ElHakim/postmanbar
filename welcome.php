<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<h1>مرحبا بك, <?php echo htmlspecialchars($_SESSION["$_POST[username]"]); ?></h1>