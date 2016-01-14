  
<div class="row contactForm">
<div class="col-md-offset-1 col-md-4">
<h1>Your Opinion or Inquirement</h1>
</div>
</div>
<div class="row">
<div class="col-md-offset-1 col-md-4">
<?php print drupal_render($form['submitted']['name']); ?>
   <?php print drupal_render($form['submitted']['phone']); ?>
    <?php print drupal_render($form['submitted']['email']); ?>
</div>
<div class="col-md-offset-2 col-md-4">

    <?php print drupal_render($form['submitted']['message']); ?>
</div>
</div>

<?php
  // Print out the progress bar at the top of the page
  print drupal_render($form['progressbar']);

  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).

  print drupal_render_children($form);
