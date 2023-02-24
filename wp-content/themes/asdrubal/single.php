<?php include 'header.php';?>
<h1><?php
the_title(); ?></h1> 
<?php
if (get_field('descripcion-corta')){
    ?>
<div class="descripcion-corta"><?php the_field( 'descripcion-corta' ); ?> . Esta es la descripción</div>
<?php
}
else{;}
?>
<?php 
if (in_category('festivales')){ ?>
<table>
<tr>
    <th>Festival</th>
</tr>
<tr>
    <th>Fecha</th>
    <td><?php the_field( 'fecha' ); ?></td>
</tr>
<tr>
    <th>Ubicación</th>
    <td><?php the_field( 'ciudad' ) ; ?> , <?php the_field( 'pais' ) ; ?></td>
</tr>
<tr>
    <th>Precio</th>
    <td><?php the_field( 'precio' ); ?>€</td>
</tr>
</table>




<?php }
else {;}
echo the_content();
?>
<?php include_once 'footer.php';?>