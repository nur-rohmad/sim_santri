<?php
class Santri extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("santri_model");
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data["daftar_santri"] = $this->santri_model->getAll();
    $this->load->view('admin/santri/daftarsantri', $data);
  }

  public function Add()
  {
    $santri = $this->santri_model;
    $validation = $this->form_validation;
    $validation->set_rules($santri->rules());
    if ($validation->run()) {
      $santri->save();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $this->load->view('admin/santri/new_santri');
  }

  public function edit($no_induk = null)
  {
    if (!isset($no_induk)) redirect('santri');
    $santri = $this->santri_model;
    $validation = $this->form_validation;
    $validation->set_rules($santri->rules());
    if ($validation->run()) {
      $santri->update();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $data["santri"] = $santri->getById($no_induk);
    if (!$data["santri"]) show_404();
    $this->load->view("admin/santri/edit_santri", $data);
  }

  public function delete($no_induk = null)
  {
    if (!isset($no_induk)) show_404();
    if ($this->santri_model->delete($no_induk)) {
      redirect(site_url('admin/santri'));
    }
  }

  public function santri_detail($no_induk = null)
  {
    $data["profil_lengkap"] = $this->santri_model->detail_santri($no_induk)->result();
    $data["nilai_santri"] = $this->santri_model->tampilkannilai($no_induk)->result();
    $this->load->view('admin/santri/detail_santri', $data);
  }
}
