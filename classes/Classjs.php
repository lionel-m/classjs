<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package classjs
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
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
?>