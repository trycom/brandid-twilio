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
 * Office hours (code assumes closed at weekends)
 */

$config['office_hours_start'] = 10;
$config['office_hours_end'] = 19;

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