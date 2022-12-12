<?php get_header( );?>
<?php
$args = array( 'post_type' => 'car', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
echo '<div class="container">';
  the_post_thumbnail();
  the_content();
    
    the_taxonomies();
  echo '</div>';
endwhile;
 ?>

 <?php get_footer();?>
