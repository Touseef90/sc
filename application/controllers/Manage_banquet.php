<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Manage_banquet
*/
class Manage_banquet extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function show($id)
	{
		$this->load->view('manage_banquet/show');
    }
    
    public function store()
    {
        # code...
    }

    public function edit($id)
    {
        $this->load->view('manage_banquet/edit');
    }

    public function update()
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }

}
