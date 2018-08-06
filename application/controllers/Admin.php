<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Admin
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/index');
	}

	public function create()
	{
		$this->load->view('admin/create');
	}

	public function manage($category, $id)
	{
		if ($category == 'banquet') {
			// we call a model here
			$data = '';
			$this->load->view('manage_banquet/show');
		} elseif ($category == 'beauty') {
			// we call a model here
			$data = '';
			$this->load->view('manage_beauty/show');
		} elseif ($category == 'car') {
			// we call a model here
			$data = '';
			$this->load->view('manage_car/show');
		} elseif ($category == 'cards') {
			// we call a model here
			$data = '';
			$this->load->view('manage_cards/show');
		} elseif ($category == 'catering') {
			// we call a model here
			$data = '';
			$this->load->view('manage_catering/show');
		} elseif ($category == 'photo') {
			// we call a model here
			$data = '';
			$this->load->view('manage_photo/show');
		} else {
			$this->load->view('admin/index');
		}
	}

	public function book()
	{
		if ($category == 'banquet') {
			$this->load->view('book_banquet/show');
		} elseif ($category == 'beauty') {
			$this->load->view('book_beauty/show');
		} elseif ($category == 'car') {
			$this->load->view('book_car/show');
		} elseif ($category == 'cards') {
			$this->load->view('book_cards/show');
		} elseif ($category == 'catering') {
			$this->load->view('book_catering/show');
		} elseif ($category == 'photo') {
			$this->load->view('book_photo/show');
		} else {
			$this->load->view('admin/index');
		}
	}

}
