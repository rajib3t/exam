<?php

class Admin_cssjs {

    function __construct() {

        add_action('admin_enqueue_scripts', array(&$this, 'admin_css'));
    }
    
    public function admin_css(){
        wp_register_style( 'exam_plugin_admin_css', CSS . 'admin_css.css', false, '1.0.0' );
    }

}

new Admin_cssjs();
