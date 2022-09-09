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
$sql =  "CREATE TABLE comisiones(
    id_comision INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    monto INT(12),
    concepto VARCHAR(12),
    fecha_comision DATE,
    id_persona INT(12) UNSIGNED
)";
if ($conn->query($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error al crear: "  .$conn->error;
}

$conn->close();
?>