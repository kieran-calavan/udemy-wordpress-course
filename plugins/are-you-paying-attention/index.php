<?php

/*
  Plugin Name: Are You Paying Attention Quiz
  Description: Periodic questions to determine attention and comprehension.
  Version 1.0
  Author: Kieran
  Author URI: https://www.kierancalavan.com/
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class AreYouPayingAttention {
  function __construct() {
    add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
  }

  function adminAssets() {
    wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
  }
}

$areYouPayingAttention = new AreYouPayingAttention();
