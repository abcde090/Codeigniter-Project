<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css"  href="<?php echo $base.'css/'.$css?>"> 
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title><?=$title;?></title>

</head>
 
<body>
    
    <div id="header"><?php $this->load->view('pizza_header'); ?></div>
    <div id="menu"><?php $this->load->view('pizza_menu'); ?></div>
    
<h2><?=$header;?></h2>

   

<?php foreach($orders as $row){ ?>

<?php echo $row->ad."--".$row->adet."--".$row->fiyat."<br>";?>


<?php } ?>

<div id="footer"> <?php $this->load->view('pizza_footer'); ?></div>


</body>
</html> 
