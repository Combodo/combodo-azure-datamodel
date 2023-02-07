<?php
/**
 * @copyright   Copyright (C) 2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// AzureCI
//
Dict::Add('FR FR', 'French', 'Français', array(
	'AzureCI:Overview:PublicIPAddresses' => 'Adresses IP publiques hébergées par les interfaces',
	'AzureCI:Overview:PrivateIPAddresses' => 'Adresses IP privées hébergées par les interfaces',
));

//
// AzureLoadBalancerFrontendIPConfig
//
Dict::Add('FR FR', 'French', 'Français', array(
	'AzureLoadBalancer:Overview:PublicIPAddresses' => 'Adresses IP publiques portées par le CI',
	'AzureLoadBalancer:Overview:PrivateIPAddresses' => 'Adresses IP privées portées par le CI',
	'Class:AzureLoadBalancerFrontendIPConfig/Attribute:ip_id' => 'IP privée',
	'Class:AzureLoadBalancerFrontendIPConfig/Attribute:ip_id+' => '',
));

//
// AzureNetworkInterfaceIPConfig
//
Dict::Add('FR FR', 'French', 'Français', array(
	'AzureNetworkInterface:Overview:PublicIPAddresses' => 'Adresses IP publiques portées par l\'interface',
	'AzureNetworkInterface:Overview:PrivateIPAddresses' => 'Adresses IP privées portées par l\'interface',
	'Class:AzureNetworkInterfaceIPConfig/Attribute:ip_id' => 'IP privée',
	'Class:AzureNetworkInterfaceIPConfig/Attribute:ip_id+' => '',
));

//
// AzurePrivateEndpoint
Dict::Add('FR FR', 'French', 'Français', array(
	'AzurePrivateEndpoint:Overview:PublicIPAddresses' => 'Adresses IP publiques portées par le private endpoint',
	'AzurePrivateEndpoint:Overview:PrivateIPAddresses' => 'Adresses IP privées portées par le private endpoint',
));

//
// AzurePublicIPAddress
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzurePublicIPAddress/Attribute:ip_id' => 'Adresse IP',
	'Class:AzurePublicIPAddress/Attribute:ip_id+' => '',
));

//
// AzureSubnet
//
Dict::Add('FR FR', 'French', 'Français', array(
	'AzureSubnet:Overview:PublicIPAddresses' => 'Adresses IP publiques portées par le sous-réseau',
	'AzureSubnet:Overview:PrivateIPAddresses' => 'Adresses IP privées portées par le sous-réseau',
	'Class:AzureSubnet/Attribute:ipsubnet_id' => 'Sous-réseau',
	'Class:AzureSubnet/Attribute:ipsubnet_id+' => '',
));

//
// AzureVNet
//
Dict::Add('FR FR', 'French', 'Français', array(
	'AzureVNet:Overview:PublicIPAddresses' => 'Adresses IP publiques portées par le VNet',
	'AzureVNet:Overview:PrivateIPAddresses' => 'Adresses IP privées portées par le VNet',
));

//
// IPSubnet
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:IPSubnet:azureinfo' => 'Informations Azure',
	'Class:IPSubnet/Attribute:azuresubnet_id' => 'Sous-réseau Azure',
	'Class:IPSubnet/Attribute:azuresubnet_id+' => '',
));

