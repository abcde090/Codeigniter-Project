<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pizza_Model extends CI_Model
{
    
    function __construct() {
        parent::__construct();
            
        $this->load->database();
     }
    
    
     function get_all_orders()
     {
         $query=$this->db->get('pizza');
         return $query->result();
         
     }
    
     
     function get_specific_order($id)
	{
		$query = $this->db->get_where('pizza',array('pizzaid'=>$id));//id = 1 olan verileri seçiyoruz sadece.
		return $query->result();		
	}

      
        function genel()
	{
		$data['title']='Kodmerkezi.net Pizza Sipariş Sayfası';
		$data['header']='<h1>Pizza Siparis Projesi</h1>';
		$data['footer']='© copyright kodmerkezi.net'; 
                $data['base']= $this->config->item('base_url');//projemizin ana dizinini çekiyoruz.
		$data['css']= $this->config->item('css');	//css dosyamızı 
                
		$this->load->library('MyMenu');//kütüphanemizi yüklüyoruz.
		$menu = new MyMenu; //classımızdan yeni bir obje oluşturuyoruz.
		$data['menu'] = $menu->show_menu();//objenin fonksiyonunu çağırarak menümüzü döndürüyoruz.
		
                
                
                $data['isim']	 	= 'İsminiz &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
		$data['pizza']		='Pizza Seçin';
		$data['pizzalar']	 	= array('cilgin pizza'=>'cilgin pizza',
									'tavuklu'=>'tavuklu',
									'acili'=>'acili',
									'mantarli'=>'mantarli',
									'karisik'=>'karisik',
									'margarita'=>'margarita');
		$data['tip']	 	= 'Boyut&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
		$data['tipler']	 	= array('kücük'=>'kücük',
									'büyük'=>'büyük',
									'normal'=>'normal');
		$data['adet']	 	= 'Adet &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
		$data['kenar']	 	= 'İnce Kenar';
                
                $data['fiyat']	 	= 'Ürün fiyatı';
		$data['adres']	 	= 'Adres &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
		$data['temiz_isim']	= array('name'=>'isim',
									'size'=>30);
		$data['temiz_adet']	= array('name'=>'adet',
									'size'=>30);
		$data['temiz_kenar']= array('name'=>'kenar',
									'value'=>'yes',  
									'checked'=>TRUE );
		$data['temiz_adres']= array('name'=>'adres',
									'rows'=>5,
									'cols'=>30);	
 
		$data['temiz_fiyat']	= array('name'=>'fiyat',
									'size'=>30);
                
                
                
                return $data;
	}

        
        
        function insert_new_entry()
	{
 
		$data = array(
		 'ad'=>$this->input->post('isim'),
		 //'tip'=>$this->input->post('tip'),
		// 'incekenar'=>$this->input->post('kenar'),
		 'adet'=>$this->input->post('adet'),
		 'adres'=>$this->input->post('adres'),
                    
                    'fiyat'=>$this->input->post('fiyat')
		// 'fiyat'=>'20' //daha sonra bunun hesabı için fonksiyon yazılabilir.
		 );
                
                
		  $this->db->insert('pizza',$data); 
	} 

        
        
        
        
        }





?>

