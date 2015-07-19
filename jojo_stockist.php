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
        global $smarty, $_USERID;
        $content = array();
        
        $stockists = self::getItems();
        $smarty->assign('stockists', $stockists);

        $stockists = Jojo::selectQuery("SELECT * FROM {stockist} ORDER BY st_category,st_order,st_name");
        foreach ($stockists as &$s) {
            $s['st_address'] = trim(nl2br(htmlspecialchars($s['st_address'], ENT_COMPAT, 'UTF-8', false)));
            $s['st_website_display'] = trim($s['st_website'], 'http://');
            $s['st_website'] = $s['st_website'] && strpos($s['st_website'], 'http://')===false ? 'http://' . $s['st_website'] : $s['st_website'];
        }
        $regions = Jojo::selectQuery("SELECT r.* FROM {stockist_region} r ORDER BY r.sr_order");
        foreach ($regions as $k=>&$r) {
            if ($stockists) {
                foreach ($stockists as $k=>$s) {
                    if ($r['region_id']==$s['region_id']) {
                        $r['stockists'][] = $s;
                        unset($stockists[$k]);
                    }
                }
            }
        }
        $tree = Jojo::list2tree($regions, 0, 'region_id', 'region_parentid');
        $smarty->assign('stockist_array', $tree);
        
        $smarty->assign('content', $this->page['pg_body']);
        $content['content']  = $smarty->fetch('jojo_stockists.tpl');
        return $content;
    }

    static function getItems()
    {
        $query = "SELECT * FROM {stockist} s LEFT JOIN {stockist_region} t ON (s.region_id = t.region_id) LEFT JOIN {stockist_country} u ON (t.country_id = u.country_id) ORDER BY u.sc_order,u.sc_name, t.sr_order,t.sr_name, s.st_category,s.st_order,s.st_name";
        $stockists = Jojo::selectQuery($query);
        $countries = false;
        foreach ($stockists as &$s) {
            $s['st_address'] = trim(nl2br(htmlspecialchars($s['st_address'], ENT_COMPAT, 'UTF-8', false)));
            $s['st_website_display'] = trim($s['st_website'], 'http://');
            $s['st_website'] = $s['st_website'] && strpos($s['st_website'], 'http://')===false ? 'http://' . $s['st_website'] : $s['st_website'];
        }
        return $stockists;
    }
    

}