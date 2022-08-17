<?php

class heading_with_description_widget extends \Elementor\Widget_Base{

    public function get_name(){
       return 'heading-with-description';
    }

    public function get_title(){
    return esc_html ('Heading With Description'); 
    }

    public function get_icon(){
     return 'eicon-text';
    }
   
    public function get_custom_help_url(){
        return 'https://jawad-developer.com/';
    }

    public function get_categories(){
        return ['basic'];
    }

    protected function register_controls(){


      /* Start Content Tab */

$this->start_controls_section('content_section',
          [
            'label' => esc_html__('Content'), 
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
          ]);

$this->add_control('w_heading',
          [
            'label' => esc_html__('Heading') ,
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
          ]);

$this->add_responsive_control('heading_alignment',
          [
            'label' => esc_html__('Heading Alignment'),
            'type' => \Elementor\Controls_Manager::CHOOSE,
            'options' => [
              'left' =>[
                'label' => esc_html__('Left'),
                'icon' => 'eicon-text-align-left',
              ],

              'center' => [
                'label' => esc_html__('Center'),
                'icon' => 'eicon-text-align-center',
              ],

              'right' => [
                  'label' => esc_html__('Right'),
                  'icon' => 'eicon-text-align-right',
              ],

              'justified' => [
                  'label' => esc_html__('Justified'),
                  'icon' => 'eicon-text-align-justify',
              ],
            ],
            'selectors' => [
              '{{WRAPPER}} .widget_heading' => 'text-align: {{VALUE}};',
            ]
        ]);

$this->add_control('heading_link',
        [
          'label' => esc_html__('Heading Link'),
          'type' => \Elementor\Controls_Manager::URL,
          'placeholder' => esc_html__('https://www.example.com'),
        ]);

$this->add_control('heading_show_hide',
        [
          'label' => esc_html__('Heading Show/Hide'),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'label_on' => esc_html__('Show'),
          'label_off' => esc_html__('Hide'),
          'return_value' => 'yes',
          'default' => 'yes',
        ]);

$this->add_control('heading_description',
        [
          'label' => esc_html__('Description'),
          'type' => \Elementor\Controls_Manager::WYSIWYG,
        ]);

$this->add_responsive_control('description_alignment',
        [
          'label' => esc_html__('Description Alignment'),
          'type' => \Elementor\Controls_Manager::CHOOSE,
          'options' => [
            'left' =>[
              'label' => esc_html__('Left'),
              'icon' => 'eicon-text-align-left',
            ],

            'center' => [
              'label' => esc_html__('Center'),
              'icon' => 'eicon-text-align-center',
            ],

            'right' => [
                'label' => esc_html__('Right'),
                'icon' => 'eicon-text-align-right',
            ],

            'justified' => [
                'label' => esc_html__('Justified'),
                'icon' => 'eicon-text-align-justify',
            ],
          ], 
          'selectors' => [
            '{{WRAPPER}} .h_description' => 'text-align: {{VALUE}};',
          ]
        ]);

$this->add_control('description_link',
        [
          'label' => esc_html__('Description Link'),
          'type' => \Elementor\Controls_Manager::URL,
          'placeholder' => esc_html__('https://www.example.com'),
        ]);

$this->add_control('description_show_hide',
        [
          'label' => esc_html('Description Show/Hide'),
          'type' => \Elementor\Controls_Manager::SWITCHER,
          'label_on' => esc_html__('Show'),
          'label_off' => esc_html__('Hide'),
          'default' => 'yes', 
        ]);
    
$this->end_controls_section();

       /* End Content Tab */




      /* Start Style Tab */
      /* Start Heading Style */

$this->start_controls_section('heading_style',
        [
          'label' => esc_html__('Heading'),
          'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]);

$this->add_responsive_control('heading_color',
        [
          'label' => esc_html__('Color'),
          'type' => \Elementor\Controls_Manager::COLOR,
          'selectors' => [
      '{{WRAPPER}} .widget_heading' => 'color: {{VALUE}};',
          ],
        ]);

$this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
          'name' => 'heading_typography',
          'label' => esc_html__('Typography'),
          'selector' => '{{WRAPPER}} .widget_heading', 
        ]);

  
$this->add_group_control(
        \Elementor\Group_Control_Text_Shadow::get_type(),
        [
          'name' => 'heading_text_shadow',
          'label' => esc_html__('Text Shadow'),
          'selector' => '{{WRAPPER}} .widget_heading',
        ]);


$this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
        'name' => 'heading_border',
        'label' => esc_html__('Border'),
        'selector' => '{{WRAPPER}} .widget_heading',
        ]);
$this->end_popover();

$this->add_responsive_control('heading_border_radius',
        [
          'label' => esc_html__('Border Radius'),
          'type' => \Elementor\Controls_Manager::DIMENSIONS,
          'size_units' => ['px','%'],
          'selectors' => [
            '{{WRAPPER}} .widget_heading' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
          ],
        ]);

$this->add_responsive_control(
        'heading_background',
        [
          'label' => esc_html__('Background'),
          'type' => \Elementor\Controls_Manager::COLOR,
          'selectors' => [
            '{{WRAPPER}} .widget_heading' => 'background: {{VALUE}}',
          ]
        ]);

