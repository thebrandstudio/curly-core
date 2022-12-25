<?php

if (!function_exists('curly_core_add_stacked_images_shortcode')) {
    function curly_core_add_stacked_images_shortcode($shortcodes_class_name) {
        $shortcodes = array(
            'CurlyCore\CPT\Shortcodes\StackedImages\StackedImages',
        );

        $shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

        return $shortcodes_class_name;
    }

    add_filter('curly_core_filter_add_vc_shortcode', 'curly_core_add_stacked_images_shortcode');
}

if (!function_exists('curly_core_set_stacked_images_icon_class_name_for_vc_shortcodes')) {
    /**
     * Function that set custom icon class name for stacked images shortcode to set our icon for Visual Composer shortcodes panel
     */
    function curly_core_set_stacked_images_icon_class_name_for_vc_shortcodes($shortcodes_icon_class_array) {
        $shortcodes_icon_class_array[] = '.icon-wpb-stacked-images';

        return $shortcodes_icon_class_array;
    }

    add_filter('curly_core_filter_add_vc_shortcodes_custom_icon_class', 'curly_core_set_stacked_images_icon_class_name_for_vc_shortcodes');
}