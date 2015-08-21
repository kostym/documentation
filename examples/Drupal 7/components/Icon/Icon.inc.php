<?php

function Icon($icon = '') {
  $svgStore = '/' . drupal_get_path('theme', 'theme_name') . '/dist/icons.svg';
  return slate_render('Icon', array('svgStore' => $svgStore, 'icon' => $icon));
}
