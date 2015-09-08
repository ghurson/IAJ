<?php 
$galleries = get_field("gallery");
foreach ($galleries as $gallery) : ?>
    <h2 class="iaj_gallery_title"><?php print $gallery['title']; ?></h2>
    <ul class="small-block-grid-3">
        <?php foreach ($gallery['pics'] as $pic): ?>
        <li>
            <a
                href="<?php print $pic['image']; ?>"
                title="<?php print $pic['title']; ?>"
            >
                <img src="<?php print $pic['image'] ?>" />
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>