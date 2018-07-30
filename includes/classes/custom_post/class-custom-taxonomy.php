<?php

class Custom_taxonomy {

    protected $label;
    protected $slug;
    protected $post_type;
    protected $inf;

    function __construct($label, $slug, $post_type, $args = array()) {
       
        if (!class_exists('Inflect')) {
            require_once('inflect.php');
        }
        $this->label = $label;
        $this->slug = $slug;
        $this->post_type = $post_type;
        $this->args = $args;
        $this->inf = new Inflect();
        add_action('init', array(&$this, 'custom_category'));
    }

    function custom_category() {
        if (taxonomy_exists($this->slug)) {
            return FALSE;
        }
        if (post_type_exists($this->post_type)) {
            $labels = array(
                'name' => __($this->inf->pluralize($this->label), 'vnnergy'),
                'singular_name' => __($this->label, 'vnnergy'),
                'search_items' => __('Search ' . $this->inf->pluralize($this->label), 'vnnergy'),
                'all_items' => __('All ' . $this->inf->pluralize($this->label), 'vnnergy'),
                'parent_item' => __('Parent ' . $this->label, 'vnnergy'),
                'parent_item_colon' => __('Parent ' . $this->label . ':', 'vnnergy'),
                'edit_item' => __('Edit ' . $this->label, 'vnnergy'),
                'update_item' => __('Update ' . $this->label, 'vnnergy'),
                'add_new_item' => __('Add New ' . $this->label, 'vnnergy'),
                'new_item_name' => __('New ' . $this->label . ' Name', 'vnnergy'),
                'menu_name' => __($this->inf->pluralize($this->label), 'vnnergy'),
            );
            $args = array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => $this->slug),
            );

            $args = array_merge($args, $this->args);

            register_taxonomy($this->slug, array($this->post_type), $args);
        } else {
            return FALSE;
        }
    }

}
