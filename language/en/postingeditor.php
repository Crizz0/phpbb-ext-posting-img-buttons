<?php
/**
*
* @package phpBB Extension - Crizzo Posting Editor Image-Buttons - English
* @copyright (c) 2014 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'BBCODE_STRIKE_HELP'		=> 'Strike: [s]text[/s]',
	'BBCODE_ACENTER_HELP'		=> 'Center text',
	'BBCODE_AJUSTIFY_HELP'		=> 'Justify text',
	'BBCODE_ARIGHT_HELP'		=> 'Text align right',
	'BBCODE_EMAIL_HELP'			=> 'Link an e-mail: [mail]mail@domain.de[/mail]',
	'BBCODE_SPOILER_HELP'		=> 'Hide text or picture: [spoiler]text[/spoiler]',
	'BBCODE_YT_HELP'			=> 'http://www.youtube.com/watch?v=CHARACTERS --> [youtube]CHARACTERS[/youtube]',
));