<?php 

$posts = get_posts();
// myErr($posts);
?>

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="news-title"><?php echo $params['title'] ?></h2>
            </div>
            <div class="row news-list">
                <?php foreach($posts as $post => $v){ ?>
                    <?php get_component_template('cards/news-card', $v); ?>
                <?php }?>
            </div>
        </div>
    </div>
</section>