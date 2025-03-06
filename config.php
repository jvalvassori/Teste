<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'task_manager';
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>