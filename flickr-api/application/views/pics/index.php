<?php
//applications/views/news/index.php

$this->load->view($this->config->item('theme') .'header');

echo '<h2>Picture Categories</h2>';

echo'<h3><a href="' .site_url('pics/' . 'Pandas') .'">' . 'Pandas</a></h3>';
echo'<h3><a href="' .site_url('pics/' . 'Red Pandas') .'">' . 'Red Pandas</a></h3>';
echo'<h3><a href="' .site_url('pics/' . 'BabyPandas') .'">' . 'Baby Pandas</a></h3>';


$this->load->view($this->config->item('theme') .'footer');
?>