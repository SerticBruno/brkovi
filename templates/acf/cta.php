<?php

$title = $params['title'];
$description = $params['description'];
// myErr($params);
$showButton = $params['show_button'];
$button = $params['button'];
$link = $params['button']['internal'];

?>

<section class="cta">
    <div class="container">
        <div class="row justify-content-around cta-row">
            <a href="<?php echo $link ?>" class="block col-11 col-md-10 row">
                <div class="info" style="background-image: url('<?php echo wp_get_attachment_image_url($params['image']['id'], 'full', false); ?>')">
                    <h2 class="title"><?php echo $title ?></h2>
                </div>
            </a>
            <div class="col-6">
                <?php if($showButton){ ?>
                    <div class="button-wrapper" style="transform: rotate(-2deg);">
                        <?php include THEME_DIR . '/templates/acf/button-show.php'; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>