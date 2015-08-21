<?php
/**
* This plugin array is more or less self documenting
*/
$plugin = array(
  'single' => TRUE,
  'title' => t('Abilia Logo'),
  'category' => t('Abilia'),
  'content_types' => array('logo'),
  'render callback' => 'Logo_render',

);

function Logo_render($subtype, $conf, $args, $context) {
  $attributes['attributes']['class'][] = 'Logo';
  $attributes['attributes']['title'] = t('Go to startpage');
  $block = new stdClass();
  $block->content = l(t("Abilia"), '<front>', $attributes);
  return $block;
}
