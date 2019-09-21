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
$query = "
SELECT *
FROM drink
";
$res =$conn ->query($query);
if($res && $res -> num_rows > 0){
  while ($row = $res -> fetch_assoc()) {
  $bevande[]=$row;
  }
}

$conn->close();
echo json_encode($bevande);


?>
