<?php 
define("pagina", "");
$suscripcion = "";
$ciudad = 'Madrid';
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/assets/tablassql.php';
?>
        <h1>Bienvenido a la página de contacto</h1>
       <?php
            function nombre($nombre)
            {
                echo "Hola $nombre<br>";
            }
            nombre('Sandra');
            nombre('Pepa');
           # Es una función que nos permite crear elementos variables, en este caso la variable nombre
           $a = "3";
           $b = "1";
           if("$a" == "$b"){
               echo '<div style="color:green">'."$a ". "y "."$b " . "Son iguales" . '</div>';
            } 
            elseif($a == "0"){
                echo '<div style="color:pink">'.'$a '. "es igual a 0" . '</div>';
            }
            else {
                echo '<div style="color:red">'."$a ". "y "."$b ". "No son iguales" . '</div>';
              }
        ?>
        <section id="preguntas-frecuentes">
            <h2>Preguntas frecuentes</h2>
                <details>
                    <summary>¿Esto es una pregunta frecuente?</summary>
                    Puede serlo, solo se ve al desplegar.
                </details>
                <details>
                    <summary>¿Esto es una pregunta frecuente 2?</summary>
                    Puede serlo, solo se ve al desplegar.
                </details>
        </section>
        <section class="geometria">
            <div class="cuadrado">
                <div class="circulo">
                </div>
            </div>
        </section>
        <div class="perrito"></div>
        <div id="imagenfalsa"></div>
      
        <?php 
                switch ($ciudad){
                    case 'Salamanca':
                        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer-salamanca.php';
                        break;
                     case 'Madrid':
                        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer-madrid.php';
                        break;
                    default:
                        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
                        break;            
            }
            ?>