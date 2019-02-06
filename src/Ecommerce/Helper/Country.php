<?php

namespace Never5\DownloadMonitor\Ecommerce\Helper;

class Country {

	public function get_countries() {
		return apply_filters( 'dlm_ecommerce_countries', array(
			'AF' => __( 'Afghanistan', 'download-monitor' ),
			'AX' => __( '&#197;land Islands', 'download-monitor' ),
			'AL' => __( 'Albania', 'download-monitor' ),
			'DZ' => __( 'Algeria', 'download-monitor' ),
			'AS' => __( 'American Samoa', 'download-monitor' ),
			'AD' => __( 'Andorra', 'download-monitor' ),
			'AO' => __( 'Angola', 'download-monitor' ),
			'AI' => __( 'Anguilla', 'download-monitor' ),
			'AQ' => __( 'Antarctica', 'download-monitor' ),
			'AG' => __( 'Antigua and Barbuda', 'download-monitor' ),
			'AR' => __( 'Argentina', 'download-monitor' ),
			'AM' => __( 'Armenia', 'download-monitor' ),
			'AW' => __( 'Aruba', 'download-monitor' ),
			'AU' => __( 'Australia', 'download-monitor' ),
			'AT' => __( 'Austria', 'download-monitor' ),
			'AZ' => __( 'Azerbaijan', 'download-monitor' ),
			'BS' => __( 'Bahamas', 'download-monitor' ),
			'BH' => __( 'Bahrain', 'download-monitor' ),
			'BD' => __( 'Bangladesh', 'download-monitor' ),
			'BB' => __( 'Barbados', 'download-monitor' ),
			'BY' => __( 'Belarus', 'download-monitor' ),
			'BE' => __( 'Belgium', 'download-monitor' ),
			'PW' => __( 'Belau', 'download-monitor' ),
			'BZ' => __( 'Belize', 'download-monitor' ),
			'BJ' => __( 'Benin', 'download-monitor' ),
			'BM' => __( 'Bermuda', 'download-monitor' ),
			'BT' => __( 'Bhutan', 'download-monitor' ),
			'BO' => __( 'Bolivia', 'download-monitor' ),
			'BQ' => __( 'Bonaire, Saint Eustatius and Saba', 'download-monitor' ),
			'BA' => __( 'Bosnia and Herzegovina', 'download-monitor' ),
			'BW' => __( 'Botswana', 'download-monitor' ),
			'BV' => __( 'Bouvet Island', 'download-monitor' ),
			'BR' => __( 'Brazil', 'download-monitor' ),
			'IO' => __( 'British Indian Ocean Territory', 'download-monitor' ),
			'VG' => __( 'British Virgin Islands', 'download-monitor' ),
			'BN' => __( 'Brunei', 'download-monitor' ),
			'BG' => __( 'Bulgaria', 'download-monitor' ),
			'BF' => __( 'Burkina Faso', 'download-monitor' ),
			'BI' => __( 'Burundi', 'download-monitor' ),
			'KH' => __( 'Cambodia', 'download-monitor' ),
			'CM' => __( 'Cameroon', 'download-monitor' ),
			'CA' => __( 'Canada', 'download-monitor' ),
			'CV' => __( 'Cape Verde', 'download-monitor' ),
			'KY' => __( 'Cayman Islands', 'download-monitor' ),
			'CF' => __( 'Central African Republic', 'download-monitor' ),
			'TD' => __( 'Chad', 'download-monitor' ),
			'CL' => __( 'Chile', 'download-monitor' ),
			'CN' => __( 'China', 'download-monitor' ),
			'CX' => __( 'Christmas Island', 'download-monitor' ),
			'CC' => __( 'Cocos (Keeling) Islands', 'download-monitor' ),
			'CO' => __( 'Colombia', 'download-monitor' ),
			'KM' => __( 'Comoros', 'download-monitor' ),
			'CG' => __( 'Congo (Brazzaville)', 'download-monitor' ),
			'CD' => __( 'Congo (Kinshasa)', 'download-monitor' ),
			'CK' => __( 'Cook Islands', 'download-monitor' ),
			'CR' => __( 'Costa Rica', 'download-monitor' ),
			'HR' => __( 'Croatia', 'download-monitor' ),
			'CU' => __( 'Cuba', 'download-monitor' ),
			'CW' => __( 'Cura&ccedil;ao', 'download-monitor' ),
			'CY' => __( 'Cyprus', 'download-monitor' ),
			'CZ' => __( 'Czech Republic', 'download-monitor' ),
			'DK' => __( 'Denmark', 'download-monitor' ),
			'DJ' => __( 'Djibouti', 'download-monitor' ),
			'DM' => __( 'Dominica', 'download-monitor' ),
			'DO' => __( 'Dominican Republic', 'download-monitor' ),
			'EC' => __( 'Ecuador', 'download-monitor' ),
			'EG' => __( 'Egypt', 'download-monitor' ),
			'SV' => __( 'El Salvador', 'download-monitor' ),
			'GQ' => __( 'Equatorial Guinea', 'download-monitor' ),
			'ER' => __( 'Eritrea', 'download-monitor' ),
			'EE' => __( 'Estonia', 'download-monitor' ),
			'ET' => __( 'Ethiopia', 'download-monitor' ),
			'FK' => __( 'Falkland Islands', 'download-monitor' ),
			'FO' => __( 'Faroe Islands', 'download-monitor' ),
			'FJ' => __( 'Fiji', 'download-monitor' ),
			'FI' => __( 'Finland', 'download-monitor' ),
			'FR' => __( 'France', 'download-monitor' ),
			'GF' => __( 'French Guiana', 'download-monitor' ),
			'PF' => __( 'French Polynesia', 'download-monitor' ),
			'TF' => __( 'French Southern Territories', 'download-monitor' ),
			'GA' => __( 'Gabon', 'download-monitor' ),
			'GM' => __( 'Gambia', 'download-monitor' ),
			'GE' => __( 'Georgia', 'download-monitor' ),
			'DE' => __( 'Germany', 'download-monitor' ),
			'GH' => __( 'Ghana', 'download-monitor' ),
			'GI' => __( 'Gibraltar', 'download-monitor' ),
			'GR' => __( 'Greece', 'download-monitor' ),
			'GL' => __( 'Greenland', 'download-monitor' ),
			'GD' => __( 'Grenada', 'download-monitor' ),
			'GP' => __( 'Guadeloupe', 'download-monitor' ),
			'GU' => __( 'Guam', 'download-monitor' ),
			'GT' => __( 'Guatemala', 'download-monitor' ),
			'GG' => __( 'Guernsey', 'download-monitor' ),
			'GN' => __( 'Guinea', 'download-monitor' ),
			'GW' => __( 'Guinea-Bissau', 'download-monitor' ),
			'GY' => __( 'Guyana', 'download-monitor' ),
			'HT' => __( 'Haiti', 'download-monitor' ),
			'HM' => __( 'Heard Island and McDonald Islands', 'download-monitor' ),
			'HN' => __( 'Honduras', 'download-monitor' ),
			'HK' => __( 'Hong Kong', 'download-monitor' ),
			'HU' => __( 'Hungary', 'download-monitor' ),
			'IS' => __( 'Iceland', 'download-monitor' ),
			'IN' => __( 'India', 'download-monitor' ),
			'ID' => __( 'Indonesia', 'download-monitor' ),
			'IR' => __( 'Iran', 'download-monitor' ),
			'IQ' => __( 'Iraq', 'download-monitor' ),
			'IE' => __( 'Ireland', 'download-monitor' ),
			'IM' => __( 'Isle of Man', 'download-monitor' ),
			'IL' => __( 'Israel', 'download-monitor' ),
			'IT' => __( 'Italy', 'download-monitor' ),
			'CI' => __( 'Ivory Coast', 'download-monitor' ),
			'JM' => __( 'Jamaica', 'download-monitor' ),
			'JP' => __( 'Japan', 'download-monitor' ),
			'JE' => __( 'Jersey', 'download-monitor' ),
			'JO' => __( 'Jordan', 'download-monitor' ),
			'KZ' => __( 'Kazakhstan', 'download-monitor' ),
			'KE' => __( 'Kenya', 'download-monitor' ),
			'KI' => __( 'Kiribati', 'download-monitor' ),
			'KW' => __( 'Kuwait', 'download-monitor' ),
			'KG' => __( 'Kyrgyzstan', 'download-monitor' ),
			'LA' => __( 'Laos', 'download-monitor' ),
			'LV' => __( 'Latvia', 'download-monitor' ),
			'LB' => __( 'Lebanon', 'download-monitor' ),
			'LS' => __( 'Lesotho', 'download-monitor' ),
			'LR' => __( 'Liberia', 'download-monitor' ),
			'LY' => __( 'Libya', 'download-monitor' ),
			'LI' => __( 'Liechtenstein', 'download-monitor' ),
			'LT' => __( 'Lithuania', 'download-monitor' ),
			'LU' => __( 'Luxembourg', 'download-monitor' ),
			'MO' => __( 'Macao S.A.R., China', 'download-monitor' ),
			'MK' => __( 'Macedonia', 'download-monitor' ),
			'MG' => __( 'Madagascar', 'download-monitor' ),
			'MW' => __( 'Malawi', 'download-monitor' ),
			'MY' => __( 'Malaysia', 'download-monitor' ),
			'MV' => __( 'Maldives', 'download-monitor' ),
			'ML' => __( 'Mali', 'download-monitor' ),
			'MT' => __( 'Malta', 'download-monitor' ),
			'MH' => __( 'Marshall Islands', 'download-monitor' ),
			'MQ' => __( 'Martinique', 'download-monitor' ),
			'MR' => __( 'Mauritania', 'download-monitor' ),
			'MU' => __( 'Mauritius', 'download-monitor' ),
			'YT' => __( 'Mayotte', 'download-monitor' ),
			'MX' => __( 'Mexico', 'download-monitor' ),
			'FM' => __( 'Micronesia', 'download-monitor' ),
			'MD' => __( 'Moldova', 'download-monitor' ),
			'MC' => __( 'Monaco', 'download-monitor' ),
			'MN' => __( 'Mongolia', 'download-monitor' ),
			'ME' => __( 'Montenegro', 'download-monitor' ),
			'MS' => __( 'Montserrat', 'download-monitor' ),
			'MA' => __( 'Morocco', 'download-monitor' ),
			'MZ' => __( 'Mozambique', 'download-monitor' ),
			'MM' => __( 'Myanmar', 'download-monitor' ),
			'NA' => __( 'Namibia', 'download-monitor' ),
			'NR' => __( 'Nauru', 'download-monitor' ),
			'NP' => __( 'Nepal', 'download-monitor' ),
			'NL' => __( 'Netherlands', 'download-monitor' ),
			'NC' => __( 'New Caledonia', 'download-monitor' ),
			'NZ' => __( 'New Zealand', 'download-monitor' ),
			'NI' => __( 'Nicaragua', 'download-monitor' ),
			'NE' => __( 'Niger', 'download-monitor' ),
			'NG' => __( 'Nigeria', 'download-monitor' ),
			'NU' => __( 'Niue', 'download-monitor' ),
			'NF' => __( 'Norfolk Island', 'download-monitor' ),
			'MP' => __( 'Northern Mariana Islands', 'download-monitor' ),
			'KP' => __( 'North Korea', 'download-monitor' ),
			'NO' => __( 'Norway', 'download-monitor' ),
			'OM' => __( 'Oman', 'download-monitor' ),
			'PK' => __( 'Pakistan', 'download-monitor' ),
			'PS' => __( 'Palestinian Territory', 'download-monitor' ),
			'PA' => __( 'Panama', 'download-monitor' ),
			'PG' => __( 'Papua New Guinea', 'download-monitor' ),
			'PY' => __( 'Paraguay', 'download-monitor' ),
			'PE' => __( 'Peru', 'download-monitor' ),
			'PH' => __( 'Philippines', 'download-monitor' ),
			'PN' => __( 'Pitcairn', 'download-monitor' ),
			'PL' => __( 'Poland', 'download-monitor' ),
			'PT' => __( 'Portugal', 'download-monitor' ),
			'PR' => __( 'Puerto Rico', 'download-monitor' ),
			'QA' => __( 'Qatar', 'download-monitor' ),
			'RE' => __( 'Reunion', 'download-monitor' ),
			'RO' => __( 'Romania', 'download-monitor' ),
			'RU' => __( 'Russia', 'download-monitor' ),
			'RW' => __( 'Rwanda', 'download-monitor' ),
			'BL' => __( 'Saint Barth&eacute;lemy', 'download-monitor' ),
			'SH' => __( 'Saint Helena', 'download-monitor' ),
			'KN' => __( 'Saint Kitts and Nevis', 'download-monitor' ),
			'LC' => __( 'Saint Lucia', 'download-monitor' ),
			'MF' => __( 'Saint Martin (French part)', 'download-monitor' ),
			'SX' => __( 'Saint Martin (Dutch part)', 'download-monitor' ),
			'PM' => __( 'Saint Pierre and Miquelon', 'download-monitor' ),
			'VC' => __( 'Saint Vincent and the Grenadines', 'download-monitor' ),
			'SM' => __( 'San Marino', 'download-monitor' ),
			'ST' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'download-monitor' ),
			'SA' => __( 'Saudi Arabia', 'download-monitor' ),
			'SN' => __( 'Senegal', 'download-monitor' ),
			'RS' => __( 'Serbia', 'download-monitor' ),
			'SC' => __( 'Seychelles', 'download-monitor' ),
			'SL' => __( 'Sierra Leone', 'download-monitor' ),
			'SG' => __( 'Singapore', 'download-monitor' ),
			'SK' => __( 'Slovakia', 'download-monitor' ),
			'SI' => __( 'Slovenia', 'download-monitor' ),
			'SB' => __( 'Solomon Islands', 'download-monitor' ),
			'SO' => __( 'Somalia', 'download-monitor' ),
			'ZA' => __( 'South Africa', 'download-monitor' ),
			'GS' => __( 'South Georgia/Sandwich Islands', 'download-monitor' ),
			'KR' => __( 'South Korea', 'download-monitor' ),
			'SS' => __( 'South Sudan', 'download-monitor' ),
			'ES' => __( 'Spain', 'download-monitor' ),
			'LK' => __( 'Sri Lanka', 'download-monitor' ),
			'SD' => __( 'Sudan', 'download-monitor' ),
			'SR' => __( 'Suriname', 'download-monitor' ),
			'SJ' => __( 'Svalbard and Jan Mayen', 'download-monitor' ),
			'SZ' => __( 'Swaziland', 'download-monitor' ),
			'SE' => __( 'Sweden', 'download-monitor' ),
			'CH' => __( 'Switzerland', 'download-monitor' ),
			'SY' => __( 'Syria', 'download-monitor' ),
			'TW' => __( 'Taiwan', 'download-monitor' ),
			'TJ' => __( 'Tajikistan', 'download-monitor' ),
			'TZ' => __( 'Tanzania', 'download-monitor' ),
			'TH' => __( 'Thailand', 'download-monitor' ),
			'TL' => __( 'Timor-Leste', 'download-monitor' ),
			'TG' => __( 'Togo', 'download-monitor' ),
			'TK' => __( 'Tokelau', 'download-monitor' ),
			'TO' => __( 'Tonga', 'download-monitor' ),
			'TT' => __( 'Trinidad and Tobago', 'download-monitor' ),
			'TN' => __( 'Tunisia', 'download-monitor' ),
			'TR' => __( 'Turkey', 'download-monitor' ),
			'TM' => __( 'Turkmenistan', 'download-monitor' ),
			'TC' => __( 'Turks and Caicos Islands', 'download-monitor' ),
			'TV' => __( 'Tuvalu', 'download-monitor' ),
			'UG' => __( 'Uganda', 'download-monitor' ),
			'UA' => __( 'Ukraine', 'download-monitor' ),
			'AE' => __( 'United Arab Emirates', 'download-monitor' ),
			'GB' => __( 'United Kingdom (UK)', 'download-monitor' ),
			'US' => __( 'United States (US)', 'download-monitor' ),
			'UM' => __( 'United States (US) Minor Outlying Islands', 'download-monitor' ),
			'VI' => __( 'United States (US) Virgin Islands', 'download-monitor' ),
			'UY' => __( 'Uruguay', 'download-monitor' ),
			'UZ' => __( 'Uzbekistan', 'download-monitor' ),
			'VU' => __( 'Vanuatu', 'download-monitor' ),
			'VA' => __( 'Vatican', 'download-monitor' ),
			'VE' => __( 'Venezuela', 'download-monitor' ),
			'VN' => __( 'Vietnam', 'download-monitor' ),
			'WF' => __( 'Wallis and Futuna', 'download-monitor' ),
			'EH' => __( 'Western Sahara', 'download-monitor' ),
			'WS' => __( 'Samoa', 'download-monitor' ),
			'YE' => __( 'Yemen', 'download-monitor' ),
			'ZM' => __( 'Zambia', 'download-monitor' ),
			'ZW' => __( 'Zimbabwe', 'download-monitor' ),
		) );
	}

	/**
	 * Get country label by country code
	 *
	 * @param string $code
	 *
	 * @return string
	 */
	public function get_country_label_by_code( $code ) {
		$countries = $this->get_countries();
		$return    = "";

		if ( isset( $countries[ $code ] ) ) {
			$return = $countries[ $code ];
		}

		return $return;
	}
}