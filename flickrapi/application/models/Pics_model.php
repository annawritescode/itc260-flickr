<?php
//application/models/Pics_model.php
class Pics_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


public function get_picss($tags = FALSE)
{//gets tags from flickr
        if ($tags === FALSE)
        {
                $query = $this->db->get('ci_tags');
                return $query->result_array();
        }

        $query = $this->db->get_where('ci_tags', array('tags' => $tags));
        //return $query->row_array();
    
    $api_key = 'a4197440d731718e6eabef31763c36a0';
    
    
$perPage = 25;

       $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
       $url.= '&api_key=' . $api_key;
       $url.= '&tags=' . $tags;
       $url.= '&per_page=' . $perPage;
       $url.= '&format=json';
       $url.= '&nojsoncallback=1';
       $response = json_decode(file_get_contents($url));
       $pics = $response->photos->photo;
       return $pics;   

    
    }// end get_pics()
    
    
    
public function set_pics()
    {
        $this->load->helper('url');

        $tags = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $tags,
            'text' => $this->input->post('text')
        );

        //return $this->db->insert('sp18_news', $data);
    
        if($this->db->insert('ci_tags', $data)) 
        {//data inserted, pass back slug and show
            return $tags;
        }else{//data not inserted, pass back warning
            return false;
        }
    
    }//end set_pics()
    
}//end Pics_model