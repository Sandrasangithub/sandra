
<div class="post">
    <a href="<?php the_permalink();?>" title= "<?php the_permalink();?>" id="<?php the_ID();?>">
    <div class="post-name"><?php the_title();?></div>
    <div class="fotofestival" style="background-image: url(<?php if ( the_field( 'imagen_festival' ) ) ; ?>)">
    </div>
</a>
</div>

<!-- <div class="post">
    <a href="--><?php  /*the_permalink();?>" title= "<?php the_permalink();?>" id="<?php the_ID();?>">
    <div class="post-name"><?php the_title();?></div>
    <div class="fotofestival"><?php if ( get_field( 'imagen_festival' ) ) : ?>
	<img src="<?php the_field( 'imagen_festival' ); ?>" />
<?php endif ?></div>
</a>
</div> */ 