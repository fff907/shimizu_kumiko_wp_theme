<?php get_header(); ?>

<main class="container mt-5">
  <h1 class="mb-4">ようこそ！</h1>
  <p class="mb-5">これは自作のWordPressテーマです。</p>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="mb-4">
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>記事がありませんでした。</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
