<?php
/**
*
* @package phpBB Extension - Crizzo Posting Editor Image-Buttons - Arabic
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BBCODE_STRIKE_HELP'		=> 'خط بوسط النص : [s]النص[/s]',
	'BBCODE_ACENTER_HELP'		=> 'النص بالوسط',
	'BBCODE_AJUSTIFY_HELP'		=> 'النص كامل',
	'BBCODE_ARIGHT_HELP'		=> 'النص باليمين',
	'BBCODE_EMAIL_HELP'			=> 'رابط بريد الكتروني : [mail]mail@domain.de[/mail]',
	'BBCODE_SPOILER_HELP'		=> 'إخفاء نص أو صورة : [spoiler]المحتوى[/spoiler]',
	'BBCODE_YT_HELP'			=> 'http://www.youtube.com/watch?v=CHARACTERS --> [youtube]CHARACTERS[/youtube]',
));
