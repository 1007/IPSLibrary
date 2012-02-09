<?
	/**@addtogroup ipscomponent
	 * @{
	 *
	 * @file          IPSModuleAVControl.class.php
	 * @author        Andreas Brauneis
	 *
	 */

	/**
	 * @class IPSModuleAVControl
	 *
	 * Definiert ein IPSModuleAVControl Object, das die R�ckmeldung von Audio/Video Receiver Komponenten
	 * an Module der IPSLibrary erlaubt.
	 *
	 * @author Andreas Brauneis
	 * @version
	 * Version 2.50.1, 31.01.2012<br/>
	 */

	abstract class IPSModuleAVControl extends IPSModule {

		/**
		 * @public
		 *
		 * Synchronisation Ein/Ausschalten eines Raumes/Ausgangs
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param boolean $value Wert f�r Power (Wertebereich false=Off, true=On)
		 */
		abstract public function SyncPower($outputId, $value);

		/**
		 * @public
		 *
		 * Synchronisation der Lautst�rke f�r einen Ausgang
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param integer $value Wert der Lautst�rke (Wertebereich 0 - 100)
		 */
		abstract public function SyncVolume($outputId, $value);

		/**
		 * @public
		 *
		 * Synchronisation des Eingangs/Source f�r einen Ausgang
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param integer $value Eingang der gesetzt werden soll (Wertebereich 0 - x)
		 */
		abstract public function SyncSource($outputId, $value);


	}

	/** @}*/
?>