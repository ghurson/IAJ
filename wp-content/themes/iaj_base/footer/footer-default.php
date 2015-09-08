<?php

// This file is part of the Carrington JAM Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************

if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>

<div id="footer">
	<h3><a href="http://ghurson.com/" target="_blank">Site Design and Coding by Gregg Hurson</a></h3>
	<?php 
	wp_footer();
	/*
		<?php _e('Proudly powered by <a href="http://wordpress.org/" title="WordPress" rel="generator">WordPress</a> and <a href="http://carringtontheme.com" title="Carrington theme for WordPress">Carrington</a>.', 'carrington-jam'); ?>
		<?php wp_footer(); ?>
	
		<?php if (CFCT_DEBUG) { ?>
			<div style="border: 1px solid #ccc; background: #ffc; padding: 20px;">The <code>CFCT_DEBUG</code> setting is currently enabled, which shows the filepath of each included template file. To hide the file paths, edit this setting in the <?php echo CFCT_PATH; ?>functions.php file.</div>
		<?php } ?>
	<?php */ ?>
</div> 

<script type = "text/javascript">
$(document).ready(function(){
	
	$(".jer_film h3").each(function(){
		$(this).click(function(){
			$(".jer_film_content").slideUp('normal');
			$(this).next().slideDown('normal',function(){
				$(this).children('a').media({ width: 500, height: 281, autoplay: true });
			});
		})
	})
	
	$("#iaj_video_box").cycle({ 
	    speed:  'fast', 
	 		timeout: 0,
			prev: "#iaj_prev_link",
			next: "#iaj_next_link",
	    pager:  '#iaj_video_nav' ,
      pagerAnchorBuilder: pagerFactory
	});
	
	function pagerFactory(idx, slide) {
	            var s = idx > 2 ? ' style="display:none"' : '';
							var slide_title = $(slide).children(".iaj_video_title").text();
	            return '<li'+s+'><a href="#" '+s+'>' + slide_title + '</a></li>';

	        };
	
	$(".jer_media").media({ width: 690, height: 388, autoplay: true });
	
	$("#jer_front_video").media({ width: 375, height: 211, autoplay: true });
  
  $(".iaj_gallery_thumb").lightBox();
	
	$("#sidebar").corner('bottom cc:#000 10px');
	$("#content > .bg").corner('cc:#000 10px');
	$("#jer_sidebar_quote").cycle();
	$(".wpcf7-list-item:first-child label").addClass("selected");
	$(".wpcf7-list-item label").each(function(){
		$(this).click(function(){
			$(".wpcf7-list-item label").each(function(){
				$(this).removeClass("selected");
			});
			$(this).addClass("selected");
		});
	});
	$(".wpcf7-radio .wpcf7-list-item:first-child > label").click(function(){
		$(".personal").addClass("super_show").show();
		$(".business").removeClass("super_show").hide();
	});
	$(".wpcf7-radio .wpcf7-list-item:last-child > label").click(function(){
		$(".personal").removeClass("super_show").hide();
		$(".business").addClass("super_show").show();
	});
	$("#sidebar a").each(function(){
		$(this).hover(function(){
			$(this).animate({color: '#FECB00'})
		},function(){
			$(this).animate({color: '#ffffff'})
		});
	});
});
/*
	$('#quoteContainer').load("modules/quote.php");

	homeMovieSwitch(true)


	$('#topQuoteContainer').load("modules/topQuote.php");
	$('#topQuotePadding').corner('bottom, cc:#010101').hide();



	$('#siteNavigationPadding').corner('bottom, cc:#010101');
	$('#siteNavigationContainer').load("modules/navigation.php");

	$('#featuredContainer').corner('cc:#001218');
	$('#footerOuter').corner('bottom, cc:#010101');

	var newMovie = "<div id = 'webcastContainer'><h1><h5 class='media' href='scripts/mediaplayer.swf?file=../media/webcasts/" + latestWebcast + "'></h5></h1></div>"
	$("#webcastPadding").append(newMovie).corner('bottom, cc:#010101').hide();
	$('#webcastContainer h5.media').media({ width: 270, height: 220, autoplay: true });
	$('#webcastContainer').corner('bottom, cc:#ff6413');

	if (curPage == "index.php" || curPage == "home")
	{
		getPage('home');
		$("#topDivContainer").show();
		$("#quoteContainer").hide();
		} else
		{
			getPage(curPage);
			$("#topDivContainer").hide();
			$("#videoPadding").hide();
		}


		switch(curPage){

			case "jsfavs":
			case "videos":
			$("#horzBanner").show(); 
			break;

			case "talent":
			case "about":
			$("#vertBanner").show();
			break;

		};	



	});




	if (curPage != "home")
	{
		$("#quoteContainer").show();
	}

	function homeMovieSwitch(trueFalse)
	{
		if (trueFalse) {
			$("#topDivContainer").load("content/homeMovie.php");
		}else{		
			$("#topDivContainer").append("<img src = '../images/helloTag.png'>");
		};
	};


	function getPage(page)
	{	
		switch(page){
			case 'sarahPics':
			page = 'pics';
			$('#featuredInnerContainer').load("content/" + page + ".php", 
				function(){
					getPic('http://picasaweb.google.com/data/feed/base/user/iamjeremyvest/albumid/5391000613780272897?alt=json&hl=en_US');
				});
			break;
			
			case 'kristenVideo':
			page = 'videos';
			$('#featuredInnerContainer').load("content/" + page + ".php", 
				function(){
					$('#vidPlayer').empty();
					$('#media p').remove();
					$('.media').empty();
					$('#vidPlayer').append('<h5 class="media" href="scripts/mediaplayer.swf?file=http://iamjeremyvest.com/media/videos/jerAndKristen.flv"></h5>');
					$('h5.media').media({ autostart: true, width: 460, height: 370});
			});
			break;
			
			default:
			$('#featuredInnerContainer').load("content/" + page + ".php");
			break;
			
		}




		if (curPage == "index.php" || "home")
		{
			$("#topDivContainer").show();
			} else
			{
				$("#topDivContainer").hide();
				$("#videoPadding").hide();
			}



			$('#siteNavigationContainer a').removeClass("active");
			var site = "#siteNavigationContainer #" + page
			$(site).addClass("active");


			$("#featuredInnerContainer").empty();
			try{clearTimeout(quoteTimerInterval);}catch(e){}


			var blogIndex = 1;

			$('body').attr({id:page});


			switch(page){

				case "home":
				var pageTitle = "Welcome to J's House!";
				break;

				case "talent":
				var pageTitle = "J's resume";
				break;

				case "about":
				var pageTitle = "J's story";
				break;

				case "blog":
				var pageTitle = "J's blog";
				break;

				case "critics":
				var pageTitle = "J's fans";
				break;

				case "contact":
				var pageTitle = "J's mailbox";
				break;

				case "videos":
				var pageTitle = "J's vids";
				break;

				case "pics":
				var pageTitle = "J's pics";
				break;

				case "jsfavs":
				var pageTitle = "J's favs";
				break;

				default :
				var pageTitle = " ";
				break;
			}
			$("#titleContainer h1").text(pageTitle);
			document.title = 'i am jeremy vest :: ' + pageTitle;

			switch (page)
			{
				case "home":
				{
					$('#quotePadding').show()
					$('#logoContainer').hide();		
					$("#topDivContainer").show();
					break;
				}	
				case "critics":
				case "contact":
				case "blog":
				case "about":
				{
					$('#webcastPadding').show();
					$('#topQuotePadding').show();
					$('#quoteContainer').show();
					break;
				}
				case "pics":
				case 'talent':
				case "videos":
				{
					$('#webcastPadding').hide();
					$('#topQuotePadding').hide();
					$('#quoteContainer').show();
					break;
				}
				default:
				{
					$('#webcastPadding').show();
					$('#topQuotePadding').show();	
					$('#topDivContainer').hide();
					$('#logoContainer').show();
					break;
				}
			};

		}
		
		*/
</script>
</body>
</html>

