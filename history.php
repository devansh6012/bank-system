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
<body style="background-color:#CAF7E3">
<?php include 'templates/navbar.php';?>

<div style="text-align:center">
  <br><h2 id="gal">TRANSFER HISTORY</h2>
</div>

<table style="width:70%;margin-left: auto;margin-right: auto;" class="table table-secondary table-striped">
      <tr>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Amount</th>
      </tr>
    <?php

    include '_dbconnect.php';
    $query = "SELECT * FROM transfers";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

        while($result = mysqli_fetch_assoc($data))
        {
        ?>
          <tr>
          <td><?php echo $result['fromname']?></td>
          <td><?php echo $result['toname']?></td>
          <td><?php echo $result['amount']?></td>
          </tr>
        <?php

        }
    ?>
   </table>
  

</body>
</html>