<?php

  session_start();

  function confirm_logged_in() {
    if(!isset($_SESSION['user_id'])){ // !isset means is not set
      redirect_to("admin_login.php"); // so if it is not set then send user to admin_login.php
    }
  }

?>
