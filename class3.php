<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>

  <button type="submit" class="btn btn-primary" name="insert">Insert</button>
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Abbas";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$email = $_REQUEST['email'];
$password = $_REQUEST['pass'];

$insert = "INSERT INTO teachers VALUES ('','$email', '$password')";

if (mysqli_query($conn, $insert)) {
    echo "<h3>data stored in a database successfully.</h3>";

} else {
    echo "ERROR:  Sorry $sql. "
    . mysqli_error($conn);
}

mysqli_close($conn);



?>
</body>
</html>