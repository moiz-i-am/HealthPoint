 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() 
	{
		
		$getsettings = $this->db->get('tbl_settings')->result_array();
		$data['getsevices'] = $this->db->get('tbl_services')->result_array();
		$data['getproperties'] = $this->db->get('sliders')->result_array();
        
        $settings = array();
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/bloglisting';
		$this->load->view('main',$data);
	}

	public function about_us()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
		$data['ourteam'] = $this->db->get('testimonial')->result_array();
		$data[] = $this->db->get('pages')->result_array();

		//$data['ourteam'] = $this->db->get_where('testimonial', array('id' => $id))->result_array();
		//$data['ourteam'] = $this->db->limit(3)->where('id',$id)->get('testimonial')->result_array();
        

        $settings = array();
        
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }

        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/aboutus';
		$this->load->view('main',$data);
	}

	public function our_team()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
		$data['ourteam'] = $this->db->get('testimonial')->result_array();
        
        $settings = array();
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/ourteam';
		$this->load->view('main',$data);
	}

	public function projects()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
        $settings = array();
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/projects';
		$this->load->view('main',$data);
	}


	public function maps()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
        $settings = array();
        
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/maps';
		$this->load->view('main',$data);
	}

	public function bloglisting()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
        $settings = array();
        
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
        $data['blogs']=$this->db->get('blog')->result_array();
		$data['page_content'] = 'pages/bloglisting';
		$this->load->view('main',$data);
	}

	public function blogdetail($slug = NULL)
	{
            
		$getsettings = $this->db->get('tbl_settings')->result_array();
        $settings = array();
        
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
           $data['blogs']=$this->db->where('slug',$slug)->get('blog')->row();
		$data['page_content'] = 'pages/blogdetail';
		$this->load->view('main',$data);
	}

	public function contactus()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
        $settings = array();
        
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/contactus';
		$this->load->view('main',$data);
	}
	

	public function properties()
	{
		$getsettings = $this->db->get('tbl_settings')->result_array();
        $settings = array();
        
        foreach ($getsettings as $content) {
            $settings[$content['field_name']] = $content['value'];
        }
        $data['getsettingData'] = $settings;
		$data['page_content'] = 'pages/properties';
		$this->load->view('main',$data);
	}
}