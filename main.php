<?php

//Logic to keep user from viewing the page unless they're logged in

session_start();

if(isset($_SESSION['username'])){

  $_SESSION['msg'] = "You must be logged in to view this page";
  header("location : login.php");
}

if(isset($_GET['logout'])){ //Destroy session when user logs out

  session_destroy();
  unset($_SESSION['email']);
  header("location : login.php");

}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="./resources/css/reset.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="./resources/css/style.css">
     <title>Welcome</title>
   </head>
   <body>
     <h1>Gotcha!</h1>

    <?php //Will only show the folling html if the login is a success
      if(isset($_SESSION['success'])) : ?>

      <div class="">
        <h3>

          <?php
             //
             echo $_SESSION['success'];
             unset($_SESSION['success']);

           ?>
        </h3>
      </div>
    <?php endif ?>

    <?php //If user logs in then print info about him
      if(isset($_SESSION['email'])) : ?>
      <h3>Welcome <?php echo $_SESSION['email']; ?></h3>

      <button type="button" ><a href="main.php?logout='1'"></a></button>

    <?php endif ?>


   </body>
 </html>
