 <?php
if(isset($_POST["submit"])){
  include '_dbconnect.php';
  $fromname = $_POST["fromname"];
  $toname = $_POST["toname"];
  $amount = $_POST["amount"];

  $query = "SELECT * FROM customers where customer_name='$fromname'";
  $query_run = mysqli_query($conn,$query);
  foreach ($query_run as $row) {
      $fromamount = $row['customer_amount'];
  }
  
  if($fromamount >= $amount){
    $fromupdatedamount = $fromamount - $amount;
    $sql = "UPDATE `customers` SET `customer_amount` = '$fromupdatedamount' WHERE `customers`.`customer_name` = '$fromname'";
    $result = mysqli_query($conn,$sql);

    $query = "SELECT * FROM customers where customer_name='$toname'";
    $query_run = mysqli_query($conn,$query);
    foreach ($query_run as $row) {
      $toamount = $row['customer_amount'];
    }
    $toupdatedamount = $toamount + $amount;
    $sql = "UPDATE `customers` SET `customer_amount` = '$toupdatedamount' WHERE `customers`.`customer_name` = '$toname'";
    $result = mysqli_query($conn,$sql);

    $sql = "INSERT INTO `transfers` (`fromname`, `toname`, `amount`) VALUES ('$fromname', '$toname', '$amount')";
    $result = mysqli_query($conn,$sql);

    header("location: history.php");
  }
  else{
    header("location: history.php");
  }
  
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BANK</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title></title>
    <style>
    body{
      margin: 0;
      overflow: hidden;
    }
    .transfer-box{
      width: 540px;
      text-align: center;
      border-radius: 5px;
      background-color: #edf0f2;
      padding: 30px;
      margin: auto;
      margin-top: 80px;
    }
    input[type=text], textarea {
      width: 50%;
      padding: 10px 28px;
      margin: 8px;
      display: inline-block;
      border: 1px solid ;
      box-sizing: border-box;
    }
  </style>
  </head>
  <body style="background-color:#B8B5FF">
  
  <?php
if(isset($_POST['transfer_data_btn']))
{
  include '_dbconnect.php';
  $id = $_POST['transfer_id'];
  $query = "SELECT * FROM customers where customer_name='$id'";
  $query_run = mysqli_query($conn,$query);
  while($result = mysqli_fetch_assoc($query_run))
        {
    ?>
    
    <div class="transfer-box" style="margin-top: 130px;">
      <h4>TRANSFER MONEY</h4>
      <form class="contact-form" action="transfer.php" method="post">
        <input type="hidden" name="fromname" value="<?php echo $result['customer_name'] ?>">
        <input type="text" name="toname" placeholder="Transfer To" autocomplete="off">
        <input type="text" name="amount" placeholder="Amount" autocomplete="off"><br><br>
        <input type="submit" name="submit" class="btn btn-success" value="transfer"><br><br>
      </form>
      <form action="customer.php">
      <button type="submit" class="btn btn-secondary">Go Back</button>
    </form>
    </div>
    
<?php
  }
}
 ?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>
