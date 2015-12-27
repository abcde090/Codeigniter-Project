<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Pizza extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    
    function index()
    {
        $title='Osmaniye Dominos Pizza Sipariş Sayfası';
        $header='<h1>Siparişler</h1>';
        $orders='Sipariş Yok';
        $data['title']=$title;
        $data['header']=$header;
        //$data['orders']=$orders;
        $this->load->model('pizza_model');
        $data['orders']=  $this->pizza_model->get_all_orders();
        $data+=$this->pizza_model->genel();
        
               //$this->load->view('pizza_header',$data);
		//$this->load->view('pizza_menu',$data);
		
		//$this->load->view('pizza_footer',$data);
                    
        $this->load->view('pizza_view',$data);
        
       
       
    }
    
    
    function get_method($name='',$unit='')
    {
         $data['title']='Osmaniye Dominos Pizza Sipariş Sayfası';
        $data['header']='<h1>Siparişler</h1>';
        
        if (!$name || !$unit)
        {
            $data['orders']='Sipariş Yok';
            
        }
        else
        {
            $data['orders']='Adı :'.$name.' Adedi:'.$unit;
        }
          $this->load->view('pizza_view',$data);
        
    }
    
    
    
    function a_pizza()
	{
		$data['title']='Kodmerkezi.net Pizza Sipariş Sayfası';
		$data['header']='<h1>Siparisler</h1>';
 
		$this->load->model('pizza_model');
		$data['orders']=$this->pizza_model->get_specific_order(2);
 
		$this->load->view('pizza_view',$data);
	}

    
        function order()
        {
                              
                $data['title']='Kodmerkezi.net Pizza Sipariş Sayfası';
		$data['header']='<h1>Pizza Siparis Projesi</h1>';
		$data['footer']='© copyright kodmerkezi.net';
                
                
            
                 $this->load->helper('form');
        // $this->load->helper('html');
          $this->load->model('pizza_model');
           $data['orders']=  $this->pizza_model->get_all_orders();
             $data+=$this->pizza_model->genel();
         
             
             if($this->input->post('mysubmit'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
		{  
			$this->pizza_model->insert_new_entry();  //yeni elemanı database eklemek için model dosyamızı çağırıyoruz
		}

             
             
                $this->load->library('MyMenu');
		$menu = new MyMenu;
		$data['menu'] = $menu->show_menu();

                
                
                //$this->load->view('pizza_header',$data);
                //$this->load->view('pizza_menu',$data);
                $this->load->view('pizza_order',$data);
                //$this->load->view('pizza_footer',$data);
            
        }
        
     /**   
        
        function genel()
	{
		$data['title']='Kodmerkezi.net Pizza Sipariş Sayfası';
		$data['header']='<h1>Pizza Siparis Projesi</h1>';
		$data['footer']='© copyright kodmerkezi.net'; 
		$this->load->library('MyMenu');//kütüphanemizi yüklüyoruz.
		$menu = new MyMenu; //classımızdan yeni bir obje oluşturuyoruz.
		$data['menu'] = $menu->show_menu();//objenin fonksiyonunu çağırarak menümüzü döndürüyoruz.
		return $data;
	}

        **/
        
    
}

?>
