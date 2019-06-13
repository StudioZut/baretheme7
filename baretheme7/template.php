<?php
/**
 * @file
 * Include template function files.
 *
 * Template functions are grouped into files loosely based on hooks, in the
 * hopes that functions addresssing similar concerns are easy to track. For
 * instance, template functions dealing with fields are likely grouped into
 * field.inc. The reason this isn't broken down further is because there isn't
 * yet an incentive to break functions out into even more files.
 */

// setting var for theme name since this is just a starter theme
$themename = 'baretheme7';

// call css for specific page (example function)

function baretheme7_preprocess_node($vars) {
  if (drupal_get_path_alias("node/{$vars['#node']->nid}") == 'foo') {
    drupal_add_css(drupal_get_path('theme', 'MYTHEME') . "/css/foo.css");
  }
}
// end
