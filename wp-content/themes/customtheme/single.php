<?php get_header(); ?>

<div class="container row">
    <div class="col-md-9">
        <h1 class=""><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <div class="mb-4">
                <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded', 'style' => 'max-height:400px;']); ?>
            </div>
        <?php endif; ?>

        <div>
        <?php //get_template_part('includes/section', 'single-content'); ?>

            <?php    if( have_posts() ): while(have_posts()): the_post();      ?>

                <?php   the_content();     ?>

            <?php    endwhile; else: endif;     ?>
        </div>
    </div>
    <div class="col-md-3">gelecek var</div>
</div>

<?php get_footer(); ?>
