<?php
  $post = $wp_query->post;
 
  if (in_category('slots')) { //slug  категории
      include('single-slots.php');
  } elseif (in_category('blog')) {
      include('single-blog.php');
  } elseif (in_category('casino-review')) {
    include('single-casino-review.php');
    } else {
    include('single-default.php');
}
?>