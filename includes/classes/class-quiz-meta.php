<?php

require_once 'meta_init.php';

class Quiz_meta {

    function __construct() {
        add_action('cmb2_admin_init', array(&$this, 'quiz_meta_callback'));
    }

    public function quiz_meta_callback() {
        $prefix = _PLUGPRE;

        $cmb_demo = new_cmb2_box(array(
            'id' => $prefix . 'metabox',
            'title' => esc_html__('Quiz Details', 'cmb2'),
            'object_types' => array('quiz'), // Post type
            // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
            // 'context'    => 'normal',
            // 'priority'   => 'high',
            // 'show_names' => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // true to keep the metabox closed by default
            'classes' => 'extra-class', // Extra cmb2-wrap classes
                // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
        ));

        $cmb_demo->add_field(array(
            'name' => esc_html__('Start Date', 'cmb2'),
            'desc' => esc_html__('Quiz can be attempted after this date. YYYY-MM-DD HH:II:SS', 'cmb2'),
            'id' => $prefix . 'start_date',
            'type' => 'text_datetime_timestamp',
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('End Date ', 'cmb2'),
            'desc' => esc_html__('Quiz can be attempted before this date. eg. 2017-12-31 23:59:00 ', 'cmb2'),
            'id' => $prefix . 'end_date',
            'type' => 'text_datetime_timestamp',
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('Duration ', 'cmb2'),
            'desc' => esc_html__('Duration in minutes', 'cmb2'),
            'id' => $prefix . 'duration',
            'type' => 'text',
            'attributes' => array(
                'type' => 'number',
                'pattern' => '\d*',
            ),
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('Allow Maximum Attempts ', 'cmb2'),
            'desc' => esc_html__('Allow Maximum Attempts', 'cmb2'),
            'id' => $prefix . 'duration',
            'type' => 'text',
            'attributes' => array(
                'type' => 'number',
                'pattern' => '\d*',
            ),
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('Minimum Percentage Required to Pass ', 'cmb2'),
            'desc' => esc_html__('Minimum Percentage Required to Pass', 'cmb2'),
            'id' => $prefix . 'percentage',
            'type' => 'text',
            'default' => 50,
            'attributes' => array(
                'type' => 'number',
                'pattern' => '\d*',
            ),
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('Correct Score', 'cmb2'),
            'desc' => esc_html__('Correct Score', 'cmb2'),
            'id' => $prefix . 'correct_score',
            'type' => 'text',
            'default' => 10,
            'attributes' => array(
                'type' => 'number',
                'pattern' => '\d*',
            ),
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('InCorrect Score', 'cmb2'),
            'desc' => esc_html__('InCorrect Score', 'cmb2'),
            'id' => $prefix . 'incorrect_score',
            'type' => 'text',
            'default' => 0,
            'attributes' => array(
                'type' => 'number',
                'pattern' => '\d*',
            ),
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('Allow to view correct answers after submitting quiz ', 'cmb2'),
            'desc' => esc_html__('Allow to view correct answers after submitting quiz ', 'cmb2'),
            'id' => $prefix . 'view_correct_answer',
            'type' => 'radio_inline',
            'default'=>'yes',
            'options' => array(
                'yes' => esc_html__('Yes', 'cmb2'),
                'no' => esc_html__('No', 'cmb2'),
            ),
        ));
        $cmb_demo->add_field(array(
            'name' => esc_html__('Open Quiz - can be attempted without login?* ', 'cmb2'),
            'desc' => esc_html__('Open Quiz - can be attempted without login?*  ', 'cmb2'),
            'id' => $prefix . 'require_login',
            'type' => 'radio_inline',
            'default'=>'yes',
            'options' => array(
                'yes' => esc_html__('Yes', 'cmb2'),
                'no' => esc_html__('No', 'cmb2'),
            ),
        ));
        
    }

}

new Quiz_meta;


