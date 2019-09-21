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
$query = "
DELETE
FROM drink
WHERE ID=".$id."
";

$res =$conn ->query($query);

$conn->close();
echo json_encode($res);


?>
