 <!-- Post Content -->
 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php
            while(have_posts()): the_post();
          ?>
            <p>
                <?php the_content(); ?>
            </p>
          <?php
            endwhile;
          ?>
        </div>
      </div>
    </div>
  </article>

  <hr>