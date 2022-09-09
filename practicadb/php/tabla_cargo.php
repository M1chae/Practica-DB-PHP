<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbPractica01";

//creando la conexion
$conn = new mysqli($servername, $username, $password, $dbname);

//Verificando la conexión
if ($conn->connect_error){
    die("Falló de la conexión: "  .$conn->connect_error);

}
echo "Conexión correcta";

//SQL para crear tablas
$sql =  "CREATE TABLE cargo(
    id_cargo INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cargo VARCHAR(12),
    sueldo DECIMAL(12),
    id_persona INT (12) UNSIGNED,
    id_area INT(12) UNSIGNED
)";
if ($conn->query($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error al crear: "  .$conn->error;
}

$conn->close();
?>