<?php
    $route = $_GET["route"];

    switch ($route){
      case "login": require __DIR__."/assignment1/login.php";break;
      case "post_login": require __DIR__."/assignment1/post_login.php";break;
      case "register": require __DIR__."/assignment1/register.php";break;
      case "post_register": require __DIR__."/assignment1/post_register.php";break;
      case "users": require __DIR__."/assignment1/users.php";break;
      case "edit": require __DIR__."/assignment1/edit.php";break;
      case "post_edit": require __DIR__."/assignment1/post_edit.php";break;
      case "delete": require __DIR__."/assignment1/delete.php";break;

      default: require __DIR__."/home.php";
    }
