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

use Contao\CoreBundle\ContaoCoreBundle;

/**
 * -------------------------------------------------------------------------
 * FRONT END
 * -------------------------------------------------------------------------
 */

if (TL_MODE == 'FE') {
    $GLOBALS['TL_HEAD'][] = '<script>(function(H){H.className=H.className.replace(/\bno-js\b/,\'js\')})(document.documentElement)</script>';
}

/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('ClassJsBundle\Classjs', 'hookOutputFrontendTemplate');
