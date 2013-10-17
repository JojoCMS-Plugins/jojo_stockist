<?php

$default_td['stockist'] = array(
        'td_name' => "stockist",
        'td_primarykey' => "stockist_id",
        'td_displayfield' => "st_name",
        'td_filter' => "yes",
        'td_topsubmit' => "yes",
        'td_addsimilar' => "no",
        'td_deleteoption' => "yes",
        'td_menutype' => "list",
        'td_help' => "Stockists are managed from here.",
        'td_plugin' => "Jojo_Stockist",
    );

$o = 0;

/* Content Tab */
$table = 'stockist';


// stockist id Field
$field = 'stockist_id';
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
$field = 'region_id';
$default_fd[$table][$field] = array(
        'fd_name' => "Region",
        'fd_type' => "dblist",
        'fd_options' => "stockist_region",
        'fd_help' => "A unique ID, automatically assigned by the system",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'st_name';
$default_fd[$table][$field] = array(
        'fd_name' => "Name",
        'fd_type' => "text",
        'fd_help' => "The name of the stockist",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'st_address';
$default_fd[$table][$field] = array(
        'fd_name' => "Address",
        'fd_type' => "textarea",
        'fd_help' => "The address of the stockist",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'st_phone';
$default_fd[$table][$field] = array(
        'fd_name' => "Phone",
        'fd_type' => "text",
        'fd_help' => "The phone number of the stockist",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'st_website';
$default_fd[$table][$field] = array(
        'fd_name' => "Website",
        'fd_type' => "text",
        'fd_help' => "The website of the stockist",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );

// stockist id Field
$field = 'st_category';
$default_fd[$table][$field]['fd_order'] = $o++;
$default_fd[$table][$field]['fd_name'] = 'Category';
$default_fd[$table][$field]['fd_type'] = 'radio';
$default_fd[$table][$field]['fd_options'] = 'Bars & restaurants:Bars & restaurants
Fine wine:Fine wine
Grocery:Grocery';
$default_fd[$table][$field]['fd_size'] = '20';
$default_fd[$table][$field]['fd_help'] = 'Default value of the right scale.';
$default_fd[$table][$field]['fd_tabname'] = 'Content';

// stockist id Field
$field = 'st_order';
$default_fd[$table][$field] = array(
        'fd_name' => "Order",
        'fd_type' => "integer",
        'fd_order' => $o++,
        'fd_tabname' => "Content",
        'fd_mode' => "advanced",
    );
