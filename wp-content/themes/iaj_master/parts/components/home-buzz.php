<?php

$buzz_query = new WP_Query(array(
    'post_type' => 'buzz',
    'posts_per_page' => -1
));

$buzz_posts = $buzz_query->posts;

if($buzz_query->found_posts == 0) return false;

?>

<div class="row iaj-buzz cycle-slideshow"
     data-cycle-slides=".clearfix"
     data-cycle-log="false"
     data-cycle-timeout="7000"
    >


    <?php
    foreach ($buzz_posts as $buzz):

        $img = wp_get_attachment_image_src(get_post_thumbnail_id($buzz->ID), 'large');
        ?>


        <div class="clearfix">

            <div class="large-4 columns large-push-8">
                <?php if (get_field("featured_link", $buzz->ID)): ?>
                    <a href="<?php the_field("featured_link", $buzz->ID) ?>" target="_blank">
                        <div class="pic" style="background-image: url(<?php print $img[0] ?>)"></div>
                    </a>
                <?php else: ?>
                    <div class="pic" style="background-image: url(<?php print $img[0] ?>)"></div>
                <?php endif; ?>
            </div>


            <div class="large-8 columns large-pull-4 text">
                <div class="content">
                    <h3 class="title"><?php print $buzz->post_title ?></h3>
                    <?php print apply_filters("the_content", $buzz->post_content) ?>
                </div>
            </div>

        </div>


    <?php endforeach; ?>
</div>
