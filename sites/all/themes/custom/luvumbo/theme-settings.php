<?php

/**
 * @file
 * Theme setting callbacks for the luvumbo theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function luvumbo_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['luvumbo_info'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Informations'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -9,
  );

  $form['luvumbo_info']['luvumbo_map_marker'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Map marker'),
    '#default_value' => theme_get_setting('luvumbo_map_marker'),
    '#description'   => t('Specify map marker of the site.'),
    '#weight'        => -7,
  );

  $form['luvumbo_info']['luvumbo_phone'] = array(
     '#type'          => 'textfield',
     '#title'         => t('Phone'),
     '#default_value' => theme_get_setting('luvumbo_phone'),
     '#description'   => t('Specify phone number of the site.'),
     '#weight'        => -6,
  );

  $form['luvumbo_info']['luvumbo_email'] = array(
     '#type'          => 'textfield',
     '#title'         => t('Email'),
     '#default_value' => theme_get_setting('luvumbo_email'),
     '#description'   => t('Specify email of the site.'),
     '#weight'        => -5,
  );





  $form['luvumbo_sm'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Social media'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -10,
  );

  $form['luvumbo_sm']['luvumbo_twitter'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Twitter'),
        '#default_value' => theme_get_setting('luvumbo_twitter'),
        '#description'   => t('Specify twitter of the site.'),
        '#weight'        => -5,
  );

  $form['luvumbo_sm']['luvumbo_facebook'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Facebook'),
        '#default_value' => theme_get_setting('luvumbo_facebook'),
        '#description'   => t('Specify facebook of the site.'),
        '#weight'        => -4,
  );

  $form['luvumbo_sm']['luvumbo_linkedin'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Linkedin'),
        '#default_value' => theme_get_setting('luvumbo_linkedin'),
        '#description'   => t('Specify linkedin of the site.'),
        '#weight'        => -3,
  );
  $form['luvumbo_sm']['luvumbo_instagram'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Instagram'),
        '#default_value' => theme_get_setting('luvumbo_instagram'),
        '#description'   => t('Specify instagram of the site.'),
        '#weight'        => -2,
  );

  $form['luvumbo_sm']['luvumbo_youtube'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Youtube'),
        '#default_value' => theme_get_setting('luvumbo_youtube'),
        '#description'   => t('Specify youtube of the site.'),
        '#weight'        => -1,
  );




    $form['luvumbo_libraries'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Libraries'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -8,
    );

    $form['luvumbo_libraries']['google_web_fonts'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Google web fonts'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -8,
    );

    $form['luvumbo_libraries']['google_web_fonts']['googleapis'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Google api'),
        '#default_value' => theme_get_setting('luvumbo_googleapis'),
        '#description'   => t('Google api link.'),
        '#disabled'      => TRUE,
        '#weight'        => -5,
    );

    $form['luvumbo_libraries']['google_web_fonts']['gstatic'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Gstatic'),
        '#default_value' => theme_get_setting('luvumbo_gstatic'),
        '#description'   => t('Gstatic link.'),
        '#disabled'      => TRUE,
        '#weight'        => -5,
    );

    $form['luvumbo_libraries']['google_web_fonts']['googleapis_family'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Google api family'),
        '#default_value' => theme_get_setting('luvumbo_googleapis_family'),
        '#description'   => t('Google api family link.'),
        '#disabled'      => TRUE,
        '#weight'        => -5,
    );





    $form['luvumbo_libraries']['luvumbo_icon_font'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Icon font'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -8,
    );

    $form['luvumbo_libraries']['luvumbo_icon_font']['font_awesome'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Font awesome'),
        '#default_value' => theme_get_setting('luvumbo_font_awesome'),
        '#description'   => t('Font awesome link.'),
        '#disabled'      => TRUE,
        '#weight'        => -5,
    );

    $form['luvumbo_libraries']['luvumbo_icon_font']['bootstrap_icons'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Bootstrap icons'),
        '#default_value' => theme_get_setting('luvumbo_bootstrap_icons'),
        '#description'   => t('Bootstrap icons link.'),
        '#disabled'      => TRUE,
        '#weight'        => -5,
    );




    $form['luvumbo_snipper'] = array(
        '#type'          => 'checkbox',
        '#title'         => t('Snipper'),
        '#default_value' => theme_get_setting('luvumbo_snipper'),
        '#description'   => t('Specify whether use snipper or not.'),
        '#weight'        => -7,
    );




    $form['luvumbo_carousel'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Carousel'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -9,
    );

    $form['luvumbo_carousel']['luvumbo_carousel1'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Carousel 1'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -9,
    );
    $form['luvumbo_carousel']['luvumbo_carousel1']['luvumbo_carousel1_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Title'),
        '#default_value' => theme_get_setting('luvumbo_carousel1_title'),
        '#description'   => t('Specify title carousel 1.'),
        '#weight'        => -7,
    );
    $form['luvumbo_carousel']['luvumbo_carousel1']['luvumbo_carousel1_text'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Text'),
        '#default_value' => theme_get_setting('luvumbo_carousel1_text'),
        '#description'   => t('Specify text carousel 1.'),
        '#weight'        => -7,
    );
    $form['luvumbo_carousel']['luvumbo_carousel1']['luvumbo_carousel1_img'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Image'),
        '#default_value' => theme_get_setting('luvumbo_carousel1_img'),
        '#description'   => t('Specify image carousel 1.'),
        '#weight'        => -7,
    );



    $form['luvumbo_carousel']['luvumbo_carousel2'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Carousel 2'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -9,
    );
    $form['luvumbo_carousel']['luvumbo_carousel2']['luvumbo_carousel2_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Title'),
        '#default_value' => theme_get_setting('luvumbo_carousel2_title'),
        '#description'   => t('Specify title carousel 2.'),
        '#weight'        => -7,
    );
    $form['luvumbo_carousel']['luvumbo_carousel2']['luvumbo_carousel2_text'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Text'),
        '#default_value' => theme_get_setting('luvumbo_carousel2_text'),
        '#description'   => t('Specify text carousel 2.'),
        '#weight'        => -7,
    );
    $form['luvumbo_carousel']['luvumbo_carousel2']['luvumbo_carousel2_img'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Image'),
        '#default_value' => theme_get_setting('luvumbo_carousel2_img'),
        '#description'   => t('Specify image carousel 2.'),
        '#weight'        => -7,
    );




    $form['luvumbo_facts'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Facts'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#weight'      => -9,
    );

    $form['luvumbo_facts']['luvumbo_happy_clients'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Happy clients'),
        '#default_value' => theme_get_setting('luvumbo_happy_clients'),
        '#description'   => t('Specify number of happy clients.'),
        '#weight'        => -7,
    );

    $form['luvumbo_facts']['luvumbo_projects_done'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Projects done'),
        '#default_value' => theme_get_setting('luvumbo_projects_done'),
        '#description'   => t('Specify number of projects done.'),
        '#weight'        => -7,
    );

    $form['luvumbo_facts']['luvumbo_win_awards'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Win awards'),
        '#default_value' => theme_get_setting('luvumbo_win_awards'),
        '#description'   => t('Specify number of win awards.'),
        '#weight'        => -7,
    );



    $form['luvumbo_sign_up'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Sign Up'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#description' => t('Sign up block.'),
        '#weight'      => -10,
    );
    $form['luvumbo_sign_up']['luvumbo_sign_up_text'] = array(
        '#type'          => 'textarea',
        '#title'         => t('Sign up text'),
        '#default_value' => theme_get_setting('luvumbo_sign_up_text'),
        '#description'   => t('Type text to show in sign up block.'),
        '#weight'        => -7,
    );




    $form['luvumbo_about_us'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('About Us'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#description' => t('About Us block.'),
        '#weight'      => -11,
    );
    $form['luvumbo_about_us']['luvumbo_about_us_title'] = array(
        '#type'          => 'textfield',
        '#title'         => t('About Us Title'),
        '#default_value' => theme_get_setting('luvumbo_about_us_title'),
        '#description'   => t('Set the Title'),
        '#weight'        => -4,
    );
    $form['luvumbo_about_us']['luvumbo_about_us_text'] = array(
        '#type'          => 'textarea',
        '#title'         => t('About Us'),
        '#default_value' => theme_get_setting('luvumbo_about_us_text'),
        '#description'   => t('Describe the luvumbo company.'),
        '#weight'        => -4,
    );





    $form['luvumbo_menus'] = array(
        '#type'        => 'fieldset',
        '#title'       => t('Menus'),
        '#collapsible' => TRUE,
        '#collapsed'   => FALSE,
        '#description' => t('Creates Luvumbo menus.'),
        '#weight'      => -12,
    );
    $form['luvumbo_menus']['luvumbo_menus_main'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Main menu'),
        '#default_value' => theme_get_setting('luvumbo_menus_main'),
        '#description'   => t('Specify name of main menu.'),
        '#disabled'      => TRUE,
        '#weight'        => -7,
    );
    $form['luvumbo_menus']['luvumbo_menus_quick'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Quick menu'),
        '#default_value' => theme_get_setting('luvumbo_menus_quick'),
        '#description'   => t('Specify name of quick menu.'),
        '#disabled'      => TRUE,
        '#weight'        => -7,
    );
    $form['luvumbo_menus']['luvumbo_menus_popular'] = array(
        '#type'          => 'textfield',
        '#title'         => t('Popular menu'),
        '#default_value' => theme_get_setting('luvumbo_menus_popular'),
        '#description'   => t('Specify name of popular menu.'),
        '#disabled'      => TRUE,
        '#weight'        => -7,
    );
    $form['luvumbo_menus']['submit'] = array(
        '#type'   => 'submit',
        '#value'  => t('Create luvumbo menus'),
        '#submit' => array('save_l_menus_callback'),
        '#name'   => 'luvumbo-menus',
    );





}
function save_l_menus_callback($form, $form_state){
    $l_main_menu = array();
    $l_main_menu['menu_name'] = $form_state['values']['luvumbo_menus_main'];
    $l_main_menu['title'] = "luvumbo main menu";
    $l_main_menu['description'] = "Luvumbo main menu";
    if(!array_key_exists($l_main_menu['menu_name'], menu_get_menus($all = FALSE))) {
        menu_save($l_main_menu);
    } else {
        drupal_set_message(t('You already have created Luvumbo Main Menu!'), 'warning');
    }

    $l_quick_menu = array();
    $l_quick_menu['menu_name'] = $form_state['values']['luvumbo_menus_quick'];
    $l_quick_menu['title'] = "luvumbo quick menu";
    $l_quick_menu['description'] = "Luvumbo quick menu";
    if(!array_key_exists($l_quick_menu['menu_name'], menu_get_menus($all = FALSE))) {
        menu_save($l_quick_menu);
    } else {
        drupal_set_message(t('You already have created Luvumbo Quick Menu!'), 'warning');
    }

    $l_popular_menu = array();
    $l_popular_menu['menu_name'] = $form_state['values']['luvumbo_menus_popular'];
    $l_popular_menu['title'] = "luvumbo popular menu";
    $l_popular_menu['description'] = "Luvumbo popular menu";
    if(!array_key_exists($l_popular_menu['menu_name'], menu_get_menus($all = FALSE))) {
        menu_save($l_popular_menu);
    } else {
        drupal_set_message(t('You already have created Luvumbo Popular Menu!'), 'warning');
    }

    drupal_set_message('Luvumbo menus were created');



    return $form;
}