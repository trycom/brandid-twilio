<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class brandidhelpline extends CI_Controller
{
	protected $account_sid;
	protected $api_version;

	function __construct()
	{
		parent::__construct();
		$this->load->library('twilio');

		//initialize the CI super-object
		$this->_ci =& get_instance();

		//load config
		$this->_ci->load->config('twilio', TRUE);

		//$this->mode        = $this->_ci->config->item('mode', 'twilio');
		$this->account_sid = $this->_ci->config->item('account_sid', 'twilio');
		//$this->auth_token  = $this->_ci->config->item('auth_token', 'twilio');
		$this->api_version = $this->_ci->config->item('api_version', 'twilio');
	}

	function index()
	{
		//$response = $this->twilio->addSay('Hello from CodeIgniter.');
		$response = $this->twilio->response();
		$response->addSay('Thanks for calling BRANDiD customer support, please hold while we connect you.', array('voice' => 'woman', 'language' => 'en-gb'));
		$response->addDial('+447764942885');
		//$repsonse->
		echo $response->Respond();
		//print_r($response);
		//$url = '/' . $this->api_version . '/Accounts/' . $this->account_sid;
		//echo 'hello' . $url;
		//print $this->twilio->request('/' . $this->api_version . '/Accounts/' . $this->account_sid . '/Calls', 'POST', $response);
		//print $this->twilio->request($url, 'POST', $data);
		//print $response;

		
		/*$from = '(415) 599-2671';
		$to = '+447764942885';
		$message = 'This is a test...';

		$response = $this->twilio->sms($from, $to, $message);


		if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
		else
			echo 'Sent message to ' . $to;*/
	}

}
