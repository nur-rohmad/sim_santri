<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mapel extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('mapel_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    // jika form login disubmit
    $data['list_mapel'] = $this->mapel_model->data_mapel()->result();
    $this->load->view('admin/mapel/list', $data);
  }

  public function add()
  {
    $mapel = $this->mapel_model;
    $validation = $this->form_validation;
    $validation->set_rules($mapel->rules());
    if ($validation->run()) {
      $mapel->save();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $this->load->view("admin/mapel/new_form");
  }

  public function edit($id_mapel = null)
  {
    if (!isset($id_mapel)) redirect('mapel');
    $mapel = $this->mapel_model;
    $validation = $this->form_validation;
    $validation->set_rules($mapel->rules());
    if ($validation->run()) {
      $mapel->update();
      $this->session->set_flashdata('success', 'Berhasil disimpan');
    }
    $data["mapel"] = $mapel->getById($id_mapel);
    if (!$data["mapel"]) show_404();
    $this->load->view("admin/mapel/edit_form", $data);
  }

  public function delete($id_mapel = null)
  {
    if (!isset($id_mapel)) show_404();
    if ($this->mapel_model->delete($id_mapel)) {
      redirect(site_url('admin/mapel'));
    }
  }
}
