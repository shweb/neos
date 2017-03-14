<?php

/**
 * Implements theme_menu_tree().
 */
	function neos_menu_tree($variables) {
		return '<nav id="fh5co-main-nav" role="navigation"><ul ><li>' . $variables['tree'] . '</li></ul></nav>';
	}
	/*function neos_menu_link(array $variables) {
			echo "huhu";
		 $element = $variables['tree'];
		 echo drupal_render($element['#href']);
		 /*
			$sub_menu = '';
		  if ($element['#below']) {
			$sub_menu = drupal_render($element['#below']);
		  }
		  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
		  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
	}*/
?>