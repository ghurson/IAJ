        <footer id="footer" class="row">

            <?php $btm_ad = get_field('bottom_ad','options'); ?>

            <div id = "horzBanner">
                <a
                    href = "<?php print $btm_ad[0]['link']; ?>"
                    target = "_blank">
                    <img
                        src="<?php print $btm_ad[0]['image']; ?>"
                        alt="Support Cheshire Film Camp!"
                        />
                </a>
            </div>

            <?php get_template_part("parts/components/bottom-quote"); ?>

            <div id = "footerOuter">
                <p>Website design and code by Gregg Hurson</p>
            </div>
        </footer>

        <!-- start wp_footer() hooks -->
        <?php wp_footer(); ?>
        <!-- end wp_footer() hooks -->

    </div>
    <!-- /#frame -->

</body>
</html>