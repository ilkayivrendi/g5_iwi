<?php
/**
 * @package   Gantry 5 Theme
 * @author    ivrendiTech http://www.ivrendiTech.com
 * @copyright Copyright (C) 2018 ivrendiTech, LLC
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('ABSPATH') or die;

use Timber\Timber;

/*
 * The template for displaying 404 pages (Not Found)
 */

$gantry = Gantry\Framework\Gantry::instance();
$theme  = $gantry['theme'];

$theme->setLayout('_error', true);

// We need to render contents of <head> before plugin content gets added.
$context              = Timber::get_context();
$context['page_head'] = $theme->render('partials/page_head.html.twig', $context);

Timber::render('404.html.twig', $context);
