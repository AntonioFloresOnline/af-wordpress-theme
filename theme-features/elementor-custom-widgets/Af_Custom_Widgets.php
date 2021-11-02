<?php

function af_add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'antonio-flores-widgets',
		[
			'title' => __( 'Antonio Flores Widgets', 'antonio-flores-widgets' ),
			'icon' => 'fa fa-plug',
		]
	);

}

add_action( 'elementor/elements/categories_registered', 'af_add_elementor_widget_categories' );

class Af_Custom_Widgets {

    protected static $instance = null;

    public static function get_instance() {

        if ( ! isset( static::$instance ) ) {
            static::$instance = new static;
        }

        return static::$instance;
	}

	protected function __construct() {

		require_once('Widgets/Hero-Section.php');
		require_once('Widgets/Slideshows-Section.php');
		require_once('Widgets/Plans-Section.php');
		require_once('Widgets/Share-The-Passion-Sections.php');
		require_once('Widgets/News-Letter-Section.php');
		require_once('Widgets/Sub-Hero-Section.php');
		
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
	}

	public function register_widgets() {
		
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Hero_Section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Slideshow_Section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Plans_Section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Share_The_Passion_Section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new News_Letter_Section() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Sub_Hero_Section() );

	}

}

add_action( 'init', 'af_custom_widgets_init' );

function af_custom_widgets_init() {
	Af_Custom_Widgets::get_instance();
}