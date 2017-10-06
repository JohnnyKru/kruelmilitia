<?php 
$host ='localhost';
$user = 'root';
$pass ='';
$db ='kruelmilitia';

$conn = mysqli_connect($host,$user,$pass,$db) or die ("Error Connection");
  if($conn)
   echo  "YOUR ARE CONNECTED TO KRUEL MILITIA DATABASE."."<br/>";

$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST ['email'];								
$phone = $_POST ['phone'];
$username = $_POST ['username'];	
$makePassword = $_POST ['makePassword'];	
$confirmPW = $_POST ['confirmPW'];

echo $name ."<br />";
echo $last ."<br />";
echo $email ."<br />";
echo $phone ."<br />";
echo $username ."<br />";
echo $makePassword ."<br />";
echo $confirmPW ."<br />";


$sql = "INSERT INTO signupmembers (firstname, lastname, e_mail, phone, user_name, make_Password, confirm_PW ) 
VALUES ('$name', '$last', '$email', '$phone' , '$username', '$makePassword','$confirmPW')";

$result = mysqli_query($conn , $sql);

?>