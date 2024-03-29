<?php
/*
Template Name: Hero
*/
get_header(); ?>

<header id="homepage-hero" class="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 large-12 columns clearfix">
			<img class="homepage-hero__img" src="/wp-content/uploads/sites/5/2015/01/tents-in-june-logo.png" alt=" " />
			<div class="homepage-hero__text">
				<h1 class="h"><?php bloginfo('name'); ?></h1>
				<p class="h h3 subheader"><?php echo str_replace( 'Drama', 'Drama<br />', get_bloginfo('description') ); ?></p>
				<p class="h h4 subheader when-where">Staged reading <time datetime="2015-02-08T18:00:00+05:00">Feb 8, 2015, 6PM</time> at <a href="https://www.cctvcambridge.org/
" title="Cambridge Community Television">CCTV</a>.<br>
Free wine and refreshments served.</p>
			</div>
		</div>
	</div>

</header>

	<div class="row">
		<main class="small-12 large-12 columns" role="main">

		<?php do_action('foundationPress_before_content'); ?>

		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action('foundationPress_page_before_entry_content'); ?>
				<header>
					<h1 class="h entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action('foundationPress_page_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_page_after_comments'); ?>
			</article>
		<?php endwhile;?>

		<?php do_action('foundationPress_after_content'); ?>

		</main>
</div>
<?php get_footer(); ?>
