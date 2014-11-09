<?php
include('block/header.php');
include('block/left-menu.php');

$this->load->view($data['view'],$data);  

include('block/footer.php');
 ?>
