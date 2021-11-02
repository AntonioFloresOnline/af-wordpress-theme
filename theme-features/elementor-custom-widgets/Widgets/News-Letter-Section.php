<?php

class News_Letter_Section extends \Elementor\Widget_Base {

	public function get_name() {
		return 'newslettersection';
	}

	public function get_title() {
		return __( 'News Letter Section', 'antonio-flores-widgets' );
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

		$this->add_control(
			'promo_text',
			[
				'label' => __( 'Promotion Text', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Section Title', 'antonio-flores-widgets' ),
				'default' => __( '', 'antonio-flores-widgets' ),
			]
		);
		
		$this->add_control(
			'button_text',
			[
				'label' => __( 'Button Text', 'antonio-flores-widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => __( 'Enter the content', 'antonio-flores-widgets' ),
				'default' => __( 'Lorem ipsum dolor site sammet', 'antonio-flores-widgets' ),
			]
		);
		
		$this->add_control(
			'spam_message',
			[
				'label' => __( 'Spam Message', 'antonio-flores-widgets' ),
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
		$promoText = $settings['promo_text'];
		$buttonText = $settings['button_text'];
		$spamMessage = $settings['spam_message'];

		include 'views/News-Letter-Section.view.php';
		
		add_action('wp_footer', function(){
			echo "<script src='" . get_stylesheet_directory_uri() 
				. '/assets/js/eWidgetNewsLetters.js' . "'></script>";
		});

	}

}