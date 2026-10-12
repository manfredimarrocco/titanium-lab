<?php
/**
 * Plugin Name: TITANIUM — GRC Lab
 * Description: Presentazione del Lab e workspace TITANIUM nel browser, senza servizi di salvataggio.
 * Version: 0.2.5
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Author: TITANIUM contributors
 * License: MIT
 * License URI: https://opensource.org/license/mit
 * Text Domain: mm-grc-lab
 */
if (!defined('ABSPATH')) { exit; }

function mm_grc_lab_assets() {
    $post = get_post();
    if (!is_singular() || !$post || !has_shortcode($post->post_content, 'mm_grc_lab')) { return; }
    wp_enqueue_style('mm-grc-lab', plugins_url('assets/lab.css', __FILE__), array(), '0.2.5');
    wp_enqueue_script('mm-grc-lab', plugins_url('assets/lab.js', __FILE__), array(), '0.2.5', true);
}
add_action('wp_enqueue_scripts', 'mm_grc_lab_assets', 110);

function mm_grc_lab_shortcode($atts = array()) {
    $app_url = add_query_arg('ver', '0.2.5', plugins_url('app/index.html', __FILE__));
    $template_url = plugins_url('app/TITANIUM-template.xlsx', __FILE__);
    $atts = shortcode_atts(array('repository' => '', 'download' => ''), $atts, 'mm_grc_lab');
    // URLs belong to the page configuration, not the distributed source files.
    $repository_url = apply_filters('mm_grc_lab_repository_url', $atts['repository']);
    $download_url = apply_filters('mm_grc_lab_download_url', $atts['download']);
    foreach (array('repository_url', 'download_url') as $key) {
        $value = $$key;
        $host = strtolower((string) wp_parse_url($value, PHP_URL_HOST));
        if ('https' !== wp_parse_url($value, PHP_URL_SCHEME) || 'github.com' !== $host) { $$key = ''; }
    }
    ob_start();
    require __DIR__ . '/views/lab.php';
    return ob_get_clean();
}
add_shortcode('mm_grc_lab', 'mm_grc_lab_shortcode');

// Deliberately no activation hook, automatic pages, settings writes, AJAX or REST endpoints.
