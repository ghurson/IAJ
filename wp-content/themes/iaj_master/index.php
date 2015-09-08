<?php
/**
 * DEFAULT TEMPLATE
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 */
\NV\Theme::get_header();
\NV\Theme::output_file_marker( __FILE__ );
?>

<div class="row">

	<div id="page_content" class="medium-8 large-9 columns">

		<div class="row">
			<div class="medium-6 columns">
				<?php get_template_part("parts/components/logo") ?>
			</div>

			<div class="columns show-for-small-down">
				<?php get_template_part("parts/components/mobile-menu") ?>
			</div>


			<div class="medium-6 columns">
				<?php get_template_part("parts/components/header-video") ?>
			</div>


		</div>

		<div id="content">
			<div class="inner">
				<h1 id = "page_title"><?php the_title() ?></h1>
				<?php
				the_content();
				if(get_the_ID() == 34) get_template_part("parts/components/gallery");
				if(get_the_ID() == 100) get_template_part("parts/components/videos");
				?>
			</div>
		</div>

	</div>

	<div class="medium-4 large-3 columns">
		<?php get_template_part("parts/components/sidebar") ?>
	</div>

</div>

<?php \NV\Theme::get_footer();