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
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Classjs', 'hookOutputFrontendTemplate');
?>