<?php get_header(); ?>

<main class="container mt-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="mb-4">
      <h1 class="mb-3"><?php the_title(); ?></h1>
      <p class="text-muted">
        投稿日：<?php echo get_the_date(); ?>｜投稿者：<?php the_author(); ?>｜カテゴリ：<?php the_category(', '); ?>
      </p>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
