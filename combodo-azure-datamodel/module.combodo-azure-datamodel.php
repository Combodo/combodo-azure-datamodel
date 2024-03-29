<?php
/**
 * @copyright   Copyright (C) 2010-2022 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-azure-datamodel/2.0.0',
	array(
		// Identification
		//
		'label' => 'Azure Datamodel',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/2.7.0',
			'itop-service-mgmt/2.7.0|itop-service-mgmt-provider/2.7.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.combodo-azure-datamodel.php', // Contains the PHP code generated by the "compilation" of datamodel.combodo-azure-datamodel.xml
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
			'direct_access' => array(
				'label' => 'Azure',
				'url' => 'https://portal.azure.com/#@$azuretenant$/$azureid$/overview',
				'icon' => 'fas fa-cloud-upload-alt',
				'tooltip' => 'Lookup directly in Azure',
			),
		),
	)
);

