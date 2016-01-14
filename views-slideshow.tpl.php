<?php

/**
 * @file
 * Default views template for displaying a slideshow.
 *
 * - $view: The View object.
 * - $options: Settings for the active style.
 * - $rows: The rows output from the View.
 * - $title: The title of this group of rows. May be empty.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($slideshow)): ?>
  <div class="skin-<?php print $skin; ?>">

<div class="row Newsdiv">


    <?php if (!empty($top_widget_rendered)): ?>
	<div class="col-md-8">
	<?php print $slideshow; ?>
	</div>
		<div class="newsItem col-md-4 " >
		<h1 class="text-center newsh1">NEWS</h1>
      <div class="views-slideshow-controls-top clearfix ">
	  
        <?php print $top_widget_rendered; ?>
      </div>
	  </div>
	  <?php else: ?>
	  	<div class="col-md-12">
	  <?php print $slideshow; ?>
	   </div>
    <?php endif; ?>

    <?php if (!empty($bottom_widget_rendered)): ?>
      <div class="views-slideshow-controls-bottom clearfix">

        <?php print $bottom_widget_rendered; ?>
      </div>
    <?php endif; ?>
  </div>
  </div>
<?php endif; ?>
