<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Banquet
*/
class Banquet extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('banquet/index');
	}

	public function show($banquet)
	{
		$this->load->view('banquet/show');
	}

	public function test()
	{
		$this->load->view('banquet/test');
	}
}