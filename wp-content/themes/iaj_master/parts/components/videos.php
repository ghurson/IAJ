<?php $videos = get_field('video');?>

<div
    id="iaj_video_box"
    >
    <?php foreach ($videos as $video) : ?>
        <h2 class="iaj_video_title"><?php print $video['title'] ?></h2>
        <div class="embed-container">
            <?php print $video['video'] ?>
            <br />
        </div>
    <?php endforeach; ?>
</div>
