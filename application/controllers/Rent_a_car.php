<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Rent_a_car
*/
class Rent_a_car extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('car/index');
	}

	public function show($car)
	{
		$this->load->view('car/show');
	}

}
