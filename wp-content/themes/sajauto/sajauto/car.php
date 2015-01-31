<section id="vehicule">
    <div class="inner clearfix">
        <?php while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail( $post->ID ) ):
            $MainImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <article <?php post_class(); ?> data-type="<?php the_field('marque'); ?>">
                    <div class="car-left">
                        <ul class="rslides" id="carpic-slider">
                            <li>
                                <img class="img-responsive" src="<?php echo $MainImage[0]; ?>" alt="">
                            </li>
                            <?php if( have_rows('images_du_vehicule') ): ?>
                            <?php while( have_rows('images_du_vehicule') ): the_row();
                            $image = get_sub_field('images'); ?>
                            <li>
                            <?php if( $image ): ?>
                                <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                            <?php endif; ?>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                        <!-- Pager -->
                        <ul class="thumbnails clearfix" id="thumbnails"> <!--this id gets inserted in manualControls -->
                            <li>
                                <a href="#"><img class="img-responsive" src="<?php echo $MainImage[0]; ?>" alt=""></a>
                            </li>
                            <?php if( have_rows('images_du_vehicule') ): ?>
                            <?php while( have_rows('images_du_vehicule') ): the_row();
                            $image = get_sub_field('images'); ?>
                            <li>
                            <?php if( $image ): ?>
                                <a href="#"><img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                            <?php endif; ?>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="car-right">
                        <div class="top clearfix">
                            <div class="left">
                                <h1>
                                    <?php the_field('marque'); ?> <?php the_title(); ?><br>
                                    <span class="annee"><?php the_field('annee'); ?></span>
                                </h1>
                                <p class="km"><?php the_field('km'); ?></p>
                            </div>
                            <div class="right">
                                <h1><?php the_field('prix'); ?></h1><br>
                            </div>
                        </div>
                        <div class="bottom">
                            <h4>Accessoires et options</h4>
                            <?php if( have_rows('description_du_vehicule') ): ?>
                            <ul class="options">
                            <?php while( have_rows('description_du_vehicule') ): the_row();
                                $options = get_sub_field('options'); ?>    
                                <li>
                                <?php if( $options ): ?>
                                   <span><?php echo $options; ?></span>
                                <?php endif; ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                </article>
            <?php endif; ?>
        <?php endwhile; ?> 
    </div>
</section>
