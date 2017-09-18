<<<<<<< HEAD

//Add tables onto a Database 

<?php
include 'db_conn1.php';
// Adding  Members onto list into database.
$name = $_POST['name'];
$address = $_POST['address'];
$price = $_POST ['price'];

echo $name."<br>" ;
echo $address."<br>";
echo $price."<br>";


 
$sql = "INSERT INTO signUp_Table (name , address , price  ) 
VALUES ('$name ', '$address', '$price') ";

$result = mysqli_query($conn , $sql);
header("Location: index1.php");

?>
=======

//Add tables onto a Database 

<?php
include 'db_conn1.php';
// Adding  Members onto list into database.
$name = $_POST['name'];
$address = $_POST['address'];
$price = $_POST ['price'];

echo $name."<br>" ;
echo $address."<br>";
echo $price."<br>";


 
$sql = "INSERT INTO signUp_Table (name , address , price  ) 
VALUES ('$name ', '$address', '$price') ";

$result = mysqli_query($conn , $sql);
header("Location: index1.php");

?>
>>>>>>> ece586bf8601f251d5c9b80975a3e0463772b95c
<a href="http://localhost:8181/CVS/index1.php"> Click Here ..</a>