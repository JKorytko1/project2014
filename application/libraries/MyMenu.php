<?php
      class MyMenu
      {
            function show_menu()
            {
                  // $obj = &get_instance();
                  // $obj->load->helper('url');
                  
                  $menu  = "<ul>";
                  $menu .= "<li>";
                  // $menu .= anchor("books/main","Список книг");
                  $menu .= "</li>";
                  $menu .= "<li>";
                  // $menu .= anchor("books/input","Ввод данных");
                  $menu .= "</li>";
                  $menu .= "</ul>";

                  return $menu;
            }
      }
?>