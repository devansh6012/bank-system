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
<body>
<?php include 'templates/navbar.php';?>

<div class="header">
  
    <h2 id="left-text" style="color:#293B5F;">Welcome to <span style="color:#F9F9F9">DG BANK</span> </h2><br><br>

  <img class="right-image" src="images/bank1.png" alt="">
</div> 

<div class="services">
  <h2 class="service-head">Services</h2>
  <img class="service-avatar" src="images/avatar.png" alt="">
  <img class="service-trans" src="images/transaction1.png" alt="">
  <img class="service-hist" src="images/hist1.png" alt="">
  <h5 class="avatar-txt">View Customers</h3>
  <h5 class="trans-txt">Transactions</h3>
  <h5 class="hist-txt">Transaction history</h3>
</div>

<?php include 'templates/footer.php';?>

</body>
</html>