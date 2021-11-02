<?php

class Hero_Section extends \Elementor\Widget_Base {

	public function get_name() {
		return 'herosection';
	}

	public function get_title() {
		return __( 'Hero Section', 'antonio-flores-widgets' );
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
			'hero_image',
			[
				'label' => __( 'Hero Background Image', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				]
			]
		);

		$this->add_control(
			'primary_button',
			[
				'label' => __( 'Primary Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'primary_button_text',
			[
				'label' => __( 'Text', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'primary_button_url',
			[
				'label' => __( 'Url', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'secondary_button',
			[
				'label' => __( 'Secondary Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'secondary_button_text',
			[
				'label' => __( 'Text', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'secondary_button_url',
			[
				'label' => __( 'Url', 'antonio-flores-widgets' ),
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
		$primaryButtonText = $settings['primary_button_text'];
		$primaryButtonUrl = $settings['primary_button_url'];
		$secondaryButtonText = $settings['primary_button_text'];
		$secondaryButtonUrl = $settings['primary_button_url'];

		include 'views/Hero-Section.view.php';

	}

}