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
$config['account_sid']   = '';

/**
* Auth Token
**/
$config['auth_token']    = '';

/**
* API Version
**/
$config['api_version']   = '2010-04-01';

/**
* Twilio Phone Number
**/
$config['number']        = '+';

/**
* Outgoing calls number
*/
$config['caller_id']        = '+';

/**
 * Support numbers
 */

$config['support_office'] = '+';
$config['support_mobile'] = '+';

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

$config['hold_music'] = 'http://twimlets.com/holdmusic?Bucket=com.twilio.music.electronica';

/**
 * Log calls?
 */

$config['twilio_log'] = true;
$config['twilio_logfile'] = 'twilio.log';

/* End of file twilio.php */