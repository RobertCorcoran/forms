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
     <nav class="navbar navbar-expand-lg  ">
       <a class="navbar-brand" href="https://github.com/RobertCorcoran">Robert's Office</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">About</a>
           </li>
         </ul>

       </div>
     </nav>
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
      <div class="container">
        <button type="button" class="tbn btn-primary" ><a href="main.php?logout='1'">Log Out</a></button>
      </div>


    <?php endif ?>


   </body>
 </html>
