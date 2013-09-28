<?php
/**
 * Theme wrapper
 *
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */
function splash_template_path() {
  return splash_Wrapping::$main_template;
}

function splash_sidebar_path() {
  return new splash_Wrapping('templates/sidebar.php');
}

class splash_Wrapping {
  // Stores the full path to the main template file
  static $main_template;

  // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
  static $base;

  public function __construct($template='base.php') {
    $this->slug = basename($template, '.php');
    $this->templates = array($template);

    if (self::$base) {
      $str = substr($template, 0, -4);
      array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
    }
  }

  public function __toString() {
    $this->templates = apply_filters('splash_wrap_' . $this->slug, $this->templates);
    return locate_template($this->templates);
  }

  static function wrap($main) {
    self::$main_template = $main;
    self::$base = basename(self::$main_template, '.php');

    if (self::$base === 'index') {
      self::$base = false;
    }

    return new splash_Wrapping();
  }
}
add_filter('template_include', array('splash_Wrapping', 'wrap'), 99);
