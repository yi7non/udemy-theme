<?php
  function ju_widgets() {
    register_sidebar(array(
      'name' => __('My first theme sidebar', 'udemy'),
      'id' => 'ju_sidebar',
      'description' => __('sidebar for the theme udemy', 'udemy'),
      'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>'
    ));
  }
 ?>
