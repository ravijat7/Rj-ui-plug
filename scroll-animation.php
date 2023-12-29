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

                                <!-- Add a question and answer --><p><strong>Q.1. Can I add this animation to a particular HTML tag?</strong></p>
                                                        <p><strong>A.</strong> Yes, you can add this by adding the CSS class "<b>text animated</b>" to the particular HTML tag, for example, have a look on attached images.</p>
<p><strong>Q.2. What is RJ-UI-Plug?</strong></p>
    <p><strong>A.</strong> RJ-UI-Plug is a versatile UI plugin designed to enhance the user interface of websites with various interactive and user-friendly elements.</p>

    <p><strong>Q.3. How can I keep a HTML tag away from this style ?</strong></p>
    <p><strong>A.</strong> To keep away a automated applied html tag from it you can add a claas to that tag , that is <strong>not</strong> .</p>

    <p><strong>Q.4. Can I customize the appearance of UI elements provided by RJ-UI-Plug?</strong></p>
    <p><strong>A.</strong> Yes, RJ-UI-Plug is highly customizable. You can adjust the styles and configurations of UI elements by modifying the corresponding CSS files or using the provided customization options in the plugin settings.</p>

    <p><strong>Q.5. Is RJ-UI-Plug compatible with my theme?</strong></p>
    <p><strong>A.</strong> RJ-UI-Plug is designed to be compatible with most WordPress themes. However, in rare cases, conflicts may arise with specific themes. If you encounter any issues, please check the plugin documentation or seek support on the GitHub repository.</p>

    <p><strong>Q.6. Are there any demo pages or examples showcasing the features of RJ-UI-Plug?</strong></p>
    <p><strong>A.</strong> Yes, you can find demo pages and examples in the [Rj-ui-plug GitHub repository](https://github.com/ravijat7/Rj-ui-plug), even on the author url. These examples demonstrate the various UI elements and their usage.</p>
    <p><strong>Q.7. Are all the HTML tag have this applied auto ?</strong></p>
    <p><strong>A.</strong> Not all tags, but <strong> H1 tag , H2 tag , Img tag</strong> has it automatically applied, how to avoid it's you can read question 3 .</p>
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
 
