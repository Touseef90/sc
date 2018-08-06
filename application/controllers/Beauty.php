<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Beauty
*/
class Beauty extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('beauty/index');
	}

	public function show($beauty)
	{
		$this->load->view('beauty/show');
	}

}
