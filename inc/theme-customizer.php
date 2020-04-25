<?php 
/**
 * Theme Custom Customizer
 *
 * @package WP_Supercampeones_Theme
 */

/**
 * Callback for customize_register action.
 *
 * Registers new customizer section and settings
 *
 * @param mixed $wp_customize customize registered parameter.
 */
function wp_supercampeones_theme_customize_register( $wp_customize ) {

  // Adding Section in the customizer.
  $wp_customize->add_section(
    'wp_supercampeones_theme_customizer_section',
    array(
      'title'    => __( 'Theme Options', 'starter' ),
      'priority' => 30,
    )
  );

  // Add Logo Image (SVG).
  $wp_customize->add_setting( 'wp_supercampeones_theme_logo' );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'wp_supercampeones_theme_logo',
      array(
        'label'    => __( 'Upload Logo', 'wp_supercampeones_theme_logo' ),
        'section'  => 'wp_supercampeones_theme_customizer_section',
        'settings' => 'wp_supercampeones_theme_logo',
      )
    )
  );

  // Add logo desktop width option.
  $wp_customize->add_setting( 'wp_supercampeones_theme_logo_desktop_width' );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'wp_supercampeones_theme_logo_desktop_width',
      array(
        'label'       => __( 'Logo Desktop width', 'wp_supercampeones_theme_logo_desktop_width' ),
        'section'     => 'wp_supercampeones_theme_customizer_section',
        'settings'    => 'wp_supercampeones_theme_logo_desktop_width',
        'description' => __( 'Integer defines *desktop* logo width', 'wp_supercampeones_theme_logo_desktop_width' ),
      )
    )
  );

  // Add logo mobile width option.
  $wp_customize->add_setting( 'wp_supercampeones_theme_logo_mobile_width' );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'wp_supercampeones_theme_logo_mobile_width',
      array(
        'label'       => __( 'Logo Mobile width', 'wp_supercampeones_theme_logo_mobile_width' ),
        'section'     => 'wp_supercampeones_theme_customizer_section',
        'settings'    => 'wp_supercampeones_theme_logo_mobile_width',
        'description' => __( 'Integer defines *mobile* logo width', 'wp_supercampeones_theme_logo_mobile_width' ),
      )
    )
  );
}

add_action( 'customize_register', 'wp_supercampeones_theme_customize_register' );
