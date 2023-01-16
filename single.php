<?php get_header(); ?>
<main id="content" role="main">

<?php


// myErr(get_the_post_thumbnail());
// myErr(get_post());

$post = get_post();
$id = get_the_ID();


$postHero = get_field('post_hero', $id);


?>

<?php include THEME_DIR . '/templates/acf/hero.php'; ?>

<?php if (!FlexibleContent('page_builder')) { ?>
	
<?php } ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>