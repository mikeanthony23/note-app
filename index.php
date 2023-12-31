<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Note App</title>

  <link rel="stylesheet" href="style.min.css">

  <script defer src="script.min.js"></script>



</head>



<body>



  <?php

   @require 'config.php';

   @require 'data.php';

  ?>



  <header class="header">

    <div class="header__wrapper wrapper">

      <h1 class="header__title">Notes List</h1>

    </div>

  </header>



  <aside class="menu">

    <div class="menu_wrapper wrapper">

      <button class="menu_add_btn btn">ADD A NOTE

      </button>

      <ul class="menu__list">

        <?php foreach ($notes as $item):?>

        <li class="menu__list_item">

          <a class="menu__list_title" href="javascript:;" data-id="<?php echo $item['id']; ?>">

            <?php echo $item['title'] ?> </a>

          <a href="extras/delete.php?id=<?php echo $item['id'];?>"
            class="menu__delete_btn_main_category delete_btn"></a>

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

        <button class="content__form_btn btn" name="submit">Submit</button>

      </form>

    </div>

    <?php 



    

    if((!empty($_POST["title"]) && !empty($_POST["content"])) && isset($_POST['submit'])) {



      $title = $_POST["title"];

      $content = $_POST["content"];



      $sql = "INSERT INTO notes (title, content) VALUES ('$title','$content');";



      mysqli_query($conn, $sql);

      echo "<script>

      if ( window.history.replaceState ) {

      window.history.replaceState( null, null, window.location.href );

    }

    window.location = window.location.href;</script>";

    } 

    

    





  

  ?>



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

      <button class="content__update-btn btn" data-id="<?php echo $item['id'] ?>">Update</button>

      <div
        class="content__form_area content__form_area-update content__form_area-update--<?php echo $item['id'] ?> hidden">

        <form class="content__form content__form-update" action="extras/update.php" method="GET">

          <button type="button" class="content__form_close_btn content__form_close_btn--update"
            data-id="<?php echo $item['id'] ?>">&times;</button>

          <input class="content__form_title content__form_fields" type="text" name="updatedTitle"
            placeholder="title...">

          <textarea class="content__form_info content__form_fields" name="updatedContent"
            placeholder="content..."></textarea>

          <button class="content__form_btn content__form_btn--update btn" data-id="<?php echo $item['id'];?>"
            value="<?php echo $item['id'];?>" name="id">Update</button>

        </form>

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