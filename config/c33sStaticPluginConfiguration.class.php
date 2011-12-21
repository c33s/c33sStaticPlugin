<?php
/**
 * c33sStaticPlugin configuration.
 *
 * @package     c33sStaticPlugin
 * @subpackage  config
 * @author      c33s
 * @version     SVN: $Id: PluginConfiguration.class.php 17207 2009-04-10 15:36:26Z Kris.Wallsmith $
 */

class c33sStaticPluginConfiguration extends sfPluginConfiguration
{
	const VERSION = '1.0.0-DEV';

	/**
		* @see sfPluginConfiguration
		*/
	public function initialize()
	{
		$routing = new c33sStaticRouting($this->dispatcher);
		$this->dispatcher->connect('routing.load_configuration', array($routing, 'listenToRoutingLoadConfigurationEvent'));
	}
}
