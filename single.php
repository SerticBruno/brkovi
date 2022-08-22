<?php get_header(); ?>
<main id="content" role="main">

<?php include THEME_DIR . '/templates/acf/hero.php'; ?>

<?php if (!FlexibleContent('page_builder')) { ?>
	
<?php } ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>