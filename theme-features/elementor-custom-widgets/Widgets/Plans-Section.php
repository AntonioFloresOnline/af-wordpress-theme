<?php

class Plans_Section extends \Elementor\Widget_Base {

	public function get_name() {
		return 'planssection';
	}

	public function get_title() {
		return __( 'Plans Section', 'antonio-flores-widgets' );
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
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Section Title', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		// Plans Repeater
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'plan_name', [
				'label' => __( 'Name of the Plan', 'antonio-flores-theme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( '' , 'plugin-domain' ),
				'placeholder' => __( '', 'antonio-flores-widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'list_of_services', [
				'label' => __( 'List of Services', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => __( 'List of Services' , 'plugin-domain' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'view_plan_button',
			[
				'label' => __( 'View Plan Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$repeater->add_control(
			'plan_button_text',
			[
				'label' => __( 'Text', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);

		$repeater->add_control(
			'plan_button_url',
			[
				'label' => __( 'Url', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
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
						'plan_name' => __( 'Plan Name', 'antonio-flores-theme' ),
						'list_of_services' => __( '', 'antonio-flores-theme' ),
					],
				],
				'title_field' => '{{{ plan_name }}}',
			]
		);
		// End Plans Repeater

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$title = $settings['title'];
		$plans = $settings['list']; 

		function show_border($listIndex) {
			if ($listIndex == 0) {
			  echo 'border__left';
			} elseif ($listIndex == 1) {
				echo 'border__center';
			} elseif ($listIndex == 2) {
				echo 'border__right';
			}
		} 

		include 'views/Plans-Section.view.php';

	}

}