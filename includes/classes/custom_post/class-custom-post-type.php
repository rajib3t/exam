<?php
 require_once('inflect.php');
class Custom_post_type {

    protected $post_type;
    protected $label;
    protected $support = array();
    protected $inf;

    function __construct($post_type, $label, $support = array(), $args = array()) {

       
        $this->post_type = $post_type;
        $this->label = $label;
        $this->support = $support;
        $this->args = $args;
        $this->inf = new \Inflect\Inflect();

        add_action('init', array(&$this, 'custom_post_type_fun'));
    }

    function custom_post_type_fun() {
        if (post_type_exists($this->post_type)) {
            return FALSE;
        }
        $labels = array(
            'name' => __($this->inf->pluralize($this->label), 'vnnergy'),
            'singular_name' => __($this->label, 'vnnergy'),
            'menu_name' => __($this->inf->pluralize($this->label), 'vnnergy'),
            'name_admin_bar' => __($this->inf->pluralize($this->label), 'vnnergy'),
            'add_new' => __('Add ' . $this->label, 'vnnergy'),
            'add_new_item' => __('Add ' . $this->label, 'vnnergy'),
            'new_item' => __('New ' . $this->label, 'vnnergy'),
            'edit_item' => __('Edit ' . $this->label, 'vnnergy'),
            'view_item' => __('View ' . $this->label, 'vnnergy'),
            'all_items' => __('All ' . $this->inf->pluralize($this->label), 'vnnergy'),
            'search_items' => __('Search ' . $this->inf->pluralize($this->label), 'vnnergy'),
            // 'parent_item_colon'  => __( 'Parent Clients:', 'vnnergy' ),
            'not_found' => __('No ' . $this->label . ' found.', 'vnnergy'),
            'not_found_in_trash' => __('No ' . $this->label . ' found in Trash.', 'vnnergy'),
        );
        $args = array(
            'labels' => $labels,
            // 'menu_icon'   => IMAGE.'services.png',
            'public' => true,
            'has_archive' => true,
            'supports' => $this->support,
        );

        $args = array_merge($args, $this->args);

        register_post_type($this->post_type, $args);
    }

}
