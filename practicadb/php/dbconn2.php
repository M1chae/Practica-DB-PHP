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
$sql = "ALTER TABLE destino
ADD CONSTRAINT FK_destino_persona
FOREIGN KEY (id_persona) REFERENCES persona(id_persona)";

if ($conn->query($sql) === TRUE) {
  echo "Clave creada correctamente";
} else {
  echo "Error al crear la clave: " . $conn->error;
}

$conn->close();
?>