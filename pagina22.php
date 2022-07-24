<html>
<head>
  <title>insertar</title>
</head>
<body>
 <?php
 $conexion = mysqli_connect("localhost", "root", "", "programacionnet") or 
  die("problemas de la conexion ");
mysqli_query($conexion, "insert into customers(name,email,address,contraseña,phone) values
('$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[address]','$_REQUEST[contraseña]','$_REQUEST[phone]')")
  or die("problemas en el select" . mysqli_error($conexion));
mysqli_close($conexion);
echo "usuario listo";
header("Location:http://localhost/carrito/reini.html");

?>
</body>
</html> 