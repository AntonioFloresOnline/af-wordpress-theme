<?php

class Share_The_Passion_Section extends \Elementor\Widget_Base {

	public function get_name() {
		return 'sharethepassionsection';
	}

	public function get_title() {
		return __( 'Share The Passion Section', 'antonio-flores-widgets' );
	}

	public function get_icon() {
		return 'fa fa-cube';
	}

	public function get_categories() {
		return [ 'antonio-flores-widgets' ];
	}


	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'antonio-flores-widgets' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Title', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Hero Section Title', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' => __( 'Subtitle', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Hero Section Sub Title', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'button_text',
			[
				'label' => __( 'CTA Text', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'button_url',
			[
				'label' => __( 'CTA Url', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'antonio-flores-widgets' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$title = $settings['title'];
		$subtitle = $settings['subtitle'];
		$buttonText = $settings['button_text'];
		$buttonUrl = $settings['button_url'];

		include 'views/Share-The-Passion-Section.view.php';

	}

}