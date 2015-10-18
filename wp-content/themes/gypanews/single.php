<?php get_header(); ?>
<div class="container">

    <?php get_template_part('aside'); ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <article class="article col-xs-12 col-sm-8">
            <div class="col-xs-12">
                <?php $category = get_the_category() ?>
                <?php if($category) { ?>
                    <?php $category_link = get_category_link( $category[0]->term_id ); ?>
                    <a href="<?php echo esc_url( $category_link ); ?>" class="category">
                        <p><?php echo $category[0]->name; ?></p>
                    </a>
                <?php } ?>
            </div>

            <h1><?php the_title(); ?></h1>

            <div class="col-xs-12">
                <p class="small"><?php the_time('d/m/Y') ?> - Por <?php the_author_posts_link(); ?></p>
            </div>

            <?php  if(has_post_thumbnail()) { ?>
                <div class="image col-xs-12">
                    <?php the_post_thumbnail(); ?>
                    <p><?php echo get_edition(); ?></p>
                </div>
            <?php } ?>

            <div class="content col-xs-12">
                <ul class="share">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#comments"><i class="fa fa-comments"></i></a></li>
                </ul>
                <div class="text">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="buttons col-xs-12">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-left pull-left"></i>
                            <p class="pull-right text-left">Post Anterior  Post Anterior Post Anterior Post Anterior</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p class="pull-left text-right">Próximo Post Próximo Post Próximo Post Próximo Post Próximo Post</p>
                            <i class="fa fa-angle-right pull-right"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="author col-xs-12">
                <?php $user_id = get_the_author_meta('ID'); ?>
                <?php $authorUrl = get_author_posts_url($user_id); ?>
                <div class="image col-xs-2">
                    <a href="<?php echo $authorUrl; ?>">
                        <?php $photo = get_the_author_meta('author_profile_picture', $user_id); ?>
                        <?php if($photo) { ?>
                            <img src="<?php echo $photo; ?>" alt="<?php the_author(); ?>" title="<?php the_author(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/user.png" alt="<?php the_author(); ?>" title="<?php the_author(); ?>">
                        <?php } ?>
                    </a>
                </div>
                <div class="resume col-xs-10">
                    <a href="<?php echo $authorUrl; ?>"><h2><?php the_author(); ?></h2></a>
                    <ul>
                        <?php $facebook = get_the_author_meta('facebook'); ?>
                        <?php if($facebook) { ?>
                            <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <?php } ?>

                        <?php $twitter = get_the_author_meta('twitter'); ?>
                        <?php if($twitter) { ?>
                            <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <?php } ?>

                        <?php $instagram = get_the_author_meta('instagram'); ?>
                        <?php if($instagram) { ?>
                            <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <?php } ?>

                        <?php $linkedin = get_the_author_meta('linkedin'); ?>
                        <?php if($linkedin) { ?>
                            <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <?php } ?>

                        <li><a href="mailto:<?php the_author_meta('user_email') ?>"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <a href="<?php echo $authorUrl; ?>"><p><?php the_author_meta('description') ?></p></a>
                </div>
            </div>

            <?php if ( comments_open()) { ?>
                <?php comments_template(); ?>
            <?php }  ?>

        </article>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>