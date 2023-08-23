<?php
@require '../config.php';

$host = $_SERVER['HTTP_HOST'];

parse_str($_SERVER['QUERY_STRING'],$query);

$id = intval($query['id']);
$title = $query['updatedTitle'];
$content = $query['updatedContent'];

$sqlUpdate = "UPDATE notes SET title = '$title', content = '$content' WHERE id = $id;";

echo $host = $_SERVER['HTTP_HOST'];

if (mysqli_query($conn, $sqlUpdate)) {
  header("Location: http://$host/");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}