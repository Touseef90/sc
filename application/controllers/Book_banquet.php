<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Book_banquet
*/
class Book_banquet extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
	}

	public function show($id)
	{
		$this->load->view('book_banquet/show');
    }
    
    public function store()
    {
        # code...
    }

    public function edit($id)
    {
        # code...
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
