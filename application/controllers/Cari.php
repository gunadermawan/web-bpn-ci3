<?php
class Cari extends CI_Controller
{
  public function __construct()
  {
    // parent::__construct() wajib kalo buat construct
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Selamat Datang';
    $this->load->model('Model_asset', 'asset');
    //ambil data locale_get_keyword
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
      //SIMPAN KEDALAM SESSION
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }
    $this->db->like('nama_asset', $data['keyword']);
    $this->db->or_like('merk_asset', $data['keyword']);
    $this->db->or_like('serial_asset', $data['keyword']);
    $this->db->or_like('inventaris_asset', $data['keyword']);
    $this->db->or_like('kategori_asset', $data['keyword']);
    $this->db->from('tb_asset');
    $config['total_rows'] = $this->db->count_all_results();
    $config['per_page'] = 3;
    // pagination
    $config['base_url'] = 'http://localhost/web-bpn/cari/index/';
    // menghitung jml database dengan model
    $config['num_links'] = 4;
    // styling pagination
    $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center" >';
    $config['full_tag_close'] = '</ul></nav>';
    $config['first_link'] = 'Awal';
    $config['first_tag_open'] = '<li class="page-item" >';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = 'Akhir';
    $config['last_tag_open'] = '<li class="page-item" >';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item" >';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item" >';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" style="background-color:#003e69;" href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item ">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');
    $data['total_rows'] = $config['total_rows'];
    $data['per_page_start'] = $this->uri->segment(5);
    $data['asset'] = $this->asset->get_data($config['per_page'], $data['per_page_start'], $data['keyword']);
    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);
    $this->load->view('templates_depan/header', $data);
    $this->load->view('templates_depan/sidebar');
    $this->load->view('templates_depan/topbar');
    $this->load->view('cari/index', $data);
    $this->load->view('templates_depan/footer');
  }
}
