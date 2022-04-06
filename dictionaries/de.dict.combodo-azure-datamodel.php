<?php
/**
 * @copyright   Copyright (C) 2010-2022 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Location
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Location/Attribute:azureid' => 'Azure ID',
	'Class:Location/Attribute:azureid+' => '',
	'Class:Location/Attribute:code' => 'Code',
	'Class:Location/Attribute:code+' => '',
));

//
// AzureIdentity
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureIdentity' => 'Azure Identity',
	'Class:AzureIdentity+' => '',
	'Class:AzureIdentity/Name' => '%1$s',
	'Class:AzureIdentity/Name+' => '',
));

//
// AzureTenant
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureTenant' => 'Azure Tenant',
	'Class:AzureTenant+' => '',
	'Class:AzureTenant/Name' => '%1$s',
	'Class:AzureTenant/Name+' => '',
	'AzureTenant:baseinfo' => 'General information',
	'AzureTenant:otherinfo' => 'Other information',
	'AzureTenant:moreinfo' => 'More information',
	'Class:AzureTenant/Attribute:azuregroups_list' => 'Groups',
	'Class:AzureTenant/Attribute:azuregroups_list+' => '',
	'Class:AzureTenant/Attribute:azureusers_list' => 'Users',
	'Class:AzureTenant/Attribute:azureusers_list+' => '',
	'Class:AzureTenant/Attribute:country' => 'Country',
	'Class:AzureTenant/Attribute:country+' => 'Country/Region',
	'Class:AzureTenant/Attribute:domain' => 'Domain name',
	'Class:AzureTenant/Attribute:domain+' => 'Initial domain name',
	'Class:AzureTenant/Attribute:tenantid' => 'ID',
	'Class:AzureTenant/Attribute:tenantid+' => '',
	'Class:AzureTenant/Attribute:type' => '',
	'Class:AzureTenant/Attribute:type+' => 'AAD - B2C',
	'Class:AzureTenant/Attribute:type/Value:AAD - B2C' => 'Azure Active Directory(B2C)',
	'Class:AzureTenant/Attribute:type/Value:AAD' => 'Azure Active Directory',
));

//
// AzureSubscription
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureSubscription' => 'Subscription',
	'Class:AzureSubscription+' => 'Azure Subscription',
	'Class:AzureSubscription/Name' => '%1$s',
	'Class:AzureSubscription/Name+' => '',
	'AzureSubscription:baseinfo' => 'General information',
	'AzureSubscription:moreinfo' => 'More information',
	'AzureSubscription:Date' => 'Dates',
	'AzureSubscription:otherinfo' => 'Other information',
	'AzureSubscription:collectors' => 'Collector option',
	'Class:AzureSubscription/Attribute:azure_status' => 'Azure status',
	'Class:AzureSubscription/Attribute:azure_status+' => '',
	'Class:AzureSubscription/Attribute:azurecis_list' => 'Azure CIs',
	'Class:AzureSubscription/Attribute:azurecis_list+' => '',
	'Class:AzureSubscription/Attribute:azuregroups_list' => 'Groups',
	'Class:AzureSubscription/Attribute:azuregroups_list+' => '',
	'Class:AzureSubscription/Attribute:azureid' => 'Azure ID',
	'Class:AzureSubscription/Attribute:azureid+' => 'Azure ID of this object',
	'Class:AzureSubscription/Attribute:azureresourcegroups_list' => 'Resource Groups',
	'Class:AzureSubscription/Attribute:azureresourcegroups_list+' => '',
	'Class:AzureSubscription/Attribute:azuretenant_id' => 'Tenant',
	'Class:AzureSubscription/Attribute:azuretenant_id+' => 'Managing tenant',
	'Class:AzureSubscription/Attribute:azuretenant_name' => 'Tenant name',
	'Class:AzureSubscription/Attribute:azuretenant_name+' => '',
	'Class:AzureSubscription/Attribute:azureusers_list' => 'Users',
	'Class:AzureSubscription/Attribute:azureusers_list+' => '',
	'Class:AzureSubscription/Attribute:discover_objects' => 'Discover objects',
	'Class:AzureSubscription/Attribute:discover_objects+' => 'Discover objects link to this subscription',
	'Class:AzureSubscription/Attribute:discover_objects/Value:no' => 'No',
	'Class:AzureSubscription/Attribute:discover_objects/Value:yes' => 'Yes',
	'Class:AzureSubscription/Attribute:location_id' => 'Location',
	'Class:AzureSubscription/Attribute:location_id+' => '',
	'Class:AzureSubscription/Attribute:offer' => 'Offer',
	'Class:AzureSubscription/Attribute:offer+' => '',
	'Class:AzureSubscription/Attribute:providercontract_id' => 'MSP contract',
	'Class:AzureSubscription/Attribute:providercontract_id+' => '',
	'Class:AzureSubscription/Attribute:providercontract_sla' => 'SLA',
	'Class:AzureSubscription/Attribute:providercontract_sla+' => '',
	'Class:AzureSubscription/Attribute:subscriptionid' => 'ID',
	'Class:AzureSubscription/Attribute:subscriptionid+' => '',
));

//
// AzureResourceGroup
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureResourceGroup' => 'Resource Group',
	'Class:AzureResourceGroup+' => '',
	'Class:AzureResource/Name' => '%1$s',
	'Class:AzureResource/Name+' => '',
	'AzureResourceGroup:baseinfo' => 'General information',
	'AzureResourceGroup:moreinfo' => 'More information',
	'AzureResourceGroup:otherinfo' => 'Other information',
	'Class:AzureResourceGroup/Attribute:auresubscription_provider_id' => 'Subscription provider',
	'Class:AzureResourceGroup/Attribute:azurecomputes_list' => 'Computes',
	'Class:AzureResourceGroup/Attribute:azurecomputes_list+' => '',
	'Class:AzureResourceGroup/Attribute:azurecontainers_list' => 'Containers',
	'Class:AzureResourceGroup/Attribute:azurecontainers_list+' => '',
	'Class:AzureResourceGroup/Attribute:azuredbs_list' => 'DBs',
	'Class:AzureResourceGroup/Attribute:azuredbs_list+' => '',
	'Class:AzureResourceGroup/Attribute:azureid' => 'ID Azure',
	'Class:AzureResourceGroup/Attribute:azureidentitys_list' => 'Identities',
	'Class:AzureResourceGroup/Attribute:azureidentitys_list+' => '',
	'Class:AzureResourceGroup/Attribute:azureinterfaces_list' => 'NICs',
	'Class:AzureResourceGroup/Attribute:azureinterfaces_list+' => 'Network cards',
	'Class:AzureResourceGroup/Attribute:azureiots_list' => 'IoTs',
	'Class:AzureResourceGroup/Attribute:azureiots_list+' => '',
	'Class:AzureResourceGroup/Attribute:azureloadbalancers_list' => 'Load balancers',
	'Class:AzureResourceGroup/Attribute:azurenetworkings_list' => 'Networking',
	'Class:AzureResourceGroup/Attribute:azurenetworkings_list+' => '',
	'Class:AzureResourceGroup/Attribute:azuresecuritys_list' => 'Security',
	'Class:AzureResourceGroup/Attribute:azuresecuritys_list+' => '',
	'Class:AzureResourceGroup/Attribute:azurestorages_list' => 'Storage',
	'Class:AzureResourceGroup/Attribute:azurestorages_list+' => '',
	'Class:AzureResourceGroup/Attribute:azuresubscription_id' => 'Subscription',
	'Class:AzureResourceGroup/Attribute:azuresubscription_name' => 'Subscription name',
	'Class:AzureResourceGroup/Attribute:azuresubscription_subscriptionid' => 'Subscription Azure ID',
	'Class:AzureResourceGroup/Attribute:azuretenant_name' => 'Azuretenant name',
	'Class:AzureResourceGroup/Attribute:azuretenant_name+' => '',
	'Class:AzureResourceGroup/Attribute:azurevirtualmachines_list' => 'VMs',
	'Class:AzureResourceGroup/Attribute:azurewebs_list' => 'Web',
	'Class:AzureResourceGroup/Attribute:azurewebs_list+' => '',
	'Class:AzureResourceGroup/Attribute:business_criticity' => 'Business criticality',
	'Class:AzureResourceGroup/Attribute:business_criticity+' => '',
	'Class:AzureResourceGroup/Attribute:business_criticity/Value:high' => 'High',
	'Class:AzureResourceGroup/Attribute:business_criticity/Value:low' => 'Low',
	'Class:AzureResourceGroup/Attribute:business_criticity/Value:medium' => 'Medium',
	'Class:AzureResourceGroup/Attribute:contacts_list' => 'Contacts',
	'Class:AzureResourceGroup/Attribute:contacts_list+' => '',
	'Class:AzureResourceGroup/Attribute:description' => 'Description',
	'Class:AzureResourceGroup/Attribute:description+' => '',
	'Class:AzureResourceGroup/Attribute:documents_list' => 'Documents',
	'Class:AzureResourceGroup/Attribute:documents_list+' => '',
	'Class:AzureResourceGroup/Attribute:location_id' => 'Location',
	'Class:AzureResourceGroup/Attribute:move2production' => 'Move to production date',
	'Class:AzureResourceGroup/Attribute:move2production+' => '',
	'Class:AzureResourceGroup/Attribute:name' => 'Name',
	'Class:AzureResourceGroup/Attribute:name+' => '',
	'Class:AzureResourceGroup/Attribute:org_id' => 'Organization',
	'Class:AzureResourceGroup/Attribute:org_id+' => '',
	'Class:AzureResourceGroup/Attribute:organization_name' => 'Organization name',
	'Class:AzureResourceGroup/Attribute:organization_name+' => '',
	'Class:AzureResourceGroup/Attribute:provisioning_status' => 'Provisioning status',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
));

//
// lnkAzureResourceGroupToContact
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkAzureResourceGroupToContact' => 'Link Azure Resource Group/Contact',
	'Class:lnkAzureResourceGroupToContact+' => '',
	'Class:lnkAzureResourceGroupToContact/Name' => '%1$s - %2$s',
	'Class:lnkAzureResourceGroupToContact/Name+' => '',
	'Class:lnkAzureResourceGroupToContact/Attribute:azureresourcegroup_id' => 'Azure resource group',
	'Class:lnkAzureResourceGroupToContact/Attribute:contact_id' => 'Contact',
));

//
// lnkAzureResourceGroupToDocument
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkAzureResourceGroupToDocument' => 'Link Azure Resource Group/Document',
	'Class:lnkAzureResourceGroupToDocument+' => '',
	'Class:lnkAzureResourceGroupToDocument/Name' => '%1$s - %2$s',
	'Class:lnkAzureResourceGroupToDocument/Name+' => '',
	'Class:lnkAzureResourceGroupToDocument/Attribute:azureresourcegroup_id' => 'Azure resource group',
	'Class:lnkAzureResourceGroupToDocument/Attribute:document_id' => 'Document',
));

//
// AzureCI
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureCI' => 'Azure CI',
	'Class:AzureCI+' => '',
	'AzureCI:baseinfo' => 'General information',
	'AzureCI:moreinfo' => 'More information',
	'AzureCI:date' => 'Dates',
	'AzureCI:otherinfo' => 'Other information',
	'Class:AzureCI/Attribute:auresubscription_provider_id' => 'MSP',
	'Class:AzureCI/Attribute:auresubscription_provider_id+' => 'Provider on the subscription',
	'Class:AzureCI/Attribute:azureavailabilitytype' => 'Availability type',
	'Class:AzureCI/Attribute:azureavailabilitytype+' => 'Availability of the Azure component on the zones',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:1' => 'Zone 1',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:2' => 'Zone 2',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:3' => 'Zone 3',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:interzone' => 'Interzone redundancy',
	'Class:AzureCI/Attribute:azureid' => 'ID Azure',
	'Class:AzureCI/Attribute:azureid+' => 'Object ID',
	'Class:AzureCI/Attribute:azureresourcegroup_id' => 'Resource group',
	'Class:AzureCI/Attribute:azureresourcegroup_id+' => 'Resource group Azure',
	'Class:AzureCI/Attribute:azuresubscription_id' => 'Subscription',
	'Class:AzureCI/Attribute:azuresubscription_id+' => 'Azure subscription',
	'Class:AzureCI/Attribute:azuresubscription_name' => 'Azure subscription name',
	'Class:AzureCI/Attribute:azuresubscription_name+' => '',
	'Class:AzureCI/Attribute:azuresubscription_subscriptionid' => 'Azure subscription ID',
	'Class:AzureCI/Attribute:azuresubscription_subscriptionid+' => '',
	'Class:AzureCI/Attribute:azuretenant_name' => 'Tenant name',
	'Class:AzureCI/Attribute:azuretenant_name+' => '',
	'Class:AzureCI/Attribute:contract_id' => 'Subscription',
	'Class:AzureCI/Attribute:contract_id+' => 'Azure subscription',
	'Class:AzureCI/Attribute:location_id' => 'Location',
	'Class:AzureCI/Attribute:management_url' => 'Management URL',
	'Class:AzureCI/Attribute:provisioning_status' => 'Provisioning status',
	'Class:AzureCI/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureCI/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureCI/Attribute:provisioning_status/Value:disabled' => 'Disabled',
	'Class:AzureCI/Attribute:provisioning_status/Value:dropping' => 'Dropping',
	'Class:AzureCI/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureCI/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureCI/Attribute:provisioning_status/Value:ready' => 'Ready',
	'Class:AzureCI/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureCI/Attribute:schneiderid' => 'Schneider ID',
	'Class:AzureCI/Attribute:schneiderid+' => '',
	'Class:AzureCI/Attribute:secomponentinstances_list' => 'Component instances',
	'Class:AzureCI/Attribute:secomponents_list' => 'Component',
	'Class:AzureCI/Attribute:sefoundation_id' => 'Foundation',
	'Class:AzureCI/Attribute:sefoundation_id+' => '',
	'Class:AzureCI/Attribute:status' => 'Status',
	'Class:AzureCI/Attribute:status/Value:implementation' => 'implementation',
	'Class:AzureCI/Attribute:status/Value:inactif' => 'inactive',
	'Class:AzureCI/Attribute:status/Value:obsolete' => 'obsolete',
	'Class:AzureCI/Attribute:status/Value:production' => 'production',
	'Class:AzureCI/Attribute:status/Value:stock' => 'stock',
	'Class:AzureCI/Attribute:status/Value:stopped' => 'stopped',
));

//
// AzureDB
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureDB' => 'Azure DB',
	'Class:AzureDB+' => '',
	'Class:AzureDB/Name' => '%1$s',
	'Class:AzureDB/Attribute:server_name' => 'Server name',
	'Class:AzureDB/Attribute:server_name+' => '',
	'Class:AzureDB/Attribute:version' => 'Version',
	'Class:AzureDB/Attribute:version+' => '',
));

//
// AzureDBServer
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureDBServer' => 'Azure DB Server',
	'Class:AzureDBServer+' => '',
	'Class:AzureDBServer/Name' => '%1$s',
	'Class:AzureDBServer/Attribute:azuremariadbs_list' => 'MariaDBs',
	'Class:AzureDBServer/Attribute:azuremariadbs_list+' => '',
	'Class:AzureDBServer/Attribute:capacity' => 'Capacity (vCPUs)',
	'Class:AzureDBServer/Attribute:capacity+' => '',
	'Class:AzureDBServer/Attribute:fqdn' => 'FQDN',
	'Class:AzureDBServer/Attribute:fqdn+' => '',
	'Class:AzureDBServer/Attribute:storage' => 'Storage (GB)',
	'Class:AzureDBServer/Attribute:storage+' => '',
	'Class:AzureDBServer/Attribute:tier' => 'Tier',
	'Class:AzureDBServer/Attribute:tier+' => '',
	'Class:AzureDBServer/Attribute:type' => 'Type',
	'Class:AzureDBServer/Attribute:type+' => '',
	'Class:AzureDBServer/Attribute:type/Value:mariadb' => 'MariaDB',
	'Class:AzureDBServer/Attribute:type/Value:mssql' => 'SQL',
	'Class:AzureDBServer/Attribute:type/Value:mysql' => 'MySQL',
	'Class:AzureDBServer/Attribute:type/Value:postgre' => 'PostgreSQL',
	'Class:AzureDBServer/Attribute:version' => 'Version',
	'Class:AzureDBServer/Attribute:version+' => '',
));

//
// AzureMariaDB
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureMariaDB' => 'MariaDB Database',
	'Class:AzureMariaDB+' => 'Azure Database for MariaDB',
	'Class:AzureMariaDB/Name' => '%1$s',
	'Class:AzureMariaDB/Attribute:azure_status' => 'Azure status',
	'Class:AzureMariaDB/Attribute:azure_status+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_capacity' => 'Capacity (vCPUs)',
	'Class:AzureMariaDB/Attribute:azuredbserver_capacity+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_fqdn' => 'DB Server name',
	'Class:AzureMariaDB/Attribute:azuredbserver_fqdn+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_id' => 'DB Server',
	'Class:AzureMariaDB/Attribute:azuredbserver_id+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_name' => 'Azure DB Server name',
	'Class:AzureMariaDB/Attribute:azuredbserver_name+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_storage' => 'Storage (GB)',
	'Class:AzureMariaDB/Attribute:azuredbserver_storage+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_tier' => 'Tier',
	'Class:AzureMariaDB/Attribute:azuredbserver_tier+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_version' => 'Version',
	'Class:AzureMariaDB/Attribute:azuredbserver_version+' => '',
));

//
// AzurePostgreSQL
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzurePostgreSQL' => 'PostgreSQL',
	'Class:AzurePostgreSQL+' => '',
	'Class:AzurePostgreSQL/Name' => '%1$s',
	'Class:AzurePostgreSQL/Attribute:azure_status' => 'Azure status',
	'Class:AzurePostgreSQL/Attribute:azure_status+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_capacity' => 'Capacity (vCPUs)',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_capacity+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_fqdn' => 'DB Server name',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_fqdn+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_id' => 'DB Server',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_id+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_name' => 'Azure DB Server name',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_name+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_storage' => 'Storage (GB)',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_storage+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_tier' => 'Tier',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_tier+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_version' => 'Version',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_version+' => '',
));

//
// AzureMySQL
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureMySQL' => 'MySQL Database',
	'Class:AzureMySQL+' => 'Azure Database for MySQL',
	'Class:AzureMySQL/Name' => '%1$s',
	'Class:AzureMySQL/Attribute:azure_status' => 'Azure status',
	'Class:AzureMySQL/Attribute:azure_status+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_capacity' => 'Capacity (vCPUs)',
	'Class:AzureMySQL/Attribute:azuredbserver_capacity+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_fqdn' => 'DB Server name',
	'Class:AzureMySQL/Attribute:azuredbserver_fqdn+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_id' => 'DB Server',
	'Class:AzureMySQL/Attribute:azuredbserver_id+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_name' => 'Azure DB Server name',
	'Class:AzureMySQL/Attribute:azuredbserver_name+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_storage' => 'Storage (GB)',
	'Class:AzureMySQL/Attribute:azuredbserver_storage+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_tier' => 'Tier',
	'Class:AzureMySQL/Attribute:azuredbserver_tier+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_version' => 'Version',
	'Class:AzureMySQL/Attribute:azuredbserver_version+' => '',
));

//
// AzureMSSQL
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureMSSQL' => 'MS SQL Database',
	'Class:AzureMSSQL+' => 'Azure Database for Microsoft SQL',
	'Class:AzureMSSQL/Name' => '%1$s',
	'Class:AzureMSSQL/Attribute:azure_status' => 'Azure status',
	'Class:AzureMSSQL/Attribute:azure_status+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_capacity' => 'Capacity (vCPUs)',
	'Class:AzureMSSQL/Attribute:azuredbserver_capacity+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_fqdn' => 'DB Server name',
	'Class:AzureMSSQL/Attribute:azuredbserver_fqdn+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_id' => 'DB Server',
	'Class:AzureMSSQL/Attribute:azuredbserver_id+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_name' => 'Azure DB Server name',
	'Class:AzureMSSQL/Attribute:azuredbserver_name+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_storage' => 'Storage (GB)',
	'Class:AzureMSSQL/Attribute:azuredbserver_storage+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_tier' => 'Tier',
	'Class:AzureMSSQL/Attribute:azuredbserver_tier+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_version' => 'Version',
	'Class:AzureMSSQL/Attribute:azuredbserver_version+' => '',
));

//
// AzureCompute
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureCompute' => 'Azure Compute',
	'Class:AzureCompute+' => '',
	'Class:AzureCompute/Name' => '%1$s',
));

//
// AzureVirtualMachine
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureVirtualMachine' => 'Azure VM',
	'Class:AzureVirtualMachine+' => 'Azure Virtual Machine',
	'Class:AzureVirtualMachine/Name' => '%1$s',
	'Class:AzureVirtualMachine/Attribute:azureavailability_id' => 'Availability option',
	'Class:AzureVirtualMachine/Attribute:azureimage_id' => 'Azure image',
	'Class:AzureVirtualMachine/Attribute:azureimage_osfamily_id' => 'Image - OS family',
	'Class:AzureVirtualMachine/Attribute:azureimage_osfamily_id+' => 'OS family of the starting image',
	'Class:AzureVirtualMachine/Attribute:azureimage_oslicence_id' => 'Image - OS License',
	'Class:AzureVirtualMachine/Attribute:azureimage_oslicence_id+' => 'OS license of the initial image',
	'Class:AzureVirtualMachine/Attribute:azureimage_osversion_id' => 'Image - OS Version',
	'Class:AzureVirtualMachine/Attribute:azureimage_osversion_id+' => 'OS version of the initial image',
	'Class:AzureVirtualMachine/Attribute:azurenics_list' => 'Network interfaces',
	'Class:AzureVirtualMachine/Attribute:azurevmdisks_list' => 'Disk',
	'Class:AzureVirtualMachine/Attribute:azurevmsize' => 'Size(text)',
	'Class:AzureVirtualMachine/Attribute:azurevmsize+' => '',
	'Class:AzureVirtualMachine/Attribute:azurevmsize_core_number' => 'vCPU',
	'Class:AzureVirtualMachine/Attribute:azurevmsize_core_number+' => 'Virtual processors',
	'Class:AzureVirtualMachine/Attribute:azurevmsize_memory' => 'RAM',
	'Class:AzureVirtualMachine/Attribute:azurevmsize_memory+' => 'RAM',
	'Class:AzureVirtualMachine/Attribute:backup_policy' => 'Backup policy',
	'Class:AzureVirtualMachine/Attribute:backup_policy+' => '',
	'Class:AzureVirtualMachine/Attribute:drp' => 'DRP',
	'Class:AzureVirtualMachine/Attribute:drp+' => 'Disaster Recovery Plan',
	'Class:AzureVirtualMachine/Attribute:flag_backup' => 'Backup',
	'Class:AzureVirtualMachine/Attribute:flag_backup+' => '',
	'Class:AzureVirtualMachine/Attribute:flag_supervision' => 'Supervision',
	'Class:AzureVirtualMachine/Attribute:flag_supervision+' => '',
	'Class:AzureVirtualMachine/Attribute:managementip' => 'Management IP',
	'Class:AzureVirtualMachine/Attribute:managementip+' => 'Management IP address',
	'Class:AzureVirtualMachine/Attribute:osfamily_id' => 'OS family',
	'Class:AzureVirtualMachine/Attribute:oslicence_id' => 'OS license',
	'Class:AzureVirtualMachine/Attribute:osversion' => 'OS version',
	'Class:AzureVirtualMachine/Attribute:osversion+' => '',
	'Class:AzureVirtualMachine/Attribute:osversion_id' => 'OS version',
	'Class:AzureVirtualMachine/Attribute:provisioning_status' => 'Provisioning status',
	'Class:AzureVirtualMachine/Attribute:provisioning_status+' => '',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureVirtualMachine/Attribute:publisher_id' => 'Publisher',
	'Class:AzureVirtualMachine/Attribute:softwareinstances_list' => 'Software instances',
	'Class:AzureVirtualMachine/Attribute:zone_id' => 'Zone',
	'Class:AzureVirtualMachine/Attribute:zone_id+' => 'Availability zone',
));

//
// AzureNetworking
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureNetworking' => 'Azure Networking',
	'Class:AzureNetworking+' => '',
	'Class:AzureNetworking/Name' => '%1$s',
));

//
// AzureVNet
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureVNet' => 'VNet',
	'Class:AzureVNet+' => 'Virtual network Azure',
	'Class:AzureVNet/Name' => '%1$s',
	'Class:AzureVNet/Attribute:address_space' => 'Address space',
	'Class:AzureVNet/Attribute:address_space+' => '',
	'Class:AzureVNet/Attribute:azurenetworkinterfaces_list' => 'Interfaces',
	'Class:AzureVNet/Attribute:azurenetworkinterfaces_list+' => '',
));

//
// AzureNetworkInterface
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureNetworkInterface' => 'Network Card',
	'Class:AzureNetworkInterface+' => 'Azure network card',
	'Class:AzureNetworkInterface/Name' => '%1$s',
	'Class:AzureNetworkInterface/Attribute:azureresourcegroup_id' => 'Resource group',
	'Class:AzureNetworkInterface/Attribute:azureresourcegroup_id+' => 'Azure resource group',
	'Class:AzureNetworkInterface/Attribute:azurevirtualmachine_id' => 'Virtual machine',
	'Class:AzureNetworkInterface/Attribute:azurevnet_id' => 'VNet',
	'Class:AzureNetworkInterface/Attribute:azurevnets_list' => 'VNets',
	'Class:AzureNetworkInterface/Attribute:azurevnets_list+' => '',
	'Class:AzureNetworkInterface/Attribute:contract_id' => 'Subscription',
	'Class:AzureNetworkInterface/Attribute:location_id' => 'Region',
	'Class:AzureNetworkInterface/Attribute:move2production' => 'Production start date',
	'Class:AzureNetworkInterface/Attribute:org_id' => 'Organization',
	'Class:AzureNetworkInterface/Attribute:primaryprivateip' => 'Primary private IP',
	'Class:AzureNetworkInterface/Attribute:primarypublicip' => 'Primary public IP',
	'Class:AzureNetworkInterface/Attribute:provisioning_status' => 'Provisioning status',
	'Class:AzureNetworkInterface/Attribute:provisioning_status+' => '',
	'Class:AzureNetworkInterface/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureNetworkInterface/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureNetworkInterface/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureNetworkInterface/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureNetworkInterface/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureNetworkInterface/Attribute:secondaryprivateip1' => 'Secondary private IP #1',
	'Class:AzureNetworkInterface/Attribute:secondaryprivateip2' => 'Secondary private IP #2',
	'Class:AzureNetworkInterface/Attribute:secondarypublicip1' => 'Secondary public IP #1',
	'Class:AzureNetworkInterface/Attribute:secondarypublicip2' => 'Secondary public IP #2',
));

//
// lnkAzureNetworkInterfaceToAzureVNet
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:lnkAzureNetworkInterfaceToAzureVNet' => 'Link Azure Network interface/Azure VNet ',
	'Class:lnkAzureNetworkInterfaceToAzureVNet/Name' => '%1$s - %2$s',
	'Class:lnkAzureNetworkInterfaceToAzureVNet/Attribute:azurenetworkinterface_id' => 'Azure Network interface',
	'Class:lnkAzureNetworkInterfaceToAzureVNet/Attribute:azurevnet_id' => 'VNet',
));

//
// AzureLoadBalancer
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureLoadBalancer' => 'Load Balancer',
	'Class:AzureLoadBalancer' => 'Azure Load Balancer',
	'Class:AzureLoadBalancer/Name' => '%1$s',
	'Class:AzureLoadBalancer/Attribute:ipaddress' => 'Front IP address',
	'Class:AzureLoadBalancer/Attribute:sku' => 'SKU',
	'Class:AzureLoadBalancer/Attribute:sku/Value:basic' => 'Basic',
	'Class:AzureLoadBalancer/Attribute:sku/Value:standard' => 'Standard',
	'Class:AzureLoadBalancer/Attribute:type' => 'Type',
	'Class:AzureLoadBalancer/Attribute:type/Value:internal' => 'internal',
	'Class:AzureLoadBalancer/Attribute:type/Value:public' => 'public',
	'Class:AzureLoadBalancer/Attribute:zone_id' => 'Zone',
	'Class:AzureLoadBalancer/Attribute:zone_id+' => 'Azure availability Zone',
));

//
// AzureVNetGateway
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureVNetGateway' => 'VNet Gateway',
	'Class:AzureVNetGateway+' => 'Azure Virtual Network Gateway',
	'Class:AzureVNetGateway/Name' => '%1$s',
));

//
// AzureWeb
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureWeb' => 'AzureWeb',
	'Class:AzureWeb+' => '',
	'Class:AzureWeb/Name' => '%1$s',
));

//
// AzureAppService
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureAppService' => 'App Service',
	'Class:AzureAppService+' => '',
	'Class:AzureAppService/Name' => '%1$s',
	'Class:AzureAppService/Attribute:app_service_plan' => 'App service plan',
	'Class:AzureAppService/Attribute:app_service_plan+' => '',
	'Class:AzureAppService/Attribute:azure_status' => 'Azure status',
	'Class:AzureAppService/Attribute:azure_status+' => '',
	'Class:AzureAppService/Attribute:azurestorageaccounts_list' => 'Storage accounts',
	'Class:AzureAppService/Attribute:azurestorageaccounts_list+' => '',
	'Class:AzureAppService/Attribute:url' => 'URL',
	'Class:AzureAppService/Attribute:url+' => '',
));

//
// AzureContainer
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureContainer' => 'Azure Container',
	'Class:AzureContainer+' => '',
	'Class:AzureContainer/Name' => '%1$s',
));

//
// AzureKubernetesService
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureKubernetesService' => 'Kubernetes Service(AKS)',
	'Class:AzureKubernetesService+' => 'Azure Kubernetes Service(AKS)',
	'Class:AzureKubernetesService/Name' => '%1$s',
	'Class:AzureKubernetesService/Attribute:azurevmsize_id' => 'Node Size',
	'Class:AzureKubernetesService/Attribute:azurevmsize_id+' => '',
	'Class:AzureKubernetesService/Attribute:fqdn' => 'FQDN',
	'Class:AzureKubernetesService/Attribute:fqdn+' => '',
	'Class:AzureKubernetesService/Attribute:max_agent_pools' => 'Max agent pools',
	'Class:AzureKubernetesService/Attribute:max_agent_pools+' => '',
	'Class:AzureKubernetesService/Attribute:scale_method' => 'Scale method',
	'Class:AzureKubernetesService/Attribute:scale_method+' => '',
	'Class:AzureKubernetesService/Attribute:scale_method/Value:auto' => 'autoscale',
	'Class:AzureKubernetesService/Attribute:scale_method/Value:manual' => 'manual',
	'Class:AzureKubernetesService/Attribute:version' => 'Version',
	'Class:AzureKubernetesService/Attribute:version+' => 'Kubernetes version',
	'Class:AzureKubernetesService/Attribute:loadbalancer_sku' => 'Load balancer SKU',
	'Class:AzureKubernetesService/Attribute:loadbalancer_sku+' => 'The load balancer sku for the managed cluster',
	'Class:AzureKubernetesService/Attribute:outbound_type' => 'Outbound type',
	'Class:AzureKubernetesService/Attribute:outbound_type+' => 'The outbound (egress) routing method',
));

//
// AzureStorage
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureStorage' => 'Azure Storage',
	'Class:AzureStorage+' => '',
	'Class:AzureStorage/Name' => '%1$s',
));

//
// AzureStorageAccount
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureStorageAccount' => 'Storage Account',
	'Class:AzureStorageAccount+' => 'Azure Storage Account',
	'Class:AzureStorageAccount/Name' => '%1$s',
	'Class:AzureStorageAccount/Attribute:azureappservice_id' => 'App service',
	'Class:AzureStorageAccount/Attribute:azureappservice_id+' => '',
	'Class:AzureStorageAccount/Attribute:tier' => 'Acess tier',
	'Class:AzureStorageAccount/Attribute:tier+' => '',
	'Class:AzureStorageAccount/Attribute:type' => 'Type',
	'Class:AzureStorageAccount/Attribute:type+' => '',
	'Class:AzureStorageAccount/Attribute:type/Value:blob' => 'Blob',
	'Class:AzureStorageAccount/Attribute:type/Value:queue' => 'Queue',
	'Class:AzureStorageAccount/Attribute:type/Value:table' => 'Table',
	'Class:AzureStorageAccount/Attribute:type/Value:file' => 'File',
));

//
// AzureDisk
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:AzureDisk' => 'Disk',
	'Class:AzureDisk+' => 'Azure Disk',
	'Class:AzureDisk/Name' => '%1$s',
	'Class:AzureDisk/Attribute:azuredisktype_id' => 'Size type',
	'Class:AzureDisk/Attribute:azurestatus' => 'State',
	'Class:AzureDisk/Attribute:azurestatus+' => '',
	'Class:AzureDisk/Attribute:azurestatus/Value:activesas' => 'ActiveSAS',
	'Class:AzureDisk/Attribute:azurestatus/Value:activeupload' => 'ActiveUpload',
	'Class:AzureDisk/Attribute:azurestatus/Value:attached' => 'Attached',
	'Class:AzureDisk/Attribute:azurestatus/Value:readytoupload' => 'Ready to upload',
	'Class:AzureDisk/Attribute:azurestatus/Value:reserved' => 'Reserved',
	'Class:AzureDisk/Attribute:azurestatus/Value:unattached' => 'Unattached',
	'Class:AzureDisk/Attribute:azurevirtualmachine_id' => 'Azure VM',
	'Class:AzureDisk/Attribute:datatype' => 'Data type',
	'Class:AzureDisk/Attribute:datatype+' => 'Type of data on this disk',
	'Class:AzureDisk/Attribute:datatype/Value:data' => 'Datas',
	'Class:AzureDisk/Attribute:datatype/Value:os' => 'OS',
	'Class:AzureDisk/Attribute:datatype/Value:temp' => 'Temporary',
	'Class:AzureDisk/Attribute:encryption' => 'Encryption',
	'Class:AzureDisk/Attribute:encryption+' => '',
	'Class:AzureDisk/Attribute:encryption/Value:enabled' => 'Enabled',
	'Class:AzureDisk/Attribute:encryption/Value:disabled' => 'Disabled',
	'Class:AzureDisk/Attribute:osfamily_id' => 'OS family',
	'Class:AzureDisk/Attribute:osfamily_id+' => '',
	'Class:AzureDisk/Attribute:osfamily_name' => 'OS family name',
	'Class:AzureDisk/Attribute:osfamily_name+' => '',
	'Class:AzureDisk/Attribute:provisioning_status' => 'Provisioning status',
	'Class:AzureDisk/Attribute:provisioning_status+' => '',
	'Class:AzureDisk/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureDisk/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureDisk/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureDisk/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureDisk/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureDisk/Attribute:size' => 'Size(GB)',
	'Class:AzureDisk/Attribute:sku' => 'SKU',
	'Class:AzureDisk/Attribute:sku/Value:Premium_LRS' => 'Premium_LRS',
	'Class:AzureDisk/Attribute:sku/Value:StandardSSD_LRS' => 'StandardSSD_LRS',
	'Class:AzureDisk/Attribute:sku/Value:premium_lrs' => 'Premium LRS',
	'Class:AzureDisk/Attribute:sku/Value:premium_zrs' => 'Premium ZRS',
	'Class:AzureDisk/Attribute:sku/Value:standard_lrs' => 'Standard LRS',
	'Class:AzureDisk/Attribute:sku/Value:standardssd_lrs' => 'StandardSSD LRS',
	'Class:AzureDisk/Attribute:sku/Value:standardssd_zrs' => 'StandardSSD ZRS',
	'Class:AzureDisk/Attribute:sku/Value:ultrassd_lrs' => 'UltraSSD LRS',
));

//
// Menus
//
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Menu:ConfigManagement:Azure' => 'Cloud Azure',
));