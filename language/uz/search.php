<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALL_AVAILABLE'			=> 'Barchasi',
	'ALL_RESULTS'			=> 'Barcha kunlar',

	'DISPLAY_RESULTS'		=> 'Natijalarni ko\'rsatish',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> '%d natija topildi',
		2	=> '%d natija topildi',
		3	=> '%d natija topildi',
	),
	'FOUND_MORE_SEARCH_MATCHES'	=> array(
		1	=> '%d ko\'p natija topildi',
		2	=> '%d ko\'p natija topildi',
		3	=> '%d ko\'p natija topildi',
	),

	'GLOBAL'				=> 'Muhim',

	'IGNORED_TERMS'			=> 'e\'tibor berilmagan',
	'IGNORED_TERMS_EXPLAIN'	=> 'Bu so\'zlar e\'tiborsiz qolgan, chunki juda ko\'p ishlatilgan: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Habarga o\'tish',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Habarlaringizni ko\'rishingiz uchun tizimga kirishingiz kerak.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'O\'qilmagan habarlarni ko\'rish uchun tizimga kirish kerak.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Ohirgi tashrifingizdan yangi habarlarni ko\'rish uchun tizimga kirish kerak.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'  => array(
		1	=> 'Qidiruv uchun juda ko\'p so\'z yozdingiz. Shunday so\'zlar %1$d kam bo\'lishi kerak.',
		2	=> 'Qidiruv uchun juda ko\'p so\'z yozdingiz. Shunday so\'zlar %1$d kam bo\'lishi kerak.',
		3	=> 'Qidiruv uchun juda ko\'p so\'z yozdingiz. Shunday so\'zlar %1$d kam bo\'lishi kerak.',
	),

	'NO_KEYWORDS'			=> 'Qidirish uchun bittadan kam emas so\'z yozishingiz kerak. Har bir so\'zning uzunligi %s kam bo\'lmasdan va %s ko\'p bolishi mumkin emas, * belgisidan tashqari.',
	'NO_RECENT_SEARCHES'	=> 'Ohirgi vaqt ichida qidiruv so\'rovlari bo\'lmagan.',
	'NO_SEARCH'				=> 'Sizga qidirshni ishlatish taqiqlangan.',
	'NO_SEARCH_RESULTS'		=> 'Mos keladigan mavzular yoki habarlar topilmadi.',
	'NO_SEARCH_LOAD'		=> 'Qirish vaqtincha ishlamayapti. Server haddan tashqari yuklangan. Keyinroq urunib ko\'ring.',
	'NO_SEARCH_TIME'		=> 'Oldingi so\'rovdan keyin ozgina kutishingiz kerak. %d soniya kutib turing.',
	'NO_SEARCH_UNREADS'		=> 'Bu konferentsiyada o\'qilmagan habarlarni qidirish taqiqlangan.',
	'WORD_IN_NO_POST'		=> 'Mos keladigan habarlar topilmadi, <strong>%s</strong> so\'zi hech qayerda uchramaydi.',
	'WORDS_IN_NO_POST'		=> 'Mos keladigan habarlar topilmadi, <strong>%s</strong> so\'zlari hech qayerda uchramaydi.',

	'POST_CHARACTERS'		=> 'habarning belgilari',
	'PHRASE_SEARCH_DISABLED'	=> 'Aniq qidiruv bu konferentsiyada mavjud emas.',

	'RECENT_SEARCHES'		=> 'Ohirgi qidiruv so\'rovlari',
	'RESULT_DAYS'			=> 'Habarlarni qidirish',
	'RESULT_SORT'			=> 'Saralash maydoni',
	'RETURN_FIRST'			=> 'Birinchilarni ko\'rsatish',
	'GO_TO_SEARCH_ADV'		=> 'Mukammal qidiruvga o\'tish',

	'SEARCHED_FOR'				=> 'Qidiruv so\'rovi',
	'SEARCHED_TOPIC'			=> 'Mavzuda qidirish',
	'SEARCHED_QUERY'			=> 'Qidiruv so\'rovi',
	'SEARCH_ALL_TERMS'			=> 'Barcha so\'zlarni qidirish',
	'SEARCH_ANY_TERMS'			=> 'So\'rovlar tili bilan har qanday so\'z/izlash qidirish',
	'SEARCH_AUTHOR'				=> 'Muallif bo\'yicha qidirish',
	'SEARCH_AUTHOR_EXPLAIN'		=> '* belgisini shablon sifatida ishlating.',
	'SEARCH_FIRST_POST'			=> 'Faqat mavzuning birinchi habarida',
	'SEARCH_FORUMS'				=> 'Forumlarda qidirish',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Qidirish uchun forum yoki forumlarni tanlang. Subforumlarda avtomatik tarzda qidirialdi, agar kerakli parametrni ochirmagan bo\'lsangiz.',
	'SEARCH_IN_RESULTS'			=> 'Topilganlardan qidiruv',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Natijadagi so\'zlarni aniqlash uchun <strong>+</strong> ishlatsangiz bo\'ladi, va natijada bo\'lishi kerak emas so\'zlarni aniqlash uchun <strong>-</strong>. So\'zlarni <strong>|</strong> bilan ajratsangiz bo\'ladi, qatordagi so\'zlar bo\'yicha qidiriladi. Qisman tasodif uchun <strong>*</strong> ishlatsangiz bo\'ladi.',
	'SEARCH_MSG_ONLY'			=> 'Faqat habarlarning matnida',
	'SEARCH_OPTIONS'			=> 'So\'rov parametrlari',
	'SEARCH_QUERY'				=> 'So\'rov',
	'SEARCH_SUBFORUMS'			=> 'Subforumlarda qidirish',
	'SEARCH_TITLE_MSG'			=> 'Mavzularning nomida va habarlarning matnida',
	'SEARCH_TITLE_ONLY'			=> 'Faqat mavzularning nomida',
	'SEARCH_WITHIN'				=> 'Qidirish',
	'SORT_ASCENDING'			=> 'O\'sish bo\'yicha',
	'SORT_AUTHOR'				=> 'Muallif',
	'SORT_DESCENDING'			=> 'Kamayish bo\'yicha',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Habar sarlavhasi',
	'SORT_TIME'					=> 'Qo\'shilgan vaqti',
	'SPHINX_SEARCH_FAILED'		=> 'Qidiruv hatosi: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Qiriruvni amalga oshirib bo\'maydi. Ba\'tafsil malumot hatolar jurnalida.',

<<<<<<< HEAD
	'TOO_FEW_AUTHOR_CHARS'	=> 'Muallifning ismidan %d kam emas belgilarini yozishingiz kerak.',
=======
	'TOO_FEW_AUTHOR_CHARS'	=> 'Muallifning ismidan %d dan kam emas belgilarini yozishingiz kerak.',
>>>>>>> origin/master
));
