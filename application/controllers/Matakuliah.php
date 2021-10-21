<?php
class Matakuliah extends CI_Controller
{
    
    public function index()
    {
        
        $this->load->view('view_form_matakuliah');
    
    }
    
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode', 'required|min_length[3]',
        array(
            'required'      => '%s Wajib diisi.',
            'min_length'     => '%s Kode minimal 3 karakter.'
        ));
           
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]',
        array(
            'required'      => '%s Wajib diisi.',
            'min_length'     => '%s kode minimal 3.'
        ));

        $this->form_validation->set_rules('sks', 'sks', 'required',
        array(
            'required'      => '%s Wajib dipilih.'
        ));

        if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('view_form_matakuliah');
                }
                else
                {
                    $data = [
                        'kode' => $this->input->post('kode'),
                        'nama' => $this->input->post('nama'),
                        'sks' => $this->input->post('sks')
                    ];
                    $this->load->view('view_data_matakuliah', $data);
                }
    }
}