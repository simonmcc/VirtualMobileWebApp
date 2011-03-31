<?php
// system/application/controllers/hello.php

class Hello extends CI_Controller 
{

    function world() 
    {

        echo "Hello CodeIgniter!";

    }
    
    public function index()
	{
		$this->load->view('hello');
	}
}
?>