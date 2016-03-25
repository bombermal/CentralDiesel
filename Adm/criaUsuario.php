<?php
include "../Class/link.php";

$senha = md5(123);

$sql = "INSERT INTO usuarios (login, senha, nome, email, tipo,reg_date)
VALUES ('gato', '".$senha."', 'Ivanilson Nunes Lima', 'gatodiesel66@hotmail.com', '1', NOW())";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>