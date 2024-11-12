<?php
/**
 * Elementor Compatibility File
 *
 * @package Cosme
 */

namespace Cosme\Elementor;

use Elementor\Plugin;

class Elementor {

    private static $_instance = null;

    public function __construct() {

        // Init
        add_action( 'customize_save_after', array( $this, 'elementor_theme_containers' ) );
        add_action( 'customize_save_after', array( $this, 'elementor_add_theme_colors' ) );

        // Extend motion effects
        add_filter( 'elementor/controls/animations/additional_animations', array( $this, 'elementor_extend_motion_effects' ) );

    }

    public function elementor_theme_containers() {

        $kit = \Elementor\Plugin::$instance->kits_manager->get_active_kit();
        $width = get_theme_mod( 'cosme_container_width', 1170 ) - 10;
        $settings = $kit->get_settings();

        if( isset( $settings['container_width']['size'] ) && $settings['container_width']['size'] == $width ) return;
        $kit->update_settings( [
            'key' => 'updated',
            'container_width' => array(
                'size' => $width,
            )
        ]);

        Plugin::instance()->files_manager->clear_cache();

    }

    /**
	 * Elementor add theme colors
	 */
	public function elementor_add_theme_colors($return_data = false) {

        $colors = array();
        $clear_cache = false;

        $kit = Plugin::$instance->kits_manager->get_current_settings();

        if( isset( $kit['system_colors'] ) ){

            $colors[] = array(
                '_id' => "primary",
                'title' => __( 'Primary', 'cosme' ),
                'color' => get_theme_mod( 'cosme_website_primary_color', '#4E7661' )
            );

            $colors[] = array(
                '_id' => "secondary",
                'title' => __( 'Secondary', 'cosme' ),
                'color' => get_theme_mod( 'cosme_website_secondary_color', '#224229' )
            );

            $colors[] = array(
                '_id' => "text",
                'title' => __( 'Text', 'cosme' ),
                'color' => get_theme_mod( 'cosme_website_text_color', '#333333' )
            );

            $colors[] = array(
                '_id' => "accent",
                'title' => __( 'Accent', 'cosme' ),
                'color' => get_theme_mod( 'cosme_website_accent_color', '#000000' )
            );

            $clear_cache = true;
        }

        Plugin::$instance->kits_manager->update_kit_settings_based_on_option( 'system_colors', $colors );

        // Refresh cache.
        // If the palette was updated in the customizer then we need to clear all the css.
        if( $clear_cache )
        Plugin::instance()->files_manager->clear_cache();

    }

    public function elementor_extend_motion_effects(){
        $additional_animations[ 'General' ] = array(
            'fade-in-up-small'      => esc_html__( 'Fade In Up Small', 'cosme' ),
            'fade-in-down-small'    => esc_html__( 'Fade In Down Small', 'cosme' ),
            'fade-in-left-small'    => esc_html__( 'Fade In Left Small', 'cosme' ),
            'fade-in-right-small'   => esc_html__( 'Fade In Right Small', 'cosme' )
        );

        return $additional_animations;
    }

    public static function instance(){
		if ( is_null(self::$_instance) ) {
		self::$_instance = new self();
		}
		return self::$_instance;
	}

}

Elementor::instance();
