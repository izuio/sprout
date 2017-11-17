<?php

/**
 * Dans fix for jpy and AUD
 * 
 */

function _maybe_convert_to_cents( $bool, $invoice ) {
	$client = $invoice->get_client();
	if ( ! is_a( $client, 'SI_Client' ) ) {
		return $bool;
	}
	$client_currency = $client->get_currency();
	if ( 'JPY' === $client_currency ) {
		$bool = false;
	}
	return $bool;
}
add_filter( 'si_convert_money_to_cents_for_stripe', '_maybe_convert_to_cents', 10, 2 );