<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Kuis
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

class Kuis extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("layout/kuis_header");
    $this->load->view("kuis/vw_beranda");
  }
  public function daftar()
  {
    $this->load->view("layout/kuiss_header");
    $this->load->view("kuis/vw_daftar");
  }
}


/* End of file Kuis.php */
/* Location: ./application/controllers/Kuis.php */