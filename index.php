<?php $plasso = get_theme_mod('plasso'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>
		<?php wp_head(); ?>
	</head>

  <body>
    <?php

		// Welcome: If nothing has been customized, fet the welcome template.
		if(
      $plasso['intro_toggle'] == false &&
      $plasso['details_toggle'] == false &&
      $plasso['about_toggle'] == false &&
      $plasso['cta_toggle'] == false &&
      $plasso['faq_toggle'] == false &&
      $plasso['contact_toggle'] == false &&
      $plasso['footer_toggle'] == false
    ) {
      get_template_part('part-welcome');
    }

    // If 404: Get the 404 message if there’s an error.
    if(is_404()) {
      get_template_part('part-404');
    }

		?>

    <div class="wrapper">
      <?php

      // Intro: Get the Intro/Header part if it’s toggled.
      if($plasso['intro_toggle'] == true) {
        get_template_part('part-intro');
      }

      // Details: Get the Details part if it’s toggled.
      if($plasso['details_toggle'] == true) {
        get_template_part('part-details');
      }

      // About: Get the About part if it’s toggled.
      if($plasso['about_toggle'] == true) {
        get_template_part('part-about');
      }

      // CTA: Get the CTA part if it’s toggled.
      if($plasso['cta_toggle'] == true) {
        get_template_part('part-cta');
      }

      // FAQ: Get the FAQ part if it’s toggled.
      if($plasso['faq_toggle'] == true) {
        get_template_part('part-faq');
      }

      // Contact: Get the Contact part if it’s toggled.
      if($plasso['contact_toggle'] == true) {
        get_template_part('part-contact');
      }

      // Footer: Get the Footer part if it’s toggled.
      if($plasso['footer_toggle'] == true) {
        get_template_part('part-footer');
      }

      ?>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
