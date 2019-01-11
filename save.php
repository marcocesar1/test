<?php 
require('db.php');

$name = $_POST['name'];

$sql = "insert into clientes(nombre) values ('Marco A.') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo $name;

 ?>