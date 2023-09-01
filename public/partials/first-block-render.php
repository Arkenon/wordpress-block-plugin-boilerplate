<?php

$first_attr = $form_attributes['firstAttr'];

$view = '<p '.get_block_wrapper_attributes().'>';

if($first_attr):
  
$view .= '.__("First Block: Hello from frontend...").'

endif;

$view .='</p>';
