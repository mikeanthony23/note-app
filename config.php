<?php 

$isDeployed = true;

if($isDeployed) {
define('DB_HOST', 'sql307.infinityfree.com');
define('DB_USER', 'if0_34815711');
define('DB_PASS', '0ZmmKmfk3o29yOu');
define('DB_NAME', 'if0_34815711_notes');
} else {
define('DB_HOST', 'localhost');
define('DB_USER', 'noteapp');
define('DB_PASS', '');
define('DB_NAME', 'note_app');
}
// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if($conn->connect_error) {
die('Connection Error' . $conn->connect_error );
}

// echo '<h1> CONNECTED!! </h1>'; 




?>