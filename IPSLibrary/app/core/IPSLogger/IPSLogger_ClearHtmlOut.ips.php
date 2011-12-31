<?
	/**@addtogroup ipslogger 
	 * @{
	 *
	 * @file          IPSLogger_ClearHtmlOut.ips.php
	 * @author        Andreas Brauneis
	 *
	 * Dieses Script l�scht den Inhalt des HTML Outputs, der f�r die Anzeige im WebFront
	 * ben�tzt wird.
	 *
	 */
	include "IPSLogger_Constants.inc.php";
	define ("c_LogId", "IPSLogger_ClearHtmlOut");

   SetValue(c_ID_HtmlOutMsgList, '');

	/** @}*/
?>