<?php
include('includes/config.php');


// write query for all customers
$sql = 'SELECT * FROM customer ORDER BY id';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

// testing using vardump
// var_dump($customers);

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
  <title>Customers</title>
  <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
  <main class="container" >
    <h1 class="title" >Customers</h1>
    <section class="content" >
    <!-- Looping through the resulting array -->
      <?php foreach($customers as $customer) { ?>
        <div class="customer-name">
        <!-- turning each result into a link to the next page -->
          <a href="customer.php?id=<?php echo $customer['id']; ?>">
            <h2>
              <?php echo $customer['last_name'] . ", "; ?>
              <?php echo $customer['first_name']; ?>
            </h2>
          </a> 
        </div>
        <div class="customer-contact">
        <!-- displaying customer contact info -->
            <p>
              <span class="txt-bold">Phone No:</span><?php echo $customer['phone']; ?> </p>
            <p>  
              <span class="txt-bold">Email:</span> <?php echo $customer['email']; ?> 
            </p>
        </div>
      <?php } ?>
    </section>
  </main>
</body>
</html>