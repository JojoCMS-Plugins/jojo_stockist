<?php

$default_td['stockist_region'] = array(
        'td_name' => "stockist_region",
        'td_primarykey' => "region_id",
        'td_displayfield' => "sr_name",
        'td_displayname' => "Region",
        'td_filter' => "yes",
        'td_topsubmit' => "yes",
        'td_addsimilar' => "no",
        'td_deleteoption' => "yes",
        'td_menutype' => "list",
        'td_help' => "News Article Categories are managed from here.",
        'td_plugin' => "Jojo_Stockist",
    );


$o = 0;

/* Content Tab */
$table = 'stockist_region';


// stockist region id Field
$field = 'region_id';
$default_fd[$table][$field] = array(
        'fd_name' => "ID",
        'fd_type' => "integer",
        'fd_readonly' => "1",
        'fd_help' => "A unique ID, automatically assigned by the system",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'sr_name';
$default_fd[$table][$field] = array(
        'fd_name' => "Name",
        'fd_type' => "text",
        'fd_help' => "The name of the region",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'country_id';
$default_fd[$table][$field] = array(
        'fd_name' => "Country",
        'fd_type' => "dblist",
        'fd_options' => "stockist_country",
        'fd_help' => "A unique ID, automatically assigned by the system",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'sr_order';
$default_fd[$table][$field] = array(
        'fd_name' => "Order",
        'fd_type' => "integer",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );
