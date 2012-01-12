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
$config['number']        = '+442071838750';

/**
* Outgoing calls number
*/
$config['caller_id']        = '+442074914870';

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
 * Office hours
 */

$config['office_hours_start'] = 10;
$config['office_hours_end'] = 19;

/* End of file twilio.php */