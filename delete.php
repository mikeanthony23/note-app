<?php
@require 'config.php';

$idToDelete = $_GET['id'];
echo $idToDelete;

$sqlDelete = "DELETE FROM notes WHERE id=$idToDelete";

if (mysqli_query($conn, $sqlDelete)) {
  header("Location: http://localhost/note-app/");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}