<?php

class arpricelite_analytics {

	function __construct() {
		add_shortcode( 'ARPLite', array( $this, 'arplite_Shortcode' ) );
		add_action( 'init', array( $this, 'arplite_init_session' ), 10 );
	}

	function arplite_init_session() {

		if ( version_compare( PHP_VERSION, '7.0.0' ) >= 0 ) {
			if ( ( function_exists( 'session_status' ) && session_status() == PHP_SESSION_NONE && ! is_admin() ) ) {
				@session_start(
					array(
						'read_and_close' => false,
					)
				);
			}
		} elseif ( version_compare( PHP_VERSION, '5.4.0' ) >= 0 ) {
			if ( ( function_exists( 'session_status' ) && session_status() == PHP_SESSION_NONE && ! is_admin() ) ) {
				@session_start();
			}
		} else {
			if ( ( session_id() == '' && ! is_admin() ) ) {
				@session_start();
			}
		}

	}

	function arplite_Shortcode( $atts ) {

		global $wpdb, $arpricelite_analytics;

		extract(
			shortcode_atts(
				array(
					'id' => '1',
				),
				$atts
			)
		);

		$table_id = intval( $atts['id'] );

		if ( $table_id == '' ) {
			$table_id = 1;
		}

		$result          = $wpdb->get_row( $wpdb->prepare( 'select * from ' . $wpdb->prefix . 'arplite_arprice where ID=%d', $table_id ) );
		$pricetable_name = isset( $result ) ? $result->table_name : '';
		if ( $pricetable_name == '' ) {
			return esc_html__( 'Please Select Valid Pricing Table', 'arprice-responsive-pricing-table' );
		} elseif ( $result->status != 'published' ) {
			return esc_html__( 'Please Select Valid Pricing Table', 'arprice-responsive-pricing-table' );
		} elseif ( $result->is_template == 1 ) {
			return '';
		}

		require_once ARPLITE_PRICINGTABLE_DIR . '/core/views/arprice_front.php';

		$contents = arplite_get_pricing_table_string( $table_id );

		return $contents;
	}

}


