<?php
/**
 * SI invoices stripe fix for adding two zeros  */
 
/* add_filter( 'si_convert_money_to_cents_for_stripe', '__return_false' );
/**
 * Sprout Invoices
 *
 */
function si_change_strings( $translations, $text, $domain ) {
	if ( 'sprout-invoices' === $domain ) {
		// Change "Description"
		if ( 'BACS' === strtoupper( $text ) ) {
			return 'Bank Wire (BACS)';
		}
		if ( 'provide bacs info' === strtolower( $text ) ) {
			return 'Account and Bank Details';
		}
			if ( 'PO' === strtoupper( $text ) ) {
			return 'Other payment';
		}
		// add more conditions, changing as many strings as you'd like
	}
	return $translations;
}
add_filter( 'gettext', 'si_change_strings', 10, 3 );


/* get check icon from izuio s3 */
function izuio_si_checks_checkout_options( $options = array() ) {
	$options['icons'] = array( 
			 'http://s3.izu.io/wire-transfer-arrow.png' );
	return $options;
}
add_filter( 'si_checks_checkout_options', 'izuio_si_checks_checkout_options' );
/* end */


/* get BACS icon from izuio s3 */
function izuio_si_bacs_checkout_options( $options = array() ) {
	$options['icons'] = array( 
			 'http://s3.izu.io/wire-transfer-arrow.png' );
	return $options;
}
add_filter( 'si_bacs_checkout_options', 'izuio_si_bacs_checkout_options' );
/* end BACS icon from izuio s3  */

/* get PO icon from izuio s3 */
function izuio_si_popayment_checkout_options( $options = array() ) {
	$options['icons'] = array( 
			 'http://s3.izu.io/other-pay-method.png' );
	return $options;
}
add_filter( 'si_popayment_checkout_options', 'izuio_si_popayment_checkout_options' );
/* end */


/* start change for BACS fields */
function izuio_sa_bacs_fields($fields) {
		$fields = array(
			'amount' => array(
				'type' => 'text',
				'weight' => 1,
				'label' => __( 'Total Paid', 'sprout-invoices' ),
				'attributes' => array(
					//'autocomplete' => 'off',
				),
				'required' => true,
			),
			'bac_number' => array(
				'type' => 'text',
				'weight' => 5,
				'label' => __( 'Bank Reference Number', 'sprout-invoices' ),
				'attributes' => array(
					//'autocomplete' => 'off',
				),
				'required' => true,
			),
			'mailed' => array(
				'type' => 'date',
				'weight' => 10,
				'label' => __( 'Date Sent', 'sprout-invoices' ),
				'attributes' => array(
					'autocomplete' => 'off',
				),
				'default' => date_i18n( 'Y-m-d' ),
				'required' => true,
			),
			'notes' => array(
				'type' => 'textarea',
				'weight' => 15,
				'label' => __( 'Message', 'sprout-invoices' ),
				'attributes' => array(
					//'autocomplete' => 'off',
				),
				'required' => false,
			),
			'nonce' => array( // anti-spam honeypot
				'type' => 'hidden',
				'weight' => 50,
				'label' => __( 'Skip this unless you are not human.', 'sprout-invoices' ),
				'required' => true,
				'value' => wp_create_nonce( SI_Controller::NONCE ),
			),
		);
		return $fields;
	}
	add_filter( 'sa_bacs_fields', 'izuio_sa_bacs_fields' );
	/* end field changes */
	
	function izuio_sa_popayment_fields( $checkout = '' ) {
		$fields = array(
			'amount' => array(
				'type' => 'text',
				'weight' => 1,
				'label' => __( 'Amount', 'sprout-invoices' ),
				'attributes' => array(
					//'autocomplete' => 'off',
				),
				'required' => true,
			),
			'check_number' => array(
				'type' => 'text',
				'weight' => 5,
				'label' => __( 'Other payment reference', 'sprout-invoices' ),
				'attributes' => array(
					//'autocomplete' => 'off',
				),
				'required' => true,
			),
			'upload' => array(
				'type' => 'file',
				'weight' => 15,
				'label' => __( 'Document(if any)', 'sprout-invoices' ),
				'required' => false,
			),
			'notes' => array(
				'type' => 'textarea',
				'weight' => 10,
				'label' => __( 'Explanation', 'sprout-invoices' ),
				'attributes' => array(
					//'autocomplete' => 'off',
				),
				'required' => false,
			),
			'nonce' => array( // anti-spam honeypot
				'type' => 'hidden',
				'weight' => 50,
				'label' => __( 'Skip this unless you are not human.', 'sprout-invoices' ),
				'required' => true,
				'value' => wp_create_nonce( SI_Controller::NONCE ),
			),
		);
				return $fields;
	}
	add_filter( 'sa_popayment_fields', 'izuio_sa_popayment_fields' );