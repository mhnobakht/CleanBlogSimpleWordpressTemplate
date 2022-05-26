<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          <?php
            if(have_posts()):
                while(have_posts()): the_post();
          ?>
        <div class="post-preview">
          <a href="<?php the_permalink(); ?>">
            <h2 class="post-title">
              <?php the_title(); ?>
            </h2>
            <h3 class="post-subtitle">
              <?php echo wp_trim_words(get_the_content(), 33, '...'); ?>
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#"><?php the_author(); ?></a>
            on <?php the_time('F j, Y'); ?></p>
        </div>
        <hr>
        <?php
        endwhile;
        endif;
        ?>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>