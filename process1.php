<?php
echo"Hello world!";

$user = 'root';
$pass = '';
$db= 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $ps = $_POST['pw'];
  $optIn = $_POST['optIn'];
  echo "E-mail: ".$email."</br>"."Password: ".$pw."</br>"."Opt-in: ".$optIn;


}
 ?>
