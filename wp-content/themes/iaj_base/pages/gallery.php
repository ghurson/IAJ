<?php $values = get_field("gallery");
foreach ($values as $value) : ?>
<h2 class="iaj_gallery_title"><?php print $value['title']; ?></h2>
<?php foreach ($value['pics'] as $pic) { ?>
  <a href="<?php print $pic['image']; ?>" class="iaj_gallery_thumb" title="<?php print $pic['title']; ?>"><img src="<?php bloginfo("template_directory"); ?>/timthumb.php?src=<?php print $pic['image']; ?>" /></a>
  <?php }?>
<?php endforeach; ?>