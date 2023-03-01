<?php
/**
 * @copyright   Copyright (C) 2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// AzureCI
//
Dict::Add('EN US', 'English', 'English', array(
	'AzureCI:Overview:PublicIPAddresses' => 'Public IP Addresses hosted on interfaces',
	'AzureCI:Overview:PrivateIPAddresses' => 'Private IP Addresses hosted on interfaces',
));

//
// AzureLoadBalancerFrontendIPConfig
//
Dict::Add('EN US', 'English', 'English', array(
	'AzureLoadBalancer:Overview:PublicIPAddresses' => 'Public IP Addresses hosted by the load balancer',
	'AzureLoadBalancer:Overview:PrivateIPAddresses' => 'Private IP Addresses hosted by the load balancer',
	'Class:AzureLoadBalancerFrontendIPConfig/Attribute:ip_id' => 'Private IP',
	'Class:AzureLoadBalancerFrontendIPConfig/Attribute:ip_id+' => '',
));

//
// AzureNetworkInterfaceIPConfig
//
Dict::Add('EN US', 'English', 'English', array(
	'AzureNetworkInterface:Overview:PublicIPAddresses' => 'Public IP Addresses hosted by the interface',
	'AzureNetworkInterface:Overview:PrivateIPAddresses' => 'Private IP Addresses hosted by the interface',
	'Class:AzureNetworkInterfaceIPConfig/Attribute:ip_id' => 'Private IP',
	'Class:AzureNetworkInterfaceIPConfig/Attribute:ip_id+' => '',
));

//
// AzurePrivateEndpoint
Dict::Add('EN US', 'English', 'English', array(
	'AzurePrivateEndpoint:Overview:PublicIPAddresses' => 'Public IP Addresses hosted by the private endpoint',
	'AzurePrivateEndpoint:Overview:PrivateIPAddresses' => 'Private IP Addresses hosted by the private endpoint',
));

//
// AzurePublicIPAddress
//
Dict::Add('EN US', 'English', 'English', array(
	'Class:AzurePublicIPAddress/Attribute:ip_id' => 'IP Address',
	'Class:AzurePublicIPAddress/Attribute:ip_id+' => '',
));

//
// AzureSubnet
//
Dict::Add('EN US', 'English', 'English', array(
	'AzureSubnet:Overview:PublicIPAddresses' => 'Public IP Addresses hosted by the subnet',
	'AzureSubnet:Overview:PrivateIPAddresses' => 'Private IP Addresses hosted by the subnet',
	'Class:AzureSubnet/Attribute:ipsubnet_id' => 'Subnet',
	'Class:AzureSubnet/Attribute:ipsubnet_id+' => '',
));

//
// AzureVNet
//
Dict::Add('EN US', 'English', 'English', array(
	'AzureVNet:Overview:PublicIPAddresses' => 'Public IP Addresses hosted by the VNet',
	'AzureVNet:Overview:PrivateIPAddresses' => 'Private IP Addresses hosted by the VNet',
));

//
// IPSubnet
//
Dict::Add('EN US', 'English', 'English', array(
	'Class:IPSubnet:azureinfo' => 'Azure Information',
	'Class:IPSubnet/Attribute:azuresubnet_id' => 'Azure Subnet',
	'Class:IPSubnet/Attribute:azuresubnet_id+' => '',
));

//
// IPAddress
//
Dict::Add('EN US', 'English', 'English', array(
	'Class:IPAddress/Attribute:azureip' => 'Azure IP',
	'Class:IPAddress/Attribute:azureip+' => 'Indicates whether the IP comes from Microsoft Azure environment or not',
	'Class:IPAddress/Attribute:azureip/Value:yes' => 'Yes',
	'Class:IPAddress/Attribute:azureip/Value:no' => 'No',
));

