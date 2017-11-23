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
			'Hokkaido-ken 北海道' => 'Hokkaido 北海道',
			'Aomori-ken 青森県' => 'Aomori 青森',
			'Iwate-ken 岩手県' => 'Iwate 岩手',
			'Miyage-ken 宮城県' => 'Miyage 宮城',
			'Akita-ken 秋田県' => 'Akita 秋田',
			'Yamagata-ken 山形県' => 'Yamagata 山形',
			'Fukushima-ken 福島県' => 'Fukushima 福島',
			'Ibaraki-ken 茨城県' => 'Ibaraki 茨城',
			'Tochigi-ken 栃木県' => 'Tochigi 栃木',
			'Gunma-ken  群馬県' => 'Gunma 群馬',
			'Saitama-ken 埼玉県' => 'Saitama 埼玉',
			'Chiba-ken 千葉県' => 'Chiba 千葉',
			'Tokyo-to 東京都' => 'Tokyo 東京',
			'Kanagawa-ken 神奈川県' => 'Kanagawa 神奈川',
			'Niigata-ken 新潟県' => 'Niigata 新潟',
			'Toyama-ken 富山県' => 'Toyama 富山',
			'Ishikawa-ken 石川県' => 'Ishikawa 石川',
			'Fukui-ken 福井県' => 'Fukui 福井',
			'Yamanashi-ken 山梨県' => 'Yamanashi 山梨',
			'Nagano-ken 長野県' => 'Nagano 長野',
			'Gifu-ken 岐阜県' => 'Gifu 岐阜',
			'Shizuoka-ken 静岡県' => 'Shizuoka 静岡',
			'Aichi-ken 愛知県' => 'Aichi 愛知',
			'Mie-ken 三重県' => 'Mie 三重',
			'hiiga-ken 滋賀県S' => 'Shiiga 滋賀',
			'Kyoto-fu 京都府' => 'Kyoto 京都',
			'Osaka-fu 大阪府' => 'Osaka 大阪',
			'Hyougo-ken 兵庫県' => 'Hyougo 兵庫',
			'Nara-ken 奈良県' => 'Nara 奈良',
			'Wakayama-ken 和歌山県' => 'Wakayama 和歌山',
			'Tottori-ken 鳥取県' => 'Tottori 鳥取',
			'Shimane-ken 島根県' => 'Shimane 島根',
			'Okayama-ken 岡山県' => 'Okayama 岡山県',
			'広島県Hiroshima-ken' => 'Hiroshima 広島',
			'山口県Yamaguchi-ken' => 'Yamaguchi 山口',
			'Okushima-ken 徳島県' => 'Tokushima 徳島',
			'Kagawa-ken 香川県' => 'Kagawa 香川',
			'Ehime-ken 愛媛県' => 'Ehime 愛媛',
			'Kouchi-ken 高知県' => 'Kouchi 高知',
			'Fukuoka-ken 福岡県' => 'Fukuoka 福岡',
			'Saga-ken 佐賀県' => 'Saga 佐賀',
			'Nagasaki-ken 長崎県' => 'Nagasaki 長崎',
			'Kumamoto-ken 熊本県' => 'Kumamoto 熊本',
			'Oita-ken 大分県' => 'Oita 大分',
			'Miyazaki-ken 宮崎県' => 'Miyazaki 宮崎',
			'Kagoshima-ken 鹿児島県' => 'Kagoshima 鹿児島',
			'Okinawa-ken 沖縄県' => 'Okinawa 沖縄',
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
