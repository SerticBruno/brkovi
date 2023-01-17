<?php 
get_header();
$content = get_field('404', 'option')['not_found_label'];
?>
<main id="content" role="main">

    <section class="error-page">
        <div class="container py-4 d-flex justify-content-center align-items-center">
            <div class="row message">
                <div class="col content mb-5 pb-5">
                    <?php echo nl2p($content); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_sidebar(); ?>

<?php 
get_footer();
?>