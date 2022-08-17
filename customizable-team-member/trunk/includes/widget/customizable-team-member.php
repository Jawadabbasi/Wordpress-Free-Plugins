<?php

// Directly Not Accessable
if(!defined('ABSPATH')){
   exit;
}

class customizable_team_member_elementor_widget extends \Elementor\Widget_Base{
   
   public function get_name(){
      return 'customizable-team-member-widget';
   }

   public function get_title(){
      return 'Customizable Team Member'; 
   }

   public function get_icon(){
      return 'eicon-person';
   }

   public function get_categories(){
      return ['general'];
   }


   
protected function register_controls(){

   /* Team Member Image/Icon With Link */

   $this->start_controls_section('team_member_image_video_icon_section',[
      'label' => esc_html__('Team Member Image/Video/Icon'),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
   ]);

   $this->start_controls_tabs('team_member_image_video_icon');

   /* Team Member Image Tab */

   $this->start_controls_tab('team_member_image_tab',[
      'label' => esc_html__('Image'),
   ]);

   $this->add_control('team_member_image',[
      'label' => esc_html__('Image (Please use same ratio image like 1500x1500)'),
      'type' => \Elementor\Controls_Manager::MEDIA,
      'default' => [
         'url' => \Elementor\Utils::get_placeholder_image_src(),
      ],
   ]);

   $this->add_control('team_member_image_link',[
      'label' => esc_html__('Link'),
      'type' => \Elementor\Controls_Manager::URL,
   ]); 

   $this->add_control('team_member_image_display',[
      'label' => esc_html__('Display Image?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'yes',
   ]);
 
   $this->end_controls_tab();


   /* Team Member Video Tab */

   $this->start_controls_tab('team_member_video_tab',[
      'label' => esc_html__('Video'),
   ]);

   $this->add_control('team_member_enable_video',[
      'label' => esc_html__('Enable Video?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_control('team_member_youtube_video',[
      'label' => esc_html__('Youtube Video ID'),
      'type' => \Elementor\Controls_Manager::TEXT,
      'label_block' => true,
      'default' => esc_html__('XHOmBV4js_E'),
      'placeholder' => esc_html__('XHOmBV4js_E'),
      'condition' => [
      'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->add_control('team_member_youtube_video_height',[
      'label' => esc_html__('Height'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 500,
         ],  
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_youtube_video iframe' => 'height:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->add_control('team_member_media_library_video',[
      'label' => esc_html__('Media Library Video'),
      'type' => \Elementor\Controls_Manager::MEDIA,
      'media_types' => ['video'],
      'condition' => [
         'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->add_control('team_member_media_library_video_poster',[
      'label' => esc_html__('Media Library Video Poster'),
      'type' => \Elementor\Controls_Manager::MEDIA,
      'condition' => [
         'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->add_control('team_member_media_library_video_height',[
      'label' => esc_html__('Height'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 500,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_media_library_video video' => 'height:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->add_control('team_member_media_library_display',[
      'label' => esc_html__('Display Media Library Video?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
      'condition' => [
         'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->end_controls_tab();


   /* Team Member Icon Tab */

   $this->start_controls_tab('team_member_icon_tab',[
      'label' => esc_html__('Icon'),
   ]);

   $this->add_control('team_member_icon',[
      'label' => esc_html__('Icon'),
      'type' => \Elementor\Controls_Manager::ICONS,
   ]);

   $this->add_control('team_member_icon_link',[
      'label' => esc_html__('Link'),
      'type' => \Elementor\Controls_Manager::URL,
   ]); 
   
   $this->add_control('team_member_icon_display',[
      'label' => esc_html__('Display Icon?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'yes',
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


   
   /* Team Member Content */

   $this->start_controls_section('team_member_content_section',[
      'label' => esc_html__('Team Member Content'),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
   ]);

   $this->add_control('team_member_name',[
      'label' => esc_html__('Name'),
      'type' => \Elementor\Controls_Manager::TEXT,
      'label_block' => true,
      'placeholder' => esc_html__('John Jennifer'),
      'default' => esc_html__('John Jennifer'),
   ]);

   $this->add_control('team_member_role',[
      'label' => esc_html__('Role'),
      'type' => \Elementor\Controls_Manager::TEXTAREA,
      'placeholder' => esc_html__('Owner'),
      'default' => esc_html__('Owner'),
   ]);

   $this->add_control('team_member_short_description',[
      'label' => esc_html__('Short Description'),
      'type' => \Elementor\Controls_Manager::WYSIWYG,
   ]); 

   $this->end_controls_section();


 
   /* Team Member Contact Information */
   
   $this->start_controls_section('team_member_contact_information_section',[
      'label' => esc_html__('Team Member Contact Information'),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
   ]);

   $this->add_control('team_member_contact_information_display',[
      'label' => esc_html__('Display Contact Information?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
   ]);
 

   $this->add_control('team_member_email_icon',[
      'label' => esc_html__('Email Icon'),
      'type' => \Elementor\Controls_Manager::ICONS,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]); 

   $this->add_control('team_member_email',[
      'label' => esc_html__('Email Address'),
      'type' => \Elementor\Controls_Manager::TEXT,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->add_control('team_member_phone_number_icon',[
      'label' => esc_html__('Phone Icon'),
      'type' => \Elementor\Controls_Manager::ICONS,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->add_control('team_member_phone_number',[
      'label' => esc_html__('Phone Number'),
      'type' => \Elementor\Controls_Manager::TEXT,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]); 

   $this->add_control('team_member_whatsapp_number_icon',[
      'label' => esc_html__('Whatsapp Number Icon'),
      'type' => \Elementor\Controls_Manager::ICONS,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);
   
   $this->add_control('team_member_whatsapp_number',[
      'label' => esc_html__('Whatsapp Number'),
      'type' => \Elementor\Controls_Manager::TEXT,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->add_control('team_member_whatsapp_number_link_target',[
      'label' => esc_html__('Link Open In New Tab'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->add_control('team_member_address_icon',[
      'label' => esc_html__('Address Icon'),
      'type' => \Elementor\Controls_Manager::ICONS,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->add_control('team_member_address',[
      'label' => esc_html__('Address'),
      'type' => \Elementor\Controls_Manager::TEXT,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->add_control('team_member_address_link_target',[
      'label' => esc_html__('Link Open In New Tab'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->end_controls_section();   


 
   /* Team Member Social Profiles */

   $this->start_controls_section('team_member_social_profiles_section',[
      'label' => esc_html__('Team Member Social Profiles'),
      'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
   ]);

   $this->add_control('team_member_social_profiles_display',[
      'label' => esc_html__('Display Social Profiles?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'yes',
   ]);

   $repeater = new \Elementor\Repeater();

   $repeater->add_control('team_member_social_icon',[
      'label' => esc_html__('Icon'),
      'type' => \Elementor\Controls_Manager::ICONS,
   ]);

   $repeater->add_control('team_member_social_profile_link',[
      'label' => esc_html__('Link'),
      'type' => \Elementor\Controls_Manager::URL,
      'label_block' => true,
      'placeholder' => esc_html__('https://www.example.com'),
   ]);

   $this->add_control('team_member_social_profiles',[
      'type' => \Elementor\Controls_Manager::REPEATER,
      'default' => [
         [
         'team_member_social_icon' => [
            'value' => 'fab fa-facebook',
            'library' => 'fa-brands',
         ],
      ],
      
      [
         'team_member_social_icon' => [
            'value' => 'fab fa-twitter',
            'library' => 'fa-brands',
         ],
      ],
      [
         'team_member_social_icon' => [
            'value' => 'fab fa-instagram',
            'library' => 'fa-brands',
         ],
      ],
      ],
      'fields' => $repeater->get_controls(),
      'title_field' => '<i class="{{{team_member_social_icon.value}}}"></i>',
   ]); 

   $this->end_controls_section();


 
   /* Team Member Section Styling */
   
   $this->start_controls_section('team_member_section_styling',[
      'label' => esc_html__('Team Member Complete Section'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
   ]);
   
   $this->add_control('team_member_complete_section_layouts',[
      'label' => esc_html__('Layout'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
            'layout-1' => esc_html__('Layout 1'),
            'layout-2' => esc_html__('Layout 2'),
            'layout-3' => esc_html__('Layout 3'),
            'layout-4' => esc_html__('Layout 4'),
            'layout-5' => esc_html__('Layout 5'),
            'layout-6' => esc_html__('Layout 6'),
      ],
      'default' => 'layout-1',
   ]);

   $this->add_responsive_control('team_member_section_first_column_width',[
      'label' => esc_html__('First Column Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','%'],
      'range' => [
         'px' => [
            'min' => 0,
            'max' => 1000,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_first_column' => 'width:{{SIZE}}{{UNIT}}',
      ], 
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
      ],
      ],
   ]);

   $this->add_responsive_control('team_member_section_second_column_width',[
      'label' => esc_html__('Second Column Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','%'],
      'range' => [
         'px' => [
            'min' => 0,
            'max' => 1000,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_second_column' => 'width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
      ],
      ], 
   ]);  

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_first_column_bakground_color',
      'label' => esc_html__('First Column Background'),
      'selector' => '{{WRAPPER}} .tm_first_column',
      'default' => '#0b1a02',
      'exclude' => ['image'],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
      ],
      ],
   ]);

   $this->add_responsive_control('team_member_first_column_margin',[
      'label' => esc_html__('First Column Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_first_column' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
         ],
      ],
   ]);

   $this->add_responsive_control('team_member_first_column_padding',[
      'label' => esc_html__('First Column Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_first_column' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
         ],
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_second_column_bakground_color',
      'label' => esc_html__('Second Column Background'),
      'selector' => '{{WRAPPER}} .tm_second_column',
      'default' => '#0b1a02',
      'exclude' => ['image'],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
         ],
      ],
   ]);

   $this->add_responsive_control('team_member_second_column_margin',[
      'label' => esc_html__('Second Column Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_second_column' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
         ],
      ],
   ]);

   $this->add_responsive_control('team_member_second_column_padding',[
      'label' => esc_html__('Second Column Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_second_column' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => [
            'layout-4',
            'layout-5',
            'layout-6',
         ],
      ],
   ]);


   $this->start_controls_tabs('team_member_section_tabs');

   /* Team Member Section Normal Tab */

   $this->start_controls_tab('team_member_section_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_section_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_complete_section',
      'exclude' => ['image'],
      'condition' => [
         'team_member_complete_section_layouts!' => 'layout-2',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_section_layout_5_bakground',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_complete_section',
      'condition' => [
         'team_member_complete_section_layouts' => 'layout-2',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
   'name' => 'team_member_complete_section_border',
   'label' => esc_html__('Border'),
   'selector' => '{{WRAPPER}} .team_member_complete_section',
   ]);

   $this->add_responsive_control('team_member_complete_section_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_complete_section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_section_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_complete_section' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_section_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_complete_section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_complete_section_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .team_member_complete_section',
      'exclude' => ['box_shadow_position'],
   ]); 

   $this->end_controls_tab();


   /* Team Member Section Hover Tab */

   $this->start_controls_tab('team_member_section_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_section_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_complete_section:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_complete_section_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .team_member_complete_section:hover',
   ]);

   $this->add_responsive_control('team_member_complete_section_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_complete_section:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_complete_section_hover_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .team_member_complete_section:hover',
      'exclude' => ['box_shadow_position'],
   ]); 

   $this->add_control('team_member_complete_section_hover_animation',[
      'label' => esc_html__('Hover Animation'),
      'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
      'selector' => '{{WRAPPER}} .team_member_complete_section:hover',
   ]);   

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


 
   /* Team Member Inner Complete Section Style */

   $this->start_controls_section('team_member_inner_complete_section_style',[
      'label' => esc_html__('Team Member Inner Complete Section'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_complete_section_layouts' => 'layout-2',
      ],
   ]);

   $this->start_controls_tabs('team_member_inner_complete_section_tabs');

   /* Team Member Inner Complete Section Normal Tab */

   $this->start_controls_tab('team_member_inner_complete_section_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_inner_complete_section_bakground',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_inner_complete_section',
      'exclude' => ['image'],
      'condition' => [
         'team_member_complete_section_layouts' => 'layout-2',
      ],
   ]);

   $this->add_responsive_control('team_member_inner_complete_section_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_inner_complete_section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => 'layout-2',
      ],
   ]);

   $this->add_responsive_control('team_member_inner_complete_section_border_radius',[
      'label' => esc_html__('Border Radius'),  
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
      '{{WRAPPER}} .team_member_inner_complete_section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->end_controls_tab();


   /* Team Member Inner Complete Section Hover Tab */

   $this->start_controls_tab('team_member_inner_complete_section_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_inner_complete_section_hover_bakground',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_inner_complete_section:hover',
      'exclude' => ['image'],
      'condition' => [
         'team_member_complete_section_layouts' => 'layout-2',
      ],
   ]);

   $this->add_responsive_control('team_member_inner_complete_section_hover_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_inner_complete_section:hover' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_complete_section_layouts' => 'layout-2',
      ],
   ]);

   $this->add_responsive_control('team_member_inner_complete_section_hover_border_radius',[
      'label' => esc_html__('Border Radius'),  
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
      '{{WRAPPER}} .team_member_inner_complete_section:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_control('team_member_inner_complete_section_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ]
      ],
      'selectors' => [
         '{{WRAPPER}} .team_member_inner_complete_section:hover' => 'transition-duration:{{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


 
   /* Team Member Image Style Section */
   
   $this->start_controls_section('team_member_image_style',[
      'label' => esc_html__('Team Member Image'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_image_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_image_tabs');
    
   /* Team Member Image Normal Tab */

   $this->start_controls_tab('team_member_image_normal_style_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_responsive_control('team_member_image_width',[
      'label' => esc_html__('Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','%'],
      'range' => [
            'px' => [
            'min' => 0,
            'max' => 1000,
            ],
      ],
      'selectors' => [
            '{{WRAPPER}} .team_member_image img' => 'width:{{SIZE}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_image_height',[
      'label' => esc_html__('Height'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
            'px' => [
            'min' => 0,
            'max' => 1000,
            ],
      ],
      'selectors' => [
            '{{WRAPPER}} .team_member_image img' => 'height:{{SIZE}}{{UNIT}}',
      ],
   ]);
 
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_image_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .team_member_image img',
    ]);

   $this->add_responsive_control('team_member_image_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_image img' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_image_top_margin',[
      'label' => esc_html__('Margin Top'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'selectors' => [
         '{{WRAPPER}} .team_member_image img' => 'margin-top:{{SIZE}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_image_bottom_margin',[
      'label' => esc_html__('Margin Bottom'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'selectors' => [
         '{{WRAPPER}} .team_member_image img' => 'margin-bottom:{{SIZE}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_image_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .team_member_image img' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_image_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .team_member_image img',
      'exclude' => ['box_shadow_position'],
   ]);

   $this->end_controls_tab();


   /* Team Member Image Hover Tab */

   $this->start_controls_tab('team_member_image_hover_style_tab',[
      'label' => esc_html__('Hover'),
   ]);
 
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_hover_image_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .team_member_image img:hover',
   ]);

   $this->add_responsive_control('team_member_hover_image_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .team_member_image img:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_hover_image_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .team_member_image img:hover',
      'exclude' => ['box_shadow_position'],
   ]);

   $this->add_responsive_control('team_member_image_hover_transition',[
      'label' => esc_html__('Hover Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
            'px' => [
            'max' => 3,
            'step' => 0.1,
            ]
      ],
      'selectors' => [
            '{{WRAPPER}} .team_member_image img:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->add_control('team_member_image_hover_animation',[
      'label' => esc_html__('Hover Animation'),
      'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
      'selector' => '{{WRAPPER}} .team_member_image img:hover',
      'condition' => [
         'team_member_complete_section_layouts!' => [
            'layout-4',
            'layout-5',
         ], 
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


 
   /* Team Member Video Style Section */
   
   $this->start_controls_section('team_member_video_style',[
      'label' => esc_html__('Team Member Video'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_enable_video' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_video_tabs');

   /* Team Member Video Normal Tab */

   $this->start_controls_tab('team_member_video_normal_style_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_video_background_color',
      'label' => esc_html__('Background'),
      'exclude' => ['image'],
      'selector' => '{{WRAPPER}} .tm_media_library_video,.tm_youtube_video',
   ]);

   $this->add_control('team_member_video_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_media_library_video,.tm_youtube_video' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_control('team_member_video_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_media_library_video,.tm_youtube_video' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->end_controls_tab();

   
   /* Team Member Video Hover Tab */

   $this->start_controls_tab('team_member_video_hover_style_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_video_hover_background_color',
      'label' => esc_html__('Background'),
      'exclude' => ['image'],
      'selector' => '{{WRAPPER}} .tm_media_library_video,.tm_youtube_video:hover',
   ]);

   $this->add_control('team_member_video_hover_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_media_library_video,.tm_youtube_video:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_control('team_member_video_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
           'max' => 3,
           'step' => 0.1,
         ],
     ],
     'selectors' => [
         '{{WRAPPER}} .tm_media_library_video,.tm_youtube_video:hover' => 'transition-duration: {{SIZE}}s',
     ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


 
   /* Team Member Icon Style Section */
   
   $this->start_controls_section('team_member_icon_style',[
      'label' => esc_html__('Team Member Icon'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_icon_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_icon_tabs');

   /* Team Member Icon Normal Tab */

   $this->start_controls_tab('team_member_icon_normal_style_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_control('team_member_icon_color',[
      'label' => esc_html__('Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
          '{{WRAPPER}} .team_member_icon' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_icon_background_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_icon i',
      'exclude' => ['image'],
   ]);

   $this->add_responsive_control('team_member_icon_size',[
      'label' => esc_html__('Size'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','em'],
      'range' => [
          'px' => [
            'min' => 0,
            'max' => 160,
          ],
      ],
      'selectors' => [
          '{{WRAPPER}} .team_member_icon' => 'font-size: {{SIZE}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_icon_alignment',[
      'label' => esc_html__('Alignment'),
      'type' => \Elementor\Controls_Manager::CHOOSE,
      'options' => [
         'left' => [
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
      ],
      'selectors' => [
         '{{WRAPPER}} .team_member_icon' => 'text-align: {{VALUE}}',
      ],
   ]);

   $this->add_responsive_control('team_member_icon_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .team_member_icon i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]); 

   $this->add_responsive_control('team_member_icon_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .team_member_icon' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_icon_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .team_member_icon i' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_icon_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .team_member_icon i',
      'exclude' => ['box_shadow_position'],
   ]);

   $this->end_controls_tab();
 

   /* Team Member Icon Hover Tab */

   $this->start_controls_tab('team_member_icon_hover_style_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_control('team_member_hover_icon_color',[
      'label' => esc_html__('Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
          '{{WRAPPER}} .team_member_icon:hover' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_icon_hover_background_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .team_member_icon i:hover',
      'exclude' => ['image'],
   ]);

   $this->add_responsive_control('team_member_hover_icon_size',[
      'label' => esc_html__('Size'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','em'],
      'range' => [
          'px' => [
            'min' => 0,
            'max' => 160,
          ]
      ],
      'selectors' => [
          '{{WRAPPER}} .team_member_icon:hover' => 'font-size: {{SIZE}}{{UNIT}}',
      ],
   ]);

    $this->add_responsive_control('team_member_hover_icon_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .team_member_icon i:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]); 

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_icon_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .team_member_icon i:hover',
      'exclude' => ['box_shadow_position'],
   ]);

   $this->add_responsive_control('team_member_icon_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
          'px' => [
            'max' => 3,
            'step' => 0.1,
          ],
      ],
      'selectors' => [
          '{{WRAPPER}} .team_member_icon i:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->add_control('team_member_icon_hover_animation',[
       'label' => esc_html__('Animation'),
       'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
       'selector' => '{{WRAPPER}} .team_member_icon i:hover',
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section(); 


 
   /* Team Member Name Style Section */
   
   $this->start_controls_section('team_member_name_style_section',[
      'label' => esc_html__('Team Member Name'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
   ]);

   $this->start_controls_tabs('team_member_content_style_tabs');

   /* Team Member Name Normal Tab */

   $this->start_controls_tab('team_member_name_tab',[
      'label' => esc_html__('Normal'),
   ]);
   
   $this->add_control('team_member_name_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
          '{{WRAPPER}} .tm_name h3' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_name_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_name h3',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_name_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_name h3',
      'global' =>[
         'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_PRIMARY,
      ],
   ]);

    $this->add_responsive_control('team_member_name_alignment',[
      'label' => esc_html__('Alignment'),
      'type' => \Elementor\Controls_Manager::CHOOSE,
      'options' => [
         'left' => [
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
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_name' => 'text-align: {{VALUE}}',
      ],
   ]);

   $this->add_responsive_control('team_member_name_outline_type',[
      'label' => esc_html__('Outline Type'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
         'none' => esc_html__('None'),
         'solid' => esc_html__('Solid'),
         'double' => esc_html__('Double'),
         'dotted' => esc_html__('Dotted'),
         'dashed' => esc_html__('Dashed'),
         'groove' => esc_html__('Groove'),
         'ridge' => esc_html__('Ridge'),
         'inset' => esc_html__('Inset'),
         'outset' => esc_html__('Outset'),
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_name h3' => 'outline-style:{{VALUE}}',
      ],
   ]);  

   $this->add_responsive_control('team_member_name_outline_width',[
      'label' => esc_html__('Outline Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 10,
         ],
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_name h3' => 'outline-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_name_outline_type!' => 'none',
      ],
   ]);  

   $this->add_control('team_member_name_outline_color',[
      'label' => esc_html__('Outline Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
          '{{WRAPPER}} .tm_name h3' => 'outline-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_name_outline_type!' => 'none',
      ],
   ]);  
    
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_name_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_name h3',
   ]);

   $this->add_responsive_control('team_member_name_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_name h3' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);
   
   $this->add_control('team_member_name_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_name_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_name h3' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_name_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_name_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
          '{{WRAPPER}} .tm_name h3' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_name_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_responsive_control('team_member_name_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_name h3' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_name_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_name h3' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_name_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_name h3',
   ]); 

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_name_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_name h3',
   ]);

   $this->end_controls_tab();


   /* Team Member Name Hover Tab*/

   $this->start_controls_tab('team_member_name_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);
   
   $this->add_control('team_member_name_hover_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
         '{{WRAPPER}} .tm_name h3:hover' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_name_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_name h3:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_name_hover_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_name h3:hover',
   ]);

   $this->add_responsive_control('team_member_name_hover_outline_type',[
      'label' => esc_html__('Outline Type'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
         'none' => esc_html__('None'),
         'solid' => esc_html__('Solid'),
         'double' => esc_html__('Double'),
         'dotted' => esc_html__('Dotted'),
         'dashed' => esc_html__('Dashed'),
         'groove' => esc_html__('Groove'),
         'ridge' => esc_html__('Ridge'),
         'inset' => esc_html__('Inset'),
         'outset' => esc_html__('Outset'),
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_name h3:hover' => 'outline-style:{{VALUE}}',
      ],
   ]);  

   $this->add_responsive_control('team_member_name_hover_outline_width',[
      'label' => esc_html__('Outline Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 10,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_name h3:hover' => 'outline-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_name_hover_outline_type!' => 'none',
      ],
   ]);  

   $this->add_control('team_member_name_hover_outline_color',[
      'label' => esc_html__('Outline Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_name h3:hover' => 'outline-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_name_hover_outline_type!' => 'none',
      ],
   ]);  
   
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_name_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_name h3:hover',
   ]);

   $this->add_responsive_control('team_member_name_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_name h3:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);
   
   $this->add_control('team_member_name_hover_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_name_hover_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_name h3:hover' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_name_hover_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_name_hover_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_name h3:hover' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_name_hover_text_stroke_display' => 'yes',
      ],
   ]); 
   
   $this->add_responsive_control('team_member_name_hover_padding',[
   'label' => esc_html__('Padding'),
   'type' => \Elementor\Controls_Manager::DIMENSIONS,
   'selectors' => [
         '{{WRAPPER}} .tm_name h3:hover' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_name_hover_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_name h3:hover',
   ]);
         
   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_name_hover_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_name h3:hover',
   ]);

   $this->add_responsive_control('team_member_name_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
            'px' => [
            'max' => 3,
            'step' => 0.1,
         ],
      ],
      'selectors' => [
            '{{WRAPPER}} .tm_name h3:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


 
   /* Team Member Role Style Section*/
   
   $this->start_controls_section('team_member_role_style_section',[
      'label' => esc_html__('Team Member Role'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
   ]);
   
   $this->start_controls_tabs('team_member_role_style_tabs');
   
   /* Team Member Role Normal Tab */
   
   $this->start_controls_tab('team_member_role_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_control('team_member_role_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
          '{{WRAPPER}} .tm_role' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_role_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_role',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_role_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_role',
      'global' => [
         'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_PRIMARY,
      ],
   ]);

   $this->add_responsive_control('team_member_role_alignment',[
      'label' => esc_html__('Alignment'),
      'type' => \Elementor\Controls_Manager::CHOOSE,
      'options' => [
         'left' => [
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
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_role' => 'text-align: {{VALUE}}',
      ],
   ]);

   $this->add_responsive_control('team_member_role_outline_type',[
      'label' => esc_html__('Outline Type'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
         'none' => esc_html__('None'),
         'solid' => esc_html__('Solid'),
         'double' => esc_html__('Double'),
         'dotted' => esc_html__('Dotted'),
         'dashed' => esc_html__('Dashed'),
         'groove' => esc_html__('Groove'),
         'ridge' => esc_html__('Ridge'),
         'inset' => esc_html__('Inset'),
         'outset' => esc_html__('Outset'),
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_role' => 'outline-style:{{VALUE}}',
      ],
   ]);  

   $this->add_responsive_control('team_member_role_outline_width',[
      'label' => esc_html__('Outline Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 10,
         ],
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_role' => 'outline-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_role_outline_type!' => 'none',
      ],
   ]);  

   $this->add_control('team_member_role_outline_color',[
      'label' => esc_html__('Outline Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
          '{{WRAPPER}} .tm_role' => 'outline-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_role_outline_type!' => 'none',
      ],
   ]);  
    
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_role_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_role',
   ]);

   $this->add_responsive_control('team_member_role_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_role' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);
   
   $this->add_control('team_member_role_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_role_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_role' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_role_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_role_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
          '{{WRAPPER}} .tm_role' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_role_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_responsive_control('team_member_role_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_role' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_role_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_role' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_role_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_role',
   ]); 

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_role_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_role',
   ]); 

   $this->end_controls_tab();


   /* Team Member Role Hover Tab */
   
   $this->start_controls_tab('team_member_role_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_control('team_member_role_hover_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
          '{{WRAPPER}} .tm_role:hover' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_role_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_role:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_role_hover_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_role:hover',
   ]);

   $this->add_responsive_control('team_member_role_hover_outline_type',[
      'label' => esc_html__('Outline Type'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
         'none' => esc_html__('None'),
         'solid' => esc_html__('Solid'),
         'double' => esc_html__('Double'),
         'dotted' => esc_html__('Dotted'),
         'dashed' => esc_html__('Dashed'),
         'groove' => esc_html__('Groove'),
         'ridge' => esc_html__('Ridge'),
         'inset' => esc_html__('Inset'),
         'outset' => esc_html__('Outset'),
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_role:hover' => 'outline-style:{{VALUE}}',
      ],
   ]);  

   $this->add_responsive_control('team_member_role_hover_outline_width',[
      'label' => esc_html__('Outline Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 10,
         ],
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_role:hover' => 'outline-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_role_hover_outline_type!' => 'none',
      ],
   ]);  

   $this->add_control('team_member_role_hover_outline_color',[
      'label' => esc_html__('Outline Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
          '{{WRAPPER}} .tm_role:hover' => 'outline-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_role_hover_outline_type!' => 'none',
      ],
   ]);  
    
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_role_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_role:hover',
   ]);

   $this->add_responsive_control('team_member_role_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_role:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);
   
   $this->add_control('team_member_role_hover_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_role_hover_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
          '{{WRAPPER}} .tm_role:hover' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_role_hover_text_stroke_display' => 'yes',
      ],
   ]);
   
   $this->add_control('team_member_role_hover_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
          '{{WRAPPER}} .tm_role:hover' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_role_hover_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_responsive_control('team_member_role_hover_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
          '{{WRAPPER}} .tm_role:hover' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_role_hover_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_role:hover',
   ]); 

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_role_hover_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_role:hover',
   ]); 

   $this->add_responsive_control('team_member_role_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
          'px' => [
            'max' => 3,
            'step' => 0.1,
          ],
      ],
      'selectors' => [
          '{{WRAPPER}} .tm_role:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();


 
   /* Team Member Short Description Style Section*/
      
   $this->start_controls_section('team_member_short_description_style_section',[
      'label' => esc_html__('Team Member Short Description'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
   ]);

   $this->start_controls_tabs('team_member_short_description_style_tabs');

   /* Team Member Short Description Normal Tab */

   $this->start_controls_tab('team_member_short_description_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_control('team_member_short_description_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
         '{{WRAPPER}} .tm_short_description' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_short_description_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_short_description',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_short_description_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_short_description',
      'global' => [
         'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_TEXT,
      ],
   ]);

   $this->add_responsive_control('team_member_short_description_alignment',[
      'label' => esc_html__('Alignment'),
      'type' => \Elementor\Controls_Manager::CHOOSE,
      'options' => [
         'left' => [
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
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_short_description' => 'text-align: {{VALUE}}',
      ],
   ]);

   $this->add_responsive_control('team_member_short_description_outline_type',[
      'label' => esc_html__('Outline Type'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
         'none' => esc_html__('None'),
         'solid' => esc_html__('Solid'),
         'double' => esc_html__('Double'),
         'dotted' => esc_html__('Dotted'),
         'dashed' => esc_html__('Dashed'),
         'groove' => esc_html__('Groove'),
         'ridge' => esc_html__('Ridge'),
         'inset' => esc_html__('Inset'),
         'outset' => esc_html__('Outset'),
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description' => 'outline-style:{{VALUE}}',
      ],
   ]);  

   $this->add_responsive_control('team_member_short_description_outline_width',[
      'label' => esc_html__('Outline Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 10,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description' => 'outline-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_short_description_outline_type!' => 'none',
      ],
   ]);  

   $this->add_control('team_member_short_description_outline_color',[
      'label' => esc_html__('Outline Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description' => 'outline-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_short_description_outline_type!' => 'none',
      ],
   ]);  
   
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_short_description_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_short_description',
   ]);

   $this->add_responsive_control('team_member_short_description_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_short_description' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_control('team_member_short_description_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_short_description_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_short_description_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_short_description_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_short_description_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_responsive_control('team_member_short_description_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_short_description' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_short_description_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_short_description' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_short_description_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_short_description',
   ]); 

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_short_description_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_short_description',
   ]); 

   $this->end_controls_tab();


   /* Team Member Short Description Hover Tab */

   $this->start_controls_tab('team_member_short_description_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_control('team_member_short_description_hover_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [
         '{{WRAPPER}} .tm_short_description:hover' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_short_description_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_short_description:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_short_description_hover_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_short_description:hover',
   ]);

   $this->add_responsive_control('team_member_short_description_hover_outline_type',[
      'label' => esc_html__('Outline Type'),
      'type' => \Elementor\Controls_Manager::SELECT,
      'options' => [
         'none' => esc_html__('None'),
         'solid' => esc_html__('Solid'),
         'double' => esc_html__('Double'),
         'dotted' => esc_html__('Dotted'),
         'dashed' => esc_html__('Dashed'),
         'groove' => esc_html__('Groove'),
         'ridge' => esc_html__('Ridge'),
         'inset' => esc_html__('Inset'),
         'outset' => esc_html__('Outset'),
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description:hover' => 'outline-style:{{VALUE}}',
      ],
   ]);  

   $this->add_responsive_control('team_member_short_description_hover_outline_width',[
      'label' => esc_html__('Outline Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 10,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description:hover' => 'outline-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_short_description_hover_outline_type!' => 'none',
      ],
   ]);  

   $this->add_control('team_member_short_description_hover_outline_color',[
      'label' => esc_html__('Outline Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description:hover' => 'outline-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_short_description_hover_outline_type!' => 'none',
      ],
   ]);  
   
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_short_description_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_short_description:hover',
   ]);

   $this->add_responsive_control('team_member_short_description_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_short_description:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_control('team_member_short_description_hover_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_short_description_hover_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description:hover' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_short_description_hover_text_stroke_display' => 'yes',
      ],
   ]);

   $this->add_responsive_control('team_member_short_description_hover_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_short_description:hover' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_control('team_member_short_description_hover_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_short_description:hover' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_short_description_hover_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_short_description_hover_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_short_description:hover',
   ]); 

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_short_description_hover_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_short_description:hover',
   ]); 

   $this->add_responsive_control('team_member_short_description_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_short_description:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();   


 
   /* Team Member Contact Information Complete Section Style */
      
   $this->start_controls_section('team_member_complete_contact_information_style_section',[
      'label' => esc_html__('Team Member Contact Information Complete Section'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
      'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_contact_information_complete_section_style_tabs');

   /* Team Member Contact Information Complete Section Normal Tab */

   $this->start_controls_tab('team_member_complete_contact_information_section_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_contact_information_section_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_complete_contact_information_section',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_complete_contact_information_section_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_complete_contact_information_section',
   ]);

   $this->add_responsive_control('team_member_complete_contact_information_section_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_complete_contact_information_section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_contact_information_section_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_complete_contact_information_section' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_contact_information_section_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_complete_contact_information_section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->end_controls_tab();


   /* Team Member Contact Information Complete Section Hover Tab */

   $this->start_controls_tab('team_member_complete_contact_information_section_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_contact_information_section_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_complete_contact_information_section:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_complete_contact_information_section_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_complete_contact_information_section:hover',
   ]);

   $this->add_responsive_control('team_member_complete_contact_information_section_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_complete_contact_information_section:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_contact_information_section_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ]
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_complete_contact_information_section:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();  


 
   /* Team Member Contact Information Icons Style Section */
      
   $this->start_controls_section('team_member_contact_information_icons_style_section',[
      'label' => esc_html__('Team Member Contact Information Icons'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_contact_information_icons_style_tabs');

   /* Team Member Contact Information Icon Normal Tab */

   $this->start_controls_tab('team_member_contact_information_icon_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_control('team_member_contact_information_color',[
      'label' => esc_html__('Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_icon' => 'color:{{VALUE}}',
      ],
   ]);  

   $this->add_control('team_member_contact_information_individual_icon_color',[
      'label' => esc_html__('Individual Icon Color?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);
   
   $this->add_control('team_member_email_icon_color',[
      'label' => esc_html__('Email Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
            '{{WRAPPER}} .tm_email' => 'color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_individual_icon_color' => 'yes',
      ],
   ]);  
         
   $this->add_control('team_member_phone_number_icon_color',[
      'label' => esc_html__('Phone Number Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
            '{{WRAPPER}} .tm_phone_number' => 'color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_individual_icon_color' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_whatsapp_number_icon_color',[
      'label' => esc_html__('Whatsapp Number Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
            '{{WRAPPER}} .tm_whatsapp_number' => 'color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_individual_icon_color' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_address_icon_color',[
      'label' => esc_html__('Address Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
            '{{WRAPPER}} .tm_address' => 'color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_individual_icon_color' => 'yes',
      ],
   ]); 
      
   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_contact_information_icon_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_contact_information_icon i',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_responsive_control('team_member_contact_information_icon_background_width',[
      'label' => esc_html__('Background Width'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','%'],
      'range' => [
            'px' => [
            'min' => 0,
            'max' => 100,
            ]
      ],
      'selectors' => [
            '{{WRAPPER}} .tm_contact_information_icon i' => 'width:{{SIZE}}{{UNIT}}',
      ],
   ]); 
      
   $this->add_responsive_control('team_member_contact_information_icon_size',[
      'label' => esc_html__('Size'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px','%'],
      'range' => [
            'px' => [
            'min' => 0,
            'max' => 40,
            ],
      ],
      'selectors' => [
            '{{WRAPPER}} .tm_contact_information_icon i' => 'font-size:{{SIZE}}{{UNIT}}',
      ],
   ]);
      
   $this->add_responsive_control('team_member_contact_information_icon_alignment',[
      'label' => esc_html__('Alignment'),
      'type' => \Elementor\Controls_Manager::CHOOSE,
      'options' => [
         'left' => [
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
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_contact_information_icon i' => 'text-align: {{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_contact_information_icon_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_contact_information_icon i',
   ]);

   $this->add_responsive_control('team_member_contact_information_icon_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_contact_information_icon i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_contact_information_icon_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_contact_information_icon i' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_contact_information_icon_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
            '{{WRAPPER}} .tm_contact_information_icon i' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_contact_information_icon_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_contact_information_icon i',
   ]);

   $this->end_controls_tab();


   /* Team Member Contact Information Icon Hover Tab */

   $this->start_controls_tab('team_member_contact_information_icon_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_control('team_member_contact_information_hover_color',[
      'label' => esc_html__('Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_icon:hover' => 'color:{{VALUE}}',
      ],
   ]);  

   $this->add_control('team_member_contact_information_individual_icon_hover_color',[
      'label' => esc_html__('Individual Icon Color?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_control('team_member_email_icon_hover_color',[
      'label' => esc_html__('Email Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_email:hover' => 'color:{{VALUE}}',
      ],
      'condition' => [
            'team_member_contact_information_individual_icon_hover_color' => 'yes',
      ],
   ]);  
      
   $this->add_control('team_member_phone_number_icon_hover_color',[
      'label' => esc_html__('Phone Number Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_phone_number:hover' => 'color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_individual_icon_hover_color' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_whatsapp_number_icon_hover_color',[
      'label' => esc_html__('Whatsapp Number Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_whatsapp_number:hover' => 'color:{{VALUE}}',
      ],
   'condition' => [
         'team_member_contact_information_individual_icon_hover_color' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_address_icon_hover_color',[
      'label' => esc_html__('Address Icon Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_address:hover' => 'color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_individual_icon_hover_color' => 'yes',
      ],
   ]); 
   
   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_contact_information_icon_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_contact_information_icon i:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_contact_information_icon_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_contact_information_icon i:hover',
   ]);

   $this->add_responsive_control('team_member_contact_information_icon_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_contact_information_icon i:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(),[
      'name' => 'team_member_contact_information_icon_hover_box_shadow',
      'label' => esc_html__('Box Shadow'),
      'selector' => '{{WRAPPER}} .tm_contact_information_icon i:hover',
   ]);

   $this->add_responsive_control('team_member_contact_information_icon_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_contact_information_icon i:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();   


 
   /* Team Member Contact Information Text Style Section*/
      
   $this->start_controls_section('team_member_contact_information_text_style_section',[
      'label' => esc_html__('Team Member Contact Information Text'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_contact_information_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_contact_information_text_style_tabs');

   /* Team Member Contact Information Text Normal Tab */

   $this->start_controls_tab('team_member_contact_information_text_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_control('team_member_contact_information_text_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_text a' => 'color:{{VALUE}}',
      ],
   ]);  

   $this->add_group_control(\Elementor\Group_Control_Typography::get_type(),[
      'name' => 'team_member_contact_information_text_typography',
      'label' => esc_html__('Typography'),
      'selector' => '{{WRAPPER}} .tm_contact_information_text a',
      'exclude' => ['word_spacing'],
      'global' => [
         'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_TEXT,
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_contact_information_text_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_contact_information_text a',
   ]);
   
   $this->add_control('team_member_contact_information_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_contact_information_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_text a' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_contact_information_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_contact_information_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_text a' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->end_controls_tab();


   /* Team Member Contact Information Text Hover Tab */

   $this->start_controls_tab('team_member_contact_information_text_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_control('team_member_contact_information_hover_text_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_text a:hover' => 'color:{{VALUE}}',
      ],
   ]);  

   $this->add_group_control(\Elementor\Group_Control_Text_Shadow::get_type(),[
      'name' => 'team_member_contact_information_text_hover_shadow',
      'label' => esc_html__('Text Shadow'),
      'selector' => '{{WRAPPER}} .tm_contact_information_text a:hover',
   ]);
   
   $this->add_control('team_member_contact_information_hover_text_stroke_display',[
      'label' => esc_html__('Text Stroke Enable?'),
      'type' => \Elementor\Controls_Manager::SWITCHER,
      'default' => 'no',
   ]);

   $this->add_responsive_control('team_member_contact_information_hover_text_stroke_width',[
      'label' => esc_html__('Text Stroke'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 4,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_text a:hover' => '-webkit-text-stroke-width:{{SIZE}}{{UNIT}}',
      ],
      'condition' => [
         'team_member_contact_information_hover_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_control('team_member_contact_information_hover_text_stroke_color',[
      'label' => esc_html__('Text Stroke Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_contact_information_text a:hover' => '-webkit-text-stroke-color:{{VALUE}}',
      ],
      'condition' => [
         'team_member_contact_information_hover_text_stroke_display' => 'yes',
      ],
   ]);  

   $this->add_responsive_control('team_member_contact_information_hover_text_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_contact_information_text a:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]); 

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();   


 
   /* Team Member Social Profiles Complete Section Style */
      
   $this->start_controls_section('team_member_complete_social_profiles_section_style',[
      'label' => esc_html__('Team Member Social Profiles Complete Section'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_social_profiles_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_complete_social_profiles_section_style_tabs');

   /* Team Member Social Profiles Complete Section Normal Tab */

   $this->start_controls_tab('team_member_complete_social_profiles_section_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_social_profiles_section_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_social_profiles',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_complete_social_profiles_section_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_social_profiles',
   ]);

   $this->add_responsive_control('team_member_complete_social_profiles_section_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_social_profiles_section_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_social_profiles_section_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->end_controls_tab();


   /* Team Member Social Profiles Complete Section Hover Tab */

   $this->start_controls_tab('team_member_complete_social_profiles_section_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_complete_social_profiles_section_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_social_profiles:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_complete_social_profiles_section_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_social_profiles:hover',
   ]);

   $this->add_responsive_control('team_member_complete_social_profiles_section_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_social_profiles_section_hover_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles:hover' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_complete_social_profiles_section_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]); 

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();   


 
   /* Team Member Social Profiles Icon Style Section*/
   
   $this->start_controls_section('team_member_social_profiles_icon_style_section',[
      'label' => esc_html__('Team Member Social Profiles Icon'),
      'tab' => \Elementor\Controls_Manager::TAB_STYLE,
      'condition' => [
         'team_member_social_profiles_display' => 'yes',
      ],
   ]);

   $this->start_controls_tabs('team_member_social_profiles_icon_style_tabs');

   /* Team Member Social Profiles Icon Normal Tab */

   $this->start_controls_tab('team_member_social_profiles_normal_tab',[
      'label' => esc_html__('Normal'),
   ]);

   $this->add_control('team_member_social_profile_icon_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_social_profiles i' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_social_profile_icon_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_social_profiles i',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_responsive_control('team_member_social_profile_icon_size',[
      'label' => esc_html__('Size'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 50,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_social_profiles i' => 'font-size:{{SIZE}}{{UNIT}}',
      ],
      'default' => [
         'unit' => 'px',
         'size' => 20,
      ],
   ]); 

   $this->add_responsive_control('team_member_social_profile_icon_alignment',[
      'label' => esc_html__('Alignment'),
      'type' => \Elementor\Controls_Manager::CHOOSE,
      'options' => [
         'left' => [
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
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles' => 'text-align: {{VALUE}}',
      ],
   ]);
   
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_social_profile_icon_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_social_profiles i',
   ]);

   $this->add_responsive_control('team_member_social_profile_icon_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]); 

   $this->add_responsive_control('team_member_social_profile_icon_margin',[
      'label' => esc_html__('Margin'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles i' => 'margin:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_social_profile_icon_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles i' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->end_controls_tab();


   /* Team Member Social Profiles Icon Hover Tab */

   $this->start_controls_tab('team_member_social_profile_hover_tab',[
      'label' => esc_html__('Hover'),
   ]);

   $this->add_control('team_member_social_profile_icon_hover_color',[
      'label' => esc_html__('Text Color'),
      'type' => \Elementor\Controls_Manager::COLOR,
      'default' => '#474a45',
      'selectors' => [  
         '{{WRAPPER}} .tm_social_profiles i:hover' => 'color:{{VALUE}}',
      ],
   ]);

   $this->add_group_control(\Elementor\Group_Control_Background::get_type(),[
      'name' => 'team_member_social_profile_icon_hover_bakground_color',
      'label' => esc_html__('Background'),
      'selector' => '{{WRAPPER}} .tm_social_profiles i:hover',
      'default' => '#0b1a02',
      'exclude' => ['image'],
   ]);

   $this->add_responsive_control('team_member_social_profile_icon_hover_size',[
      'label' => esc_html__('Size'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'size_units' => ['px'],
      'range' => [
         'px' =>[
            'min' => 0,
            'max' => 50,
         ],
      ],
      'selectors' => [  
         '{{WRAPPER}} .tm_social_profiles i:hover' => 'font-size:{{SIZE}}{{UNIT}}',
      ],
      'default' => [
         'unit' => 'px',
         'size' => 20,
      ],
   ]); 
   
   $this->add_group_control(\Elementor\Group_Control_Border::get_type(),[
      'name' => 'team_member_social_profile_icon_hover_border',
      'label' => esc_html__('Border'),
      'selector' => '{{WRAPPER}} .tm_social_profiles i:hover',
   ]);

   $this->add_responsive_control('team_member_social_profile_icon_hover_border_radius',[
      'label' => esc_html__('Border Radius'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles i:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]); 

   $this->add_responsive_control('team_member_social_profile_icon_hover_padding',[
      'label' => esc_html__('Padding'),
      'type' => \Elementor\Controls_Manager::DIMENSIONS,
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles i:hover' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
      ],
   ]);

   $this->add_responsive_control('team_member_social_profile_icon_hover_transition',[
      'label' => esc_html__('Transition Duration'),
      'type' => \Elementor\Controls_Manager::SLIDER,
      'range' => [
         'px' => [
            'max' => 3,
            'step' => 0.1,
         ],
      ],
      'selectors' => [
         '{{WRAPPER}} .tm_social_profiles i:hover' => 'transition-duration: {{SIZE}}s',
      ],
   ]);

   $this->end_controls_tab();
   $this->end_controls_tabs();
   $this->end_controls_section();

} 


protected function complete_section_starting(){
   $settings = $this->get_settings_for_display();
   ?>
   <div class="elementor-animation-<?php echo wp_kses_data($settings['team_member_complete_section_hover_animation']) ?>">
   <div class="team_member_complete_section">
   <?php
}

protected function complete_section_starting_(){
   ?>
   <div class="elementor-animation-{{settings.team_member_complete_section_hover_animation}}">
   <div class="team_member_complete_section">
   <?php
}


protected function tm_image(){
   $settings = $this->get_settings_for_display();
   $this->add_link_attributes('team_member_image_link',$settings['team_member_image_link']);

   if( 'yes' == $settings['team_member_image_display']){
      ?><div class="team_member_image elementor-animation-<?php echo wp_kses_data($settings['team_member_image_hover_animation']) ?>"><a <?php echo wp_kses_data($this->get_render_attribute_string('team_member_image_link')) ?>> 
      <img src="<?php echo wp_kses_post($settings['team_member_image']['url']) ?>"></a></div>
      <?php
   }
}

protected function tm_image_(){
   ?>
   <# if( 'yes' == settings.team_member_image_display){  #>
   <div class="team_member_image elementor-animation-{{settings.team_member_image_hover_animation}}">
   <a href="{{settings.team_member_image_link.url}}"><img src="{{settings.team_member_image.url}}"></a> 
   </div>
   <# } #>
   <?php
}


protected function tm_video(){
   $settings = $this->get_settings_for_display();
   if( 'yes' == $settings['team_member_enable_video'] ){
   if( 'yes' == $settings['team_member_media_library_display'] ){
   ?>
   <div class="tm_media_library_video"><video controls poster="<?php echo wp_kses_data($settings['team_member_media_library_video_poster']['url'])?>"><source src="<?php echo wp_kses_data($settings['team_member_media_library_video']['url']) ?>"></video></div>   
   <?php 
   } 
   else{
   ?>  
   <div class="tm_youtube_video"><iframe src="https://www.youtube.com/embed/<?php echo wp_kses_data($settings['team_member_youtube_video']) ?>" rel=0></iframe></div>
   <?php
      }
   }
}

protected function tm_video_(){
   ?>
   <# if( 'yes' == settings.team_member_enable_video ){
   if( 'yes' == settings.team_member_media_library_display ){ #>
   <div class="tm_media_library_video"><video controls poster="{{settings.team_member_media_library_video_poster.url}}"><source src="{{settings.team_member_media_library_video.url}}"></video></div>
   <# } 
   else{ #>
   <div class="tm_youtube_video"><iframe src="https://www.youtube.com/embed/{{settings.team_member_youtube_video}}" rel=0></iframe></div>    
   <# } } #>
   <?php
}


protected function tm_icon(){
   $settings = $this->get_settings_for_display();
   $this->add_link_attributes('team_member_icon_link',$settings['team_member_icon_link']);

   if( 'yes' == $settings['team_member_icon_display']){
      ?>
       <a <?php echo wp_kses_data($this->get_render_attribute_string('team_member_icon_link')) ?>><div class="team_member_icon elementor-animation-<?php echo wp_kses_data($settings['team_member_icon_hover_animation']) ?>"><?php \Elementor\Icons_Manager::render_icon ($settings['team_member_icon']) ?></div></a>
      <?php
   }
}

protected function tm_icon_(){
   ?>
   <# if( 'yes' == settings.team_member_icon_display){ #>
   <a href="{{settings.team_member_icon_link.url}}"> 
   <div class="team_member_icon elementor-animation-{{settings.team_member_icon_hover_animation}}">
   <i class="{{settings.team_member_icon.value}}"></i>   
   </div>
   <# } #>
   <?php
}


protected function tm_name(){
   $settings = $this->get_settings_for_display();
   ?>
   <div class="tm_name"><h3><?php echo wp_kses_data($settings['team_member_name']) ?></h3></div>
   <?php
}

protected function tm_name_(){
   ?>
   <div class="tm_name">
   <h3>
   {{settings.team_member_name}}
   </h3>
   </div>   
   <?php
}


protected function tm_role(){
   $settings = $this->get_settings_for_display();
   ?>
   <div class="tm_role"><?php echo wp_kses_data($settings['team_member_role']) ?></div>
   <?php
}

protected function tm_role_(){
   ?>
   <div class="tm_role">
   {{settings.team_member_role}}
   </div>   
   <?php
}


protected function tm_short_description(){
   $settings = $this->get_settings_for_display();
   ?>
   <div class="tm_short_description"><?php echo wp_kses_post($settings['team_member_short_description']) ?></div>
   <?php
}

protected function tm_short_description_(){
   ?>
   <div class="tm_short_description">
   {{{settings.team_member_short_description}}}
   </div>
   <?php
}


protected function start_tm_content_section(){
   ?>
   <div class="tm_content_section">
   <?php  
}


protected function end_tm_content_section(){
   ?>
   </div>
   <?php  
}


protected function tm_contact_information(){
   $settings = $this->get_settings_for_display();

   if( 'yes' == $settings['team_member_contact_information_display'] ){
   ?> <div class="tm_complete_contact_information_section"><span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_email" href="mailto:<?php echo esc_attr($settings['team_member_email']) ?>">
   <?php \Elementor\Icons_Manager::render_icon($settings['team_member_email_icon']); ?> </a></span>
   <span class="tm_contact_information_text tm_email_text">
   <a href="mailto:<?php echo esc_attr($settings['team_member_email']) ?>"> 
   <?php
   echo esc_attr($settings['team_member_email']);
   ?>
   </a>
   </span> 
   <br>
   
   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_phone_number" href="tel:<?php echo wp_kses_data($settings['team_member_phone_number']) ?>">
   <?php \Elementor\Icons_Manager::render_icon($settings['team_member_phone_number_icon']); ?> </a></span>
   <span class="tm_contact_information_text tm_phone_number_text">
   <a href="tel:<?php echo wp_kses_data($settings['team_member_phone_number']) ?>"> 
   <?php
   echo wp_kses_data($settings['team_member_phone_number']);
   ?>
   </a>
   </span> 
   <br>

   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_whatsapp_number" href="https://wa.me/<?php echo wp_kses_data($settings['team_member_whatsapp_number']) ?>" 
      target="<?php if( 'yes' == $settings['team_member_whatsapp_number_link_target']){ echo esc_attr('_blank');  } ?>">
   <?php \Elementor\Icons_Manager::render_icon($settings['team_member_whatsapp_number_icon']); ?> </a></span>
   <span class="tm_contact_information_text tm_whatsapp_number_text">
   <a href="https://wa.me/<?php echo wp_kses_data($settings['team_member_whatsapp_number']) ?>"  target="<?php if( 'yes' == $settings['team_member_whatsapp_number_link_target']){ echo esc_attr('_blank');  } ?>"> 
   <?php
   echo wp_kses_data($settings['team_member_whatsapp_number']);
   ?>
   </a>
   </span> 
   <br>

   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_address" href="https://www.google.com/maps/place/<?php echo wp_kses_data($settings['team_member_address']) ?>" 
   target="<?php if( 'yes' == $settings['team_member_address_link_target']){ echo esc_attr('_blank');  } ?>">
   <?php \Elementor\Icons_Manager::render_icon($settings['team_member_address_icon']); ?> </a></span>
   <span class="tm_contact_information_text tm_address_text">
   <a href="https://www.google.com/maps/place/<?php echo wp_kses_data($settings['team_member_address']) ?>"  target="<?php if( 'yes' == $settings['team_member_address_link_target']){ echo esc_attr('_blank');  } ?>"> 
   <?php
   echo wp_kses_data($settings['team_member_address']);
   ?>
   </a>
   </span>
   </div>
   <?php 
   }
}

protected function tm_contact_information_(){
?>
   <# if( 'yes' == settings.team_member_contact_information_display ){ #>
   <div class="tm_complete_contact_information_section">
   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_email" href="mailto:{{settings.team_member_email}}">
   <i class="{{settings.team_member_email_icon.value}}"></i></a></span>
   <span class="tm_contact_information_text tm_email_text"><a href="mailto:{{settings.team_member_email}}">{{settings.team_member_email}}</a></span> 
   <br>

   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_phone_number" href="tel:{{settings.team_member_phone_number}}">
   <i class="{{settings.team_member_phone_number_icon.value}}"></i></a></span>
   <span class="tm_contact_information_text tm_phone_number_text"><a href="tel:{{settings.team_member_phone_number}}">{{settings.team_member_phone_number}}</a></span>
   <br>

   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_whatsapp_number" href="https://wa.me/{{settings.team_member_whatsapp_number}}">
   <i class="{{settings.team_member_whatsapp_number_icon.value}}"></i></a></span>
   <span class="tm_contact_information_text tm_whatsapp_number_text"><a href="https://wa.me/{{settings.team_member_whatsapp_number}}">{{settings.team_member_whatsapp_number}}</a></span>
   <br>   

   <span class="tm_contact_information_icon_span"><a class="tm_contact_information_icon tm_address" href="https://www.google.com/maps/place/{{settings.team_member_address}}">
   <i class="{{settings.team_member_address_icon.value}}"></i></a></span>
   <span class="tm_contact_information_text tm_address_text"><a href="https://www.google.com/maps/place/{{settings.team_member_address}}">{{settings.team_member_address}}</a></span> 
   </div>   
   <# } #>
<?php
}


protected function tm_social_profiles(){
   $settings = $this->get_settings_for_display();
   if( 'yes' == $settings['team_member_social_profiles_display'] ){
   ?>
   <div class="tm_social_profiles">
   <?php
   foreach($settings['team_member_social_profiles'] as $tm_social_profiles => $tm_social_item){
   if( !empty ($tm_social_item['team_member_social_profile_link']['url'])){

   $link_key = 'team_member_social_profile_link_' . $tm_social_profiles;

   $this->add_link_attributes($link_key,$tm_social_item['team_member_social_profile_link']);
   ?>
   <a <?php $this->print_render_attribute_string($link_key) ?>>

   <i class="<?php echo wp_kses_data($tm_social_item['team_member_social_icon']['value']) ?>"></i></a>
   <?php
   }
   else{
   ?>
   <i class="<?php echo wp_kses_data($tm_social_item['team_member_social_icon']['value']) ?>"></i>
   <?php
      }
   }
   ?>
   </div>
   <?php
   }
} 

protected function tm_social_profiles_(){
   ?>
   <# if( 'yes' == settings.team_member_social_profiles_display ){  #>
   <div class="tm_social_profiles">   
   <# _.each(settings.team_member_social_profiles, function(tm_social_item, tm_social_profiles) { #>
   <a href="{{tm_social_item.team_member_social_profile_link.url}}">
   <i class="{{tm_social_item.team_member_social_icon.value}}"></i>
   </a>
   <# }); #>
   </div> 
   <# } #>
   <?php
} 


protected function complete_section_ending(){
   ?>
   </div>
   </div>
   <?php
} 

protected function complete_section_ending_(){
   ?>
   </div>
   </div>
   <?php
}



protected function render(){

   $settings = $this->get_settings_for_display();

   if('layout-1' == $settings['team_member_complete_section_layouts']){
   $this->complete_section_starting();
   $this->tm_image();
   $this->tm_video();
   $this->tm_icon();
   $this->start_tm_content_section();
   $this->tm_name();
   $this->tm_role();
   $this->tm_short_description();
   $this->end_tm_content_section();
   $this->tm_contact_information();
   $this->tm_social_profiles();
   $this->complete_section_ending();
   }

   if('layout-2' == $settings['team_member_complete_section_layouts']){
   $this->complete_section_starting();
   ?>
   <div class="team_member_inner_complete_section">
   <?php
   $this->tm_image();
   $this->tm_icon();
   $this->start_tm_content_section();
   $this->tm_name();
   $this->tm_role();
   $this->tm_short_description();
   $this->end_tm_content_section();
   $this->tm_contact_information();
   $this->tm_social_profiles();
   ?>
   </div>
   <?php
   $this->complete_section_ending();
   }

   if('layout-3' == $settings['team_member_complete_section_layouts']){
   $this->complete_section_starting();
   ?>
   <div class="tm_social_profiles_layout_3">
   <?php
   $this->tm_social_profiles();
   ?>
   </div> 
   <?php 
   $this->tm_image();
   $this->start_tm_content_section();
   $this->tm_name();
   $this->tm_role();
   $this->tm_short_description();
   $this->end_tm_content_section();
   $this->tm_contact_information();
   $this->complete_section_ending();
   }

   if('layout-4' == $settings['team_member_complete_section_layouts']){
   $this->complete_section_starting();
   ?>
   <div class="elementor-row">
   <div class="tm_first_column">
   <?php
   $this->tm_image();
   $this->tm_icon();
   $this->tm_role();
   ?>
   </div>
   <div class="tm_second_column">
   <?php
   $this->tm_name();
   $this->tm_short_description();
   $this->tm_contact_information();
   $this->tm_social_profiles();
   ?>
   </div>
   </div>

   <div class="tm_row">
   <?php
   $this->tm_image();
   $this->tm_icon();
   $this->start_tm_content_section();
   $this->tm_role();
   $this->tm_name();
   $this->tm_short_description();
   $this->end_tm_content_section();
   $this->tm_contact_information();
   $this->tm_social_profiles();
   ?>
   </div>
   <?php
   $this->complete_section_ending();
   }

   if('layout-5' == $settings['team_member_complete_section_layouts']){
   $this->complete_section_starting();
   ?>
   <div class="elementor-row">
   <div class="tm_first_column">
   <?php
   $this->tm_name();
   $this->tm_short_description();
   $this->tm_contact_information();
   $this->tm_social_profiles();
   ?> 
   </div>
   <div class="tm_second_column">
   <?php
   $this->tm_image();
   $this->tm_icon();
   $this->tm_role();
   ?>
   </div>
   </div>

   <div class="tm_row">
   <?php
   $this->tm_image();
   $this->tm_icon();
   $this->start_tm_content_section();
   $this->tm_role();
   $this->tm_name();
   $this->tm_short_description();
   $this->end_tm_content_section();
   $this->tm_contact_information();
   $this->tm_social_profiles();
   ?>
   </div>
   <?php
   $this->complete_section_ending();
   } 

   if('layout-6' == $settings['team_member_complete_section_layouts']){
   $this->complete_section_starting();
   ?>
   <div class="elementor-row">
   <div class="tm_first_column">
   <?php
   $this->tm_image();
   $this->tm_name();
   $this->tm_role();
   ?>
   </div>
   <div class="tm_second_column">
   <?php
   $this->tm_short_description();
   $this->tm_contact_information();
   ?>
   </div>
   </div>

   <div class="tm_row">
   <?php 
   $this->tm_image();
   $this->start_tm_content_section();
   $this->tm_role();
   $this->tm_name();
   $this->tm_short_description();
   $this->end_tm_content_section();
   $this->tm_contact_information();
   ?>
   </div>
   <?php
   $this->tm_social_profiles();
   $this->complete_section_ending();
   }
}


 
protected function content_template(){
   ?>
   <# if('layout-1' == settings.team_member_complete_section_layouts){ #>
   <?php
   $this->complete_section_starting_();
   $this->tm_image_();
   $this->tm_video_();
   $this->tm_icon_();
   $this->start_tm_content_section();
   $this->tm_name_();
   $this->tm_role_();
   $this->tm_short_description_();
   $this->end_tm_content_section();
   $this->tm_contact_information_();
   $this->tm_social_profiles_();
   $this->complete_section_ending_();
   ?>
   <# }

   if('layout-2' == settings.team_member_complete_section_layouts){ #>
   <?php 
   $this->complete_section_starting_();
   ?>
   <div class="team_member_inner_complete_section"> 
   <?php
   $this->tm_image_();
   $this->tm_icon_();
   $this->start_tm_content_section();
   $this->tm_name_();
   $this->tm_role_();
   $this->tm_short_description_();
   $this->end_tm_content_section();
   $this->tm_contact_information_();
   $this->tm_social_profiles_();
   ?>
   </div>
   <?php
   $this->complete_section_ending_();
   ?>
   <# } 

   if('layout-3' == settings.team_member_complete_section_layouts){ #>
   <?php
   $this->complete_section_starting_();
   ?>
   <div class="tm_social_profiles_layout_3">
   <?php
   $this->tm_social_profiles_();
   ?>
   </div> 
   <?php 
   $this->tm_image_();
   $this->tm_icon_();
   $this->start_tm_content_section();
   $this->tm_name_();
   $this->tm_role_();
   $this->tm_short_description_();
   $this->end_tm_content_section();
   $this->tm_contact_information_();
   $this->complete_section_ending_();
   ?>
   <# }
   
   if('layout-4' == settings.team_member_complete_section_layouts){ #>
   <?php
   $this->complete_section_starting_();
   ?>
   <div class="elementor-row">
   <div class="elementor-column elementor-col-50 tm_first_column">
   <div>
   <?php
   $this->tm_image_();
   $this->tm_icon_();
   $this->tm_role_();
   ?>
   </div>
   </div>
   <div class="elementor-column elementor-col-50 tm_second_column">
   <?php
   $this->tm_name_();
   $this->tm_short_description_();
   $this->tm_contact_information_();
   $this->tm_social_profiles_();
   ?>
   </div>
   </div>
   <?php
   $this->complete_section_ending_();
   ?>
   <# }

   if('layout-5' == settings.team_member_complete_section_layouts){ #>
   <?php
   $this->complete_section_starting_();
   ?>
   <div class="elementor-row">
   <div class="elementor-column elementor-col-50 tm_first_column">
   <?php
   $this->tm_name_();
   $this->tm_short_description_();
   $this->tm_contact_information_();
   $this->tm_social_profiles_();
   ?> 
   </div>
   <div class="elementor-column elementor-col-50 tm_second_column">
   <?php
   $this->tm_image_();
   $this->tm_icon_();
   $this->tm_role_();
   ?>
   </div>
   </div>
   <?php
   $this->complete_section_ending_();
   ?>
   <# }
   
   if('layout-6' == settings.team_member_complete_section_layouts){ #>
   <?php
   $this->complete_section_starting_();
   ?>
   <div class="elementor-row">
   <div class="elementor-column elementor-col-50 tm_first_column layout-6-columns">
   <?php
   $this->tm_image_();
   $this->tm_name_();
   $this->tm_role_();
   ?>
   </div>
   <div class="elementor-column elementor-col-50 tm_second_column layout-6-columns">
   <?php
   $this->tm_icon_();
   $this->tm_short_description_();
   $this->tm_contact_information_();
   ?>
   </div>
   </div>
   <?php
   $this->tm_social_profiles_();
   $this->complete_section_ending_();
   ?>
   <# } #>
   <?php
   }
}
?>