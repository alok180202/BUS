<?php
session_start();
header('index.php?page=home');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Online Bus Reservation System</title>
</head>

<body>
<?php 
  include 'header.php'; 
  include 'db_connect.php'; 
?>

<?php if(isset($_SESSION['login_id'])) include 'admin_navbar.php'; else include 'navbar.php'; ?>

<div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-body text-white">
  </div>
</div>

<?php 
    if(isset($_GET['page']) && !empty($_GET['page'])) {
        include($_GET['page'].'.php');
    } else {
        include('home.php');
    }
?>

<!-- The rest of your HTML and JavaScript goes here -->
</body>
</html>
