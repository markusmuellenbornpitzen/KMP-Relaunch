<?php
session_start();
$thisusername = $_POST['username'];
$thispassword = $_POST['password'];
$_SESSION['username'] = $thisusername;
$_SESSION['password'] = $thispassword;
//$thispassword = password_hash($thispassword, PASSWORD_DEFAULT);


// DB connection

$servername = "db1575.mydbserver.com";
$username = "p619698";
$password = "#Quantensprung2022";
$dbname = "usr_p619698_1";

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  echo("Database Error");
  die("Connection failed: " . $conn->connect_error);

}


//Connection Besteht dann überprüfe Login Daten

$sql = "SELECT username,password FROM fe_users WHERE username='$thisusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    if (password_verify($thispassword, $row["password"])) {
        echo 'useryes';


    }
    else{echo"usernot";}
}
}
$conn->close();


 ?>
