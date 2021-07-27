<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Nilai extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("nilai_model");
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data["list_nilai"] = $this->nilai_model->tampilkandata()->result();
    $this->load->view("admin/nilai/list", $data);
  }


  public function add()
  {
    $data['pilihs_santri'] = $this->nilai_model->pilihan_santri()->result();
    $data['mapel'] = $this->nilai_model->mapelPilihan()->result();
    $nilai = $this->nilai_model;
    $validation = $this->form_validation;
    $validation->set_rules($nilai->rules());
    if ($validation->run()) {
      $nilai->save();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $this->load->view("admin/nilai/new_form", $data);
  }

  public function edit($id = null)
  {
    if (!isset($id)) redirect('admin/customer');
    $customer = $this->customer_model;
    $validation = $this->form_validation;
    $validation->set_rules($customer->rules());
    if ($validation->run()) {
      $customer->update();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $data["customer"] = $customer->getById($id);
    if (!$data["customer"]) show_404();
    $this->load->view("admin/customer/edit_form", $data);
  }

  public function delete($id = null)
  {
    if (!isset($id)) show_404();
    if ($this->customer_model->delete($id)) {
      redirect(site_url('admin/customer'));
    }
  }
}
