<?php 
/**
 * Theme Settings
 *
 * @package WP_Supercampeones_Theme
 */

add_action('admin_menu', 'wp_supercampeones_theme_admin');
function wp_supercampeones_theme_admin() {
  add_menu_page(
  'Supercampeones',  // Admin page title
  'Supercampeones',  // Admin menu label
  'manage_options',
  'wp_supercampeones_theme_options', // Admin slug
  'wp_supercampeones_theme_page'); // Display Page
}

add_action('admin_init', 'wp_supercampeones_theme_items');
function wp_supercampeones_theme_items() { 
  $settings = array(
    'wp_supercampeones_theme_id' => array(
      'title'=>'My Theme Settings',
      'page'=>'my_theme_option',
      'fields'=> array(
        array(
          'id'=> 'facebook',
          'title'=>'Facebook',
          'callback'=> 'text_callback'
          ),
        array(
          'id'=> 'instagram',
          'title'=>'Instagram',
          'callback'=> 'text_callback'
          ),
        array(
          'id'=> 'contact_shortcode',
          'title'=>'Contact Form 7 Shortcode',
          'callback'=> 'contact_shortcode_callback'
          ),

        )
      )

  );
    foreach( $settings as $id => $values){
        add_settings_section( 
            $id, // ID used to identify this section and with which to register options
            $values['title'],
            'description_callback', // Callback used to render the description of the section
            $values['page'] // Page on which to add this section of options
        );
        
        foreach ($values['fields'] as $field) {
            // code...
            add_settings_field(  
                $field['id'],   // ID used to identify the field throughout the theme             
                $field['title'],     // The label to the left of the option interface element
                $field['callback'],   
                $values['page'],   // The page on which this option will be added            
                $id,        // ID of the section
                array(
                    $values['page'],        //option name
                    $field['title']     //id 
                ) 
            );
        }
        
        register_setting($values['page'], $values['page']);
        
    } // end of foreach
} // end of myTheme_options()

/*********************************
 * Callbacks
**********************************/
function description_callback() { 
    echo '<p>Lorem ipsuma</p>'; 
}

function textarea_callback($args) { 
    $options = get_option($args[0]); 
    echo '<textarea rows="8" cols="50" class="large-text" id="'  . $args[1] . '" name="'. $args[0] .'['  . $args[1] . ']">' . $options[''  . $args[1] . ''] . '</textarea>';
}

function text_callback($args) { 
    $options = get_option($args[0]); 
    echo '<input type="text" class="regular-text" id="'  . $args[1] . '" name="'. $args[0] .'['  . $args[1] . ']" value="' . $options[''  . $args[1] . ''] . '"></input>';
}

function contact_shortcode_callback($args) { 
    $options = get_option($args[0]); 
    echo '<input type="text" class="regular-text" id="'  . $args[1] . '" name="'. $args[0] .'['  . $args[1] . ']" value="' . $options[''  . $args[1] . ''] . '"></input><p class="help-block">Shortcode of the Contact Form 7 plugin, without the quotes.</p>';
}

/***************************************
 * Display Page
 ***************************************/
function wp_supercampeones_theme_page() {
?>
    <div class="wrap">  
        <div id="icon-themes" class="icon32"></div>  
        <h2>WP_Supercampeones_Theme</h2>  
        <?php settings_errors(); ?>   

        <form method="post" action="options.php">  
            <?php 
            settings_fields( 'my_theme_option' );
            do_settings_sections( 'my_theme_option' );
            submit_button();
            ?>
        </form> 
    </div> 
<?php
}
