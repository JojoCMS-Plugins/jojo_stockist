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

/*
This class MUST be renamed to " Jojo_Plugin_" followed by the name of your plugin, otherwise the plugin will not work.

So if you have named your plugin "my_test_plugin" then the classname becomes "Jojo_Plugin_my_test_plugin".
*/
class Jojo_Plugin_Jojo_stockist extends Jojo_Plugin
{
    function _getContent()
    {
        global $smarty;
        $content = array();
        
        $query = "SELECT * FROM stockist s LEFT JOIN stockist_region t ON (s.region_id = t.region_id) LEFT JOIN stockist_country u ON (t.country_id = u.country_id) ORDER BY u.sc_order,u.sc_name, t.sr_order,t.sr_name, s.st_category,s.st_order,s.st_name";
        //$content['title']      = 'TITLE HERE';     //optional title, will be displayed as the H1 heading, amongst other uses. Defaults to whatever was entered in the admin section.
        //$content['seotitle']   = 'SEO TITLE HERE'; //optional SEO title, will be displayed as the main title for the page, and in Google results. Defaults to whatever was entered in the admin section.
        //$content['css']        = '';               //need some CSS code just for this page? Add the code to this variable and it will be included in the document head, just for this page. <style> tags are not required.
        //$content['javascript'] = '';               //Same as for CSS - <script> tags are not required.
        $stockists = Jojo::selectQuery($query);
        
        $smarty->assign('stockists', $stockists);
        $content['content']  = $smarty->fetch('jojo_stockists.tpl');
        return $content;
    }

}