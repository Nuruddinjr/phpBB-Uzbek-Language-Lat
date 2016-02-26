<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
	'ACTIVE_TOPICS'			=> 'Aktiv mavzular',
	'ANNOUNCEMENTS'			=> 'E\'lonlar',

	'FORUM_PERMISSIONS'		=> 'Huquqlar',

	'ICON_ANNOUNCEMENT'		=> 'E\'lon',
	'ICON_STICKY'			=> 'Muhim',

	'LOGIN_NOTIFY_FORUM'	=> 'Shu forumdagi yangi habar haqidagi bildirishnoma olgansiz, uni ko\'rish uchun tizimga kiring.',

	'MARK_TOPICS_READ'		=> 'Forumdagi barcha mavzular o\'qilgan deb belgilash',

	'NEW_POSTS_HOT'			=> 'O\'qilmagan habarlar [ Mashhur mavzu ]', // Boshqa ishlatilmaydi
	'NEW_POSTS_LOCKED'		=> 'O\'qilmagan habarlar [ Yopiq mavzu ]', // Boshqa ishlatilmaydi
	'NO_NEW_POSTS_HOT'		=> 'Yangi habarlar yo\'q [ Mashhur mavzu ]', // Boshqa ishlatilmaydi
	'NO_NEW_POSTS_LOCKED'	=> 'Yangi habarlar yo\'q [ Yopiq mavzu ]', // Boshqa ishlatilmaydi
	'NO_UNREAD_POSTS_HOT'	=> 'O\'qilmagan habarlar yo\'q [ Mashhur mavzu ]',
	'NO_UNREAD_POSTS_LOCKED'=> 'O\'qilmagan habarlar yo\'q [ Yopiq mavzu ]',

	'POST_FORUM_LOCKED'		=> 'Forum yopiq',

	'TOPICS_MARKED'			=> 'Forumdagi barcha mavzular o\'qilgan deb belgilangan.',

	'UNREAD_POSTS_HOT'		=> 'O\'qilmagan habarlar [ Mashhur mavzu ]',
	'UNREAD_POSTS_LOCKED'	=> 'O\'qilmagan habarlar [ Yopiq mavzu ]',

	'NO_READ_ACCESS'		=> 'Bu forumda o\'qish ni iloji yo\'q.',

	'VIEW_FORUM'			=> 'Forumni ko\'rish',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d mavzu',
		2	=> '%d mavzu',
		3	=> '%d mavzu',
	),
));
