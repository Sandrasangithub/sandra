<?php
define("pagina", "");
$ciudad = '';
$h1= "<h1>Página prueba de enlaces relativos y absolutos </h1>" ;
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
    echo $_SERVER['DOCUMENT_ROOT'];
?>
<p class= "enlaces">
    <div class="enlaceabsoluto">  <a href="https://ejemplo.test/basica"> Enlace absoluto </a> </div>
    <div class="enlacerelativo1"> <a href="enlacerelativo"> Enlace relativo 1 </a> </div>
    <div class="enlacerelativo2"> <a href="/enlacerelativo2"> Enlace relativo 2 </a> </div>
    <div class="enlacerelativo3"> <a href="../enlacerelativo3"> Enlace relativo 3 </a> </div>

    <p>Esto es un texto y <span id="enlaceofus" class="enl">Esto es un enlace ofuscado con addevent listerner</span> 
    que necesita un script fuera del parrafo. He añadido un UTM para que se sepa de donde viene el enlace. El código se ve en JS.</p>
  
    <script src="/scripts/pruebas.js"></script>
<?php  include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>