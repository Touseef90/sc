<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Photographer
*/
class Photographer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('photo/index');
	}

	public function show($photo)
	{
		$this->load->view('photo/show');
	}

}
