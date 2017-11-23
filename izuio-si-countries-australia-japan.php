<?php
/**
 * This function file is loaded after the parent theme's function file. It's a great way to override functions, e.g. add_image_size sizes.
 *
 *
 */
function custom_states() {
	return array(
		'Australia' => array(
			'NSW' => 'New South Wales',
			'ACT' => 'Australian Capital Territory',
			'VIC' => 'Victoria',
			'QLD' => 'Queensland',
			'SA' => 'South Australia',
			'WA' => 'Western Australia',
			'TAS' => 'Tasmania',
			'NT' => 'Northern Territory',
		),
		'Japan' => array(
			'北海道' => 'Hokkaido 北海道',
			'青森県' => 'Aomori 青森',
			'岩手県' => 'Iwate 岩手',
			'宮城県' => 'Miyage 宮城',
			'秋田県' => 'Akita 秋田',
			'山形県' => 'Yamagata 山形',
			'福島県' => 'Fukushima 福島',
			'茨城県' => 'Ibaraki 茨城',
			'栃木県' => 'Tochigi 栃木',
			'群馬県' => 'Gunma 群馬',
			'埼玉県' => 'Saitama 埼玉',
			'千葉県' => 'Chiba 千葉',
			'東京都' => 'Tokyo 東京',
			'神奈川県' => 'Kanagawa 神奈川',
			'新潟県' => 'Niigata 新潟',
			'富山県' => 'Toyama 富山',
			'石川県' => 'Ishikawa 石川',
			'福井県' => 'Fukui 福井',
			'山梨県' => 'Yamanashi 山梨',
			'長野県' => 'Nagano 長野',
			'岐阜県' => 'Gifu 岐阜',
			'静岡県' => 'Shizuoka 静岡',
			'愛知県' => 'Aichi 愛知',
			'三重県' => 'Mie 三重',
			'滋賀県' => 'Shiiga 滋賀',
			'京都府' => 'Kyoto 京都',
			'大阪府' => 'Osaka 大阪',
			'兵庫県' => 'Hyougo 兵庫',
			'奈良県' => 'Nara 奈良',
			'和歌山県' => 'Wakayama 和歌山',
			'鳥取県' => 'Tottori 鳥取',
			'島根県' => 'Shimane 島根',
			'岡山県' => 'Okayama 岡山県',
			'広島県' => 'Hiroshima 広島',
			'山口県' => 'Yamaguchi 山口',
			'徳島県' => 'Tokushima 徳島',
			'香川県' => 'Kagawa 香川',
			'愛媛県' => 'Ehime 愛媛',
			'高知県' => 'Kouchi 高知',
			'福岡県' => 'Fukuoka 福岡',
			'佐賀県' => 'Saga 佐賀',
			'長崎県' => 'Nagasaki 長崎',
			'熊本県' => 'Kumamoto 熊本',
			'大分県' => 'Oita 大分',
			'宮崎県' => 'Miyazaki 宮崎',
			'鹿児島県' => 'Kagoshima 鹿児島',
			'沖縄県' => 'Okinawa 沖縄',
		),
	);
}
add_filter('sprout_state_options', 'custom_states');

function custom_country() {
	return array(
		'AU' => 'Australia',
		'JP' => 'Japan',
	);
}
add_filter('sprout_country_options', 'custom_country');
