<?php

class Admin_page_function {

    function __construct() {
        add_action('admin_menu', array(&$this, 'exam_plugin_admin_page_callback'));
    }

    public function exam_plugin_admin_page_callback() {
        $page_title = 'Exam Protal Options';
        $menu_title = 'Exam Protal Options';
        $capability = 'manage_options';
        $menu_slug = 'exam-protal-option';
        $function = 'exam_protal_html_callback';
        $icon_url = 'dashicons-media-code';
        $position = 4;
        
        add_menu_page( $page_title,
                 $menu_title, 
                 $capability, 
                 $menu_slug, 
                 array(&$this,$function), 
                 $icon_url, 
                 $position );
    }
    public function exam_protal_html_callback(){
        echo 1;
    }

}

new Admin_page_function();
