<?php
/*
    Template name: Slice
*/

/*
    1. Create and build a page template inside root/templates/acf/SLICE/template/page/{my_new_page}.php
    2. Go back here ( root/slice-index.php ) and rename value inside {} to the desired page WITHOUT .php -> get_slice_template('page/{my_new_page});
*/
?>

<?php get_slice_template('common/header'); ?>

    <?php get_slice_template('page/index'); ?>
    
<?php get_slice_template('common/footer'); ?>