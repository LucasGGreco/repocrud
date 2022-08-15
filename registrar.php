<?php
include("bd.php");
ini_set('display_errors', 1);
if (isset($_POST['save_task'])) {
    $titulo = $_POST['titulo'];
    $query = "INSERT INTO dato (titulo) VALUES ('$titulo')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed.");
    }
    echo "guardado";
}

echo mysqli_error($result);
