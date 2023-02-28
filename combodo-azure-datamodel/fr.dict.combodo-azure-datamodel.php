<?php
/**
 * @copyright   Copyright (C) 2023 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// AzureAppService
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureAppService' => 'App Service',
	'Class:AzureAppService+' => '',
	'Class:AzureAppService/Name' => '%1$s',
	'Class:AzureAppService/Attribute:app_service_plan' => 'Plan App Service',
	'Class:AzureAppService/Attribute:app_service_plan+' => '',
	'Class:AzureAppService/Attribute:azure_status' => 'Statut Azure',
	'Class:AzureAppService/Attribute:azure_status+' => '',
	'Class:AzureAppService/Attribute:azurestorageaccounts_list' => 'Comptes de stockage',
	'Class:AzureAppService/Attribute:azurestorageaccounts_list+' => '',
	'Class:AzureAppService/Attribute:url' => 'URL',
	'Class:AzureAppService/Attribute:url+' => '',
	'Class:AzureAppService/Attribute:ftps_hostname' => 'Nom d\'hôte FTPs',
	'Class:AzureAppService/Attribute:ftps_hostname+' => '',
));

//
// AzureCI
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureCI' => 'CI Azure',
	'Class:AzureCI+' => '',
	'AzureCI:baseinfo' => 'Informations générales',
	'AzureCI:moreinfo' => 'Informations complémentaires',
	'AzureCI:date' => 'Dates',
	'AzureCI:otherinfo' => 'Autres informations',
	'AzureCI:Overview:AzurePublicIPAddresses' => 'Adresses IP Azure publiques portées par les interfaces',
	'Class:AzureCI/Attribute:azureavailabilitytype' => 'Options de disponibilité',
	'Class:AzureCI/Attribute:azureavailabilitytype+' => 'Disponibilité du composant Azure sur les zones',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:1' => 'Zone 1',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:2' => 'Zone 2',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:3' => 'Zone 3',
	'Class:AzureCI/Attribute:azureavailabilitytype/Value:interzone' => 'Redondance sur plusieurs domaines d\'erreur',
	'Class:AzureCI/Attribute:azureid' => 'ID Azure',
	'Class:AzureCI/Attribute:azureid+' => 'ID de l\'object',
	'Class:AzureCI/Attribute:azureresourcegroup_id' => 'Groupe de ressources',
	'Class:AzureCI/Attribute:azureresourcegroup_id+' => 'Groupe de ressources Azure',
	'Class:AzureCI/Attribute:azuresubscription_id' => 'Abonnement',
	'Class:AzureCI/Attribute:azuresubscription_id+' => 'Abonnement Azure',
	'Class:AzureCI/Attribute:azuresubscription_name' => 'Nom de l\'abonnement Azure',
	'Class:AzureCI/Attribute:azuresubscription_name+' => '',
	'Class:AzureCI/Attribute:azuresubscription_subscriptionid' => 'ID abonnement Azure',
	'Class:AzureCI/Attribute:azuresubscription_subscriptionid+' => '',
	'Class:AzureCI/Attribute:azuretenant_name' => 'Nom du locataire',
	'Class:AzureCI/Attribute:azuretenant_name+' => '',
	'Class:AzureCI/Attribute:contract_id' => 'Abonnement',
	'Class:AzureCI/Attribute:contract_id+' => 'Abonnement Azure',
	'Class:AzureCI/Attribute:location_id' => 'Emplacement',
	'Class:AzureCI/Attribute:location_id+' => '',
	'Class:AzureCI/Attribute:management_url' => 'URL de gestion',
	'Class:AzureCI/Attribute:provisioning_status' => 'État de provisionnement',
	'Class:AzureCI/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureCI/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureCI/Attribute:provisioning_status/Value:disabled' => 'Disabled',
	'Class:AzureCI/Attribute:provisioning_status/Value:dropping' => 'Dropping',
	'Class:AzureCI/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureCI/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureCI/Attribute:provisioning_status/Value:ready' => 'Ready',
	'Class:AzureCI/Attribute:provisioning_status/Value:running' => 'Running',
	'Class:AzureCI/Attribute:provisioning_status/Value:starting' => 'Starting',
	'Class:AzureCI/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureCI/Attribute:provisioning_status/Value:terminating' => 'Terminating',
	'Class:AzureCI/Attribute:status' => 'Statut',
	'Class:AzureCI/Attribute:status/Value:implementation' => 'implémentation',
	'Class:AzureCI/Attribute:status/Value:inactif' => 'inactive',
	'Class:AzureCI/Attribute:status/Value:obsolete' => 'obsolète',
	'Class:AzureCI/Attribute:status/Value:production' => 'production',
	'Class:AzureCI/Attribute:status/Value:stock' => 'stock',
	'Class:AzureCI/Attribute:status/Value:stopped' => 'arrêté',
	'Class:AzureCI/Attribute:azuretags' => 'Tags',
	'Class:AzureCI/Attribute:azuretags+' => 'Tags spécifiques attachés au CI',
));

//
// AzureCompute
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureCompute' => 'Compute Azure',
	'Class:AzureCompute+' => '',
	'Class:AzureCompute/Name' => '%1$s',
));

//
// AzureContainer
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureContainer' => 'Conteneurs Azure',
	'Class:AzureContainer+' => '',
	'Class:AzureContainer/Name' => '%1$s',
));

//
// AzureDB
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureDB' => 'Bases de données Azure',
	'Class:AzureDB+' => '',
	'Class:AzureDB/Name' => '%1$s',
	'Class:AzureDB/Attribute:server_name' => 'Nom du serveur',
	'Class:AzureDB/Attribute:server_name+' => '',
	'Class:AzureDB/Attribute:version' => 'Version',
	'Class:AzureDB/Attribute:version+' => '',
));

//
// AzureDBServer
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureDBServer' => 'Serveur DB Azure',
	'Class:AzureDBServer+' => '',
	'Class:AzureDBServer/Name' => '%1$s',
	'Class:AzureDBServer/Tab:azuredatabases_list' => 'Bases de données ',
	'Class:AzureDBServer/Tab:azuredatabases_list+' => 'Liste des bases de données hébergées par le serveur',
	'Class:AzureDBServer/Attribute:capacity' => 'Capacité (vCPUs)',
	'Class:AzureDBServer/Attribute:capacity+' => '',
	'Class:AzureDBServer/Attribute:fqdn' => 'FQDN',
	'Class:AzureDBServer/Attribute:fqdn+' => '',
	'Class:AzureDBServer/Attribute:storage' => 'Stockage (Go)',
	'Class:AzureDBServer/Attribute:storage+' => '',
	'Class:AzureDBServer/Attribute:tier' => 'Niveau',
	'Class:AzureDBServer/Attribute:tier+' => 'Niveau de calcul',
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
// AzureDisk
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureDisk' => 'Disque',
	'Class:AzureDisk+' => 'Disque Azure',
	'Class:AzureDisk/Name' => '%1$s',
	'Class:AzureDisk/Attribute:azuredisktype_id' => 'Type de stockage',
	'Class:AzureDisk/Attribute:azurestatus' => 'Etat du disque',
	'Class:AzureDisk/Attribute:azurestatus+' => '',
	'Class:AzureDisk/Attribute:azurestatus/Value:activesas' => 'ActiveSAS',
	'Class:AzureDisk/Attribute:azurestatus/Value:activeupload' => 'ActiveUpload',
	'Class:AzureDisk/Attribute:azurestatus/Value:attached' => 'Attached',
	'Class:AzureDisk/Attribute:azurestatus/Value:readytoupload' => 'Ready to upload',
	'Class:AzureDisk/Attribute:azurestatus/Value:reserved' => 'Reserved',
	'Class:AzureDisk/Attribute:azurestatus/Value:unattached' => 'Unattached',
	'Class:AzureDisk/Attribute:azurevirtualmachine_id' => 'VM Azure',
	'Class:AzureDisk/Attribute:azurevirtualmachine_id+' => '',
	'Class:AzureDisk/Attribute:datatype' => 'Type de données',
	'Class:AzureDisk/Attribute:datatype+' => 'Type de données sur ce disque',
	'Class:AzureDisk/Attribute:datatype/Value:data' => 'Données',
	'Class:AzureDisk/Attribute:datatype/Value:os' => 'OS',
	'Class:AzureDisk/Attribute:datatype/Value:temp' => 'Temporaire',
	'Class:AzureDisk/Attribute:encryption' => 'Chiffrement',
	'Class:AzureDisk/Attribute:encryption+' => '',
	'Class:AzureDisk/Attribute:encryption/Value:enabled' => 'Activé',
	'Class:AzureDisk/Attribute:encryption/Value:disabled' => 'Désactivé',
	'Class:AzureDisk/Attribute:osfamily_id' => 'Famille d\'OS',
	'Class:AzureDisk/Attribute:osfamily_id+' => '',
	'Class:AzureDisk/Attribute:osfamily_name' => 'Nom de la famille OS',
	'Class:AzureDisk/Attribute:osfamily_name+' => '',
	'Class:AzureDisk/Attribute:provisioning_status' => 'État de provisionnement',
	'Class:AzureDisk/Attribute:provisioning_status+' => '',
	'Class:AzureDisk/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureDisk/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureDisk/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureDisk/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureDisk/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureDisk/Attribute:azuresku_id' => 'SKU',
	'Class:AzureDisk/Attribute:azuresku_id+' => 'Stock Keeping Unit',
));

//
// AzureIdentity
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureIdentity' => 'Identité Azure',
	'Class:AzureIdentity+' => '',
	'Class:AzureIdentity/Name' => '%1$s',
	'Class:AzureIdentity/Name+' => '',
	'Class:AzureIdentity/Attribute:name' => 'Nom',
	'Class:AzureIdentity/Attribute:name+' => '',
	'Class:AzureIdentity/Attribute:org_id' => 'Organisation',
	'Class:AzureIdentity/Attribute:org_id+' => '',
	'Class:AzureIdentity/Attribute:status' => 'Statut',
	'Class:AzureIdentity/Attribute:status+' => '',
	'Class:AzureIdentity/Attribute:business_criticity' => 'Criticité',
	'Class:AzureIdentity/Attribute:business_criticity+' => '',
	'Class:AzureIdentity/Attribute:move2production' => 'Date de mise en production',
	'Class:AzureIdentity/Attribute:move2production+' => '',
));

//
// AzureKubernetesService
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureKubernetesService' => 'Service Kubernetes',
	'Class:AzureKubernetesService+' => 'Azure Kubernetes Service (AKS)',
	'Class:AzureKubernetesService/Name' => '%1$s',
	'Class:AzureKubernetesService/Attribute:fqdn' => 'FQDN',
	'Class:AzureKubernetesService/Attribute:fqdn+' => '',
	'Class:AzureKubernetesService/Attribute:max_agent_pools' => 'Nombre de noeud',
	'Class:AzureKubernetesService/Attribute:max_agent_pools+' => '',
	'Class:AzureKubernetesService/Attribute:scale_method' => 'Méthode de mise à l\’échelle',
	'Class:AzureKubernetesService/Attribute:scale_method+' => '',
	'Class:AzureKubernetesService/Attribute:scale_method/Value:auto' => 'automatique',
	'Class:AzureKubernetesService/Attribute:scale_method/Value:manual' => 'manuel',
	'Class:AzureKubernetesService/Attribute:version' => 'Version',
	'Class:AzureKubernetesService/Attribute:version+' => 'Version de Kubernetes',
	'Class:AzureKubernetesService/Attribute:loadbalancer_sku' => 'Taille de noeud',
	'Class:AzureKubernetesService/Attribute:loadbalancer_sku+' => 'Taille des machines virtuelles qui forment les noeuds des clusters',
	'Class:AzureKubernetesService/Attribute:outbound_type' => 'Type de sortie',
	'Class:AzureKubernetesService/Attribute:outbound_type+' => 'Méthode de routage sortant',
));

//
// AzureLoadBalancer
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureLoadBalancer' => 'Équilibrage de charge',
	'Class:AzureLoadBalancer+' => 'Équilibrage de charge Azure',
	'Class:AzureLoadBalancer/Name' => '%1$s',
	'AzureLoadBalancer:Overview:AzurePublicIPAddresses' => 'Adresses IP Azure publiques portées par le CI',
	'Class:AzureLoadBalancer/Attribute:overview' => 'IPs',
	'Class:AzureLoadBalancer/Attribute:overview+' => '',
	'Class:AzureLoadBalancer/Attribute:ipaddress' => 'Adresse IP du frontal',
	'Class:AzureLoadBalancer/Attribute:sku' => 'SKU',
	'Class:AzureLoadBalancer/Attribute:sku/Value:basic' => 'De base',
	'Class:AzureLoadBalancer/Attribute:sku/Value:standard' => 'Standard',
	'Class:AzureLoadBalancer/Attribute:type' => 'Type',
	'Class:AzureLoadBalancer/Attribute:type/Value:internal' => 'interne',
	'Class:AzureLoadBalancer/Attribute:type/Value:public' => 'public',
	'Class:AzureLoadBalancer/Attribute:zone_id' => 'Zone',
	'Class:AzureLoadBalancer/Attribute:zone_id+' => 'Zone de disponibilité Azure',
    'Class:AzureLoadBalancer/Attribute:azureloadbalancerfrontendipconfigs_list' => 'Frontend IP Configs',
));

//
// AzureLoadBalancerFrontendIPConfig
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:AzureLoadBalancerFrontendIPConfig' => 'Azure LB Frontend IP Config',
    'Class:AzureLoadBalancerFrontendIPConfig+' => '',
    'Class:AzureLoadBalancerFrontendIPConfig/Name' => '%1$s',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:azureloadbalancer_id' => 'Load Balancer',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:azureloadbalancer_id+' => '',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_version' => 'Private IP version',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_version+' => '',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_version/Value:ipv4' => 'IPv4',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_version/Value:ipv6' => 'IPv6',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_allocation_method' => 'Private IP allocation method',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_allocation_method+' => '',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_allocation_method/Value:static' => 'Static',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip_allocation_method/Value:dynamic' => 'Dynamic',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip' => 'Private IP',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:private_ip+' => '',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:azuresubnet_id' => 'Subnet',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:azuresubnet_id+' => '',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:public_ip_id' => 'Public IP',
    'Class:AzureLoadBalancerFrontendIPConfig/Attribute:public_ip_id+' => '',
));

//
// AzureMariaDB
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureMariaDB' => 'Base de données MariaDB ',
	'Class:AzureMariaDB+' => 'Serveur Azure Database for MariaDB',
	'Class:AzureMariaDB/Name' => '%1$s',
	'Class:AzureMariaDB/Attribute:azure_status' => 'Statut Azure',
	'Class:AzureMariaDB/Attribute:azure_status+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_capacity' => 'Capacité (vCPUs)',
	'Class:AzureMariaDB/Attribute:azuredbserver_capacity+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_fqdn' => 'Nom du serveur',
	'Class:AzureMariaDB/Attribute:azuredbserver_fqdn+' => 'Nom FQDN du serveur',
	'Class:AzureMariaDB/Attribute:azuredbserver_id' => 'Serveur',
	'Class:AzureMariaDB/Attribute:azuredbserver_id+' => 'Serveur de base de données',
	'Class:AzureMariaDB/Attribute:azuredbserver_storage' => 'Stockage (Go)',
	'Class:AzureMariaDB/Attribute:azuredbserver_storage+' => '',
	'Class:AzureMariaDB/Attribute:azuredbserver_tier' => 'Niveau',
	'Class:AzureMariaDB/Attribute:azuredbserver_tier+' => 'Niveau de calcul',
	'Class:AzureMariaDB/Attribute:azuredbserver_version' => 'Version',
	'Class:AzureMariaDB/Attribute:azuredbserver_version+' => '',
));

//
// AzureMSSQL
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureMSSQL' => 'Base de données SQL',
	'Class:AzureMSSQL+' => 'Base de données Azure SQL',
	'Class:AzureMSSQL/Name' => '%1$s',
	'Class:AzureMSSQL/Attribute:azure_status' => 'Statut Azure',
	'Class:AzureMSSQL/Attribute:azure_status+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_capacity' => 'Capacité (vCPUs)',
	'Class:AzureMSSQL/Attribute:azuredbserver_capacity+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_fqdn' => 'Nom du serveur',
	'Class:AzureMSSQL/Attribute:azuredbserver_fqdn+' => 'Nom FQDN du serveur',
	'Class:AzureMSSQL/Attribute:azuredbserver_id' => 'Serveur',
	'Class:AzureMSSQL/Attribute:azuredbserver_id+' => 'Serveur de base de données',
	'Class:AzureMSSQL/Attribute:azuredbserver_storage' => 'Stockage (Go)',
	'Class:AzureMSSQL/Attribute:azuredbserver_storage+' => '',
	'Class:AzureMSSQL/Attribute:azuredbserver_tier' => 'Niveau',
	'Class:AzureMSSQL/Attribute:azuredbserver_tier+' => 'Niveau de calcul',
	'Class:AzureMSSQL/Attribute:azuredbserver_version' => 'Version',
	'Class:AzureMSSQL/Attribute:azuredbserver_version+' => '',
));

//
// AzureMySQL
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureMySQL' => 'Base de données MySQL',
	'Class:AzureMySQL+' => 'Serveurs Azure Database pour MySQL',
	'Class:AzureMySQL/Name' => '%1$s',
	'Class:AzureMySQL/Attribute:azure_status' => 'Statut Azure',
	'Class:AzureMySQL/Attribute:azure_status+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_capacity' => 'Capacité (vCPUs)',
	'Class:AzureMySQL/Attribute:azuredbserver_capacity+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_fqdn' => 'Nom du serveur',
	'Class:AzureMySQL/Attribute:azuredbserver_fqdn+' => 'Nom FQDN du serveur',
	'Class:AzureMySQL/Attribute:azuredbserver_id' => 'Serveur',
	'Class:AzureMySQL/Attribute:azuredbserver_id+' => 'Serveur de base de données',
	'Class:AzureMySQL/Attribute:azuredbserver_storage' => 'Stockage (Go)',
	'Class:AzureMySQL/Attribute:azuredbserver_storage+' => '',
	'Class:AzureMySQL/Attribute:azuredbserver_tier' => 'Niveau',
	'Class:AzureMySQL/Attribute:azuredbserver_tier+' => 'Niveau de calcul',
	'Class:AzureMySQL/Attribute:azuredbserver_version' => 'Version',
	'Class:AzureMySQL/Attribute:azuredbserver_version+' => '',
));

//
// AzureNetworking
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureNetworking' => 'Mise en réseau Azure',
	'Class:AzureNetworking+' => '',
	'Class:AzureNetworking/Name' => '%1$s',
));

//
// AzureNetworkInterface
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureNetworkInterface' => 'Interface réseau',
	'Class:AzureNetworkInterface+' => 'Interface réseau Azure',
	'Class:AzureNetworkInterface/Name' => '%1$s',
	'AzureNetworkInterface:Overview:AzurePublicIPAddresses' => 'Adresses IP Azure publiques portées par l\'interface',
	'Class:AzureNetworkInterface/Attribute:overview' => 'IPs',
	'Class:AzureNetworkInterface/Attribute:overview+' => '',
	'Class:AzureNetworkInterface/Attribute:azurevirtualmachine_id' => 'VM Azure',
	'Class:AzureNetworkInterface/Attribute:azurevirtualmachine_id+' => 'Attaché à',
	'Class:AzureNetworkInterface/Attribute:azurevnet_id' => 'VNet',
	'Class:AzureNetworkInterface/Attribute:azurevnets_list' => 'VNets',
	'Class:AzureNetworkInterface/Attribute:azurevnets_list+' => 'Réseaux virtuels',
	'Class:AzureNetworkInterface/Attribute:contract_id' => 'Abonnement',
	'Class:AzureNetworkInterface/Attribute:move2production' => 'Date de mise en production',
	'Class:AzureNetworkInterface/Attribute:primaryprivateip' => 'Adresse IP privée primaire',
	'Class:AzureNetworkInterface/Attribute:primarypublicip' => 'Adresse IP publique primaire',
	'Class:AzureNetworkInterface/Attribute:secondaryprivateip1' => 'Adresse IP privée secondaire #1',
	'Class:AzureNetworkInterface/Attribute:secondaryprivateip2' => 'Adresse IP privée secondaire #2',
	'Class:AzureNetworkInterface/Attribute:secondarypublicip1' => 'Adresse IP publique secondaire #1',
	'Class:AzureNetworkInterface/Attribute:secondarypublicip2' => 'Adresse IP publique secondaire #2',
    'Class:AzureNetworkInterface/Attribute:azurenetworkinterfaceipconfigs_list' => 'IP configs',
    'Class:AzureNetworkInterface/Attribute:azurenetworkinterfaceipconfigs_list+' => '',
    'Class:AzureNetworkInterface/Attribute:azureprivateendpoints_list' => 'Private Endpoints',
    'Class:AzureNetworkInterface/Attribute:azureprivateendpoints_list+' => '',
));

//
// AzureNetworkInterfaceIPConfig
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:AzureNetworkInterfaceIPConfig' => 'Azure NIC IP Config',
    'Class:AzureNetworkInterfaceIPConfig+' => '',
    'Class:AzureNetworkInterfaceIPConfig/Name' => '%1$s',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:azurenetworkinterface_id' => 'Network card',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:azurenetworkinterface_id+' => '',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_version' => 'Private IP version',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_version+' => '',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_version/Value:ipv4' => 'IPv4',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_version/Value:ipv6' => 'IPv6',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_allocation_method' => 'Private IP allocation method',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_allocation_method+' => '',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_allocation_method/Value:static' => 'Static',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip_allocation_method/Value:dynamic' => 'Dynamic',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip' => 'Private IP',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:private_ip+' => '',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:primary' => 'Primary',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:primary+' => '',
	'Class:AzureNetworkInterfaceIPConfig/Attribute:primary/Value:yes' => 'Oui',
	'Class:AzureNetworkInterfaceIPConfig/Attribute:primary/Value:no' => 'Non',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:azuresubnet_id' => 'Subnet',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:azuresubnet_id+' => '',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:public_ip_id' => 'Public IP',
    'Class:AzureNetworkInterfaceIPConfig/Attribute:public_ip_id+' => '',
));

//
// lnkAzureNetworkInterfaceToAzureVNet
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkAzureNetworkInterfaceToAzureVNet' => 'Lien Azure interface réseau / Azure VNet ',
	'Class:lnkAzureNetworkInterfaceToAzureVNet/Name' => '%1$s - %2$s',
	'Class:lnkAzureNetworkInterfaceToAzureVNet/Attribute:azurenetworkinterface_id' => 'Interface réseau Azure',
	'Class:lnkAzureNetworkInterfaceToAzureVNet/Attribute:azurevnet_id' => 'VNet',
));

//
// AzurePostgreSQL
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzurePostgreSQL' => 'PostgreSQL',
	'Class:AzurePostgreSQL+' => '',
	'Class:AzurePostgreSQL/Name' => '%1$s',
	'Class:AzurePostgreSQL/Attribute:azure_status' => 'Statut Azure',
	'Class:AzurePostgreSQL/Attribute:azure_status+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_capacity' => 'Capacité (vCPUs)',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_capacity+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_fqdn' => 'Nom du serveur',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_fqdn+' => 'Nom FQDN du serveur',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_id' => 'Serveur',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_id+' => 'Serveur de base de données',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_storage' => 'Stockage (Go)',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_storage+' => '',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_tier' => 'Niveau',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_tier+' => 'Niveau de calcul',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_version' => 'Version',
	'Class:AzurePostgreSQL/Attribute:azuredbserver_version+' => '',
));

//
// AzurePrivateEndpoint
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:AzurePrivateEndpoint' => 'Azure Private Endpoint',
    'Class:AzurePrivateEndpoint+' => '',
    'Class:AzurePrivateEndpoint/Name' => '%1$s',
	'AzurePrivateEndpoint:Overview:AzurePublicIPAddresses' => 'Adresses IPs Azure publiques portées par le private endpoint',
	'Class:AzurePrivateEndpoint/Attribute:overview' => 'IPs',
	'Class:AzurePrivateEndpoint/Attribute:overview+' => '',
    'Class:AzurePrivateEndpoint/Attribute:azuresubnet_id' => 'Azure Subnet',
    'Class:AzurePrivateEndpoint/Attribute:azuresubnet_id+' => '',
    'Class:AzurePrivateEndpoint/Attribute:azurenetworkinterfaces_list' => 'Interfaces',
    'Class:AzurePrivateEndpoint/Attribute:azurenetworkinterfaces_list+' => '',
));

//
// lnkAzureNetworkInterfaceToAzurePrivateEndpoint
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:lnkAzureNetworkInterfaceToAzurePrivateEndpoint' => 'Link Azure network interface / Azure Private Endpoint',
    'Class:lnkAzureNetworkInterfaceToAzurePrivateEndpoint/Name' => '%1$s - %2$s',
    'Class:lnkAzureNetworkInterfaceToAzurePrivateEndpoint/Attribute:azurenetworkinterface_id' => 'Azure Network interface',
    'Class:lnkAzureNetworkInterfaceToAzurePrivateEndpoint/Attribute:azureprivateendpoint_id' => 'Azure Private Endpoint',
));

//
// AzurePublicIPAddress
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:AzurePublicIPAddress' => 'Azure Public IP Address',
    'Class:AzurePublicIPAddress+' => '',
    'Class:AzurePublicIPAddress/Name' => '%1$s',
    'Class:AzurePublicIPAddress/Name+' => '',
    'Class:AzurePublicIPAddress/Attribute:version' => 'Version',
    'Class:AzurePublicIPAddress/Attribute:version+' => '',
    'Class:AzurePublicIPAddress/Attribute:version/Value:ipv4' => 'IPv4',
    'Class:AzurePublicIPAddress/Attribute:version/Value:ipv6' => 'IPv6',
    'Class:AzurePublicIPAddress/Attribute:allocation_method' => 'Allocation method',
    'Class:AzurePublicIPAddress/Attribute:allocation_method+' => '',
    'Class:AzurePublicIPAddress/Attribute:allocation_method/Value:static' => 'Static',
    'Class:AzurePublicIPAddress/Attribute:allocation_method/Value:dynamic' => 'Dynamic',
    'Class:AzurePublicIPAddress/Attribute:ip' => 'Address',
    'Class:AzurePublicIPAddress/Attribute:ip+' => '',
    'Class:AzurePublicIPAddress/Attribute:short_name' => 'Short Name',
    'Class:AzurePublicIPAddress/Attribute:short_name+' => '',
    'Class:AzurePublicIPAddress/Attribute:fqdn' => 'FQDN',
    'Class:AzurePublicIPAddress/Attribute:fqdn+' => '',
    'Class:AzurePublicIPAddress/Attribute:azureipconfig_id' => 'IP Config',
    'Class:AzurePublicIPAddress/Attribute:azureipconfig_id+' => 'Azure IP Config that host the IP address',
));

//
// AzureResourceGroup
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureResourceGroup' => 'Groupe de ressources',
	'Class:AzureResourceGroup+' => '',
	'Class:AzureResource/Name' => '%1$s',
	'Class:AzureResource/Name+' => '',
	'AzureResourceGroup:baseinfo' => 'Informations générales',
	'AzureResourceGroup:moreinfo' => 'Informations complémentaires',
	'AzureResourceGroup:otherinfo' => 'Autres informations',
	'Class:AzureResourceGroup/Attribute:azurecomputes_list' => 'Computes',
	'Class:AzureResourceGroup/Attribute:azurecomputes_list+' => '',
	'Class:AzureResourceGroup/Attribute:azurecontainers_list' => 'Conteneurss',
	'Class:AzureResourceGroup/Attribute:azurecontainers_list+' => '',
	'Class:AzureResourceGroup/Attribute:azuredbs_list' => 'DBs',
	'Class:AzureResourceGroup/Attribute:azuredbs_list+' => '',
	'Class:AzureResourceGroup/Attribute:azureid' => 'ID Azure',
	'Class:AzureResourceGroup/Attribute:azureidentitys_list' => 'Identités',
	'Class:AzureResourceGroup/Attribute:azureidentitys_list+' => '',
	'Class:AzureResourceGroup/Attribute:azureinterfaces_list' => 'NICs',
	'Class:AzureResourceGroup/Attribute:azureinterfaces_list+' => 'Interface réseau',
	'Class:AzureResourceGroup/Attribute:azureiots_list' => 'IoTs',
	'Class:AzureResourceGroup/Attribute:azureiots_list+' => '',
	'Class:AzureResourceGroup/Attribute:azureloadbalancers_list' => 'Équilibrage de charge',
	'Class:AzureResourceGroup/Attribute:azurenetworkings_list' => 'Mise en réseau ',
	'Class:AzureResourceGroup/Attribute:azurenetworkings_list+' => '',
	'Class:AzureResourceGroup/Attribute:azuresecuritys_list' => 'Securité',
	'Class:AzureResourceGroup/Attribute:azuresecuritys_list+' => '',
	'Class:AzureResourceGroup/Attribute:azurestorages_list' => 'Stockage',
	'Class:AzureResourceGroup/Attribute:azurestorages_list+' => '',
	'Class:AzureResourceGroup/Attribute:azuresubscription_id' => 'Abonnement',
	'Class:AzureResourceGroup/Attribute:azuresubscription_name' => 'Nom de l\'abonnement',
	'Class:AzureResourceGroup/Attribute:azuresubscription_subscriptionid' => 'ID de l\'abonnement Azure',
	'Class:AzureResourceGroup/Attribute:azuretenant_name' => 'Nom du locataire Azure',
	'Class:AzureResourceGroup/Attribute:azuretenant_name+' => '',
	'Class:AzureResourceGroup/Attribute:azurevirtualmachines_list' => 'VMs',
	'Class:AzureResourceGroup/Attribute:azurewebs_list' => 'Web',
	'Class:AzureResourceGroup/Attribute:azurewebs_list+' => '',
	'Class:AzureResourceGroup/Attribute:business_criticity' => 'Criticité',
	'Class:AzureResourceGroup/Attribute:business_criticity+' => '',
	'Class:AzureResourceGroup/Attribute:business_criticity/Value:high' => 'haute',
	'Class:AzureResourceGroup/Attribute:business_criticity/Value:low' => 'moyenne',
	'Class:AzureResourceGroup/Attribute:business_criticity/Value:medium' => 'basse',
	'Class:AzureResourceGroup/Attribute:contacts_list' => 'Contacts',
	'Class:AzureResourceGroup/Attribute:contacts_list+' => '',
	'Class:AzureResourceGroup/Attribute:description' => 'Description',
	'Class:AzureResourceGroup/Attribute:description+' => '',
	'Class:AzureResourceGroup/Attribute:documents_list' => 'Documents',
	'Class:AzureResourceGroup/Attribute:documents_list+' => '',
	'Class:AzureResourceGroup/Attribute:location_id' => 'Emplacement',
	'Class:AzureResourceGroup/Attribute:location_id+' => '',
	'Class:AzureResourceGroup/Attribute:move2production' => 'Date de mise en production',
	'Class:AzureResourceGroup/Attribute:move2production+' => '',
	'Class:AzureResourceGroup/Attribute:name' => 'Nom',
	'Class:AzureResourceGroup/Attribute:name+' => '',
	'Class:AzureResourceGroup/Attribute:org_id' => 'Organisation',
	'Class:AzureResourceGroup/Attribute:org_id+' => '',
	'Class:AzureResourceGroup/Attribute:organization_name' => 'Nom de l\'organisation',
	'Class:AzureResourceGroup/Attribute:organization_name+' => '',
	'Class:AzureResourceGroup/Attribute:provisioning_status' => 'État de provisionnement',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureResourceGroup/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
));

//
// lnkAzureResourceGroupToContact
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkAzureResourceGroupToContact' => 'Lien groupe de ressources Azure / Contact',
	'Class:lnkAzureResourceGroupToContact+' => '',
	'Class:lnkAzureResourceGroupToContact/Name' => '%1$s - %2$s',
	'Class:lnkAzureResourceGroupToContact/Name+' => '',
	'Class:lnkAzureResourceGroupToContact/Attribute:azureresourcegroup_id' => 'Groupe de ressources Azure',
	'Class:lnkAzureResourceGroupToContact/Attribute:contact_id' => 'Contact',
));

//
// lnkAzureResourceGroupToDocument
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkAzureResourceGroupToDocument' => 'Lien groupe de ressources Azure / Document',
	'Class:lnkAzureResourceGroupToDocument+' => '',
	'Class:lnkAzureResourceGroupToDocument/Name' => '%1$s - %2$s',
	'Class:lnkAzureResourceGroupToDocument/Name+' => '',
	'Class:lnkAzureResourceGroupToDocument/Attribute:azureresourcegroup_id' => 'Groupe de ressources Azure',
	'Class:lnkAzureResourceGroupToDocument/Attribute:document_id' => 'Document',
));

//
// AzureSKU
//
Dict::Add('EN US', 'English', 'English', array(
	'Class:AzureSKU' => 'Azure SKU',
	'Class:AzureSKU+' => 'Azure Stock Keeping Unit',
	'Class:AzureSKU/Name' => '%1$s - %2$s',
	'Class:AzureSKU/Attribute:family' => 'Famille',
	'Class:AzureSKU/Attribute:family+' => '',
	'Class:AzureSKU/Attribute:maxnetworkinterfaces' => 'Interfaces réseau',
	'Class:AzureSKU/Attribute:maxnetworkinterfaces+' => 'Nombre maximum d\'interfaces réseau autorisées',
	'Class:AzureSKU/Attribute:maxresourcevolumemb' => 'Taille de la ressource de stockage (MB)',
	'Class:AzureSKU/Attribute:maxresourcevolumemb+' => 'Taille maximum de la resource de stockage autorisée',
	'Class:AzureSKU/Attribute:memorygb' => 'Memoire (GB)',
	'Class:AzureSKU/Attribute:memorygb+' => 'Taille de la mémoire',
	'Class:AzureSKU/Attribute:osvhdsizemb' => 'Taille du disque OS VHD (MB)',
	'Class:AzureSKU/Attribute:osvhdsizemb+' => 'Taille du disque OS VHD autorisée',
	'Class:AzureSKU/Attribute:size' => 'Taille',
	'Class:AzureSKU/Attribute:size+' => '',
	'Class:AzureSKU/Attribute:tier' => 'Tier',
	'Class:AzureSKU/Attribute:tier+' => '',
	'Class:AzureSKU/Attribute:type' => 'Type',
	'Class:AzureSKU/Attribute:type+' => 'Type de resource',
	'Class:AzureSKU/Attribute:vcpus' => 'vCPUs',
	'Class:AzureSKU/Attribute:vcpus+' => 'Nombre de vCPUs supportés',
	'Class:AzureSKU/Attribute:vcpuspercore' => 'vCPUs par coeur',
	'Class:AzureSKU/Attribute:vcpuspercore+' => 'Nombre de vCPUs par coeur',
	'Class:AzureSKU/Attribute:azurevirtualmachines_list' => 'VMs',
	'Class:AzureSKU/Attribute:azurevirtualmachines_list+' => 'Liste de toutes les VMs utilisant ce SKU',
	'Class:AzureSKU/Attribute:maxsizegib' => 'Taille maxium (GB)',
	'Class:AzureSKU/Attribute:maxsizegib+' => '',
	'Class:AzureSKU/Attribute:maxiops' => 'IO/s maximums',
	'Class:AzureSKU/Attribute:maxiops+' => '',
	'Class:AzureSKU/Attribute:maxbandwidthmbps' => 'Bande passante maxium (MB/s)',
	'Class:AzureSKU/Attribute:maxbandwidthmbps+' => '',
	'Class:AzureSKU/Attribute:azuredisks_list' => 'Disques',
	'Class:AzureSKU/Attribute:azuredisks_list+' => 'Liste de tous les disques utilisant ce SKU',
));

//
// AzureStorage
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureStorage' => 'Stockage Azure',
	'Class:AzureStorage+' => '',
	'Class:AzureStorage/Name' => '%1$s',
));

//
// AzureStorageAccount
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureStorageAccount' => 'Compte de stockage',
	'Class:AzureStorageAccount+' => 'Compte de stockage Azure',
	'Class:AzureStorageAccount/Name' => '%1$s',
	'Class:AzureStorageAccount/Attribute:azureappservice_id' => 'App service',
	'Class:AzureStorageAccount/Attribute:azureappservice_id+' => '',
	'Class:AzureStorageAccount/Attribute:tier' => 'Niveau d\'accès',
	'Class:AzureStorageAccount/Attribute:tier+' => '',
	'Class:AzureStorageAccount/Attribute:type' => 'Type',
	'Class:AzureStorageAccount/Attribute:type+' => '',
	'Class:AzureStorageAccount/Attribute:type/Value:blob' => 'Blob',
	'Class:AzureStorageAccount/Attribute:type/Value:queue' => 'File d\'attente',
	'Class:AzureStorageAccount/Attribute:type/Value:table' => 'Table',
	'Class:AzureStorageAccount/Attribute:type/Value:file' => 'Fichier',
));

//
// AzureSubnet
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:AzureSubnet' => 'Azure Subnet',
    'Class:AzureSubnet+' => '',
    'Class:AzureSubnet/Name' => '%1$s',
	'AzureSubnet:Overview:AzurePublicIPAddresses' => 'Adresses IP Azure Publiques portées par le sous-réseau',
	'Class:AzureSubnet/Attribute:overview' => 'IPs',
	'Class:AzureSubnet/Attribute:overview+' => '',
    'Class:AzureSubnet/Attribute:ip' => 'Subnet IP',
    'Class:AzureSubnet/Attribute:ip+' => '',
    'Class:AzureSubnet/Attribute:mask' => 'Mask',
    'Class:AzureSubnet/Attribute:mask+' => '',
    'Class:AzureSubnet/Attribute:azurevnet_id' => 'VNet',
    'Class:AzureSubnet/Attribute:azurevnet_id+' => 'Azure Virtual Network that the subnet belongs to',
    'Class:AzureSubnet/Attribute:azureci_id' => 'Delegated to',
    'Class:AzureSubnet/Attribute:azureci_id+' => 'Azure service to which the subnet is delegated to',
    'Class:AzureSubnet/Attribute:azurenetworkinterfaceipconfigs_list' => 'IP configs',
    'Class:AzureSubnet/Attribute:azurenetworkinterfaceipconfigs_list+' => '',
    'Class:AzureSubnet/Attribute:azureprivateendpoints_list' => 'Private Endpoints',
    'Class:AzureSubnet/Attribute:azureprivateendpoints_list+' => '',
));

//
// AzureSubscription
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureSubscription' => 'Abonnement',
	'Class:AzureSubscription+' => 'Abonnement Azure',
	'Class:AzureSubscription/Name' => '%1$s',
	'Class:AzureSubscription/Name+' => '',
	'AzureSubscription:baseinfo' => 'Informations générales',
	'AzureSubscription:moreinfo' => 'Informations complémentaires',
	'AzureSubscription:Date' => 'Dates',
	'AzureSubscription:otherinfo' => 'Autres informations',
	'AzureSubscription:collectors' => 'Option de collecte',
	'Class:AzureSubscription/Attribute:azure_status' => 'Statut Azure',
	'Class:AzureSubscription/Attribute:azure_status+' => '',
	'Class:AzureSubscription/Attribute:azurecis_list' => 'CIs Azure',
	'Class:AzureSubscription/Attribute:azurecis_list+' => '',
	'Class:AzureSubscription/Attribute:azuregroups_list' => 'Groupes',
	'Class:AzureSubscription/Attribute:azuregroups_list+' => '',
	'Class:AzureSubscription/Attribute:azureid' => 'ID Azure',
	'Class:AzureSubscription/Attribute:azureid+' => 'ID Azure sur cette objet',
	'Class:AzureSubscription/Attribute:azureresourcegroups_list' => 'Groupe de ressources',
	'Class:AzureSubscription/Attribute:azureresourcegroups_list+' => '',
	'Class:AzureSubscription/Attribute:azuretenant_id' => 'Locataire ',
	'Class:AzureSubscription/Attribute:azuretenant_id+' => 'Gestion locataire ',
	'Class:AzureSubscription/Attribute:azuretenant_name' => 'Nom du locataire ',
	'Class:AzureSubscription/Attribute:azuretenant_name+' => '',
	'Class:AzureSubscription/Attribute:azureusers_list' => 'Utilisateurs',
	'Class:AzureSubscription/Attribute:azureusers_list+' => '',
	'Class:AzureSubscription/Attribute:discover_objects' => 'Découvertes des objets',
	'Class:AzureSubscription/Attribute:discover_objects+' => 'Découvertes des objets sur cet abonnement',
	'Class:AzureSubscription/Attribute:discover_objects/Value:no' => 'Non',
	'Class:AzureSubscription/Attribute:discover_objects/Value:yes' => 'Oui',
	'Class:AzureSubscription/Attribute:subscriptionid' => 'ID',
	'Class:AzureSubscription/Attribute:subscriptionid+' => 'ID Azure',
));

//
// AzureTenant
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureTenant' => 'Locataire',
	'Class:AzureTenant+' => '',
	'Class:AzureTenant/Name' => '%1$s',
	'Class:AzureTenant/Name+' => '',
	'AzureTenant:baseinfo' => 'Informations générales',
	'AzureTenant:otherinfo' => 'Informations complémentaires',
	'AzureTenant:moreinfo' => 'Autres informations',
	'Class:AzureTenant/Attribute:azuregroups_list' => 'Groupes',
	'Class:AzureTenant/Attribute:azuregroups_list+' => '',
	'Class:AzureTenant/Attribute:azureusers_list' => 'Utilisateurs',
	'Class:AzureTenant/Attribute:azureusers_list+' => '',
	'Class:AzureTenant/Attribute:country' => 'Pays',
	'Class:AzureTenant/Attribute:country+' => 'Pays/Région',
	'Class:AzureTenant/Attribute:description' => 'Description',
	'Class:AzureTenant/Attribute:description+' => '',
	'Class:AzureTenant/Attribute:domain' => 'Nom de domaine',
	'Class:AzureTenant/Attribute:domain+' => 'Domaine principal',
	'Class:AzureTenant/Attribute:tenantid' => 'ID',
	'Class:AzureTenant/Attribute:tenantid+' => '',
	'Class:AzureTenant/Attribute:type' => 'Type',
	'Class:AzureTenant/Attribute:type+' => '',
	'Class:AzureTenant/Attribute:type/Value:AAD-B2C' => 'Azure Active Directory (B2C)',
	'Class:AzureTenant/Attribute:type/Value:AAD' => 'Azure Active Directory',
	'Class:AzureTenant/Attribute:azuresubscriptions_list' => 'Abonnements',
));

//
// AzureVirtualMachine
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureVirtualMachine' => 'VM Azure',
	'Class:AzureVirtualMachine+' => 'Machine virtuelle Azure',
	'Class:AzureVirtualMachine/Name' => '%1$s',
	'Class:AzureVirtualMachine/Attribute:overview' => 'IPs',
	'Class:AzureVirtualMachine/Attribute:overview+' => '',
	'Class:AzureVirtualMachine/Attribute:azureavailability_id' => 'Options de disponibilité',
	'Class:AzureVirtualMachine/Attribute:azureimage_id' => 'Azure image',
	'Class:AzureVirtualMachine/Attribute:azureimage_osfamily_id' => 'Image - Famille OS',
	'Class:AzureVirtualMachine/Attribute:azureimage_osfamily_id+' => 'Famille OS de l\'image initiale',
	'Class:AzureVirtualMachine/Attribute:azureimage_oslicence_id' => 'Image - Licence OS License',
	'Class:AzureVirtualMachine/Attribute:azureimage_oslicence_id+' => 'License OS de l\'image initiale',
	'Class:AzureVirtualMachine/Attribute:azureimage_osversion_id' => 'Image - Version OS',
	'Class:AzureVirtualMachine/Attribute:azureimage_osversion_id+' => 'Version OS version de l\'image initiale',
	'Class:AzureVirtualMachine/Attribute:azurenics_list' => 'Interfaces réseaux',
	'Class:AzureVirtualMachine/Attribute:azurevmdisks_list' => 'Disques',
	'Class:AzureVirtualMachine/Attribute:azurevmsize' => 'Taille',
	'Class:AzureVirtualMachine/Attribute:azurevmsize+' => '',
	'Class:AzureVirtualMachine/Attribute:azurevmsize_core_number' => 'vCPU',
	'Class:AzureVirtualMachine/Attribute:azurevmsize_core_number+' => 'Processeurs virtuels',
	'Class:AzureVirtualMachine/Attribute:managementip' => 'IP de gestion',
	'Class:AzureVirtualMachine/Attribute:managementip+' => 'Adresse IP de gestion',
	'Class:AzureVirtualMachine/Attribute:osfamily_id' => 'Famille OS',
	'Class:AzureVirtualMachine/Attribute:osfamily_id+' => 'Famille de l\'OS',
	'Class:AzureVirtualMachine/Attribute:oslicence_id' => 'License OS',
	'Class:AzureVirtualMachine/Attribute:osversion' => 'Version OS',
	'Class:AzureVirtualMachine/Attribute:osversion+' => 'Version de l\'OS',
	'Class:AzureVirtualMachine/Attribute:osversion_id' => 'Version OS',
	'Class:AzureVirtualMachine/Attribute:provisioning_status' => 'État de provisionnement',
	'Class:AzureVirtualMachine/Attribute:provisioning_status+' => '',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:canceled' => 'Canceled',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:deleting' => 'Deleting',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:failed' => 'Failed',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:inprogress' => 'In progress',
	'Class:AzureVirtualMachine/Attribute:provisioning_status/Value:succeeded' => 'Succeeded',
	'Class:AzureVirtualMachine/Attribute:softwareinstances_list' => 'Instances logiciels',
	'Class:AzureVirtualMachine/Attribute:zone_id' => 'Zone',
	'Class:AzureVirtualMachine/Attribute:zone_id+' => 'Zone de disponibilité',
));

//
// lnkAzureVirtualMachineToSoftwareInstance
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkAzureVirtualMachineToSoftwareInstance' => 'Lien machine virtuelle Azure / Instance logiciel',
	'Class:lnkAzureVirtualMachineToSoftwareInstance+' => '',
	'Class:lnkAzureVirtualMachineToSoftwareInstance/Name' => '%1$s - %2$s',
	'Class:lnkAzureVirtualMachineToSoftwareInstance/Name+' => '',
	'Class:lnkAzureVirtualMachineToSoftwareInstance/Attribute:azurevirtualmachine_id' => 'Machine virtuelle Azure',
	'Class:lnkAzureVirtualMachineToSoftwareInstance/Attribute:softwareinstance_id' => 'Instance logiciel',
));

//
// AzureVNet
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureVNet' => 'VNet',
	'Class:AzureVNet+' => 'Réseau virtuel Azure',
	'Class:AzureVNet/Name' => '%1$s',
	'AzureVNet:Overview:AzurePublicIPAddresses' => 'Adresses IP Azure publiques portées par le VNet',
	'Class:AzureVNet/Attribute:overview' => 'IPs Overview',
	'Class:AzureVNet/Attribute:overview+' => '',
	'Class:AzureVNet/Attribute:address_space' => 'Espace d\'adressage',
	'Class:AzureVNet/Attribute:address_space+' => '',
	'Class:AzureVNet/Attribute:azurenetworkinterfaces_list' => 'Interfaces',
	'Class:AzureVNet/Attribute:azurenetworkinterfaces_list+' => '',
    'Class:AzureVNet/Attribute:azuresubnets_list' => 'Sous-réseaux',
    'Class:AzureVNet/Attribute:azuresubnets_list+' => '',
));

//
// AzureVNetGateway
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureVNetGateway' => 'VNGateway',
	'Class:AzureVNetGateway+' => 'Passerelle de réseau virtuel Azure',
	'Class:AzureVNetGateway/Name' => '%1$s',
));

//
// AzureWeb
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AzureWeb' => 'Web Azure',
	'Class:AzureWeb+' => '',
	'Class:AzureWeb/Name' => '%1$s',
));

//
// Location
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Location/Attribute:azureid' => 'ID Azure',
	'Class:Location/Attribute:azureid+' => '',
	'Class:Location/Attribute:code' => 'Code',
	'Class:Location/Attribute:code+' => '',
));

//
// Menus
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:ConfigManagement:Azure' => 'Cloud Azure',
    'Menu:Azure:General' => 'Général',
    'Menu:Azure:Compute' => 'Calcul',
    'Menu:Azure:Storage' => 'Stockage',
    'Menu:Azure:Database' => 'Base de données',
    'Menu:Azure:Container' => 'Conteneurs',
    'Menu:Azure:Networking' => 'Réseau',
));
