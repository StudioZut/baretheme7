// setting var for theme name since this is just a starter theme
$themename = 'baretheme7';

// call css for special node type
if(isset($variables['node']->type && $variables['node']->type == "my-custom-node-type"){
    drupal_add_css(drupal_get_path('theme', $themename).'/css/node-my-custom-node-type.css');
}
// end
