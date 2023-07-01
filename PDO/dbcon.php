<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'user';
 
  $conn = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );

  if ( $conn->connect_error) {
    echo 'Errno: '. $conn->connect_errno;
    echo '<br>';
    echo 'Error: '. $conn->connect_error;
    exit();
  }

//   echo 'Success: A proper connection to MySQL was made.';
//   echo '<br>';
//   echo 'Host information: '.$mysqli->host_info;
//   echo '<br>';
//   echo 'Protocol version: '.$mysqli->protocol_version;

$query = "SELECT * FROM `users`";

 $result = $conn->query($query);


 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " <br>Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>" . $row["created"]. "<br><br>";
    }
  } else {
    echo "0 results";
  }




$conn->close();