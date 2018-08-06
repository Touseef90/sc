<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Login
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
        parent::__construct();
	}

	public function index()
	{
		$this->load->view('login/index');
    }

    public function signup()
    {
        $this->load->view('login/signup');
    }
}
