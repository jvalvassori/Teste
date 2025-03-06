<?php
include 'config.php';
$id = $_POST['id'];
$result = $conn->query("SELECT status FROM tasks WHERE id=$id");
$row = $result->fetch_assoc();
$new_status = ($row['status'] == 'completed') ? 'pending' : 'completed';
$conn->query("UPDATE tasks SET status='$new_status' WHERE id=$id");
?>