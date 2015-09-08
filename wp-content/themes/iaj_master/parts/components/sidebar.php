<div id="right_bar">
    <div id="sidebar" class="hide-for-small-down">
        <?php wp_nav_menu(array('depth' => '1')); ?>
    </div>
    <!--#sidebar-->


    <?php if (is_front_page()) { ?>

        <div id="jer_sidebar_pics">
            <img id="jer_logo_text"
                 src="<?php print NV_IMG ?>/logoPic.png"/>
            <img id="jer_logo_quotes"
                 src="<?php print NV_IMG ?>/jeremyPic.png"/>
        </div>


    <?php } else { ?>

        <div id="vertBanner">
            <a href="http://www.zenomountainfarm.org/camps/cheshire-film/" target="_blank">
                <img
                    src="<?php print NV_IMG ?>/CheshireAdventures_JV-Banner1.jpg"
                    alt="Support Cheshire Film Camp!"
                />
            </a>
        </div>
    <?php }; ?>
</div>

