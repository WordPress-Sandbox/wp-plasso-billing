<?php

/* Customizer Everything
---------------------------------------------------------------------------------------------------- */

function plasso_customizer() {

	global $wp_customize;

	$wp_customize->remove_section('static_front_page');

	/* Yes Kirki? Cool, let’s do this.
	------------------------------------------------------------------------------------------------ */

	if(class_exists('Kirki')) {

		// Theme configuration for Kirki.
		Kirki::add_config('plasso_theme', array(
			'capability' => 'edit_theme_options',
			'option_type' => 'theme_mod',
		));

		/* The Product Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('product_section', array(
			'title' => __('Billing Settings', 'plasso_textdomain'),
			'description' => __('Settings for the Billing space you’ve created.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Space: For the Plasso space ID.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[space_id]',
			'label' => __('Billing Space ID', 'plasso_textdomain'),
			'description' => __('You’ll find your Billing Space ID at the end of your space URL when viewing your space on Plasso.com. For instance, if your space URL is <strong>https://plasso.com/s/zZ2NwPCfyU</strong>, your space ID would be <strong>zZ2NwPCfyU</strong>.'),
			'section' => 'product_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Protected Page: The protected page.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[space_page]',
			'label' => __('Forward URL', 'plasso_textdomain'),
			'description' => __('Set a Forward URL users will be redirected to after they finish checking out or logging in. This page is protected and can only be viewed by your customers.'),
			'section' => 'product_section',
			'type' => 'dropdown-pages',
			'priority' => 10,
		));

		/* The Intro Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('intro_section', array(
			'title' => __('Intro', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the intro section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Intro Toggle: Toggle the intro section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the intro section on or off.'),
			'section' => 'intro_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Intro Title: Just a textarea for the intro title.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_title]',
			'label' => __('Intro Title', 'plasso_textdomain'),
			'description' => __('Just enter a bit of text for your intro title.'),
			'section' => 'intro_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Intro Tagline: Just a textarea for the intro tagline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_tagline]',
			'label' => __('Intro Tagline', 'plasso_textdomain'),
			'description' => __('Just enter a bit of text for your intro tagline.'),
			'section' => 'intro_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		// Intro Text: Just a textarea for the intro text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_text]',
			'label' => __('Intro Text', 'plasso_textdomain'),
			'description' => __('Just enter a bit of text for your intro text.'),
			'section' => 'intro_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		// Intro Image: The intro/video background image.

		Kirki::add_field( 'plasso_theme', array(
			'settings' => 'plasso[intro_image]',
			'label' => __('Intro Image', 'plasso_textdomain'),
			'description' => __('The background image for your intro &amp; video.'),
			'section' => 'intro_section',
			'type' => 'image',
			'priority' => 10,
		));

		// Button Text: For the type of product/service being offered.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[intro_button]',
			'label' => __('Button Text', 'plasso_textdomain'),
			'description' => __('The label you would like to use for your product/service button (e.g. “See Plans”).'),
			'section' => 'intro_section',
			'type' => 'text',
			'priority' => 10,
		));

		/* The Details Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('details_section', array(
			'title' => __('Details', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the details section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Details Toggle: Toggle the details section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[details_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the details section on or off.'),
			'section' => 'details_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Details Title: Just a textarea for the details intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[details_title]',
			'label' => __('Title', 'plasso_textdomain'),
			'description' => __('A little text for your details title.'),
			'section' => 'details_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Details Repeater: Here’s the features repeater for the actual product features.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[details_detail]',
			'label' => __('Product Details', 'plasso_textdomain'),
			'description' => __('Add, remove and/or organize details.'),
			'row_label' => array(
				'value' => 'detail'
			),
			'section' => 'details_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'icon' => array(
					'label' => __('Icon', 'plasso_textdomain'),
					'type' => 'image',
				),
				'title' => array(
					'label' => __('Title', 'plasso_textdomain'),
					'type' => 'text',
				),
				'text' => array(
					'label' => __('Text', 'plasso_textdomain'),
					'type' => 'textarea',
				),
			),
		));

		/* The About Section
    -------------------------------------------------------------------------------------------- */

		Kirki::add_section('about_section', array(
			'title' => __('About', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the about section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// About Toggle: Toggle the about section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[about_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
      'description' => __('Toggle the about section on or off.'),
			'section' => 'about_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// About Image: The about image.

  	Kirki::add_field( 'plasso_theme', array(
			'settings' => 'plasso[about_image]',
			'label' => __('About Image', 'plasso_textdomain'),
      'description' => __('The about image.'),
			'section' => 'about_section',
			'type' => 'image',
			'priority' => 10,
		));

		// About Title: Just a textarea for the about section.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[about_title]',
			'label' => __('About Title', 'plasso_textdomain'),
      'description' => __('Just enter a bit of text for your about title.'),
			'section' => 'about_section',
			'type' => 'text',
			'priority' => 10,
		));

    // About Text: Just a textarea for the about section.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[about_text]',
			'label' => __('About Text', 'plasso_textdomain'),
      'description' => __('Just enter a bit of text for the about section.'),
			'section' => 'about_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		/* The CTA Bar
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('cta_section', array(
			'title' => __('Call to Action Bar', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for your “CTA” bar.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// CTA Bar Toggle: Toggle the CTA section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[cta_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the “CTA” bar/section on or off.'),
			'section' => 'cta_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// CTA Bar Text: The text displayed to the left of the buy now button in the buy bar.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[cta_text]',
			'label' => __('Text', 'plasso_textdomain'),
			'description' => __('Some call to action text (e.g. “Limited time introductory offer.”).'),
			'section' => 'cta_section',
			'type' => 'text',
			'priority' => 10,
		));

		// CTA Button Text: The CTA button text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[cta_button]',
			'label' => __('Button Text', 'plasso_textdomain'),
			'description' => __('The button text (e.g. “View Plans”).'),
			'section' => 'cta_section',
			'type' => 'text',
			'priority' => 10,
		));

		/* The Pricing Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('pricing_section', array(
			'title' => __('Pricing', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the Pricing section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Pricing Toggle: Toggle the Pricing section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[pricing_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the Pricing section on or off.'),
			'section' => 'pricing_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Pricing Intro Headline: Just a textarea for the Pricing intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[pricing_headline]',
			'label' => __('Pricing Headline', 'plasso_textdomain'),
			'description' => __('For your Pricing section headline (e.g. “Pricing”).'),
			'section' => 'pricing_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Pricing Repeater: Here’s the Pricing repeater.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[pricing_plan]',
			'label' => __('Pricing Plans', 'plasso_textdomain'),
			'description' => __('Add, remove and/or organize Pricing Plans.'),
			'row_label' => array(
				'value' => 'Plan'
			),
			'section' => 'pricing_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'name' => array(
					'label' => __('Name', 'plasso_textdomain'),
					'type' => 'text',
				),
				'id' => array(
					'label' => __('Plasso Plan ID (e.g. “1234”)', 'plasso_textdomain'),
					'type' => 'text',
				),
				'price' => array(
					'label' => __('Price', 'plasso_textdomain'),
					'type' => 'text',
				),
				'period' => array(
					'label' => __('Pricing Period (e.g. “Month”)', 'plasso_textdomain'),
					'type' => 'text',
				),
				'text' => array(
					'label' => __('Text', 'plasso_textdomain'),
					'type' => 'textarea',
				),
				'button' => array(
					'label' => __('Button Text (e.g. “Subscribe”)', 'plasso_textdomain'),
					'type' => 'text',
				),
			),
		));

		/* The FAQ Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('faq_section', array(
			'title' => __('FAQs', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the FAQ section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// FAQ Toggle: Toggle the FAQ section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[faq_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the FAQ section on or off.'),
			'section' => 'faq_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// FAQ Intro Headline: Just a textarea for the FAQ intro headline.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[faq_headline]',
			'label' => __('FAQ Headline', 'plasso_textdomain'),
			'description' => __('For your FAQ section headline.'),
			'section' => 'faq_section',
			'type' => 'text',
			'priority' => 10,
		));

		// FAQ Repeater: Here’s the FAQ repeater for the actual product FAQ’s.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[faq_q]',
			'label' => __('Plan FAQ’s', 'plasso_textdomain'),
			'description' => __('Add, remove and/or organize FAQ’s.'),
			'row_label' => array(
				'value' => 'FAQ'
			),
			'section' => 'faq_section',
			'type' => 'repeater',
			'priority' => 10,
			'fields' => array (
				'question' => array(
					'label' => __('Question', 'plasso_textdomain'),
					'type' => 'text',
				),
				'answer' => array(
					'label' => __('Answer', 'plasso_textdomain'),
					'type' => 'textarea',
				),
			),
		));

		/* The Contact Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('contact_section', array(
			'title' => __('Contact', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the contact section.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Contact Toggle: Toggle the contact section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[contact_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the contact section on or off.'),
			'section' => 'contact_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Text: The contact text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[contact_text]',
			'label' => __('Text', 'plasso_textdomain'),
			'description' => __('Add some contact text (e.g. “Need to get in touch?”).'),
			'section' => 'contact_section',
			'type' => 'textarea',
			'priority' => 10,
		));

		// Button Text: The contact button text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[contact_button_text]',
			'label' => __('Button Text', 'plasso_textdomain'),
			'description' => __('The text for your mailto button.'),
			'section' => 'contact_section',
			'type' => 'text',
			'priority' => 10,
		));

		// Email: The contact email.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[contact_email]',
			'label' => __('Email', 'plasso_textdomain'),
			'description' => __('Add the mailto email address you would like to use.'),
			'section' => 'contact_section',
			'type' => 'text',
			'priority' => 10,
		));

		/* The Footer Section
		-------------------------------------------------------------------------------------------- */

		Kirki::add_section('footer_section', array(
			'title' => __('Footer', 'plasso_textdomain'),
			'description' => __('Content &amp; settings for the footer.', 'plasso_textdomain'),
			'priority' => 200,
			'capability' => 'edit_theme_options',
		));

		// Footer Toggle: Toggle the footer section on or off.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_toggle]',
			'label' => __('Display', 'plasso_textdomain'),
			'description' => __('Toggle the footer section on or off.'),
			'section' => 'footer_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Plasso Toggle: Toggle the plasso link.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_plasso]',
			'label' => __('Powered by Plasso', 'plasso_textdomain'),
			'description' => __('Toggle the Powered by Plasso link on or off.'),
			'section' => 'footer_section',
			'type' => 'toggle',
			'priority' => 10,
		));

		// Text: The footer text.

		Kirki::add_field('plasso_theme', array(
			'settings' => 'plasso[footer_text]',
			'label' => __('Text', 'plasso_textdomain'),
			'description' => __('Add some footer text (e.g. “Copyright Bla Bla Bla”).'),
			'section' => 'footer_section',
			'type' => 'textarea',
			'priority' => 10,
		));

	/* No Kirki? Install it please.
	------------------------------------------------------------------------------------------------ */

	} else {

		class Kirki_Warning extends WP_Customize_Control {
			public $type = 'kirki_warning';

			public function render_content() {
				?>
				<label>
					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
					<p><?php _e('This theme requires the Kirki plugin in order to edit your site from within the customizer.', 'plasso_textdomain'); ?></p>
					<a href="<?php echo get_admin_URL(); ?>themes.php?page=tgmpa-install-plugins" class="button"><?php _e('Install Kirki', 'plasso_textdomain'); ?></a></p>
				</label>
				<?php
			}
		}

		$wp_customize->add_section(
			'theme_settings',
			array(
				'title' => 'Theme Settings',
				'description' => '',
				'priority' => 200,
			)
		);

		$wp_customize->add_setting('kirki_warning', array('sanitize_callback' => '__return_false'));
		$wp_customize->add_control(
			new Kirki_Warning(
				$wp_customize,
				'kirki_warning',
				array(
					'label' => __('Please note:', 'plasso_textdomain'),
					'section' => 'theme_settings',
					'settings' => 'kirki_warning'
				)
			)
		);
	}
}
add_action('customize_register', 'plasso_customizer');
