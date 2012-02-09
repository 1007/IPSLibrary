<?
	/**@addtogroup ipscomponent
	 * @{
	 *
	 * @file          IPSModuleAVControl_Entertainment.class.php
	 * @author        Andreas Brauneis
	 *
	 */

	IPSUtils_Include ("Entertainment.inc.php", "IPSLibrary::app::modules::Entertainment");

	/**
	 * @class IPSModuleAVControl_Entertainment
	 *
	 * Klasse zur R�ckmeldung von Audio/Video Receivern an die Entertainment Steuerung
	 *
	 * @author Andreas Brauneis
	 * @version
	 * Version 2.50.1, 31.01.2012<br/>
	 */

	class IPSModuleAVControl_Entertainment extends IPSModuleAVControl {

		/**
		 * @public
		 *
		 * Initialisierung des IPSModuleAVControl_Entertainment
		 *
		 */
		public function __construct() {
		}

		/**
		 * @public
		 *
		 * Synchronisation Ein/Ausschalten eines Raumes/Ausgangs
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param boolean $value Wert f�r Power (Wertebereich false=Off, true=On)
		 */
		public function SyncPower($outputId, $value) {
		}

		/**
		 * @public
		 *
		 * Synchronisation der Lautst�rke f�r einen Ausgang
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param integer $value Wert der Lautst�rke (Wertebereich 0 - 100)
		 */
		public function SyncVolume($outputId, $value) {
		}

		/**
		 * @public
		 *
		 * Synchronisation des Eingangs/Source f�r einen Ausgang
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param integer $value Eingang der gesetzt werden soll (Wertebereich 0 - x)
		 */
		public function SyncSource($outputId, $value) {
		}


	}

	/** @}*/
?>