<?php
// Cosas SEO del Footer
function wp_seofooter() {
    //Esto se llama desde header.php
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
//$protocol = 'https://';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
$term = get_queried_object();
$proyectoname = "Mastering Money";

 the_field( 'custom_meta_footer', $term );



 
if ( is_home() || ( is_front_page() && is_page() ) ) {
    // hacer algo si es la página principal
    // No funciona por algún motivo extraño

?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "EMPRESANOMBRE",
  "url": "<?php echo $url_sin_string;?>",
  "logo": "<?php echo get_template_directory_uri(); ?>/images/logo.png"

}
</script>
<?php
 }
 elseif ( is_singular() || is_category() ){
    // hacer algo si es una publicación o categoría
        if (in_category('festivales')){
        //Categoría festivales
        ?>
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "MusicEvent",
    "location": {
        "@type": "MusicVenue",
        "name": "Polideportivo",
        "address": "<?php echo get_field('ciudad'); ?>"
    },
    "name": "<?php echo wp_title(); ?>",
    "offers": {
        "@type": "Offer",
        "url": "<?php echo $url_sin_string; ?>",
        "price": "<?php echo get_field('precio'); ?>",
        "priceCurrency": "€",
        "availability": "https://schema.org/InStock"
    },
    "startDate": "<?php echo DateTime::createFromFormat('d/m/Y', get_field('fecha'), new DateTimeZone('Europe/Madrid'))->format('c'); ?>"
    }
</script>

        <?php
        ;}
        else {
            ?>    
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo $url_sin_string;?>"
            },
            "headline": "<?php the_title(); ?>",
            "image": [
                "<?php the_field('open_graph', $term ); ?>"
            ],
            "datePublished": "<?php echo get_the_date('c'); ?>",
            "dateModified": "<?php echo get_the_modified_date('c'); ?>",
            "description": "<?php the_field("metadescription", $term ); ?>"
        }
        </script>
        <?php
        ;}

    }else {
    // hacer otra cosa si no es una publicación, categoría o la página principal

  } 

}
//do something just on a category archive page }
add_action('wp_footer', 'wp_seofooter'); //hook que lanza la funcion y carga el contenido en el head

?>
