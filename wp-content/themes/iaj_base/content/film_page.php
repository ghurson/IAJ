<?php $films = get_field("film"); ?>

<div id="jer_film_box">
	<?php foreach($films as $film): ?>
		<div class="jer_film">
			<h3><?php print $film['title']; ?></h3>
			<div class="jer_film_content">
				<a href="<?php print $film['video']; ?>"></a>
				<p><?php print $film['description']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php $pics = get_field("pics"); ?>

<div id="jer_pic_box">
	<?php foreach($pics as $pic)?>
		<img src="<?php bloginfo("template_directory"); ?>/timthumb.php?src=<?php $pic['image']; ?>">
	<?php endforeach; ?>
</div>
<?php print_r($pics); ?>