$this->add_group_control(
        \Elementor\Group_Control_Css_Filter::get_type(),
        [
            'name' => 'heading_css_filter',
            'label' => esc_html__('Css Filter'),
            'selector' => '{{WRAPPER}} .widget_heading',
        ]);

$this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'heading_box_shadow',
            'label' => esc_html__('Box Shadow'),
            'selector' => '{{WRAPPER}} .widget_heading',
        ]);

            
$this->add_responsive_control('heading_margin',
        [
          'label' => esc_html__('Margin'),
          'type' => \Elementor\Controls_Manager::DIMENSIONS,
          'size_units' => ['px','em','%'],
          'selectors' => [
            '{{WRAPPER}} .widget_heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          ],
        ]);


$this->add_responsive_control('heading_padding',
        [
          'label' => esc_html__('Padding'),
          'type' => \Elementor\Controls_Manager::DIMENSIONS,
          'size_units' => ['px','em','%'],
          'selectors' => [
            '{{WRAPPER}} .widget_heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          ],
        ]);

  $this->end_controls_section(); 

  /* End Heading Style */



/* Start Description Style */

$this->start_controls_section('description_style',
        [
          'label' => esc_html__('Description'),
          'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]);

$this->add_responsive_control('description_color',
        [
          'label' => esc_html__('Color'),
          'type' => \Elementor\Controls_Manager::COLOR,
          'selectors' => [
			'{{WRAPPER}} .h_description p' => 'color: {{VALUE}};',
		    ],
        ]);

$this->add_group_control(
  \Elementor\Group_Control_Typography::get_type(),
        [
          'name' => 'description_typography',
          'label' => esc_html__('Typography'),
          'selector' => '{{WRAPPER}} .h_description p', 
        ]);
  
$this->add_group_control(
          \Elementor\Group_Control_Text_Shadow::get_type(),
          [
            'name' => 'description_text_shadow',
            'label' => esc_html__('Text Shadow'),
            'selector' => '{{WRAPPER}} .h_description p',
          ]);  
 
$this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
          'name' => 'description_border',
          'label' => esc_html__('Border'),
          'selector' => '{{WRAPPER}} .h_description',
        ]);

$this->add_responsive_control('description_border_radius',
        [
          'label' => esc_html__('Border Radius'),
          'type' => \Elementor\Controls_Manager::DIMENSIONS,
          'size_units' => ['px','%'],
          'selectors' => [
            '{{WRAPPER}} .h_description' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
        ],
        ]);

$this->add_responsive_control(
        'description_background',
        [
          'label' => esc_html__('Background'),
          'type' => \Elementor\Controls_Manager::COLOR,
          'selectors' => [
          '{{WRAPPER}} .h_description' => 'background: {{VALUE}}',
        ]
        ]);

$this->add_group_control(
        \Elementor\Group_Control_Css_Filter::get_type(),
        [
          'name' => 'description_css_filter',
          'label' => esc_html__('Css Filter'),
          'selector' => '{{WRAPPER}} .h_description p',
        ]);

$this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
          'name' => 'description_box_shadow',
            'label' => esc_html__('Box Shadow'),
            'selector' => '{{WRAPPER}} .h_description',
        ]);

            
$this->add_responsive_control('description_margin',
        [
        'label' => esc_html__('Margin'),
        'type' => \Elementor\Controls_Manager::DIMENSIONS,
        'size_units' => ['px','em','%'],
        'selectors' => [
          '{{WRAPPER}} .h_description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        ]);

$this->add_responsive_control('description_padding',
        [
          'label' => esc_html__('Padding'),
          'type' => \Elementor\Controls_Manager::DIMENSIONS,
          'size_units' => ['px','em','%'],
          'selectors' => [
          '{{WRAPPER}} .h_description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        ]);

$this->end_controls_section(); 

      /* End Description Style */

      /* End Style Tab */
    }


    protected function render(){
     $settings = $this->get_settings_for_display();
     $this->add_link_attributes('heading_link',$settings['heading_link']);
     $this->add_link_attributes('description_link',$settings['description_link']);
     if('yes' === $settings['heading_show_hide']){
     ?>   
      <a <?php echo wp_kses_data($this->get_render_attribute_string('heading_link')); ?>"><div class="widget_heading"><?php echo wp_kses_post($settings['w_heading']); ?></div></a>
      <?php 
    }
     if ( 'yes' === $settings['description_show_hide']){
       ?> <a <?php echo wp_kses_data($this->get_render_attribute_string('description_link')); ?>><div class="h_description"><?php echo wp_kses_post($settings['heading_description']); ?></div></a>
       <?php
     }
    }

    protected function content_template(){
      ?>

     <# if('yes' === settings.heading_show_hide){ #>
     
      <div class="widget_heading">{{{settings.w_heading}}}</div>

      <# } #>

       <# if ( 'yes' === settings.description_show_hide){ #>
       <div class="h_description">{{{settings.heading_description}}}</div>

      <# } #>

     <?php
    }
}

?>