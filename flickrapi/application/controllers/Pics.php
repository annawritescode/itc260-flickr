<?php
//application/contollers/Pics.php
class Pics_model extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->load->helper('url_helper');
                $this->config->set_item('banner','Panda pics');
        }// end constructor

       public function index()
       {
            $data['tags'] = $this->pics_model->get_pics();
            //$data['title'] = 'News archive';
           $data['tags'] = 'Picture Categories';
           //paremeters ('item to change', 'what you want to name it')
            $this->config->set_item('tags','pics');
            $this->load->view('pics/index', $data);
           
       }//end of index

       public function view($tags = NULL)
        {// shows individual category
          
                $data['pics'] = $this->pics_model->get_pics($tags);
                $data['title'] = 'Picture Categories'

               /* if (empty($data['news_item']))
                {
                        show_404();
                }*/

               // $data['title'] = $data['news_item']['title'];
                    
                $this->config->set_item('title','Pics');
                $this->load->view('pics/view', $data);
             
        }//end of view
        
   
    
    
}// end pic class