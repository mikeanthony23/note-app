<?php
@require '../config.php';

$host = $_SERVER['HTTP_HOST'];

$idToDelete = $_GET['id'];
echo $idToDelete;

$sqlDelete = "DELETE FROM notes WHERE id=$idToDelete";

if (mysqli_query($conn, $sqlDelete)) {
  header("Location: http://$host/");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}