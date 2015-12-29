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
	'RECAPTCHA_LANG'				=> 'ru',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'reCaptcha bilan foydalanish uchun <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> saytida ro\'yhatdan o\'tish kerak.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Noto\'g\'ri javob',

	'RECAPTCHA_PUBLIC'				=> 'Ochiq kalit reCaptcha (Public Key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Sizning reCaptcha ochiq kalitingiz. Kalitlarni <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> saytida olsa bo\'ladi.',
	'RECAPTCHA_PRIVATE'				=> 'Yopiq kalit reCaptcha (Private Key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Sizning reCaptcha yopiq kalitingiz. Kalitlarni <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> saytida olsa bo\'ladi.',

	'RECAPTCHA_EXPLAIN'				=> 'Spam-botlardan himoya tarzida ko\'rsatilgan so\'zni pasga yozing.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'RECAPTCHA bilan ulanishda muammo: soketni ochib bo\'lmayapti. Keyinroq yana urunib ko\'ring.',
));
