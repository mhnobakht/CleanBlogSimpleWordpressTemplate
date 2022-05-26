<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php
            if(have_posts()):
                while(have_posts()) : the_post();
            ?>
          <div class="post-heading">
            <h1><?php the_title(); ?></h1>
            <span class="meta">Posted by
              <a href="#"><?php the_author(); ?></a>
              on <?php the_time('F j, Y'); ?></span>
          </div>
          <?php
            endwhile;
        endif;
        ?>
        </div>
      </div>
    </div>
  </header>