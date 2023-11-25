<?php    if( have_posts() ): while(have_posts()): the_post();      ?>
    <div class="col-md-4 mb-3">
        <div class="col-md-12">
            <div class="card" style="width: 100%;">
                <?php
                if ( has_post_thumbnail() ) {
                    $thumbnail_url = get_the_post_thumbnail_url(null, 'medium');
                    echo '<img src="' . esc_url($thumbnail_url) . '" class="card-img-top" alt="Thumbnail" style="height:200px; object-fit: cover;">';
                }else{
                    echo '<img src="https://cdn.vectorstock.com/i/preview-1x/65/30/default-image-icon-missing-picture-page-vector-40546530.jpg" class="card-img-top" alt="Thumbnail" style="height:200px; object-fit: cover;">';
                }
                ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Devamını oku</a>
                </div>
            </div>
        </div>
    </div>
<?php    endwhile; else: endif;     ?>