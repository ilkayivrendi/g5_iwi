<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
 * Third party plugins that hijack the theme will call wp_head() to get the header template.
 * We use this to start our output buffer and render into the views/page-plugin.html.twig template in footer.php
 */
$gantry = Gantry\Framework\Gantry::instance();
$theme  = $gantry['theme'];

// We need to render contents of <head> before plugin content gets added.
$context              = Timber::get_context();
$context['page_head'] = $theme->render('partials/page_head.html.twig', $context);
$context['wp-head'] = wp_head();
$context['post-class'] = post_class();
$context['language_attributes'] = language_attributes();
$context['body-class'] = body_class();
$context['bloginfo'] = Timber::blog_info('charset');
$context['post_format'] = get_post_format();
$context['tags'] = the_tags();
$context['paginate-links'] = paginate_links();
$context['link-pages'] = wp_link_pages();
$context['comments-template'] = comments_template();
$context['comment-form'] = comment_form();
$context['comments'] = wp_list_comments();
$GLOBALS['timberContext'] = $context;
ob_start();
