<?php
/**
 * Customizer Master Loader
 *
 * @package NexBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once NEXBLOCKS_DIR . '/inc/customizer/class-sanitize.php';
require_once NEXBLOCKS_DIR . '/inc/customizer/controls/class-control-image-radio.php';
require_once NEXBLOCKS_DIR . '/inc/customizer/controls/class-control-toggle.php';
require_once NEXBLOCKS_DIR . '/inc/customizer/controls/class-control-separator.php';

/**
 * Class NexBlocks_Customizer
 */
class NexBlocks_Customizer {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'customize_register',        array( $this, 'register' ) );
		add_action( 'customize_preview_init',    array( $this, 'enqueue_preview_js' ) );
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ) );
	}

	/**
	 * Register customizer panels, sections, settings, and controls.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	public function register( $wp_customize ) {
		$this->register_panels( $wp_customize );
		$this->register_header_options( $wp_customize );
		$this->register_footer_options( $wp_customize );
		$this->register_color_options( $wp_customize );
		$this->register_typography_options( $wp_customize );
		$this->register_layout_options( $wp_customize );
	}

	/**
	 * Register top-level panels.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	private function register_panels( $wp_customize ) {
		$panels = array(
			'nexblocks_general'    => array(
				'title'    => esc_html__( 'General Settings', 'nexblocks' ),
				'priority' => 10,
			),
			'nexblocks_header'     => array(
				'title'    => esc_html__( 'Header', 'nexblocks' ),
				'priority' => 20,
			),
			'nexblocks_footer'     => array(
				'title'    => esc_html__( 'Footer', 'nexblocks' ),
				'priority' => 30,
			),
			'nexblocks_colors'     => array(
				'title'    => esc_html__( 'Colors', 'nexblocks' ),
				'priority' => 40,
			),
			'nexblocks_typography' => array(
				'title'    => esc_html__( 'Typography', 'nexblocks' ),
				'priority' => 50,
			),
			'nexblocks_blog'       => array(
				'title'    => esc_html__( 'Blog', 'nexblocks' ),
				'priority' => 60,
			),
		);

		foreach ( $panels as $id => $args ) {
			$wp_customize->add_panel( $id, $args );
		}
	}

	/**
	 * Header customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	private function register_header_options( $wp_customize ) {
		$wp_customize->add_section(
			'nexblocks_header_layout',
			array(
				'title'    => esc_html__( 'Header Layout', 'nexblocks' ),
				'panel'    => 'nexblocks_header',
				'priority' => 10,
			)
		);

		// Active header setting.
		$wp_customize->add_setting(
			'active_header',
			array(
				'default'           => 'header-1',
				'sanitize_callback' => 'sanitize_key',
				'transport'         => 'refresh',
			)
		);

		// Build choices from available headers.
		$headers_dir = NEXBLOCKS_DIR . '/template-parts/headers/';
		$choices     = array();
		if ( is_dir( $headers_dir ) ) {
			$files = glob( $headers_dir . '*.php' );
			if ( $files ) {
				foreach ( $files as $file ) {
					$slug             = sanitize_key( basename( $file, '.php' ) );
					$thumb            = get_theme_file_uri( 'assets/images/pattern-thumbnails/' . $slug . '.jpg' );
					$choices[ $slug ] = array(
						'label' => ucwords( str_replace( '-', ' ', $slug ) ),
						'image' => $thumb,
					);
				}
			}
		}

		if ( empty( $choices ) ) {
			$choices['header-1'] = array(
				'label' => esc_html__( 'Header 1', 'nexblocks' ),
				'image' => '',
			);
		}

		$wp_customize->add_control(
			new NexBlocks_Control_Image_Radio(
				$wp_customize,
				'active_header',
				array(
					'label'    => esc_html__( 'Select Header', 'nexblocks' ),
					'section'  => 'nexblocks_header_layout',
					'choices'  => $choices,
					'priority' => 10,
				)
			)
		);

		// Sticky header toggle.
		$wp_customize->add_setting(
			'sticky_header',
			array(
				'default'           => true,
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'checkbox' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			new NexBlocks_Control_Toggle(
				$wp_customize,
				'sticky_header',
				array(
					'label'   => esc_html__( 'Sticky Header', 'nexblocks' ),
					'section' => 'nexblocks_header_layout',
				)
			)
		);

		// Transparent header toggle.
		$wp_customize->add_setting(
			'transparent_header',
			array(
				'default'           => false,
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'checkbox' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			new NexBlocks_Control_Toggle(
				$wp_customize,
				'transparent_header',
				array(
					'label'   => esc_html__( 'Transparent Header (Front Page)', 'nexblocks' ),
					'section' => 'nexblocks_header_layout',
				)
			)
		);
	}

	/**
	 * Footer customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	private function register_footer_options( $wp_customize ) {
		$wp_customize->add_section(
			'nexblocks_footer_layout',
			array(
				'title'    => esc_html__( 'Footer Layout', 'nexblocks' ),
				'panel'    => 'nexblocks_footer',
				'priority' => 10,
			)
		);

		$wp_customize->add_setting(
			'active_footer',
			array(
				'default'           => 'footer-1',
				'sanitize_callback' => 'sanitize_key',
				'transport'         => 'refresh',
			)
		);

		$footers_dir = NEXBLOCKS_DIR . '/template-parts/footers/';
		$choices     = array();
		if ( is_dir( $footers_dir ) ) {
			$files = glob( $footers_dir . '*.php' );
			if ( $files ) {
				foreach ( $files as $file ) {
					$slug             = sanitize_key( basename( $file, '.php' ) );
					$thumb            = get_theme_file_uri( 'assets/images/pattern-thumbnails/' . $slug . '.jpg' );
					$choices[ $slug ] = array(
						'label' => ucwords( str_replace( '-', ' ', $slug ) ),
						'image' => $thumb,
					);
				}
			}
		}

		if ( empty( $choices ) ) {
			$choices['footer-1'] = array(
				'label' => esc_html__( 'Footer 1', 'nexblocks' ),
				'image' => '',
			);
		}

		$wp_customize->add_control(
			new NexBlocks_Control_Image_Radio(
				$wp_customize,
				'active_footer',
				array(
					'label'    => esc_html__( 'Select Footer', 'nexblocks' ),
					'section'  => 'nexblocks_footer_layout',
					'choices'  => $choices,
					'priority' => 10,
				)
			)
		);

		// Footer copyright text.
		$wp_customize->add_setting(
			'footer_copyright',
			array(
				'default'           => '',
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'html' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'footer_copyright',
			array(
				'type'    => 'textarea',
				'label'   => esc_html__( 'Copyright Text', 'nexblocks' ),
				'section' => 'nexblocks_footer_layout',
			)
		);
	}

	/**
	 * Color customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	private function register_color_options( $wp_customize ) {
		$wp_customize->add_section(
			'nexblocks_colors_global',
			array(
				'title'    => esc_html__( 'Global Colors', 'nexblocks' ),
				'panel'    => 'nexblocks_colors',
				'priority' => 10,
			)
		);

		$colors = array(
			'color_primary'   => array( 'label' => esc_html__( 'Primary Color',   'nexblocks' ), 'default' => '#2563eb' ),
			'color_secondary' => array( 'label' => esc_html__( 'Secondary Color', 'nexblocks' ), 'default' => '#7c3aed' ),
			'color_accent'    => array( 'label' => esc_html__( 'Accent Color',    'nexblocks' ), 'default' => '#f59e0b' ),
			'color_text'      => array( 'label' => esc_html__( 'Text Color',      'nexblocks' ), 'default' => '#1e293b' ),
			'color_heading'   => array( 'label' => esc_html__( 'Heading Color',   'nexblocks' ), 'default' => '#0f172a' ),
			'color_bg'        => array( 'label' => esc_html__( 'Background',      'nexblocks' ), 'default' => '#ffffff' ),
		);

		foreach ( $colors as $key => $data ) {
			$wp_customize->add_setting(
				$key,
				array(
					'default'           => $data['default'],
					'sanitize_callback' => array( 'NexBlocks_Sanitize', 'hex_color' ),
					'transport'         => 'postMessage',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					$key,
					array(
						'label'   => $data['label'],
						'section' => 'nexblocks_colors_global',
					)
				)
			);
		}
	}

	/**
	 * Typography customizer options.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	private function register_typography_options( $wp_customize ) {
		$wp_customize->add_section(
			'nexblocks_typography_body',
			array(
				'title'    => esc_html__( 'Typography', 'nexblocks' ),
				'panel'    => 'nexblocks_typography',
				'priority' => 10,
			)
		);

		$font_choices = array(
			'Inter'          => 'Inter',
			'Roboto'         => 'Roboto',
			'Open Sans'      => 'Open Sans',
			'Lato'           => 'Lato',
			'Montserrat'     => 'Montserrat',
			'Poppins'        => 'Poppins',
			'Nunito'         => 'Nunito',
			'Source Sans 3'  => 'Source Sans 3',
			'Raleway'        => 'Raleway',
			'Playfair Display' => 'Playfair Display',
		);

		$wp_customize->add_setting(
			'font_body',
			array(
				'default'           => 'Inter',
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'text' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'font_body',
			array(
				'type'    => 'select',
				'label'   => esc_html__( 'Body Font', 'nexblocks' ),
				'section' => 'nexblocks_typography_body',
				'choices' => $font_choices,
			)
		);

		$wp_customize->add_setting(
			'font_heading',
			array(
				'default'           => 'Inter',
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'text' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'font_heading',
			array(
				'type'    => 'select',
				'label'   => esc_html__( 'Heading Font', 'nexblocks' ),
				'section' => 'nexblocks_typography_body',
				'choices' => $font_choices,
			)
		);

		$wp_customize->add_setting(
			'font_size_base',
			array(
				'default'           => '16',
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'positive_int' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'font_size_base',
			array(
				'type'        => 'number',
				'label'       => esc_html__( 'Base Font Size (px)', 'nexblocks' ),
				'section'     => 'nexblocks_typography_body',
				'input_attrs' => array( 'min' => 12, 'max' => 24, 'step' => 1 ),
			)
		);
	}

	/**
	 * Layout / sidebar options.
	 *
	 * @param WP_Customize_Manager $wp_customize Manager instance.
	 */
	private function register_layout_options( $wp_customize ) {
		$wp_customize->add_section(
			'nexblocks_layout',
			array(
				'title'    => esc_html__( 'Layout', 'nexblocks' ),
				'panel'    => 'nexblocks_general',
				'priority' => 10,
			)
		);

		$wp_customize->add_setting(
			'sidebar_position',
			array(
				'default'           => 'right',
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'select' ),
				'transport'         => 'refresh',
			)
		);

		$wp_customize->add_control(
			'sidebar_position',
			array(
				'type'    => 'radio',
				'label'   => esc_html__( 'Sidebar Position', 'nexblocks' ),
				'section' => 'nexblocks_layout',
				'choices' => array(
					'right' => esc_html__( 'Right', 'nexblocks' ),
					'left'  => esc_html__( 'Left',  'nexblocks' ),
					'none'  => esc_html__( 'None',  'nexblocks' ),
				),
			)
		);

		$wp_customize->add_setting(
			'container_width',
			array(
				'default'           => '1200',
				'sanitize_callback' => array( 'NexBlocks_Sanitize', 'positive_int' ),
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'container_width',
			array(
				'type'        => 'number',
				'label'       => esc_html__( 'Container Width (px)', 'nexblocks' ),
				'section'     => 'nexblocks_layout',
				'input_attrs' => array( 'min' => 960, 'max' => 1920, 'step' => 10 ),
			)
		);
	}

	/**
	 * Enqueue customizer preview JS.
	 */
	public function enqueue_preview_js() {
		wp_enqueue_script(
			'nexblocks-customizer-preview',
			get_theme_file_uri( 'assets/js/customizer-preview.js' ),
			array( 'customize-preview' ),
			NEXBLOCKS_VERSION,
			true
		);
	}

	/**
	 * Enqueue customizer controls scripts.
	 */
	public function enqueue_control_scripts() {
		wp_enqueue_style(
			'nexblocks-customizer-controls',
			get_theme_file_uri( 'assets/css/customizer-controls.css' ),
			array(),
			NEXBLOCKS_VERSION
		);
	}
}

new NexBlocks_Customizer();
