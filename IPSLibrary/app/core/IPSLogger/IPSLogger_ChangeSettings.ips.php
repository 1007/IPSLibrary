<?
	/**@addtogroup ipslogger 
	 * @{
	 *
	 * @file          IPSLogger_ChangeSettings.ips.php
	 * @author        Andreas Brauneis
	 *
	 * Ver�ndern von Einstellungen des IPSLoggers
	 *
	 * Dieses Script ist als Action Script f�r die Variablen hinterlegt, die �ber das WebFront
	 * ver�ndert werden k�nnen.
	 *
	 */
	include "IPSLogger_Constants.inc.php";

	if ($IPS_VARIABLE==c_ID_EMailOutEnabled) {
		if (c_ID_SmtpDevice <> 0) {
			SetValue($IPS_VARIABLE, $IPS_VALUE);
			
			if (!GetValue(c_ID_EMailOutEnabled)) {
				SetValue(c_ID_EMailOutMsgList, '');          	
				IPS_SetScriptTimer(c_ID_ScriptSendMail, 0);		
			}
		}
	} else if ($IPS_VARIABLE==c_ID_ProwlOutEnabled) {
		if (c_Key_ProwlService <> '') {
			SetValue($IPS_VARIABLE, $IPS_VALUE);
		}
	} else {
		SetValue($IPS_VARIABLE, $IPS_VALUE);
	}
	;
	/** @}*/
?>