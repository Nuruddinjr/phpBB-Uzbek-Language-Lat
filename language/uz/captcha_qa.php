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
	'CAPTCHA_QA'				=> 'Matn tasdiqlash',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Bu savol spam-botlardan himoya tarzida berilgan.',
	'CONFIRM_QUESTION_WRONG'	=> 'Savolga noto\'g\'ri javob berdingiz.',

	'QUESTION_ANSWERS'			=> 'Javoblar',
	'ANSWERS_EXPLAIN'			=> 'Savolga to\'g\'ri javoblar yozing. Har bir javobni yangi qatorda yozing.',
	'CONFIRM_QUESTION'			=> 'Savol',

	'ANSWER'					=> 'Javob',
	'EDIT_QUESTION'				=> 'Savolni o\'zgartirish',
	'QUESTIONS'					=> 'Savollar',
	'QUESTIONS_EXPLAIN'			=> 'При отправке форм, для которых включено текстовое подтверждение, пользователю будет предложен один из указанных здесь вопросов. Для использования данного модуля должен быть установлен по крайней мере один вопрос на языке по умолчанию. Эти вопросы должны быть просты для вашей потенциальной аудитории, но в то же время сложны для бота, способного найти ответ через поиск в Google™. Использование обширного и часто изменяемого набора вопросов даст наилучшие результаты. Включите строгую проверку, если ответ на ваш вопрос зависит от знаков препинания, пробелов или регистра символов.',
	'QUESTION_DELETED'			=> 'Savol o\'chirilgan',
	'QUESTION_LANG'				=> 'Til',
	'QUESTION_LANG_EXPLAIN'		=> 'Savol va unga javob yoziladigan til.',
	'QUESTION_STRICT'			=> 'Qattiq tekshiruv',
	'QUESTION_STRICT_EXPLAIN'	=> 'Agar yoqilsa, javoblarni tekshirguncha registr, tinish belgilari va oraliqlarga e\'tibor beriladi.',

	'QUESTION_TEXT'				=> 'Savol',
	'QUESTION_TEXT_EXPLAIN'		=> 'Foydalanuvchiga beriladigan savol.',

	'QA_ERROR_MSG'				=> 'Barcha maydonlarni to\'ldiring va bittadan kam emas javob yozing.',
    'QA_LAST_QUESTION'			=> 'Tekst tarzida tasdiqlash konferensiyada tanlanganida hamma savollarni o\'chirib bo\'lmaydi.',

));
