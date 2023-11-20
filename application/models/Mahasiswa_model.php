<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model {

  public $table = 'mahasiswa';
  public $ID = 'Mahasiswa_id';
 
  public function __construct()
  {
    parent::__construct();
  }
  public function get(){
    $this->db->from($this->table);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function getById($id){
    $this->db->from($this->table);
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->row_array();
  }
  public function update($id, $data){
    $this->db->where('id', $id);
    $this->db->update($this->table, $data);
  }
  public function insert($data){
    $this->db->insert($this->table, $data);
    // return $this->db->insert_rows();
  }
  public function delete($id){
    return $this->db->delete($this->table, ['id' => $id]);
  }
  public function addMhs($data,$table) {
    return $this->db->insert($table, $data);
  }
//   public function mhsprodi($id) {
//      $this->db->select('m.*,p.nama as prodi');
//      $this->db->from('mhs m');
//      $this->db->join('prodi p','m.prodi=p.id');
//      $this->db->where('m.id', $id);
//      $query = $this->db->get();
//      $result = $query->result();
//      return $result;
// }
  public function index()
  {

  }

}