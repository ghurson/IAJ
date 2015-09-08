<?php $videos = get_field('video');?>

<ul id="iaj_video_nav">
</ul>
<div id="iaj_prev_link">prev
</div>
<div id="iaj_next_link">next
</div>

<div
    id="iaj_video_box"
    class="cycle-slideshow"
    data-cycle-slides="div"
    data-cycle-prev="#iaj_prev_link"
    data-cycle-next="#iaj_next_link"
    >
    <?php foreach ($videos as $video) : ?>
        <div class="embed-container">
            <?php print $video['video'] ?>
        </div>
    <?php endforeach; ?>
</div>
