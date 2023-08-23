<?php

$sql = 'SELECT * FROM notes';
$result = mysqli_query($conn, $sql);
$notes = mysqli_fetch_all($result, MYSQLI_ASSOC);