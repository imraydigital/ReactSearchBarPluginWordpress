<?php

/*
    Plugin Name: Hello World Plugin
    Description: Simple plugin that displays Hello World via shortcode.
    Version: 1.0
    Author: Liam Imray
*/

// Function to enqueue React and your custom JavaScript file
function enqueue_react_scripts() {
    // Enqueue React and ReactDOM from a CDN
    wp_enqueue_script('react', 'https://unpkg.com/react@17/umd/react.production.min.js', array(), '17.0.2', true);
    wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@17/umd/react-dom.production.min.js', array('react'), '17.0.2', true);

    // Enqueue your custom JavaScript file that will handle the React component
    wp_enqueue_script('custom-react-script', plugin_dir_url(__FILE__) . 'dist/react-plugin-template.js', array('react', 'react-dom'), '1.0', true);

    // Enqueue your custom CSS file
    wp_enqueue_style('root-style', plugin_dir_url(__FILE__) . 'style.css'); // Add this line
}

    // Add shortcode to display the search bar
    function react_plugin_template_shortcode() {
        return '<div id="react-plugin-template"></div>'; // React will render into this div
    }
    
    add_shortcode('react_plugin_template', 'react_plugin_template_shortcode');

// Hook the enqueue function to load scripts in the footer
add_action('wp_enqueue_scripts', 'enqueue_react_scripts');