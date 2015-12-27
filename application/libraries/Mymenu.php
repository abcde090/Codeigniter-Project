<?php
class MyMenu{
 	function show_menu(){
  		$obj =& get_instance();
  		// $obj->load->helper('url');
  		$menu  = "<ul>";
  		$menu .= "<li>";
  		$menu .= "<a href=".'"'."index".'"'.">Siparisler</a>";
  		$menu .= "</li>";
  		$menu .= "<li>";		
  		$menu .= "<a href=".'"'."order".'"'.">Siparis Ver</a>";		
  		$menu .= "</li>";		
  		$menu .= "</ul>";
 
  		return $menu;
 	}
   
    
}
?> 
