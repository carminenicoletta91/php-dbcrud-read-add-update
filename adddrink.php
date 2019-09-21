<?php
header('Content-type: application/json');
$servername='localhost';
$username ='root';
$password='';
$dbname='distibutore';

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn -> connect_error){
  var_dump("errore");
  var_dump($conn);
  die();
}
$name=$_GET['name'];
$brand=$_GET['brand'];
$price=$_GET['price'];
$expiry=$_GET['expiry'];
$query ="
INSERT INTO drink(name,brand,price,expiry)
VALUES
('".$name."','".$brand."',".$price.",'".$expiry."')
";
$res = $conn -> query($query);
$conn ->close();
echo json_encode($res);
?>
