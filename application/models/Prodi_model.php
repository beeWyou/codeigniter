<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prodi_model extends CI_Model {

  public $table = 'prodi';
  public $ID = 'Prodi_id';
 
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
    // $this->db->where($this->id, $id);
    // $this->db->delete($this->table);
    // return $this->db->affected_rows();
    return $this->db->delete($this->table, ['id' => $id]);
  }
  public function addprd($data,$table) {
    return $this->db->insert($table, $data);
  }
  public function index()
  {

  }

}

/* End of file Mahasiswa_model_model.php */
/* Location: ./application/models/Mahasiswa_model_model.php */