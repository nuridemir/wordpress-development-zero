<?php    if( have_posts() ): while(have_posts()): the_post();      ?>
<div class="col-md-4">
    <h5 class="card-title"><?php the_title() ?></h5>
    <div>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
        }
    ?>
    </div>
    <a href="<?php the_permalink(); ?>">Devamını oku</a>

</div>
<?php    endwhile; else: endif;     ?>