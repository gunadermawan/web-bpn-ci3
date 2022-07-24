<?php
class Home extends CI_Controller {
  public function index() {
  $this->load->view('templates_depan/header');
  $this->load->view('templates_depan/sidebar');
  $this->load->view('templates_depan/topbar');
  $this->load->view('user_depan/index');
  $this->load->view('templates_depan/footer');
  }

}
