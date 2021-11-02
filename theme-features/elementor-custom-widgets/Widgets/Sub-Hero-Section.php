<?php

class Sub_Hero_Section extends \Elementor\Widget_Base {

	public function get_name() {
		return 'subherosection';
	}

	public function get_title() {
		return __( 'Sub Hero Section', 'antonio-flores-widgets' );
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
			'left_block',
			[
				'label' => __( 'Left Side Text Block', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'right_block1',
			[
				'label' => __( 'Right Side Text Block 1', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'right_block1',
			[
				'label' => __( 'Right Side Text Block 1', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$this->add_control(
			'right_block2',
			[
				'label' => __( 'Right Side Text Block 2', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$leftTextBlock = $settings['left_block'];
		$rightTextBlock1 = $settings['right_block1'];
		$rightTextBlock2 = $settings['right_block2'];

		include 'views/Sub-Hero-Section.view.php';

	}

}