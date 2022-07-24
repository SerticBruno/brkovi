<?php

$features = $params['feature'];

?>

<section class="features">
    <div class="container">
        <div class="row justify-content-around">
            <?php foreach($features as $k => $v) { ?>
                <div class="card col-8 col-md-3 row text-center rot-<?php echo ($k % 6) + 1?>">
                    <a href="<?php echo $v['link'] ?>">
                        <img src="<?php echo $v['icon']['url'] ?>"></img>
                        <h3><?php echo $v['title'] ?></h3>
                        <p><?php echo $v['description'] ?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>