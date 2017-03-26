<?php
/**
*
* @package phpBB Extension - Crizzo Posting Editor Image-Buttons
* @copyright (c) 2017 Crizzo - www.crizzo.de
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace crizzo\editorimgbuttons;

/**
* @ignore
*/

class ext extends \phpbb\extension\base
{
	/**
	 * Enable extension if phpBB minimum version requirement is met
	 *
	 * Requires phpBB 3.2.0 due to usage of new language-include and font-awesome icons.
	 *
	 * @return bool
	 * @access public
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.2.0', '>=');
	}
}
