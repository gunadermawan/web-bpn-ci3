<?php
  class Model_asset extends CI_Model {
    public function tampil_data() {
        return $this->db->get('tb_asset')->result_array();
    }
    // hapus data
    public function hapusData($id) {
        $this->db->where('id_asset',$id);
        $this->db->delete('tb_asset');
    }
    // get ID
    public function getId($id) {
      return $this->db->get_where('tb_asset',['id_asset' => $id])->row_array();
    }
    // update db
    public function ubahData() {
      $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {} else {
          $config ['upload_path'] = './uploads/dataasset/';
          $config ['allowed_types'] = 'jpg|png|jpeg';
          $config['encrypt_name'] 		= true;
          $config ['overwrite']     = true;
          $config ['max_size']      = 5000;
          $this->load->library('upload',$config);
          if (!$this->upload->do_upload('gambar')) {
            echo "upload gambar gagal!";
          } else {
            $gambar = $this->upload->data('file_name');
          }
        }
      $data = [
        "nama_asset" => $this->input->post('name'),
        "model_asset" => $this->input->post('model'),
        "merk_asset" => $this->input->post('merk'),
        "serial_asset" =>  $this->input->post('sn'),
        "inventaris_asset" => $this->input->post('inventaris'),
        "keterangan_asset" => $this->input->post('keterangan'),
        "jml_asset" => $this->input->post('jml'),
        "kategori_asset" => $this->input->post('kategori'),
        "gambar_asset" => $gambar
      ];
      // masuk kedalam db
      $this->db->where('id_asset',$this->input->post('id'));
      $this->db->update('tb_asset',$data);
    }
    public function get_data($limit,$start,$keyword = null) {
      if ($keyword) {
        $this->db->like('nama_asset',$keyword);
        $this->db->or_like('merk_asset',$keyword);
        $this->db->or_like('serial_asset',$keyword);
        $this->db->or_like('inventaris_asset',$keyword);
        $this->db->or_like('kategori_asset',$keyword);
      }
      $this->db->order_by('id_asset','DESC');
      return $this->db->get('tb_asset',$limit,$start)->result_array();
    }

    public function tambahdata($data,$table) {
      $this->db->insert($table,$data);
    }
    public function get_keyword($keyword) {
      $this->db->select('*');
      $this->db->from('tb_asset');
      $this->db->like('nama_asset',$keyword);
      $this->db->or_like('model_asset',$keyword);
      $this->db->or_like('merk_asset',$keyword);
      $this->db->or_like('serial_asset',$keyword);
      $this->db->or_like('inventaris_asset',$keyword);
      $this->db->or_like('kategori_asset',$keyword);
      return $this->db->get()->result();
    }
  }
?>
