<?php

namespace ElementorPro\Modules\FloatingButtons\Base;

use Elementor\Modules\FloatingButtons\Base\Widget_Contact_Button_Base;

abstract class Widget_Contact_Button_Base_Pro extends Widget_Contact_Button_Base {

	// TODO: Remove in v3.27.0 [ED-15717]
	// Styling is now loaded from Core widget base file.
	public function get_style_depends(): array {
		$style_depends = parent::get_style_depends();

		// In older Core versions, enqueue the frontend.scss.
		if ( ! in_array( 'widget-contact-buttons-base', $style_depends ) ) {
			$style_depends[] = 'widget-floating-buttons';
		}

		return $style_depends;
	}
}
