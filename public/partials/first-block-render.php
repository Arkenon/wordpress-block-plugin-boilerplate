<?php

$first_attr = $form_attributes['firstAttr'];

$view = '<p '.get_block_wrapper_attributes().'>';

if($first_attr):
  
$view .= __("First Block: Hello from server side rendering...");

endif;

$view .='</p>';
