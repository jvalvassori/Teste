<?php
include 'config.php';
$result = $conn->query("SELECT * FROM tasks");
while ($row = $result->fetch_assoc()) {
    $checked = $row['status'] == 'completed' ? 'checked' : '';
    echo "<li class='list-group-item'>
            <input type='checkbox' class='toggleTask' data-id='{$row['id']}' $checked>
            " . $row['description'] . "
            <button class='btn btn-danger btn-sm float-end deleteTask' data-id='{$row['id']}'>Excluir</button>
          </li>";
}
?>