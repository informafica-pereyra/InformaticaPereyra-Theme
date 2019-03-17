<?php get_header(); ?>
    <!-- Homepage img -->
        <?php 
        $carousel_slide1 = get_theme_mod('ip_img_slide1');
        $carousel_slide2 = get_theme_mod('ip_img_slide2');
        $text_slide1 = get_theme_mod('ip_slide1_text');
        $text_slide2 = get_theme_mod('ip_slide2_text');
        $button_slide1 = get_theme_mod('ip_img_btn1');
        $button_slide2 = get_theme_mod('ip_img_btn2');        
        if ($carousel_slide1 && $carousel_slide2) { 
        ?>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item nopadding active">
                        <img class="col-12 carousel-altura mx-auto <?php if ($text_slide1) { ?> brightness-04 <?php } ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_slide1')); ?>" alt="First slide">
                        <div class="carousel-caption d-flex text-img-home">
                            <h2 class="container-fluid my-auto text-white text-mobile"><?php echo get_theme_mod('ip_slide1_text'); ?><br> <?php if($button_slide1){ ?>
                                <a href="<?php echo get_theme_mod('ip_img_link_btn1') ?>"><button class="btn bg-personalized text-white py-0"><?php echo get_theme_mod('ip_img_btn1'); ?></button></h2></a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="carousel-item nopadding">
                        <img class="col-12 carousel-altura mx-auto <?php if ($text_slide2) { ?> brightness-04 <?php }  ?>" src="<?php echo wp_get_attachment_url(get_theme_mod('ip_img_slide2')); ?>" alt="First slide" >
                        <div class="carousel-caption d-flex text-img-home">
                            <h2 class="container-fluid my-auto text-white text-mobile"><?php echo get_theme_mod('ip_slide2_text'); ?><br> <?php if($button_slide2){ ?>
                                <a href="<?php echo get_theme_mod('ip_img_link_btn2') ?>"><button class="btn bg-personalized text-white py-0"><?php echo get_theme_mod('ip_img_btn2'); ?></button></h2></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previus</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <?php } else {?>
            <!-- Title no img -->
                <div class="container-fluid py-5 pt-lg-90 text-center text-justify text-white bg-personalized">
                    <h1 class="text-white text-mobile"><?php wp_title();?></h1>
                </div> 
            <!-- end title no img -->
        <?php } ?>
    <!-- end homepage img -->
    <!-- Content -->
    	<!-- If texts exists -->   
            <div class="row mx-auto bg-personalized">            
                <!-- Text 1 (desktop) -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show1');

                    if ($ip_homepage_show == 'true'){ ?>
                        <div class="py-3 col-12 col-md-6 col-lg-4 mx-auto bg-personalized show-desktop" >
                            <h2 class="text-center">
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title1') ?></span>
                            </h2>
                            <img class="aligncenter wp-image-10" src="<?php echo get_site_icon_url() ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling1'); ?> " >
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img1')); ?>" class="img-fluid"><br>
                                <?php echo get_theme_mod('ip_homepage_text1') ?>
                            </p>
                            
                            <?php $header_btn = get_theme_mod('ip_homepage_btn1');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <a href="<?php echo get_theme_mod('ip_homepage_link_btn1') ?>">
                                        <button class="container-fluid btn">
                                            <?php echo get_theme_mod('ip_homepage_btn1') ?>
                                        </button>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 1 (desktop) -->
                <!-- Text 2 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show2');

                    if ($ip_homepage_show == 'true'){ ?>
                        <div class="py-3 col-12 col-md-6 col-lg-4 mx-auto bg-personalized">
                            <h2 class="text-center">
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title2') ?></span>
                            </h2>
                            <img class="aligncenter wp-image-10" src="<?php echo get_site_icon_url() ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling2'); ?> " >
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img2')); ?>" class="img-fluid"><br>
                                <?php echo get_theme_mod('ip_homepage_text2') ?>
                            </p>
                            <?php $header_btn = get_theme_mod('ip_homepage_btn2');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <a href="<?php echo get_theme_mod('ip_homepage_link_btn2') ?>">
                                        <button class="container-fluid btn">
                                            <?php echo get_theme_mod('ip_homepage_btn2') ?>
                                        </button>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 2 -->
                <!-- Text 3 -->
                    <?php $ip_homepage_show = get_theme_mod('ip_homepage_show3');

                    if ($ip_homepage_show == 'true'){ ?>
                        <div class="py-3 bg-personalized text-white col-12 col-md-6 col-lg-4 mx-auto" >
                            <h2 class="text-center" >
                                <span class="text-white"><?php echo get_theme_mod('ip_homepage_title3'); ?></span>
                            </h2>
                            <img class="aligncenter wp-image-10" src="<?php echo get_site_icon_url() ?>" alt="" width="20" height="20" />
                            <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling3'); ?> " >
                                <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img3')); ?>" class="img-fluid"><br>
                                <?php echo get_theme_mod('ip_homepage_text3') ?>
                            </p>
                            <?php 
                            $header_btn = get_theme_mod('ip_homepage_btn3');

                            if ($header_btn){
                                ?>
                                <p class="text-center">
                                    <a href="<?php echo get_theme_mod('ip_homepage_link_btn3') ?>">
                                        <button class="container-fluid btn">
                                            <?php echo get_theme_mod('ip_homepage_btn3') ?>
                                        </button>
                                    </a>
                                </p>
                            <?php } ?>
                        </div>
                    <?php } ?>
                <!-- end text 3 -->
            </div>
            <hr>
        <!-- end if texts exists --> 
        <!-- Sidebar front page -->
            <?php if(is_active_sidebar( 'homepage' )){
                get_sidebar( 'homepage' ); ?>
                <hr>
            <?php } ?>
        <!-- end sidebar front page -->
        <!-- The content -->
            <?php if ( is_front_page() && !is_home() ) {?>
                <?php get_template_part('content-home') ?>
            <?php } else { ?> 
                <h2 class="text-center">Lo más reciente</h2>
                <div class="card-columns-2 p-2">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()) ?> 
                    <?php endwhile; endif; ?> 
                </div>
                <div class="py-5 px-3 text-center">
                    <h5>Estás buscando un articulo más antiguo?</h5>
                    <?php get_search_form(); ?>
                </div>
            <?php }?>
        <!-- end the content -->
        <!-- Text 1 (mobile) -->
            <?php $ip_homepage_show = get_theme_mod('ip_homepage_show1');

            if ($ip_homepage_show == 'true'){ ?>
                <div class="py-3 mx-auto bg-personalized show-mobile" >
                    <h2 class="text-center">
                        <span class="text-white"><?php echo get_theme_mod('ip_homepage_title1') ?></span>
                    </h2>
                    <img class="aligncenter wp-image-10" src="<?php echo get_site_icon_url() ?>" alt="" width="20" height="20" />
                    <p class="p-2 mw-100 text-white text-<?php echo get_theme_mod('ip_homepage_text_aling1'); ?> " >
                        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ip_homepage_img1')); ?>" class="img-fluid"><br>
                        <?php echo get_theme_mod('ip_homepage_text1') ?>
                    </p>
                    
                    <?php $header_btn = get_theme_mod('ip_homepage_btn1');

                    if ($header_btn){
                        ?>
                        <p class="text-center">
                            <a href="<?php echo get_theme_mod('ip_homepage_link_btn1') ?>">
                                <button class="container-fluid btn bg-personalized text-white">
                                    <?php echo get_theme_mod('ip_homepage_btn1') ?>
                                </button>
                            </a>
                        </p>
                    <?php } ?>
                </div>
            <?php } ?>
        <!-- end text 1 (mobile) -->
    <!-- end content -->
<?php get_footer(); ?>