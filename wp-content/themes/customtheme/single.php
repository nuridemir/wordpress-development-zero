<?php get_header() ?>

<div class="container">

    <div class="alert alert-primary" role="alert">
        archive default - single details page
    </div>


    <h1 class="py-5"><?php the_title() ?></h1>

    <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('large');
        }
    ?>

    <?php get_template_part('includes/section', 'single-content') ?>

    <small>özelleştirilemedi</small>

</div>

<?php get_footer() ?>