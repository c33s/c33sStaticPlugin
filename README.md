c33sStaticPlugin
====================

[![project status](http://stillmaintained.com/c33s/c33sStaticPlugin.png)](http://stillmaintained.com/c33s/c33sStaticPlugin)


c33sStaticPlugin provides an easy way to serve static pages. The plugin is based upon http://trac.symfony-project.org/wiki/HowtoServeStaticContent


Requirements
------------

- symfony 1.4 (could work with previous versions too, untested) - http://www.symfony-project.org/


Installation
------------

 * Install plugin in `/plugins/c33sStaticPlugin` using GIT, SVN or whatever you like
 * Enable plugin in `/config/ProjectConfiguration.class.php`

``` php
<?php

class ProjectConfiguration extends sfProjectConfiguration
{
	public function setup()
	{
		...
		$this->enablePlugins('c33sStaticPlugin');
		...
	}
}
```

Usage
-----

The plugin automatically registers its route as catch-all route. 


