<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_mahasiswa", $data);
    $this->load->view("layout/footer", $data);
  }
  function tambah()
  {
    $data['judul'] = "Halaman Tambah Mahasiswa";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
    'required' => 'Nama Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('nim', 'NIM', 'required', [
    'required' => 'NIM Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required', [
    'required' => 'Email Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
      'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',
    ]);
    $this->form_validation->set_rules('prodi', 'Prodi', 'required', [
    'required' => 'Prodi Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
    'required' => 'Alamat Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
    'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
    ]);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
    'required' => 'NO HP Mahasiswa Wajib di isi',
    'integer' => 'NO HP harus Angka'
    ]);
    if ($this->form_validation->run() == false) {
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
    $this->load->view("layout/footer");
    } else {
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'no_hp' => $this->input->post('no_hp'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
      ];
      $this->Mahasiswa_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
      redirect('Mahasiswa');
    }
    // $data['judul'] = "Halaman Tambah Mahasiswa";
    // $this->load->view("layout/header");
    // $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
    // $this->load->view("layout/footer");
  }
  // public function tambahData(){
  //   $data = [
  //     'nama' =>$this->input->post('nama'),
  //     'nim' => $this->input->post('nim'),
  //     'jenis_kelamin' => $this->input->post('jenis_kelamin'),
  //     'email' => $this->input->post('email'),
  //     'prodi' => $this->input->post('prodi'),
  //     'asal_sekolah' => $this->input->post('asal_sekolah'),
  //     'no_hp' => $this->input->post('no_hp'),
  //     'alamat' => $this->input->post('alamat'),
      
  //   ];
  //   $this->Mahasiswa_model->addMhs($data,'mahasiswa');
  //   redirect("Mahasiswa");
  // }
  public function detail($id)
  {
    // $data['records'] = $this->Mahasiswa_model->mhsprodi($id, 'mahasiswa');
    $data['judul'] = "Halaman Detail Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id){
    $this->Mahasiswa_model->delete($id);
    redirect('Mahasiswa');
  }
  public function edit($id){
    $data['judul'] = "Halaman Edit Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function update($id){
    $data = [
      'nama' =>$this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'asal_sekolah' => $this->input->post('asal_sekolah'),
      'no_hp' => $this->input->post('no_hp'),
      'alamat' => $this->input->post('alamat'),
      
    ];
    $this->Mahasiswa_model->update($id,$data);
    redirect("Mahasiswa");
  }
}



/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */