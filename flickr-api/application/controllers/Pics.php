<?php
//application/contollers/Pics.php
class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
                $this->config->set_item('banner','Pics Page');
        }

       public function index()
       {
            $data['tags'] = 'Picture Categories';
            //$data['title'] = 'News archive';
           //paremeters ('item to change', 'what you want to name it')
            $this->config->set_item('tags','Pics');
            $this->load->view('pics/index', $data);
           
       }//end of index

       public function view($tags = NULL)
        {
          
                $data['pics'] = $this->pics_model->get_pics($tags);
                $data['title'] = 'Picture Categories';
           
                $this->config->set_item('title','Pics');
                $this->load->view('pics/view', $data);
             
        }//end of view
        
        
    
    
}// end pics class