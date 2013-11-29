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

class Jojo_Plugin_Jojo_stockist extends Jojo_Plugin
{
    function _getContent()
    {
        global $smarty;
        $content = array();
        
        $stockists = self::getItems();
        $smarty->assign('stockists', $stockists);
        $smarty->assign('content', $this->page['pg_body']);
        $content['content']  = $smarty->fetch('jojo_stockists.tpl');
        return $content;
    }

    static function getItems()
    {
        $query = "SELECT * FROM {stockist} s LEFT JOIN {stockist_region} t ON (s.region_id = t.region_id) LEFT JOIN {stockist_country} u ON (t.country_id = u.country_id) ORDER BY u.sc_order,u.sc_name, t.sr_order,t.sr_name, s.st_category,s.st_order,s.st_name";
        $stockists = Jojo::selectQuery($query);
        foreach ($stockists as &$s) {
            $s['st_address'] = trim(nl2br(htmlspecialchars($s['st_address'], ENT_COMPAT, 'UTF-8', false)));
        }
        return $stockists;
    }

}