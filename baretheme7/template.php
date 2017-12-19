// call css for special node type
if(isset($variables['node']->type && $variables['node']->type == "my-custom-node-type"){
    drupal_add_css(drupal_get_path('theme', 'baretheme7').'/css/node-my-custom-node-type.css');
}
// end
