<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>


<?php $videos = get_field('video');?>

<ul id="iaj_video_nav">
</ul>
<div id="iaj_prev_link">prev
</div>
<div id="iaj_next_link">next
</div>

<div id="iaj_video_box">
	<?php foreach ($videos as $video) : ?>
	<div class="iaj_video">
		<span class="iaj_video_title" style = "display:none"><?php print $video['title'];?></span>
		<a href = "<?php print $video['video'];?>" class="jer_media"></a>
	</div>
	<?php endforeach; ?>
</div>
