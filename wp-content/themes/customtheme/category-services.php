<!-- 

"Kategori" sayfa düzeninin farklılaştırılmış tasarımı. "Services" Kategorisi.


 -->


<?php get_header() ?>

<div class="container">

    <div class="d-flex align-items-center justify-content-center position-relative mb-5" style="height: 400px; overflow: hidden;">
        <img src="https://images.unsplash.com/photo-1682686581854-5e71f58e7e3f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid object-fit-cover position-absolute rounded" style="width:100%; height: 100%; z-index: -1;" alt="">
        <div class="position-absolute" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
        <h1 class="text-center position-relative z-index-1"><?php single_cat_title(); ?></h1>
    </div>

    <div class="row">
        <?php get_template_part('includes/section', 'archive-services') ?>
    </div>

    <?php the_posts_pagination(); ?>


</div>

<?php get_footer() ?>