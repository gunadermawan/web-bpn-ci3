<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Beranda';
    $this->db->from('tb_asset');
    $config['total_rows'] = $this->db->count_all_results();
    $this->db->from('user');
    $data['total_rows_user'] = $this->db->count_all_results();
    $data['total_rows'] = $config['total_rows'];
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

  public function user()
  {
    $data['register'] = $this->Model_admin->tampil_data()->result();
    $data['title'] = 'Tambah Pengguna';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/user', $data);
    $this->load->view('templates/footer');
  }
  public function register()
  {
    // name (name di form input),Name(nama lain dari name di form input),required(form hrs diisi),trim(gaboleh ada spasi yang masuk ke db)
    // is_unique[tabel.filed yang mau dicek udh ada datanya apa belom]
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'this email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[8]|matches[password2]', [
      'matchest' => 'password dont match!',
      'min_length' => 'password too short!'
    ]);
    $this->form_validation->set_rules('status', 'Status', 'required|trim');
    $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
    $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
    $data['register'] = $this->Model_admin->tampil_data()->result();
    if ($this->form_validation->run() == false) {
      $data['status'] = ['Active', 'Non-Active'];
      $data['jabatan'] = ['admin', 'user'];
      $data['title'] = 'Tambah Pengguna';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/register', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.png',
        // encrypt password
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        // role id ambil dari input
        'role_id' => 2,
        // is_active jg ambil dari input
        'is_active' => 1,
        // time() nanti tinggal di panggil leat syntax php buat nampilin waktu
        'date_created' => time()
      ];
      // insert db
      if ($this->db->insert('user', $data)) {
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat ! Pendaftaran berhasi anggota berhasil!</div>');
        redirect('admin/user');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pendaftaran Gagal!</div>');
        redirect('admin/register');
      }
    }
  }
  public function delete($id)
  {
    $this->Model_admin->hapusData($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data berhasil dihapus!</div>');
    redirect('admin/user');
  }
  // backup Database
  public function backup()
  {
    // load utilitas Database
    $this->load->dbutil();
    // konfigurasi untuk menyimpan backup db
    $config = array(
      'format' => 'zip',
      'filename' => 'db-it-bytg.sql'
    );
    $backup = $this->dbutil->backup($config);
    $database_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.sql.gz';
    $save =  './uploads/dataasset/' . $database_name;

    $this->load->helper('file');
    write_file($save, $backup);

    $this->load->helper('download');
    force_download($database_name, $backup);
  }
}
