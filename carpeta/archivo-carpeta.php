<?php
define("pagina", "nueva carpeta");
$ciudad = 'Salamanca';
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';


?>
        <h1>Bienvenido al archivo carpeta</h1>
        <section id="table 1">
            <table>
                <thead>
                    <tr>
                        <th>Título columna 1</th>
                        <th>Título columna 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>primera fila</td>
                        <td>primera fila columna 2</td>
                    </tr>
                    <tr>
                        <td>February</td>
                        <td>$80</td>
                    </tr>
                    </tbody>
                <tfoot>
                    <tr>
                        <td>Última fila</td>
                        <td>$180</td>
                    </tr>
                </tfoot>
            </table>
        </section>
        <?php call() ?>

        <section class="medidas">
            <h2>Medidas absolutas</h2>
            <div class="absolutas sizes">
                <div class="cm"> Centímetros</div>
                <div class="mm"> Milimetros</div>
                <div class="in"> Pulgadas</div>
                <div class="px">Píxeles</div>
                <div class="pt"> Puntos</div>
                <div class="pc"> Picas</div>
            </div>
            <h2>Medidas relativas</h2>
            <div class="relativas sizes">
                <div class="em">em = Multiplicador del tamaño de la fuente</div>
                <div class="rem">rem = Multiplicador del tamaño de la fuente del elemnto root </div>
                <div class="vh">vh = Porcentaje del alto del viewport</div>
                <div class="vw">vw = Porcentaje del ancho del viewport</div>
                <div class="porcentaje">% Porcentaje del tamaño del elemnto padre</div>
            </div>
            <?php
            include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';

            ?>
