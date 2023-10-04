<?php
$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$es_url = 'http://ejemplo.test/pruebalang.php';
$en_url = 'http://ejemplo.test/en/testlang.php';
if ($lang == 'es'){
    $title = 'Ejemplos de hreflang';
    $h1 = 'Ejemplos de hreflang';

}
else{
    $title = 'hreflangs examples';
    $h1 = 'hreflangs examples';
}
?>
<html lang="<?php echo $lang;?>">
    <head>
        <title><?php echo $title;?></title>

        <link rel="canonical" href="<?php echo $current_url; ?>">
        <?php /*
        <link rel="alternate" hreflang="en" href="<?php echo $en_url;?>">
        <link rel="alernate" hreflang="es" href="<?php echo $es_url;?>">
        <link rel="alternate" hreflang="x-default" href="<?php echo $en_url;?>">
         */?>
        </head>
    <body>
        <header>
            <nav></nav>
        </header>
        <section>
            <h1><?php echo $h1;?> <h1>
        </section>
    </body>
</html>