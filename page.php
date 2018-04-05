<?php get_header(); ?>

    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
            
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    
                    <?php the_content(); ?>
                </div>

                <?php endwhile; ?>

            <?php else : ?>
                <p><?php __('Страница не найдена!'); ?></p>
            <?php endif; ?>
        </div>

<?php get_footer(); ?>