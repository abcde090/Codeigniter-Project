<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Hello extends CI_Controller
{
    
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        
       $this->load->view('hello_view');
               
    }
    
    function other_index()
	{
		echo "Bu da fonksiyonun farklı çağrılmış halidir.";
	}

    
    
}