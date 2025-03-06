<?php
include 'config.php';
$id = $_POST['id'];
$conn->query("DELETE FROM tasks WHERE id=$id");
?>