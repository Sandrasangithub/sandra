<?php
define("pagina", "sobre mi");
$ciudad = "Salamanca";
$h1= "<h1>Bienvenido a la página sobre mi</h1>" ;
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<div class="imagenclase"></div>
<div class="imagenbase64"></div>
<svg class="svgimagen" aria-labelledby="svgtitulo">
  <title id="svgtitulo">Icono sombrero</title>
</svg>
<div class="dosimagenes">
  <picture>
 <source type="image/avif" srcset="/imagenes/modulo-imagenes/cartagena.avif">
 <source type="image/webp" srcset="/imagenes/modulo-imagenes/cartagena/imagenes/modulo-imagenes/cartagena.webp">
 <img src="/imagenes/modulo-imagenes/cartagena.jpg" >
</picture>
<div class="atleta"> <img src="/imagenes/modulo-imagenes/atleta.png" ></div></div>
<?php call(); ?>

<div class="cita"> <em>Lorem ipsum dolor sit amet,</em> consectetur adipiscing elit. <strong>Nunc vehicula nunc eu facilisis rhoncus.</strong> Morbi fringilla, metus
        <p>
            <blockquotes cite="https://carlos.sanchezdonate.com/"> Esto es una cita <cite>Sandra</cite> </blockquotes>
        </p>Curabitur dignissim sem magna, sed blandit metus aliquam et. Morbi vehicula ipsum sit amet volutpat tincidunt. Aenean non iaculis justo, quis rhoncus nulla. Cras volutpat ante sit amet ipsum pharetra pellentesque. Duis vel sem eu massa fringilla
        rutrum et sed ipsum. Fusce sit amet urna sit amet neque fringilla dictum vel non diam. Integer a vulputate lectus.
        <code> &lt;div&gt;Esto es código dentro del código&lt;/div&gt; </code>
    </div>
      <div class="hola">
        <p>Fusce lectus tellus, lobortis eget magna semper, egestas porta sapien. Vivamus eu purus eu ipsum pretium malesuada. Nunc vulputate consequat felis, eu volutpat turpis gravida quis. Praesent dapibus dui et egestas malesuada. Nam vestibulum, leo eget dignissim sagittis, diam risus sollicitudin ligula, a luctus orci massa sit amet mauris. Morbi posuere, velit vitae semper lobortis, felis ligula varius libero, sit amet porta nibh magna vitae odio. Phasellus et porttitor orci, et aliquet libero. Curabitur ornare dui non lacus rutrum aliquam. Sed nec tempor purus, sed vestibulum tortor. Nam lobortis venenatis dui ac feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam porttitor sem feugiat dapibus ullamcorper. Aenean venenatis justo odio, pharetra auctor felis tempus eget.</p>
      </div>
    <!-- no debería repetirse  <section id="footer"> -->
      <?php
      include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';

     ?>
