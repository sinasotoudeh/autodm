<?php
/**
 * The main template file
 *
 */

get_header(); ?>

<main id="primary" class="site-main">

    <div class="container" style="padding: 50px 20px;">
        <?php
        if ( have_posts() ) :
            /* شروع حلقه وردپرس (Loop) */
            while ( have_posts() ) :
                the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php
            endwhile;

        else :
            /* اگر محتوایی یافت نشد */
            echo '<p>مطلبی یافت نشد.</p>';

        endif;
        ?>
    </div>

</main>

<?php get_footer(); ?>
