<?php
get_header();
?>

<div class="container mt-5">
    <h1>All posts</h1>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <?php the_post_thumbnail('post-thumbnail', [
                        'class' => 'card-img-top',
                        'alt' => 'Post thumbnail',
                        'style' => 'height: auto;'
                    ]) ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">See the post</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
get_footer();
