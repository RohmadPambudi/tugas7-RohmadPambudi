<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class mahasiswa extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        
        $this->load->view('input_mahasiswa');
    }

    public function print()
    {
        $this->form_validation->set_rules('Nama', 'Nama Mahasiswa',
        'required|min_length[3]', [
            'required' => 'Nama Mahasiswa Harus diisi',
            'min_length' => 'Nama terlalu pendek',
        ]);
     
        $this->form_validation->set_rules('NIM', 'Nomor Induk Mahasiswa',
        'required', [
            'required' => 'Nomor Induk Mahasiswa Harus diisi',
            
        ]);

        $this->form_validation->set_rules('kls', 'Kelas',
        'required', [
            'required' => 'Kelas Harus diisi',
            
        ]);

        $this->form_validation->set_rules('tempat', 'Tempat Lahir',
        'required', [
            'required' => 'Tempat Lahir Harus diisi',
        
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat',
        'required|min_length[4]', [
            'required' => 'Alamat Harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);

        
        if ($this->form_validation->run() != true) 
        {
            $this->load->view('input_mahasiswa');
        }
        else
        {
            $data = [
                        'Nama' => $this->input->post('Nama'),
                        'NIM' => $this->input->post('NIM'),
                        'kls' => $this->input->post('kls'),
                        'lahir' => $this->input->post('lahir'),
                        'tempat' => $this->input->post('tempat'),
                        'alamat' => $this->input->post('alamat'),
                        'jenis' => $this->input->post('jenis'),
                        'agama' => $this->input->post('agama')
                    ];
            $this->load->view('output_mahasiswa', $data);
        }
    }
}