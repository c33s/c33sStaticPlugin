<?php

/**
 * Defines the routing rules for the c33sStatic module.
 *
 * You need to connect the method listenToRoutingLoadConfigurationEvent() to
 * the event "routing.load_configuration" to make this class work. This is
 * usually done in initalize methode of the ProjectConfiguration class.
 *
 * <code>
 *  	public function initialize()
 *		{
 *			$routing = new c33sStaticRouting($this->dispatcher);
 *			$this->dispatcher->connect('routing.load_configuration', array($routing, 'listenToRoutingLoadConfigurationEvent'));
 *		}
 * </code>
 *
 * @package    c33sStaticPlugin
 * @author     c33s
 * @version    SVN: $Id$
 */
class c33sStaticRouting
{
	protected
		$dispatcher = null;

	/**
	 * Constructor.
	 *
	 * @param sfEventDispatcher $dispatcher
	 */
	public function __construct(sfEventDispatcher $dispatcher)
	{
		$this->dispatcher = $dispatcher;
	}

	/**
	 * Adds the routes for c33sStaticPlugin.
	 *
	 * This method must listen for the "routing.load_configuration" event.
	 *
	 * @param sfEvent $event
	 */
	static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
	{
		/* @var $r sfPatternRouting */
		$r = $event->getSubject();


		//if (c33sTools::isModuleEnabled('c33sStatic'))
		//{
			$r->appendRoute('c33s_static_show', new sfRequestRoute(
				'/:name.:sf_format',
				array('module' => 'c33sStatic', 'action' => 'show', 'sf_format' => 'html'),
				array('name' => '[a-zA-Z0-9\-\_]+')
				//array('sf_culture' =>  RouteRoute::getCulturePattern())
			));
		//}
	}
}