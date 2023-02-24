<section id="agrupapost" class = "flexcenter">
<?php
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
);
$the_query = new WP_Query ($args);
while ( $the_query->have_posts()){
    $the_query->the_post();
    $agrupapost = 'agrupapost/';
    include $agrupapost .'display-post/card-post.php';
    //include $agrupapost .'display-post/card-post.php';
}
wp_reset_postdata();

?>

</section>