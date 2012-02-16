<?
	/**@defgroup ipsmodulemanager_configuration IPSModuleManager Konfiguration
	 * @ingroup ipsmodulemanager
	 * @{
	 * Alle Konfigurations Einstellung, die f�r Installation von Modulen ben�tigt werden, sind in Initialisierungs Files abgelegt. Ablageort 
	 * f�r diese Files ist "IPSLibray\install\InitializationFiles\", die Files werden beim initialen Download des Modules aus den Files im "Default" 
	 * Verzeichnis generiert und bei sp�teren Updates nicht mehr ver�ndert.
	 * Bei Problemen kann das File wieder mit der Version im Default Verzeichnis repariert werden. Im Verzeichnis "Examples" finden sich noch weitere 
	 * Files, die Beispiele f�r die jeweilige Konfiguration beinhalten.
	 * 
	 * Eine kurze Beschreibung des jeweiligen Parameters, ist im jeweilen Initialisierungs File zu finden.
	 * 
	 * Allgemeine Parameter sind im Konfigurations File des Modulemanagers abgelegt (Backup Directory, Logging Directory), spezielle Module Parameter 
	 * sind dann im jeweiligen Ini File des Modules abgelegt.
	 * 
	 * Teilweise werden Parameter auch in beiden Files gesucht. Zum Beispiel werden die diversen Parameter zur Installation des WebFronts (Enabled, 
	 * Root, WFCId) zuerst im jeweiligen Module Ini File gesucht (zB IPSLogger.ini), ist es dort nicht definiert, wird im File IPSModuleManager.ini gesucht.
	 * 
	 * Beispiel:
	 *  @code 
         [WFC10]
         Enabled=true
         Path=Visualization.WebFront.Entertainment
         ID=
         TabName=
         TabIcon=Speaker
         TabOrder=20
         
         [Mobile]
         Enabled=true
         Path=Visualization.Mobile
         Name=Entertainment
         Order=20
         Icon=Speaker
	    @endcode
	 * 
	 * [] markiert immer eine Gruppe von Einstellungen, In der Gruppe "WFC10� werden die Einstellungen gesucht, die f�r die WebFront 
	 * Installation ben�tigt werden. (WFC10 ? WebFront mit 10 Zoll Optimierung). Analog gibt es eine Gruppe "Mobile", die f�r das Mobile 
	 * Interface (iPhone, iPad und Android) verwendet wird. 
	 * 
	 * Beschreibung der wichtigsten Parameter:
	 * - "Enabled" definiert, ob das jeweilige Interface installiert wird 
	 * - "Path" bestimmt den Installations Pfad in IP-Symcon
	 * - "ID" bezeichnet die ID des Webfront Konfigurators der verwendet werden soll, wenn nichts angegeben wird, verwendet die Installations 
	 *   Prozedure den erst Besten der gefunden wird.
	 * - "TabName" definiert Namen im SplitPane des WebFronts
	 * - "TabIcon" definiert Icon im SplitPane des WebFronts
	 * - "TabOrder" definiert Position im SplitPane des WebFronts
	 * - "Name" f�r Mobile Frontend Installation 
	 * - "Order" Position Mobile Frontend
	 * - "Icon" Icon f�r Mobile Frontend
	 * 
	 * @}*/

	 /**@defgroup ipsmodulemanager_installation IPSModuleManager Installation
	 * @ingroup ipsmodulemanager
	 * @{
	 *
	 * Installations Script f�r IPSModuleManager
	 *
	 * @file          IPSModuleManager_Installation.ips.php
	 * @author        Andreas Brauneis
	 * @version
	 *  Version 2.50.1, 31.01.2012<br/>
	 *
	 * @page requirements_modulemanager Installations Voraussetzungen IPSModuleManager
	 * - IPS Kernel >= 2.50
	 *
	 * @page install_modulemanager Installations Schritte
	 * Der IPSModuleManager wird bereits bei der Basis Installation angelegt (Siehe BaseInstallation im Forum).
	 *
	 */

	return; 

	if (!isset($moduleManager)) {
		IPSUtils_Include ('IPSModuleManager.class.php', 'IPSLibrary::install::IPSModuleManager');

		echo 'ModuleManager Variable not set --> Create "default" ModuleManager';
		$moduleManager = new IPSModuleManager('IPSModuleManager');
	}

	$moduleManager->VersionHandler()->CheckModuleVersion('IPS','2.50');

	$programPath = $moduleManager->GetConfigValue(IPSConfigurationHandler::PROGRAMPATH);


	/** @}*/
?>