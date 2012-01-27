<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Name:  Twilio
	*
	* Author: Ben Edmunds
	*		  ben.edmunds@gmail.com
	*         @benedmunds
	*
	* Location:
	*
	* Created:  03.29.2011
	*
	* Description:  Twilio configuration settings.
	*
	*
	*/

/**
* Mode ("sandbox" or "prod")
**/
$config['mode']   = 'sandbox';

/**
* Account SID
**/
$config['account_sid']   = 'ACe27c18b2600c4d14980fc5549e4c9cdb';

/**
* Auth Token
**/
$config['auth_token']    = 'b9eb1a0107f7455059ec3ad46a3cfaf7';

/**
* API Version
**/
$config['api_version']   = '2010-04-01';

/**
* Twilio Phone Number
**/
$config['number']        = '+442034752952';

/**
* Outgoing calls number
*/
$config['caller_id']        = '+442074914870';

/**
 * Support numbers
 */

$config['support_office'] = '+447917138230';
$config['support_mobile'] = '+447739070851';

/**
 * Default voice
 */
$config['voice_gender'] = 'woman';
$config['voice_language'] = 'en-gb';

/**
 * Avoid going to voicemail with a short dial duration
 */

$config['no_voicemail_timeout'] = 20;

/**
 * Length of time between agent nag messages. Replayed attempts times before moving on. 
 */
 
$config['agent_timeout'] = 10;
$config['agent_attempts'] = 3;

/**
 * Office hours (code assumes closed at weekends). Office hours end after XX:59. 
 */

$config['office_hours_start'] = 10;
$config['office_hours_end'] = 18;

/**
 * Hold music to play
 */

$config['hold_music'] = 'http://twilio.getbrandid.com/godfather-holdmusic.mp3';

/**
 * Log calls?
 */

$config['twilio_log'] = true;
$config['twilio_logfile'] = 'twilio.log';

/* End of file twilio.php */