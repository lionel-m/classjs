<?php

/**
 * Classjs
 * This extension adds the class "no-js" to the html tag and replaces it with the class "js" if JavaScript is enabled.
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   classjs
 * @license   MIT (http://lionel-m.mit-license.org/)
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Classjs' => 'system/modules/classjs/classes/Classjs.php',
));