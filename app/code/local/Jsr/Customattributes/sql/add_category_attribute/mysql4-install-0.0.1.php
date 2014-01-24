<?php
$this->startSetup();
$this->addAttribute('catalog_category', 'band_sku', array(
    'group'         => 'Band Info',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Band Sku',
    'source'        => '',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '0',
));

$this->addAttribute('catalog_category', 'band_home_url', array(
    'group'         => 'Band Info',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Band Website',
    'source'        => '',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '1',
));


$this->addAttribute('catalog_category', 'band_facebook', array(
    'group'         => 'Band Info',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Band Facebook ID',
    'source'        => '',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '2',
));

$this->addAttribute('catalog_category', 'band_twitter', array(
    'group'         => 'Band Info',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Band Twitter ID',
    'source'        => '',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '3',
));

$this->addAttribute('catalog_category', 'band_youtube', array(
    'group'         => 'Band Info',
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'Band Youtube ID',
    'source'        => '',
    'backend'       => '',
    'visible'       => true,
    'required'      => 0,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'sort_order'    => '4',
));



$this->endSetup();