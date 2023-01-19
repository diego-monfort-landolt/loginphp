<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//condicional si una vez no hay conecion muestre error
if (!$conn) {
    die("Conection is failed: " .mysqli_connect_error());
}

$nombre = $_POST["Usuario"];
$pass = $_POST["Password"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    //header("Location: pagina.html")
    echo "Welcome:" .$nombre;
}
else if ($nr == 0) {
    header("Location: login.html");
    //echo "User not registred";
}



?>
