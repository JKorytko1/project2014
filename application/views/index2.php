<?php

include_once('block/header2.php');
if(($data['view'] != 'home') && ($data['view'] != 'home2'))include_once('block/left-menu2.php');

$this->load->view($data['view'],$data);  

include('block/footer2.php');

 ?>
