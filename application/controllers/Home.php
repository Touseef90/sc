<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Home
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home/index');
	}

	public function index_u()
	{
		$this->load->view('home/index_u');
	}
}