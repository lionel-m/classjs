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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'LionelM',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'LionelM\ClassJsBundle\Classjs' => 'vendor/lionel/classjs/src/Resources/contao/classes/Classjs.php',
));
