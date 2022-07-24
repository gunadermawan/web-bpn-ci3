<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Silahkan Login';
      $this->load->view('templates_auth/header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates_auth/footer');
    } else {
      $this->_login();
      // validasi berhasil
      // login menggunakan controler lain biar codingnya ga terlalu panjang
      // _buat tanda jika method ini adalah private(opsinal)
    }
  }
  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    // jika usernya ada
    if ($user) {
      // usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          // cek role id
          if ($user['role_id'] == 1) {
            redirect('admin');
          } else {
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata Sandi salah!</div>');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">surel belum di aktivasi </div>');
        redirect('auth');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">surel tidak terdaftar! </div>');
      redirect('auth');
    }
  }
  public function register()
  {
    // name (name di form input),Name(nama lain dari name di form input),required(form hrs diisi),trim(gaboleh ada spasi yang masuk ke db)
    // is_unique[tabel.filed yang mau dicek udh ada datanya apa belom]
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
      'is_unique' => 'Surel ini sudah terdaftar,silahkan ganti dengan yang lain!'
    ]);
    $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[8]|matches[password2]', [
      'matchest' => 'kata sandi tidak sama!',
      'min_length' => 'kata sandi terlalu singkat!'
    ]);
    $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Register member';
      $this->load->view('templates_auth/header', $data);
      $this->load->view('auth/register');
      $this->load->view('templates_auth/footer');
    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('username', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'image' => 'default.png',
        // encrypt password
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'is_active' => 1,
        'date_created' => time()
      ];
      // insert db
      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat ! Pendaftaran berhasil,silahkan login</div>');
      redirect('auth');
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role_id');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> berhasil keluar !</div>');
    redirect('auth/');
  }
  public function blocked()
  {
    $this->load->view('auth/blocked');
  }
}
