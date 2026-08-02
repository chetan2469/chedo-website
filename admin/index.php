<?php session_start(); if(isset($_SESSION['admin'])){ header('Location: dashboard.php'); exit; } ?>
<!DOCTYPE html>
<html><head><title>Admin Login</title><link rel="stylesheet" href="/assets/css/style.css"></head>
<body style="display:flex;align-items:center;justify-content:center;height:100vh;background:var(--background);">
<div class="card" style="width:360px;">
  <h2>Admin Login</h2>
  <form method="post" action="login-process.php">
    <label>Username</label><input type="text" name="username" required>
    <label>Password</label><input type="password" name="password" required>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
</body>
</html>
