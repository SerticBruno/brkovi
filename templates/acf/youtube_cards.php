<?php

$cards = $params['cards'];

?>

<section class="youtube-cards">
    <div class="container">
        <div class="row justify-content-around youtube-list">
            <?php foreach($cards as $k => $v) { ?>
                <div class="col-10 col-md-6 card-wrapper text-center">
                    <a class="link-box" href="<?php echo $v['url'] ?>" target="_blank">
                        <h3><?php echo $v['title'] ?></h3>
                    </a>
                    <div class="card">
                        <iframe src="<?php echo $v['url'] ?>">
                        </iframe>
                        <a href="<?php echo $v['url'] ?>" target="_blank"><?php echo $v['description'] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>