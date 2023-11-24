<!-- 

"Kategori" sayfa düzeninin farklılaştırılmış tasarımı. "Services" Kategorisi.


 -->


<?php get_header() ?>

<div class="container">

    <div class="alert alert-primary" role="alert">
        archive services
    </div>

    <h1 class="py-5 text-center"><?php single_cat_title() ?> dynamic</h1>

    <div class="row">
        <?php get_template_part('includes/section', 'archive-services') ?>
    </div>

    <?php the_posts_pagination(); ?>


</div>

<?php get_footer() ?>