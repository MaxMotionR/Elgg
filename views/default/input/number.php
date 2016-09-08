<?php
/**
 * Elgg number input
 * Displays a number input field
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['class'] Additional CSS class
 */

$vars['class'] = (array) elgg_extract('class', $vars, []);
$vars['class'][] = 'elgg-input-number';

$defaults = array(
	'value' => '',
	'disabled' => false,
	'type' => 'number'
);

$vars = array_merge($defaults, $vars);

echo elgg_format_element('input', $vars);
