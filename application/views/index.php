<?php

include_once('block/header.php');
if($data['view']!= 'home')include_once('block/left-menu.php');

$this->load->view($data['view'],$data);  

include('block/footer.php');
 ?>
