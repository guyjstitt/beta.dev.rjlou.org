<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */


/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));
	Router::connect('/api/about-us/', array('controller' => 'about', 'action' => 'index'));
	Router::connect('/api/our-impact/', array('controller' => 'impact', 'action' => 'index'));
	Router::connect('/api/get-involved/', array('controller' => 'GetInvolved', 'action' => 'index'));
	Router::connect('/api/get-involved/events', array('controller' => 'GetInvolved', 'action' => 'events'));
	Router::connect('/api/get-involved/video', array('controller' => 'GetInvolved', 'action' => 'video'));
	Router::connect('/api/get-involved/volunteer', array('controller' => 'GetInvolved', 'action' => 'volunteer'));
	Router::connect('/api/get-involved/volunteer-success', array('controller' => 'GetInvolved', 'action' => 'volunteerSuccess'));
	Router::connect('/api/get-involved/facilitator', array('controller' => 'GetInvolved', 'action' => 'facilitator'));
	Router::connect('/api/resources/', array('controller' => 'resources', 'action' => 'index'));
	Router::connect('/api/contact-us/', array('controller' => 'contact', 'action' => 'index'));
	Router::connect('/api/rail/', array('controller' => 'rail', 'action' => 'index'));
	Router::parseExtensions('json');
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	//require CAKE . 'Config' . DS . 'routes.php';
