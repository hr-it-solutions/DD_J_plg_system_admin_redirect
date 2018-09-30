<?php
/**
 * @package    DD_Admin_Redirect
 *
 * @author     HR-IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2018 HR-IT-Solutions GmbH
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');
jimport('joomla.access.access');

/**
 * plgSystemDD_AdminRedirect
 */
class plgSystemDD_Admin_Redirect extends JPlugin
{
	protected $app;

	/**
	 * onUserLogin
	 * @param       $user
	 * @param array $options
	 */
	public function onUserAfterLogin($user, $options = array())
	{
		// Front only
		if ($this->app->isClient('administrator'))
		{
			$url = JRoute::_($this->params->get('url'));
			$this->app->redirect($url);
		}
	}
}
