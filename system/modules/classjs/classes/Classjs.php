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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;

/**
 * Class Classjs
 *
 * @author     Tristan Lins, Lionel Maccaud
 * @package    Controller
 */
class Classjs extends \Frontend
{
    public function hookOutputFrontendTemplate($strBuffer, $strTemplate)
    {
        $strBuffer = preg_replace('#<html(.*)( class="(.*)")?(.*)>#U', '<html$1 class="no-js $3"$4>', $strBuffer, 1);
        
        return $strBuffer;
    }
}
