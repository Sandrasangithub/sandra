<?php $term = get_queried_object();
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');

?>
<!-- Metaetiquetas del máster -->
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta charset="UTF-8" />

<!-- Descripciones -->

<?php if (in_category('festivales')){
$metadesc_festivales = 'Festival de música '. get_field( 'tipo_de_musica' ) . ' en '.  get_field( 'ciudad' ) . '. ' . get_field( 'duracion' ) . 
    ' días de diversión sin limietes, por solo ' . get_field( 'precio' ) . '€';
?>
<meta name="description" content="<?php echo $metadesc_festivales; ?>">
<meta property="og:description" content="<?php echo $metadesc_festivales; ?>">
<meta property="twitter:description" content="<?php echo $metadesc_festivales; ?>">
<?php
}
else{?>
<meta name="description" content="<?php the_field( 'metadescription', $term ); ?>">
<meta property="og:description" content="<?php 
    if ( get_field( 'og_description', $term )){
        the_field( 'og_description', $term );
    } 
    else{
        the_field( 'metadescription', $term );
    }?>">
<meta property="twitter:description" content="<?php
if (get_field('twitter_description', $term )){
    the_field( 'twitter_description', $term );
} 
elseif(get_field( 'og_description', $term )){
    the_field( 'og_description', $term );
}
else{
    the_field( 'metadescription', $term );}
 ?>">
<?php ;}
?>
 <!--Cannonical-->
<link rel="canonical" href="<?php 
if (get_field ('canonical', $term))
{the_field('canonical',$term);}
else {echo $url_sin_string;}
?>">
<meta property="og:url" content="<?php 
if ( get_field( 'canonical', $term ) ){
    the_field( 'canonical', $term);} 
else{echo $url_sin_string;}?>">
<meta property="twitter:url" content="<?php
 if ( get_field( 'canonical', $term ) ){
    the_field( 'canonical', $term);} 
else{echo $url_sin_string;}?>">

<!--Imagenes-->
<?php 
if (get_field('og_image', $term)) {
    $og_image_url = get_field('og_image', $term);
} else {
    $og_image_url = 'https://ejemplo.test/wp-content/uploads/2023/02/koala-630117__340.jpg';
}
?>
<meta property="og:image" content="<?php echo esc_url($og_image_url); ?>">
<meta property="og:image:secure_url" content="<?php echo esc_url($og_image_url); ?>">
<meta property="twitter:image" content="<?php echo esc_url($og_image_url);
?>">

<meta property="og:image:alt" content="<?php the_field( 'title', $term ); ?>">
<meta property="og:type" content="website">
<meta property="twitter:card" content="summary_large_image">
<!-- meta robots -->

 <?php $metarobots_checked_values = get_field( 'metarobots', $term );
    if ( $metarobots_checked_values ) : ?>
    <meta name="robots" content="<?php the_field( 'metarobots', $term ); ?>">
 <?php endif; ?>
<!-- Metas personalizadas -->
<?php the_field('custom_meta', $term); ?>

<!-- title -->
<title><?php the_field( 'title', $term); ?></title>
<meta property="og:title"content="<?php
    if (get_field('og_title', $term )){
    the_field( 'og_title', $term );
    } 
    else{the_field( 'title', $term );}
?>">
<meta property="twitter:title" content="<?php
    if (get_field('twitter_title', $term )){
        the_field( 'twitter_title', $term );
    } 
    elseif(get_field( 'og_title', $term )){
        the_field( 'og_title', $term );
    }
    else{
        the_field( 'title', $term );}
?>">