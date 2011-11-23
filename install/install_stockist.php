<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
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
 * @package jojo_article
 */

$table = 'stockist';
$query = "
    CREATE TABLE {stockist} (
        `stockist_id` int(11) NOT NULL auto_increment,
        `region_id` int(11) NOT NULL default '0',
        `st_name` varchar(255) NOT NULL default '',
        `st_address` text NOT NULL default '',
        `st_phone` varchar(255) NOT NULL default '',
        `st_website` varchar(255) NOT NULL default '',
        `st_category` ENUM('Bars & restaurants','Fine wine','Grocery') NOT NULL default 1,
        `st_order` int(11) NOT NULL default 0,
        PRIMARY KEY  (`stockist_id`)
        ) ENGINE=MyISAM;
";

/* Check table structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("jojo_stockist: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("jojo_stockist: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) Jojo::printTableDifference($table, $result['different']);


$table = 'stockist_region';
$query = "
CREATE TABLE {stockist_region} (
	`region_id` int(11) NOT NULL auto_increment,
	`country_id` int(11) NOT NULL default '0',
	`sr_name` varchar(255) NOT NULL default '',
	`sr_order` int(11) NOT NULL default '0',
	PRIMARY KEY (`region_id`)
	) ENGINE=MyISAM;
";

/* Check table structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("jojo_stockist_region: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("jojo_stockist_region: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) Jojo::printTableDifference($table, $result['different']);


$table = 'stockist_country';
$query = "
CREATE TABLE {stockist_country} (
	`country_id` int(11) NOT NULL auto_increment,
	`sc_name` varchar(255) NOT NULL default '',
	`sc_order` int(11) NOT NULL default '0',
	PRIMARY KEY (`country_id`)
	) ENGINE=MyISAM;
";

/* Check table structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("jojo_stockist_country: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("jojo_stockist_country: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) Jojo::printTableDifference($table, $result['different']);



