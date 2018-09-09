
<div class="blog-post">
  <div class="col-lg-4 blog-main" style="padding-right: 0; padding-left: 0; width: 100%;">
  <li class="flex-item">
    <article class="card">
      <header class="card__thumb">
        <a href="#">
          <?php
          //include_once 'functions.php';
          if ( get_the_post_thumbnail( $post_id ) != '' ) {
          //set_post_thumbnail_size( 100, 100, true );
            the_post_thumbnail('large');  
          }
          else {
            
          }
            // $link = str_replace(' ', '-', $post->post_title);
          ?>
        </a>
      </header>
      <div class="card__date">
        <p class="card__date__day" style="margin-bottom: 3px"><?php echo get_the_date('d'); ?></p>
        <span class="card__date__month"><?php echo get_the_date('D'); ?></span>
      </div>
      <div class="card__body">
        <div class="card__category"><a href="#">Photos</a></div>
        <h2 class="card__title"><a href="<?php echo get_post_permalink();//$link  ?>"><?php the_title(); ?></a></h2>
        <div class="card__subtitle">Episodio: </div>
        <?php
          echo "<p class='card__description'>" . short_desc() . "</p>";
        ?>
        <a href="<?php echo get_post_permalink(); ?>" class="button">
          <p>Download & Streaming</p> 
        </a>
      </div>
      <footer class="card__footer">
       
      </footer>
    </article>
  </li>
  </div>
  </div>
<!-- /.blog-post -->