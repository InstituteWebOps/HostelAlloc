<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header center-block text-center">
      <a class="navbar-brand center-block text-center" href="index.php">Hostel Room Allocation</a>
    </div>
    <ul class="nav navbar-nav navbar-right text-center">
        <li><a href="http://students.iitm.ac.in">Back To Students Portal</a></li><?php
// Not needed since this is included after session_start() is already called
    if (isset($_SESSION['rollno'])) {
        echo "
        <li class=\"active\"><a>Welcome, ".$_SESSION['rollno']."</a></li>
        <li><a href=\"logout.php\">Log Out</a></li>";
        } else {
        echo "<li><a href=\"login.php\">Log In</a></li>";
            
        }
?>

    </ul>
  </div>
</nav>
