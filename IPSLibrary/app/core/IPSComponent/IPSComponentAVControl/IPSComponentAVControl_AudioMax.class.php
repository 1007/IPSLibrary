<?
	/**@addtogroup ipscomponent
	 * @{
	 *
	 * @file          IPSComponentAVControl_AudioMax.class.php
	 * @author        Andreas Brauneis
	 *
	 */

	IPSUtils_Include ('IPSComponentAVControl.class.php', 'IPSLibrary::app::core::IPSComponent::IPSComponentAVControl');
	
   /**
    * @class IPSComponentAVControl_AudioMax
    *
    * Definiert ein IPSComponentAVControl_AudioMax Object, das ein IPSComponentAVControl Object mit Hilfe der AudioMax MultiRoom Steuerung e-Service Online implementiert
    *
    * @author Andreas Brauneis
    * @version
    * Version 2.50.1, 31.01.2012<br/>
    */

	class IPSComponentAVControl_AudioMax extends IPSComponentAVControl{

		private $instanceId;
	
		/**
		 * @public
		 *
		 * Initialisierung des IPSComponentAVControl_AudioMax
		 *
		 * @param integer $instanceId InstanceId des AudioMax
		 */
		public function __construct($instanceId) {
			$this->instanceId = (int)$instanceId;
		}

		/**
		 * @public
		 *
		 * Function um Events zu behandeln, diese Funktion wird vom IPSMessageHandler aufgerufen, um ein aufgetretenes Event 
		 * an das entsprechende Module zu leiten.
		 *
		 * @param integer $variable ID der ausl�senden Variable
		 * @param string $value Wert der Variable
		 * @param IPSModuleAVControl $module Module Object an das das aufgetretene Event weitergeleitet werden soll
		 */
		public function HandleEvent($variable, $value, IPSModulePlayer $module) {
			$name = IPS_GetName($variable);
			switch($name) {
				case 'XXXX': // Sync current Command of AVControl
					$module->XXXXX($value);
					break;
				default:
					throw new IPSComponentException('Event Handling NOT supported for Variable '.$variable.'('.$name.')');
			}
		}

		/**
		 * @public
		 *
		 * Ein/Ausschalten eines Raumes/Ausgangs
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param boolean $value Wert f�r Power (Wertebereich false=Off, true=On)
		 */
		public function SetPower($outputId, $value) {
		}

		/**
		 * @public
		 *
		 * Retourniert Power Zustand eines Raumes
		 *
		 * @param integer $outputId Ausgang (Wertebereich 0 - x)
		 * @return boolean Wert der Lautst�rke (Wertebereich false=Off, true=On)
		 */
		public function GetPower($outputId) {
		}


		/**
		 * @public
		 *
		 * Setzen der Lautst�rke f�r einen Ausgang
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param integer $value Wert der Lautst�rke (Wertebereich 0 - 100)
		 */
		public function SetVolume($outputId, $value) {
		}

		/**
		 * @public
		 *
		 * Retourniert aktuelle Lautst�rke eines Raumes
		 *
		 * @param integer $outputId Ausgang (Wertebereich 0 - x)
		 * @return integer Wert der Lautst�rke (Wertebereich 0 - 100)
		 */
		public function GetVolume($outputId) {
		}

		/**
		 * @public
		 *
		 * Setzen des Eingangs/Source f�r einen Ausgang
		 *
		 * @param integer $outputId Ausgang der ge�ndert werden soll (Wertebereich 0 - x)
		 * @param integer $value Eingang der gesetzt werden soll (Wertebereich 0 - x)
		 */
		public function SetSource($outputId, $value) {
		}

		/**
		 * @public
		 *
		 * Retourniert aktuellen Eingang eines Raumes
		 *
		 * @param integer $outputId Ausgang (Wertebereich 0 - x)
		 * @return integer Eingang der gerade gew�hlt ist (Wertebereich 0 - x)
		 */
		public function GetSource($outputId) {
		}


	}

	/** @}*/
?>