<?php
/*
Template Name: Faq
*/
?>

<div class="container">
<?php

$template = 'item_line'; // item || item_line
$front_id = get_option( 'page_on_front' );
$page_id = get_queried_object_id();
$rows = get_field('faq', $page_id);

if( $rows ) { ?>
<div class="faq-title">
  <h2>F.A.Q.</h2>
</div>
<section class="faq">

  <div class="faq__left">
    <?php foreach( $rows as $key => $row ) { ?>
    <?php if ($key % 2 == 0) {
      set_query_var( 'item', $row );
      get_template_part( 'template_parts/faq/faq', $template );
    } ?>
    <?php } ?>
  </div>

  <div class="faq__middle">
    <?php foreach( $rows as $key => $row ) { ?>
    <?php if ($key % 2 == 0) {
      set_query_var( 'item', $row );
      get_template_part( 'template_parts/faq/faq', $template );
    } ?>
    <?php } ?>
  </div>

  <div class="faq__right">
    <?php foreach( $rows as $key => $row ) { ?>
    <?php if ($key % 2 != 0) {
      set_query_var( 'item', $row );
      get_template_part( 'template_parts/faq/faq', $template );
    } ?>
    <?php } ?>
  </div>

</section>
<?php } ?>
</div>