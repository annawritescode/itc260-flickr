<?php

$this->load->view($this->config->item('theme') . 'header'); //slug comes from custom config file

echo'<h3><a href='. site_url('pics/' .  'Pandas') .  '>' . 'Pandas' . '</a></h3>';

$this->load->view($this->config->item('theme') . 'footer');
?>