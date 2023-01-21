
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link  href="/css/fonts.css" rel="stylesheet">

        <?php
            switch (constant("pagina")){
                case 'basica':
                    echo'<link rel="stylesheet" href="/css/basica.css">';
                break;
                default:
                    echo '<link rel="stylesheet" href="/css/estilo.css">';
                break;
            }
            ?>
        <title>
            <?php
            define("tituloprov", "Título provisional");
                if(isset($titulo)){
                    echo $titulo;
                }
                else{
                    echo tituloprov;
                }
            ?>
        </title>
        <style>
            .intro {
                color: green;
                background: #cbedea;
                padding: 20px;
                margin-top: 6px;
                margin-bottom: 6px;
            }

        </style>
    </head>
    <body>
        <header>
        <div class="respmenu">
        <input type="checkbox">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
            <nav>
                <ul>

                    <li><a href="/">Inicio</a></li>
                    <li><a href="/sobre-mi">Sobre mi </a></li>
                    <li><a href="/contacto">Contacto</a></li>
                    <li class="jueves master"><a href="/carpeta/archivo-carpeta">Archivo dentro de carpeta</a></li>
                    <li><a href="https://carlos.sanchezdonate.com/" target="_blank">Más información</a></li>
                    <li><a href="/nueva">Redirección php</a></li>
                    <li><a href="/basica">Web básica</a></li>
                </ul>
                <div class="cerrar elemnto">X</div>
            </nav>
        </div>
            <?php
            include_once $_SERVER['DOCUMENT_ROOT'].'/assets/functions.php';
                 
              if(isset($h1)){
                  echo $h1;
              }
              elseif(pagina) {
                echo "<h1>" . "Esto es la página " .pagina ."</h1>";
              }
                else {
                echo "<h1>Esto es un h1 inventado </h1>";
            }
            
              
              /*
              Hice esto para probar la constante con el switch - case, pero vi que era mucho más sencillo de la otra manera, en este caso.
              Entiendo que si la frase a poner fuera diferente según la página si que sería mejor el switch -case. 

                switch (constant("pagina")) {
                    case 'inicio':
                      echo "<h1>" . "Esto es la página " .pagina ."</h1>";
                        break;
                    case 'contacto':
                        echo "<h1>" . "Esto es la página " .pagina ."</h1>";
                        break;
                    case 'sobre mi':
                        echo "<h1>" . "Esto es la página " .pagina ."</h1>";
                        break;
                    case 'archivo carpeta':
                      echo "<h1>" . "Esto es la página " .pagina ."</h1>";
                        break;
                    default:
                    echo 'Esta página no esta definida';
                        break;
                    }
              }
         */
          

?>
    <?php 
    if (isset($suscripcion)) {
        echo cta1();
    }
    else{
        echo cta();
    }
    ?>
        </header>