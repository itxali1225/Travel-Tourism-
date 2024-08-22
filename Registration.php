
<?php
echo "Data is Inserted";
$insert=false;


$server = "localhost";
$username = "root";
$password = "";

$con  = mysqli_connect($server, $username, $password);

//if(!$con){

  //  die ("Connection of this DataBase Fail Due to".mysqli_connect_error());
//}


$email = $_POST['email'];
$psw =$_POST['psw'];
$psw_repeat =$_POST['psw_repeat'];

  



//  echo $sql;

if(mysqli_query($con,$sql)){
  echo 1;
  }
  else{
  echo 2;
  }
// $con->close();

// }

 ?>