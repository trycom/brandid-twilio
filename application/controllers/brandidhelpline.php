<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class brandidhelpline extends CI_Controller
{
	protected $caller_id;
	protected $voice;
	protected $no_voicemail_timeout;
	protected $office_hours_start;
	protected $office_hours_end;

	function __construct()
	{
		parent::__construct();
		$this->load->config('twilio');
		$this->load->library('twilio');
		$this->load->helper('url');

		$this->caller_id = $this->config->item('caller_id');
		$this->voice = array('voice' => $this->config->item('voice_gender'), 'language' => $this->config->item('voice_language'));
		$this->no_voicemail_timeout = $this->config->item('no_voicemail_timeout');
		$this->office_hours_start = $this->config->item('office_hours_start');
		$this->office_hours_end = $this->config->item('office_hours_end');

		date_default_timezone_set('Europe/London');
	}

	function index()
	{
		$hour = date('H');

		$response = $this->twilio->addResponse();

		if ($hour < $this->office_hours_start || $hour > $this->office_hours_end)
		{
			$response->addSay('Thank you for calling BRANDiD customer support. I\'m afraid we\'re currently closed. Please call back ' . $this->office_hours_start . 'am to ' . ($this->office_hours_end - 12) . 'pm Monday to Friday.', $this->voice);
		}
		else
		{
			$response->addSay('Thank you for calling BRANDiD customer support. Please hold while we connect you.', $this->voice);
			$dial = $response->addDial('', array('callerId' => $this->caller_id, 'action' => site_url('brandidhelpline/step2/')));
			$dial->addNumber('+442074914870', array('url' => site_url('/brandidhelpline/callnotice/'))); 
		}

		$view['response'] = $response;
		$this->load->view('response_view', $view);
	}

	function step2()
	{
		//print_r($_REQUEST);
		$response = $this->twilio->addResponse();
		$response->addSay('Please wait. Your call is being forwarded.', $this->voice);
		$dial = $response->addDial('', array('callerId' => $this->caller_id, 'action' => site_url('brandidhelpline/step3/'), 'timeout' => $this->no_voicemail_timeout));
		//$dial->addNumber('+447917138230', array('url' => site_url('/brandidhelpline/callnotice/'))); 
		$dial->addNumber('+447917138230', array('url' => site_url('/brandidhelpline/callnotice/'))); 

		$view['response'] = $response;
		$this->load->view('response_view', $view);
	}

	function step3()
	{
		$response = $this->twilio->addResponse();
		$response->addSay('I\'m sorry, all of our agents are busy with other calls. Please call back ' . $this->office_hours_start . 'am to ' . ($this->office_hours_end - 12) . 'pm Monday to Friday.', $this->voice);
		echo $response->Respond();
	}

	function callnotice()
	{
		$response = $this->twilio->addResponse();
		//$gather = $response->addGather('', array('numDigits' => 1));
		$response->addSay('This is a call from BRANDiD.', $this->voice);

		$view['response'] = $response;
		$this->load->view('response_view', $view);
	}

	function hour()
	{
		echo 'The hour is ' . date('H') . '.';
	}

}
