<?php
/*
Plugin Name: RJ-Scroll Animation
Description: Enhance your website design with smooth scrolling text animations.
Version: 1.2.0
Author: Ravi Jakhar
Author URI: https://bit.ly/Ravi-Jakhar-7
*/

function scroll_animation_enqueue_scripts() {
    wp_enqueue_style('scroll-animation-style', plugins_url('style.css', __FILE__));
    wp_enqueue_script('scroll-animation-script', plugins_url('script.js', __FILE__), array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'scroll_animation_enqueue_scripts');

// Add a submenu item below the "Themes" menu
function rj_add_theme_submenu() {
    add_theme_page(
        'RJ-Scroll Animation Settings',
        'RJ-Plug',
        'manage_options',
        'rj-scroll-animation-settings',
        'rj_scroll_animation_settings_page'
    );
}

add_action('admin_menu', 'rj_add_theme_submenu');

// Callback function for the plugin settings page
function rj_scroll_animation_settings_page() {
    ?>
    <div class="wrap">
        <h2>RJ-Scroll Animation Settings</h2>
        <div class="rj-faq-section">
                    <h2>How to use RJ-plug: FAQ</h2>

                                <!-- Add a question and answer -->
                                            <p><strong>Q.1. Can I add this animation to a particular HTML tag?</strong></p>
                                                        <p><strong>A.</strong> Yes, you can add this by adding the CSS class "<b>text animated</b>" to the particular HTML tag, for example, have a look on attached images.</p>

                                                                    <!-- Add more questions and answers as needed -->
                                                                            </div>
        <div class="rj-plugin-info">
            <h2>RJ-Scroll Animation</h2>
            <p>Enhance your website design with smooth scrolling text animations.</p>
            <p><strong>Version:</strong> 1.2.0</p>
            <p><strong>Author:</strong> Ravi Jakhar</p>
            <p><strong>Author URL:</strong> <a href="https://bit.ly/Ravi-Jakhar-7">https://bit.ly/Ravi-Jakhar-7</a></p>
        </div>
    </div>
    <?php
}
?>
 
