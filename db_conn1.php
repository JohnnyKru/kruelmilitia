
<?php
echo  "YOUR  DATABASE" ;
$host ='localhost';
$user = 'root';
$pass ='';
$db ='sign_up';

$conn = mysqli_connect($host,$user,$pass,$db) or die ("Error Connection");
  if($conn)
    echo  "YOUR CONNECTED ";

?>


