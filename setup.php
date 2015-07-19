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


$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_link='Jojo_Plugin_Jojo_stockist'");
if (!count($data)) {
    echo "Adding <b>Edit Stockists</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Stockists', pg_status='hidden', pg_link='Jojo_Plugin_Jojo_stockist', pg_url='stockists'");
    $parent = Jojo::insertQuery("INSERT INTO {page} SET pg_title='Edit Stockists', pg_link='jojo_plugin_admin_edit', pg_url='admin/edit/stockist'");
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Edit Regions', pg_link='jojo_plugin_admin_edit', pg_url='admin/edit/stockist_region', pg_parent='".$parent."'");
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Edit Countries', pg_link='jojo_plugin_admin_edit', pg_url='admin/edit/stockist_country', pg_parent='".$parent."'");
}

//Add to CONTENT tab (this required for admin pages only)
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_url = 'admin/edit/stockist'");
if ($data[0]['pg_parent'] != $_ADMIN_CONTENT_ID) {
    Jojo::updateQuery("UPDATE {page} SET pg_parent = ? WHERE pageid = ? LIMIT 1", array($_ADMIN_CONTENT_ID, $data[0]['pageid'], ));
    }

