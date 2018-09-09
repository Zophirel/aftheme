<?php 
  get_header(); 
?>
<div class="container-fluid">

  <?php get_search_form(); ?>
        <ul class="menulink">
          <li id="fistel" href="/wordpress">HOME</li>
          <li class="navel" href="/wordpress">HENTAI</li>
          <li class="navel" href="/wordpress">CONTACTS</li>
          <li class="navel" href="/wordpress">CHAT</li>
          <?php wp_list_pages( '&title_li=' ); ?>
        </ul>
        <select name="list" id="mobilemenu" onchange="location = this.value;">
          <option>Scegli una sezione</option>
          <option value="index.php">Home</option>
          <option>Hentai</option>
          <option>Contacts</option>
          <option>Chat</option>
        </select>
  <ul class="flex-container">
    <?php if ( have_posts() ) : ?>
    <!-- Add the pagination functions here. -->
    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post();  ?>
      <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    <!-- End of the main loop -->
    <!-- Add the pagination functions here. -->
    <?php kriesi_pagination(); ?>
    <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
  </ul>
  <!-- /.blog-main -->
  </div> <!-- /.row -->
  <?php get_footer(); ?>