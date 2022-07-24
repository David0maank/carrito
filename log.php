
<?php


$dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="programacionnet";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if (!$conn)
{
die("No hay conexion:g".mysqli_connect_error());
}

$nombre=$_POST["id"];
$pass = $_POST["contraseña"];

$query = mysqli_query($conn,"SELECT * FROM customers WHERE name ='".$nombre."'and contraseña = '".$pass."'");
$nr =mysqli_num_rows($query);

if($nr==1)
{
header("Location:http://localhost/carrito/index.php" target="_blank");

echo"BIenvenido:" .$nombre;





}
else if ($nr == 0)
{



header("location:inicio.html");
echo"No ingreso";
}


?>


?>
