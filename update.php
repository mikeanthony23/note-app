<?php
@require 'config.php';

parse_str($_SERVER['QUERY_STRING'],$query);

$id = intval($query['id']);
$title = $query['updatedTitle'];
$content = $query['updatedContent'];

$sqlUpdate = "UPDATE notes SET title = '$title', content = '$content' WHERE id = $id;";

if (mysqli_query($conn, $sqlUpdate)) {
  header("Location: http://localhost/note-app/");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}