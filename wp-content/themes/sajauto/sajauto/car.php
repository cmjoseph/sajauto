<section id="vehicule">
    <div class="inner clearfix">
        <?php while (have_posts()) : the_post(); ?>
            <?php $imageMain = get_field('image_principale_du_vehicule'); ?>
                <article <?php post_class(); ?> data-type="<?php the_field('marque'); ?>">
                    <div class="car-left">
                        <?php if( get_field('vehicule_vendu') ) : ?>
                        <img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
                        <?php endif; ?>
                        <ul class="rslides" id="carpic-slider">
                            <li>
                            <?php if( !empty($imageMain) ): ?>
                                <img class="img-responsive" src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>" />
                            <?php else: ?>
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg">
                            <?php endif; ?>
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
                            <?php if( !empty($imageMain) ): ?>
                                <a href="#"><img class="img-responsive" src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>" /></a>
                            <?php else: ?>
                                <a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg"></a>
                            <?php endif; ?>
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
                                    <?php the_field('marque'); ?> <?php the_title(); ?>
                                </h1>
                                <p class="annee"><?php the_field('annee'); ?></p>
                            </div>
                            <div class="right">
                                <h1><?php the_field('prix'); ?></h1>
                                <p class="km"><?php the_field('km'); ?></p>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="options">
                                <div class="top-list"><h4><?php echo __('Accessoires et options','sajauto')?></h4></div>
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
                            <div class="security">
                                <div class="top-list"><h4><?php echo __('Sécurités','sajauto')?></h4></div>
                                <?php if( have_rows('securite_du_vehicule') ): ?>
                                <ul class="security">
                                <?php while( have_rows('securite_du_vehicule') ): the_row();
                                    $security = get_sub_field('options_de_securite'); ?>    
                                    <li>
                                    <?php if( $security ): ?>
                                       <span><?php echo $security; ?></span>
                                    <?php endif; ?>
                                    </li>
                                <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </article>
        <?php endwhile; ?> 
    </div>
</section>
