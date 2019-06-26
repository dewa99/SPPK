<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Calon_aslab extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Calon_aslab_model');
    } 

    /*
     * Listing of calon_aslab
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('calon_aslab/index?');
        $config['total_rows'] = $this->Calon_aslab_model->get_all_calon_aslab_count();
        $this->pagination->initialize($config);

        $data['calon_aslab'] = $this->Calon_aslab_model->get_all_calon_aslab($params);
        
        $data['_view'] = 'calon_aslab/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new calon_aslab
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required|max_length[32]');
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required|max_length[50]');
		$this->form_validation->set_rules('nim','Nim','required|max_length[12]');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required|max_length[50]');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('hp','Hp','required|max_length[15]');
		$this->form_validation->set_rules('email','Email','required|max_length[50]|valid_email');
		$this->form_validation->set_rules('motto','Motto','required|max_length[255]');
		$this->form_validation->set_rules('motivasi','Motivasi','required|max_length[255]');
		$this->form_validation->set_rules('ipk','Ipk','required|numeric');
		$this->form_validation->set_rules('nilai_algo1','Nilai Algo1','integer');
		$this->form_validation->set_rules('nilai_algo2','Nilai Algo2','integer');
		$this->form_validation->set_rules('nilai_pbo1','Nilai Pbo1','integer');
		$this->form_validation->set_rules('nilai_pbo2','Nilai Pbo2','integer');
		$this->form_validation->set_rules('nilai_perweb','Nilai Perweb','integer');
		$this->form_validation->set_rules('nilai_pemweb','Nilai Pemweb','integer');
		$this->form_validation->set_rules('Alasan','Alasan','integer');
		$this->form_validation->set_rules('Sikap','Sikap','integer');
		$this->form_validation->set_rules('alamat','Alamat','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nilai_algo1' => $this->input->post('nilai_algo1'),
				'nilai_algo2' => $this->input->post('nilai_algo2'),
				'nilai_pbo1' => $this->input->post('nilai_pbo1'),
				'nilai_pbo2' => $this->input->post('nilai_pbo2'),
				'nilai_perweb' => $this->input->post('nilai_perweb'),
				'nilai_pemweb' => $this->input->post('nilai_pemweb'),
				'Alasan' => $this->input->post('Alasan'),
				'Sikap' => $this->input->post('Sikap'),
				'password' => $this->input->post('password'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'nim' => $this->input->post('nim'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'hp' => $this->input->post('hp'),
				'email' => $this->input->post('email'),
				'motto' => $this->input->post('motto'),
				'motivasi' => $this->input->post('motivasi'),
				'ipk' => $this->input->post('ipk'),
				'alamat' => $this->input->post('alamat'),
            );
            
            $calon_aslab_id = $this->Calon_aslab_model->add_calon_aslab($params);
            redirect('calon_aslab/index');
        }
        else
        {
			$this->load->model('Nilai_model');
			$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
			$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
			$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
			$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
			$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
			$data['all_nilai'] = $this->Nilai_model->get_all_nilai();

			$this->load->model('Alasan_model');
			$data['all_alasan'] = $this->Alasan_model->get_all_alasan();

			$this->load->model('Sikap_model');
			$data['all_sikap'] = $this->Sikap_model->get_all_sikap();
            
            $data['_view'] = 'calon_aslab/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a calon_aslab
     */
    function edit($id)
    {   
        // check if the calon_aslab exists before trying to edit it
        $data['calon_aslab'] = $this->Calon_aslab_model->get_calon_aslab($id);
        
        if(isset($data['calon_aslab']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required|max_length[32]');
			$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required|max_length[50]');
			$this->form_validation->set_rules('nim','Nim','required|max_length[12]');
			$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required|max_length[50]');
			$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
			$this->form_validation->set_rules('hp','Hp','required|max_length[15]');
			$this->form_validation->set_rules('email','Email','required|max_length[50]|valid_email');
			$this->form_validation->set_rules('motto','Motto','required|max_length[255]');
			$this->form_validation->set_rules('motivasi','Motivasi','required|max_length[255]');
			$this->form_validation->set_rules('ipk','Ipk','required|numeric');
			$this->form_validation->set_rules('nilai_algo1','Nilai Algo1','integer');
			$this->form_validation->set_rules('nilai_algo2','Nilai Algo2','integer');
			$this->form_validation->set_rules('nilai_pbo1','Nilai Pbo1','integer');
			$this->form_validation->set_rules('nilai_pbo2','Nilai Pbo2','integer');
			$this->form_validation->set_rules('nilai_perweb','Nilai Perweb','integer');
			$this->form_validation->set_rules('nilai_pemweb','Nilai Pemweb','integer');
			$this->form_validation->set_rules('Alasan','Alasan','integer');
			$this->form_validation->set_rules('Sikap','Sikap','integer');
			$this->form_validation->set_rules('alamat','Alamat','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nilai_algo1' => $this->input->post('nilai_algo1'),
					'nilai_algo2' => $this->input->post('nilai_algo2'),
					'nilai_pbo1' => $this->input->post('nilai_pbo1'),
					'nilai_pbo2' => $this->input->post('nilai_pbo2'),
					'nilai_perweb' => $this->input->post('nilai_perweb'),
					'nilai_pemweb' => $this->input->post('nilai_pemweb'),
					'Alasan' => $this->input->post('Alasan'),
					'Sikap' => $this->input->post('Sikap'),
					'password' => $this->input->post('password'),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'nim' => $this->input->post('nim'),
					'tempat_lahir' => $this->input->post('tempat_lahir'),
					'tanggal_lahir' => $this->input->post('tanggal_lahir'),
					'hp' => $this->input->post('hp'),
					'email' => $this->input->post('email'),
					'motto' => $this->input->post('motto'),
					'motivasi' => $this->input->post('motivasi'),
					'ipk' => $this->input->post('ipk'),
					'alamat' => $this->input->post('alamat'),
                );

                $this->Calon_aslab_model->update_calon_aslab($id,$params);            
                redirect('calon_aslab/index');
            }
            else
            {
				$this->load->model('Nilai_model');
				$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
				$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
				$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
				$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
				$data['all_nilai'] = $this->Nilai_model->get_all_nilai();
				$data['all_nilai'] = $this->Nilai_model->get_all_nilai();

				$this->load->model('Alasan_model');
				$data['all_alasan'] = $this->Alasan_model->get_all_alasan();

				$this->load->model('Sikap_model');
				$data['all_sikap'] = $this->Sikap_model->get_all_sikap();

                $data['_view'] = 'calon_aslab/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The calon_aslab you are trying to edit does not exist.');
    } 

    /*
     * Deleting calon_aslab
     */
    function remove($id)
    {
        $calon_aslab = $this->Calon_aslab_model->get_calon_aslab($id);

        // check if the calon_aslab exists before trying to delete it
        if(isset($calon_aslab['id']))
        {
            $this->Calon_aslab_model->delete_calon_aslab($id);
            redirect('calon_aslab/index');
        }
        else
            show_error('The calon_aslab you are trying to delete does not exist.');
    }
    
}