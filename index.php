<?php
define("pagina", "inicio");
$ciudad = 'Valencia';
$titulo = "Página de inicio";
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
    echo $_SERVER['DOCUMENT_ROOT'];
?>
        <!--Esto es un comentario-->
        <section id="bannerhome">
            <h1 class="h1small">Esto de aquí es un h1 <?php echo "Esto de aquí es PHP";?></h1>
            <div title="Este texto se lee cuando haces hover en este elemento">Esto de  aquí no</div>
            <p>Esto <b style="color:rgb(226, 43, 183);">es </b>un párrafo</p>
            <sandra>Esto es una etiqueta personalizada</sandra><br>
            <section class="columnas">
                <img src="/imagenes/estructura-html5.jpg" width="500" height="214" title=" Estructura html" alt="texto alternativo de la imagen">
                <div class="columna2">
                    <div class="intro">Esto es una etiqueta div<span class="lunes">que tiene un span dentro</span></div>
                    <span>Esto es una etiqueta span</span>
                    <div>Esto es un div, con <div>un div dentro</div></div>
                    <span>Esto es un span con un <div> div dentro</div></span>
                </div>
            </section>
        </section>
        <!--<div class="clickaqui"onclick="funcionprimera()"> Click Aquí </div>-->
        <div class="clickaqui"> Click Aquí </div>
        <div class="citaedad">Cita por edad </div>
        

        <noscript> Código en no script si no funciona Javascript</noscript>
        <section class="parrafos">
            <p class="intro master jueves">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vehicula eget magna sit amet fringilla. Suspendisse aliquet, mauris at dignissim auctor, enim sem molestie dui, vel rhoncus ex turpis ut ligula. Donec quis elit suscipit, posuere nunc at, molestie ligula. Sed faucibus, purus nec faucibus viverra, libero nisl porttitor risus, nec vulputate purus justo in ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere sit amet nulla tincidunt convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras mattis nec orci vitae consequat. Integer finibus id velit id aliquet. Integer ornare volutpat ex vitae commodo. Vestibulum vitae fringilla odio, ut eleifend dolor. Proin imperdiet dignissim accumsan.
            <p class="lunes">In nec ex vitae mi sodales viverra. Proin mollis venenatis mauris, id vulputate neque faucibus et. Vestibulum venenatis condimentum leo at posuere. Nam nulla neque, consectetur ut placerat non, varius et felis. Vestibulum a leo urna. Suspendisse at sollicitudin odio. Aenean in volutpat risus. Pellentesque ultricies quam id leo aliquet, non interdum nibh pellentesque. Aenean consequat nunc sit amet molestie tincidunt. Sed non imperdiet est. Donec vestibulum pretium dui, vulputate pulvinar eros egestas eu.
            <p class="intro jueves"><span>Mauris sit amet dui nibh. Maecenas accumsan vel eros faucibus auctor.</span> Morbi vitae orci efficitur, varius dolor a, bibendum orci. Mauris at facilisis elit. Aenean at felis massa. Nulla ut euismod magna, eu posuere massa. Aenean nulla metus, fermentum vel justo ut, semper consectetur erat. Donec quis massa id dui eleifend euismod. Nullam volutpat diam nec nibh dignissim mollis.
            <p>Vivamus mattis ex eu auctor congue. Proin aliquam interdum elit, tempor imperdiet ligula efficitur eleifend. Maecenas convallis gravida est a ullamcorper. Suspendisse non lacinia turpis, sollicitudin fringilla augue. Fusce sed orci ut dui eleifend vehicula vel et est. Nam dignissim dignissim viverra. Nulla eget eros vitae tellus bibendum congue. Nunc sagittis nunc porta hendrerit tincidunt. Vivamus malesuada tempor ipsum, sit amet condimentum elit bibendum et. Donec tincidunt dui et metus gravida tincidunt mollis sit amet erat. Fusce suscipit porttitor nulla, et gravida nibh tempus vitae. Etiam ac felis a orci dapibus placerat tincidunt non eros. Sed nec malesuada nisi. Donec condimentum velit non tincidunt gravida. Quisque laoreet pellentesque eros, a interdum massa pellentesque non.
        </section>
        <picture>
            <source type="image/avif" srcset="/imagenes/cheatsheet.avif">
            <img src="/imagenes/cheatsheet.png" loading="lazy" width="600" height="465" title=" Descargar para ver en máxima calidad" alt="Listado cheatsheet">
        </picture>
        <section>
                <video width="320" height="240" controls autoplay muted poster="/imagenes/cheatsheet.png">
                <source src="/videos/oso.mp4" type="video/mp4">
                <source src="/videos/oso.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </section>
        <section id="puebasjs">
            <div class="caja">Línea 1 JS</div>
            <div class="caja azul">Línea 2 JS</div>
            <div class="caja rosa">Línea 3 JS</div>
        
                <style>
                 .newjs{
                 background: blue; 
                }
                .clickaqui {
                width: 200px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: space-around;
                background: var(--morado);
                color: purple;
                border-radius: 15px;
                }
                .clickcolor{
                width: 200px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: space-around;
                background: var(--verdeagua);
                color: purple;
                border-radius: 15px;
                }
                body.noche {
                background: black;
                color: white;
                 }

                </style>

        </section>
         <?php
        cta();
        include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';
            ?>
<script src="/scripts/pruebas.js"></script>
<script>
document.getElementById("bannerhome").innerHTML = "Banner home en JavaScript"; // Selector Id

const collection = document.getElementsByClassName("intro");
for (let i = 0; i < collection.length; i++) {
collection[i].innerHTML = "Elementos de la clase 'intro' modificados por JS"; //Selector clase
}

document.getElementsByTagName("p")[1].innerHTML = "Segundo párrafo modificada por js"; //Selector etiqueta

document.querySelector(".azul").setAttribute("class", "newjs"); //Cambiar un atributo por otro "class"

const caja = document.querySelectorAll('.caja');
for (let i = 0; i < caja.length; i++) {
caja[i].classList.add('hola');
}


let taza = 'Variable con let';
var tetera = 'Variable con var';
const cuchara = 'Constante';

function funcionprimera(){
    document.querySelector(".clickaqui").setAttribute("class", "clickcolor");
}

const botonactivado = document.getElementsByClassName("clickaqui");
botonactivado[0].addEventListener("click", funcionprimera);



let tiempo = new Date().getHours();
let modo = document.getElementsByTagName("body")[0];

if (tiempo > 20){
modo.setAttribute("class", "noche"); 
}
else {
mode.classList.remove("noche");
}


let edad;
let cita;
edad=30;
switch (edad) {
    case 10:
    cita = "Lunes";
    break;
    case 30:
    cita = "Martes";
    break;
    case 50:
    cita = "Miercoles";
    break;
}
//No he logrado poner en la edad menoro o mayor
document.getElementsByClassName("citaedad")[0].innerHTML = "Tu edad es de " + edad + " por ello tu cita es el " + cita;

</script>