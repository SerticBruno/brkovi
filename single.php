<?php get_header(); ?>
<main id="content" role="main">
<?php if (!FlexibleContent('page_builder')) { ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'templates/wp/entry' ); ?>
	<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
	<?php endwhile; endif; ?>
	<footer class="footer">
		<?php get_template_part( 'templates/wp/nav', 'below-single' ); ?>
	</footer>
<?php } ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>