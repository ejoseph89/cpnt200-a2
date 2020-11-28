<?php 

include ('includes/config.php');

// Ensiuring 'id' is not 'null' and is greater than zero
if (isset($_GET['id']) && (int)$_GET['id'] > 0) {

  $sql = 'SELECT * FROM customer WHERE id = ' . $_GET['id'];

  $result = mysqli_query($conn, $sql);

  $customer = mysqli_fetch_row($result);

  // testing to see if its working
  // var_dump($customer);

} else {
  // error for when id is not valid
  global $error_message;
  $error_message = 'Id not valid, try again';
}

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Customer</title>
</head>
<body>
  <main class="container">
    <h1 class="title" >Customer</h1>
    <section class="content">
      <div class="customer-name">
        <h2>
          <?php echo $customer[1]; ?>
          <?php echo $customer[2]; ?>
        </h2>
      </div>
      <div class="customer-contact">  
        <p>DOB: <?php echo $customer[3]; ?></p> 
        <p> Driver's License: <?php echo $customer[4]; ?></p>
        <p>Phone No: <?php echo $customer[6]; ?></p> 
        <p> Email: <?php echo $customer[5]; ?></p>
      </div>
    </section>
  </main>
  <a href="index.php" class="btn" >Go Back</a>
</body>
</html>