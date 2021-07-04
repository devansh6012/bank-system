<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bankmanage";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{

}
?>

<!-- INSERT INTO `customers` (`customer_name`, `customer_email`, `customer_amount`) VALUES ('devansh', 'devansh.g6012@gmail.com', '1200000'); -->