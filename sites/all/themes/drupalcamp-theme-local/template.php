<?php
/**
 * Implements hook_preprocess_HOOK().
 *
 */
function drupalcamp_preprocess_html(&$vars) {
  

  $meta_viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' =>  'width=device-width, initial-scale=1.0',
    )
  );

    drupal_add_html_head($meta_viewport, 'meta_viewport');
}


 