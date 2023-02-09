<?php
/**
 * @copyright   Copyright (C) 2010-2022 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-azure-teemip-adaptor/2.0.0-dev',
	array(
		// Identification
		//
		'label' => 'Azure Datamodel adaptor for TeemIp',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
            'combodo-azure-datamodel/2.0.0-dev',
			'teemip-ip-mgmt/2.7.0||combodo-azure-datamodel/2.0.0-dev',	// Keep 'fake' dependency to insure compilation order is respected
		),
		'mandatory' => false,
		'visible' => false,
        'auto_select' => 'SetupInfo::ModuleIsSelected("combodo-azure-datamodel") && SetupInfo::ModuleIsSelected("teemip-ip-mgmt")',

        // Components
		//
		'datamodel' => array(
			'model.combodo-azure-teemip-adaptor.php', // Contains the PHP code generated by the "compilation" of datamodel.combodo-azure-datamodel.xml
		),
		'webservice' => array(),
		'data.struct' => array(// add your 'structure' definition XML files here,
		),
		'data.sample' => array(// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
		),
	)
);

