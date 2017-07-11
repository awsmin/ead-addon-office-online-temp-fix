<?php
/*
  Plugin Name: Embed Any Document - Temporarily Replace Microsoft Viewer
  Plugin URI: http://awsm.in/embed-any-document
  Description: The plugin will switch the viewer of Microsoft Office online embedded documents to Google Docs Viewer. This plugin is an add-on to Embed Any Document plugin. The objective of the plugin is to help our users to switch their document viewers easily to Google since the Office Online service is down (at the moment).
  Version: 1.0
  Author: Awsm Innovations
  Author URI: http://awsm.in
  License: GPL V3
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}  
 
if ( ! function_exists( 'ead_change_viewer' ) ) {
 
function ead_change_viewer( $output, $tag ) {
    if ( 'embeddoc' !== $tag ) {
      return $output;
    }
    $output = str_replace( "//view.officeapps.live.com/op/embed.aspx?src=", "//docs.google.com/viewer?embedded=true&url=", $output );
    return $output;
  }
  add_filter('do_shortcode_tag', 'ead_change_viewer', 10, 2);
}