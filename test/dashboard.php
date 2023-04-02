<?php
// Start session to access logged in user's information
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  // Redirect user to login page
  echo "NOT LOGGED IN";
 header("Location: login.php");
  exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);
// Retrieve user's first name and last name from database
$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE id = '$user_id'");
$row = $result->fetch_assoc();
$_SESSION['first_name'] = $row['first_name'];
$_SESSION['last_name'] = $row['last_name'];
$_SESSION['email'] = $row['email'];
$_SESSION['password'] = $row['password'];

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="container">
		<h1>Welcome, <span><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']  ; ?></span></h1>
		<p>What would you like to do?</p>
		<div class="button-container">
			<a href="update.php"><button >Update Account Info / View Account Info</button></a>
			<a href="delete.php"><button onclick="return confirmDelete()" >Delete Account</button></a>
      <a href="logout.php"><button onclick="return confirmLogout()">Logout</button></a>
		</div>
		<script>
  function confirmDelete() {
    if(confirm("Are you sure you want to delete this user's data?")) {
      return true;
    }
    else {
      return false;
    }
  }
    function confirmLogout() {
    if(confirm("Are you sure you want to Logout?")) {
      return true;
    }
    else {
      return false;
    }
  }
</script>
	</div>
</body>
</html>
