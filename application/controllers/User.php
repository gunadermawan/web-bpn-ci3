<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('email')) {
      redirect('auth');
    }
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['title'] = 'Profil';
    $this->db->from('user');
    $data['total_rows_user'] = $this->db->count_all_results();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');
  }
  public function dataasset()
  {
    $data['title'] = 'Data Asset';
    $this->load->model('Model_asset', 'asset');
    // ambil data keyword
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
      // SIMPAN KEDALAM SESSION
      $this->session->set_userdata('keyword', $data['keyword']);
    } else {
      $data['keyword'] = $this->session->userdata('keyword');
    }
    // pagination
    // menghitung jml database dengan model
    $this->db->order_by('id_asset', 'DESC');
    $this->db->like('nama_asset', $data['keyword']);
    $this->db->or_like('merk_asset', $data['keyword']);
    $this->db->or_like('serial_asset', $data['keyword']);
    $this->db->or_like('inventaris_asset', $data['keyword']);
    $this->db->or_like('kategori_asset', $data['keyword']);
    $this->db->from('tb_asset');
    $config['total_rows'] = $this->db->count_all_results();
    // per_page digunakan untuk menentukan berapa bnyk data yg akan tampil
    // ditiap pagination
    $config['per_page'] = 5;
    $data['total_rows'] = $config['total_rows'];
    // per_page_start untuk memulai dari mana paginationnys
    $data['per_page_start'] = $this->uri->segment(3);
    $data['asset'] = $this->asset->get_data($config['per_page'], $data['per_page_start'], $data['keyword']);
    $config['attributes'] = array('class' => 'page-link');
    // inisalisasi pagination
    $this->pagination->initialize($config);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('user/assetdata', $data);
    $this->load->view('templates/footer');
  }
  public function tambahdata()
  {
    // validasi inputan
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('model', 'Model', 'required|trim');
    $this->form_validation->set_rules('merk', 'Merk', 'required|trim');
    $this->form_validation->set_rules('sn', 'Sn', 'required|trim');
    $this->form_validation->set_rules('inventaris', 'Inventaris', 'required|trim');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
    $this->form_validation->set_rules('jml', 'Jml', 'required|trim');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
    // $this->form_validation->set_rules('gambar','Gambar','required|trim');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Data Asset';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
      $data['keterangan'] = ['ISLAM', 'KATOLIK', 'KRISTEN', 'HINDHU', 'BUDHA', 'Lainya'];
      $data['kategori'] = ['Pengajuan surat akta tanah'];
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/tambahdata', $data);
      $this->load->view('templates/footer');
    } else {
      $name = $this->input->post('name');
      $model = $this->input->post('model');
      $merk = $this->input->post('merk');
      $sn = $this->input->post('sn');
      $inventaris = $this->input->post('inventaris');
      $keterangan = $this->input->post('keterangan');
      $jml = $this->input->post('jml');
      $kategori = $this->input->post('kategori');
      $gambar = $_FILES['gambar']['name'];
      if ($gambar = '') {
      } else {
        $config['upload_path'] = './uploads/dataasset/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name']     = true;
        $config['overwrite']     = true;
        $config['max_size']      = 5000;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
          echo "upload gambar gagal!";
        } else {
          $gambar = $this->upload->data('file_name');
        }
      }
      // memasukan data kedalam array
      $data = array(
        'nama_asset'    => $name,
        'model_asset'   => $model,
        'merk_asset'    => $merk,
        'serial_asset'  => $sn,
        'inventaris_asset' => $inventaris,
        'keterangan_asset' => $keterangan,
        'jml_asset'       => $jml,
        'date_asset'    => time(),
        'kategori_asset'  => $kategori,
        'gambar_asset'    => $gambar
      );
      // input ke db
      $this->Model_asset->tambahdata($data, 'tb_asset');
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah data berhasil!</div>');
      redirect('user/tambahdata');
    }
  }

  public function hapus($id)
  {
    $this->Model_asset->hapusData($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil dihapus!</div>');
    redirect('user/dataasset');
  }

  public function ubah($id)
  {
    $data['title'] = 'Ubah Data';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
    $data['asset'] = $this->Model_asset->getId($id);
    $data['keterangan'] = ['ISLAM', 'KATOLIK', 'HINDHUX', 'BUDHA', 'LAINYA'];
    $data['kategori'] = [
      'Pengajuan surat akta tanah'
    ];
    // validasi inputan
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('model', 'Model', 'required|trim');
    $this->form_validation->set_rules('merk', 'Merk', 'required|trim');
    $this->form_validation->set_rules('sn', 'Sn', 'required|trim');
    $this->form_validation->set_rules('inventaris', 'Inventaris', 'required|trim');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');
    $this->form_validation->set_rules('jml', 'Jml', 'required|trim');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
    // $this->form_validation->set_rules('gambar','Gambar','required|trim');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('user/ubah', $data);
      $this->load->view('templates/footer');
    } else {
      // input ke db
      $this->Model_asset->ubahData();
      $this->session->set_flashdata('message', '<div class="badge badge-pill badge-success">Ubah data berhasil!</div>');
      redirect('user/dataasset');
    }
  }

  public function _print()
  {
    $data['asset'] = $this->Model_asset->tampil_data('tb_asset');
    $this->load->view('user/cetak_data', $data);
  }

  public function print_pdf()
  {
    $this->load->library('dompdf_gen');
    $data['asset'] = $this->Model_asset->tampil_data('tb_asset');
    $this->load->view('user/print_pdf', $data);
    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
    // convert pdf
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan-asset-data.pdf", array('Attachment' => 0));
  }
  public function cetak($id)
  {
    $this->load->library('dompdf_gen');
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
    $data['asset'] = $this->Model_asset->getId($id);
    $this->load->view('user/cetak', $data);
    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
    // convert pdf
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan-asset-data.pdf", array('Attachment' => 0));
  }
  public function print_excel()
  {
    $data['asset'] = $this->Model_asset->tampil_data('tb_asset');
    $this->load->view('user/print_excel', $data);
  }
}
