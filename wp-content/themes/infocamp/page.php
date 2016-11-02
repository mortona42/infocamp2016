<?php get_header(); ?>

<section class="page-container" role="document">
  <?php do_action('foundationPress_after_header'); ?>

  <?php while (have_posts()) : the_post(); ?>
	<header class="page-title">
		<div class="row">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
	</header>
  <?php endwhile;?>

  <div class="row">

	<div class="small-12 large-8 columns" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>