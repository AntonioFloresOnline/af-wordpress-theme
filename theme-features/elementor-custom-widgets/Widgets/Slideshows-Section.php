<?php

class Slideshow_Section extends \Elementor\Widget_Base {

	public function get_name() {
		return 'slideshowsection';
	}

	public function get_title() {
		return __( 'Slideshow Section', 'antonio-flores-widgets' );
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

		// Slides Repeater
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'top_section',
			[
				'label' => __( 'Top Section', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
			]
		);

		$repeater->add_control(
			'top_title', [
				'label' => __( 'Title', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'top_sub_title', [
				'label' => __( 'Sub Title', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bottom_section',
			[
				'label' => __( 'Bottom Section', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'bottom_title', [
				'label' => __( 'Title', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'bottom_sub_title', [
				'label' => __( 'Sub Title', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'cta_section',
			[
				'label' => __( 'CTA', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'cta_text', [
				'label' => __( 'Text', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'cta_url', [
				'label' => __( 'Url', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'slide_section',
			[
				'label' => __( 'Slide Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'slide_image',
			[
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				]
			]
		);

		$this->add_control(
			'list',
			[
				'label' => __( 'List', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'plan_name' => __( 'Slide Title', 'antonio-flores-theme' ),
						'list_of_services' => __( '', 'antonio-flores-theme' ),
					],
				],
				'title_field' => '{{{ top_title }}}',
			]
		);
		// End Slides Repeater

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$slides = $settings['list']; 

		function active_slide($slidesIndex) {
			if ($slidesIndex == 0) {
				echo 'active';
			}
		}

		include 'views/Slideshow-Section.view.php';

	}

}