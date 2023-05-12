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

    <!-- blog Area Start-->
    <section class="blog-area pd-top-120 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row justify-content-center">

                    <h2>No Corresponding Results</h2>

                    </div>
                </div>


                <?php get_template_part('content', 'sidepage'); ?>

            </div>
        </div>
    </section>
    <!-- blog Area End -->
