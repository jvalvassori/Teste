<?php
include 'config.php';
$description = $_POST['description'];
$conn->query("INSERT INTO tasks (description) VALUES ('$description')");
?>