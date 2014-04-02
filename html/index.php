<?php get_header(); ?>

<div class="medium-8 columns">
<?php while (have_posts()) : the_post(); ?>
  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <h1 class="entry-title">
      <a title="<?php printf(esc_attr__( 'Permalink to %s', 'compass' ), the_title_attribute( 'echo=0' ) ); ?>"
         href="<?php the_permalink(); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h1>
    <section class="entry-meta">
      <p>Geplaatst op <?php the_date(); ?></p>
    </section><!-- .entry-meta -->
    <section class="entry-content">
      <?php the_content(); ?>
    </section>
    <section class="entry-meta">
      <?php if (count(get_the_category())) : ?>
      <span class="category-links"><?php echo get_the_category_list(', '); ?></span>
      <?php endif; ?>
    </section>
  </article>
<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
