<?php

function kaal_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' > ', $breadcrumb) .'</div>';
  }
}


function kaal_preprocess_search_theme_form(&$vars, $hook) {

  // Modify elements of the search form
  $vars['form']['search_theme_form']['#title'] = t('');
 
  // Set a default value for the search box
  $vars['form']['search_theme_form']['#value'] = t('Search this Site');

  // Add a custom class to the search box
  $vars['form']['search_theme_form']['#attributes'] = array('class' => 'search-input',
  'onfocus' => "if (this.value == 'Search this Site') {this.value = '';}",
  'onblur' => "if (this.value == '') {this.value = 'Search this Site';}");
 
  // Change the text on the submit button
  $vars['form']['submit']['#value'] = t('GO');

  // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_theme_form']['#printed']);
  $vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

	$vars['form']['submit']['#attributes'] = array('class' => 'search');

  // Rebuild the rendered version (submit button, rest remains unchanged)
  unset($vars['form']['submit']['#printed']);
  $vars['search']['submit'] = drupal_render($vars['form']['submit']);

  // Collect all form elements to make it easier to print the whole form.
  $vars['search_form'] = implode($vars['search']);
  
}