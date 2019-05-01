<?php
/* This block was for an earlier version and is only for reference
echo"Hello world!";

$user = 'root';
$pass = '';
$db= 'testdb';
echo $db;

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $ps = $_POST['pw'];
  $optIn = $_POST['optIn'];
  echo "E-mail: ".$email."</br>"."Password: ".$pw."</br>"."Opt-in: ".$optIn;
}
*/



//Logic to keep user from viewing the page unless they're logged in

/*session_start();

if(isset($_SESSION['username'])){

  $_SESSION['msg'] = "You must be logged in to view this page";
  header("location : login.php");
}

if(isset($_GET['logout'])){

  session_destroy();
  unset($_SESSION['username']);
  header("location : login.php");

}*/

  include('process1.php')

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="./resources/css/reset.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="./resources/css/style.css">
     <title>Form Practice</title>
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
     <h1>The E-mail Trap</h1>
     <form class="col-lg-4 col-sm-12 col-md-8" name="register" action="process1.php" method="post">
       <fieldset>
         <legend>Registration</legend>
         <div class="form-group">
           <label for="email">Email address</label>
           <input type="email" class="form-control" name="email" size="20" id="email" aria-describedby="emailHelp" placeholder="Enter email">
           <small id="emailHelp" class="form-text text-muted">We'll totally share your email with marketers.</small>
         </div>
         <div class="form-group">
           <label for="password">Password</label>
           <input type="password" class="form-control" id="password" name="pw" placeholder="Just re-use a password">
         </div>
         <div class="form-group form-check">
           <input type="checkbox" class="form-check-input" id="optIn" name="optIn" value="true" checked>
           <label class="form-check-label" for="optIn">Yes! I want to be sent e-mails I'll never read!</label>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
     </fieldset>
     </form>
   </body>
 </html>
