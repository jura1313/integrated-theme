<div class="col-lg-4">
    <div class="sidebar-area">
        <div class="widget widget_search">
            <form action="<?php home_url('/') ?>" method="get" class="search-form">
                <div class="form-group">
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search your itmes">
                </div>
                <button class="submit-btn" id="search_submit" type="submit"><i class="ri-search-line"></i></button>
            </form>
        </div>
        <div class="widget widget-recent-post">
            <h4 class="widget-title">Recent Post</h4>
            <ul>
                <?php

                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                                );
                
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#" id="recent"><?php the_post_thumbnail('small_thumb'); ?></a>
                            </div>
                            <div class="media-body">
                                <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                    <?php the_author(); ?>
                                </a>
                            </div>
                        </div>
                    </li>

                <?php endwhile; ?>
                
            </ul>
        </div>
        <div class="widget widget-newsletter">
            <h4 class="widget-title">Newsletter</h4>
            <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't send spam!</p>
            <form class="newsletter-form">
                <div class="form-group">
                    <input type="email" placeholder="Enter e-mail">
                </div>
                <button class="submit-btn" type="submit"><i class="ri-arrow-right-line"></i></button>
            </form>
        </div>
        <div class="widget widget_categories">
            <h4 class="widget-title">Categories</h4>
            <ul>
                <?php
                    $cat = get_terms('category');
                    foreach($cat as $cat) : 
                        // var_dump($cat);
                ?>

                    <li><a href="<?php echo home_url().'/category/'.$cat->slug; ?>"><?= $cat->name; ?> <span>
                        <?php
                            $count = $cat->category_count;
                            echo $cat->count;
                        ?>
                    </span></a></li>
                <?php
                    endforeach;
                ?>
            </ul>
        </div>
    </div>
</div>