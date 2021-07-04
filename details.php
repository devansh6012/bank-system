<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>BANK</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<style>
.details_container{
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
<body style="background-color:#99F3BD">

<h2 style="text-align:center;color:#CD5D7D;padding-top: 30px;">DETAILS</h2>
<?php
if(isset($_POST['view_data_btn']))
{
  include '_dbconnect.php';
  $id = $_POST['detail_id'];
  $query = "SELECT * FROM customers where customer_email='$id'";
  $query_run = mysqli_query($conn,$query);
  foreach ($query_run as $row) {
    ?>
    <br><br>
    <div class="details_container">
  <div class="card" style="width: 18rem;">
    <img src="images/img_avatar.png" class="card-img-top" alt="...">
    <div style="text-align:center;" class="card-body">
      <h5 class="card-title"><?php echo $row['customer_name'] ?></h5>
      <p class="card-text">Email: <?php echo $row['customer_email'] ?></p>
      <p class="card-text">Amount: <?php echo $row['customer_amount'] ?></p>
      <form action="transfer.php" method="post">
        <input type="hidden" name="transfer_id" value="<?php echo $row['customer_name'] ?>">
        <button type="submit" name="transfer_data_btn" class="btn btn-success">Transfer Money</button>
      </form>
    </div>
  </div>
</div>
<?php
  }
}
 ?>
</body>
</html>