<?php

function ju_social_customaizer_section($wp_customize) {
    $wp_customize->add_setting('ju_facebook_handle', array(
      'default' => ''
    ));
    $wp_customize->add_setting('ju_facebook_icon_handle', array(
      'default' => ''
    ));

    $wp_customize->add_section('ju_social_section', array(
      'title' => __('udemy social setting :)', 'udemy'),
      'priority' => 60
    ));

    $wp_customize->add_control(
      new WP_Customize_Control(
        $wp_customize,
        'ju_social_facebook_input',
        array(
            'label'          => __( 'Facebook Handle', 'udemy' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_facebook_handle',
            'type'           => 'text'
        )
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'ju_social_facebook_icon_input',
      array(
          'label'          => __( 'font aweasome icon', 'udemy' ),
          'section'        => 'ju_social_section',
          'settings'       => 'ju_facebook_icon_handle',
          'type'           => 'text'
      )
  )
);
}

 ?>
