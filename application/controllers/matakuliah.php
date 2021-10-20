<?php
class Matakuliah extends CI_Controller
{
    
    public function index()
    {
        
        $this->load->view('view-form-matakuliah');
    
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode', 'required|min_length[3]',
        array(
            'required'      => '%s Wajib diisi.',
            'min_length'     => '%s Kode terlalu pendek.'
        ));
           
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]',
        array(
            'required'      => '%s Wajib diisi.',
            'min_length'     => '%s terlalu pendek.'
        ));

        $this->form_validation->set_rules('sks', 'Sks', 'required',
        array(
            'required'      => '%s Wajib dipilih.'
        ));

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('view-form-matakuliah');
                }
                else
                {
                    $data = [
                        'kode' => $this->input->post('kode'),
                        'nama' => $this->input->post('nama'),
                        'sks' => $this->input->post('sks')
                    ];
                    $this->load->view('view-data-matakuliah', $data);
                }
        }
    }