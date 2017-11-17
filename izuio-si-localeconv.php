<?php

/**** get currency symbols where host ie wpengine does not support localeconv ********/
function si_filter_localeconv( $localeconv = array(), $doc_id = 0, $locale = '' ) {
	switch ( $locale ) {
		case 'en_AU':
			$localeconv = australia_local_array();
			break;
		case 'en_CA':
            $localeconv = canada_local_array();
            break;
        case 'en_GB':
            $localeconv = uk_local_array();
            break;
		case 'ja_JP':
			$localeconv = japan_local_array();
			break;
		case 'de_DE':
			$localeconv = eu_local_array();
			break;
		case 'fr_FR':
			$localeconv = eu_local_array();
			break;
		case 'es_MX':
			$localeconv = mexico_local_array();
			break;
        case 'en_US':
            $localeconv = us_local_array();
            break;
        case 'sv_SE':
            $localeconv = sweden_local_array();
            break;
        case 'km_KH':
			$localeconv = cambodia_local_array();
			break;
		case 'th_TH':
			$localeconv = thailand_local_array();
			break;
		case 'no_NO':
            $localeconv = no_local_array();
            break;
        default:
            $localeconv = us_local_array();
            break;
	}
	return $localeconv;
}
add_filter( 'si_get_localeconv', 'si_filter_localeconv', 10, 3 );


function australia_local_array() {
	return array(
		'decimal_point' => '.',
		'thousands_sep' => '',
		'int_curr_symbol' => 'AUD',
		'currency_symbol' => 'A$',
		'mon_decimal_point' => '.',
		'mon_thousands_sep' => ',',
		'positive_sign' => '',
		'negative_sign' => '-',
		'int_frac_digits' => 2,
		'frac_digits' => 2,
		'p_cs_precedes' => 1,
		'p_sep_by_space' => 0,
		'n_cs_precedes' => 1,
		'n_sep_by_space' => 0,
		'p_sign_posn' => 1,
		'n_sign_posn' => 1,
		'grouping' => array(),
		'mon_grouping' => array( 3, 3 ),
	);
}

function canada_local_array() {
    return array(
        'decimal_point' => '.',
        'thousands_sep' => ',',
        'int_curr_symbol' => 'CAD',
        'currency_symbol' => 'C$', 
        'mon_decimal_point' => '.',
        'mon_thousands_sep' =>  ',',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}

function cambodia_local_array() {
    return array(
        'decimal_point' => ',',
        'thousands_sep' => '.',
        'int_curr_symbol' => 'KHR',
        'currency_symbol' => '៛', 
        'mon_decimal_point' => ',',
        'mon_thousands_sep' =>  '.',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}
 
function eu_local_array() {
    return array(
        'decimal_point' => ',',
        'thousands_sep' => '.',
        'int_curr_symbol' => 'EUR',
        'currency_symbol' => '€', 
        'mon_decimal_point' => ',',
        'mon_thousands_sep' =>  '.',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}

function japan_local_array() {
	return array(
		'decimal_point' => '.',
		'thousands_sep' => '',
		'int_curr_symbol' => 'JPY',
		'currency_symbol' => '¥',
		'mon_decimal_point' => '.',
		'mon_thousands_sep' => ',',
		'positive_sign' => '',
		'negative_sign' => '-',
		'int_frac_digits' => 0,
		'frac_digits' => 0,
		'p_cs_precedes' => 1,
		'p_sep_by_space' => 0,
		'n_cs_precedes' => 1,
		'n_sep_by_space' => 0,
		'p_sign_posn' => 1,
		'n_sign_posn' => 4,
		'grouping' => array(),
		'mon_grouping' => array( 3, 3 ),
	);
}

function mexico_local_array() {
	return array(
		'decimal_point' => '.',
		'thousands_sep' => '',
		'int_curr_symbol' => 'MXN',
		'currency_symbol' => 'Mex$',
		'mon_decimal_point' => '.',
		'mon_thousands_sep' => ',',
		'positive_sign' => '',
		'negative_sign' => '-',
		'int_frac_digits' => 2,
		'frac_digits' => 2,
		'p_cs_precedes' => 1,
		'p_sep_by_space' => 0,
		'n_cs_precedes' => 1,
		'n_sep_by_space' => 0,
		'p_sign_posn' => 1,
		'n_sign_posn' => 1,
		'grouping' => array(),
		'mon_grouping' => array( 3, 3 ),
	);
}
 
function sweden_local_array() {
    return array(
        'decimal_point' => ',',
        'thousands_sep' => '.',
        'int_curr_symbol' => 'SEK',
        'currency_symbol' => 'kr', 
        'mon_decimal_point' => ',',
        'mon_thousands_sep' =>  '.',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}
 
function thai_local_array() {
    return array(
        'decimal_point' => ',',
        'thousands_sep' => '.',
        'int_curr_symbol' => 'THB',
        'currency_symbol' => '฿', 
        'mon_decimal_point' => ',',
        'mon_thousands_sep' =>  '.',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}


function uk_local_array() {
    return array(
        'decimal_point' => '.',
        'thousands_sep' => '',
        'int_curr_symbol' => 'GBP',
        'currency_symbol' => '£',
        'mon_decimal_point' => '.',
        'mon_thousands_sep' =>  ',',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}
 
function us_local_array() {
    return array(
        'decimal_point' => '.',
        'thousands_sep' => '',
        'int_curr_symbol' => 'USD',
        'currency_symbol' => 'USD$',
        'mon_decimal_point' => '.',
        'mon_thousands_sep' =>  ',',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}
 
function no_local_array() {
    return array(
        'decimal_point' => ',',
        'thousands_sep' => '.',
        'int_curr_symbol' => 'NOK',
        'currency_symbol' => 'NOK', 
        'mon_decimal_point' => ',',
        'mon_thousands_sep' =>  '.',
        'positive_sign' => '',
        'negative_sign' => '-',
        'int_frac_digits' => 2,
        'frac_digits' => 2,
        'p_cs_precedes' => 1,
        'p_sep_by_space' => 0,
        'n_cs_precedes' => 1,
        'n_sep_by_space' => 0,
        'p_sign_posn' => 1,
        'n_sign_posn' => 1,
        'grouping' => array(),
        'mon_grouping' => array( 3, 3 ),
    );
}



