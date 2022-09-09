<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbPractica01";

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error);
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "ALTER TABLE cargo
ADD CONSTRAINT FK_cargo_area
FOREIGN KEY (id_area) REFERENCES area(id_area)";

if ($conn->query($sql) === TRUE) {
  echo "Clave creada correctamente";
} else {
  echo "Error al crear la clave: " . $conn->error;
}

$conn->close();
?>