<html>
<head>
<link rel="stylesheet" type="text/css"  href="<?php echo $base.'css/'.$css?>">
</head>
<body>
<div id="header">
<?php $this->load->view('pizza_header'); ?>
</div>
<div id="menu">
<?php 	$this->load->view('pizza_menu'); ?>
</div>
 
<h3>Sipariş Sayfası</h3>


<?php echo form_open('Pizza/order'); ?>

<?php echo $isim .':'.form_input($temiz_isim); ?> 
<?php //echo form_input('isim'); bunun yerine üsttekini kullandık. ?>
</br>
<?php echo $pizza.':'.form_dropdown('pizza',$pizzalar); ?>
<?php //echo form_dropdown('pizza',$pizzalar); ?>
</br>
<?php echo $tip.':'.form_dropdown('tip',$tipler); ?>
<?php //echo form_dropdown('tip',$tipler); ?>
</br>
<?php echo $adet.':'.form_input($temiz_adet); ?>
<?php //echo form_input('adet'); ?>
</br>
<?php echo $kenar.':'.form_checkbox($temiz_kenar); ?> 
<?php //echo form_checkbox('kenar','yes',TRUE); ?>
</br>
<?php echo $adres.':'.form_textarea($temiz_adres); ?> 
<?php //echo form_textarea('adres'); ?>
</br>

</br>
<?php echo $fiyat.':'.  form_input($temiz_fiyat); ?> 
<?php //echo form_textarea('adres'); ?>
</br>

<?php echo form_submit('mysubmit','Sipariş Ver!');  ?>
<?php echo form_close(); ?>




 
<p>Sipariş Formu Burada Olacak</p>
<div id="footer">
<?php $this->load->view('pizza_footer'); ?>
</div>
 
</body>
</html> 
