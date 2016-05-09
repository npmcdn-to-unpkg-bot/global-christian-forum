<?php
/*
 **************************
 * Custom Theme Functions *
 **************************
 */
// Enqueue scripts
function gcf_scripts() {
  // Use jQuery from Google, enqueue in footer
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js', array(), null, true);
    wp_enqueue_script('jquery');
  }

  // Enqueue stylesheet and scripts. Use minified for production.
  wp_enqueue_style( 'gcf-styles', get_stylesheet_directory_uri() . '/stylesheets/app.css', null);
  wp_enqueue_script( 'gcf-js', get_stylesheet_directory_uri() . '/javascripts/app.js', array('jquery'), null, true );
  // wp_enqueue_style( 'gcf-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', 1.0);
  // wp_enqueue_script( 'gcf-js', get_stylesheet_directory_uri() . '/assets/js/build/scripts.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gcf_scripts' );

// Customize the editor style
// It's just the Bootstrap typography, but I like it. Got the idea from Roots.io.

function tsk_editor_styles() {
  add_editor_style( 'assets/css/editor-style.css' );
}
// add_action( 'after_setup_theme', 'tsk_editor_styles' );


/**
* Singularize a string.
* Converts a word to english singular form.
*
* Usage example:
* {singularize "people"} # person
*/
// function singularize ($params)
// {
//   if (is_string($params))
//   {
//     $word = $params;
//   } else if (!$word = $params['word']) {
//     return false;
//   }
//   $singular = array (
//     '/(quiz)zes$/i' => '\\1',
//     '/(matr)ices$/i' => '\\1ix',
//     '/(vert|ind)ices$/i' => '\\1ex',
//     '/^(ox)en/i' => '\\1',
//     '/(alias|status)es$/i' => '\\1',
//     '/([octop|vir])i$/i' => '\\1us',
//     '/(cris|ax|test)es$/i' => '\\1is',
//     '/(shoe)s$/i' => '\\1',
//     '/(o)es$/i' => '\\1',
//     '/(bus)es$/i' => '\\1',
//     '/([m|l])ice$/i' => '\\1ouse',
//     '/(x|ch|ss|sh)es$/i' => '\\1',
//     '/(m)ovies$/i' => '\\1ovie',
//     '/(s)eries$/i' => '\\1eries',
//     '/([^aeiouy]|qu)ies$/i' => '\\1y',
//     '/([lr])ves$/i' => '\\1f',
//     '/(tive)s$/i' => '\\1',
//     '/(hive)s$/i' => '\\1',
//     '/([^f])ves$/i' => '\\1fe',
//     '/(^analy)ses$/i' => '\\1sis',
//     '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
//     '/([ti])a$/i' => '\\1um',
//     '/(n)ews$/i' => '\\1ews',
//     '/s$/i' => ''
//   );
//   $irregular = array(
//     'person' => 'people',
//     'man' => 'men',
//     'child' => 'children',
//     'sex' => 'sexes',
//     'move' => 'moves'
//   );
//   $ignore = array(
//     'equipment',
//     'information',
//     'rice',
//     'money',
//     'species',
//     'series',
//     'fish',
//     'sheep',
//     'press',
//     'sms',
//   );
//   $lower_word = strtolower($word);
//   foreach ($ignore as $ignore_word)
//   {
//     if (substr($lower_word, (-1 * strlen($ignore_word))) == $ignore_word)
//     {
//       return $word;
//     }
//   }
//   foreach ($irregular as $singular_word => $plural_word)
//   {
//     if (preg_match('/('.$plural_word.')$/i', $word, $arr))
//     {
//       return preg_replace('/('.$plural_word.')$/i', substr($arr[0],0,1).substr($singular_word,1), $word);
//     }
//   }
//   foreach ($singular as $rule => $replacement)
//   {
//     if (preg_match($rule, $word))
//     {
//       return preg_replace($rule, $replacement, $word);
//     }
//   }
//   return $word;
// }
