<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $html_attributes:  String of attributes for the html element. It can be
 *   manipulated through the variable $html_attributes_array from preprocess
 *   functions.
 * - $html_attributes_array: An array of attribute values for the HTML element.
 *   It is flattened into a string within the variable $html_attributes.
 * - $body_attributes:  String of attributes for the BODY element. It can be
 *   manipulated through the variable $body_attributes_array from preprocess
 *   functions.
 * - $body_attributes_array: An array of attribute values for the BODY element.
 *   It is flattened into a string within the variable $body_attributes.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup templates
 */
?><!DOCTYPE html>
<html<?php print $html_attributes;?><?php print $rdf_namespaces;?>>
<head>
  <link rel="profile" href="<?php print $grddl_profile; ?>" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="all and (max-device-width:768px)" href="small.css" />
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <?php print $scripts; ?>
</script>


<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('vimeo_player', {
      height: '390',
      width: '640',
      videoId: 'M7lc1UVf-VE',
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  // 4. The API will call this function when the video player is ready.
  function onPlayerReady(event) {
    event.target.playVideo();
  }

  // 5. The API calls this function when the player's state changes.
  //    The function indicates that when playing a video (state=1),
  //    the player should play for six seconds and then stop.
  var done = false;
  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
   stopVideo() ;
    }
  }
  function stopVideo() {
    player.mute();
  }
  
  
 

  
</script>


	   <script type="text/javascript">
	  jQuery(function ($) {
		  
			  var myString = location.pathname;
			  var pathElements = myString.replace(/\/$/, '').split('/');
			  var lastFolder = pathElements[pathElements.length - 2];
			
		  
					  if(location.hash=="#businesstag"){
							$(window).load(function() {
							document.getElementById('businessclick').click();
					
							})
						} else if (location.hash=="#governmenttag") {
							$(window).load(function() {
							document.getElementById('governmentclick').click();
					
							})
						}else if (location.hash=="#schooltag") {					
								$(window).load(function() {
							document.getElementById('schoolclick').click();
						
							})
						}
						else if (location.hash=="#foampartytag") {
								$(window).load(function() {
							document.getElementById('brandclick').click();
					
							})
								
					
			}else if(lastFolder=="node"){
			
			$(window).load(function() {
				    var x = document.getElementsByTagName("p");
					
				
		
					if($(".image-desc").html()=="business"){
						
						document.getElementById('businessclick').click();
						$('.isotope-options').css('display', 'none');
						
					}
					else if($(".image-desc").html()=="government"){
						
					document.getElementById('governmentclick').click();
						$('.isotope-options').css('display', 'none');
					}
					else if($(".image-desc").html()=="school"){
						
					document.getElementById('campusclick').click();
						$('.isotope-options').css('display', 'none');
					}
					else if($(".image-desc").html()=="brand"){
						
					document.getElementById('foampartyclick').click();
						$('.isotope-options').css('display', 'none');
					}
			
			
					
					
					
					})
		
			}
				else{
					
				var myElem = document.getElementById('allclick');
				
				if (myElem != null){
					document.getElementById('allclick').click();
						$('.isotope-options').css('display', 'none');
				
				}
			}
			
			
			
			
	})
	
	</script>
	

</head>
<body<?php print $body_attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
	 <script type="text/javascript">
	 		  jQuery((function($){ 
		$(window).scroll(function () { 
	var scrollVal = $(this).scrollTop();
    var foampartyposition =document.getElementsByClassName("foampartytext1")[0].offsetHeight;
	foamFix
	var balloon1 =document.getElementsByClassName("balloon1");
	var balloon2 =document.getElementsByClassName("balloon2");
	var balloon3 =document.getElementsByClassName("balloon3");
	var foamFix =document.getElementsByClassName("foamFix");
			if( scrollVal < foampartyposition/2 ){
                balloon1[0].style.opacity=0;
				balloon2[0].style.opacity=0;
				balloon3[0].style.opacity=0;
				foamFix[0].style.opacity=0;
        	}else if(scrollVal > (foampartyposition/2)){
                balloon1[0].style.opacity=(scrollVal-foampartyposition/2)/(foampartyposition);
				balloon2[0].style.opacity=(scrollVal-foampartyposition/2)/(foampartyposition);
				balloon3[0].style.opacity=(scrollVal-foampartyposition/2)/(foampartyposition);
				foamFix[0].style.opacity=(scrollVal-foampartyposition/2)/(foampartyposition);
				
				
			}
			})
			}))
    </script>
</body>
</html>
