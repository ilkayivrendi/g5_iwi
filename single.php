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
 * The Template for displaying all single posts
 */

$gantry = Gantry\Framework\Gantry::instance();
$theme  = $gantry['theme'];

// We need to render contents of <head> before plugin content gets added.
$context              = Timber::get_context();
$context['page_head'] = $theme->render('partials/page_head.html.twig', $context);

$post            = Timber::query_post();
$context['post'] = $post;
$context['wp_title'] .= ' - ' . $post->title();
$content_width['content-width'] = 900;

Timber::render(['single-' . $post->ID . '.html.twig', 'single-' . $post->post_type . '.html.twig', 'single.html.twig'], $context);
