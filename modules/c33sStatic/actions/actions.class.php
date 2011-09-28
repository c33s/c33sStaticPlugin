<?php

require_once dirname(__FILE__).'/../lib/Basec33sStaticActions.class.php';

/**
 * c33sStatic actions.
 * 
 * @package    c33sStaticPlugin
 * @subpackage c33sStatic
 * @author     c33s
 * @version    SVN: $Id: actions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
class c33sStaticActions extends Basec33sStaticActions
{
	public function executeShow(sfWebRequest $request)
	{
		$culture = $this->getUser()->getCulture();
		$templateName = $request->getParameter('name').'.'.$culture;
		$templateFile = $templateName.'.php';
		$configuration = $this->context->getConfiguration();


		//application templates
		$path = $configuration->getTemplatePath('static', $templateFile);
		if ($path)
		{
				$module = 'static';
		}
		else
		{
				//plugin templates
				$module = null;
				$path = $configuration->getTemplatePath($this->getModuleName(), $templateFile);
		}


		$this->setTemplate($templateName, $module);

		$this->forward404Unless($path);
		
		return '';
	}
}
