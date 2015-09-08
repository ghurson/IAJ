<?php 
$galleries = get_field("gallery");
foreach ($galleries as $gallery) : ?>
    <h2 class="iaj_gallery_title"><?php print $gallery['title']; ?></h2>
    <ul class="small-block-grid-3">
        <?php foreach ($gallery['pics'] as $pic): ?>
        <li>
            <img src="<?php print $pic['image'] ?>" />
        </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>