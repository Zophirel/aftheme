<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once 'extlink.php'; ?>
    <?php include_once 'functions.php'; ?>
    
    <?php wp_head();?>
  </head>
  <body>
    
    <?php
    $popularpost = new WP_Query(
    array( 'posts_per_page' => 4, 'post_status' => 'publish', 'orderby' => 'publish_date', 'order' => 'DES')
    );

    
    $titles = array();
    $s_desc = array();
    $image = array();
    while ( $popularpost->have_posts()) : $popularpost->the_post();
    
    $titles[] = the_title('', '', FALSE); // set third parameter to FALSE.
    $s_desc[] = short_desc();
    $image[] = get_the_post_thumbnail_url($post_id, "large");
    
    endwhile;
    ?>
    
    <div class="blog-masthead">
      <div class="ct-header ct-header--slider ct-slick-custom-dots" id="home">
        <div class="ct-slick-homepage" data-arrows="true" data-autoplay="true">
          
          <div class="ct-header tablex item" data-background="<?php echo $image[0]; ?>">
            <div class="ct-u-display-tablex">
              <div class="inner">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-lg-6 slider-inner">
                      <h1 class="title animated"><?php echo $titles[0]; ?></h1>
                      <p class="header animated slider-desc"><?php echo $s_desc[0]; ?></p>
                      <a class="btn btn-transparent btn-lg text-uppercase animated" href="">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ct-header tablex item" data-background="<?php echo $image[1]; ?>">
            <div class="ct-u-display-tablex">
              <div class="inner">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-lg-6 slider-inner">
                      <h1 class="title animated"><?php echo $titles[1]; ?></h1>
                      <p class="header animated slider-desc"><?php echo $s_desc[1]; ?></p>
                      <a class="btn btn-transparent btn-lg text-uppercase animated" href="">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ct-header tablex item" data-background="<?php echo $image[2]; ?>">
            <div class="ct-u-display-tablex">
              <div class="inner">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 col-lg-6 slider-inner">
                      <h1 class="title animated"><?php echo $titles[2]; ?></h1>
                      <p class="header animated slider-desc"><?php echo $s_desc[2]; ?></p>
                      <a class="btn btn-transparent btn-lg text-uppercase animated" href="">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          </div><!-- .ct-slick-homepage -->
          </div><!-- .ct-header -->
          <div class="container">
            
          </div>
        </div>
        <div class="container">
          <div class="blog-header">
            <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
            <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
          </div>