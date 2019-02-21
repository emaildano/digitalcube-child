<?php

// Custom Button Styles for Elementor

add_action(
  'elementor/element/button/section_button/before_section_end',
  function ($instance) {
    $controls = $instance->get_controls();
    $controls['button_type']['options'] += [
      'blue' => __('Blue'),
      'gradient' => __('Gradient'),
      'white' => __('White'),
      'black' => __('Black'),
      'link' => __('Link'),
    ];
    $instance->update_control('button_type', $controls['button_type']);
  }
);

add_action(
  'elementor/element/call-to-action/hover_effects/before_section_end',
  function($instance) {
    $controls = $instance->get_controls();
    
    $controls['transformation']['default'] = '';
    $instance->update_control('transformation', $controls['transformation']);

    $controls['content_animation']['default'] = '';
    $instance->update_control('content_animation', $controls['content_animation']);
  }
);

add_action(
  'elementor/element/call-to-action/section_main_image/before_section_end',
  function($instance) {
    $controls = $instance->get_controls();
    
    $controls['skin']['default'] = 'cover';
    $instance->update_control('skin', $controls['skin']);
  }
);

