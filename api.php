<?php
/**
 * Jojo CMS - Empty Plugin
 *
 * Copyright 2007-2008 Jojo CMS
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <mikec@jojocms.org>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @author  Marten Thorand <marten@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package empty_plugin
 */

$_provides['pluginClasses'] = array(
        'jojo_plugin_jojo_stockist' => 'Stockist List page'
        );

/*
//Example option.
//If you need to add an option into Jojo using your plugin, copy-paste this code to make a start.
$_options[] = array(
    'id'          => 'my_example_option',
    'category'    => 'Examples',
    'label'       => 'An example option',
    'description' => 'This is a simple example option.',
    'type'        => 'text',
    'default'     => '',
    'options'     => '',
    'plugin'      => 'empty_plugin'
);
*/