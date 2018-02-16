<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');
  $ip = $_SERVER['REMOTE_ADDR'];
  //echo $ip;
  if(isset($_POST['submit'])){
    //echo "Works";
    $username = trim($_POST['username']); //trim makes sure if whitespace is accidently copied that it won't impact anything
    $password = trim($_POST['password']);
    if($username !== "" && $password !== "") { // !== equals not identical to but != is not equals to so basically neither can be empty
      $result = logIn($username, $password, $ip);
      $message = $result;
    }else{
      $message = "Please fill out the required fields.";
    }
  }

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,600%7CRoboto:300,400" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<title>Welcome to your admin panel login</title>
</head>
<body id="loginBack">

  <div id="loginPageCon">
    <h1>Welcome to the Movie Review App</h1>
    <div id="formCon">
      <form action="admin_login.php" method="post" id="loginForm">
        <h2>Login</h2>
        <label>Username:</label>
        <input type="text" name="username" value="">
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" value="">
        <br>
        <!-- this means not empty on the load of page -->
        <p id="error"><?php if(!empty($message)){ echo $message;} ?></p>
        <input type="submit" name="submit" value="Login" id="submitButton">
      </form>
    </div>
  </div>

</body>
</html>
