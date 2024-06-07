<?php
/**Override Menu theme */
function luvumbo_links__system_main_menu(array $variables) {

    $menu_tree = menu_tree_all_data('luvumbo-main-menu', NULL, 2);

    $tpl_menu = "";
    if(count($menu_tree) > 0) {
        foreach($menu_tree as $key => $value) {
            if(count($value['below']) != 0) {
                if($value['link']['hidden'] != 1) {
                    $tpl_menu = $tpl_menu  . '<div class="nav-item dropdown"><a href="'. $value['link']['link_path'] .'" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">'. $value['link']['link_title'] .'</a><div class="dropdown-menu m-0">';
                    foreach($value['below'] as $key1 => $value1) {
                        if($value1['link']['hidden'] != 1) {
                            $tpl_menu = $tpl_menu . '<a href="' .$value1['link']['link_path']. '" class="dropdown-item">' .$value1['link']['link_title']. '</a>';
                        }
                    }
                    $tpl_menu = $tpl_menu . '</div></div>';
                }
            } elseif(count($value['below']) == 0) {
                if($value['link']['hidden'] != 1) {
                    $tpl_menu = $tpl_menu . '<a href="'. $value['link']['link_path'] .'" class="nav-item nav-link">'. $value['link']['link_title'] .'</a>';
                }
            }
        }
    }
    return $tpl_menu;
}

function luvumbo_links__system_quick_menu(array $variables) {

    $menu_tree = menu_tree_all_data('luvumbo-quick-menu', NULL, 1);
    $tpl_menu = "";
    if(count($menu_tree) > 0) {
        foreach($menu_tree as $key => $value) {
            if($value['link']['hidden'] != 1) {
                $tpl_menu = $tpl_menu . '<a href="'. $value['link']['link_path'] .'" class="text-light mb-2"><i class="bi bi-arrow-right text-primary me-2"></i>'. $value['link']['link_title'] .'</a>';
            }
        }
    }
    return $tpl_menu;
}

function luvumbo_links__system_popular_menu(array $variables) {

    $menu_tree = menu_tree_all_data('luvumbo-popular-menu', NULL, 1);
    $tpl_menu = "";
    if(count($menu_tree) > 0) {
        foreach($menu_tree as $key => $value) {
            if($value['link']['hidden'] != 1) {
                $tpl_menu = $tpl_menu . '<a href="'. $value['link']['link_path'] .'" class="text-light mb-2"><i class="bi bi-arrow-right text-primary me-2"></i>'. $value['link']['link_title'] .'</a>';

            }
        }
    }
    return $tpl_menu;
}

/**
 * @param $variables
 * @param $hook
 */
function luvumbo_preprocess_page(&$variables, $hook) {
    if ($variables['is_front']) {
        $variables['theme_hook_suggestions'][] = 'page__front';
        drupal_add_js('https://code.jquery.com/jquery-3.4.1.min.js', 'external');
    }
    if (isset($variables['node'])) {
        $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
        $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
    }
}
/**
 * @param $variables
 */
function luvumbo_preprocess_html(&$variables) {
  if (drupal_is_front_page()) { $variables['head_title']="Bienvenue chez Luvumbo conseil"; } 
}

function luvumbo_form_element($variables) {
    $element = &$variables['element'];

    // This function is invoked as theme wrapper, but the rendered form element
    // may not necessarily have been processed by form_builder().
    $element += array(
        '#title_display' => 'before',
    );

    // Add element #id for #type 'item'.
    if (isset($element['#markup']) && !empty($element['#id'])) {
        $attributes['id'] = $element['#id'];
    }
    // Add element's #type and #name as class to aid with JS/CSS selectors.
    $attributes['class'] = array('form-item');
    if (!empty($element['#type'])) {
        $attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
    }
    if (!empty($element['#name'])) {
        $attributes['class'][] = 'form-item-' . strtr($element['#name'], array(' ' => '-', '_' => '-', '[' => '-', ']' => ''));
        if($element['#name'] == "luvumbo_contact_name") {
            $attributes['class'][] = 'col-xl-12';
        } elseif (($element['#name'] == "luvumbo_contact_email") OR
            ($element['#name'] == "luvumbo_contact_subject") OR
            ($element['#name'] == "luvumbo_contact_message") OR
            ($element['#name'] == "luvumbo_contact_submit")) {
                  $attributes['class'][] = 'col-12';
        }
    }
    // Add a class for disabled elements to facilitate cross-browser styling.
    if (!empty($element['#attributes']['disabled'])) {
        $attributes['class'][] = 'form-disabled';
    }
    $output = '<div' . drupal_attributes($attributes) . '>' . "\n";

    // If #title is not set, we don't display any label or required marker.
    if (!isset($element['#title'])) {
        $element['#title_display'] = 'none';
    }
    $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
    $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

    switch ($element['#title_display']) {
        case 'before':
        case 'invisible':
            $output .= ' ' . theme('form_element_label', $variables);
            $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
            break;

        case 'after':
            $output .= ' ' . $prefix . $element['#children'] . $suffix;
            $output .= ' ' . theme('form_element_label', $variables) . "\n";
            break;

        case 'none':
        case 'attribute':
            // Output no label and no required marker, only the children.
            $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
            break;
    }

    if (!empty($element['#description'])) {
        $output .= '<div class="description">' . $element['#description'] . "</div>\n";
    }

    $output .= "</div>\n";

    return $output;
}

function luvumbo_form($variables) {
    $element = $variables['element'];

        if (isset($element['#action'])) {
            $element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
        }
        element_set_attributes($element, array('method', 'id'));
        if (empty($element['#attributes']['accept-charset'])) {
            $element['#attributes']['accept-charset'] = "UTF-8";
        }

    if($element['#form_id'] == "luvumbo_contact_contact_form") {
        // Anonymous DIV to satisfy XHTML compliance.
        return '<form' . drupal_attributes($element['#attributes']) . '><div class="row g-3">' . $element['#children'] . '</div></form>';
    } else {
        // Anonymous DIV to satisfy XHTML compliance.
        return '<form' . drupal_attributes($element['#attributes']) . '><div>' . $element['#children'] . '</div></form>';

    }



}
