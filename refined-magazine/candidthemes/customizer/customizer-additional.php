<?php 
/**
 *  Refined Magazine Additional Settings Option
 *
 * @since Refined Magazine 1.0.0
 *
 */
/*Extra Options*/
$wp_customize->add_section( 'refined_magazine_extra_options', array(
    'priority'       => 75,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Extra Options', 'refined-magazine' ),
    'panel'          => 'refined_magazine_panel',
) );

/*Preloader Enable*/
$wp_customize->add_setting( 'refined_magazine_options[refined-magazine-extra-preloader]', array(
    'capability'        => 'edit_theme_options',
    'transport' => 'refresh',
    'default'           => $default['refined-magazine-extra-preloader'],
    'sanitize_callback' => 'refined_magazine_sanitize_checkbox'
) );
$wp_customize->add_control( 'refined_magazine_options[refined-magazine-extra-preloader]', array(
    'label'     => __( 'Enable Preloader', 'refined-magazine' ),
    'description' => __( 'It will enable the preloader on the website.', 'refined-magazine' ),
    'section'   => 'refined_magazine_extra_options',
    'settings'  => 'refined_magazine_options[refined-magazine-extra-preloader]',
    'type'      => 'checkbox',
    'priority'  => 15,
) );

/*Home Page Content*/
$wp_customize->add_setting( 'refined_magazine_options[refined-magazine-front-page-content]', array(
    'capability'        => 'edit_theme_options',
    'transport' => 'refresh',
    'default'           => $default['refined-magazine-front-page-content'],
    'sanitize_callback' => 'refined_magazine_sanitize_checkbox'
) );
$wp_customize->add_control( 'refined_magazine_options[refined-magazine-front-page-content]', array(
    'label'     => __( 'Hide Front Page Content', 'refined-magazine' ),
    'description' => __( 'Checked to hide the front page content from front page.', 'refined-magazine' ),
    'section'   => 'refined_magazine_extra_options',
    'settings'  => 'refined_magazine_options[refined-magazine-front-page-content]',
    'type'      => 'checkbox',
    'priority'  => 15,
) );

/*Hide Post Format Icons*/
$wp_customize->add_setting( 'refined_magazine_options[refined-magazine-extra-post-formats-icons]', array(
    'capability'        => 'edit_theme_options',
    'transport' => 'refresh',
    'default'           => $default['refined-magazine-extra-post-formats-icons'],
    'sanitize_callback' => 'refined_magazine_sanitize_checkbox'
) );
$wp_customize->add_control( 'refined_magazine_options[refined-magazine-extra-post-formats-icons]', array(
    'label'     => __( 'Hide Post Formats Icons', 'refined-magazine' ),
    'description' => __( 'Icons like camera, photo, video, audio will hide.', 'refined-magazine' ),
    'section'   => 'refined_magazine_extra_options',
    'settings'  => 'refined_magazine_options[refined-magazine-extra-post-formats-icons]',
    'type'      => 'checkbox',
    'priority'  => 15,
) );


/*Hide Read More Time*/
$wp_customize->add_setting( 'refined_magazine_options[refined-magazine-extra-hide-read-time]', array(
    'capability'        => 'edit_theme_options',
    'transport' => 'refresh',
    'default'           => $default['refined-magazine-extra-hide-read-time'],
    'sanitize_callback' => 'refined_magazine_sanitize_checkbox'
) );
$wp_customize->add_control( 'refined_magazine_options[refined-magazine-extra-hide-read-time]', array(
    'label'     => __( 'Hide Reading Time', 'refined-magazine' ),
    'description' => __( 'You can hide the reading time in whole site.', 'refined-magazine' ),
    'section'   => 'refined_magazine_extra_options',
    'settings'  => 'refined_magazine_options[refined-magazine-extra-hide-read-time]',
    'type'      => 'checkbox',
    'priority'  => 15,
) );

/*Font awesome version loading*/
$wp_customize->add_setting( 'refined_magazine_options[refined-magazine-font-awesome-version-loading]', array(
    'capability'        => 'edit_theme_options',
    'transport' => 'refresh',
    'default'           => $default['refined-magazine-font-awesome-version-loading'],
    'sanitize_callback' => 'refined_magazine_sanitize_select'
 ) );
 $wp_customize->add_control( 'refined_magazine_options[refined-magazine-font-awesome-version-loading]', array(
   'choices' => array(
    'version-4'    => __('Current Theme Used Version 4','refined-magazine'),
    'version-5'   => __('Fontawesome Version 5','refined-magazine'),
    'version-6'   => __('New Fontawesome Version 6','refined-magazine'),
 ),
   'label'     => __( 'Select the preferred fontawesome version', 'refined-magazine' ),
   'description' => __('You can select the latest fontawesome version to get more options for icons', 'refined-magazine'),
   'section'   => 'refined_magazine_extra_options',
   'settings'  => 'refined_magazine_options[refined-magazine-font-awesome-version-loading]',
   'type'      => 'select',
   'priority'  => 15,
 ) );