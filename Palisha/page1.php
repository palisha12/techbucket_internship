<?php
header("Access-Control-Allow-Origin:*");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "palisha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table



// $sql = "INSERT INTO myguests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO myguests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO myguests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";
//  if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
$sql="SELECT * from myguests";
$result = $conn->query($sql);

$emparry=array();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $emparry[]=$row;
//  $obj->firstname = $row["firstname"];
// $obj->lastame = $row["lastname"];
// $obj->email = $row["email"];
  }
} else {
  echo "0 results";
}
// $myJSON = json_encode($obj);
// echo $myJSON;
echo  json_encode(['phpresult'=>$emparry]);
$conn->close();
?>