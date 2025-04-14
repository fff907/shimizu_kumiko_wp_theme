<?php get_header(); ?>

<main class="container mt-5">
  <section class="news" id="news">
    <div class="section-heading">
      <h1 class="section-title">News</h1>
    </div>
    
    <div class="container">
      <div class="news-item">
        <div class="news-grid">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="news-card">
              <?php if (has_post_thumbnail()) : ?>
                <div class="news-image">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              <?php endif; ?>
              <div class="news-info">
                <p class="news-date"><?php the_time('Y-m-d'); ?></p>
                <h3 class="news-title"><?php the_title(); ?></h3>
                <a href="<?php the_permalink(); ?>" class="read-more">続きを読む</a>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>                  
    </div>     
  </section>
</main>

<?php get_footer(); ?>
