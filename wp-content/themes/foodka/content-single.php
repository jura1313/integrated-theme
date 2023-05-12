    <!-- bredcrumb Area Start-->
    <section class="breadcrumb-area">
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1"><img src="<?php echo get_template_directory_uri(). '/assets/img/banner/shape-1.png' ?>" alt="img"></div>
        <div class="banner-shape-2"><img src="<?php echo get_template_directory_uri(). '/assets/img/banner/shape-2.png' ?>" alt="img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Blog
                        </h3>
                        <h1>Food Blog</h1>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- bredcrumb Area End --> 



        <!-- blog single start -->
        <div class="blog-single-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-inner">
                        <div class="thumb pb-4">
                            <?php the_post_thumbnail('big_thumb'); ?>
                            <!-- <img src="assets/img/blog/single.png" alt="img"> -->
                        </div> 
                        <span class="cat">
                            <span class="date">
                                <i class="ri-calendar-todo-fill"></i>July 14, 2021
                            </span>
                            <a class="tag me-0">
                                            <i class="ri-price-tag-3-fill"></i><?php the_category(', ' ); ?>
                            </a>
                        </span>                       
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <div class="row">
                            <div class="col-6">
                                <div class="thumb mb-0">
                                <!-- <?php the_post_thumbnail('middle_thumb'); ?> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tag-share-area">
                        <div class="row">
                            <div class="col-sm-6 align-self-center">
                                <div class="tag-inner">
                                    <span>Tags: </span>
                                    <?php the_category(', '); ?>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-3 mt-sm-0 align-items-center">
                                <ul class="social-area text-sm-end mt-md-0 mt-2">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li> 
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li> 
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> 
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="comment-area">
                        <h5 class="title">03 Comments</h5>
                        <div class="media">
                            <div class="media-left">
                                <img src="assets/img/blog/comment.png" alt="img">
                            </div>
                            <div class="media-body">
                                <a class="btn btn-base float-end" href="#">Reply</a>
                                <h6>Haslida heris</h6>
                                <span>20 Feb 2020 at 4:00 pm</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                    </div>
                    <form class="default-form-wrap">
                        <h5 class="title">Comments</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-textarea-wrap">
                                    <textarea rows="4" placeholder="Message..."></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-base">Submit your Message</button>
                    </form>
                </div>

                <?php get_template_part('content', 'sidepage'); ?>

            </div>
        </div>
    </div>
    <!-- blog single end -->