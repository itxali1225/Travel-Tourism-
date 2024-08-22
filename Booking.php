
<?php
echo "Data is Inserted";
$insert=false;


$server = "localhost";
$username = "root";
$password = "";

$conn  = mysqli_connect($server, $username, $password);

//if(!$con){

  //  die ("Connection of this DataBase Fail Due to".mysqli_connect_error());
//}


$email = $_POST['email'];
$psw =$_POST['psw'];
$psw1 =$_POST['psw1'];
$psw2 =$_POST['psw2'];

  $sql="INSERT INTO `4season` . `Booking` (`wheree`, `quantity`, `arrival`, `leaving` ) VALUES ('$email', '$psw', '$psw1', '$psw2')";


//  echo $sql;

if(mysqli_query($conn,$sql)){
  echo 1;
  }
  else{
  echo 2;
  }
// $con->close();

// }

 ?>