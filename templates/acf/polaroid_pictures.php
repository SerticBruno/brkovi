<?php

$title = $params['title'];
$description = $params['description'];
// myErr($params);
$showButton = $params['show_button'];
$button = $params['button'];
$link = $params['button']['internal'];

?>

<section class="pictures">
    <div class="container">
        <div class="row">
            <div class="row pictures-list">
                <?php foreach ($params['pictures'] as $k => $v) { ?>
                    <div class="col-8 col-lg-4 pt-5 pb-5 link-wrapper rot-<?php echo $k ?>">
                        <!-- <a href="<?php echo get_permalink($post); ?>" class="position-relative"> -->
                            <div class="pictures-card card">
                                
                                <div class="img-wrapper">
                                    <?php echo wp_get_attachment_image($v['image']['id'], 'full', false); ?>
                                </div>
                                <div class="info text center p-3">
                                    <?php echo $v['title'] ?>
                                </div>
                            </div>
                        <!-- </a> -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>