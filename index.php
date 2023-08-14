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

  <header class="header">
    <div class="header__wrapper wrapper">
      <h1 class="header__title">Note List</h1>
    </div>
  </header>
  <aside class="menu">
    <div class="menu_wrapper wrapper">
      <button class="menu_add_btn btn">ADD A NOTE</button>
      <ul class="menu__list">
        <li class="menu__list_item">
          <a class="menu__list_title" href="javascript:;">HTML</a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
          <ul class="menu__sub_list hidden">
            <li>
              <button class="menu__add_sub_category_btn btn">Add Category</button>
            </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Section</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Forms</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Imgs with Section</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
          </ul>
        </li>
        <li class="menu__list_item"> <a class="menu__list_title" href="javascript:;">CSS</a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
          <ul class="menu__sub_list hidden">
            <li class="menu__sub_list_item"> <a href="javascript:;"> Section</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Forms</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Imgs with Section</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
          </ul>
        </li>
        <li class="menu__list_item"> <a class="menu__list_title" href="javascript:;">JS</a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
          <ul class="menu__sub_list hidden">
            <li class="menu__sub_list_item"> <a href="javascript:;"> Moving Animations</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Parallax</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Sitck on to top</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
          </ul>
        </li>
        <li class="menu__list_item">
          <a class="menu__list_title" href="javascript:;">SHORT CODES</a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
          <ul class="menu__sub_list hidden">
            <li class="menu__sub_list_item"> <a href="javascript:;"> Moving Animations</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Parallax</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Sitck on to top</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
          </ul>
        </li>
        <li class="menu__list_item"> <a class="menu__list_title" href="javascript:;">WIDGETS</a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
          <ul class="menu__sub_list hidden">
            <li class="menu__sub_list_item"> <a href="javascript:;"> Header Info</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Bottom Boxes</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Information</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
          </ul>
        </li>
        <li class="menu__list_item">
          <a class="menu__list_title" href="javascript:;">WEBSITES</a>
          <button class="menu__delete_btn_main_category delete_btn"></button>
          <ul class="menu__sub_list hidden">
            <li class="menu__sub_list_item"> <a href="javascript:;"> Parallax</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Fixed Nav</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
            <li class="menu__sub_list_item"> <a href="javascript:;"> Scroll animations</a> <button
                class="menu__delete_btn delete_btn"></button> </li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
  <main class="content">
    <div class="content__form_area hidden">
      <form class="content__form" action="">
        <button type="button" class="content__form_close_btn">&times;</button>
        <input class="content__form_title content__form_fields" type="text" name="" placeholder="title..." id="">
        <textarea class="content__form_info content__form_fields" name="" id="" placeholder="content..."></textarea>
        <button class="content__form_btn btn">Submit</button>
      </form>
    </div>
    <div class="content__wrapper wrapper">
      <h2 class="content__title">Note Title</h2>
      <div class="content__container">
        <p class="content__info">
          NOTE CONTENT
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur eius fuga, fugit similique excepturi
          voluptates delectus laboriosam, animi quae ullam sit ea molestiae assumenda officiis, minus dolorem. Natus
          placeat,
          autem in amet quasi quod sed illum asperiores soluta error recusandae consequatur voluptatum saepe ut
          distinctio
          cumque eius deleniti. Quo, ab?
        </p>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="footer_wrapper wrapper">
      <p class="footer_copyright_text"> Copyright 2023 - DHB</p>
    </div>
  </footer>

</body>

</html>