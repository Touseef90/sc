<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Cards
*/
class Cards extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('cards/index');
	}

	public function show($cards)
	{
		$this->load->view('cards/show');
	}

}
