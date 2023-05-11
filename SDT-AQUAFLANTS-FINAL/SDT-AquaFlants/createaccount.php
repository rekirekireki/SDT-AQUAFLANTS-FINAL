<?php
session_start();
if (isset($_SESSION["userID"])) {
  header("location: landingpage.php");
  die();
}

include_once("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Create an Account</title>
  <link rel="stylesheet" type="text/css" href="createaccount.css">
</head>
<body>
    <video id="bg-video" autoplay muted loop>
        <source src="bgvid.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video> 
  <div class="container">
    <h1>Create an Account</h1>
    <form>
      <div class="form-group">
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" name="first-name" required>
      </div>
      <div class="form-group">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" name="last-name" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="button-group">
        <button class="primary" type="submit">Submit</button>
        <button class="secondary" type="button" onclick="window.location.href='index.html';">Cancel</button>
      </div>
    </form>
  </div>
</body>
</html>
