<?php
header('Content-type: application/json');
$servername = 'localhost';
$username ='root';
$password = '';
$dbname = 'distibutore';

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error){
  var_dump('error');
  die();
}
$id=$_GET['id'];
$price=$_GET['price'];
$query = "
UPDATE drink
SET price =".$price."
WHERE id =".$id."
";
$res =$conn ->query($query);
$conn -> close();
echo json_encode($res);


?>
