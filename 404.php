<?php 
get_header();
$content = get_field('not_found_label', 'option');
?>

<div class="container my-4 py-4 error-page d-flex justify-content-center align-items-center">
    <div class="row message">
        <div class="col">
            <?php echo nl2p($content); ?>
        </div>
    </div>
</div>

<?php 
get_footer();
