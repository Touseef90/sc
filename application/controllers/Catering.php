<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Catering
*/
class Catering extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('catering/index');
	}

	public function show($catering)
	{
		$this->load->view('catering/show');
	}

}
