<!-- 

Varsaylan "Kategori" sayfa düzeni.


 -->


<?php get_header() ?>

<div class="container">

    <div class="alert alert-primary" role="alert">
        archive default
    </div>

    <h1 class="py-5 text-center"><?php single_cat_title() ?></h1>

    <div class="row">
        <?php get_template_part('includes/section', 'archive-default') ?>
    </div>

    <?php the_posts_pagination(); ?>


</div>

<?php get_footer() ?>