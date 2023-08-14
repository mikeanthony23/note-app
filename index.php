<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Note App</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>

</head>

<body>

  <?php 

  define('DB_HOST', 'localhost');
  define('DB_USER', 'noteapp');
  define('DB_PASS', '');
  define('DB_NAME', 'note_app');

  // create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // check connection
  if($conn->connect_error) {
  die('Connection Error' . $conn->connect_error );
  }

  // echo '<h1> CONNECTED!! </h1>'; 

  $sql = 'SELECT * FROM notes';
  $result = mysqli_query($conn, $sql);
  $notes = mysqli_fetch_all($result, MYSQLI_ASSOC);

  php_logger(array_map(null,$notes));

   function php_logger($data) {
    $output = json_encode($data);
    echo "<script>console.log('{$output}' );</script>";
}


 ?>

  <header class="header">
    <div class="header__wrapper wrapper">
      <h1 class="header__title">Note List</h1>
    </div>
  </header>
  <aside class="menu">
    <div class="menu_wrapper wrapper">
      <button class="menu_add_btn btn">ADD A NOTE</button>
      <ul class="menu__list">
        <?php foreach ($notes as $item):?>
        <li class="menu__list_item">
          <a class="menu__list_title" href="javascript:;" data-id="<?php echo $item['id'] ?>">
            <?php echo $item['title'] ?> </a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </aside>
  <main class="content">
    <div class="content__form_area hidden">
      <form class="content__form" method="POST">
        <button type="button" class="content__form_close_btn">&times;</button>
        <input class="content__form_title content__form_fields" type="text" name="title" placeholder="title...">
        <textarea class="content__form_info content__form_fields" name="content" placeholder="content..."></textarea>
        <button class="content__form_btn btn">Submit</button>
      </form>

    </div>
    <h1>
      <?php if(!empty($_POST["title"]) && !empty($_POST["content"])) {
      $title = $_POST["title"];
      $content = $_POST["content"];
      $sql = "INSERT INTO notes (title, content) VALUES ('$title','$content');";
      mysqli_query($conn, $sql);
      mysqli_close($conn);
      echo "<script>
      if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
      }
      window.location = window.location.href;</script>";
      }?>

    </h1>
    <?php foreach ($notes as $item):?>
    <div class="content__wrapper wrapper hidden" data-id="<?php echo $item['id'] ?>">
      <h2 class="content__title">
        <?php echo $item['title'] ?>
      </h2>
      <div class="content__container">
        <p class="content__info">
          <?php echo $item['content'] ?>
        </p>
      </div>
    </div>
    <?php endforeach; ?>
  </main>
  <footer class="footer">
    <div class="footer_wrapper wrapper">
      <p class="footer_copyright_text"> Copyright 2023 - DHB</p>
    </div>
  </footer>

</body>

</html>