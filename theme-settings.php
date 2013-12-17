<?php
/**
 * Implements hook_form_system_theme_settings_alter()
 */
function other_form_system_theme_settings_alter(&$form, &$form_state) {
  
  // Main settings wrapper
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
  );
  
  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General'),
  );
                
    // Alt Logo
    $form['options']['general']['mobile_logo'] = array(
     '#title' => t('Mobile Logo'),
     '#type' => 'managed_file',
     '#description' => t('Alt logo for mobile layout.'),
     '#default_value' => theme_get_setting('mobile_logo'),
     '#upload_location' => 'public://theme_settings/',
     '#upload_validators' => array(
     'file_validate_extensions' => array('gif png jpg jpeg'),
      ),
    );
        
  // Post Meta
  $form['options']['meta'] = array(
    '#type' => 'fieldset',
    '#title' => t('Post Meta'),
  );
               
    // Meta Date
    $form['options']['meta']['meta_date'] = array(
      '#type' => 'checkbox',
      '#title' => t('Meta Date'),
      '#default_value' => theme_get_setting('meta_date'),
    );
    
    // Meta Title
    $form['options']['meta']['meta_title'] = array(
      '#type' => 'checkbox',
      '#title' => t('Meta Title'),
      '#default_value' => theme_get_setting('meta_title'),
    );
        
    // Meta Date
    $form['options']['meta']['meta_tags'] = array(
      '#type' => 'checkbox',
      '#title' => t('Meta Tags'),
      '#default_value' => theme_get_setting('meta_tags'),
    );
        
  // CSS
  $form['options']['css'] = array(
    '#type' => 'fieldset',
    '#title' => t('CSS'),
  );
  
    // User CSS
      $form['options']['css']['user_css'] = array(
        '#type' => 'textarea',
        '#title' => t('Add your own CSS'),
        '#default_value' => theme_get_setting('user_css'),
      );     
}
?>