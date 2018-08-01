<?php

class Admin_page_function {

    function __construct() {
        add_action('admin_menu', array(&$this, 'exam_plugin_admin_page_callback'));
    }

    public function exam_plugin_admin_page_callback() {
        $page_title = 'Exam Portal Options';
        $menu_title = 'Exam Portal Options';
        $capability = 'manage_options';
        $menu_slug = 'exam-protal-option';
        $function = 'exam_portal_html_callback';
        $icon_url = 'dashicons-welcome-widgets-menus';
        //$position = 6;
        
        add_menu_page( $page_title,
                 $menu_title, 
                 $capability, 
                 $menu_slug, 
                 array(&$this,$function), 
                 $icon_url
                 );
    }
    public function exam_portal_html_callback(){
        ?>

  <div>
  <?php screen_icon(); ?>
  <h2>My Plugin Page Title</h2>
  <form method="post" action="options.php">
  <?php settings_fields( 'myplugin_options_group' ); ?>
  <h3>This is my option</h3>
  <p>Some text here.</p>
  <table>
  <tr valign="top">
  <th scope="row"><label for="myplugin_option_name">Label</label></th>
  <td><input type="text" id="myplugin_option_name" name="myplugin_option_name" value="<?php echo get_option('myplugin_option_name'); ?>" /></td>
  </tr>
  </table>
  <?php  submit_button(); ?>
  </form>
  </div>
<?php
    }

}

new Admin_page_function();
