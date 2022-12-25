<?php

if (!function_exists('curly_core_add_info_section_shortcodes')) {
    function curly_core_add_info_section_shortcodes($shortcodes_class_name) {
        $shortcodes = array(
            'CurlyCore\CPT\Shortcodes\InfoSection\InfoSection'
        );

        $shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);

        return $shortcodes_class_name;
    }

    add_filter('curly_core_filter_add_vc_shortcode', 'curly_core_add_info_section_shortcodes');
}

if (!function_exists('curly_core_set_info_section_icon_class_name_for_vc_shortcodes')) {
    /**
     * Function that set custom icon class name for section title shortcode to set our icon for Visual Composer shortcodes panel
     */
    function curly_core_set_info_section_icon_class_name_for_vc_shortcodes($shortcodes_icon_class_array) {
        $shortcodes_icon_class_array[] = '.icon-wpb-info-section';

        return $shortcodes_icon_class_array;
    }

    add_filter('curly_core_filter_add_vc_shortcodes_custom_icon_class', 'curly_core_set_info_section_icon_class_name_for_vc_shortcodes');
}