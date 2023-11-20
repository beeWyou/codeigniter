<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Prodi
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Prodi_model');
    $this->load->model('Mahasiswa_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Prodi";
    $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("Prodi/vw_prodi", $data);
    $this->load->view("layout/footer", $data);
  }

  function tambah()
  {
    $data['judul'] = "Halaman Tambah Prodi";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('namap', 'Nama Prodi', 'required', [
    'required' => 'Nama Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruang', 'Ruangan', 'required', [
    'required' => 'Jurusan Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('jur', 'Jurusan', 'required', [
    'required' => 'Jurusan Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('akre', 'Jenis Kelamin', 'required', [
      'required' => 'Akreditasi prodi Wajib di isi',
    ]);
    $this->form_validation->set_rules('namaK', 'Prodi', 'required', [
    'required' => 'Nama Kaprodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('thn', 'Alamat', 'required', [
    'required' => 'Tahun Berdiri Prodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('lulus', 'Asal Sekolah', 'required', [
    'required' => 'Lulusan Prodi Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_tambah_prodi", $data);
    $this->load->view("layout/footer");
    } else {
    $data = [
      'nama' =>$this->input->post('namap'),
      'ruangan' => $this->input->post('ruang'),
      'jurusan' => $this->input->post('jur'),
      'akreditasi' => $this->input->post('akre'),
      'nama_kaprodi' => $this->input->post('namaK'),
      'tahun_berdiri' => $this->input->post('thn'),
      'output_lulusan' => $this->input->post('lulus'),
      ];
      $this->Prodi_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Data Prodi Berhasil Ditambah!</div>');
      redirect('Prodi');
    }
    // $data['judul'] = "Halaman Tambah Prodi";
    // $this->load->view("layout/header");
    // $this->load->view("Prodi/vw_tambah_prodi", $data);
    // $this->load->view("layout/footer");
  }
  // public function tambahprd(){
  //   $data = [
  //     'nama' =>$this->input->post('namap'),
  //     'ruangan' => $this->input->post('ruang'),
  //     'jurusan' => $this->input->post('jur'),
  //     'akreditasi' => $this->input->post('akre'),
  //     'nama_kaprodi' => $this->input->post('namaK'),
  //     'tahun_berdiri' => $this->input->post('thn'),
  //     'output_lulusan' => $this->input->post('lulus'),
      
  //   ];
  //   $this->Prodi_model->addprd($data,'prodi');
  //   redirect("Prodi");
  // }
  public function hapus($id){
    $this->Prodi_model->delete($id);
    redirect('Prodi');
  }
  public function edit($id){
    $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->Prodi_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_ubah_prodi", $data);
    $this->load->view("layout/footer");
  }
  public function update($id){
    $data = [
      'nama' =>$this->input->post('namap'),
      'ruangan' => $this->input->post('ruang'),
      'jurusan' => $this->input->post('jur'),
      'akreditasi' => $this->input->post('akre'),
      'nama_kaprodi' => $this->input->post('namaK'),
      'tahun_berdiri' => $this->input->post('thn'),
      'output_lulusan' => $this->input->post('lulus'),
      
    ];
    $this->Prodi_model->update($id,$data);
    redirect("Prodi");
  }
}


/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */