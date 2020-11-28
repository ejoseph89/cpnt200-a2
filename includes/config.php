  <?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

// check connection and redirect to error.php on connection failure
if(!$conn){
  header('location: error.php');
}

// Site-wide config
$site_title = "customer-admin."

?>
