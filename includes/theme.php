<?php
/**
 * @package   Gantry5
 * @author    ivrendiTech http://www.ivrendiTech.com
 * @copyright Copyright (C) 2018 ivrendiTech, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

class_exists('\\Gantry\\Framework\\Gantry') or die;

// Define the template.
class GantryTheme extends \Gantry\Framework\Theme
{
}

// Initialize theme stream.
$gantry['platform']->set(
    'streams.gantry-theme.prefixes',
    array('' => array(
        "gantry-themes://{$gantry['theme.name']}/custom",
        "gantry-themes://{$gantry['theme.name']}",
        "gantry-themes://{$gantry['theme.name']}/common"
    ))
);

// Define Gantry services.
$gantry['theme'] = function ($c) {
    return new GantryTheme($c['theme.path'], $c['theme.name']);
};
