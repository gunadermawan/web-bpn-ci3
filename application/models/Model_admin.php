<?php
class Model_admin extends CI_Model
{
  public function tampil_data()
  {
    return $this->db->get('user');
  }
  public function tampil_data_leader()
  {
    return $this->db->get('leader');
  }
  public function register($data, $table)
  {
    $this->db->insert($table, $data);
  }
  public function hapusData($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}
