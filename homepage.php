<?php
/*
Template Name: Staged Reading
*/
get_header(); ?>

<header id="homepage-hero" class="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 large-12 columns clearfix">
			<img class="left homepage-hero__img" src="/wp-content/uploads/sites/5/2015/01/tents-in-june-logo.png" alt=" " />
			<div class="homepage-hero__text">
				<h1 class="h"><?php bloginfo('name'); ?></h1>
				<p class="h h3 subheader"><?php echo str_replace( 'Drama', 'Drama<br />', get_bloginfo('description') ); ?></p>
				<p class="h h4 subheader when-where"><?php the_content(); ?></p>
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
					<div style="width:100%; text-align:left;" >
						<iframe  src="//eventbrite.com/tickets-external?eid=15483863653&amp;ref=etckt" frameborder="0" height="214" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="no" allowtransparency="true"></iframe>
						<div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" >
							<a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com/r/etckt">Sell Tickets Online</a> <span style="color:#ddd;">through</span> <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com?ref=etckt">Eventbrite</a>
						</div>
					</div>
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
