<?php
$button = $params['button'];
$imageID = $params['image'];
$arr = [ "class" => "meme", "idss" => "krk" ];
?>

<section class="hero" style="background-image: url('<?php echo wp_get_attachment_image_src($imageID, 'full', false)[0]; ?>')">
    <div class="container h-100">
        <div class="d-flex flex-column h-100 justify-content-end hero-slide-title">
            <h1 class="pb-4 basis"><?php echo $params['title']; ?></h1>
            <?php if(!empty($params['subtitle'])) { ?>
                <h2 class="pb-5"><?php echo $params['subtitle']; ?></h2>
            <?php } ?>
            <div class="green-button-wrapper">
                <?php include 'button-show.php'; ?>      
            </div>
        </div>
    </div>
</section>