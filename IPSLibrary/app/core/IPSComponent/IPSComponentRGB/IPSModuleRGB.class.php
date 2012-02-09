<?
	/**@addtogroup ipscomponent
	 * @{
	 *
 	 *
	 * @file          IPSModuleRGB.class.php
	 * @author        Andreas Brauneis
	 *
	 *
	 */

	/**
	 * @class IPSModuleRGB
	 *
	 * Definiert ein IPSModuleRGB Object, das als Wrapper f�r RGB Steuerger�te in der IPSLibrary
	 * verwendet werden kann.
	 *
	 * @author Andreas Brauneis
	 * @version
	 * Version 2.50.1, 31.01.2012<br/>
	 */

	abstract class IPSModuleRGB extends IPSModule {

		/**
		 * @public
		 *
		 * Erm�glicht die Synchronisation des aktuellen Zustands 
		 *
		 * @param boolean $power RGB Ger�t On/Off
		 * @param integer $color RGB Farben
		 * @param integer $level Dimmer Einstellung der RGB Beleuchtung
		 */
		abstract public function SyncState($power, $color, $level);

	}

	/** @}*/
?>