<?php
/**
*
* @package phpBB Extension - Crizzo Posting Editor Image-Buttons - German (Formal honorifics)
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
	'BBCODE_STRIKE_HELP'		=> 'Durchstreichen: [s]Text[/s]',
	'BBCODE_ACENTER_HELP'		=> 'Text zentrieren',
	'BBCODE_AJUSTIFY_HELP'		=> 'Text im Blockabsatz anordnen',
	'BBCODE_ARIGHT_HELP'		=> 'Text nach rechts ausrichten',
	'BBCODE_EMAIL_HELP'			=> 'E-Mail Link: [mail]mail@domain.de[/mail]',
	'BBCODE_SPOILER_HELP'		=> 'Text oder Bilder verstecken: [spoiler]Text[/spoiler]',
	'BBCODE_YT_HELP'			=> 'http://www.youtube.com/watch?v=ZEICHEN --> [youtube]ZEICHEN[/youtube]',
));